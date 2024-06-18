<div class="col-lg-4">
        <!-- Recent Activity -->
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">{{__('Activités récentes')}} </h5>
            <div class="activity">
              @foreach ($blogs as $blog)
              <div class="activity-item d-flex">
                <div class="activite-label">{{__('Blog Post')}} </div>
                <i class='bi bi-circle-fill activity-badge text-success align-self-start'></i>
                <div class="activity-content">
                  <p>{{substr($blog->title,0,10) }}...</p>
                  {{-- <p>{{substr($blog->content,0,20) }}...</p> --}}
                  {!!substr($blog->content,0,10) !!} <a href="#" class="fw-bold text-dark">{!!substr($blog->content,11,20) !!}...</a>
                </div>
              </div>
              @endforeach
              <!-- End activity item-->
              @foreach ($events as $event)
              <div class="activity-item d-flex">
                <div class="activite-label">{{__('Event')}} </div>
                <i class='bi bi-circle-fill activity-badge text-danger align-self-start'></i>
                <div class="activity-content">
                  {!!substr($event->description,0,20)!!}
                </div>
              </div>
              @endforeach
              <!-- End activity item-->
            </div>
          </div>
        </div>
        <!-- End Recent Activity -->
       
        <div class="card">
          <div class="card-body pb-0">
            <h5 class="card-title"> {{__('News')}} &amp; {{__('Articles')}}</h5>

            <div class="news">
              @foreach ($blogs as $blog)
                  <div class="post-item clearfix">
                <img src="{{ asset('storage/' . $blog->image )}}" alt="">
                <h4><a href="{{route('blogs.show', $blog->id)}}">{{$blog->title}}</a></h4>
                <p>{!!substr($blog->content,0,25)!!}...</p>
              </div>
              @endforeach
            </div>
            <!-- End sidebar recent posts-->

          </div>
        </div>
        <!-- End News & Updates -->

      </div>