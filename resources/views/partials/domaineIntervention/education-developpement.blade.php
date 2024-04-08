@extends('layouts.layout') 
  @section('content')
            @include('includes.topbar')
            @include('includes.navbar')
         <!-- Page Header Start -->
        <div class="page-header">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h2>Domaines d'intervention</h2>
                    </div>
                    <div class="col-12">
                        <a href="/">Accueil</a>
                        <a href="{{route('domaines.educationdeveloppement')}}">Domaines d'intervention</a>
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
                            <h1 class="domaine-title">Education et Développement Integré</h1>
                            <img src="{{asset('img/sante-nutrition.jpeg')}}" />
                             <h3>Education</h3>
                            <p>
                                L'ONG APIS s'engage dans le secteur de l'éducation, offrant un accès équitable à l'apprentissage de qualité pour tous, même dans les situations d'urgence humanitaire. À travers des programmes innovants et adaptés, nous favorisons le développement cognitif, social et émotionnel des enfants et des jeunes, renforçant ainsi leurs perspectives d'avenir. En partenariat avec les communautés et les autorités locales, nous mettons en œuvre des initiatives axées sur l'éducation formelle et non formelle, assurant ainsi la résilience éducative même dans les contextes les plus difficiles.
                            </p>
                            <h3>Développement Integré</h3>
                           
                            <p>
                           L'ONG APIS s'engage dans le développement intégré des communautés. Notre approche holistique aborde les besoins multiples des populations, de l'agriculture durable à l'éducation en passant par la santé et l'accès à l'eau. En collaborant avec les parties prenantes locales, nous visons à créer des changements durables et équilibrés, favorisant ainsi l'autonomisation et la résilience des communautés pour un avenir meilleur.
                            </p>
                           
                        </div>
                        <h6>D'autres liens</h6>
                        <div class="single-tags">
                            <a href="">Santé & Nutrition</a>
                            <a href="">Urgence humanitaire</a>
                            <a href="">Sécurité Alimentaire</a>
                            <a href="">Education et Développement social</a>
                        </div>
                    </div>

    {{-- Side bar Sarts --}}
    @include('includes.sidebar')
    {{-- Side bar Ends --}}
                </div>
            </div>
        </div>
        <!-- Single Post End-->   
@stop