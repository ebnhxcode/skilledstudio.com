<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Skilled Studio</title>

  <!-- Bootstrap Core CSS -->
  {!!Html::style('css/style.css')!!}
  {!!Html::style('css/bootstrap.min.css')!!}


  <!-- Custom CSS -->
  {!!Html::style('css/sb-admin.css')!!}

  <!-- Morris Charts CSS -->
  {!!Html::style('css/plugins/morris.css')!!}

  <!-- Custom Fonts -->
  {!!Html::style('font-awesome/css/font-awesome.min.css')!!}

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  {!!Html::script('js/html5shiv.js')!!}
  {!!Html::script('js/respond.min.js')!!}
  <![endif]-->

  <style>
    body {
      font-family: 'Lato';
    }
    .fa-btn {
      margin-right: 6px;
    }
  </style>

</head>

<body>

<div id="wrapper">

  <!-- Navigation -->
  <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <!-- Branding Image -->
      <a class="navbar-brand" href="{{ url('/') }}">
        SkilledStudio
      </a>
    </div>
    <!-- Top Menu Items -->
    <ul class="{{--nav navbar-nav navbar-right--}}nav navbar-right top-nav">
      <!-- Authentication Links -->
      @if (Auth::guest())
        <li><a href="{{ url('/login') }}">Login</a></li>
        <li><a href="{{ url('/register') }}">Register</a></li>
      @else
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
            {{ Auth::user()->name }} <span class="caret"></span>
          </a>

          <ul class="dropdown-menu" role="menu">
            <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>
          </ul>
        </li>
      @endif
    </ul>
    {{--
<ul class="nav navbar-right top-nav">
      <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-envelope"></i> <b class="caret"></b></a>



        <ul class="dropdown-menu message-dropdown">
          <li class="message-preview">
            <a href="#">
              <div class="media">
                <span class="pull-left">
                    <img class="media-object" src="http://placehold.it/50x50" alt="">
                </span>
                <div class="media-body">
                  <h5 class="media-heading"><strong>John Smith</strong>
                  </h5>
                  <p class="small text-muted"><i class="fa fa-clock-o"></i> Yesterday at 4:32 PM</p>
                  <p>Lorem ipsum dolor sit amet, consectetur...</p>
                </div>
              </div>
            </a>
          </li>
          <li class="message-preview">
            <a href="#">
              <div class="media">
                <span class="pull-left">
                    <img class="media-object" src="http://placehold.it/50x50" alt="">
                </span>
                <div class="media-body">
                  <h5 class="media-heading"><strong>John Smith</strong>
                  </h5>
                  <p class="small text-muted"><i class="fa fa-clock-o"></i> Yesterday at 4:32 PM</p>
                  <p>Lorem ipsum dolor sit amet, consectetur...</p>
                </div>
              </div>
            </a>
          </li>
          <li class="message-preview">
            <a href="#">
              <div class="media">
                <span class="pull-left">
                    <img class="media-object" src="http://placehold.it/50x50" alt="">
                </span>
                <div class="media-body">
                  <h5 class="media-heading"><strong>John Smith</strong>
                  </h5>
                  <p class="small text-muted"><i class="fa fa-clock-o"></i> Yesterday at 4:32 PM</p>
                  <p>Lorem ipsum dolor sit amet, consectetur...</p>
                </div>
              </div>
            </a>
          </li>
          <li class="message-footer">
            <a href="#">Read All New Messages</a>
          </li>
        </ul>
      </li>
      {{--
      <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-bell"></i> <b class="caret"></b></a>
        <ul class="dropdown-menu alert-dropdown">
          <li>
            <a href="#">Alert Name <span class="label label-default">Alert Badge</span></a>
          </li>
          <li>
            <a href="#">Alert Name <span class="label label-primary">Alert Badge</span></a>
          </li>
          <li>
            <a href="#">Alert Name <span class="label label-success">Alert Badge</span></a>
          </li>
          <li>
            <a href="#">Alert Name <span class="label label-info">Alert Badge</span></a>
          </li>
          <li>
            <a href="#">Alert Name <span class="label label-warning">Alert Badge</span></a>
          </li>
          <li>
            <a href="#">Alert Name <span class="label label-danger">Alert Badge</span></a>
          </li>
          <li class="divider"></li>
          <li>
            <a href="#">View All</a>
          </li>
        </ul>
      </li>
      <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> John Smith <b class="caret"></b></a>
        <ul class="dropdown-menu">
          <li>
            <a href="#"><i class="fa fa-fw fa-user"></i> Profile</a>
          </li>
          <li>
            <a href="#"><i class="fa fa-fw fa-envelope"></i> Inbox</a>
          </li>
          <li>
            <a href="#"><i class="fa fa-fw fa-gear"></i> Settings</a>
          </li>
          <li class="divider"></li>
          <li>
            <a href="#"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
          </li>
        </ul>
      </li>
    </ul>
    --}}


    <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->

    @if (!Auth::guest())
      <div class="collapse navbar-collapse navbar-ex1-collapse">
        <ul class="nav navbar-nav side-nav">
          <li class="{!! Request::path()=="dashboard"?'active':'' !!}">
            <a href="{!! url('/dashboard') !!}"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
          </li>
          <li class="{!! Request::path()=="roles"?'active':'' !!}">
            <a href="{!! url('/roles') !!}"><i class="fa fa-fw fa-dashboard"></i> Roles</a>
          </li>
          {{--
          <li>
            <a href="charts.html"><i class="fa fa-fw fa-bar-chart-o"></i> Charts</a>
          </li>
          <li>
            <a href="tables.html"><i class="fa fa-fw fa-table"></i> Tables</a>
          </li>
          <li>
            <a href="forms.html"><i class="fa fa-fw fa-edit"></i> Forms</a>
          </li>
          <li>
            <a href="bootstrap-elements.html"><i class="fa fa-fw fa-desktop"></i> Bootstrap Elements</a>
          </li>
          <li>
            <a href="bootstrap-grid.html"><i class="fa fa-fw fa-wrench"></i> Bootstrap Grid</a>
          </li>
          <li>
            <a href="javascript:;" data-toggle="collapse" data-target="#demo"><i class="fa fa-fw fa-arrows-v"></i> Dropdown <i class="fa fa-fw fa-caret-down"></i></a>
            <ul id="demo" class="collapse">
              <li>
                <a href="#">Dropdown Item</a>
              </li>
              <li>
                <a href="#">Dropdown Item</a>
              </li>
            </ul>
          </li>
          <li>
            <a href="blank-page.html"><i class="fa fa-fw fa-file"></i> Blank Page</a>
          </li>
          <li>
            <a href="index-rtl.html"><i class="fa fa-fw fa-dashboard"></i> RTL Dashboard</a>
          </li>
          --}}
        </ul>
      </div>
    @else
      <div class="collapse navbar-collapse navbar-ex1-collapse">
        <ul class="nav navbar-nav side-nav">
          <li class="">
            <i class="fa fa-fw fa-dashboard"></i>
            <a href="#!">
              <div align="center">
                <small>
                  Para ver todo el contenido de nuestro sitio te debes
                </small>
              </div>

            </a>
              <div align="center">
                <a href="{!! url('/register') !!}" class="btn btn-primary btn-sm">
                  Registrar
                </a>
              </div>

              <hr>
            <a href="#!">
              <div align="center">
                <small>
                  Si ya posees una cuenta puedes
                </small>
              </div>

              <div align="center">
                <a href="{!! url('/login') !!}" class="btn btn-success btn-sm">
                  Iniciar Sesión
                </a>
              </div>
            </a>
            <hr>
          </li>

          <li class="">
            <i class="fa fa-fw fa-dashboard"></i>
            <a href="{!! url('/') !!}">
              <div align="middle">
                <small>SkilledStudio.com</small>
              </div>
            </a>

          </li>
        </ul>
      </div>
    @endif



    <!-- /.navbar-collapse -->
  </nav>

  @yield('content')

  <!-- /#page-wrapper -->

</div>
<!-- /#wrapper -->

<!-- jQuery -->
{!!Html::script('js/jquery.js')!!}


<!-- Bootstrap Core JavaScript -->
{!!Html::script('js/bootstrap.min.js')!!}

<!-- Morris Charts JavaScript -->
{!!Html::script('js/plugins/morris/raphael.min.js')!!}
{!!Html::script('js/plugins/morris/morris.min.js')!!}
{!!Html::script('js/plugins/morris/morris-data.js')!!}

</body>

</html>