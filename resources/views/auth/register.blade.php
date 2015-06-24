@extends('master')

@section('content')
@if(count($errors))
<div class="alert alert-danger">
    Please enter in all information to register an account
</div>
@endif
<form method="POST" action="/auth/register">
    {!! csrf_field() !!}

    <div class="form-group">
        <label>Name</label>
        <input class="form-control" type="text" name="name" value="{{ old('name') }}">
    </div>

    <div class="form-group">
        <label>Email</label>
        <input class="form-control" type="email" name="email" value="{{ old('email') }}">
    </div>

    <div class="form-group">
        <label>Password</label>
        <input class="form-control" type="password" name="password">
    </div>

    <div class="form-group">
        <label>Confirm Password</label>
        <input class="form-control" type="password" name="password_confirmation">
    </div>

    <hr/>

    <div class="form-group">
        <button class="btn btn-primary btn-block" type="submit">Register</button>
        <a href="{{ url('auth/logout', [], false) }}" class="btn btn-default btn-block" type="submit">Cancel</a>
    </div>
</form>
@stop