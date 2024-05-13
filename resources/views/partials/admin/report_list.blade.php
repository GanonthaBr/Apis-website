@extends('layouts.admin_layout')
@section('admin-content')

{{-- table of events list with edit and update button --}}
<main class="main" id="main">
    <div class="container-fluid px-4">
        <h1 class="mt-4">Liste des Rapports</h1>
          <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.html">Accueil</a></li>
        <li class="breadcrumb-item active">Rapports</li>
      </ol>
    </nav>
        {{-- display success message if report is updated --}}
        @if (session()->has('report-created'))
        <div class="alert alert-success" role="alert">
            {{ session()->get('report-created') }}
        </div>
        @endif
       
        {{-- display success message if report is deleted --}}
        @if (session()->has('report-deleted'))
        <div class="alert alert-success" role="alert">
            {{ session()->get('report-deleted') }}
        </div>
        @endif

        <table id="eventsTable" class="table table-striped table-bordered" style="width:100%">
            <thead>
                <tr>
                    <th>Titre</th>
                    <th>Description</th>
                    <th>Auteur</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($reports as $report)

                <tr>
                    <td>{{ $report->title }}</td>
                    <td>{{ substr($report->description,0,50) }}...</td>
                    <td>{{ $report->Auteur }}</td>
                    
                    <td>
                        <a href="{{ route('events.edit', $report->id) }}" class="btn btn-primary">Modifier</a>
                        <button type="button" class="btn btn-danger confirm-delete" data-form="deleteForm{{$report->id}}" data-toggle="modal" data-target="#deleteModal{{$report->id}}">Supprimer</button>

                        <form id="deleteForm{{$report->id}}" action="{{ route('reports.destroy', $report->id) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                        </form>
                </tr>

                  <!-- Delete Confirmation Modal -->
                        <div class="modal fade" id="deleteModal{{$report->id}}" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="deleteModalLabel">Confirm Delete</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        Are you sure you want to delete this Report?
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                        <button type="button" class="btn btn-danger confirmDelete" id="confirmDelete{{$report->id}}">Delete</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                @endforeach

            </tbody>
        </table>
         {{-- add new testimonial button --}}
        <a href="{{route('report.create')}}" class="btn btn-primary">Ajouter un Rapport</a>


    </div>
</main>
@endsection