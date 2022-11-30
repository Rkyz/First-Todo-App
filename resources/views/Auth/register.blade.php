@extends('layouts.main')

@section('content')
<div class="container">
	<div class="screen">
		<div class="screen__content">
			<form class="login" action="/register" method="POST">
                @csrf
				<div class="login__field">
					<i class="login__icon fas fa-user"></i>
					<input type="text" name="name" class="login__input" placeholder="Name">
				</div>
				<div class="login__field">
					<i class="login__icon fas fa-user"></i>
					<input type="text" name="email" class="login__input" placeholder="Email">
				</div>
				<div class="login__field">
					<i class="login__icon fas fa-lock"></i>
					<input type="password" name="password" class="login__input" placeholder="Password">
				</div>
				<button class="button login__submit" type="submit">
					<span class="button__text">Register</span>
					<i class="button__icon fas fa-chevron-right"></i>
				</button>				
			</form>
			<a href="/">have an account yet</a>

</div>
@endsection