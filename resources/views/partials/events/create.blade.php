<div class="container">
    <form action="{{ route('events.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <label for="title">Titre:</label>
    <input type="text" id="title" name="title" placeholder="Entrer le titre de l'événement" required>
    <label for="description">Description:</label>
    <textarea id="description" name="description" placeholder="Entrer la description ici" required></textarea>
    <label for="date">Date:</label>
    <input type="date" id="date" name="date" required>
    <label for="start_time">Heure de début:</label>
    <input type="time" id="start_time" name="start_time" required>
    <label for="end_time">Heure de fin:</label>
    <input type="time" id="end_time" name="end_time" required>
    <label for="location">Lieu:</label>
    <input type="text" id="location" name="location" placeholder="Entrer le lieu de l'événement" required>
    <label for="image">Image:</label>
    <input type="file" id="image" name="image">
    <button type="submit" class="btn btn-primary" >Publier</button>
</div>