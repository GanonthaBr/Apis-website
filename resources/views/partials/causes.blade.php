<div class="causes">
    <div class="container">
        <div class="section-header text-center">
            <p>{{__('Nos Causes')}}</p>
            <h2>{{__('Nous avons la conviction dappuyer le monde rural')}}</h2>
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
                    <a class="btn btn-custom">{{__('En savoir+')}}</a>
                    <a class="btn btn-custom" href="#donate"></a>
                </div>
            </div>
          @endforeach
        @else
            <p class="text-center text-danger">{{__('Aucune cause disponible')}}</p>
        @endif
          
           
        </div>
    </div>
</div>