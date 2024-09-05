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
<div class="modal fade" id="videoModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <!-- 16:9 aspect ratio -->
                <div class="embed-responsive embed-responsive-16by9">
                    <iframe class="embed-responsive-item" src="" id="video" allowscriptaccess="always" allow="autoplay"></iframe>
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
<div class="facts" data-parallax="scroll" data-image-src="{{asset('img/bg-banner.jpg')}}">
    <div class="container">
        @foreach($stats as $stats)
        <div class="row">
            <div class="col-lg-3 col-md-6">


                <div class="facts-item">
                    <i class="flaticon-kindness"></i>
                    <div class="facts-text">
                        <h3 data-toggle="counter-up">
                            {{$stats->communities_helped}}
                        </h3>
                        <p>{{__('Communes intervenues')}} </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="facts-item">
                    <i class="flaticon-charity"></i>
                    <div class="facts-text">
                        <h3 data-toggle="counter-up">
                            {{$stats->number_of_beneficiaries}}
                        </h3>
                        <p>{{__('Nombre de Bénéficiaires')}} </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="facts-item">
                    <i class="flaticon-home"></i>
                    <div class="facts-text">
                        <h3 data-toggle="counter-up">
                            {{$stats->departments_helped}}
                        </h3>
                        <p>{{__('Départements')}} </p>
                    </div>
                </div>

            </div>
            <div class="col-lg-3 col-md-6">
                <div class="facts-item">
                    <i class="flaticon-donation"></i>
                    <div class="facts-text">
                        <h3 data-toggle="counter-up">
                            {{$stats->year_of_experience}}
                        </h3>
                        <p>{{__('Expérience')}} </p>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
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
{{-- @include('partials.teams.team') --}}
<!-- Fin de Equipe-->



<!-- Debut des Temoignages-->
@include('partials.testimonials.testimonials')
<!-- Fin des Temoignages -->

<!-- Debut des Contacts -->
@include('partials.contacts.contact')
<!-- Fin des Contacts-->

<!-- Debut des Blogs-->
@include('partials.blogs.blogs')
<!-- Fin des Blogs-->
<!-- Debut des Blogs-->
@include('partials.success_story.latest_success_story_videos')
<!-- Fin des Blogs-->

{{-- Partners--}}
@include('partials.partners')
{{-- End Partners--}}
@stop