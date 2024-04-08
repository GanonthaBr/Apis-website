@extends('layouts.layout')

@section('content')
        <!-- Debut Top Bar -->
       @include('partials.topbar')
       {{-- Fin Top  Bar --}}

        <!-- Debut Bar de navigation -->
        @include('partials.navbar')
        <!-- Fin  Bar de navigation  -->

        <!-- Debut de Hero -->
        @include('partials.hero')
        <!-- Fin de Hero -->

        <!-- Video Modal Start-->
        <div
            class="modal fade"
            id="videoModal"
            tabindex="-1"
            role="dialog"
            aria-labelledby="exampleModalLabel"
            aria-hidden="true"
        >
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <button
                            type="button"
                            class="close"
                            data-dismiss="modal"
                            aria-label="Close"
                        >
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <!-- 16:9 aspect ratio -->
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe
                                class="embed-responsive-item"
                                src=""
                                id="video"
                                allowscriptaccess="always"
                                allow="autoplay"
                            ></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Video Modal End -->

        <!-- Debut de About -->
        @include('partials.about.about')
        <!-- Fin de About-->

        <!-- Debut des Services -->
         @include('partials.services')
        <!-- Fin des Services -->

        <!--Debut des Facts -->
        <div
            class="facts"
            data-parallax="scroll"
            data-image-src="{{asset('img/page-header.jpg')}}"
        >
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="facts-item">
                            <i class="flaticon-home"></i>
                            <div class="facts-text">
                                <h3 data-toggle="counter-up">
                                    4
                                </h3>
                                <p>Pays intervenus</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="facts-item">
                            <i class="flaticon-charity"></i>
                            <div class="facts-text">
                                <h3  data-toggle="counter-up">
                                    400
                                </h3>
                                <p>Voluntaires  réunis</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="facts-item">
                            <i class="flaticon-kindness"></i>
                            <div class="facts-text">
                                <h3
                                  
                                    data-toggle="counter-up"
                                >
                                    100
                                </h3>
                                <p>Communautés  aidées</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="facts-item">
                            <i class="flaticon-donation"></i>
                            <div class="facts-text">
                                <h3
                                    
                                    data-toggle="counter-up"
                                >
                                    15                                </h3>
                                <p>Année d'existence</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Debut des Facts  -->

        <!-- Debut des Causes -->
        @include('partials.causes')
        <!-- Debut des Causes -->

        <!-- Debut de Donation -->
         @include('partials.donate')
        <!-- Fin de Donation -->

        <!-- Debut de Evenements -->
        @include('partials.events.events')
        <!-- Fin de Evenements -->

        <!-- Debut de Equipe -->
       @include('partials.team')
        <!-- Fin de Equipe-->

        <!-- Debut de Voluntariat -->
        {{-- <div
            class="volunteer"
            data-parallax="scroll"
            data-image-src="img/volunteer.jpg"
        >
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-5">
                        <div class="volunteer-form">
                            <form>
                                <div class="control-group">
                                    <input
                                        type="text"
                                        class="form-control"
                                        placeholder="Name"
                                        required="required"
                                    />
                                </div>
                                <div class="control-group">
                                    <input
                                        type="email"
                                        class="form-control"
                                        placeholder="Email"
                                        required="required"
                                    />
                                </div>
                                <div class="control-group">
                                    <textarea
                                        class="form-control"
                                        placeholder="Why you want to become a volunteer?"
                                        required="required"
                                    ></textarea>
                                </div>
                                <div>
                                    <button
                                        class="btn btn-custom"
                                        type="submit"
                                    >
                                        Become a volunteer
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="volunteer-content">
                            <div class="section-header">
                                <p>Become A Volunteer</p>
                                <h2>
                                    Let’s make a difference in the lives of
                                    others
                                </h2>
                            </div>
                            <div class="volunteer-text">
                                <p>
                                    Lorem ipsum dolor sit amet elit. Phasellus
                                    nec pretium mi. Curabitur facilisis ornare
                                    velit non. Aliquam metus tortor, auctor id
                                    gravida, viverra quis sem. Curabitur non
                                    nisl nec nisi maximus. Aenean convallis
                                    porttitor. Aliquam interdum at lacus non
                                    blandit.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}
        <!-- Fin de Voluntariat -->

        <!-- Debut des Temoignages-->
        @include('partials.testimonials')
        <!-- Fin des Temoignages -->

        <!-- Debut des Contacts -->
        @include('partials.contacts.contact')
        <!-- Fin des Contacts-->

        <!-- Debut des Blogs-->
        @include('partials.blogs.blogs')
        <!-- Fin des Blogs-->
@stop
