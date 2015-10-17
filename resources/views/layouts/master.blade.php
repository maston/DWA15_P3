<!doctype html>
<html>
<head>
    <!-- begin title -->
    <title>
        {{-- Yield the title if it exists, otherwise default to 'Developer's Best Friend' --}}
        @yield('title','Developer\'s Best Friend')
    </title>
    <!-- end title -->
    
    <meta charset="utf-8">
    <meta name="author" content="Sarah Maston">
    <meta name="description" content="CSCI E-15 - Dynamic Web Applications - Project Three - Developer's Best Friend">
    <!-- stylesheets: bootstrap, theme and site -->
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/lavish-bootstrap.css">
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
    
    <!--  begin content section  -->
    <section class="row">
        {{-- Main page content will be yielded here --}}
        @yield('content')
    </section>
    <!--  begin content section  -->

    <!--  begin footer section  -->
    <footer class="row">
        <a href="https://github.com/maston/DWA15_P3"> Code available on Github </a>
    </footer>
    <!--  end footer section  -->

    {{-- Yield any page specific JS files or anything else you might want at the end of the body --}}
    @yield('body')
    </div>
    <!-- end bootstrap container -->
</body>
</html>