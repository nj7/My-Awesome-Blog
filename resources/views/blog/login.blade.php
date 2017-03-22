@extends('layout.header')
@extends('layout.footer')
@section('title')
@section('content')
	
	<div class="auth-form">

	    <form accept-charset="UTF-8" action="/session" method="post">
	          
		    <div class="auth-form-header p-0">
		      <h1>Login</h1>
		    </div>
		    </br>

		    <div class="auth-form-body mt-3">

		      <label for="login_field">
		        Username or email address
		      </label>
		      <input autocapitalize="off" autocorrect="off" autofocus="autofocus" class="form-control input-block" id="login_field" name="login" tabindex="1" type="text">
		      </br>
		      <label for="password">
		        Password
		      </label>
		     <input class="form-control input-block" id="password" name="password" tabindex="2" type="password">
		     </br>
		      <input class="btn btn-primary btn-block" data-disable-with="Signing in…" name="commit" tabindex="3" type="submit" value="Sign in">
		    </div>
	    </form>
	</div>

@endsection