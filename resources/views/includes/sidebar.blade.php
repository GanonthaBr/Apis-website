 <div class="col-lg-4">
                        <div class="sidebar">
                            <div class="sidebar-widget">
                                <div class="search-widget">
                                    <form>
                                        <input class="form-control" type="text" placeholder="Taper pour rechercher">
                                        <button class="btn"><i class="fa fa-search"></i></button>
                                    </form>
                                </div>
                            </div>

                            <div class="sidebar-widget">
                                <h2 class="widget-title">Publications récentes<h2>
                                <div class="recent-post ">
                                   @foreach ($blogs as $blog)
                                         <div class="post-item">
                                        <div class="post-img">
                                            <img src="{{asset('storage/' . $blog -> image)}}" />
                                        </div>
                                        <div class="post-text domaine-links">
                                            <a href="{{route('blogs.show',['id'=>$blog->id])}}"> {{ substr($blog -> content,0,60) }}... </a>
                                            <div class="post-meta">
                                                <p>Par<a href="">Admin</a></p>
                                                <p>Sur<a href="">APIS Sahel</a></p>
                                            </div>
                                        </div>
                                    </div>
                                   @endforeach
                                  
                                    {{-- <div class="post-item">
                                        <div class="post-img">
                                            <img src="{{asset('img/blog-laba-1.png')}}" />
                                        </div>
                                        <div class="post-text domaine-links">
                                            <a href="">La région de Tillabéry, située aux confins du Mali et du Burikina...</a>
                                            <div class="post-meta">
                                                <p>Par<a href="">Admin</a></p>
                                                <p>Sur<a href="">APIS Sahel</a></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="post-item">
                                        <div class="post-img">
                                            <img src="{{asset('img/blog-yagarey-1.png')}}" />
                                        </div>
                                        <div class="post-text domaine-links">
                                            <a href="">Yogarey : Une Oasis d'Espoir et d'Innovation grâce à la    Métamorphose</a>
                                            <div class="post-meta">
                                                <p>Par<a href="">Admin</a></p>
                                                <p>Sur<a href="">APIS Sahel</a></p>
                                            </div>
                                        </div>
                                    </div> --}}
                                    
                                </div>
                            </div>

                            <div class="sidebar-widget">
                                <div class="image-widget">
                                    <a href="#"><img src="{{asset('img/blog-1.jpg')}}" alt="Image"></a>
                                </div>
                            </div>

                            <div class="sidebar-widget">
                                <div class="tab-post">
                                    <ul class="nav nav-pills nav-justified">
                                        <li class="nav-item">
                                            <a class="nav-link active" data-toggle="pill" href="#featured">Importants</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" data-toggle="pill" href="#popular">Populaires</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" data-toggle="pill" href="#latest">récentes</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <div class="sidebar-widget">
                                <div class="image-widget">
                                    <a href="#"><img src="{{asset('img/blog-2.jpg')}}" alt="Image"></a>
                                </div>
                            </div>

                            <div class="sidebar-widget">
                                <h2 class="widget-title">Categories</h2>
                                <div class="category-widget domaine-links">
                                    <ul>
                                        <li><a  href="">National</a><span>(98)</span></li>
                                        <li><a href="">International</a><span>(87)</span></li>
                                        <li><a href="">Economics</a><span>(76)</span></li>
                                        <li><a href="">Politics</a><span>(65)</
                                    </ul>
                                </div>
                            </div>

                            {{-- <div class="sidebar-widget">
                                <div class="image-widget">
                                    <a href="#"><img src="img/blog-3.jpg" alt="Image"></a>
                                </div>
                            </div> --}}

                            <div class="sidebar-widget">
                                <h2 class="widget-title">Liens Importants</h2>
                                <div class="tag-widget">
                                    <a href="">National</a>
                                    <a href="">International</a>
                                    <a href="">Economics</a>
                                
                                </div>
                            </div>

                            {{-- <div class="sidebar-widget">
                                <h2 class="widget-title">Text Widget</h2>
                                <div class="text-widget">
                                    <p>
                                        Lorem ipsum dolor sit amet elit. Integer lorem augue purus mollis sapien, non eros leo in nunc. Donec a nulla vel turpis tempor ac vel justo. In hac platea nec eros. Nunc eu enim non turpis id augue.
                                    </p>
                                </div>
                            </div> --}}
                        </div>
                    </div>