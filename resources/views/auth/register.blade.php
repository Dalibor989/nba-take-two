@extends('layouts.app')

@section('title', 'Register')

@section('content')
<form method="POST" action="/register">
    @csrf
    <div class="mb-3">
        <label for="name" class="form-label">Name</label>
        <input type="name" name="name" class="form-control" id="name">
        @include('partials.error-message', [ 'field' => 'name' ])
    </div>
    <div class="mb-3">
        <label for="email" class="form-label">Email address</label>
        <input type="email" name="email" class="form-control" id="email">
        @include('partials.error-message', [ 'field' => 'email' ])
    </div>
    <div class="mb-3">
        <label for="password" class="form-label">Password</label>
        <input type="password" name="password" class="form-control" id="password">
        @include('partials.error-message', [ 'field' => 'password' ])
    </div>
    <div class="mb-3">
        <label for="password_confirmation" class="form-label">Confirm password</label>
        <input type="password" name="password_confirmation" class="form-control" id="password_confirmation">
    </div>
    
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection