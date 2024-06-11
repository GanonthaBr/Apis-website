        {{-- About Starts --}}
        <div class="about">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="about-img" data-parallax="scroll" data-image-src="{{asset('img/about-image.png')}}"></div>
                    </div>
                    <div class="col-lg-6">
                        <div class="section-header">
                            <p>{{__('À propos de nous.')}}</p>
                            <h2>{{__('Actions et Programmes dImpacts au Sahel')}}</h2>
                        </div>
                        <div class="about-tab">
                            <ul class="nav nav-pills nav-justified">
                                <li class="nav-item">
                                    <a class="nav-link active" data-toggle="pill" href="#tab-content-1">{{__('A propos')}}</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="pill" href="#tab-content-2">{{__('Mission')}}</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="pill" href="#tab-content-3">{{__('Vision')}}</a>
                                </li>
                            </ul>

                            <div class="tab-content">
                                <div id="tab-content-1" class="container tab-pane active">
                                   {{__('creation et arrete')}}
                                    <p class="arrete">{{__('reconnu par')}}</p>
                                    <div class="carousel-btn">
                                        <a class="btn btn-custom" href="{{route('about.index')}}">{{__('En savoir plus')}}</a>
                                    </div>

                                </div>
                                <div id="tab-content-2" class="container tab-pane fade">
                                   {{__('developper de facon')}}
                                </div>
                                <div id="tab-content-3" class="container tab-pane fade">
                                    {{__('accompagner les communautes')}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- About Ends --}}