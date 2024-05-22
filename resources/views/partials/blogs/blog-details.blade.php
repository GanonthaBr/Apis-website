@extends('layouts.layout')
@section('content')
@include('includes.topbar')
@include('includes.navbar')


<!-- Page Header Start -->
<div class="page-header">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2>Nos Actualités</h2>
            </div>
            <div class="col-12">
                <a href="/">Accueil</a>
                <a href="/blogs">Actualités</a>
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
                    <h1 class="domaine-title blog">{{$blog->title}}</h1>
                    <img src="{{asset('storage/' . $blog->image)}}" alt="image" />


                    <p>
                        {!!$blog->content!!}
                    </p>

                </div>
                <div class="comments">
                      <h3>Comments</h3>
                        @foreach($blog->comments as $comment)
                        <div class="comment">
                            <!-- <h4>{{ $comment->user_name }}</h4> -->
                            <p>{{ $comment->comment }}</p>
                            <p class="comment-added">Ajoutée par {{$comment->user->name}} , {{$comment->created_at->locale('fr')->diffForHumans()}} </p>
                        </div>
                        @endforeach
                     <form method="POST" action="{{ route('comments.store') }}">
                            @csrf
                            <input type="hidden" name="blog_id" value="{{ $blog->id }}">
                            <textarea class="form-control  {{ auth()->check() ? '' : 'not-logged-in' }}" name="comment" required></textarea>
                            <button class="btn comment-button"  type="submit">Ajouter un commentaire</button>
                        </form>
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



<script>
   var elemen=  document.querySelector('.not-logged-in');
   elemen.addEventListener('click',function (e){
    e.preventDefault();
   
   })
</script>


@stop