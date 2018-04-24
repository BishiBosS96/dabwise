<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>
        <link href="{{ asset('css/version2.css') }}" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}">
        @yield('styles')
    </head>
    <body>
        <div class="container-fluid">
            <div class="col-lg-12 text-center">
                <img src="{{ asset('images/logo.jpg') }}" style="width: 250px; height: auto; margin-bottom: 20px;">
            </div>
        </div>
        <nav class="navbar navbar-default">
            <div class="container-fluid">

                <div class="col-xs-12 col-lg-2">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    <a class="navbar-brand" href="#">DABWise</a>
                    </div>
                </div>
                

                <div class="col-xs-2 col-lg-10">
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <div class="col-lg-8 col-lg-offset-2">
                            <ul class="nav navbar-nav">
                                <li><a href="#">Productos</a></li>
                                <li><a href="#">Blog</a></li>
                                <li><a href="#">Videos</a></li>
                                <li><a href="#">Eventos</a></li>
                                <li><a href="#">Nosotros</a></li>
                                <li><a href="#">Contacto</a></li>
                            </ul>
                        </div>
                        
                        
                            <ul class="nav navbar-nav navbar-right">
                                <li>
                                    <a href="javascript:;" >
                                        <span class="fa fa-shopping-cart"></span>
                                    </a>
                                </li>
                            </ul>
                        
                    </div>
                </div>

            </div>
        </nav>
            



        @yield('content')
        <script src="{{ asset('js/app.js') }}"></script>
        <script src="{{ asset('js/jquery.carouFredSel-6.1.0-packed.js') }}"></script>
        @yield('scripts')
    </body>
</html>
