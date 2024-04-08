@extends('layouts.layout') 
  @section('content')
            @include('includes.topbar')
            @include('includes.navbar')

          
             <!-- Page Header Start -->
        <div class="page-header">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h2>Nos événements</h2>
                    </div>
                    <div class="col-12">
                        <a href="/">Accueil</a>
                        <a href="/events">Evénements</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Page Header End -->  

   {{-- Events Starts --}}
  <div class="event">
            <div class="container">
                <div class="section-header text-center">
                    <p>Nos événements récents</p>
                    <h2>Nos plus récents et futurs événements.</h2>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="event-item">
                            <img src="{{asset('img/event-1-0.png')}}" alt="Image" />
                            <div class="event-content">
                                <div class="event-meta">
                                    <p>
                                        <i class="fa fa-calendar-alt"></i
                                        >01-Mars-2024
                                    </p>
                                    <p>
                                        <i class="far fa-clock"></i>8:00 - 10:00
                                    </p>
                                    <p>
                                    Gotheye-larbabirno
                                    </p>
                                </div>
                                <div class="event-text">
                                    <h3>Distribution</h3>
                                    <p>
                                      Événement de distribution des kits non-alimentaires à la population du village de Larbabirno.
                                    </p>
                                    <a class="btn btn-custom" href=""
                                        >Voir plus</a
                                    >
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="event-item">
                            <img src="{{asset('img/event-1-1.png')}}" alt="Image" />
                            <div class="event-content">
                                <div class="event-meta">
                                    <p>
                                        <i class="fa fa-calendar-alt"></i
                                        >01-Mars-2024
                                    </p>
                                    <p>
                                        <i class="far fa-clock"></i>8:00 - 10:00
                                    </p>
                                    <p>
                                        <i class="fa fa-map-marker-alt"></i>Gotheye-larbabirno
                                    </p>
                                </div>
                                <div class="event-text">
                                    <h3>Distribution</h3>
                                    <p>
                                      Événement de distribution des kits non-alimentaires à la population du village de Larbabirno.
                                    </p>
                                    <a class="btn btn-custom" href=""
                                        >Voir plus</a
                                    >
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
{{-- Events Ends --}}

        @stop