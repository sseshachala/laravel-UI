@extends('master')

@section('content')

<div class="container">
	<div class="row text-center pad-top ">
    	<div class="col-md-12">
                <h2>XervDock Login</h2>
        </div>
    </div>
    <div class="row  pad-top">
    	<div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-10 col-xs-offset-1">
        	<div class="panel panel-default">
            	<div class="panel-heading">
                 	<strong>   Login  </strong>  
                </div>
		       <div class="panel-body">
					{{Form::open(array('url'=>'/login','method'=>'post'))}}
					<h1>Login Form</h1>
					<div class="form-group input-group">
                    	<span class="input-group-addon">@</span>
						<input value="{{Input::old('identity')}}" class="form-group" type="text" placeholder="Username/Email" required="" id="username" name="identity"/>
					</div>
					<div class="form-group input-group">
                    	<span class="input-group-addon"><i class="fa fa-lock"  ></i></span>
						<input type="password" class="form-group" placeholder="Password" required="" id="password" name="password"/>
					</div>
					<div>
						<input type="submit" value="Log in" />
						<a href="/forgotpassword">Lost your password?</a>
						<a href="/register">Register</a>
					
					</div>
					
					{{Form::close()}}
					<a href="/social/facebook" class="zocial facebook">Sign in with Facebook</a>
					<a href="/social/google" class="zocial googleplus">Sign in with Google+</a>
					<a href="/social/twitter" class="zocial twitter">Sign in with Twitter</a>
				 </div>
                           
            </div>
         </div>
     </div>
</div>
@stop