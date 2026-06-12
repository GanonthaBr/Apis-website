@extends('layouts.layout')
@section('content')
@include('includes.topbar')
@include('includes.navbar')

<!-- Page Header Start -->
<div class="page-header">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2>{{__('Notre impacte')}}</h2>
            </div>
            <div class="col-12">
                <a href="/">{{__('Accueil')}}</a>
                <a href="/blogs">{{__('Témoignages')}}</a>
            </div>
        </div>
    </div>
</div>
<!-- Page Header End -->

<!-- SS Start -->
<div class="blog partial-content">
    <div class="container">
        <div class="section-header text-center">
            <p>{{__('Témoignages')}}</p>
            <h2>{{__("Découvrez nos dernières Actualités sur les témoignages d'intérêt.")}}</h2>
        </div>
        <div class="row">
     @if($success_story_list->count())
     @foreach ($success_story_list as $s)
     <div class="col-lg-4">
         <div class="blog-item">
             <div class="blog-img">
                 <img src="{{ asset('storage/' . $s->image )}}" alt="Image">
             </div>
             <div class="blog-text">
                 <h3><a href="{{route('success_story.show', ['id' => $s->id])}}">{{$s->title}}</a></h3>
                 <p>
                     {!! substr($s->description,0,150) !!}...
                 </p>
             </div>
             
         </div>
     </div>
     @endforeach
     @else
     <div class="alert alert-warning col-md-8 offset-md-2 mt-3">{{__("Aucun témoignage n'est enregistré pour le moment !")}}</div>
     @endif
        </div>
        <div class="row">
            <div class="col-12">
                <ul class="pagination justify-content-center">
                    <li class="page-item disabled"><a class="page-link" href="#">{{__('Previous')}}</a></li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item active"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item"><a class="page-link" href="#">{{__('Next')}}</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- SS End -->
@stop