
<div class="container" style="height: 80vh">
    <form action="{{ route('blogs.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <label for="title">Titre:</label>
    <input type="text" id="title" name="title" placeholder="Entrer le titre de la publication" required>
    <label for="content">Contenu:</label>
    <textarea id="content" name="content" placeholder="Entrer le contenu ici" required></textarea>
    <label for="image">Image:</label>
    <input type="file" id="image" name="image">
    <button type="submit" class="btn btn-primary" >Publier</button>
</form>
</div>

