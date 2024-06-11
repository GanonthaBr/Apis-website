<div class="container strategies" id="strategies">
        <ul class="nav nav-pills nav-justified pb-3">
            <li class="nav-item">
                <a class="nav-link active" data-toggle="pill" href="#tab1">{{__('Stratégies')}}</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="pill" href="#tab2">{{__('Approche')}}</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="pill" href="#tab3">{{__('Réssources humaine')}}</a>
            </li>
        </ul>
        <div class="tab-content pt-6">
            <div id="tab1" class="container tab-pane active row">
        <div class="row">
            <div class="col-lg-6">
                <img src="{{asset('img/carousel-4.png')}}" alt="Image 1">
            </div>
            <div class="col py-4">
                <p>{{__('strategie descritpion one')}}</p>

                <p> 
                    {{__('strategie descritpion two')}}
                </p>
                <p>
                   {{__('strategie descritpion three')}}
                </p>
            </div>
        </div>
            </div>
            <div id="tab2" class="container tab-pane row"> 
         <div class="row">
              <div class="col-lg-6">
                <div class="row">
                    <img src="{{asset('img/approche-1.png')}}" alt="Image 2" class="py-3">
                </div>
                <div class="row">
                    <img src="{{asset('img/approche-2.png')}}" alt="Image 2" class="py-3">
                </div>
              </div>
              <div class="col py-4">
                <h3>{{__('Principe de base')}}</h3>
                     <p>{{__('Approche one')}}</p>
                <h3>{{__('Dans la perspective dimpulser le développement intégré')}}</h3>
                <p>
                   {{__('Approche two')}}
                    <ul>
                        <li>{{__('La Gestion Axée sur les Résultats de Développement (GARD);')}}</li>
                        <li>{{__('LAnalyse des facteurs sociaux, technologiques, économiques et politiques (STEP);')}}</li>
                        <li>{{__('La Méthodes Accélérée de Recherche Participative (MARP/PRA/RRA);')}}</li>
                        <li>{{__('Approche three')}}</li>
                    </ul>
                </p>
               </div>
         </div>
            </div>
            <div id="tab3" class="container tab-pane">
            <div class="row">
                   <div class="col-lg-6">
                        <img src="{{asset('img/ressource-humaine.png')}}" alt="Image 3">
                   </div>
                   <div class="col py-5">
                    <h3>{{__('lONG dispose dune assise technique le permettant de développer et dinitier des actions afin de faire face à des situations qui affectent le monde rural')}}</h3>
                         <p>
                            {{__('ressources humaine description')}}
                         </p>
                   </div>
            </div>
            </div>
        </div>
</div>