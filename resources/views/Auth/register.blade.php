@extends('layouts.main')

@section('content')
<div class="container">
	<div>
		<div>
			<form class="login" action="/register" method="POST">
                @csrf
				<h1>Halaman Register</h1>
				<div>
					<input type="text" name="name" class="login__input" placeholder="Name">
				</div>
				<div>
					<input type="text" name="email" class="login__input" placeholder="Email">
				</div>
				<div>
					<input type="password" name="password" class="login__input" placeholder="Password">
				</div>
				<button type="submit">
					<span>Register</span>
					<i></i>
				</button>				
			</form>
			<a href="/">have an account yet</a>

</div>
@endsection