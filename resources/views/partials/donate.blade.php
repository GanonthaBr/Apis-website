    <div class="donate" id="donate" data-parallax="scroll" data-image-src="{{asset('img/donate.jpg')}}">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-7">
                    <div class="donate-content">
                        <div class="section-header">
                            <h1 style="color:#17468a; font-weight:bold">{{__('Faire un Don')}}</h1>
                            <h2>
                               {{__('Vos dons et aides sont des gestes qui sauvent des vies!')}}
                            </h2>
                        </div>
                        <div class="donate-text">
                            <p>
                                {{__('donate text')}}
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="donate-form">
                        <form method="#">
                            <div class="control-group">
                                <input type="text" class="form-control" placeholder="Nom" required="required" />
                            </div>
                            <div class="control-group">
                                <input type="email" class="form-control" placeholder="{{__('Votre Telephone ou Email')}}" required="required" />
                            </div>
                            <div>
                                <button class="btn btn-custom" type="submit">
                                    {{__('Faire le Don Maintenant!')}}
                                </button>
                                <p style="text-align: center; color:#fff">{{__('OU')}}</p>
                                <button class="btn btn-custom" href='#contacts'  >
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>