@extends('layouts.layout')
@section('content')
@include('includes.topbar')
@include('includes.navbar')


<!-- Page Header Start -->
<div class="page-header">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2>{{__('Nos événements')}}</h2>
            </div>
            <div class="col-12">
                <a href="/">{{__('Accueil')}}</a>
                <a href="/events">{{__('Evénements')}}</a>
            </div>
        </div>
    </div>
</div>
<!-- Page Header End -->

{{-- Events Starts --}}
<div class="event">
    <div class="container">
        <div class="section-header text-center">
            <p>{{__('Nos événements récents')}}</p>
            <h2>{{__('Nos plus récents et futurs événements.')}}</h2>
        </div>
        <div class="row">
            @if($events->count())
            @foreach ($events as $event)
            <div class="col-lg-6">
                <div class="event-item">
                    {{-- <img src="{{asset('img/event-1-1.png')}}" alt="Image" /> --}}
                    <img src="{{asset('storage/' . $event->image)}}" alt="{{$event->title}}">
                    <div class="event-content">
                        <div class="event-meta">
                            <p>
                                <i class="fa fa-calendar-alt"></i>{{$event->date}}
                            </p>

                            <p>
                                <i class="far fa-clock"></i>{{substr($event->start_time,0,5)}} - {{substr($event->end_time,0,5)}}
                            </p>
                            <p class="d-none d-lg-flex">
                                <i class="fa fa-map-marker-alt"></i>{{$event->location}}
                            </p>
                        </div>
                        <div class="event-text">
                            <h3>{{$event->title}}</h3>
                            <p>
                                {{substr($event->description,0,115)}}

                            </p>
                            <a class="btn btn-custom" href="{{route('events.show', ['id' => $event->id])}}">{{__('Voir plus')}}</a>
                        </div>
                    </div>
                </div>
            </div>

            @endforeach
            @else
            <div class="alert alert-warning col-md-8 offset-md-2 mt-3">{{__('Aucun événement au programme !!!')}}</div>

            @endif
           
</div>
</div>
</div>
{{-- Events Ends --}}

@stop