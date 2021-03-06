<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Artbazaara Adminpanel</title>

    <!-- Bootstrap core CSS -->
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="{{asset('css/dashboard.css')}}" rel="stylesheet">
  </head>

  <body>
    @include('adminpanel.layouts.nav')
    <div class="container-fluid">
      <div class="row">

      @include('adminpanel.layouts.sidebar')

        <main role="main" class="col-10 ml-sm-auto px-4">
            @yield('content')
        </main>
      </div>
    </div>

    @include('adminpanel.layouts.footer')
    @yield('scripts')
  </body>
</html>
