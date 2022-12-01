@extends('layouts.main')

@section('content')
<div class="container">
	<div>
		<div>
			<form class="login" action="{{ route('login.auth') }}" method="POST">
                @csrf
				<h1>Halaman Login</h1>
				<div class="login__field">
					<i></i>
					<input type="text" name="email" placeholder="User name / Email">
                    @error('email')
                        {{$message}}
                    @enderror
				</div>
				<div>
					<i></i>
					<input type="password" name="password" class="login__input" placeholder="Password">
                    @error('password')
                        {{$message}}
                    @enderror
				</div>
				<button type="submit">
					<span class="button__text">Log In Now</span>
					<i></i>
				</button>
				<br>
                <a href="register">don't have an account yet</a>
				<br>
				@if(session('error'))
					{{ session('error') }}
				@endif
				@if(session('isLogin'))
					{{ session('isLogin') }}
				@endif
			</form>
		</div>
	</div>
</div>
@extends('layouts.main')

@section('content')