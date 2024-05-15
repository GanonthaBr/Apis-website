@extends('layouts.layout')
@section('content')
@include('includes.topbar')
@include('includes.navbar')

<!-- Page Header Start -->
<div class="page-header">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2>Nous Contacter</h2>
            </div>
            <div class="col-12">
                <a href="/">Accueil</a>
                <a href="/contacts">Contacts</a>
            </div>
        </div>
    </div>
</div>
<!-- Page Header End -->

<!-- Contacts Start -->
<div class="contact partial-content">
    <div class="container">
        <div class="section-header text-center">
            <p>Nous Contacter</p>
            <h2>Restez en contact avec nous</h2>
        </div>
        <div class="contact-img">
            <img src="{{asset('img/cause-3.png')}}" alt="Image" />
        </div>
        <div class="row min-height-row">
            <div class="col-12 col-md-6 mb-sm-2">

                <div class="contact-form">
                    <h4 class="text-center">Envoyez nous un message</h4>
                    <div id="success">

                        @if(session('success'))

                        <div class="alert alert-success"> {{session('success')}}</div>
                        @endif

                    </div>
                    <form name="sentMessage" id="contactForm" novalidate="novalidate" action="{{route('contacts.store')}}" method="POST" {{-- id="formId" --}}>
                        @csrf
                        <div class="control-group">
                            <input type="text" class="form-control" id="name" name="name" placeholder="Votre Nom" required="required" @error('name') is-invalid @enderror value="{{old('name')}}" data-validation-required-message="Please enter your name" novalidate="novalidate" />
                            <p class="help-block text-danger">

                                @error('name')
                                {{$message}}
                                @enderror
                            </p>
                        </div>
                        <div class="control-group">
                            <input class="form-control" id="email" name="email" placeholder="Votre Telephone ou Email" required="required" value="{{old('email')}}" data-validation-required-message="Please enter your email" />
                            <p class="help-block text-danger">
                                @error('email')
                                {{$message}}
                                @enderror
                            </p>
                        </div>
                        <div class="control-group">
                            <input type="text" class="form-control" id="subject" name="subject" placeholder="Object" required="required" value="{{old('subject')}}" data-validation-required-message="Please enter a subject" />
                            <p class="help-block text-danger">
                                @error('subject')
                                {{$message}}
                                @enderror
                            </p>
                        </div>
                        <div class="control-group">
                            <textarea class="form-control" id="user_message" name="user_message" placeholder="Message" required="required" value="{{old('user_message')}}" data-validation-required-message="Please enter your user_message"></textarea>
                            <p class="help-block text-danger">
                                @error('user_message')
                                {{$message}}
                                @enderror
                            </p>
                        </div>
                        <div>
                            <button class="btn btn-custom" type="submit" id="sendMessageButton">
                                Envoyer Message
                            </button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-12 col-md-6 mb-sm-2 socials-contact contact-form">
                <h4 class="text-center">Nous contacter</h4>
                <ul>
                    <li><i class="fa fa-map-marker"></i> Avenue Korey bongou</li>
                    <li><i class="fa fa-phone"></i> (+227) 20724108 - 96410772</li>
                    <li><i class="fa fa-envelope"></i> contact@apis-sahel.org </li>
                    {{-- <li><iframe src="" width="400" height="200" style="border:0;" allowfullscreen="" loading="lazy"></iframe></li> --}}
<div class="embed-responsive embed-responsive-16by9">
    <iframe class="embed-responsive-item" src="https://www.google.com/maps/embed/v1/place?q=ONG+APIS,+Niamey,+Niger&key=AIzaSyBFw0Qbyq9zTFTd-tUY6dZWTgaQzuU17R8"></iframe>
</div>
                </ul>
                {{-- social media --}}
                <h5 class="text-center">Nous Suivre sur les Reseaux Sociaux</h5> <br>
                <div class="socials row">

                    <div class="col-4"><a class="btn" target="blank" href="https://www.facebook.com/profile.php?viewas=100000686899395&id=61558747800282"><i class="fab fa-facebook-f"></i></a></div>
                    <div class="col-4"><a class="btn" target="blank" href="https://twitter.com/Ong_Apis"><i class="fab fa-twitter"></i></a></div>
                    <div class="col-4"> <a class="btn" target="blank" href="https://www.linkedin.com/company/ong-apis/people/?viewAsMember=true"><i class="fab fa-linkedin-in"></i></a></div>
                </div>
            </div>
        </div>

    </div>
</div>
<!-- Contacts End -->

@include('partials.contacts.submit-modal')

@stop