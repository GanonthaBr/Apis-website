@extends('layouts.admin_layout')
@section('admin-content')
<main class="main" id="main">
    {{-- create a form to add new blog with title, image and content --}}
    <div class="container-fluid px-4">
        <h1 class="mt-4">{{__('Ajouter un Témoignage')}} </h1>
        {{-- display success message if blog is created --}}
        @if (session()->has('testimonial-success'))
        <div class="alert alert-success" role="alert">
            {{ session()->get('testimonial-success') }}
        </div>
        @endif
        {{-- create form --}}
        <form action="{{ route('testimonials.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
          <label for="title" class="form-label">{{__('Name')}}: </label>
          <input type="text" class="form-control" id="title" name="authorName" >
        </div>
        <div class="mb-3">
          <label for="occupation" class="form-label">{{__('Occupation')}}: </label>
          <input type="text" class="form-control" id="occupation" name="authorPosition" >
        </div>
          <div class="mb-3">
          <label for="image" class="form-label">{{__('Image')}}:</label>
          <input type="file" class="form-control" id="image" name="authorImage">
        </div>
        <div class="mb-3">
          <label for="content" class="form-label">{{__('Contenu')}}:</label>
          <textarea class="form-control" id="content" name="content" rows="3"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">{{__('Publier')}} </button>
        </form>
</main>
@endsection