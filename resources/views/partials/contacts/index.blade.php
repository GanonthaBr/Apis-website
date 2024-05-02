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
    <div class="row">
            <div class="col-6">
              
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
                    <button class="btn btn-custom" type="submit" onclick="submitClicked()" id="sendMessageButton">
                        Envoyer Message
                    </button>
                </div>
                </form>
                 </div>
            </div>
             <div class="col-6 socials-contact contact-form" >
                <h4 class="text-center">Nous contacter</h4>
               <ul>
                <li><i class="fa fa-map-marker"></i> 123 rue de la paix, Paris, France</li>
                <li><i class="fa fa-phone"></i> +33 123 456 789</li>
                <li><i class="fa fa-envelope"></i> info@example.com</li>
                <li><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2624.0730000000004!2d2.352221315674781!3d48.85661407928648!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e66e1f06e2b70f%3A0x7e1f7e3d1e0d7e8e!2sParis!5e0!3m2!1sen!2sfr!4v1616420000000!5m2!1sen!2sfr" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe></li>
              
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