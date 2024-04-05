@extends('layouts.layout') 
  @section('content')
            @include('includes.topbar')
            @include('includes.navbar')

      <!-- Page Header Start -->
        <div class="page-header">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h2>À propos de Nous</h2>
                    </div>
                    <div class="col-12">
                        <a href="/">Accueil</a>
                        <a href="/about">À propos</a>
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
                            data-image-src="img/about-image.png"
                        ></div>
                    </div>
                    <div class="col-lg-6">
                        <div class="section-header">
                            <p>À propos de nous.</p>
                            <h2>Actions et Programmes d'impacts au Sahel</h2>
                        </div>
                        <div class="about-tab">
                            <ul class="nav nav-pills nav-justified">
                                <li class="nav-item">
                                    <a
                                        class="nav-link active"
                                        data-toggle="pill"
                                        href="#tab-content-1"
                                        >About</a
                                    >
                                </li>
                                <li class="nav-item">
                                    <a
                                        class="nav-link"
                                        data-toggle="pill"
                                        href="#tab-content-2"
                                        >Mission</a
                                    >
                                </li>
                                <li class="nav-item">
                                    <a
                                        class="nav-link"
                                        data-toggle="pill"
                                        href="#tab-content-3"
                                        >Vision</a
                                    >
                                </li>
                            </ul>

                            <div class="tab-content">
                                <div
                                    id="tab-content-1"
                                    class="container tab-pane active"
                                >
                                 Créée par un groupe de spécialistes œuvrant ou ayant servis dans le domaine de la sécurité alimentaire, santé et nutrition et développement socio-économique des communautés rurales. Ceux-ci sont conscients que leur contribution dans leurs domaines respectifs est d’une grande importante pour conjuguer les efforts avec les autres fils et filles de la nation qui se voient dans l’obligation de développer des actions et programmes appropriés pour relever le défi que rencontre le peuple sahélien vivant en milieu rural en général et le peuple nigérien en particulier.
                            <div class="carousel-btn">
                                <a class="btn btn-custom" href="">En savoir plus</a>
                            </div>

                                </div>
                                <div
                                    id="tab-content-2"
                                    class="container tab-pane fade"
                                >
                                  Développer de façon participative des Nouvelles «Connaissances, Attitudes et Pratiques (CAP)», Programmes et Initiatives d'Impact et de Développement Rurale; ainsi que le Renforcement des Capacités des Organisations Paysanes (OP).
                                </div>
                                <div
                                    id="tab-content-3"
                                    class="container tab-pane fade"
                                >
                                   Accompagner les Communautés Rurales dans la Satisfaction de leurs Besoins de Base et de Changement de leur Mentalité vis à vis d'un Développement Harmonieux.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
{{-- Strategies - Approches - Ressources Humaines --}}
        @include('partials.about.strategies')
        <div>
            <div class="container">
                <div class="section-header text-center">
                    <p>Notre Equipe</p>
                    <h2>Notre équipe de pilotage de nos activités</h2>
                </div>
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="team-item">
                            <div class="team-img">
                                <img src="img/team-1.jpg" alt="Team Image" />
                            </div>
                            <div class="team-text">
                                <h2>Donald John</h2>
                                <p>Founder & CEO</p>
                                <div class="team-social">
                                    <a href=""
                                        ><i class="fab fa-twitter"></i
                                    ></a>
                                    <a href=""
                                        ><i class="fab fa-facebook-f"></i
                                    ></a>
                                    <a href=""
                                        ><i class="fab fa-linkedin-in"></i
                                    ></a>
                                    <a href=""
                                        ><i class="fab fa-instagram"></i
                                    ></a>
                                </div>
                            </div>
                    </div>
                   </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="team-item">
                            <div class="team-img">
                                <img src="img/team-2.jpg" alt="Team Image" />
                            </div>
                            <div class="team-text">
                                <h2>Adam Phillips</h2>
                                <p>Chef Executive</p>
                                <div class="team-social">
                                    <a href=""
                                        ><i class="fab fa-twitter"></i
                                    ></a>
                                    <a href=""
                                        ><i class="fab fa-facebook-f"></i
                                    ></a>
                                    <a href=""
                                        ><i class="fab fa-linkedin-in"></i
                                    ></a>
                                    <a href=""
                                        ><i class="fab fa-instagram"></i
                                    ></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="team-item">
                            <div class="team-img">
                                <img src="img/team-3.jpg" alt="Team Image" />
                            </div>
                            <div class="team-text">
                                <h2>Thomas Olsen</h2>
                                <p>Chef Advisor</p>
                                <div class="team-social">
                                    <a href=""
                                        ><i class="fab fa-twitter"></i
                                    ></a>
                                    <a href=""
                                        ><i class="fab fa-facebook-f"></i
                                    ></a>
                                    <a href=""
                                        ><i class="fab fa-linkedin-in"></i
                                    ></a>
                                    <a href=""
                                        ><i class="fab fa-instagram"></i
                                    ></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="team-item">
                            <div class="team-img">
                                <img src="img/team-4.jpg" alt="Team Image" />
                            </div>
                            <div class="team-text">
                                <h2>James Alien</h2>
                                <p>Advisor</p>
                                <div class="team-social">
                                    <a href=""
                                        ><i class="fab fa-twitter"></i
                                    ></a>
                                    <a href=""
                                        ><i class="fab fa-facebook-f"></i
                                    ></a>
                                    <a href=""
                                        ><i class="fab fa-linkedin-in"></i
                                    ></a>
                                    <a href=""
                                        ><i class="fab fa-instagram"></i
                                    ></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
      

        {{-- About Ends --}}

        @stop