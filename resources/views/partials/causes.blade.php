<div class="causes">
    <div class="container">
        <div class="section-header text-center">
            <p>Nos Causes</p>
            <h2>Nous avons la conviction d'appuyer le monde rural</h2>
        </div>
        <div class="owl-carousel causes-carousel">
        @if($causes->count())
              @foreach ($causes as $cause)
                <div class="causes-item">
                <div class="causes-img">
                    <img src="{{asset('storage/' . $cause->image)}}" alt="Image" />
                    {{-- <img src="{{asset('img/side-bar-image.png')}}" alt="Image" /> --}}
                </div>
               <div class="causes-text">
                    <h3>{{$cause->name}}</h3>
                    {{-- <h3>Lutter</h3> --}}
                    <p>
                        {{$cause->description}}
                        {{-- Lutter efficacement contre l’insécurité alimentaire qui affecte le monde rural les plus vulnérables constitués des femmes et enfants. --}}
                    </p>
                </div>
                <div class="causes-btn">
                    <a class="btn btn-custom">En savoir+</a>
                    <a class="btn btn-custom" href="#donate">Faire un Don</a>
                </div>
            </div>
          @endforeach
        @else
            <p class="text-center text-danger">Aucune cause disponible</p>
        @endif
            {{-- <div class="causes-item">
                <div class="causes-img">
                    <img src="{{asset('img/blog-laba-2.png')}}" alt="Image" />
                </div>
           
                <div class="causes-text">
                    <h3>Promouvoir</h3>
                    <p>
                        Promouvoir la santé de la population la plus vulnérable en accompagnant des initiatives de développement de santé/Nutrition.
                    </p>
                </div>
                <div class="causes-btn">
                    <a class="btn btn-custom">En savoir+</a>
                    <a class="btn btn-custom" href="#donate">Faire un Don</a>
                </div>
            </div>
            <div class="causes-item">
                <div class="causes-img">
                    <img src="{{asset('img/cause.png')}}" alt="Image" />
                </div>
              
                <div class="causes-text">
                    <h3>Initier</h3>
                    <p>
                        Initier et renforcer les activités d’hydrauliques, d’hygiène et de l’assainissement tout en veillant sur la protection de l’environnement.
                    </p>
                </div>
                <div class="causes-btn">
                    <a class="btn btn-custom">En savoir+</a>
                    <a class="btn btn-custom" href="#donate">Faire un Don</a>
                </div>
            </div> --}}
           
        </div>
    </div>
</div>