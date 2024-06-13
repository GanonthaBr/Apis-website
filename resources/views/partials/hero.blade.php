   <div class="carousel hero">
       <div class="container-fluid">
           <div class="owl-carousel">
               <div class="carousel-item">
                   <div class="carousel-img">
                       <img src="{{asset('img/carousel-5.png')}}" alt="Image" />
                   </div>
                   <div class="carousel-text">
                       <h1>{{__('Sécurité alimentaire.')}}</h1>
                       <p>
                          {{__('Sécurité alimentaire description')}}
                       </p>
                       <div class="carousel-btn">
                           <a class="btn btn-custom" href="#donate">{{__('Faire un Don')}} </a>
                           <a type="button" class="btn btn-custom btn-primary" data-toggle="modal" data-video="https://www.youtube.com/embed/vdHT9kJVIN0?si=1V3wq8tfxMc1_gfe" data-target="#videoModal">{{__('Voir Vidéo')}}</a>
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
                           {{__('Urgence Humanitaire description')}}
                           

                       </p>
                       <div class="carousel-btn">
                           <a class="btn btn-custom" href="">{{__('Faire un Don')}}</a>
                           <a type="button" class="btn btn-custom btn-primary" data-toggle="modal" data-video="https://www.youtube.com/embed/vdHT9kJVIN0?si=1V3wq8tfxMc1_gfe" data-target="#videoModal">{{__('Voir Vidéo')}}</a>
                       </div>
                   </div>
               </div>
               <div class="carousel-item">
                   <div class="carousel-img">
                       <img src="{{asset('img/carousel-4.png')}}" alt="Image" />
                   </div>
                   <div class="carousel-text">
                       <h1>{{__('Santé et Nutrition')}}</h1>
                       <p>
                          {{__('Santé et Nutrition descrption')}}
                          
                       </p>
                       <div class="carousel-btn">
                           <a class="btn btn-custom" href="">{{__('Faire un Don')}}</a>
                           <a type="button" class="btn btn-custom btn-primary" data-toggle="modal" data-video="https://www.youtube.com/embed/vdHT9kJVIN0?si=1V3wq8tfxMc1_gfe" data-target="#videoModal">{{__('Voir Vidéo')}}</a>
                       </div>
                   </div>
               </div>
               <div class="carousel-item">
                   <div class="carousel-img">
                       <img src="{{asset('img/education-1.png')}}" alt="Image" />
                   </div>
                   <div class="carousel-text">
                       <h1>{{__('Éducation et Développement Social')}} </h1>
                       <p>
                           {{__('Éducation et Développement Social description')}}
                       </p>

                       <div class="carousel-btn">
                           <a class="btn btn-custom" href="">{{__('Faire un Do')}}n</a>
                           <a type="button" class="btn btn-custom btn-primary" data-toggle="modal" data-video="https://www.youtube.com/embed/vdHT9kJVIN0?si=1V3wq8tfxMc1_gfe" data-target="#videoModal">{{__('Voir Vidéo')}}</a>
                       </div>
                   </div>
               </div>
           </div>
       </div>
   </div>

   @include('partials.modal-video')