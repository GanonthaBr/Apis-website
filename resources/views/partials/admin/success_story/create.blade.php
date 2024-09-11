@extends('layouts.admin_layout')
@section('admin-content')
<main class="main" id="main">
    {{-- create a form to add new SS --}}
    <div class="container-fluid px-4">
        <h1 class="mt-4">{{__('Ajouter un Success Story')}} </h1>
        {{-- display success message if SS is created --}}
        @if (session()->has('story-success'))
        <div class="alert alert-success" role="alert">
            {{ session()->get('story-success') }}
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
            {{-- more images --}}
            <div class="mb-3">
                <label for="images" class="form-label">{{__('Plus dimages')}} </label>
                <input type="file" class="form-control" id="images" name="images[]" multiple>
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