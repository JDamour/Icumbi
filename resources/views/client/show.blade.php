@extends('layouts.app')

<div class="container-fluid">
  <div class="card">
      <div class="wrapper row">
      <div class="preview col-md-6">
						
						<div class="preview-pic tab-content">
            @php 
              $i=1;
            @endphp
              @foreach($house->uploads as $upload)
						    <div class="tab-pane <?php echo ($i == 1) ? 'active' : '' ?>" id="pic-{{$i}}">
                  <img src="/images/HouseUploads/{{ $upload->source }}" />
                </div>
                @php 
                  $i++;
                @endphp
              @endforeach
						  
              </div>
						<ul class="preview-thumbnail nav nav-tabs">
            @php 
              $y=1;
            @endphp
              @foreach($house->uploads as $upload)
              <li class="<?php echo ($y === 1) ? 'active' : '' ?>"><a data-target="#pic-{{$y}}" data-toggle="tab"><img src="/images/HouseUploads/{{ $upload->source }}" /></a></li>
               @php
                $y++;
              @endphp
              @endforeach
              </ul>
						
					</div>
        <div class="details col-md-6">
          <!-- <h3 class="product-title">House Number is {{ $house->id }}</h3> -->
          
          <p class="product-description"></p>
          
          <h4 class="price">Price: <span>{{ $house->housePrice}} {{ $house->paymentfrequency['name']}}</span></h4>
          <!-- <p class="product-description">House Owner: {{ $house->water }} {{ $house->user['firstName'] }}</p>
          
          <p class="product-description">House Owner: {{ $house->user['lastName'] }} {{ $house->user['firstName'] }}</p>
          <p class="product-description">House Owner's Phone Number: {{ $house->user['phoneNumber'] }} </p>
          <p class="product-description">House Owner's Phone Email: {{ $house->user['email'] }} </p>
           -->
           <h5 class="price">Number of Rooms: <span>{{ $house->numberOfRooms}}</span></h5>
           <h5 class="price">Location(Sector/District): <span>{{ $house->sector['name'] }}/{{ $house->district['name'] }}</span></h5>
          
          <label class="col-sm-2 control-label" style="text-align:left; color: black; word-spacing: 4px;">Extra</label>
            <div class="col-md-6 col-md-8 col-lg-6" id="tablee">
                <table style="color: black; word-spacing: 2px;" >
                  <tr class="tablerows">
                    @if ($house->water == 1)
                    <td>  Water inside</td><td><span class="label label-success">True</span></td>
                    @else
                      <td>  Water inside</td><td><span class="label label-danger">False</span></td>
                    @endif
                  </tr>
                  <tr class="tablerows">
                    @if ($house->toilet == 1)
                      <td>Toiled inside</td><td><span class="label label-success">True</span></td>
                    @else
                      <td>Toiled inside</td><td><span class="label label-danger">False</span></td>
                    @endif
                  </tr>
                  <tr class="tablerows">
                      @if ($house->bathroom == 1)
                        <td>Bathroom inside</td><td><span class="label label-success">True</span></td>
                      @else
                        <td>Bathroom inside</td><td><span class="label label-danger">False</span></td>
                      @endif
                  </tr>
                  <tr class="tablerows">
                    @if ($house->fenced == 1)
                      <td>Fenced</td><td><span class="label label-success">True</span></td>
                    @else
                      <td>Fenced</td><td><span class="label label-danger">False</span></td>
                    @endif
                  </tr>
                </table>
            </div>
                    <form action="{{route('custom.service.store')}}" method="post">
                      <input type="hidden" name="_token" value="{{csrf_token()}}">
                      <input type="hidden" value="{{$house->id}}" name="house_id"/>
                      <input class="add-to-cart btn btn-default" type="submit" value="House Address" />

                    
                    
                    @guest 
                        @else
                           @if(Auth::user()->isAdmin())
                              <form >
                                  @csrf
                                  <!-- <input class="add-to-cart btn btn-default" type="button" value="Refund with this house" onclick="window.location.href='{{route('custom.service.refund',$house->id)}}'" /> -->
                              </form>
                           @elseif(Auth::user()->isOwner())
                              <form >
                                  @csrf
                                  <!-- <input class="add-to-cart btn btn-default" type="button" value="Refund with this house" onclick="window.location.href='{{route('custom.service.refund',$house->id)}}'" /> -->
                              </form>
                            @else
                            <form >
                                  @csrf
                                  <input class="add-to-cart btn btn-default" type="button" value="Refund with this house" onclick="window.location.href='{{route('custom.service.refund',$house->id)}}'" />
                              </form>
                            @endif
                            
                        @endguest
                        </form> 

                    </form> 
                    <br/>
                    <input style="width: 15em;" class="add-to-cart btn btn-default" type="button" value="Refund with this house" onclick="window.location.href='{{route('custom.service.refund',$house->id)}}'" />

        </div>

          
        </div>
      </div>
    </div>
  </div>
    
