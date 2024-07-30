@extends('layouts.layout')
@section('content')
@include('includes.topbar')
@include('includes.navbar')
<!-- Page Header Start -->
<div class="page-header">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2>{{__('Domaines dintervention')}}</h2>
            </div>
            <div class="col-12">
                <a href="/">{{__('Accueil')}}</a>
                <a href="{{route('domaines.urgencehumanitaire')}}">{{__('Domaines dintervention')}}</a>
            </div>
        </div>
    </div>
</div>
<!-- Page Header End -->
<!-- Single Post Start-->
<div class="single partial-content">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="single-content">
                    <h1 class="domaine-title">{{__('Urgence humanitaire')}}</h1>
                    <img src="{{asset('img/sante-nutrition.jpeg')}}" alt="Urgence humanitaire"/>
                    <p>
                        {{__('Urgence Humanitaire description')}}
                    </p>
                    
                    <p>
                        {{__('Urgence Humanitaire description two')}}
                    </p>
                    
                </div>
                <h6>{{__('Dautres liens')}}</h6>
                @include('partials.other-links')
                </div>

            {{-- Side bar Starts --}}
            @include('includes.sidebar')
            {{-- Side bar Ends --}}
        </div>
    </div>
</div>
<!-- Single Post End-->
@stop