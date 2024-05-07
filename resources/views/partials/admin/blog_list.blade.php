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
                    <td>{{ substr($blog->content,0,50) }}...</td>
                    <td>
                        {{-- create edit button --}}
                        <a href="{{ route('admin.allblogs', $blog->id) }}" class="btn btn-primary">Modifier</a>
                        {{-- create delete button --}}
                        <!-- Delete Button -->
                        <button type="button" class="btn btn-danger confirm-delete" data-form="deleteForm{{$blog->id}}" data-toggle="modal" data-target="#deleteModal{{$blog->id}}">Supprimer</button>

                        <form id="deleteForm{{$blog->id}}" action="{{ route('blogs.destroy', $blog->id) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')

                            {{-- <button type="submit" class="btn btn-danger">Supprimer</button> --}}
                        </form>
                         <!-- Delete Confirmation Modal -->
<div class="modal fade" id="deleteModal{{$blog->id}}" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="deleteModalLabel">Confirm Delete</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                Are you sure you want to delete this blog post?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-danger confirmDelete" id="confirmDelete{{$blog->id}}">Delete</button>
            </div>
        </div>
    </div>
</div>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    {{-- add new blog button --}}
    <a href="{{route('admin.create')}}" class="btn btn-primary">Ajouter un blog</a>

   
</main>

  


@endsection