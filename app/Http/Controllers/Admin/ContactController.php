<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ContactController extends Controller
{
    public function index(Request $request): View
    {
        $contacts = Contact::query()
            ->when($request->filled('q'), function ($query) use ($request): void {
                $term = $request->string('q');
                $query->where(function ($innerQuery) use ($term): void {
                    $innerQuery
                        ->where('nom', 'like', '%' . $term . '%')
                        ->orWhere('email', 'like', '%' . $term . '%');
                });
            })
            ->when($request->filled('date'), function ($query) use ($request): void {
                $query->whereDate('created_at', $request->date);
            })
            ->latest()
            ->paginate(10)
            ->withQueryString();

        return view('admin.contacts.index', compact('contacts'));
    }
}
