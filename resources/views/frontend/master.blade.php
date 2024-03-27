@extends('layouts.layout')

@section('content')
        <!-- Debut Top Bar -->
       @include('partials.topbar')
       {{-- Fin Top  Bar --}}

        <!-- Debut Bar de navigation -->
        @include('partials.navbar')
        <!-- Fin  Bar de navigation  -->

        <!-- Debut de Hero -->
        @include('partials.hero')
        <!-- Fin de Hero -->

        <!-- Video Modal Start-->
        <div
            class="modal fade"
            id="videoModal"
            tabindex="-1"
            role="dialog"
            aria-labelledby="exampleModalLabel"
            aria-hidden="true"
        >
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <button
                            type="button"
                            class="close"
                            data-dismiss="modal"
                            aria-label="Close"
                        >
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <!-- 16:9 aspect ratio -->
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe
                                class="embed-responsive-item"
                                src=""
                                id="video"
                                allowscriptaccess="always"
                                allow="autoplay"
                            ></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Video Modal End -->

        <!-- Debut de About -->
        @include('partials.about')
        <!-- Fin de About-->

        <!-- Debut des Services -->
         @include('partials.services')
        <!-- Fin des Services -->

        <!-- Facts Start -->
        <div
            class="facts"
            data-parallax="scroll"
            data-image-src="img/facts.jpg"
        >
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="facts-item">
                            <i class="flaticon-home"></i>
                            <div class="facts-text">
                                <h3 class="facts-plus" data-toggle="counter-up">
                                    150
                                </h3>
                                <p>Countries</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="facts-item">
                            <i class="flaticon-charity"></i>
                            <div class="facts-text">
                                <h3 class="facts-plus" data-toggle="counter-up">
                                    400
                                </h3>
                                <p>Volunteers</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="facts-item">
                            <i class="flaticon-kindness"></i>
                            <div class="facts-text">
                                <h3
                                    class="facts-dollar"
                                    data-toggle="counter-up"
                                >
                                    10000
                                </h3>
                                <p>Our Goal</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="facts-item">
                            <i class="flaticon-donation"></i>
                            <div class="facts-text">
                                <h3
                                    class="facts-dollar"
                                    data-toggle="counter-up"
                                >
                                    5000
                                </h3>
                                <p>Raised</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Facts End -->

        <!-- Causes Start -->
        <div class="causes">
            <div class="container">
                <div class="section-header text-center">
                    <p>Popular Causes</p>
                    <h2>Let's know about charity causes around the world</h2>
                </div>
                <div class="owl-carousel causes-carousel">
                    <div class="causes-item">
                        <div class="causes-img">
                            <img src="img/causes-1.jpg" alt="Image" />
                        </div>
                        <div class="causes-progress">
                            <div class="progress">
                                <div
                                    class="progress-bar"
                                    role="progressbar"
                                    aria-valuenow="85"
                                    aria-valuemin="0"
                                    aria-valuemax="100"
                                >
                                    <span>85%</span>
                                </div>
                            </div>
                            <div class="progress-text">
                                <p><strong>Raised:</strong> $100000</p>
                                <p><strong>Goal:</strong> $50000</p>
                            </div>
                        </div>
                        <div class="causes-text">
                            <h3>Lorem ipsum dolor sit</h3>
                            <p>
                                Lorem ipsum dolor sit amet elit. Phasell nec
                                pretium mi. Curabit facilis ornare velit non
                                vulputa
                            </p>
                        </div>
                        <div class="causes-btn">
                            <a class="btn btn-custom">Learn More</a>
                            <a class="btn btn-custom">Donate Now</a>
                        </div>
                    </div>
                    <div class="causes-item">
                        <div class="causes-img">
                            <img src="img/causes-2.jpg" alt="Image" />
                        </div>
                        <div class="causes-progress">
                            <div class="progress">
                                <div
                                    class="progress-bar"
                                    role="progressbar"
                                    aria-valuenow="85"
                                    aria-valuemin="0"
                                    aria-valuemax="100"
                                >
                                    <span>85%</span>
                                </div>
                            </div>
                            <div class="progress-text">
                                <p><strong>Raised:</strong> $100000</p>
                                <p><strong>Goal:</strong> $50000</p>
                            </div>
                        </div>
                        <div class="causes-text">
                            <h3>Lorem ipsum dolor sit</h3>
                            <p>
                                Lorem ipsum dolor sit amet elit. Phasell nec
                                pretium mi. Curabit facilis ornare velit non
                                vulputa
                            </p>
                        </div>
                        <div class="causes-btn">
                            <a class="btn btn-custom">Learn More</a>
                            <a class="btn btn-custom">Donate Now</a>
                        </div>
                    </div>
                    <div class="causes-item">
                        <div class="causes-img">
                            <img src="img/causes-3.jpg" alt="Image" />
                        </div>
                        <div class="causes-progress">
                            <div class="progress">
                                <div
                                    class="progress-bar"
                                    role="progressbar"
                                    aria-valuenow="85"
                                    aria-valuemin="0"
                                    aria-valuemax="100"
                                >
                                    <span>85%</span>
                                </div>
                            </div>
                            <div class="progress-text">
                                <p><strong>Raised:</strong> $100000</p>
                                <p><strong>Goal:</strong> $50000</p>
                            </div>
                        </div>
                        <div class="causes-text">
                            <h3>Lorem ipsum dolor sit</h3>
                            <p>
                                Lorem ipsum dolor sit amet elit. Phasell nec
                                pretium mi. Curabit facilis ornare velit non
                                vulputa
                            </p>
                        </div>
                        <div class="causes-btn">
                            <a class="btn btn-custom">Learn More</a>
                            <a class="btn btn-custom">Donate Now</a>
                        </div>
                    </div>
                    <div class="causes-item">
                        <div class="causes-img">
                            <img src="img/causes-4.jpg" alt="Image" />
                        </div>
                        <div class="causes-progress">
                            <div class="progress">
                                <div
                                    class="progress-bar"
                                    role="progressbar"
                                    aria-valuenow="85"
                                    aria-valuemin="0"
                                    aria-valuemax="100"
                                >
                                    <span>85%</span>
                                </div>
                            </div>
                            <div class="progress-text">
                                <p><strong>Raised:</strong> $100000</p>
                                <p><strong>Goal:</strong> $50000</p>
                            </div>
                        </div>
                        <div class="causes-text">
                            <h3>Lorem ipsum dolor sit</h3>
                            <p>
                                Lorem ipsum dolor sit amet elit. Phasell nec
                                pretium mi. Curabit facilis ornare velit non
                                vulputa
                            </p>
                        </div>
                        <div class="causes-btn">
                            <a class="btn btn-custom">Learn More</a>
                            <a class="btn btn-custom">Donate Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Causes End -->

        <!-- Debut de Donate -->
         @include('partials.donate')
        <!-- Fin de Donate End -->

        <!-- Debut de Evenements -->
        @include('partials.events')
        <!-- Fin de Evenements -->

        <!-- Team Start -->
       @include('partials.team')
        <!-- Team End -->

        <!-- Volunteer Start -->
        <div
            class="volunteer"
            data-parallax="scroll"
            data-image-src="img/volunteer.jpg"
        >
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-5">
                        <div class="volunteer-form">
                            <form>
                                <div class="control-group">
                                    <input
                                        type="text"
                                        class="form-control"
                                        placeholder="Name"
                                        required="required"
                                    />
                                </div>
                                <div class="control-group">
                                    <input
                                        type="email"
                                        class="form-control"
                                        placeholder="Email"
                                        required="required"
                                    />
                                </div>
                                <div class="control-group">
                                    <textarea
                                        class="form-control"
                                        placeholder="Why you want to become a volunteer?"
                                        required="required"
                                    ></textarea>
                                </div>
                                <div>
                                    <button
                                        class="btn btn-custom"
                                        type="submit"
                                    >
                                        Become a volunteer
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="volunteer-content">
                            <div class="section-header">
                                <p>Become A Volunteer</p>
                                <h2>
                                    Let’s make a difference in the lives of
                                    others
                                </h2>
                            </div>
                            <div class="volunteer-text">
                                <p>
                                    Lorem ipsum dolor sit amet elit. Phasellus
                                    nec pretium mi. Curabitur facilisis ornare
                                    velit non. Aliquam metus tortor, auctor id
                                    gravida, viverra quis sem. Curabitur non
                                    nisl nec nisi maximus. Aenean convallis
                                    porttitor. Aliquam interdum at lacus non
                                    blandit.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Volunteer End -->

        <!-- Testimonial Start -->
        @include('partials.testimonials')
        <!-- Testimonial End -->

        <!-- Contact Start -->
        @include('partials.contact')
        <!-- Contact End -->

        <!-- Blog Start -->
        @include('partials.blogs')
        <!-- Blog End -->
@endsection
