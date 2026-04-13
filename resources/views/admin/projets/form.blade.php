@csrf

<div class="mb-4">
    <label for="titre" class="form-label fw-semibold">Titre</label>
    <input id="titre" type="text" name="titre" value="{{ old('titre', $projet->titre) }}" class="form-control @error('titre') is-invalid @enderror" required>
    @error('titre')
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>

<div class="mb-4">
    <label for="technologie" class="form-label fw-semibold">Technologie</label>
    <input id="technologie" type="text" name="technologie" value="{{ old('technologie', $projet->technologie) }}" class="form-control @error('technologie') is-invalid @enderror" required>
    @error('technologie')
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>

<div class="mb-4">
    <label for="description" class="form-label fw-semibold">Description</label>
    <textarea id="description" name="description" rows="6" class="form-control @error('description') is-invalid @enderror" required>{{ old('description', $projet->description) }}</textarea>
    @error('description')
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>

<div class="mb-4">
    <label for="image" class="form-label fw-semibold">Image</label>
    <input id="image" type="file" name="image" class="form-control @error('image') is-invalid @enderror" accept="image/*">
    @error('image')
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror
    @if ($projet->image_url)
        <img src="{{ $projet->image_url }}" alt="{{ $projet->titre }}" width="120" class="rounded shadow-sm mt-3">
    @endif
</div>

<div class="d-flex gap-2">
    <button type="submit" class="btn btn-primary">Enregistrer</button>
    <a href="{{ route('admin.projets.index') }}" class="btn btn-outline-secondary">Annuler</a>
</div>
