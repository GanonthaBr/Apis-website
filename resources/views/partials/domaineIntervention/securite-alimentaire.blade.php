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
                        <a href="{{route('domaines.securitealimentaire')}}">Domaines d'intervention</a>
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
                            <h1 class="domaine-title">Sécurité Alimentaire et Moyens de subsistance</h1>
                            <img src="{{asset('img/sante-nutrition.jpeg')}}" />
                            <p>
                               
                                Notre ONG s'engage à garantir à chaque individu un accès à une alimentation adéquate et à des moyens de subsistance durables. Pour ce faire, nous mettons en œuvre des initiatives visant à promouvoir des pratiques agricoles durables, la diversification des cultures et le développement de jardins potagers. Nous soutenons également le renforcement des moyens de subsistance des communautés locales en améliorant leurs pratiques de production, en facilitant l'accès aux marchés et en offrant des opportunités de formation professionnelle et d'accès au microcrédit. Nous accordons une attention particulière à l'autonomisation des femmes et des jeunes, car nous croyons que leur participation active est essentielle pour garantir la durabilité à long terme de nos interventions.
                            </p>
                            <h3>Collaboration et partenariat</h3>
                            <p>
                                                   En collaborant avec les gouvernements, les organisations locales et d'autres partenaires, notre objectif est de créer des communautés résilientes et prospères, où chacun peut vivre en sécurité, se nourrir sainement et prospérer économiquement.

                            </p>
                          
                        </div>
                        <h6>D'autres liens</h6>
                        @include('partials.other-links')
                    </div>
        {{-- Side bar Starts --}}
        @include('includes.sidebar')
        {{-- Side bar Ends --}}
                </div>
            </div>
        </div>
        <!-- Single Post End-->   
@stop