@extends('layouts.admin_layout')

@section('admin-content')

<main class="main" id="main">
{{-- create Bootstrap table with three columns --}}
<div class="container-fluid px-4">
    <h1 class="mt-4">Liste des blogs</h1>
    {{-- display success message if blog is created --}}
    @if (session()->has('blog-created'))
        <div class="alert alert-success" role="alert">
            {{ session()->get('blog-created') }}
        </div>
    @endif
    {{-- display success message if blog is deleted --}}
    @if (session()->has('blog-deleted'))
        <div class="alert alert-success" role="alert">
            {{ session()->get('blog-deleted') }}
        </div>
    @endif
    {{-- create table --}}
    <table id="articlesTable" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <th>Titre</th>
                <th>Contenu</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            {{-- loop through blogs and display them in table --}}
            @foreach ($blogs as $blog)
                <tr>
                    <td>{{ $blog->title }}</td>
                    <td>{{ $blog->content }}</td>
                    <td>
                        {{-- create edit button --}}
                        <a href="{{ route('admin.allblogs', $blog->id) }}" class="btn btn-primary">Modifier</a>
                        {{-- create delete button --}}
                        <form action="{{ route('admin.allblogs', $blog->id) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Supprimer</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    {{-- add new blog button --}}
    <a href="/admin/blog/create" class="btn btn-primary">Ajouter un blog</a>
</main>

    
@endsection