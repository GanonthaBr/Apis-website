@extends('layouts.admin_layout')
@section('admin-content')
<main class="main" id="main">
    {{-- create a form to add new cause with name, image and description --}}
    <div class="container-fluid px-4">
        <h1 class="mt-4">Ajouter une cause</h1>
        {{-- display success message if cause is created --}}
        @if (session()->has('cause-created'))
        <div class="alert alert-success" role="alert">
            {{ session()->get('cause-created') }}
        </div>
        @endif
        {{-- create form --}}
        <form action="{{ route('causes.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Name:</label>
                <input type="text" class="form-control" id="name" name="name">
            </div>
            <div class="mb-3">
                <label for="image" class="form-label">Image</label>
                <input type="file" class="form-control" id="image" name="image">
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Description:</label>
                <textarea class="form-control" id="description" name="description" rows="3"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Ajouter</button>
        </form>
</main>
@endsection