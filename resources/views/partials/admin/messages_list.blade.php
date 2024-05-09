@extends('layouts.admin_layout')

@section('admin-content')
<main class="main" id="main">
    {{-- create Bootstrap table with three columns --}}
    <div class="container-fluid px-4">
        <h1 class="mt-4">Liste des messages</h1>
       

        {{-- create table --}}
        <table id="articlesTable" class="table table-striped table-bordered" style="width:100%">
            <thead>
                <tr>
                    <th>Nom</th>
                    <th>Email</th>
                    <th>Object</th>
                    <th>Contenu</th>
                </tr>
            </thead>
            <tbody>
                {{-- loop through messages and display them in table --}}
                @foreach ($messages as $message)

                <tr>
                    <td>{{ $message->name }}</td>
                    <td>{{ $message->email }}</td>
                    <td>{{ $message->subject }}</td>
                    <td>{{ substr($message->user_message,0,50) }}...</td>
                    
                </tr>
               
                @endforeach
            </tbody>
        </table>



</main>
@endsection