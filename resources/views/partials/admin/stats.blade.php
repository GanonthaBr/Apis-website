@extends('layouts.admin_layout')

@section('admin-content')
<main class="main" id="main">
    <h1>Les Statistiques</h1>
    {{-- nombre de beneficiaires aides, nombre de departement intervenus, nombre d'annees d'existence, nombre de communes aides --}}
    @foreach ($stats as $stats)
        <div class="row">
        <div class="col-md-3">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-text ">Communaunes aidées</h5>
                    <p class="card-title">  {{$stats->communities_helped}}</p>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-text ">Beneficiaires aides</h5>
                    <p class="card-title">{{$stats->number_of_beneficiaries}}</p>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-text ">Année d'existence</h5>
                    <p class="card-title">  {{$stats->year_of_experience}}</p>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-text ">Départements intervenus</h5>
                    <p class=" card-title"> {{$stats->departments_helped}}</p>
                </div>
            </div>
        </div>

    </div>
    @endforeach
    <a href="{{route('stats.edit',$stats->id)}}" class="btn btn-primary" >Modifier</a>
</main>
@endsection