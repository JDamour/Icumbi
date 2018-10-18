

@extends('layouts.master')

@section('content')


      <!-- Sidebar Menu -->
     <aside class="main-sidebar">
     <section class="sidebar">
      <ul class="sidebar-menu" data-widget="tree">

    <li class="active"><a href="#"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a></li>
    <li class="">
      <a href="{{route('user.services.index')}}"><i class="fa fa-heart"></i> <span>Booked Houses</span>
    </li>
    <li class="treeview">
      <a href="#"><i class="fa fa-envelope"></i> <span>Report</span>
        <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
      </a>
      <ul class="treeview-menu">
        <li><a href="{{action('ReportsController@create')}}"><i class="fa fa-circle-o"></i> report issue</a></li>
        <li><a href="{{action('ReportsController@index')}}"><i class="fa fa-circle-o"></i> View All</a></li>
      </ul>
    </li>
      </ul>
          </section>
          
          <!-- /.sidebar -->
        </aside>
            
<!--        message-->
     
@endsection