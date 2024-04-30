form to add a new testimonial
<div class="modal fade" id="addTestimonial" tabindex="-1" role="dialog" aria-labelledby="addTestimonialLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form action="{{ route('testimonials.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <label for="name">Name: </label>
                <input type="text" id="name" name="authorName" />

                <label for="occupation">occupation</label>
                <input type="text" id="occupation" name="authorPosition"/>

                <label for="content">Content</label>
                <textarea id="content" name="content"></textarea>

                <label for="image">Image: </label>
                <input type="file" id="image" name="authorImage" />

                <button type="submit">Add Testimony</button>
            </form>
        </div>
    </div>
</div>

                    
