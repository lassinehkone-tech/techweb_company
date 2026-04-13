<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Projet;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\View\View;

class ProjetController extends Controller
{
    public function index(Request $request): View
    {
        $projets = Projet::query()
            ->when($request->filled('q'), function ($query) use ($request): void {
                $term = $request->string('q');
                $query->where(function ($innerQuery) use ($term): void {
                    $innerQuery
                        ->where('titre', 'like', '%' . $term . '%')
                        ->orWhere('technologie', 'like', '%' . $term . '%');
                });
            })
            ->latest()
            ->paginate(10)
            ->withQueryString();

        return view('admin.projets.index', compact('projets'));
    }

    public function create(): View
    {
        return view('admin.projets.create', ['projet' => new Projet()]);
    }

    public function store(Request $request): RedirectResponse
    {
        $data = $this->validatedData($request);

        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('portfolio', 'public');
        }

        Projet::create($data);

        return redirect()->route('admin.projets.index')->with('success', 'Projet ajouté avec succès.');
    }

    public function edit(Projet $projet): View
    {
        return view('admin.projets.edit', compact('projet'));
    }

    public function update(Request $request, Projet $projet): RedirectResponse
    {
        $data = $this->validatedData($request);

        if ($request->hasFile('image')) {
            if ($projet->image) {
                Storage::disk('public')->delete($projet->image);
            }

            $data['image'] = $request->file('image')->store('portfolio', 'public');
        }

        $projet->update($data);

        return redirect()->route('admin.projets.index')->with('success', 'Projet mis à jour avec succès.');
    }

    public function destroy(Projet $projet): RedirectResponse
    {
        if ($projet->image) {
            Storage::disk('public')->delete($projet->image);
        }

        $projet->delete();

        return redirect()->route('admin.projets.index')->with('success', 'Projet supprimé avec succès.');
    }

    protected function validatedData(Request $request): array
    {
        return $request->validate([
            'titre' => ['required', 'string', 'max:200'],
            'description' => ['required', 'string'],
            'technologie' => ['required', 'string', 'max:100'],
            'image' => ['nullable', 'image', 'max:5120'],
        ]);
    }
}
