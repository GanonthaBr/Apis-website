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

<!-- Blog Start -->
<div class="blog partial-content">
    <div class="container">
        <div class="section-header text-center">
            <p>Nos Actualités</p>
            <h2>Découvrez nos dernières actualités à travers de blogs posts.</h2>
        </div>
        @include('partials.blogs.blog-content')
        <div class="row">
            <div class="col-12">
                <ul class="pagination justify-content-center">
                    <li class="page-item disabled"><a class="page-link" href="#">Previous</a></li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item active"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item"><a class="page-link" href="#">Next</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- Blog End -->

@stop