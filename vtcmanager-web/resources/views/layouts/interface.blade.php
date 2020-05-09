<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    @yield('css')
</head>

<body id="page-top">
    <div id="preloader">
        <div id="loader"></div>
    </div>
    <div id="app" style="display:none;">
        <link rel="stylesheet" type="text/css" href="https://res.cloudinary.com/dxfq3iotg/raw/upload/v1561306648/feather.css">
<script src="https://res.cloudinary.com/dxfq3iotg/raw/upload/v1561306741/pcoded.min.js"></script>
<script src="https://res.cloudinary.com/dxfq3iotg/raw/upload/v1561306749/vertical-layout.min.js"></script>
<div id="pcoded" class="pcoded">
    <div class="pcoded-overlay-box"></div>
    <div class="pcoded-container navbar-wrapper">
        <nav class="navbar header-navbar pcoded-header">
            <div class="navbar-wrapper">
                <div class="navbar-container container-fluid">
                    <ul class="nav-left">
                    </ul>
                    <ul class="nav-right">
                        <li class="user-profile header-notification">
                            <div class="dropdown-primary dropdown">
                                <div class="dropdown-toggle" data-toggle="dropdown">
                                    <img src="https://img.icons8.com/color/96/000000/user.png" class="img-radius" alt="User-Profile-Image">
                                    <span>Michael Vue</span>
                                    <i class="feather icon-chevron-down"></i>
                                </div>
                                <ul class="show-notification profile-notification dropdown-menu" data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">
                                    <li>
                                        <a href="#!">
                                            <i class="feather icon-settings"></i> Settings
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="feather icon-user"></i> Profile
                                        </a>
                                    </li>
                                    <li>
                                        <a href="polygon/admindek/default/email-inbox.html">
                                            <i class="feather icon-mail"></i> My Messages
                                        </a>
                                    </li>
                                    <li>
                                        <a href="polygon/admindek/default/auth-lock-screen.html">
                                            <i class="feather icon-lock"></i> Lock Screen
                                        </a>
                                    </li>
                                    <li>
                                        <a href="polygon/admindek/default/auth-sign-in-social.html">
                                            <i class="feather icon-log-out"></i> Logout
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
</div>
        <div class="page-wrapper chiller-theme toggled">
            <a id="show-sidebar" class="btn btn-sm btn-dark" href="#">
              <i class="fas fa-bars"></i>
            </a>
            <nav id="sidebar" class="sidebar-wrapper">
              <div class="sidebar-content">
                <div class="sidebar-brand">
                  <a href="#">VTCMInterface</a>
                  <div id="close-sidebar">
                    <i class="fas fa-times"></i>
                  </div>
                </div>
                <!-- sidebar-search  -->
                <div class="sidebar-menu">
                  <ul>
                    <li class="header-menu">
                      <span>Allgemein</span>
                    </li>
                    <li class="sidebar-dropdown">
                      <a href="#">
                        <i class="fa fa-tachometer-alt"></i>
                        <span>Dashboard</span>
                        <span class="badge badge-pill badge-warning">New</span>
                      </a>
                      <div class="sidebar-submenu">
                        <ul>
                          <li>
                            <a href="#">Dashboard 1
                              <span class="badge badge-pill badge-success">Pro</span>
                            </a>
                          </li>
                          <li>
                            <a href="#">Dashboard 2</a>
                          </li>
                          <li>
                            <a href="#">Dashboard 3</a>
                          </li>
                        </ul>
                      </div>
                    </li>
                    <li>
                        <a href="/interface/logbook">
                          <i class="fas fa-road"></i>
                          <span>Mein Fahrtenbuch</span>
                        </a>
                      </li>
                    <li class="sidebar-dropdown">
                      <a href="#">
                        <i class="fas fa-piggy-bank"></i>
                        <span>Bank</span>
                      </a>
                      <div class="sidebar-submenu">
                        <ul>
                          <li>
                            <a href="#">General</a>
                          </li>
                          <li>
                            <a href="#">Panels</a>
                          </li>
                          <li>
                            <a href="#">Tables</a>
                          </li>
                          <li>
                            <a href="#">Icons</a>
                          </li>
                          <li>
                            <a href="#">Forms</a>
                          </li>
                        </ul>
                      </div>
                    </li>
                    <li class="sidebar-dropdown">
                      <a href="#">
                        <i class="fa fa-newspaper"></i>
                        <span>Arbeitsmarkt</span>
                      </a>
                      <div class="sidebar-submenu">
                        <ul>
                          <li>
                            <a href="#">Pie chart</a>
                          </li>
                          <li>
                            <a href="#">Line chart</a>
                          </li>
                          <li>
                            <a href="#">Bar chart</a>
                          </li>
                          <li>
                            <a href="#">Histogram</a>
                          </li>
                        </ul>
                      </div>
                    </li>
                    <li class="sidebar-dropdown">
                      <a href="#">
                        <i class="fa fa-globe"></i>
                        <span>Livemap</span>
                      </a>
                      <div class="sidebar-submenu">
                        <ul>
                          <li>
                            <a href="#">Google maps</a>
                          </li>
                          <li>
                            <a href="#">Open street map</a>
                          </li>
                        </ul>
                      </div>
                    </li>
                    <li class="header-menu">
                        <span>Firma</span>
                      </li>
                      <li>
                        <a href="#">
                          <i class="fas fa-tachometer-alt"></i>
                          <span>Dashboard</span>
                          <span class="badge badge-pill badge-primary">Beta</span>
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <i class="fa fa-road"></i>
                          <span>Fahrtenbuch</span>
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <i class="fas fa-piggy-bank"></i>
                          <span>Bank</span>
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <i class="fa fa-folder"></i>
                          <span>Stellenanzeigen</span>
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <i class="fas fa-cogs"></i>
                          <span>Einstellungen</span>
                        </a>
                      </li>
                    <li class="header-menu">
                      <span>Extra</span>
                    </li>
                  </ul>
                </div>
                <!-- sidebar-menu  -->
              </div>
              <!-- sidebar-content  -->
              <div class="sidebar-footer">
                <a href="#">
                  <i class="fa fa-bell"></i>
                  <span class="badge badge-pill badge-warning notification">3</span>
                </a>
                <a href="#">
                  <i class="fa fa-envelope"></i>
                  <span class="badge badge-pill badge-success notification">7</span>
                </a>
                <a href="#">
                  <i class="fa fa-cog"></i>
                  <span class="badge-sonar"></span>
                </a>
                <a href="#">
                  <i class="fa fa-power-off"></i>
                </a>
              </div>
              
            </nav>
            

            <!-- sidebar-wrapper  -->
            <main class="page-content">
              <div class="container-fluid">
                  @yield('content')
              </div>
          
            </main>
            <!-- page-content" -->
          </div>
          <!-- page-wrapper -->
    </div>
</body>

</html>