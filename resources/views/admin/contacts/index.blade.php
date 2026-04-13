@extends('layouts.admin')

@section('title', 'Contacts - Administration')

@section('content')
<div class="d-flex flex-column flex-lg-row justify-content-between align-items-lg-center gap-3 mb-4">
    <div>
        <h1 class="h3 mb-1">Messages reçus</h1>
        <p class="text-muted mb-0">Recherche et filtre par date comme dans l'admin Django.</p>
    </div>
    <form method="get" class="row g-2">
        <div class="col-sm-auto">
            <input type="text" name="q" value="{{ request('q') }}" class="form-control" placeholder="Nom ou email">
        </div>
        <div class="col-sm-auto">
            <input type="date" name="date" value="{{ request('date') }}" class="form-control">
        </div>
        <div class="col-sm-auto">
            <button type="submit" class="btn btn-primary">Filtrer</button>
        </div>
    </form>
</div>

<div class="card border-0 shadow-sm">
    <div class="table-responsive">
        <table class="table table-hover mb-0 align-middle">
            <thead class="table-light">
                <tr>
                    <th>Nom</th>
                    <th>Email</th>
                    <th>Message</th>
                    <th>Date</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($contacts as $contact)
                    <tr>
                        <td>{{ $contact->nom }}</td>
                        <td>{{ $contact->email }}</td>
                        <td>{{ \Illuminate\Support\Str::limit($contact->message, 90) }}</td>
                        <td>{{ $contact->created_at?->format('d/m/Y H:i') }}</td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="4" class="text-center text-muted py-4">Aucun message trouvé.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>

<div class="mt-4">
    {{ $contacts->links('pagination::bootstrap-5') }}
</div>
@endsection
