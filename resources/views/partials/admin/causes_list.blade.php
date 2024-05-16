@extends('layouts.admin_layout')
@section('admin-content')
<main class="main" id="main">
    {{-- create Bootstrap table with three columns --}}
    <div class="container-fluid px-4">
        <h1 class="mt-4">Liste des causes</h1>
        {{-- display success message if cause is created --}}
        @if (session()->has('cause-created'))
        <div class="alert alert-success" role="alert">
            {{ session()->get('cause-created') }}
        </div>
        @endif
        {{-- display success message if cause is deleted --}}
        @if (session()->has('cause-deleted'))
        <div class="alert alert-success" role="alert">
            {{ session()->get('cause-deleted') }}
        </div>
        @endif

        {{-- create table --}}
        <table id="articlesTable" class="table table-striped table-bordered" style="width:100%">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                {{-- loop through causes and display them in table --}}
                @foreach ($causes as $cause)

                <tr>
                    <td>{{ $cause->name }}</td>
                    <td>{{ substr($cause->description,0,50) }}...</td>
                    <td>
                        {{-- create edit button --}}
                        <a href="{{ route('causes.edit', $cause->id) }}" class="btn btn-primary">Modifier</a>
                        {{-- create delete button --}}
                        <!-- Delete Button -->
                        <button type="button" class="btn btn-danger confirm-delete" data-form="deleteForm{{$cause->id}}" data-toggle="modal" data-target="#deleteModal{{$cause->id}}">Supprimer</button>

                        <form id="deleteForm{{$cause->id}}" action="{{ route('causes.destroy', $cause->id) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')

                        </form>
                       
                    </td>
                </tr>
                 <!-- Delete Confirmation Modal -->
                        <div class="modal fade" id="deleteModal{{$cause->id}}" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="deleteModalLabel">Confirm Delete</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        Are you sure you want to delete this cause ?
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                        <button type="button" class="btn btn-danger confirmDelete" id="confirmDelete{{$cause->id}}">Delete</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                @endforeach
            </tbody>
        </table>
        {{-- add new cause button --}}
        <a href="{{route('admin.createcause')}}" class="btn btn-primary">Ajouter une cause</a>


</main>
@endsection
