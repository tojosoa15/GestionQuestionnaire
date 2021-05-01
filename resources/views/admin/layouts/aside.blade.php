<!-- partial:partials/_sidebar.html -->
<nav class="sidebar sidebar-offcanvas scroll-wrapper " id="sidebar">
    <ul class="nav">
        {{-- Affichage tableau de bord--}}
        <li class="nav-item @yield('menu_dashboard')">
            <a class="nav-link @yield('menu_dashboard_show')" href="{{route('admin.home')}}">    
                <i class="icon-rocket menu-icon"></i>
                <span class="menu-title">Home</span>
            </a>
        </li>
        {{-- Affichage menu questionnaire --}}
        <li class="nav-item d-none d-lg-block @yield('menu_questionnaire_active')">
            <a class="nav-link @yield('menu_questionnaire_show')" href="{{route('admin.create_question')}}">
                <i class="icon-layers menu-icon"></i>
                <span class="menu-title">Questionnaires</span>

            </a>
        </li>
        {{-- Affichage menu utilisateur --}}
        <li class="nav-item d-none d-lg-block @yield('menu_utilisateur_active')">
            <a class="nav-link" data-toggle="collapse" href="#collapse_utilisateur" aria-expanded="false" aria-controls="sidebar-layouts">
                <!-- <i class="icon-layers menu-icon"></i> -->
                <i class="mdi mdi-account-settings-variant menu-icon"></i>
                <span class="menu-title">Utilisateurs</span>
            </a>
            <div class="collapse @yield('menu_utilisateur_show')" id="collapse_utilisateur">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item" > <a class="nav-link @yield('menu_utilisateur_users')" href="{{route('admin.auth.register')}}">Liste utilisateurs</a>
                    </li>

                </ul>
            </div>
        </li>
</nav>
<!-- partial -->
