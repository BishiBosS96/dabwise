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
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    
        
        


        <div id="app" class="container-fluid">
          <div class="row row-offcanvas">
            
            <div class="sidebar-offcanvas sidebar">
              
              <div class="panel panel-default">
                <div class="panel-heading">Widget</div>
                <div class="panel-body">
                  <p><a href="#"><i class="glyphicon glyphicon-check"></i> Action item</a></p>
                  <p><a href="#"><i class="glyphicon glyphicon-unchecked"></i> Action item</a></p>
                  <p class=""><a href="#"><i class="glyphicon glyphicon-plus"></i> Action item</a></p>
                  <p class=""><a href="#"><i class="glyphicon glyphicon-minus"></i> Action item</a></p>
                  <p><a href="#"><i class="glyphicon glyphicon-plus"></i> Action item</a></p>
                  <p><a href="#"><i class="glyphicon glyphicon-list"></i> Action item</a></p>
                </div>
              </div><!--/.panel-->
              
              <div class="panel panel-default">
                <div class="panel-heading">Widget</div>
                <div class="panel-body">
                  <p><a href="#"><i class="glyphicon glyphicon-check"></i> Action item</a></p>
                  <p><a href="#"><i class="glyphicon glyphicon-unchecked"></i> Action item</a></p>
                  <p class=""><a href="#"><i class="glyphicon glyphicon-plus"></i> Action item</a></p>
                  <p class=""><a href="#"><i class="glyphicon glyphicon-minus"></i> Action item</a></p>
                  <p><a href="#"><i class="glyphicon glyphicon-plus"></i> Action item</a></p>
                  <p><a href="#"><i class="glyphicon glyphicon-list"></i> Action item</a></p>
                </div>
              </div><!--/.panel-->    
            </div><!-- /.cols-->
            
              <div class="content">
              <p class="pull-right">
                <a type="button" class="btn btn-collapse btn-sm" data-toggle="offcanvas"><i class="glyphicon glyphicon-chevron-down"></i> Sidebar</a>
              </p>
          
              
                
              </div>
            </div><!-- /.cols-->
         
        

        @yield('content')
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
