<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Icumbi</title>
    <meta name="description" content="Free Bootstrap Theme by uicookies.com">
    <meta name="keywords" content="free website templates, free bootstrap themes, free template, free bootstrap, free website template">
    <link href="https://fonts.googleapis.com/css?family=Old+Standard+TT" rel="stylesheet">
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="{{asset('css/styles-merged.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/custom.css')}}">

  </head>
  <body>

  <!-- START: header -->
  <div class="probootstrap-loader"></div>

  <header role="banner" class="probootstrap-header">
    <div class="container">
        <a href="/" class="probootstrap-logo">ICUMBI</a>
        <a href="#" class="probootstrap-burger-menu visible-xs" ><i>Menu</i></a>
        <nav role="navigation" class="probootstrap-nav hidden-xs .navbar-fixed-top">
          <ul class="probootstrap-main-nav">
             <div class="search">
             <div class="searchh">
              <form action="/searchajax">
             <input type="hidden" name="_token" value="{{ csrf_token() }}">
             <input type="text" autocomplete="off"
                    placeholder="Enter Sector, District,Number of rooms price" name="search" id="search">
             <button type="submit" class="btnn btn-primary btn-sm">Search</button>
             </form> 
             </div>
                <li><a href="/searchajax">search by parameters</a></li>
                <li><a href="/">Home</a></li>
                
              <!-- <form action="/search" method="POST" role="search" class="searchform">
             <input type="hidden" name="_token" value="{{ csrf_token() }}">
             <input type="text"  placeholder="Enter Sector, District,Number of rooms price" name="search">
              <button type="submit" class="btnn btn-primary btn-sm">Search</button>
             </form> 
             </div>
                <li class="active"><a href="/">Home</a></li> 271637-->
                <li><a href="/house">House</a></li>
                <!--   <li><a href="/agents">Agents</a></li> -->
                <!-- <li><a href="/about">About</a></li> -->
                <li><a href="/contact">Contact</a></li>
                <!-- <li><a href="/login">Login</a></li>
                <li><a href="/register">SignUp</a></li> -->
                @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                        @else

                           @if(Auth::user()->isAdmin())
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('/admin/houses') }}">{{ __('Dashboard') }}</a>
                            </li>
                            @elseif(Auth::user()->isOwner())
                                                                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('/owner/houses') }}">{{ __('Dashboard') }}</a>
                            </li>
                            @else
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('dashboard') }}">{{ __('Dashboard') }}</a>
                            </li>
                            @endif
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <button><a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a></button>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
          </ul>
        </nav>
      </div>
    </header>

        <footer class="main-footer" style="height:40px; color: white; background: #6C7D80; z-index:1;">
          <strong>Copyright &copy; {{date('Y')}} <a href="#" style="color: white;">ITEME</a>.</strong> All rights reserved.
        </footer>


        <!-- <main class="py-4">
            @yield('content')
        </main> -->
    </div>
</body>
    

<script src="{{asset('js/scripts.min.js')}}"></script>
<script src="{{asset('js/main.min.js')}}"></script>
<script src="{{asset('js/custom.js')}}"></script>
</html>