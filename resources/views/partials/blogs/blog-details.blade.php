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
                    @if ($blog->comments->count()==0)
                    <p class="mt-4 text-alert">Pas de commentaires encore</p>
                    @else
                    @foreach($blog->comments as $comment)
                    <div class="comment">
                        <!-- <h4>{{ $comment->user_name }}</h4> -->
                        <p>{{ $comment->comment }}</p>
                        <p class="comment-added">Ajoutée par {{$comment->user->name}} , {{$comment->created_at->locale('fr')->diffForHumans()}} </p>
                    </div>
                    @endforeach
                    @endif
                    {{-- Login --}}
                    <div class="login-card card">
                        <h3>Connectez-vous pour commenter</h3>
                        <!-- cross to close the modal -->
                        <span class="close">
                            <i class="fas fa-times"></i>

                        </span>

                        <div class="modal-body">
                            <form method="POST" action="{{ route('login') }}">
                                @csrf

                                <div class="mb-3">
                                    <label for="email" class="form-label">Email</label>
                                    <input type="email" class="form-control" id="email" name="email" required>
                                </div>

                                <div class="mb-3">
                                    <label for="password" class="form-label">Mot de passe</label>
                                    <input type="password" class="form-control" id="password" name="password" required>
                                </div>

                                <button type="submit" class="btn btn-primary">Se connecter</button>
                                <span style="font-size: 20;">Nouvel utilisateur? <span class="register-btn" style="text-decoration: underline">Creer un Compte
                                        </> </span>
                            </form>
                        </div>

                    </div>
                    {{-- Register Modal --}}
                    <div class="register-card">
                        <h3>Enregistrez-vous pour commenter</h3>
                        <!-- cross to close the modal -->
                        <span class="fermer">
                            <i class="fas fa-times"></i>

                        </span>
                        <div class="modal-body">
                            <form method="POST" action="{{ route('registerFromBlog') }}" enctype=" multipart/form-data">
                                @csrf

                                <div class="mb-3">
                                    <label for="name" class="form-label">Nom</label>
                                    <input type="text" class="form-control" id="name" name="name" required>
                                </div>

                                <div class="mb-3">
                                    <label for="email" class="form-label">Email</label>
                                    <input type="email" class="form-control" id="email" name="email" required>
                                </div>

                                <div class="mb-3">
                                    <label for="password" class="form-label">Mot de passe</label>
                                    <input type="password" class="form-control" id="password" name="password" required>
                                </div>

                                <div class="mb-3">
                                    <label for="password-confirm" class="form-label">Confirmer le mot de passe</label>
                                    <input type="password" class="form-control" id="password-confirm" name="password_confirmation" required>
                                </div>

                                <button type="submit" class="btn btn-primary">S'inscrire</button>
                                <span style="font-size: 20;">Deja un utilisateur? <span class="login-btn" style="text-decoration: underline">Se connecter</span> </span>
                            </form>
                        </div>
                    </div>

                    <form method="POST" action="{{ route('comments.store') }}">
                        @csrf
                        <input type="hidden" name="blog_id" value="{{ $blog->id }}">
                        <textarea class="form-control  {{ auth()->check() ? '' : 'not-logged-in' }}" name="comment" required></textarea>
                        <button class="btn comment-button" type="submit">Ajouter un commentaire</button>
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
    var elemen = document.querySelector('.not-logged-in');
    var loginModal = document.querySelector('.login-card');
    var registerModal = document.querySelector('.register-card');
    var closeBtn = document.querySelector('.close');
    var closeBtnR = document.querySelector('.fermer');
    var registerBtn = document.querySelector('.register-btn');

    registerModal.style.display = 'none';

    elemen.addEventListener('click', function(e) {
        e.preventDefault();
        if (elemen) {
            loginModal.style.display = 'block';
        }
    });
    closeBtnR.addEventListener('click', function(e) {
        e.preventDefault();
        // console.log(registerModal);
        registerModal.style.display = 'none'
    })
    closeBtn.addEventListener('click', function(e) {
        e.preventDefault();
        loginModal.style.display = 'none';
    });
    //show register modal if the register btn is clicked
    registerBtn.addEventListener('click', function(e) {
        e.preventDefault();
        loginModal.style.display = 'none';
        registerModal.style.display = 'block';
    });
</script>


@stop