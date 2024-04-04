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
                        <a href="/santenutrition">Domaines d'intervention</a>
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
                            <h1 class="domaine-title">Santé et Nutrition</h1>
                            <img src="img/sante-nutrition.jpeg" />
                            <p>
                                Lorem ipsum dolor sit amet, consectetur APIS croit fermement en l'importance de donner à chaque enfant un avenir prometteur. Que ce soit au Niger ou dans le monde entier, nous nous engageons à offrir aux enfants un bon départ dans la vie, en leur donnant accès à l'éducation, à la protection contre les dangers et en leur fournissant les soins nécessaires. Notre objectif est de transformer leur vie et de façonner un avenir meilleur que nous partageons tous.
                            </p>
                            <h3>Chef de département de Santé et Nutrition</h3>
                            <p>
                            Le chef de département santé et nutrition joue un rôle crucial au sein d'APIS,                            étant responsable de la direction technique de notre travail dans les domaines de                           la santé et de la nutrition. Cela comprend les secteurs liés à la santé des                           nouveau-nés, des enfants et des mères, à la nutrition, à la santé des                         adolescents, à la santé sexuelle et reproductive, à la planification familiale, à                           la santé et à la nutrition scolaires, ainsi qu'au renforcement du système de                          santé.
                            </p>
                            <p>
                              Ce chef de département est chargé de définir l'orientation stratégique du secteur de la santé, de concevoir de nouveaux programmes et projets, ainsi que d'identifier et de mettre en œuvre des partenariats stratégiques. Il/elle garantit la qualité et l'apprentissage des programmes pour une série de projets, conseille le personnel technique sur le terrain et représente APIS au plus haut niveau lors de plaidoyers auprès du gouvernement du Niger, des partenaires  et des principales parties prenantes nationales et internationales.
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

        {{-- Side bar Starts --}}
        @include('includes.sidebar')
        {{-- Side bar Ends --}}
                </div>
            </div>
        </div>
        <!-- Single Post End-->   
@stop