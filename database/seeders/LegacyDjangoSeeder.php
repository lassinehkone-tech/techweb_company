<?php

namespace Database\Seeders;

use App\Models\Contact;
use App\Models\Projet;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class LegacyDjangoSeeder extends Seeder
{
    public function run(): void
    {
        $legacyDatabase = env('DJANGO_DB_DATABASE', base_path('../techweb_company/db.sqlite3'));

        if (! File::exists($legacyDatabase)) {
            return;
        }

        $legacy = DB::connection('sqlite_import');

        if ($legacy->getSchemaBuilder()->hasTable('website_contact')) {
            $legacy->table('website_contact')->orderBy('id')->get()->each(function ($contact): void {
                Contact::updateOrCreate(
                    [
                        'email' => $contact->email,
                        'created_at' => $contact->date,
                    ],
                    [
                        'nom' => $contact->nom,
                        'message' => $contact->message,
                        'updated_at' => $contact->date,
                    ]
                );
            });
        }

        if ($legacy->getSchemaBuilder()->hasTable('website_projet')) {
            $legacy->table('website_projet')->orderBy('id')->get()->each(function ($projet): void {
                Projet::updateOrCreate(
                    ['titre' => $projet->titre],
                    [
                        'description' => $projet->description,
                        'image' => $projet->image ? 'portfolio/' . basename($projet->image) : null,
                        'technologie' => $projet->technologie,
                    ]
                );
            });
        }
    }
}
