<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta departments="width=device-width, initial-scale=1.0" name="viewport">
  <title>{{config('app.name')}}-ADMIN</title>
  <meta departments="" name="description">
  <meta departments="" name="keywords">

  <!-- Favicons -->
  <link href="{{asset('assets/img/apis.png')}}" rel="icon">
  <link href="{{asset('assets/img/apple-touch-icon.png')}}" rel=" apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{asset('assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/quill/quill.snow.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/quill/quill.bubble.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/remixicon/remixicon.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/simple-datatables/style.css')}}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{asset('assets/css/style.css')}}" rel="stylesheet">


</head>

<body>
  <!-- ======= Header ======= -->
  @include('partials.admin.header')
  <!-- End Header -->
  <!-- ======= Sidebar ======= -->
  @include('partials.admin.sidebar')
  <!-- End Sidebar-->

  <main class="main" id="main">
    {{-- edit stats form --}}
    <div class="container-fluid px-4">
      <h1 class="mt-4">{{__('Modifier les stats')}} </h1>
      {{-- display success message if stats is updated --}}
      @if (session()->has('stats-updated'))
      <div class="alert alert-success" role="alert">
        {{ session()->get('stats-updated') }}
      </div>
      @endif
      {{-- create form --}}
      <form action="{{ route('stats.update', $stats->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="mb-3">
          <label for="year" class="form-label">{{__('Année dexistence')}} :</label>
          <input type="text" class="form-control" id="year" name="year" value="{{ $stats->year_of_experience }}">
        </div>
        <div class="mb-3">
          <label for="departments" class="form-label">{{__('Départements intervenus')}}:</label>
          <textarea class="form-control" id="departments" name="departments" rows="3">{{$stats->departments_helped }}</textarea>
        </div>
        <div class="mb-3">
          <label for="communities" class="form-label">{{__('Communes aidées')}}:</label>
          <textarea class="form-control" id="communities" name="communities" rows="3">{{$stats->communities_helped }}</textarea>
        </div>
        <div class="mb-3">
          <label for="beneficiaires" class="form-label">{{__('Beneficiaires aidés')}}:</label>
          <textarea class="form-control" id="beneficiaires" name="beneficiaires" rows="3">{{$stats->number_of_beneficiaries }}</textarea>
        </div>
        <button type="submit" class="btn btn-primary">{{__('Sauvegarder')}} </button>
      </form>
    </div>
  </main>

  <!-- Vendor JS Files -->
  <script src="{{asset('assets/vendor/apexcharts/apexcharts.min.js')}}"></script>
  <script src="{{asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('assets/vendor/chart.js/chart.umd.js')}}"></script>
  <script src="{{asset('assets/vendor/echarts/echarts.min.js')}}"></script>
  <script src="{{asset('assets/vendor/quill/quill.js')}}"></script>
  <script src="{{asset('assets/vendor/simple-datatables/simple-datatables.js')}}"></script>
  <script src="{{asset('assets/vendor/tinymce/tinymce.min.js')}}"></script>
  <script src="{{asset('assets/vendor/php-email-form/validate.js')}}"></script>

  <!-- Template Main JS File -->
  <script src="{{asset('assets/js/main.js')}}"></script>
  <!-- jQuery -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>

  <!-- Bootstrap JS -->
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>

</html>