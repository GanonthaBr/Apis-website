@extends('layouts.admin_layout')

@section('admin-content')
<main class="main" id="main">
    <h1>{{__('Les Statistiques')}} </h1>
    @foreach ($stats as $stats)
        <div class="row">
        <div class="col-md-3">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-text ">{{__('Communes aidées')}} </h5>
                    <p class="card-title">  {{$stats->communities_helped}}</p>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-text ">{{__('Beneficiaires aidés')}} </h5>
                    <p class="card-title">{{$stats->number_of_beneficiaries}}</p>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-text ">{{__('Année dexistence')}} </h5>
                    <p class="card-title">  {{$stats->year_of_experience}}</p>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-text ">{{__('Départements intervenus')}} </h5>
                    <p class=" card-title"> {{$stats->departments_helped}}</p>
                </div>
            </div>
        </div>

    </div>
    @endforeach
    <a href="{{route('stats.edit',$stats->id)}}" class="btn btn-primary" >{{__('Modifier')}} </a>
</main>
@endsection