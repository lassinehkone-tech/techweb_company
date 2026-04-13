@extends('layouts.admin')

@section('title', 'Nouveau projet')

@section('content')
<div class="card border-0 shadow-sm">
    <div class="card-body p-4 p-lg-5">
        <h1 class="h3 mb-4">Ajouter un projet</h1>
        <form method="post" action="{{ route('admin.projets.store') }}" enctype="multipart/form-data">
            @include('admin.projets.form')
        </form>
    </div>
</div>
@endsection
