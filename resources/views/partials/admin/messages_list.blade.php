@extends('layouts.admin_layout')

@section('admin-content')
<main class="main" id="main">
    {{-- create Bootstrap table with three columns --}}
    <div class="container-fluid px-4">
        <h1 class="mt-4">{{__('Liste des messages')}} </h1>
        {{-- display success message if message-deleted --}}
        @if (session()->has('contact-deleted'))
        <div class="alert alert-success" role="alert">
            {{ session()->get('contact-deleted') }}
        </div>
        @endif
        {{-- display success message if message is deleted --}}
        @if (session()->has('message-deleted'))
        <div class="alert alert-success" role="alert">
            {{ session()->get('message-deleted') }}
        </div>
        @endif

        {{-- create table --}}
        <table id="articlesTable" class="table table-striped table-bordered" style="width:100%">
            <thead>
                <tr>
                    <th>{{__('Heure')}} </th>
                    <th>{{__('Nom')}} </th>
                    <th>{{__('Email')}} </th>
                    <th>{{__('Object')}} </th>
                    <th>{{__('Contenu')}} </th>
                    <th>{{__('Actions')}} </th>
                </tr>
            </thead>
            <tbody>
                {{-- loop through messages and display them in table --}}
                @foreach ($messages as $message)

                <tr>
                    <td>{{ $message->created_at_human }}</td>
                    <td>{{ $message->name }}</td>
                    <td>{{ $message->email }}</td>
                    <td>{{ $message->subject }}</td>
                    <td>{{ substr($message->user_message,0,50) }}...</td>
                    <td>
                        <a href="{{route('message.show', $message->id)}}"><span class=" btn btn-primary ">{{__('Voir')}} </span></a>
                        <button type="button" class="btn btn-danger confirm-delete" data-form="deleteForm{{$message->id}}" data-toggle="modal" data-target="#deleteModal{{$message->id}}">{{__('Supprimer')}} </button>

                        <form id="deleteForm{{$message->id}}" action="{{ route('message.destroy', $message->id) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')

                        </form>
                    </td>
                </tr>
                <!-- Delete Confirmation Modal -->
                        <div class="modal fade" id="deleteModal{{$message->id}}" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="deleteModalLabel">{{__('Confirm Delete')}} </h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        {{__('Are you sure you want to delete this message?')}}
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">{{__('Cancel')}} </button>
                                        <button type="button" class="btn btn-danger confirmDelete" id="confirmDelete{{$message->id}}">{{__('Delete')}} </button>
                                    </div>
                                </div>
                            </div>
                        </div>
               
                @endforeach
            </tbody>
        </table>



</main>
@endsection