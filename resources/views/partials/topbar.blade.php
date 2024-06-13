  <div class="top-bar d-none d-md-block">
      <div class="container-fluid">
          <div class="row">
              <div class="col-md-8">
                  <div class="top-bar-left">
                      <div class="text">
                          {{-- <p>ACTIONS ET PROGRAMMES <br> D'IMPACT AU SAHEL</p> --}}
                          <i class="fa fa-map-marker-alt"></i>
                          <p>{{__('Avenue Korey bongou, Niamey-Niger')}} </p>
                      </div>
                      <div class="text">
                          <i class="fa fa-phone-alt"></i>
                          <p>(+227) 20724108</p>
                      </div>

                      <div class="text">
                          <i class="fa fa-envelope"></i>
                          <p><a href="mailto:contact@apis-sahel.org">contact@apis-sahel.org</a></p>
                      </div>
                  </div>
              </div>
              <div class="col-md-4">
                  <div class="top-bar-right">
                      <div class="social">
                          <a target="_blank" href="{{'https://twitter.com/Ong_Apis'}}"><i class="fab fa-twitter"></i></a>
                          <a target="_blank" href="{{'https://www.facebook.com/profile.php?viewas=100000686899395&id=61558747800282'}}"><i class="fab fa-facebook-f"></i></a>
                          <a target="_blank" href="{{'https://www.linkedin.com/company/ong-apis/people/?viewAsMember=true'}}"><i class="fab fa-linkedin-in"></i></a>
                          <a target="_blank" href=""><i class="fab fa-instagram"></i></a>
                      </div>
                      <div class="row language-switch d-flex" >
                        <div class="col-md-6 lang {{session('locale')=='fr'?'active fr':''}}">
                            <a href="/lang/fr" class=" {{session('locale')=='fr'?'active fr':''}}" >FR</a>
                        </div>
                        <div class="col-md-6 lang  {{session('locale')=='en'?'active en':''}}">
                            <a href="/lang/en" class="{{session('locale')=='en'?'active en':''}}" >ENG</a>
                        </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>

  
