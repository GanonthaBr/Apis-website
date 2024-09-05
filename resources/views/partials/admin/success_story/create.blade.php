@extends('layouts.admin_layout')
@section('admin-content')
<main class="main" id="main">
    {{-- create a form to add new blog with title, image and content --}}
    <div class="container-fluid px-4">
        <h1 class="mt-4">{{__('Ajouter un blog')}} </h1>
        {{-- display success message if blog is created --}}
        @if (session()->has('blog-created'))
        <div class="alert alert-success" role="alert">
            {{ session()->get('blog-created') }}
        </div>
        @endif
        {{-- create form --}}
        <form action="{{ route('success_story.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="title" class="form-label">{{__('Titre')}} </label>
                <input type="text" class="form-control" id="title" name="title">
            </div>
           
            <div class="mb-3">
                <label for="image" class="form-label">{{__('Image')}} </label>
                <input type="file" class="form-control" id="image" name="image">
            </div>
            <div class="mb-3">
                <label for="video" class="form-label">{{__('Lien de la video')}} </label>
                <input type="text" class="form-control" id="video" name="video">
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">{{__('Contenu')}} </label>
                {{-- <textarea class="form-control" id="content" name="content" rows="3"></textarea> --}}
                <textarea class="form-control" id="description" name="description" rows="3"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">{{__('Ajouter')}} </button>
        </form>
</main>
@endsection