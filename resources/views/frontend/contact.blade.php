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
      <li style="background-image: url(images/HouseUploads/house7.jpg);"></li>
      <li style="background-image: url(images/HouseUploads/house5.jpg);"></li>
      <li style="background-image: url(images/HouseUploads/house6.jpg);"></li>
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
            <li><i class="icon-location2"></i> <span>KG 192 St, Bibare, Kimironko, Gasabo, Rwanda</span></li>
            <li><i class="icon-mail"></i><span>iteme@tres.rw</span></li>
            <li><i class="icon-phone2"></i><span>+250 788409447</span></li>
          </ul>

          <h4>Feedback</h4>
          <p>In case you face an challenge while using this application, please fill free to contact us. Every bit counts</p>
         <!--  <p><a href="#">Learn More</a></p> -->
        </div>
      </div>
    </div>


    <div class="row-fluid">
            <div class="span8">
            
              <iframe width="100%" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3987.5076032960633!2d30.125495048391887!3d-1.95009341950088!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x19dca7b8e43d1f43%3A0xe82363189dd39dbd!2sTres+rwanda!5e0!3m2!1sen!2srw!4v1539869396371" allowfullscreen></iframe>
          </div>
          
            
        </div>
  </section>

 

