@extends('layouts.layout') 
  @section('content')
            @include('includes.topbar')
            @include('includes.navbar')

          
             <!-- Page Header Start -->
        <div class="page-header">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h2>Nos évenements</h2>
                    </div>
                    <div class="col-12">
                        <a href="/">Accueil</a>
                        <a href="/events">Evenements</a>
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
                            <h1 class="domaine-title">{{$event->title}}</h1>
                                <img src="{{asset('storage/' . $event->image)}}" alt="image" />
                                <p>{{$event->description}}</p>
                                <p>{{$event->location}}</p>
                        </div>
                        <h6>D'autres liens</h6>
                       @include('partials.other-links')
                    </div>

    {{-- Side bar Sarts --}}
    @include('includes.sidebar')
    {{-- Side bar Ends --}}
                </div>
            </div>
        </div>
        <!-- Single Post End-->   






        @stop