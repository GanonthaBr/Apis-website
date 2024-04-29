        <!-- Blog Start -->
        <div class="blog" id="blog">
            <div class="container">
                <div class="section-header text-center">
                    <p>Nos Actualités</p>
                    <h2>Découvrez nos dernières actualités à travers de blogs posts.</h2>
                </div>
               {{-- @include('partials.blogs.blog-content') --}}
                <div class="row">
                @foreach ($blogs as $blog)
                    <div class="col-lg-4">
                        <div class="blog-item">
                            <div class="blog-img">
                                <img src="{{ asset('storage/' . $blog->image )}}" alt="Image">
                            </div>
                            <div class="blog-text">
                                <h3><a href="{{route('blogs.show', ['id' => $blog->id])}}">{{$blog->title}}</a></h3>
                                <p>
                                    
                                    {{ substr($blog->content,0,150) }}...
                                </p>
                            </div>
                            <div class="blog-meta">
                                <p><i class="fa fa-user"></i><a href="">Admin</a></p>
                                <p><i class="fa fa-comments"></i><a href="">0 Commentaires</a></p>
                            </div>
                        </div>
                    </div>
                @endforeach
                    {{-- <div class="col-lg-4">
                        <div class="blog-item">
                            <div class="blog-img">
                                <img src="{{asset('img/blog-yagarey-2.png')}}" alt="Image">
                            </div>
                            <div class="blog-text">
                                <h3><a href="#">Yogarey : Une Oasis d'Espoir et d'Innovation </a></h3>
                                <p>
                                   Situé dans la région de Tillabéry, au cœur du département de Gothey, Yogarey émerge comme un phare d'espoir et d'innovation. Cette transformation spectaculaire, rendue possible grâce à l'activité FFA 
                                </p>
                            </div>
                            <div class="blog-meta">
                                <p><i class="fa fa-user"></i><a href="">Admin</a></p>
                                <p><i class="fa fa-comments"></i><a href="">0 Commentaires</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="blog-item">
                            <div class="blog-img">
                                <img src="{{asset('img/blog-adh-2.png')}}" alt="Image">
                            </div>
                            <div class="blog-text">
                                <h3><a href="#">Renforcement des capacités et resilience</a></h3>
                                <p>
                                    Dans le cadre du renforcement des capacités de résilience et des moyens de subsistance, l'ONG ACTION POUR LE PROGRAMME D'IMPACT AU SAHEL, en partenariat avec World Vision 
                                </p>
                            </div>
                            <div class="blog-meta">
                                <p><i class="fa fa-user"></i><a href="">Admin</a></p>
                                <p><i class="fa fa-comments"></i><a href="" >5 Comments</a></p>
                            </div>
                        </div>
                    </div> --}}
                    {{-- <div class="col-lg-4">
                        <div class="blog-item">
                            <div class="blog-img">
                                <img src="{{asset('img/blog-1.jpg')}}" alt="Image">
                            </div>
                            <div class="blog-text">
                                <h3><a href="#">Lorem ipsum dolor sit</a></h3>
                                <p>
                                    Lorem ipsum dolor sit amet elit. Neca pretim miura bitur facili ornare velit non vulpte liqum metus tortor
                                </p>
                            </div>
                            <div class="blog-meta">
                                <p><i class="fa fa-user"></i><a href="">Admin</a></p>
                                <p><i class="fa fa-comments"></i><a href="">15 Comments</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="blog-item">
                            <div class="blog-img">
                                <img src="{{asset('img/blog-2.jpg')}}" alt="Image">
                            </div>
                            <div class="blog-text">
                                <h3><a href="#">Lorem ipsum dolor sit</a></h3>
                                <p>
                                    Lorem ipsum dolor sit amet elit. Neca pretim miura bitur facili ornare velit non vulpte liqum metus tortor
                                </p>
                            </div>
                            <div class="blog-meta">
                                <p><i class="fa fa-user"></i><a href="">Admin</a></p>
                                <p><i class="fa fa-comments"></i><a href="">15 Comments</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="blog-item">
                            <div class="blog-img">
                                <img src="{{asset('img/blog-3.jpg')}}" alt="Image">
                            </div>
                            <div class="blog-text">
                                <h3><a href="#">Lorem ipsum dolor sit</a></h3>
                                <p>
                                    Lorem ipsum dolor sit amet elit. Neca pretim miura bitur facili ornare velit non vulpte liqum metus tortor
                                </p>
                            </div>
                            <div class="blog-meta">
                                <p><i class="fa fa-user"></i><a href="">Admin</a></p>
                                <p><i class="fa fa-comments"></i><a href="">15 Comments</a></p>
                            </div>
                        </div>
                    </div> --}}
</div>
                <div class="row">
                    <div class="col-12">
                        <ul class="pagination justify-content-center">
                            <li class="page-item disabled"><a class="page-link" href="">Previous</a></li>
                            <li class="page-item"><a class="page-link" href="">1</a></li>
                            <li class="page-item active"><a class="page-link" href="">2</a></li>
                            <li class="page-item"><a class="page-link" href="">3</a></li>
                            <li class="page-item"><a class="page-link" href="{{route('blogs.index')}}">Next</a></li>
                        </ul> 
                    </div>
                </div>
            </div>
        </div>
        <!-- Blog End -->