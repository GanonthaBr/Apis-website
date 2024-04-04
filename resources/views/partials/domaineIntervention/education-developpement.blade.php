@extends('layouts.layout') 
  @section('content')
            @include('includes.topbar')
            @include('includes.navbar')
         <!-- Page Header Start -->
        <div class="page-header">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h2>Domaines d'intervention</h2>
                    </div>
                    <div class="col-12">
                        <a href="/">Accueil</a>
                        <a href="/educationdeveloppement">Domaines d'intervention</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Page Header End -->  
               <!-- Single Post Start-->
        <div class="single partial-content">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="single-content">
                            <h1 class="domaine-title">Education et Développement Integré</h1>
                            <img src="img/sante-nutrition.jpeg" />
                             <h3>Education</h3>
                            <p>
                                L'ONG APIS s'engage dans le secteur de l'éducation, offrant un accès équitable à l'apprentissage de qualité pour tous, même dans les situations d'urgence humanitaire. À travers des programmes innovants et adaptés, nous favorisons le développement cognitif, social et émotionnel des enfants et des jeunes, renforçant ainsi leurs perspectives d'avenir. En partenariat avec les communautés et les autorités locales, nous mettons en œuvre des initiatives axées sur l'éducation formelle et non formelle, assurant ainsi la résilience éducative même dans les contextes les plus difficiles.
                            </p>
                            <h3>Développement Integré</h3>
                           
                            <p>
                           L'ONG APIS s'engage dans le développement intégré des communautés. Notre approche holistique aborde les besoins multiples des populations, de l'agriculture durable à l'éducation en passant par la santé et l'accès à l'eau. En collaborant avec les parties prenantes locales, nous visons à créer des changements durables et équilibrés, favorisant ainsi l'autonomisation et la résilience des communautés pour un avenir meilleur.
                            </p>
                           
                        </div>
                        <h6>D'autres liens</h6>
                        <div class="single-tags">
                            <a href="">Santé & Nutrition</a>
                            <a href="">Urgence humanitaire</a>
                            <a href="">Sécurité Alimentaire</a>
                            <a href="">Education et Développement social</a>
                        </div>
                        {{-- <div class="single-bio">
                            <div class="single-bio-img">
                                <img src="img/user.jpg" />
                            </div>
                            <div class="single-bio-text">
                                <h3>Author Name</h3>
                                <p>
                                    Lorem ipsum dolor sit amet elit. Integer lorem augue purus mollis sapien, non eros leo in nunc. Donec a nulla vel turpis tempor ac vel justo. In hac platea dictumst.
                                </p>
                            </div>
                        </div> --}}
                        {{-- <div class="single-related">
                            <h2>Related Post</h2>
                            <div class="owl-carousel related-slider">
                                <div class="post-item">
                                    <div class="post-img">
                                        <img src="img/post-1.jpg" />
                                    </div>
                                    <div class="post-text">
                                        <a href="">Lorem ipsum dolor sit amet consec adipis elit</a>
                                        <div class="post-meta">
                                            <p>By<a href="">Admin</a></p>
                                            <p>In<a href="">Web Design</a></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="post-item">
                                    <div class="post-img">
                                        <img src="img/post-2.jpg" />
                                    </div>
                                    <div class="post-text">
                                        <a href="">Lorem ipsum dolor sit amet consec adipis elit</a>
                                        <div class="post-meta">
                                            <p>By<a href="">Admin</a></p>
                                            <p>In<a href="">Web Design</a></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="post-item">
                                    <div class="post-img">
                                        <img src="img/post-3.jpg" />
                                    </div>
                                    <div class="post-text">
                                        <a href="">Lorem ipsum dolor sit amet consec adipis elit</a>
                                        <div class="post-meta">
                                            <p>By<a href="">Admin</a></p>
                                            <p>In<a href="">Web Design</a></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="post-item">
                                    <div class="post-img">
                                        <img src="img/post-4.jpg" />
                                    </div>
                                    <div class="post-text">
                                        <a href="">Lorem ipsum dolor sit amet consec adipis elit</a>
                                        <div class="post-meta">
                                            <p>By<a href="">Admin</a></p>
                                            <p>In<a href="">Web Design</a></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> --}}

                        {{-- <div class="single-comment">
                            <h2>3 Comments</h2>
                            <ul class="comment-list">
                                <li class="comment-item">
                                    <div class="comment-body">
                                        <div class="comment-img">
                                            <img src="img/user.jpg" />
                                        </div>
                                        <div class="comment-text">
                                            <h3><a href="">Josh Dunn</a></h3>
                                            <span>01 Jan 2045 at 12:00pm</span>
                                            <p>
                                                Lorem ipsum dolor sit amet elit. Integer lorem augue purus mollis sapien, non eros leo in nunc. Donec a nulla vel turpis tempor ac vel justo. In hac platea dictumst. 
                                            </p>
                                            <a class="btn" href="">Reply</a>
                                        </div>
                                    </div>
                                </li>
                                <li class="comment-item">
                                    <div class="comment-body">
                                        <div class="comment-img">
                                            <img src="img/user.jpg" />
                                        </div>
                                        <div class="comment-text">
                                            <h3><a href="">Josh Dunn</a></h3>
                                            <p><span>01 Jan 2045 at 12:00pm</span></p>
                                            <p>
                                                Lorem ipsum dolor sit amet elit. Integer lorem augue purus mollis sapien, non eros leo in nunc. Donec a nulla vel turpis tempor ac vel justo. In hac platea dictumst. 
                                            </p>
                                            <a class="btn" href="">Reply</a>
                                        </div>
                                    </div>
                                    <ul class="comment-child">
                                        <li class="comment-item">
                                            <div class="comment-body">
                                                <div class="comment-img">
                                                    <img src="img/user.jpg" />
                                                </div>
                                                <div class="comment-text">
                                                    <h3><a href="">Josh Dunn</a></h3>
                                                    <p><span>01 Jan 2045 at 12:00pm</span></p>
                                                    <p>
                                                        Lorem ipsum dolor sit amet elit. Integer lorem augue purus mollis sapien, non eros leo in nunc. Donec a nulla vel turpis tempor ac vel justo. In hac platea dictumst. 
                                                    </p>
                                                    <a class="btn" href="">Reply</a>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div> --}}
                        {{-- <div class="comment-form">
                            <h2>Leave a comment</h2>
                            <form>
                                <div class="form-group">
                                    <label for="name">Name *</label>
                                    <input type="text" class="form-control" id="name">
                                </div>
                                <div class="form-group">
                                    <label for="email">Email *</label>
                                    <input type="email" class="form-control" id="email">
                                </div>
                                <div class="form-group">
                                    <label for="website">Website</label>
                                    <input type="url" class="form-control" id="website">
                                </div>

                                <div class="form-group">
                                    <label for="message">Message *</label>
                                    <textarea id="message" cols="30" rows="5" class="form-control"></textarea>
                                </div>
                                <div class="form-group">
                                    <input type="submit" value="Post Comment" class="btn btn-custom">
                                </div>
                            </form>
                        </div> --}}
                    </div>

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
                                    <div class="post-item">
                                        <div class="post-img">
                                            <img src="img/post-1.jpg" />
                                        </div>
                                        <div class="post-text domaine-links">
                                            <a href="">Lorem ipsum dolor sit amet consec adipis elit</a>
                                            <div class="post-meta">
                                                <p>Par<a href="">Admin</a></p>
                                                <p>Sur<a href="">Web Design</a></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="post-item">
                                        <div class="post-img">
                                            <img src="img/post-1.jpg" />
                                        </div>
                                        <div class="post-text domaine-links">
                                            <a href="">Lorem ipsum dolor sit amet consec adipis elit</a>
                                            <div class="post-meta">
                                                <p>Par<a href="">Admin</a></p>
                                                <p>Sur<a href="">Web Design</a></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="post-item">
                                        <div class="post-img">
                                            <img src="img/post-1.jpg" />
                                        </div>
                                        <div class="post-text domaine-links">
                                            <a href="">Lorem ipsum dolor sit amet consec adipis elit</a>
                                            <div class="post-meta">
                                                <p>Par<a href="">Admin</a></p>
                                                <p>Sur<a href="">Web Design</a></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="post-item">
                                        <div class="post-img">
                                            <img src="img/post-1.jpg" />
                                        </div>
                                        <div class="post-text domaine-links">
                                            <a href="">Lorem ipsum dolor sit amet consec adipis elit</a>
                                            <div class="post-meta">
                                                <p>Par<a href="">Admin</a></p>
                                                <p>Sur<a href="">Web Design</a></p>
                                            </div>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>

                            <div class="sidebar-widget">
                                <div class="image-widget">
                                    <a href="#"><img src="img/blog-1.jpg" alt="Image"></a>
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

                                    {{-- <div class="tab-content">
                                        <div id="featured" class="container tab-pane active">
                                            <div class="post-item">
                                                <div class="post-img">
                                                    <img src="img/post-1.jpg" />
                                                </div>
                                                <div class="post-text">
                                                    <a href="">Lorem ipsum dolor sit amet consec adipis elit</a>
                                                    <div class="post-meta">
                                                        <p>By<a href="">Admin</a></p>
                                                        <p>In<a href="">Web Design</a></p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="post-item">
                                                <div class="post-img">
                                                    <img src="img/post-2.jpg" />
                                                </div>
                                                <div class="post-text">
                                                    <a href="">Lorem ipsum dolor sit amet consec adipis elit</a>
                                                    <div class="post-meta">
                                                        <p>By<a href="">Admin</a></p>
                                                        <p>In<a href="">Web Design</a></p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="post-item">
                                                <div class="post-img">
                                                    <img src="img/post-3.jpg" />
                                                </div>
                                                <div class="post-text">
                                                    <a href="">Lorem ipsum dolor sit amet consec adipis elit</a>
                                                    <div class="post-meta">
                                                        <p>By<a href="">Admin</a></p>
                                                        <p>In<a href="">Web Design</a></p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="post-item">
                                                <div class="post-img">
                                                    <img src="img/post-4.jpg" />
                                                </div>
                                                <div class="post-text">
                                                    <a href="">Lorem ipsum dolor sit amet consec adipis elit</a>
                                                    <div class="post-meta">
                                                        <p>By<a href="">Admin</a></p>
                                                        <p>In<a href="">Web Design</a></p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="post-item">
                                                <div class="post-img">
                                                    <img src="img/post-5.jpg" />
                                                </div>
                                                <div class="post-text">
                                                    <a href="">Lorem ipsum dolor sit amet consec adipis elit</a>
                                                    <div class="post-meta">
                                                        <p>By<a href="">Admin</a></p>
                                                        <p>In<a href="">Web Design</a></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="popular" class="container tab-pane fade">
                                            <div class="post-item">
                                                <div class="post-img">
                                                    <img src="img/post-1.jpg" />
                                                </div>
                                                <div class="post-text">
                                                    <a href="">Lorem ipsum dolor sit amet consec adipis elit</a>
                                                    <div class="post-meta">
                                                        <p>By<a href="">Admin</a></p>
                                                        <p>In<a href="">Web Design</a></p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="post-item">
                                                <div class="post-img">
                                                    <img src="img/post-2.jpg" />
                                                </div>
                                                <div class="post-text">
                                                    <a href="">Lorem ipsum dolor sit amet consec adipis elit</a>
                                                    <div class="post-meta">
                                                        <p>By<a href="">Admin</a></p>
                                                        <p>In<a href="">Web Design</a></p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="post-item">
                                                <div class="post-img">
                                                    <img src="img/post-3.jpg" />
                                                </div>
                                                <div class="post-text">
                                                    <a href="">Lorem ipsum dolor sit amet consec adipis elit</a>
                                                    <div class="post-meta">
                                                        <p>By<a href="">Admin</a></p>
                                                        <p>In<a href="">Web Design</a></p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="post-item">
                                                <div class="post-img">
                                                    <img src="img/post-4.jpg" />
                                                </div>
                                                <div class="post-text">
                                                    <a href="">Lorem ipsum dolor sit amet consec adipis elit</a>
                                                    <div class="post-meta">
                                                        <p>By<a href="">Admin</a></p>
                                                        <p>In<a href="">Web Design</a></p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="post-item">
                                                <div class="post-img">
                                                    <img src="img/post-5.jpg" />
                                                </div>
                                                <div class="post-text">
                                                    <a href="">Lorem ipsum dolor sit amet consec adipis elit</a>
                                                    <div class="post-meta">
                                                        <p>By<a href="">Admin</a></p>
                                                        <p>In<a href="">Web Design</a></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="latest" class="container tab-pane fade">
                                            <div class="post-item">
                                                <div class="post-img">
                                                    <img src="img/post-1.jpg" />
                                                </div>
                                                <div class="post-text">
                                                    <a href="">Lorem ipsum dolor sit amet consec adipis elit</a>
                                                    <div class="post-meta">
                                                        <p>By<a href="">Admin</a></p>
                                                        <p>In<a href="">Web Design</a></p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="post-item">
                                                <div class="post-img">
                                                    <img src="img/post-2.jpg" />
                                                </div>
                                                <div class="post-text">
                                                    <a href="">Lorem ipsum dolor sit amet consec adipis elit</a>
                                                    <div class="post-meta">
                                                        <p>By<a href="">Admin</a></p>
                                                        <p>In<a href="">Web Design</a></p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="post-item">
                                                <div class="post-img">
                                                    <img src="img/post-3.jpg" />
                                                </div>
                                                <div class="post-text">
                                                    <a href="">Lorem ipsum dolor sit amet consec adipis elit</a>
                                                    <div class="post-meta">
                                                        <p>By<a href="">Admin</a></p>
                                                        <p>In<a href="">Web Design</a></p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="post-item">
                                                <div class="post-img">
                                                    <img src="img/post-4.jpg" />
                                                </div>
                                                <div class="post-text">
                                                    <a href="">Lorem ipsum dolor sit amet consec adipis elit</a>
                                                    <div class="post-meta">
                                                        <p>By<a href="">Admin</a></p>
                                                        <p>In<a href="">Web Design</a></p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="post-item">
                                                <div class="post-img">
                                                    <img src="img/post-5.jpg" />
                                                </div>
                                                <div class="post-text">
                                                    <a href="">Lorem ipsum dolor sit amet consec adipis elit</a>
                                                    <div class="post-meta">
                                                        <p>By<a href="">Admin</a></p>
                                                        <p>In<a href="">Web Design</a></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div> --}}
                                </div>
                            </div>

                            <div class="sidebar-widget">
                                <div class="image-widget">
                                    <a href="#"><img src="img/blog-2.jpg" alt="Image"></a>
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
                                <h2 class="widget-title">Tags Cloud</h2>
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
                </div>
            </div>
        </div>
        <!-- Single Post End-->   
@stop