@extends('layouts.layout') 
  @section('content')
            @include('includes.topbar')
            @include('includes.navbar')

      <!-- Page Header Start -->
        <div class="page-header">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h2>{{__('À propos de Nous')}}</h2>
                    </div>
                    <div class="col-12">
                        <a href="/">{{__('Accueil')}}</a>
                        <a href="/about">{{__('À propos')}}</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Page Header End -->  

        {{-- About Starts --}}
        <div class="about">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div
                            class="about-img"
                            data-parallax="scroll"
                            data-image-src="{{asset('img/about-image.png')}}"
                        ></div>
                    </div>
                    <div class="col-lg-6">
                        <div class="section-header">
                            <p>{{__('À propos de nous.')}}</p>
                            <h2>{{__('Actions et Programmes dimpacts au Sahel')}}</h2>
                        </div>
                        <div class="about-tab">
                            <ul class="nav nav-pills nav-justified">
                                <li class="nav-item">
                                    <a
                                        class="nav-link active"
                                        data-toggle="pill"
                                        href="#tab-content-1"
                                        >{{__('A propos')}}</a
                                    >
                                </li>
                                <li class="nav-item">
                                    <a
                                        class="nav-link"
                                        data-toggle="pill"
                                        href="#tab-content-2"
                                        >{{__('Mission')}}</a
                                    >
                                </li>
                                <li class="nav-item">
                                    <a
                                        class="nav-link"
                                        data-toggle="pill"
                                        href="#tab-content-3"
                                        >{{__('Vision')}}</a
                                    >
                                </li>
                            </ul>

                            <div class="tab-content">
                                <div
                                    id="tab-content-1"
                                    class="container tab-pane active"
                                >
                                 {{__('creation et arrete')}}
                            <div class="carousel-btn">
                                <a class="btn btn-custom" href="#strategies">{{__('En savoir plus')}}</a>
                            </div>

                                </div>
                                <div
                                    id="tab-content-2"
                                    class="container tab-pane fade"
                                >
                                 {{__('developper de facon')}}
                                </div>
                                <div
                                    id="tab-content-3"
                                    class="container tab-pane fade"
                                >
                                {{__('accompagner les communautes')}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
{{-- Mot du Secretaire  Starts--}}
@include('partials.about.motsDuSecretaireExecutif')
{{-- Mot du Secretaire Ends --}}
{{-- Strategies - Approches - Ressources Humaines Starts --}}
        @include('partials.about.strategies')
{{-- Strategies - Approches - Ressources Humaines Ends --}}

{{-- Team Starts --}}
        {{-- @include('partials.teams.team-content') --}}
{{-- Team Ends --}}

        {{-- About Ends --}}

        @stop