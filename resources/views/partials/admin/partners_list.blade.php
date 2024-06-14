@extends('layouts.admin_layout')
@section('admin-content')

{{-- table of events list with edit and update button --}}
<main class="main" id="main">
    <div class="container-fluid px-4">
        <h1 class="mt-4">{{__('Liste des Partenaires')}} </h1>
          <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{route('admin')}}">{{__('Accueil')}} </a></li>
        <li class="breadcrumb-item active">{{__('Partners')}} </li>
      </ol>
    </nav>
        {{-- display success message if partner is created --}}
        @if (session()->has('partner-created'))
        <div class="alert alert-success" role="alert">
            {{ session()->get('partner-created') }}
        </div>
        @endif
        {{-- display success message if partner is updated --}}
        @if (session()->has('partner-updated'))
        <div class="alert alert-success" role="alert">
            {{ session()->get('partner-updated') }}
        </div>
        @endif
       
        {{-- display success message if partner is deleted --}}
        @if (session()->has('partner-deleted'))
        <div class="alert alert-success" role="alert">
            {{ session()->get('partner-deleted') }}
        </div>
        @endif

        <table id="eventsTable" class="table table-striped table-bordered" style="width:100%">
            <thead>
                <tr>
                    <th>{{__('Name')}} </th>
                    
                </tr>
            </thead>
            <tbody>
                @foreach ($partners as $partner)

                <tr>
                    <td>{{ $partner->name }}</td>
                    
                    
                    <td>
                        <a href="{{ route('partner.edit', $partner->id) }}" class="btn btn-primary">{{__('Modifier')}} </a>
                        <button type="button" class="btn btn-danger confirm-delete" data-form="deleteForm{{$partner->id}}" data-toggle="modal" data-target="#deleteModal{{$partner->id}}">{{__('Supprimer')}} </button>

                        <form id="deleteForm{{$partner->id}}" action="{{ route('partner.destroy', $partner->id) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                        </form>
                </tr>

                  <!-- Delete Confirmation Modal -->
                        <div class="modal fade" id="deleteModal{{$partner->id}}" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="deleteModalLabel">{{__('Confirm Delete')}} </h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        {{__('Are you sure you want to delete this partner?')}}
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal"> {{__('Cancel')}} </button>
                                        <button type="button" class="btn btn-danger confirmDelete" id="confirmDelete{{$partner->id}}"> {{__('Delete')}} </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                @endforeach

            </tbody>
        </table>
         {{-- add new testimonial button --}}
        <a href="{{route('partners.create')}}" class="btn btn-primary">{{__('Ajouter un partenaire')}} </a>


    </div>
</main>
@endsection