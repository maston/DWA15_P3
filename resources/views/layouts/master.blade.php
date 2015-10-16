<!doctype html>
<html>
<head>
    <title>
        {{-- Yield the title if it exists, otherwise default to 'Developer's Best Friend' --}}
        @yield('title','Developer\'s Best Friend')
    </title>
    <meta charset="utf-8">
    <meta name="author" content="Sarah Maston">
    <meta name="description" content="CSCI E-15 - Dynamic Web Applications - Project Three - Developer's Best Friend">
    <!-- stylesheets: bootstrap, theme and site -->
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootswatch/3.3.5/united/bootstrap.min.css">
    <link rel="stylesheet" href="../css/site.css">

    {{-- Yield any page specific CSS files or anything else you might want in the <head> --}}
    @yield('head')
</head>

<body>

    <!-- begin bootstrap container -->
    <div class="container">
    <!--  begin header section  -->
    <header class="row">
      <h1 class="col-md-12">Developer's Best Friend</h1>
      {{-- Nav Bar Remembering State will be yielded here --}}
      @yield('navbar')
    </header>
    <!--  end header section  -->

    <section class="row">
        {{-- Main page content will be yielded here --}}
        @yield('content')
    </section>

    <footer class="row">
        &copy; {{ date('Y') }}
    </footer>

    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script> -->

    {{-- Yield any page specific JS files or anything else you might want at the end of the body --}}
    @yield('body')
    </div>
</body>
</html>