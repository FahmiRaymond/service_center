<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/sidebar.css') }}" rel="stylesheet">
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="wrapper">

        <!-- Sidebar -->
        <div id="sidebar-wrapper">
            <nav id="spy">
                <ul class="sidebar-nav nav">
                    <li class="sidebar-brand">
                        <span class="brand-text">SERVICE CENTER<span>
                    </li>
                    <li>
                        <a href="#home"><span class="fa fa-search solo"><b>Cek Status</b></span></a>
                    </li>
                    <li>
                        <a href="#anch1" data-scroll>
                            <span class="fa fa-plus solo"><b>Tambah Data</b></span>
                        </a>
                    </li>
                    <li>
                        <a href="#anch2" data-scroll>
                            <span class="fa fa-table solo"><b>Data HP</b></span>
                        </a>
                    </li>
                    <li>
                        <a href="#anch3" data-scroll>
                            <span class="fa fa-book solo"><b>Laporan</b></span>
                        </a>
                    </li>
                    <li>
                        <a href="#anch4" data-scroll>
                            <span class="fa fa-user solo"><b>Anggota</b></span>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>

        <!-- Page content -->
        <div id="page-content-wrapper">
            <div id="wrap">
                <div class="content-header">
                    <h1 id="home">
                        <a id="menu-toggle" href="#">
                            <span class="fa fa-bars"></span>
                        </a>
                    </h1>
                </div>
            </div>
            <div class="page-content inset" data-spy="scroll" data-target="#spy">
                <div class="row">
  
                        <div class="jumbotron text-center" >
                            <h1>Hello Beautiful!</h1>
                            <p>This is a sidebar navigation responsive template built off of Bootstrap 3.0 and simple sidebar template. It includes anchors, scroll spy, smooth scroll, and Awesome icon fonts.</p>
                            <p><a class="btn btn-default">Click On Me!</a>
                            <a class="btn btn-info">Tweet Me!</a></p>
                        </div>
    
                </div>
                <div class="row">
                    <div class="col-md-12 well">
                        <legend id="anch1">Anchor 1</legend>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus ultricies, metus eget fringilla fermentum, sem justo pulvinar tellus, ac varius neque ante eget mi. Donec cursus nibh ultrices vulputate aliquet. Morbi nulla enim, molestie eu ullamcorper quis, placerat a mauris. Proin vel magna ullamcorper, vulputate leo eu, egestas odio. Vivamus erat leo, egestas in euismod sed, fermentum nec magna. Nunc nisi enim, euismod a tellus sit amet, fermentum adipiscing ipsum. Fusce rhoncus diam ac neque aliquam convallis. Etiam malesuada, nibh id rutrum euismod, enim augue gravida dolor, at vulputate felis mi at magna. Nulla luctus, libero eget luctus gravida, sapien enim varius massa, adipiscing aliquet lacus mi eu eros. Duis pretium laoreet ullamcorper. Aenean in mauris nec libero tincidunt pharetra non et dui. Sed tortor turpis, mollis et tempus eu, auctor laoreet neque. Etiam eu tortor rutrum, rutrum mauris sit amet, hendrerit augue. Sed ut tincidunt nisi. Nam consectetur velit ac pharetra venenatis.</p>
                        <p>Donec pellentesque id quam vel iaculis. Phasellus commodo tempor metus, eget sollicitudin odio ultricies id. Proin sed ipsum quis turpis suscipit luctus vitae id urna. Fusce et rhoncus quam. Etiam vel justo ligula. Nullam euismod lacinia risus a pulvinar. Pellentesque sit amet nisl eget ante vulputate feugiat. Suspendisse venenatis magna nunc, mollis facilisis neque condimentum ac. Vivamus non semper dui. Aenean sed eleifend dui. Vivamus a massa aliquam nibh consectetur luctus id at ligula. Nunc ipsum dolor, mollis at sem et, auctor rhoncus ipsum. Nulla faucibus venenatis est sit amet facilisis. In vestibulum nisi at tellus egestas, in pharetra enim fringilla. In ac erat non magna accumsan aliquam.</p>
                    </div>
                    <div class="col-md-12 well">
                        <legend id="anch2">Anchor 2</legend>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus ultricies, metus eget fringilla fermentum, sem justo pulvinar tellus, ac varius neque ante eget mi. Donec cursus nibh ultrices vulputate aliquet. Morbi nulla enim, molestie eu ullamcorper quis, placerat a mauris. Proin vel magna ullamcorper, vulputate leo eu, egestas odio. Vivamus erat leo, egestas in euismod sed, fermentum nec magna. Nunc nisi enim, euismod a tellus sit amet, fermentum adipiscing ipsum. Fusce rhoncus diam ac neque aliquam convallis. Etiam malesuada, nibh id rutrum euismod, enim augue gravida dolor, at vulputate felis mi at magna. Nulla luctus, libero eget luctus gravida, sapien enim varius massa, adipiscing aliquet lacus mi eu eros. Duis pretium laoreet ullamcorper. Aenean in mauris nec libero tincidunt pharetra non et dui. Sed tortor turpis, mollis et tempus eu, auctor laoreet neque. Etiam eu tortor rutrum, rutrum mauris sit amet, hendrerit augue. Sed ut tincidunt nisi. Nam consectetur velit ac pharetra venenatis.</p>
                        <p>Donec pellentesque id quam vel iaculis. Phasellus commodo tempor metus, eget sollicitudin odio ultricies id. Proin sed ipsum quis turpis suscipit luctus vitae id urna. Fusce et rhoncus quam. Etiam vel justo ligula. Nullam euismod lacinia risus a pulvinar. Pellentesque sit amet nisl eget ante vulputate feugiat. Suspendisse venenatis magna nunc, mollis facilisis neque condimentum ac. Vivamus non semper dui. Aenean sed eleifend dui. Vivamus a massa aliquam nibh consectetur luctus id at ligula. Nunc ipsum dolor, mollis at sem et, auctor rhoncus ipsum. Nulla faucibus venenatis est sit amet facilisis. In vestibulum nisi at tellus egestas, in pharetra enim fringilla. In ac erat non magna accumsan aliquam.</p>
                    </div>
                    <div class="col-md-12 well">
                        <legend id="anch3">Anchor 3</legend>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus ultricies, metus eget fringilla fermentum, sem justo pulvinar tellus, ac varius neque ante eget mi. Donec cursus nibh ultrices vulputate aliquet. Morbi nulla enim, molestie eu ullamcorper quis, placerat a mauris. Proin vel magna ullamcorper, vulputate leo eu, egestas odio. Vivamus erat leo, egestas in euismod sed, fermentum nec magna. Nunc nisi enim, euismod a tellus sit amet, fermentum adipiscing ipsum. Fusce rhoncus diam ac neque aliquam convallis. Etiam malesuada, nibh id rutrum euismod, enim augue gravida dolor, at vulputate felis mi at magna. Nulla luctus, libero eget luctus gravida, sapien enim varius massa, adipiscing aliquet lacus mi eu eros. Duis pretium laoreet ullamcorper. Aenean in mauris nec libero tincidunt pharetra non et dui. Sed tortor turpis, mollis et tempus eu, auctor laoreet neque. Etiam eu tortor rutrum, rutrum mauris sit amet, hendrerit augue. Sed ut tincidunt nisi. Nam consectetur velit ac pharetra venenatis.</p>
                        <p>Donec pellentesque id quam vel iaculis. Phasellus commodo tempor metus, eget sollicitudin odio ultricies id. Proin sed ipsum quis turpis suscipit luctus vitae id urna. Fusce et rhoncus quam. Etiam vel justo ligula. Nullam euismod lacinia risus a pulvinar. Pellentesque sit amet nisl eget ante vulputate feugiat. Suspendisse venenatis magna nunc, mollis facilisis neque condimentum ac. Vivamus non semper dui. Aenean sed eleifend dui. Vivamus a massa aliquam nibh consectetur luctus id at ligula. Nunc ipsum dolor, mollis at sem et, auctor rhoncus ipsum. Nulla faucibus venenatis est sit amet facilisis. In vestibulum nisi at tellus egestas, in pharetra enim fringilla. In ac erat non magna accumsan aliquam.</p>
                    </div>
                    <div class="col-md-12 well">
                        <legend id="anch4">Anchor 4</legend>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus ultricies, metus eget fringilla fermentum, sem justo pulvinar tellus, ac varius neque ante eget mi. Donec cursus nibh ultrices vulputate aliquet. Morbi nulla enim, molestie eu ullamcorper quis, placerat a mauris. Proin vel magna ullamcorper, vulputate leo eu, egestas odio. Vivamus erat leo, egestas in euismod sed, fermentum nec magna. Nunc nisi enim, euismod a tellus sit amet, fermentum adipiscing ipsum. Fusce rhoncus diam ac neque aliquam convallis. Etiam malesuada, nibh id rutrum euismod, enim augue gravida dolor, at vulputate felis mi at magna. Nulla luctus, libero eget luctus gravida, sapien enim varius massa, adipiscing aliquet lacus mi eu eros. Duis pretium laoreet ullamcorper. Aenean in mauris nec libero tincidunt pharetra non et dui. Sed tortor turpis, mollis et tempus eu, auctor laoreet neque. Etiam eu tortor rutrum, rutrum mauris sit amet, hendrerit augue. Sed ut tincidunt nisi. Nam consectetur velit ac pharetra venenatis.</p>
                        <p>Donec pellentesque id quam vel iaculis. Phasellus commodo tempor metus, eget sollicitudin odio ultricies id. Proin sed ipsum quis turpis suscipit luctus vitae id urna. Fusce et rhoncus quam. Etiam vel justo ligula. Nullam euismod lacinia risus a pulvinar. Pellentesque sit amet nisl eget ante vulputate feugiat. Suspendisse venenatis magna nunc, mollis facilisis neque condimentum ac. Vivamus non semper dui. Aenean sed eleifend dui. Vivamus a massa aliquam nibh consectetur luctus id at ligula. Nunc ipsum dolor, mollis at sem et, auctor rhoncus ipsum. Nulla faucibus venenatis est sit amet facilisis. In vestibulum nisi at tellus egestas, in pharetra enim fringilla. In ac erat non magna accumsan aliquam.</p>
                    </div>
                </div>

                <div class="navbar navbar-default navbar-static-bottom">
                    <p class="navbar-text pull-left">
                        Built by <a href="http://mvnguyen.com" target="_blank">Michael V Nguyen
                    </p>
                </div>
            </div>

        </div>

    </div>
    
    {{--  @yield('content')  --}}
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/sidebar.js') }}"></script>
</body>
</html>
