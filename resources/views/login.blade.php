@extends('layouts.auth')

@section('content')
<div class="login-image">
    <img src="https://img.freepik.com/free-photo/3d-render-secure-login-password-illustration_107791-16640.jpg?semt=ais_hybrid&w=740" alt="">
</div>
<div class="login-form">
    <div class="login-container">
        <h1>LOGIN</h1>
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <input type="text" name="username" placeholder="Username" required>
            <input type="password" name="password" placeholder="Password" required>
            <button type="submit">Login</button>
        </form>
    </div>
</div>
@endsection
