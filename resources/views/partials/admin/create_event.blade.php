@extends('layouts.admin_layout')

@section('admin-content')
<main class="main" id="main">
    <div class="container-fluid px-4">
        <h1 class="mt-4">Ajouter un blog</h1>
        <form action="{{ route('events.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="title" class="form-label">Titre:</label>
                <input type="text" class="form-control" id="title" name="title" placeholder="Entrer le titre de l'événement" required>
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Description:</label>
                <textarea id="description" class="form-control" name="description" placeholder="Entrer la description ici" required></textarea>
            </div>
            <div class="nb-3">
                <label for="date" class="form-label">Date:</label>
                <input type="date" id="date" class="form-control" name="date" required>
            </div>
            <div class="mb-3">
                <label for="start_time" class="form-label">Heure de début:</label>
                <input type="time" class="form-control" id="start_time" name="start_time" required>
            </div>
            <div class="mb-3">
                <label for="end_time" class="form-label">Heure de fin:</label>
                <input type="time" class="form-control" id="end_time" name="end_time" required>
            </div>
            <div class="mb-3">
                <label for="location" class="form-label">Lieu:</label>
                <input type="text" class="form-control" id="location" name="location" placeholder="Entrer le lieu de l'événement" required>
            </div>
            <div class="mb-3">
                <label for="image" class="form-label">Image:</label>
                <input type="file" class="form-control" id="image" name="image">
            </div>
            <button type="submit" class="btn btn-primary">Publier</button>
    </div>
</main>
@endsection