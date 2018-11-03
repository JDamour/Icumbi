
@extends('layouts.app')


<section class="probootstrap-slider flexslider2 page-inner">
  <div class="overlay"></div>
  <div class="probootstrap-wrap-banner">
    <div class="container">
      <div class="row">
        <div class="col-md-8">
          <div class="page-title probootstrap-animate">
            <div class="probootstrap-breadcrumbs">
              <a href="/">Home</a><span>house</span>
            </div>
            <h1>Houses</h1>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="probootstrap-section probootstrap-section-lighter">
  <div class="container">
    <div class="row">
      @foreach($houses as $house)
      <div class="col-md-4 col-sm-6">
        <div class="probootstrap-card probootstrap-listing">
          <div class="probootstrap-card-media">
            <a href="{{route('houseshow.show', $house->id)}}">

              @foreach($house->uploads as $upload)
              <img src="/images/HouseUploads/{{ $upload->source }}">
              @break;
              @endforeach

            </div></a>

           
    </section>

