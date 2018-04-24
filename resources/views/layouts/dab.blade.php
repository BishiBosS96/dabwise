<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Dabwise</title>
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}">
        <link rel="stylesheet" href="{{ asset('css/ionicons.min.css') }}">
        <link rel="stylesheet" href="{{ asset('css/AdminLTE.min.css') }}">
        <link rel="stylesheet" href="{{ asset('css/skins/_all-skins.min.css') }}">
        <link rel="stylesheet" href="{{ asset('css/skins/bootstrap3-wysihtml5.min.css') }}">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
        @yield('styles')
    </head>

    <body class="hold-transition skin-blue sidebar-mini">
        <div class="wrapper">
          <header class="main-header">
            <nav class="navbar navbar-static-top">
                <div class="col-xs-4">
                    <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
                        <span class="sr-only">Toggle navigation</span>
                    </a>
                </div>
                <div class="col-xs-4">
                    <span class="logo-holder">
                        <img class="logo-mid" src="{{asset('images/logo.jpg')}}">
                    </span>
                </div>
                <div class="col-xs-4">
                    <div class="navbar-custom-menu">
                        <ul class="nav navbar-nav">
                          <li>
                            <a href="#" data-toggle="control-sidebar"><i class="fa fa-cart-plus "></i></a>
                          </li>
                        </ul>
                      </div>
                </div>
              
              

            </nav>
          </header>
          <aside class="main-sidebar">
            <section class="sidebar">
              <ul class="sidebar-menu" data-widget="tree">

                <li class="active">
                    <a href="javascript:;"><i class="fa fa-book"></i> 
                        <span>Inicio</span>
                    </a>
                </li>
                
                <li>
                    <a href="javascript:;"><i class="fa fa-bullhorn"></i> 
                        <span>Blog</span>
                    </a>
                </li>

                <li>
                    <a href="{{route('products')}}"><i class="fa fa-gavel "></i> 
                        <span>Artículos</span>
                    </a>
                </li>

                <li>
                    <a href="javascript:;"><i class="fa fa-forward"></i> 
                        <span>Videos</span>
                    </a>
                </li>

                <li>
                    <a href="javascript:;"><i class="fa fa-weixin "></i> 
                        <span>Eventos</span>
                    </a>
                </li>

                <li>
                    <a href="javascript:;"><i class="fa fa-bolt"></i> 
                        <span>Nosotros</span>
                    </a>
                </li>

                <li>
                    <a href="javascript:;"><i class="fa fa-comment"></i> 
                        <span>Contacto</span>
                    </a>
                </li>

              </ul>
            </section>
          </aside>

          
          <div class="content-wrapper">
            <section class="content" id="app">
                <div class="container-fluid">
                    @yield('content')
                </div>
            </section>
          </div>

        </div>

        <script src="{{ asset('js/app.js') }}"></script>
        <script src="{{ asset('js/jquery-ui.min.js') }}"></script>
        <script>
          $.widget.bridge('uibutton', $.ui.button);
        </script>
        <script src="{{ asset('js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('js/fastclick.js') }}"></script>
        <script src="{{ asset('js/jquery.slimscroll.min.js') }}"></script>
        <script src="{{ asset('js/bootstrap3-wysihtml5.all.min.js') }}"></script>
        <script src="{{ asset('js/adminlte.min.js') }}"></script>
        <script src="{{ asset('js/jquery.carouFredSel-6.1.0-packed.js') }}"></script>
        @yield('scripts')
    </body>
</html>
