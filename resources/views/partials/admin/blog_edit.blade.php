<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>{{config('app.name')}}-ADMIN</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

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
    {{-- edit blog form --}}
    <div class="container-fluid px-4">
      <h1 class="mt-4">Modifier un blog</h1>
      {{-- display success message if blog is updated --}}
      @if (session()->has('blog-updated'))
      <div class="alert alert-success" role="alert">
        {{ session()->get('blog-updated') }}
      </div>
      @endif
      {{-- create form --}}
      <form action="{{ route('blogs.update', $blog->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="mb-3">
          <label for="title" class="form-label">Titre</label>
          <input type="text" class="form-control" id="title" name="title" value="{{ $blog->title }}">
        </div>
        <div class="mb-3">
          <label for="image" class="form-label">Image</label>
          <input type="file" class="form-control" id="image" name="image">
        </div>
        <div class="mb-3">
          <label for="content" class="form-label">Contenu</label>
          <textarea class="form-control" id="content" name="content" rows="3">{{ $blog->content }}</textarea>
        </div>
        <button type="submit" class="btn btn-primary">Sauvegarder</button>
      </form>
      <h3>Plus d'images</h3>
                    {{-- display more images horizontally, we can click an image to expand and loop through all , original display not too large --}}
                    <div class="row">
                        @if($blog->images->count()==0)
                        <div class="m-4">
                            <p class="text-center mt-4 alert-success">Pas d'images supplémentaires</p>
                        </div>
                        @endif
                        @foreach($blog->images as $image)
                        <div class="col-md-4">
                            <a href="{{asset('storage/' . $image->image)}}" data-lightbox="blog-images">
                                <img src="{{asset('storage/' . $image->image)}}" alt="image" class="img-fluid" />
                            </a>
                            {{-- delete button --}}
                            <form action="{{ route('blogs.deleteImage', $image->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Supprimer</button>
                            </form>
                        </div>
                        @endforeach
                    </div>
      {{-- List of comments for this blogs--}}
         @if ($blog->comments->count()==0)
          <h1 class="mt-4 text-danger">Pas de commentaires</h1>
         @else
        
         <h1 class="mt-4">Liste des commentaires</h1>
         <table id="articlesTable" class="table table-striped table-bordered" style="width:100%">
             <thead>
                 <tr>
                     <th>Commentaire</th>
                     <th>Actions</th>
                 </tr>
             </thead>
             <tbody>
               
                 {{-- loop through comments and display them in table --}}
                 @foreach ($blog->comments as $comment)
                 <tr>
                     <td>{{ $comment->comment }}</td>
                     <td>
                         {{-- create delete button --}}
                         <!-- Delete Button -->
                         <button type="button" class="btn btn-danger confirm-delete" data-form="deleteForm{{$comment->id}}" data-toggle="modal" data-target="#deleteModal{{$comment->id}}">Supprimer</button>
                         <form id="deleteForm{{$comment->id}}" action="{{ route('comments.destroy', $comment->id) }}" method="POST" class="d-inline">
                             @csrf
                             @method('DELETE')
                         </form>
                     </td>
                 </tr>
                 <!-- Delete Confirmation Modal -->
                 <div class="modal fade" id="deleteModal{{$comment->id}}" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel" aria-hidden="true">
                     <div class="modal-dialog" role="document">
                         <div class="modal-content">
                             <div class="modal-header">
                                 <h5 class="modal-title" id="deleteModalLabel">Confirm Delete</h5>
                                 <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                     <span aria-hidden="true">&times;</span>
                                 </button>
                             </div>
                             <div class="modal-body">
                                 Are you sure you want to delete this blog post?
                             </div>
                             <div class="modal-footer">
                                 <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                 <button type="button" class="btn btn-danger confirmDelete" id="confirmDelete{{$comment->id}}">Delete</button>
                             </div>
                         </div>
                     </div>
                 </div>
                 @endforeach
                 
             </tbody>
         </table>
         @endif
    </div>
  </main>

  <!-- Vendor JS Files -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/css/lightbox.min.css" rel="stylesheet">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/js/lightbox-plus-jquery.min.js"></script>


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
{{-- text area formatting: CKEditor --}}
  <script src="https://cdn.ckeditor.com/4.16.0/standard/ckeditor.js"></script>
  <script>
    window.onload = function() {
      CKEDITOR.replace('content');
    }
  </script>
  <!-- Bootstrap JS -->
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>

</html>