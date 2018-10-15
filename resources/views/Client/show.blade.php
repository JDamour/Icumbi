@extends('layouts.app')
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
          <h3 class="product-title">House Number is {{ $house->id }}</h3>
          <div class="rating">
            <div class="stars">
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star"></span>
              <span class="fa fa-star"></span>
            </div>
          </div>
          <p class="product-description"></p>
          <h4 class="price">Price: <span>{{ $house->housePrice}} {{ $house->paymentfrequency['name']}}</span></h4>
          <p class="product-description">House Owner: {{ $house->user['lastName'] }} {{ $house->user['firstName'] }}</p>
          <p class="product-description">House Owner's Phone Number: {{ $house->user['phoneNumber'] }} </p>
          <p class="product-description">House Owner's Phone Email: {{ $house->user['email'] }} </p>
          
          <p class="product-description">sector: {{ $house->sector['name'] }}/{{ $house->district['name'] }}</p>
          <p class="product-description">Street Code: {{ $house->streetCode}}</p>

          <!-- <p class="vote"><strong>91%</strong> liked this house! <strong>(87 votes)</strong></p> -->
          
          <div class="action">
              <form action="">
              <!-- <input type="submit" name="btn" value=""> -->
              <input class="add-to-cart btn btn-default" type="button" value="House Address" onclick="window.location.href='{{route('custom.service.create',$house->id)}}'" />
              <input class="add-to-cart btn btn-success" type="button" value="Refund" onclick="window.location.href='{{route('custom.service.prerefund',$house->id)}}'"/>
            </form> 
          </div>
        </div>
      </div>
    
