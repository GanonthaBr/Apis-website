 <aside id="sidebar" class="sidebar">

   <ul class="sidebar-nav" id="sidebar-nav">

     <li class="nav-item">
       <a class="nav-link " href="{{route('admin')}}">
         <i class="bi bi-grid"></i>
         <span>Dashboard</span>
       </a>
     </li>
     <!-- End Dashboard Nav -->

     <li class="nav-item">
       <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
         <i class="bi bi-menu-button-wide"></i><span>Blog Articles</span><i class="bi bi-chevron-down ms-auto"></i>
       </a>
       <ul id="components-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
         <li>
           <a href="{{route('admin.allblogs')}}">
             <i class="bi bi-circle"></i><span>Liste des articles</span>
           </a>
         </li>
         <li>
           <a href="{{route('admin.create')}}">
             <i class="bi bi-circle"></i><span>Ajouter un article</span>
           </a>
         </li>
       </ul>
     </li>
     <!-- End Components Nav -->

     <li class="nav-item">
       <a class="nav-link collapsed" data-bs-target="#forms-nav" data-bs-toggle="collapse" href="#">
         <i class="bi bi-journal-text"></i><span>Evénement</span><i class="bi bi-chevron-down ms-auto"></i>
       </a>
       <ul id="forms-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
         <li>
           <a href="{{route('admin.allEvents')}}">
             <i class="bi bi-circle"></i><span>Liste des événement</span>
           </a>
         </li>
         <li>
           <a href="{{route('admin.createEvent')}}">
             <i class="bi bi-circle"></i><span>Ajouter un événement</span>
           </a>
         </li>
       </ul>
     </li>
     <!-- End Forms Nav -->

     <li class="nav-item">
       <a class="nav-link collapsed" data-bs-target="#tables-nav" data-bs-toggle="collapse" href="#">
         <i class="bi bi-layout-text-window-reverse"></i><span>Temoignages</span><i class="bi bi-chevron-down ms-auto"></i>
       </a>
       <ul id="tables-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
         <li>
           <a href="{{route('admin.allTestimonials')}}">
             <i class="bi bi-circle"></i><span>Liste des Temoignages</span>
           </a>
         </li>
         <li>
           <a href="{{route('admin.createTestimonial')}}">
             <i class="bi bi-circle"></i><span>Ajouter Temoignages</span>
           </a>
         </li>
       </ul>
     </li>
     
     <li class="nav-item">
       <a class="nav-link collapsed" data-bs-target="#tables-nav" data-bs-toggle="collapse" href="#">
         <i class="bi bi-collection-fill"></i><span>Rapports</span><i class="bi bi-chevron-down ms-auto"></i>
       </a>
       <ul id="tables-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
         <li>
           <a href="{{route('admin.allreports')}}">
             <i class="bi bi-circle"></i><span>Liste des Rapports</span>
           </a>
         </li>
         <li class="nav-item">
           <a class="nav-link collapsed" href="{{route('report.create')}}">
             <i class="bi bi-inbox"></i>
             <span>Ajouter un rapport</span>
           </a>
         </li>
       </ul>
     </li>
     <!-- End Tables Nav -->


     <!-- End Charts Nav -->

     <li class="nav-heading">Pages</li>

     <li class="nav-item">
       <a class="nav-link collapsed" href="{{route('admin.allrequests')}}">
         <i class="bi bi-envelope"></i>
         <span>Messages</span>
       </a>
     </li>
     <!-- End Profile Page Nav -->

     <li class="nav-item">
       <a class="nav-link collapsed" href="{{route('stats')}}">
         <i class="bi bi-bar-chart"></i>
         {{-- <i class="bi bi-chart"></i> --}}
         <span>Statistiques</span>
       </a>
     </li>
     <!-- End F.A.Q Page Nav -->


     <!-- End Contact Page Nav -->

     {{-- <li class="nav-item">
       <a class="nav-link collapsed" href="pages-register.html">
         <i class="bi bi-card-list"></i>
         <span>Register</span>
       </a>
     </li> --}}
     <!-- End Register Page Nav -->

     <li class="nav-item">
       <a class="nav-link collapsed" href="#">
         <form method="POST" action="{{ route('logout') }}">
           @csrf
           <button type="submit">
             <!-- Logout -->
             <span>Déconnexion</span>
             <i class="bi bi-box-arrow-in-right"></i>

             {{-- <span>Sign Out</span>
                  <i class="bi bi-box-arrow-right"></i> --}}
           </button>
         </form>

       </a>
     </li>
     <!-- End Login Page Nav -->

     {{-- <li class="nav-item">
       <a class="nav-link collapsed" href="pages-error-404.html">
         <i class="bi bi-dash-circle"></i>
         <span>Error 404</span>
       </a>
     </li> --}}
     <!-- End Error 404 Page Nav -->

     {{-- <li class="nav-item">
       <a class="nav-link collapsed" href="pages-blank.html">
         <i class="bi bi-file-earmark"></i>
         <span>Blank</span>
       </a>
     </li> --}}
     <!-- End Blank Page Nav -->

   </ul>

 </aside>