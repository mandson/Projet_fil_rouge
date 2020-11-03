<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
  <meta name="author" content="GeeksLabs">
  <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
  <link rel="shortcut icon" href="img/favicon.png">

  <title>IRISPROGRAMME</title>

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" type="text/css" href="{{ asset('admin/css/bootstrap.min.css') }}">
  <!-- bootstrap theme -->
  <link href="{{ asset('admin/css/bootstrap-theme.css') }}" rel="stylesheet">
  <!--external css-->
  <!-- font icon -->
  <link href="{{ asset('admin/css/elegant-icons-style.css') }}" rel="stylesheet" />
  <link href="{{ asset('admin/css/font-awesome.min.css') }}" rel="stylesheet" />
  <!-- full calendar css-->
  <link href="{{ asset('admin/assets/fullcalendar/fullcalendar/bootstrap-fullcalendar.css') }}" rel="stylesheet" />
  <link href="{{ asset('admin/assets/fullcalendar/fullcalendar/fullcalendar.css') }}" rel="stylesheet" />
  <!-- easy pie chart-->
  <link href="{{ asset('admin/assets/jquery-easy-pie-chart/jquery.easy-pie-chart.css') }}" rel="stylesheet" type="text/css" media="screen" />
  <!-- owl carousel -->
  <link rel="stylesheet" href="{{ asset('admin/css/owl.carousel.css') }}" type="text/css">
  <link href="{{ asset('admin/css/jquery-jvectormap-1.2.2.css') }}" rel="stylesheet">
  <!-- Custom styles -->
  <link rel="stylesheet" href="{{ asset('admin/css/fullcalendar.css') }}">
  <link href="{{ asset('../admin/css/widgets.css') }}" rel="stylesheet">
  <link href="{{ asset('admin/css/style.css') }}" rel="stylesheet">
  @notifyCss
  <link href="{{ asset('admin/css/style-responsive.css') }}" rel="stylesheet" />
  <link href="{{ asset('admin/css/xcharts.min.css') }}" rel=" stylesheet">
  <link href="{{ asset('admin/css/jquery-ui-1..4.min.css') }}" rel="stylesheet">
  <link rel="stylesheet" href="{{asset('users/css/style.css')}}">

</head>

<body>
  <!-- container section start -->
  <section id="container" class="">


    <header class="header dark-bg">
      <div class="toggle-nav">
        <div class="icon-reorder tooltips" data-original-title="Toggle Navigation" data-placement="bottom"><i class="icon_menu"></i></div>
      </div>

      <!--logo start-->
      <a href="/" class="logo">IRISPROGRAMME <span class="lite">Admin</span></a>
      <!--logo end-->

      <div class="nav search-row" id="top_menu">
        <!--  search form start -->
        <ul class="nav top-menu">
          <li>
            <form class="navbar-form">
              <input class="form-control" placeholder="Search" type="text">
            </form>
          </li>
        </ul>
        <!--  search form end -->
      </div>

      <div class="top-nav notification-row">
        <!-- notificatoin dropdown start-->
        <ul class="nav pull-right top-menu">

          <!-- task notificatoin start -->
          <li id="task_notificatoin_bar" class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <i class="icon-task-l"></i>
                            <span class="badge bg-important">6</span>
                        </a>
            <ul class="dropdown-menu extended tasks-bar">
              <div class="notify-arrow notify-arrow-blue"></div>
              <li>
                <p class="blue">You have 13 pending letter</p>
              </li>
              <li>
                <a href="#">
                  <div class="task-info">
                    <div class="desc">Design PSD </div>
                    <div class="percent">90%</div>
                  </div>
                  <div class="progress progress-striped">
                    <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="0" style="width: 90%">
                      <span class="sr-only">90% Complete (success)</span>
                    </div>
                  </div>
                </a>
              </li>
              <li>
                <a href="#">
                  <div class="task-info">
                    <div class="desc">
                      Project 1
                    </div>
                    <div class="percent">30%</div>
                  </div>
                  <div class="progress progress-striped">
                    <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="30" aria-valuemin="0" aria-valuemax="0" style="width: 30%">
                      <span class="sr-only">30% Complete (warning)</span>
                    </div>
                  </div>
                </a>
              </li>
              <li>
                <a href="#">
                  <div class="task-info">
                    <div class="desc">Digital Marketing</div>
                    <div class="percent">80%</div>
                  </div>
                  <div class="progress progress-striped">
                    <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="0" style="width: 80%">
                      <span class="sr-only">80% Complete</span>
                    </div>
                  </div>
                </a>
              </li>
              <li>
                <a href="#">
                  <div class="task-info">
                    <div class="desc">Logo Designing</div>
                    <div class="percent">8%</div>
                  </div>
                  <div class="progress progress-striped">
                    <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="8" aria-valuemin="0" aria-valuemax="0" style="width: 78%">
                      <span class="sr-only">78% Complete (danger)</span>
                    </div>
                  </div>
                </a>
              </li>
              <li>
                <a href="#">
                  <div class="task-info">
                    <div class="desc">Mobile App</div>
                    <div class="percent">50%</div>
                  </div>
                  <div class="progress progress-striped active">
                    <div class="progress-bar" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="0" style="width: 50%">
                      <span class="sr-only">50% Complete</span>
                    </div>
                  </div>

                </a>
              </li>
              <li class="external">
                <a href="#">See All Tasks</a>
              </li>
            </ul>
          </li>
          <!-- task notificatoin end -->
          <!-- inbox notificatoin start-->
          <li id="mail_notificatoin_bar" class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <i class="icon-envelope-l"></i>
                            <span class="badge bg-important">5</span>
                        </a>
            <ul class="dropdown-menu extended inbox">
              <div class="notify-arrow notify-arrow-blue"></div>
              <li>
                <p class="blue">You have 5 new messages</p>
              </li>
              <li>
                <a href="#">
                                    <span class="photo"><img alt="avatar" src="./img/avatar-mini.jpg"></span>
                                    <span class="subject">
                                    <span class="from">Greg  Martin</span>
                                    <span class="time">1 min</span>
                                    </span>
                                    <span class="message">
                                        I really like this admin panel.
                                    </span>
                                </a>
              </li>
              <li>
                <a href="#">
                                    <span class="photo"><img alt="avatar" src="./img/avatar-mini2.jpg"></span>
                                    <span class="subject">
                                    <span class="from">Bob   Mckenzie</span>
                                    <span class="time">5 mins</span>
                                    </span>
                                    <span class="message">
                                     Hi, What is next project plan?
                                    </span>
                                </a>
              </li>
              <li>
                <a href="#">
                                    <span class="photo"><img alt="avatar" src="./img/avatar-mini3.jpg"></span>
                                    <span class="subject">
                                    <span class="from">Phillip   Park</span>
                                    <span class="time">2 hrs</span>
                                    </span>
                                    <span class="message">
                                        I am like to buy this Admin Template.
                                    </span>
                                </a>
              </li>
              <li>
                <a href="#">
                                    <span class="photo"><img alt="avatar" src="./img/avatar-mini4.jpg"></span>
                                    <span class="subject">
                                    <span class="from">Ray   Munoz</span>
                                    <span class="time">1 day</span>
                                    </span>
                                    <span class="message">
                                        Icon fonts are great.
                                    </span>
                                </a>
              </li>
              <li>
                <a href="#">See all messages</a>
              </li>
            </ul>
          </li>
          <!-- inbox notificatoin end -->
          <!-- alert notification start-->
          <li id="alert_notificatoin_bar" class="dropdown">
            <a class="dropdown-toggle" href="{{route ('ncompte.liste')}}">

                            <i class="icon-bell-l"></i>
                            <span class="badge bg-important">11</span>
                        </a>

          </li>
          <!-- alert notification end-->
          <!-- user login dropdown start-->

            <!-- Authentication Links -->
            @guest
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('login') }}">{{ __('Se Connecter') }}</a>
                </li>
                @if (Route::has('register'))
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('register') }}">{{ __('Cree un Compte') }}</a>
                    </li>
                @endif
            @else
                <li class="nav-item dropdown">

                    <a id="navbarDropdown" class="lite" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ 'Connecté' }} : {{ Auth::user()->name }}
                    </a>

                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                         document.getElementById('logout-form').submit();">
                            {{ __('Deconnexion') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>


                    </div>
                </li>
            @endguest

          <!-- user login dropdown end -->
        </ul>
        <!-- notificatoin dropdown end-->
      </div>
    </header>
    <!--header end-->


    <!--sidebar start-->
    <aside>
      <div id="sidebar" class="nav-collapse ">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu">
          <li class="active">
            <a class="" href="#">
                          <i class="icon_house_alt"></i>
                          <span>FTK Dashboard</span>
                      </a>
          </li>
          <li class="sub-menu">
            <a href="javascript:;" class="">
                          <i class="icon_desktop"></i>
                          <span>Parametrage Université</span>
                          <span class="menu-arrow arrow_carrot-right"></span>
                      </a>
            <ul class="sub">
              <li><a class="" href="{{route ('universite.index')}}">Detail Université</a></li>
              <li><a class="" href="{{route('config.form')}}">Departements&Filieres</a></li>
              <li><a class="" href="{{route('config.liste')}}">Liste </a></li>

            </ul>
          </li>

          <li class="sub-menu">
            <a href="javascript:;" class="">
                          <i class="icon_document_alt"></i>
                          <span>Page Acceuil</span>
                          <span class="menu-arrow arrow_carrot-right"></span>
                      </a>
            <ul class="sub">

              <li><a class="" href="{{ route('actualite.index')}}  ">Top Actualité</a></li>
              <li><a class="" href="{{ route('info.index')}}  ">Urgent/Communique</a></li>
            </ul>
          </li>

          <li class="sub-menu">
            <a href="javascript:;" class="">
                          <i class="icon_table"></i>
                          <span>Gestion:Programmes</span>
                          <span class="menu-arrow arrow_carrot-right"></span>
           </a>
            <ul class="sub">
              <li><a class="" href="{{route('prof.index')}}">Proffesseur</a></li>
              <li><a class="" href="{{route('salle.index')}}">Salle &Hamphie</a></li>
              <li><a class="" href="{{route('niveau.index')}}">Niveau &Categorie</a></li>
              <li><a class="" href="{{route('programme.index')}}">Nouvelle Publication</a></li>

            </ul>
          </li>

        <li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('register') }}">{{ __('Cree un Compte') }}</a>
            </li>
        </li>
 </ul>
        <!-- sidebar menu end-->
      </div>

    </aside>
    <!--sidebar end-->


    <!--main content start-->

     <div>@yield('content') </div>
    <!--main content end-->
  </section>
  <!-- container section start -->

  <!-- javascripts -->
  <script src="{{ asset('admin/js/jquery.js') }}"></script>
  <script src="{{ asset('admin/js/jquery-ui-1.10.4.min.js') }}"></script>
  <script src="{{ asset('admin/js/jquery-1.8.3.min.js') }}"></script>
  <script type="{{ asset('admin/text/javascript" src="js/jquery-ui-1.9.2.custom.min.js') }}"></script>
  <!-- bootstrap -->
  <script src="{{ asset('admin/js/bootstrap.min.js') }}"></script>
  <!-- nice scroll -->
  <script src="{{ asset('admin/js/jquery.scrollTo.min.js') }}"></script>
  <script src="{{ asset('admin/js/jquery.nicescroll.js') }}" type="text/javascript"></script>
  <!-- charts scripts -->
  <script src="{{ asset('admin/assets/jquery-knob/js/jquery.knob.js') }}"></script>
  <script src="{{ asset('admin/js/jquery.sparkline.js') }}" type="text/javascript"></script>
  <script src="{{ asset('admin/assets/jquery-easy-pie-chart/jquery.easy-pie-chart.js') }}"></script>
  <script src="{{ asset('admin/js/owl.carousel.js') }}"></script>
  <!-- jQuery full calendar -->
  <<script src="{{ asset('admin/js/fullcalendar.min.js') }}"></script>
    <!-- Full Google Calendar - Calendar -->
    <script src="{{ asset('admin/assets/fullcalendar/fullcalendar/fullcalendar.js') }}"></script>
    <!--script for this page only-->
    <script src="{{ asset('admin/js/calendar-custom.js') }}"></script>
    <script src="{{ asset('admin/js/jquery.rateit.min.js') }}"></script>
    <!-- custom select -->
    <script src="{{ asset('admin/js/jquery.customSelect.min.js') }}"></script>
    <script src="{{ asset('admin/assets/chart-master/Chart.js') }}"></script>

    <!--custome script for all page-->
    <script src="{{ asset('admin/js/scripts.js') }}"></script>
 
<x:notify-messages/>
    <!-- custom script for this page-->
    <script src="{{ asset('admin/js/sparkline-chart.js') }}"></script>
    <script src="{{ asset('admin/js/easy-pie-chart.js') }}"></script>
    <script src="{{ asset('admin/js/jquery-jvectormap-1.2.2.min.js') }}"></script>
    <script src="{{ asset('admin/js/jquery-jvectormap-world-mill-en.js') }}"></script>
    <script src="{{ asset('admin/js/xcharts.min.js') }}"></script>
    <script src="{{ asset('admin/js/jquery.autosize.min.js') }}"></script>
    <script src="{{ asset('admin/js/jquery.placeholder.min.js') }}"></script>
    <script src="{{ asset('admin/js/gdp-data.js') }}"></script>
    <script src="{{ asset('admin/js/morris.min.js') }}"></script>
    <script src="{{ asset('admin/js/sparklines.js') }}"></script>
    <script src="{{ asset('admin/js/charts.js') }}"></script>
    <script src="{{ asset('admin/js/jquery.slimscroll.min.js') }}"></script>
    <script>
      //knob
      $(function() {
        $(".knob").knob({
          'draw': function() {
            $(this.i).val(this.cv + '%')
          }
        })
      });

      //carousel
      $(document).ready(function() {
        $("#owl-slider").owlCarousel({
          navigation: true,
          slideSpeed: 300,
          paginationSpeed: 400,
          singleItem: true

        });
      });

      //custom select box

      $(function() {
        $('select.styled').customSelect();
      });

      /* ---------- Map ---------- */
      $(function() {
        $('#map').vectorMap({
          map: 'world_mill_en',
          series: {
            regions: [{
              values: gdpData,
              scale: ['#000', '#000'],
              normalizeFunction: 'polynomial'
            }]
          },
          backgroundColor: '#eef3f',
          onLabelShow: function(e, el, code) {
            el.html(el.html() + ' (GDP - ' + gdpData[code] + ')');
          }
        });
      });
    </script>
 @include('notify::messages')
 @notifyJs
</body>

</html>
