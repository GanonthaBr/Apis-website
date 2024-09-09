@extends('layouts.admin_layout')

@section('admin-content')
<main class="main" id="main">
    
    <div class="container-fluid px-4">
        <h1 class="mt-4">{{__('Liste des Success Story')}} </h1>
        {{-- display success message if success_story is created --}}
        @if (session()->has('update-success'))
        <div class="alert alert-success" role="alert">
            {{ session()->get('update-success') }}
        </div>
        @endif
        {{-- display success message if success_story is deleted --}}
        @if (session()->has('delete-success'))
        <div class="alert alert-success" role="alert">
            {{ session()->get('delete-success') }}
        </div>
        @endif
        @if (session()->has('update-error'))
        <div class="alert alert-danger" role="alert">
            {{ session()->get('update-error') }}
        </div>
        @endif

        {{-- create table --}}
        <table id="articlesTable" class="table table-striped table-bordered" style="width:100%">
            <thead>
                <tr>
                    <th>{{__('Titre')}} </th>
                    <th>{{__('Description')}} </th>
                    <th>{{__('Video Link')}} </th>
                    <th>{{__('Actions')}} </th>
                </tr>
            </thead>
            <tbody>
                {{-- loop through success_story and display them in table --}}
                @foreach ($success_stories as $success_story)

                <tr>
                    <td>{{ $success_story->title }}</td>
                    <td>{!! substr($success_story->description,0,50) !!}...</td>
                    <td>{{ $success_story->video }}</td>
                    <td>
                        {{-- create edit button --}}
                        <a href="{{ route('success_story.edit', $success_story->id) }}" class="btn btn-primary">{{__('Modifier')}} </a>
                        {{-- create delete button --}}
                        <!-- Delete Button -->
                        <button type="button" class="btn btn-danger confirm-delete" data-form="deleteForm{{$success_story->id}}" data-toggle="modal" data-target="#deleteModal{{$success_story->id}}">{{__('Supprimer')}} </button>

                        <form id="deleteForm{{$success_story->id}}" action="{{ route('success_story.destroy', $success_story->id) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')

                        </form>

                    </td>
                </tr>
                <!-- Delete Confirmation Modal -->
                <div class="modal fade" id="deleteModal{{$success_story->id}}" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="deleteModalLabel">{{__('Confirm Delete')}} </h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                {{__('Are you sure you want to delete this success_story?')}}
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">{{__('Cancel')}} </button>
                                <button type="button" class="btn btn-danger confirmDelete" id="confirmDelete{{$success_story->id}}">{{__('Delete')}} </button>
                            </div>
                        </div>
                    </div>
                </div>

                @endforeach
            </tbody>
        </table>


        {{-- add new success_story button --}}
        <a href="{{route('success_story.create')}}" class="btn btn-primary">{{__('Ajouter un success_story')}} </a>



</main>
@endsection