@extends('layouts.admin')

@section('title', 'Modifier le projet')

@section('content')
<div class="card border-0 shadow-sm">
    <div class="card-body p-4 p-lg-5">
        <h1 class="h3 mb-4">Modifier le projet</h1>
        <form method="post" action="{{ route('admin.projets.update', $projet) }}" enctype="multipart/form-data">
            @method('PUT')
            @include('admin.projets.form')
        </form>
    </div>
</div>
@endsection
