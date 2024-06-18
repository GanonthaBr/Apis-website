        <!-- Blog Start -->
        <div class="blog" id="blog">
            <div class="container">
                <div class="section-header text-center">
                    <p>{{__('Nos Actualités')}}</p>
                    <h2>{{__('Découvrez nos dernières actualités à travers de blogs posts.')}}</h2>
                </div>
                {{-- @include('partials.blogs.blog-content') --}}
                <div class="row">
                    @if($blogs->count())
                    @foreach ($blogs as $blog)
                    <div class="col-lg-4">
                        <div class="blog-item">
                            <div class="blog-img">
                                <img src="{{ asset('storage/' . $blog->image )}}" alt="{{$blog->id}}">
                            </div>
                            <div class="blog-text">
                                <h3><a href="{{route('blogs.show', ['id' => $blog->id])}}">{{$blog->title}}</a></h3>
                                <p>

                                    {!! substr($blog->content,0,150) !!}...
                                </p>
                            </div>
                            <div class="blog-meta">
                                <p><i class="fa fa-user"></i><a href="">{{$blog->author}}</a></p>
                                <p><i class="fa fa-comments"></i><a href="">{{$blog->comments->count()}} {{__('Commentaires')}}</a></p>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    @else
                    <div class="alert alert-warning col-md-8 offset-md-2 mt-3">{{__('Aucune actualité enregistrée pour le moment !')}}</div>
                    @endif
        
        </div>
        {{-- <div class="row">
            <div class="col-12">
                <ul class="pagination justify-content-center">
                    <li class="page-item disabled"><a class="page-link" href="">{{__('Previous')}}</a></li>
                    <li class="page-item"><a class="page-link" href="">1</a></li>
                    <li class="page-item active"><a class="page-link" href="">2</a></li>
                    <li class="page-item"><a class="page-link" href="">3</a></li>
                    <li class="page-item"><a class="page-link" href="{{route('blogs.index')}}">{{__('Next')}}</a></li>
                </ul>
            </div>
        </div> --}}
        </div>
        </div>
        <!-- Blog End -->