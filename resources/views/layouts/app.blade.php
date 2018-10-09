<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Icumbi</title>
    <meta name="description" content="Free Bootstrap Theme by uicookies.com">
    <meta name="keywords" content="free website templates, free bootstrap themes, free template, free bootstrap, free website template">
    <link href="https://fonts.googleapis.com/css?family=Old+Standard+TT" rel="stylesheet">
    
    <link rel="stylesheet" href="{{asset('css/styles-merged.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/custom.css')}}">

    

    <!--[if lt IE 9]>
      <script src="js/vendor/html5shiv.min.js"></script>
      <script src="js/vendor/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>

  <!-- START: header -->
  
  <div class="probootstrap-loader"></div>

  <header role="banner" class="probootstrap-header">
    <div class="container">
        <a href="/" class="probootstrap-logo">ICUMBI</a>
        
        <a href="#" class="probootstrap-burger-menu visible-xs" ><i>Menu</i></a>
        <div class="mobile-menu-overlay"></div>

        <nav role="navigation" class="probootstrap-nav hidden-xs .navbar-fixed-top">
          <ul class="probootstrap-main-nav">
            <li class="active"><a href="/">Home</a></li>
            <li><a href="/house">House</a></li>
            <li><a href="/agents">Agents</a></li>
            <li><a href="/about">About</a></li>
            <li><a href="/contact">Contact</a></li>
             <li><a href="/login">Login</a></li>
            <li><a href="/register">SignUp</a></li>
            <form action="/search" method="POST" role="search">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <input type="text"  placeholder="Enter address, price, Neighborhoods" name="search">
                <button type="submit"><i class="icon-magnifying-glass t2"></i></button>
            </form>
          </ul>
          <div class="extra-text visible-xs"> 
            <a href="#" class="probootstrap-burger-menu"><i>Menu</i></a>
            <h5>Address</h5>
            <p>Rwanda, Kigali, Kimironko</p>
            <h5>Connect</h5>
            <ul class="social-buttons">
              <li><a href="#"><i class="icon-twitter"></i></a></li>
              <li><a href="#"><i class="icon-facebook2"></i></a></li>
              <li><a href="#"><i class="icon-instagram2"></i></a></li>
            </ul>
          </div>
        </nav>
    </div>
  </header>

                    <ul class="navbar-nav ml-auto">

                </div>
            </div>
        </nav>


        <footer class="main-footer" style="height:40px; color: white; background: #6C7D80; z-index:1;">
          <!-- To the right -->
          <div class="pull-right hidden-xs">
            <!-- Anything you want -->
          </div>
          <!-- Default to the left -->
          <strong>Copyright &copy; 2018 <a href="#" style="color: white;">ITEME</a>.</strong> All rights reserved.
        </footer>


        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>

<script src="{{asset('js/scripts.min.js')}}"></script>
<script src="{{asset('js/main.min.js')}}"></script>
<script src="{{asset('js/custom.js')}}"></script>
</html>



