@extends('layouts.admin_layout')

@section('admin-content')
    <main class="main" id="main">
        {{-- edit blog form --}}
        <div class="container-fluid px-4">
            <h1 class="mt-4">Modifier un blog</h1>
            {{-- display success message if blog is updated --}}
            @if (session()->has('blog-updated'))
                <div class="alert alert-success" role="alert">
                    {{ session()->get('blog-updated') }}
                </div>
            @endif
            {{-- create form --}}
            <form action="{{ route('blogs.update', $blog->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label for="title" class="form-label">Titre</label>
                    <input type="text" class="form-control" id="title" name="title" value="{{ $blog->title }}">
                </div>
                <div class="mb-3">
                    <label for="image" class="form-label">Image</label>
                    <input type="file" class="form-control" id="image" name="image">
                </div>
                <div class="mb-3">
                    <label for="content" class="form-label">Contenu</label>
                    <textarea class="form-control" id="content" name="content" rows="3">{{ $blog->content }}</textarea>
                </div>
                <button type="submit" class="btn btn-primary">Modifier</button>
            </form>
        </div>
    </main>
@endsection