
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    
    <title>Blog</title>

    <!-- Bootstrap core CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">


  <link rel="stylesheet" type="text/css" href="{{ asset('css/blog.css') }}">
  </head>

  <body>

   @include('layouts.nav')
     <div class="blog-header">
      <div class="container">
        <h1 class="blog-title">Blog</h1>
      
      </div>
    </div>
   <div class="container">
     <div class="row">
       
     
   @yield('content')
   
   @include('layouts.sidebar')
    </div>
</div>
@include('layouts.footer')


  </body>
</html>
