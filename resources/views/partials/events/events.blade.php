  {{-- Events Starts --}}
  <div class="event">
            <div class="container">
                <div class="section-header text-center">
                    <p>Nos événements récents</p>
                    <h2>Nos plus récents et futurs événements.</h2>
                </div>
                <div class="row">
                    {{-- <div class="col-lg-6">
                        <div class="event-item">
                            <img src="{{asset('img/event-1-0.png')}}" alt="Image" />
                            <div class="event-content">
                                <div class="event-meta">
                                    <p>
                                        <i class="fa fa-calendar-alt"></i
                                        >01-Mars-2024
                                    </p>
                                    <p>
                                        <i class="far fa-clock"></i>8:00 - 10:00
                                    </p>
                                    <p class="d-none d-lg-flex" >
                                    Gotheye-larbabirno
                                    </p>
                                </div>
                                <div class="event-text">
                                    <h3>Distribution</h3>
                                    <p>
                                      Événement de distribution des kits non-alimentaires à la population du village de Larbabirno.
                                    </p>
                                    <a class="btn btn-custom" href=""
                                        >Voir plus</a
                                    >
                                </div>
                            </div>
                        </div>
                    </div> --}}
                    @foreach ($events as $event)
                        <div class="col-lg-6">
                        <div class="event-item">
                            {{-- <img src="{{asset('img/event-1-1.png')}}" alt="Image" /> --}}
                           <img src="{{asset('storage/' . $event->image)}}" alt="{{$event->title}}">
                            <div class="event-content">
                                <div class="event-meta">
                                    <p>
                                        <i class="fa fa-calendar-alt"></i
                                        >{{$event->date}} 
                                    </p>
                                   
                                    <p>
                                        <i class="far fa-clock"></i>{{substr($event->start_time,12,15)}} - {{substr($event->end_time,12,15)}}
                                    </p>
                                    <p class="d-none d-lg-flex"  >
                                        <i class="fa fa-map-marker-alt"></i>{{$event->location}}
                                    </p>
                                </div>
                                <div class="event-text">
                                    <h3>{{$event->title}}</h3>
                                    <p>
                                        {{substr($event->description,0,115)}}
                                   
                                    </p>
                                    <a class="btn btn-custom" href=""
                                        >Voir plus</a
                                    >
                                </div>
                            </div>
                        </div>
                    </div>
                        
                    @endforeach
                </div>
            </div>
        </div>
{{-- Events Ends --}}