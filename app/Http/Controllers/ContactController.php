<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ContactController extends Controller
{
    public function create(): View
    {
        return view('pages.contact');
    }

    public function store(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'nom' => ['required', 'string', 'max:100'],
            'email' => ['required', 'email', 'max:255'],
            'message' => ['required', 'string'],
        ]);

        Contact::create($validated);

        return redirect()
            ->route('contact.create')
            ->with('success', 'Votre message a été envoyé avec succès. Nous vous contacterons bientôt.');
    }
}
