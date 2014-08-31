@extends('master')

@section('content')

{{Form::open(array(class="form-horizontal" 'url'=>'/register','method'=>'post' ))}}
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

@stop