@extends('layouts.main')

@section('content')
<div class="container">
	<div>
		<div>
			<form class="login" action="/register" method="POST">
                @csrf
				<h1 style="font-size: 34px">Halaman Register</h1>
				<div>
					<input type="text" name="name" class="login-input" placeholder="Name">
				</div>
				<div>
					<input type="text" name="email" class="login-input" placeholder="Email">
				</div>
				<div>
					<input type="password" name="password" class="login-input" placeholder="Password">
				</div>
				<button type="submit" class="button-submit">
					<span>Register</span>
					<i></i>
				</button>				
			</form>
			<a href="/" style="margin-left: 30em">have an account yet</a>

</div>
@endsection