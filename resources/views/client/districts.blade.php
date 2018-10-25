@extends('layouts.app')
@section('content')
  <section class="probootstrap-slider flexslider2 page-inner">
    <div class="overlay"></div>
    <div class="probootstrap-wrap-banner">
      <div class="container">
        <div class="row">
          <div class="col-md-8">

            <div class="page-title probootstrap-animate">
              <div class="probootstrap-breadcrumbs">
                <a href="/">Home</a><a href="/kigali"><span>Kigali</span></a>
              </div>
              <h1>
              @foreach($houses as $house)
              <?php 
                $dist="";
                if ($house->district_id==28) {
                  echo "Gasabo";
                }
                elseif ($house->district_id==29) {
                  echo "Kicukiro";
                }
                else {
                  echo "Nyarugenge";
                }
              ?>
              @endforeach
              </h1>
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
            <div class="probootstrap-card-text">
            <h2 class="probootstrap-card-heading"><a href="{{route('houseshow.show', $house->id)}}">Number of Bed rooms: {{ $house->numberOfRooms }}</a></h2>
            <!-- <h2 class="probootstrap-card-heading"><a href="{{route('houseshow.show', $house->id)}}">Number of Bed rooms: {{ $house->numberOfRooms }}</a></h2> -->
            <?php
                      $sector="";
                      $district="";
                      
                      if ($house->sector_id==406){
                        $sector="Gitega";
                      }
                      elseif ($house->sector_id==407){
                        $sector="Kinyinya";
                      }
                      elseif ($house->sector_id==408){
                        $sector="Kigali";
                      }
                      elseif ($house->sector_id==409){
                        $sector="Kimisagara";
                      }
                      elseif ($house->sector_id==410){
                        $sector="Mageragere";
                      }
                      elseif ($house->sector_id==411){
                        $sector="Muhima";
                      }
                      elseif ($house->sector_id==412){
                        $sector="Nyakabanda";
                      }
                      elseif ($house->sector_id==413){
                        $sector="Nyamirambo";
                      }
                      elseif ($house->sector_id==414){
                        $sector="Rwezamenyo";
                      }
                      elseif ($house->sector_id==415){
                        $sector="Nyarugenge";
                      }
                      elseif ($house->sector_id==416){
                        $sector="Nyaraugunga";
                      }
                      elseif ($house->sector_id>395 && $house->sector_id<407){
                        $sector="ERROR!!! This sector belongs to Kicukiro District";
                      }
                      else{
                        $sector="ERROR!!! This sector belongs to Gasabo District";
                      }
                  ?>
              <div class="probootstrap-listing-location">
              <a href="{{route('houseshow.show', $house->id)}}">  <i class="icon-location2"></i> <span>Location: {{ $sector }}  </span>
              </div>
              <div class="probootstrap-listing-category for-sale"><span>For Rent</span></div>
              <div class="probootstrap-listing-price"><strong>{{ $house->housePrice }}
              
              </strong></div>
            </div></a>
            <div class="probootstrap-card-extra">
            </div>
          </div>
        </div>
        @endforeach
      </div>
    </div>
  </section>
@endsection
