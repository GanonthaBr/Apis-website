@php
$newMessage = $newMessages->count();
$countm = 0;
@endphp

<header id="header" class="header fixed-top d-flex align-items-center">

  <div class="d-flex align-items-center justify-content-between">
    <a href="{{route('admin')}}" class="logo d-flex align-items-center">
      <img src="{{asset('assets/img/apis.png')}}" alt="">
      <span class="d-none d-lg-block">ONG APIS</span>
    </a>
    <i class="bi bi-list toggle-sidebar-btn"></i>
  </div><!-- End Logo -->

  <div class="search-bar">
    <form class="search-form d-flex align-items-center" method="POST" action="#">
      <input type="text" name="query" placeholder="Search" title="Enter search keyword">
      <button type="submit" title="Search"><i class="bi bi-search"></i></button>
    </form>
  </div><!-- End Search Bar -->

  <nav class="header-nav ms-auto">
    <ul class="d-flex align-items-center">

      <li class="nav-item d-block d-lg-none">
        <a class="nav-link nav-icon search-bar-toggle " href="#">
          <i class="bi bi-search"></i>
        </a>
      </li><!-- End Search Icon-->

      

      <li class="nav-item dropdown">

        <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
          <i class="bi bi-chat-left-text"></i>
          @if($newMessage)
          <span class="badge bg-success badge-number">{{$newMessage}}</span>
          @endif
        </a><!-- End Messages Icon -->

        <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow messages">

          <li class="dropdown-header">
            @if ($newMessage > 0)
            Vous avez {{$newMessage}} {{__('nouveaux messages!')}}
            <a href="{{route('admin.allrequests')}}"><span class="badge rounded-pill bg-primary p-2 ms-2">Voir tout</span></a>
            @else
            {{__('Vous navez pas de nouveaux messages!')}}
            @endif
          </li>
          <li>
            <hr class="dropdown-divider">
          </li>
          @foreach ($newMessages as $message)
          @if ($countm == 3)
          @break
          @endif

          <li class="message-item">
            <a href="{{route('message.show', $message->id)}}">
              <img src="assets/img/profile.jpg" alt="" class="rounded-circle">
              <div>
                <h4>{{$message->name}}</h4>
                <p>{{substr($message->user_message,0,20)}}...</p>
                <p>{{$message->created_at_human}}</p>
              </div>
            </a>
          </li>
          <li>
            <hr class="dropdown-divider">
          </li>
          @php
          $countm++;
          @endphp
          @endforeach

          <li class="dropdown-footer">
            <a href="{{route('admin.allrequests')}}">{{__('Show all messages')}} </a>
          </li>

        </ul><!-- End Messages Dropdown Items -->

      </li><!-- End Messages Nav -->

      <li class="nav-item dropdown pe-3">

        <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
          @if ($user->image)
          <img src="{{asset('images/' . $user->image)}}" alt="Profile" class="rounded-circle">
          @else
          <img src="{{asset('assets/img/apis.png')}}" alt="Profile" class="rounded-circle">
          @endif
          <span class="d-none d-md-block dropdown-toggle ps-2">Admin-{{$user->name}}</span>
        </a>
        <!-- End Profile Iamge Icon -->

        <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
          <li class="dropdown-header">
            <h6>{{$user->name}}</h6>
            <span>{{$user->email}}</span>
          </li>
          <li>
            <hr class="dropdown-divider">
          </li>

          <li>
            <a class="dropdown-item d-flex align-items-center" href="users-profile.html">
              <i class="bi bi-person"></i>
              <span>{{__('Mon Profil')}} </span>
            </a>
          </li>
          <li>
            <hr class="dropdown-divider">
          </li>

          <li>
            <a class="dropdown-item d-flex align-items-center" href="users-profile.html">
              <i class="bi bi-gear"></i>
              <span>{{__('Account Settings')}} </span>
            </a>
          </li>
          <li>
            <hr class="dropdown-divider">
          </li>

          <li>
            <a class="dropdown-item d-flex align-items-center" href="pages-faq.html">
              <i class="bi bi-question-circle"></i>
              <span> {{__('Need Help?')}} </span>
            </a>
          </li>
          <li>
            <hr class="dropdown-divider">
          </li>

          <li>
            <a class="dropdown-item d-flex align-items-center" href="#">

              <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit">
                  <!-- Logout -->
                  <span>{{__('Déconnexion')}} </span>
                  <i class="bi bi-box-arrow-right"></i>
                </button>
              </form>
            </a>
          </li>

        </ul><!-- End Profile Dropdown Items -->
      </li><!-- End Profile Nav -->

    </ul>
  </nav>
  <!-- End Icons Navigation -->

</header>