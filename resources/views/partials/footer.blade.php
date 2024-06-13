  <div class="footer">
      <div class="container">
          <div class="row">
              <div class="col-lg-3 col-md-6">
                  <div class="footer-contact">
                      <h2>{{__('Siège Principal')}}</h2>
                      <p>
                          <i class="fa fa-map-marker-alt">{{__('Avenue Korey bongou')}}</i>
                      </p>
                      <p><i class="fa fa-phone-alt"></i>(+227) 20724108 - 96410772</p>
                      <p>
                          <i class="fa fa-envelope"></i>
                          <a href="mailto:contact@apis-sahel.org">contact@apis-sahel.org</a>
                      </p>
                      <div class="footer-social">
                          <a class="btn btn-custom" target="blank" href="https://twitter.com/Ong_Apis"><i class="fab fa-twitter"></i></a>
                          <a class="btn btn-custom" target="blank" href="https://www.facebook.com/profile.php?viewas=100000686899395&id=61558747800282"><i class="fab fa-facebook-f"></i></a>
                          <a class="btn btn-custom" target="blank" href="https://www.linkedin.com/company/ong-apis/people/?viewAsMember=true"><i class="fab fa-linkedin-in"></i></a>
                      </div>
                  </div>
              </div>
              <div class="col-lg-3 col-md-6">
                  <div class="footer-link">
                      <h2>{{__('Liens Utiles')}}</h2>
                      <a href="{{route('about.index')}}">{{__('Mot du Secrétaire Général')}}</a>
                      <a href="{{route('about.index')}}">{{__('À propos')}}</a>
                      <a href="{{route('events.index')}}">{{__('Récents Événements')}}</a>
                      <a href="{{route('contacts.index')}}">{{__('Contacts')}}</a>
                      <a href="{{route('blogs.index')}}">{{__('Dernières actualités')}}</a>
                  </div>
              </div>
              <div class="col-lg-3 col-md-6">
                  <div class="footer-link">
                      <h2>{{__('Liens Utiles')}}</h2>
                      <a href="">{{__('Conditions dutilisation')}}</a>
                      <a href="">{{__('Politiques de confidentialités')}}</a>
                     
                  </div>
              </div>
              <div class="col-lg-3 col-md-6">
                  <div class="footer-newsletter">
                      <h2>{{__('Newsletter')}}</h2>
                      <form method="POST" action="{{route('newsletter.subscribe')}}">
                          @csrf

                          <input class="form-control" placeholder="Votre Email" name="email" />
                          <button class="btn btn-custom">{{__('Envoyer')}}</button>
                          <label>{{__('Nous ne faisons pas de spam!')}}</label>
                      </form>
                  </div>
              </div>
          </div>
      </div>
      <div class="container copyright">
          <div class="row">
              <div class="col-md-6">
                  <p>
                      {{Date('Y')}} &copy; <a href="https://apis-sahel.org">{{config('app.name')}} </a>,{{__('Tout Droit réservé')}}
                  </p>
              </div>
              <div class="col-md-6">
                  <p>
                     {{__('Conçu par')}}
                      <a target="_blank" href="https://www.linkedin.com/in/bruno-ganontha-payang/"> <strong>Ganontha Payang Bruno</strong> </a>
                  </p>
              </div>
          </div>
      </div>
  </div>