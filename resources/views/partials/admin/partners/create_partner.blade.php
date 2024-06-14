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
        <form action="{{ route('partners.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            
            <div class="mb-3">
                <label for="author" class="form-label">{{__('Partner name')}} </label>
                <input type="text" class="form-control" id="author" name="name">
            </div>
            <div class="mb-3">
                <label for="image" class="form-label">{{__('Partner logo')}} </label>
                <input type="file" class="form-control" id="image" name="image">
            </div>
            
            <button type="submit" class="btn btn-primary">{{__('Ajouter')}} </button>
        </form>
</main>
@endsection