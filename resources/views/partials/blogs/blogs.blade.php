        <!-- Blog Start -->
        <div class="blog" id="blog">
            <div class="container">
                <div class="section-header text-center">
                    <p>Nos Actualités</p>
                    <h2>Découvrez nos dernières actualités à travers de blogs posts.</h2>
                </div>
               @include('partials.blogs.blog-content')
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