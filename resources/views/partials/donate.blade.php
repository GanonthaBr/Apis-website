    <div
            class="donate"
            data-parallax="scroll"
            data-image-src="{{asset('img/donate.jpg')}}"
        >
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-7">
                        <div class="donate-content">
                            <div class="section-header">
                                <p>Faire un Don</p>
                                <h2>
                                    Vos dons et aides sont des gestes qui sauvent des vies!
                                </h2>
                            </div>
                            <div class="donate-text">
                                <p>
                                    Léguer à l'ONG APIS, c'est plus qu'une donation; c'est changer des vies, promouvoir l'égalité des genres et créer un impact durable. Votre appui permet à APIS de poursuivre ses programmes pour des communautés sûres, équitables et prospères, offrant un avenir meilleur aux milliers  d'enfants et familles.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="donate-form">
                            <form
                            method="#"
                            >
                                <div class="control-group">
                                    <input
                                        type="text"
                                        class="form-control"
                                        placeholder="Nom"
                                        required="required"
                                    />
                                </div>
                                <div class="control-group">
                                    <input
                                        type="email"
                                        class="form-control"
                                        placeholder="Téléphone ou Email"
                                        required="required"
                                    />
                                </div>
                                {{-- <div
                                    class="btn-group btn-group-toggle"
                                    data-toggle="buttons"
                                >
                                    <label class="btn btn-custom active">
                                        <input
                                            type="radio"
                                            name="options"
                                            checked
                                        />
                                        $10
                                    </label>
                                    <label class="btn btn-custom">
                                        <input type="radio" name="options" />
                                        $20
                                    </label>
                                    <label class="btn btn-custom">
                                        <input type="radio" name="options" />
                                        $30
                                    </label>
                                </div> --}}
                                <div>
                                    <button
                                        class="btn btn-custom"
                                        type="submit"
                                    >
                                        Faire le Don Maintenant!
                                    </button>
                                    <p style="text-align: center; color:#fff">OU</p>
                                    <button
                                        class="btn btn-custom"
                                        onclick="window.location.href='{{ route('contacts.index') }}' " 
                                    >Nous Contacter.
                                </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>