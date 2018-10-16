<!DOCTYPE html>
<html lang="en">
  <head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Icumbi</title>
    <meta name="description" content="Free Bootstrap Theme by uicookies.com">
    <meta name="keywords" content="free website templates, free bootstrap themes, free template, free bootstrap, free website template">
    <link href="https://fonts.googleapis.com/css?family=Old+Standard+TT" rel="stylesheet">
    
    <link rel="stylesheet" href="css/styles-merged.css">
    <link rel="stylesheet" href="css/style.min.css">
    <link rel="stylesheet" href="css/custom.css">
    <lonk rel="stylesheet" href="font-owesome/css/font-awesome.min.css">

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
        <a href="index.html" class="probootstrap-logo">ICUMBI</a>
        
        <a href="#" class="probootstrap-burger-menu visible-xs" ><i>Menu</i></a>
        <div class="mobile-menu-overlay"></div>

        <nav role="navigation" class="probootstrap-nav hidden-xs">
          <ul class="probootstrap-main-nav">
            <li class="active"><a href="/">Home</a></li>
            <li><a href="/house">Houses</a></li>
          <!--   <li><a href="agents.html">Agents</a></li>
            <li><a href="about.html">About</a></li> -->
            <li><a href="contact.html">Contact</a></li>
                        <!-- Authentication Links -->
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
  <section class="housedoc" style="background: #f1f1f1; position: relative;">
    <div class="container">
      <div class="housedoc-content" style="position:relative;padding:150px 30px 0;margin:auto;max-width:1000px;background: white;">
     <h1>House Documentation</h1>
     <div class="housedoc-subcontent">
        <div class="row">
          <div class="col-sm-12">
            <h2 style="text-transform: capitalize;"><span class="badge" style="font-size: 22px;background: dodgerblue;">1</span> create house</h2>
            <div class="housedoc-img" style="margin: auto;max-width: 700px;">
            <img src="/img/Screenshot (12).png" style="height: 450px;">
            <p style="padding: 20px 0px 50px;font-size: 16px;text-transform: capitalize;font-weight: 800;">on this page you will be able to create house by filling those input field as the requiered credentials of the house.</p>
            <img src="/img/Screenshot (15).png" style="height: 450px;">

          <p style="padding: 20px 0 50px;font-size: 16px;text-transform: capitalize;font-weight: 800;">you also choose the location of the house by alocating the on the google map</p>
          <img src="/img/Screenshot (14).png" style="height: 450px;">
          <p style="padding: 20px 0 0;font-size: 16px;text-transform: capitalize;font-weight: 800;">after choosing the location of the house and fill out those credentials, you have to submit the house on <img src="/img/Capture2.PNG" style="width: 90px;height:40px;"> button</p>
          </div>
          
        </div>
     </div>
     <div class="row">
      <h2 style="text-transform: capitalize;"><span class="badge" style="font-size: 22px;background: lightblue;">3</span> Upload house's image</h2>
          <div class="col-sm-12" style="text-align: center;">
            
            <img src="/img/Screenshot (16).png" style="height: 450px;">
          
        </div>
        <p style="padding: 20px 20px 0;font-size: 16px;text-transform: capitalize;font-weight: 800;">after submiting the house you will be linked to this page in other to add house's images.</p>
     </div>
     <div class="row">
          <div class="col-sm-12">
            <h2 style="text-transform: capitalize;"><span class="badge" style="font-size: 22px;background: green;">4</span> house view page</h2>
            <div class="housedoc-img" style="margin: auto;max-width: 700px;">
            <img src="/img/Screenshot (17).png" style="height: 450px;">

          </div>
          <p style="padding: 20px 20px 0;font-size: 16px;text-transform: capitalize;font-weight: 800;">after those above process then the added house will be display on this page to be managed.
          on <img src="/img/Capture3.PNG" style="width: 90px;height:40px;"> button will link you to page of showing and updating the house.
          and on <img src="/img/Capture4.PNG" style="width: 90px;height:40px;"> button you will be able to delete the house.</p>
        </div>
     </div>
     <div class="row">
          <div class="col-sm-12">
            <h2 style="text-transform: capitalize;"><span class="badge" style="font-size: 22px;background: blue;">4</span> house show and update page</h2>
            <div class="housedoc-img" style="margin: auto;max-width: 700px;">
            <img src="/img/Screenshot (19).png" style="height: 450px;">

          </div>
          <p style="padding: 20px 20px 0;font-size: 16px;text-transform: capitalize;font-weight: 800;">this page will show you the house credentials by id and be able to edit and update the house credentials.</p>
        </div>
     </div>
    </div>
  </div>
</div>
  </section>
 
  <!-- END: section -->

 



  <footer class="probootstrap-footer probootstrap-bg" style="background-image: url(img/slider_3.jpg)">
    <div class="container">
      <div class="row mb60">
        <div class="col-md-3">
          <div class="probootstrap-footer-widget">
            <h4 class="heading">About Icumbi.</h4>
            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p>
            <p><a href="#">Read more...</a></p>
          </div> 
        </div>
        <div class="col-md-3">
          <div class="probootstrap-footer-widget probootstrap-link-wrap">
            <h4 class="heading">Quick Links</h4>
            <ul class="stack-link">
              <li><a href="/house">House</a></li>
              <li><a href="/housedoc">House Documentation</a></li>
              <li><a href="#">Rent Properties</a></li>
              <li><a href="#">Sell Properties</a></li>
              <li><a href="#">Agents</a></li>
              <li><a href="#">Testimonial</a></li>
            </ul>
          </div>
        </div>
        <div class="col-md-3">
          <div class="probootstrap-footer-widget">
            <h4 class="heading">Popular Cities</h4>
            <ul class="stack-link">
              <li><a href="#">Nyarugenge <small>(320 properties)</small></a></li>
              <li><a href="#">Gasabo <small>(294 properties)</small></a></li>
              <li><a href="#">Kicukiro <small>(300 properties)</small></a></li>
              <li><a href="#">Rwamagana <small>(268 properties)</small></a></li>
              <li><a href="#">Huye <small>(342 properties)</small></a></li>
            </ul>
          </div> 
        </div>
        <div class="col-md-3">
          <div class="probootstrap-footer-widget probootstrap-link-wrap">
            <h4 class="heading">Subscribe</h4>
            <p>Far far away behind the word mountains far from.</p>
            <form action="#">
              <div class="form-field">
                <input type="text" class="form-control" placeholder="Enter your email">
                <button class="btn btn-subscribe">Send</button>
              </div>
            </form>
          </div>
        </div>
      </div>
      <div class="row copyright">
        <div class="col-md-6">
          <div class="probootstrap-footer-widget">
            <p>&copy; 2018 <a href="https://icumbiApp.com/">tres:Icumbi</a>. Designed by <a href="https://icumbiApp.com/">tres:Icumbi</a> <br> Demo Photos from <a href="https://pixabay.com/">Pixabay</a> &amp; <a href="https://unsplash.com/">Unsplash</a></p>
          </div>
        </div>
        <div class="col-md-6">
          <div class="probootstrap-footer-widget right">
            <ul class="probootstrap-footer-social">
              <li><a href="#"><i class="icon-twitter"></i></a></li>
              <li><a href="#"><i class="icon-facebook"></i></a></li>
              <li><a href="#"><i class="icon-instagram2"></i></a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </footer>

  <div class="gototop js-top">
    <a href="#" class="js-gotop"><i class="icon-chevron-thin-up"></i></a>
  </div>
  
  <script src="js/scripts.min.js"></script>
  <script src="js/main.min.js"></script>
  <script src="js/custom.js"></script>

  </body>
</html>
