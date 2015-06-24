@extends('master')

@section('content')
@if(count($errors))
<div class="alert alert-danger">
    Invalid email and/or password
</div>
@endif<form method="POST" action="/auth/login">
    {!! csrf_field() !!}

    <div class="form-group">
        <label>Email</label>
        <input class="form-control" type="text" name="email" value="{{ old('email') }}">
    </div>

    <div class="form-group">
        <label>Password</label>
        <input class="form-control" type="password" name="password">
    </div>

    <div class="form-group">
        <input type="checkbox" name="remember"> Remember Me
    </div>

    <div class="form-group">
        <button class="btn btn-primary btn-block" type="submit">Login</button>
        <a href="{{ url('auth/register', [], false) }}" class="btn btn-warning btn-block" type="submit">Sign Up</a>
    </div>

</form>
@stop
