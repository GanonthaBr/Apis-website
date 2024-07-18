@extends('layouts.admin_layout')

@section('admin-content')
<main id="main" class="main">

  <div class="pagetitle">
    <h1>{{__('Dashboard')}} </h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.html">{{__('Home')}}</a></li>
        <li class="breadcrumb-item active">{{__('Dashboard')}} </li>
      </ol>
    </nav>
  </div><!-- End Page Title -->

  <section class="section dashboard">
    <div class="row">

      <!-- Left side columns -->
      <div class="col-lg-8">
        <div class="row">

          <!-- Sales Card -->
          <div class="col-xxl-4 col-md-6">
            <div class="card info-card sales-card">



              <div class="card-body">
                <h5 class="card-title">{{__('Articles')}} <span>|{{__('Nombre')}} </span></h5>

                <div class="d-flex align-items-center">
                  <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                    <i class="bi bi-book"></i>
                  </div>
                  <div class="ps-3">
                    <h6>
                      @php
                      $totalBlogs = $blogs->count();
                      @endphp
                      {{$totalBlogs}}
                    </h6>
                    <span class="text-success small pt-1 fw-bold">{{__('Total darticles publiés')}} </span>

                  </div>
                </div>
              </div>

            </div>
          </div>
          <!-- End Sales Card -->

          <!-- Revenue Card -->
          <div class="col-xxl-4 col-md-6">
            <div class="card info-card revenue-card">
              <div class="card-body">
                <h5 class="card-title">{{__('Événements')}} <span>{{__('Nombre')}} </span></h5>

                <div class="d-flex align-items-center">
                  <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                    <i class="bi bi-people"></i>
                  </div>
                  <div class="ps-3">
                    <h6>
                      @php
                      $totalEvents = $events->count();
                      @endphp
                      {{$totalEvents}}
                    </h6>
                    <span class="text-success small pt-2 fw-bold">{{__('Total Événements')}} </span>

                  </div>
                </div>
              </div>

            </div>
          </div>
          <!-- End Revenue Card -->

          <!-- Customers Card -->
          <div class="col-xxl-4 col-xl-12">

            <div class="card info-card customers-card">
              <div class="card-body">
                <h5 class="card-title">{{__('Utilisateur')}} </h5>

                <div class="d-flex align-items-center">
                  <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                    <i class="bi bi-people"></i>
                  </div>
                  <div class="ps-3">
                    <h6>{{$user->name}}</h6>
                    <span class="text-danger small pt-1 fw-bold">{{$user->email}}</span>

                  </div>
                </div>

              </div>
              {{-- images gallery --}}

            </div>

          </div>
          <!-- End Customers Card -->
          <div class="col-xxl-4 col-md-6">
            {{-- images gallery --}}
            <div class="card info-card customers-card">
              <div class="card-body">
                <h5 class="card-title">{{__('Galerie')}} </h5>
                <div class="d-flex align-items-center">
                  <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                    <i class="bi bi-images"></i>
                  </div>
                  <div class="ps-3">
                    <h6>
                      @php
                      $totalImages = $images->count();
                      @endphp
                      {{$totalImages}}
                    </h6>
                    <span class="text-success small pt-1 fw-bold">{{__('Total dimages publiées')}} </span>

                  </div>
                </div>

              </div>
            </div>
            <!-- gallery images -->
            <div class="flex-lg-wrap">
              @foreach ($images as $imagePath)
              <img src="{{asset('storage/'.$imagePath->image)}}" alt="image" style="width: 100px; height: 100px;">
              @endforeach
            </div>
          </div>

          <!-- Reports -->
        

        </div>
      </div>

      <!-- End Left side columns -->

      <!-- Right side columns -->
      @include('partials.admin.right_side_column')
      <!-- End Right side columns -->
    </div>
  </section>

</main>
<!-- End #main -->
@include('partials.admin.footer')
<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>


@endsection