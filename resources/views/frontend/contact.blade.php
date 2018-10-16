@extends('layouts.app')


  <section class="probootstrap-slider flexslider2 page-inner" style="z-index: 0;">

    <div class="overlay"></div>
    <div class="probootstrap-wrap-banner">
      <div class="container">
        <div class="row">
          <div class="col-md-8">

            <div class="page-title probootstrap-animate">
              <div class="probootstrap-breadcrumbs">
                <a href="/">Home</a>
              </div>
              <h1>Contact</h1>
            </div>

          </div>
        </div>
      </div>
    </div>
    <ul class="slides">
      <li style="background-image: url(http://rw.one.un.org/sites/default/files/styles/blog_large/public/media/IMG_9925.JPG?itok=ZfaE6GOn);"></li>
      <li style="background-image: url(https://kariburwanda.com/image2.php?img=components/com_mtree/img/listings/534_2DSCN4538.JPG);"></li>
      <li style="background-image: url(https://www.newtimes.co.rw/sites/default/files/styles/mystyle/public/main/articles/2017/11/22/15113858881.jpg?itok=C-AoH-xD);"></li>
    </ul>
  </section>
  <!-- END: slider  -->

  <section class="probootstrap-section" style="z-index: 0;">
    <div class="container">
      <div class="row">
        <div class="col-md-8">
                @include('partials.success')
                @include('partials.error')
        <form action="{{url('contactmail')}}" method="post" class="probootstrap-form mb60">
        <input type="hidden" name="_token" value="{{csrf_token()}}">
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label for="fname">First Name</label>
                  <input type="text" class="form-control" id="fname" name="fname">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="lname">Last Name</label>
                  <input type="text" class="form-control" id="lname" name="lname">
                </div>
              </div>
            </div>
            <div class="form-group">
              <label for="email">Email</label>
              <input type="email" class="form-control" id="email" name="email">
            </div>
            <div class="form-group">
              <label for="message">Message</label>
              <textarea cols="30" rows="10" class="form-control" id="message" name="message"></textarea>
            </div>
            <div class="form-group">
              <input type="submit" class="btn btn-primary" id="submit" name="submit" value="Send Message">
            </div>
          </form>
        </div>
        <div class="col-md-3 col-md-push-1" style="color: black;">
          <h4>Contact Details</h4>
          <ul class="with-icon colored" style="color: black;">
            <li><i class="icon-location2"></i> <span>198 West 21th Street, Suite 721 New York NY 10016</span></li>
            <li><i class="icon-mail"></i><span>info@domain.com</span></li>
            <li><i class="icon-phone2"></i><span>+123 456 7890</span></li>
          </ul>

          <h4>Feedback</h4>
          <p>In case you face an challenge while using this application, please fill free to contact us. Every bit counts</p>
         <!--  <p><a href="#">Learn More</a></p> -->
        </div>
      </div>
    </div>


    <div class="row-fluid">
            <div class="span8">
              <iframe width="100%" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?q=-1.951137,30.12514549999998&hl=en;z=14&amp;output=embed"></iframe>
          </div>
          
            
        </div>
  </section>

 

