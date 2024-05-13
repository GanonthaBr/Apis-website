@extends('layouts.admin_layout')

@section('admin-content')
<main class="main" id="main">

    <div class="container-fluid px-4">
        <form action="{{route('report.store')}}" method="post" enctype="multipart/form-data">
            @csrf

            <div class="mb-3">
                <label for="title" class="form-label">Titre</label>
                <input type="text" class="form-control" id="title" name="title" required>
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Description:</label>
                <textarea name="description" class="form-control" id="description" required></textarea>
            </div>
            <div class="mb-3">
                <label for="image" class="form-label">Image: </label>
                <input type="file" name="image" class="form-control" id="image" accept="image/*" required>
            </div>
            <div class="mb-3">
                <label for="file" class="form-label">Document du rapport en pdf:</label>
                <input type="file" name="file" class="form-control" id="file" accept="application/pdf" required>
            </div>
            <button type="submit">Upload Report</button>
        </form>
    </div>

</main>
@endsection