   <div class="carousel">
            <div class="container-fluid">
                <div class="owl-carousel">
                    <div class="carousel-item">
                        <div class="carousel-img">
                            <img src="{{asset('img/carousel-5.png')}}" alt="Image" />
                        </div>
                        <div class="carousel-text">
                            <h1>Sécurité alimentaire.</h1>
                            <p>
                        {{-- Ecrire une breve description sur la securite alimentaire --}}
                              La sécurité alimentaire est une condition préalable à la santé et au bien-être de tous. APIS œuvre pour un accès physique, social et économique à une nourriture suffisante, saine et nutritive pour les communautés rurales.
                            </p>
                            <div class="carousel-btn">
                                <a class="btn btn-custom" href="#donate">Faire un Don</a>
                                <a
                                    type="button"
                                    class="btn btn-custom btn-primary"
                                    data-toggle="modal"
                                    data-video="https://www.youtube.com/embed/vdHT9kJVIN0?si=1V3wq8tfxMc1_gfe"
                                    data-target="#videoModal"
                                    >Voir Vidéo</a
                                >
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="carousel-img">
                            <img src="{{asset('img/carousel-2.png')}}" alt="Image" />
                        </div>
                        <div class="carousel-text">
                            <h1>Urgence Humanitaire</h1>
                            <p>
                                {{-- Ecrire en 2 phrases une description de APIS oeuvrant pour l'urgence humanitaire --}}
                                APIS intervient dans les situations d'urgence humanitaire pour sauver des vies, soulager la souffrance et préserver la dignité des populations affectées par les conflits armés, les catastrophes naturelles et les épidémies.
                                
                            </p>
                             <div class="carousel-btn">
                                <a class="btn btn-custom" href="">Faire un Don</a>
                                <a
                                    type="button"
                                    class="btn btn-custom btn-primary"
                                    data-toggle="modal"
                                    data-video="https://www.youtube.com/embed/vdHT9kJVIN0?si=1V3wq8tfxMc1_gfe"
                                    data-target="#videoModal"
                                    >Voir Vidéo</a
                                >
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="carousel-img">
                            <img src="{{asset('img/carousel-4.png')}}" alt="Image" />
                        </div>
                        <div class="carousel-text">
                            <h1>Santé et Nutrition</h1>
                            <p>
                                {{-- Ecrire en 2 phrases une description de APIS oeuvrant dans la nutrition et la sante --}}
                                APIS s'engage à améliorer la santé et la nutrition des populations rurales en leur donnant accès à des services de santé de qualité et à une alimentation saine et nutritive.
                            </p>
                             <div class="carousel-btn">
                                <a class="btn btn-custom" href="">Faire un Don</a>
                                <a
                                    type="button"
                                    class="btn btn-custom btn-primary"
                                    data-toggle="modal"
                                    data-video="https://www.youtube.com/embed/vdHT9kJVIN0?si=1V3wq8tfxMc1_gfe"
                                    data-target="#videoModal"
                                    >Voir Vidéo</a
                                >
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="carousel-img">
                            <img src="{{asset('img/education-1.png')}}" alt="Image" />
                        </div>
                        <div class="carousel-text">
                            <h1>Éducation et Développement Social </h1>
                            <p>
                                {{-- Ecrire en 2 phrases une description de APIS oeuvrant pour  l'education et le developpement --}}
                                APIS s'engage à améliorer l'accès à une éducation de qualité pour les enfants et les jeunes des communautés rurales, en particulier les filles, pour leur permettre de réaliser leur plein potentiel et de contribuer au développement de leur communauté.
                            </p>
                           
                             <div class="carousel-btn">
                                <a class="btn btn-custom" href="">Faire un Don</a>
                                <a
                                    type="button"
                                    class="btn btn-custom btn-primary"
                                    data-toggle="modal"
                                    data-video="https://www.youtube.com/embed/vdHT9kJVIN0?si=1V3wq8tfxMc1_gfe"
                                    data-target="#videoModal"
                                    >Voir Vidéo</a
                                >
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        @include('partials.modal-video')