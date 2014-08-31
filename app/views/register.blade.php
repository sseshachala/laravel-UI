@extends('master')

@section('content')
<div class="container">
	<div class="row text-center pad-top ">
    	<div class="col-md-12">
                <h2>XervDock Registration</h2>
        </div>
    </div>
    
     <div class="row  pad-top">
               
                <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-10 col-xs-offset-1">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                        <strong>   Register Yourself </strong>  
                            </div>
                            <div class="panel-body">
                                {{Form::open(array('class'=>'form-horizontal', 'url'=>'/register','method'=>'post' ))}}
<br/>
                                        <div class="form-group input-group">
                                            <span class="input-group-addon"><i class="fa fa-circle-o-notch"  ></i></span>
                                            <input type="text" class="form-control" placeholder="Your Name" />
                                        </div>
                                     <div class="form-group input-group">
                                            <span class="input-group-addon"><i class="fa fa-tag"  ></i></span>
                                            <input type="text" class="form-control" value="{{Input::old('email')}}" placeholder="Enter Email" required="" id="username" name="email"/>
                                        </div>
                                         <div class="form-group input-group">
                                            <span class="input-group-addon">@</span>
                                            <input type="text" class="form-control" value="{{Input::old('email')}}" placeholder="Your Email" required="" id="username" name="email"/>
                                        </div>
                                      <div class="form-group input-group">
                                            <span class="input-group-addon"><i class="fa fa-lock"  ></i></span>
                                            <input type="password"  class="form-control" placeholder="Enter Password" required="" id="password" name="password"/>
                                        </div>
                                     <div class="form-group input-group">
                                            <span class="input-group-addon"><i class="fa fa-lock"  ></i></span>
                                            <input type="password"  class="input-xlarge" placeholder="Confirm Password" required="" id="password" name="password_confirmation"/>
                                        </div>
                                    <div class="form-group">
	                                    <input class="btn btn-primary" type="submit" value="Register" />
	                                    <hr />
	                                    <a class="btn btn-warning" href="/forgotpassword">Forgot password?</a>
	                                    <hr />
	                                    Already Registered ?  <a class="btn btn-success" href="/login">Login</a>
                                    </div>
                                    {{Form::close()}}
                            </div>
                           
                        </div>
                    </div>
                
                
        </div>
        <!--
		{{Form::open(array('class'=>'form-horizontal', 'url'=>'/register','method'=>'post' ))}}
		<h1>Register</h1>
		<div class="form-group">
			<input type="text" class="input-xlarge" value="{{Input::old('email')}}" placeholder="Enter Email" required="" id="username" name="email"/>
		</div>
		<div class="form-group">
			<input type="text" class="input-xlarge" value="{{Input::old('username')}}" placeholder="Enter Username" required="" id="username" name="username"/>
		</div>
		<div class="form-group">
			<input type="password"  class="input-xlarge" placeholder="Enter Password" required="" id="password" name="password"/>
		</div>
		<div class="form-group">
			<input type="password"  class="input-xlarge" placeholder="Confirm Password" required="" id="password" name="password_confirmation"/>
		</div>
		<div class="form-group">
			<input class="btn btn-primary" type="submit" value="Register" />
			<a class="btn btn-warning" href="/forgotpassword">Forgot password?</a>
			<a class="btn btn-success" href="/login">Login</a>
		</div>
		{{Form::close()}}
		-->
</div>

@stop