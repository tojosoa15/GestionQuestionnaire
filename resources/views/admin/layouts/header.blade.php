<!-- partial:partials/_navbar.html -->
<nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row" style="background:#ffffff!important;border-bottom: 2px solid #c56b09e0;">
    <div class="text-center navbar-brand-wrapper d-flex align-items-top justify-content-center" style="background:#ffffff!important; text-transform: uppercase;padding: 17px;color:#f13c05;">
        Gestion questionnaires
    </div>
    <div class="navbar-menu-wrapper d-flex align-items-center">
        <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
            <span class="icon-menu"></span>
        </button>

        <ul class="navbar-nav navbar-nav-right">
            <li class="nav-item dropdown d-none d-lg-flex">
                <a class="nav-link" id="" href="{{url('/')}}" target="_blank">Access Front
                </a>
            </li>
            
            <li class="nav-item dropdown">
                <a class="nav-link count-indicator dropdown-toggle" id="messageDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
                    <i class="icon-people"></i>

                </a>
                <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="messageDropdown">
                    <div class="dropdown-item profile-image">
                        <p style="text-align: center">{{Auth::guard('admin')->user()->email}}</p>
                    </div>

                    <div class="dropdown-divider"></div>
                    <div class="dropdown-item">
                        &nbsp;&nbsp;
                        <a  href="{{route('admin.auth.logout')}}"
                                class="btn btn-inverse-dark  col-xs-6 btn-flat pull-right">Se déconnecter</a>
                    </div>
                </div>
            </li>
        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
            <span class="icon-menu"></span>
        </button>
    </div>

</nav>
<!-- partial -->

<!-- notification commmande admin -->
<!-- include(admin.layouts.script_header_command_notif); -->
