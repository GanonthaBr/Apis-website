   <div class="contact">
            <div class="container">
                <div class="section-header text-center">
                    <p>Nous Contacter</p>
                    <h2>Envoyez nous un message</h2>
                </div>
                <div class="contact-img">
                    <img src="{{asset('img/cause-3.png')}}" alt="Image" />
                </div>
                <div class="contact-form">
             
                 <div id="success">
                  
                    {{session('success')}}
                  
                 </div>
                    <form
                        name="sentMessage"
                        {{-- id="contactForm" --}}
                        novalidate="novalidate"
                        action="{{route('contacts.store')}}"
                        method="POST"
                    >
                    @csrf
                        <div class="control-group">
                            <input
                                type="text"
                                class="form-control"
                                id="name"
                                name="name"
                                placeholder="Votre Nom"
                                required="required"
                                value="{{old('name')}}"
                                data-validation-required-message="Please enter your name"
                            />
                            <p class="help-block text-danger"> 
                               @error('name')
                                   {{$message}}
                               @enderror
                            </p>
                        </div>
                        <div class="control-group">
                            <input
                                
                                class="form-control"
                                id="email"
                                name="email"
                                placeholder="Votre Telephone ou Email"
                                required="required"
                                value="{{old('email')}}"
                                data-validation-required-message="Please enter your email"
                            />
                            <p class="help-block text-danger">
                                @error('email')
                                   {{$message}}
                               @enderror
                            </p>
                        </div>
                        <div class="control-group">
                            <input
                                type="text"
                                class="form-control"
                                id="subject"
                                name="subject"
                                placeholder="Object"
                                required="required"
                                value="{{old('subject')}}"
                                data-validation-required-message="Please enter a subject"
                            />
                            <p class="help-block text-danger">
                                @error('subject')
                                   {{$message}}
                               @enderror
                            </p>
                        </div>
                        <div class="control-group">
                            <textarea
                                class="form-control"
                                id="message"
                                name="message"
                                placeholder="Message"
                                required="required"
                                value="{{old('message')}}"
                                data-validation-required-message="Please enter your message"
                            ></textarea>
                            <p class="help-block text-danger">
                                @error('message')
                                   {{$message}}
                                @enderror
                            </p>
                        </div>
                        <div>
                            <button
                                class="btn btn-custom"
                                type="submit"
                                id="sendMessageButton"
                            >
                                Envoyer Message
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>