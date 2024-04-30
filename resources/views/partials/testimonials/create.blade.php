{{-- form to add a new testimonial --}}
<div class="modal fade" id="addTestimonial" tabindex="-1" role="dialog" aria-labelledby="addTestimonialLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form action="{{ route('testimonials.store') }}" method="POST">
                @csrf
                <div class="modal-header">
                    <h5 class="modal-title" id="addTestimonialLabel">Ajouter un témoignage</h5>
                    
                </div>
                <div class="modal-body">
                    {{-- name --}}
                    <div class="form-group">
                        <label for="name">Nom: </label>
                        <input type="text" name="authorImage" id="name" class="form-control" required>
                    </div>
                    {{-- occupation --}}
                    <div class="form-group">
                        <label for="occupation">Occupation: </label>
                        <input type="text" name="authorImage" id="occupation" class="form-control" required>
                    </div>
                    {{-- testimonial --}}
                    <div class="form-group">
                        <label for="testimonial">Témoignage: </label>
                        <textarea name="content" id="testimonial" class="form-control" required></textarea>
                    </div>
                    <div class="form-group">
                        <label for="image">Image: </label>
                        <input type="file" name="authorImage" id="image" class="form-control" required>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
                    <button type="submit" class="btn btn-primary">Ajouter</button>
                </div>
            </form>
        </div>
    </div>
</div>

                    
