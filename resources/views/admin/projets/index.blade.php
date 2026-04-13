@extends('layouts.admin')

@section('title', 'Projets - Administration')

@section('content')
<div class="d-flex flex-column flex-lg-row justify-content-between align-items-lg-center gap-3 mb-4">
    <div>
        <h1 class="h3 mb-1">Projets du portfolio</h1>
        <p class="text-muted mb-0">Ajoute, modifie ou supprime les projets affichés sur le site.</p>
    </div>
    <div class="d-flex gap-2">
        <form method="get" class="d-flex gap-2">
            <input type="text" name="q" value="{{ request('q') }}" class="form-control" placeholder="Titre ou technologie">
            <button type="submit" class="btn btn-outline-secondary">Rechercher</button>
        </form>
        <a href="{{ route('admin.projets.create') }}" class="btn btn-primary">Nouveau projet</a>
    </div>
</div>

<div class="card border-0 shadow-sm">
    <div class="table-responsive">
        <table class="table table-hover mb-0 align-middle">
            <thead class="table-light">
                <tr>
                    <th>Projet</th>
                    <th>Technologie</th>
                    <th>Image</th>
                    <th class="text-end">Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($projets as $projet)
                    <tr>
                        <td>
                            <div class="fw-semibold">{{ $projet->titre }}</div>
                            <div class="text-muted small">{{ \Illuminate\Support\Str::limit($projet->description, 80) }}</div>
                        </td>
                        <td>{{ $projet->technologie }}</td>
                        <td>
                            @if ($projet->image_url)
                                <img src="{{ $projet->image_url }}" alt="{{ $projet->titre }}" width="72" class="rounded shadow-sm">
                            @else
                                <span class="text-muted">Aucune</span>
                            @endif
                        </td>
                        <td class="text-end">
                            <a href="{{ route('admin.projets.edit', $projet) }}" class="btn btn-outline-primary btn-sm">Modifier</a>
                            <form method="post" action="{{ route('admin.projets.destroy', $projet) }}" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-outline-danger btn-sm" onclick="return confirm('Supprimer ce projet ?')">Supprimer</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="4" class="text-center text-muted py-4">Aucun projet enregistré.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>

<div class="mt-4">
    {{ $projets->links('pagination::bootstrap-5') }}
</div>
@endsection
