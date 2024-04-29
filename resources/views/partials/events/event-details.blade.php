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
                            {{-- design a page to show event details with image, title, location, start_time and end_time. can use any bootstrap styling with icons --}}
                            <h1 class="domaine-title">{{$event->title}}</h1>
                            <img src="{{asset('storage/' . $event->image)}}" alt="image" />
                            <p>{{$event->description}}</p>
                            <p><span style="font-weight: bold;">  <i class="fa fa-map-marker-alt"></i> Lieu:</span> {{$event->location}}</p>
                            <p> <span style="font-weight: bold;">  <i class="far fa-clock"></i>  Heure:</span> {{substr($event->start_time,0,5)}} - {{substr($event->end_time,0,5)}}</p>
                            <p><span style="font-weight: bold;"> <i class="fa fa-calendar-alt"></i
                                        > Ajoute le:</span> {{substr($event->created_at,0,9)}} </p>
                            
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