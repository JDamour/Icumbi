@extends('layouts.app')

@section('content')



<!DOCTYPE html>
<html lang="en">
    <head> 
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">

        <!-- Website CSS style -->
        <link rel="stylesheet" type="text/css" href="assets/css/main.css">

        <!-- Website Font style -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
        
        <!-- Google Fonts -->
       
        <title>Admin</title>
    </head>
    <body>
        <div class="container-fluid" style=" width:100vw; background-image: url(https://www.wspa.co.uk/wp-content/uploads/2015/04/wspa-home-background-2-1484x989.jpg); background-position: cover; background-size: cover">
            <div class="row main">
                <div class="panel-heading">
                  
                </div> 
                <div class="main-login main-center">
                    <form class="form-horizontal" method="post" action="#">
                        
                        <div class="form-group">
                            <label for="name" class="cols-sm-2 control-label">First Name</label>
                            <div class="cols-sm-10">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
                                    <input type="text" class="form-control" name="name" id="name"  placeholder="Your Name"/>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="name" class="cols-sm-2 control-label">Last Name</label>
                            <div class="cols-sm-10">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
                                    <input type="text" class="form-control" name="name" id="name"  placeholder="Your Name"/>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="name" class="cols-sm-2 control-label">Role</label>
                            <div class="cols-sm-10">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
                                    <select id="role" class="form-control{{ $errors->has('role') ? ' is-invalid' : '' }}" name="roleId" value="{{ old('role') }}"
                                                                     required autofocus>
                                                                    <option value="">Role</option>
                                                                    <option value="3">User</option>
                                                                    <option value="2">House Owner</option>
                                                                    </select>

                                </div>
                            </div>
                        </div>


                        <div class="form-group">
                            <label for="email" class="cols-sm-2 control-label">Email</label>
                            <div class="cols-sm-10">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-envelope fa" aria-hidden="true"></i></span>
                                    <input type="text" class="form-control" name="email" id="email"  placeholder="Your Email"/>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="mobile" class="cols-sm-2 control-label required">Mobile</label>
                            <div class="cols-sm-10">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-mobile aria-hidden="true"></i></span>
                                    <input type="text" class="form-control" name="mobile" id="mobile"  placeholder="Your Mobile"/>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="mobile" class="cols-sm-2 control-label required">Date</label>
                            <div class="cols-sm-10">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-calendar aria-hidden="true"></i></span>
                                    <input type="date" class="form-control" name="date" id="date" placeholder="Your birth Date"/>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="name" class="cols-sm-2 control-label">Password</label>
                            <div class="cols-sm-10">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-lock fa" aria-hidden="true"></i></span>
                                    <input type="text" class="form-control" name="name" id="name"  placeholder="Type your password"/>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="name" class="cols-sm-2 control-label">Confirm Password</label>
                            <div class="cols-sm-10">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-lock fa" aria-hidden="true"></i></span>
                                    <input type="text" class="form-control" name="name" id="name"  placeholder="Confirm your password"/>
                                </div>
                            </div>
                        </div>



                
                        <div class="form-group ">
                            <button type="button" class="btn btn-lg btn-primary btn-block btn-signin">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <script type="text/javascript" src="assets/js/bootstrap.js"></script>
    </body>
</html>
@endsection

