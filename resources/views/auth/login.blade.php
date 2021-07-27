@extends('layouts.app')

@section('title', 'Register')

@section('content')
<form method="POST" action="/login">
    @csrf
    <div class="mb-3">
        <label for="email" class="form-label">Email address</label>
        <input type="email" name="email" class="form-control" id="email">
    </div>
    <div class="mb-3">
        <label for="password" class="form-label">Password</label>
        <input type="password" name="password" class="form-control" id="password">
    </div>
    
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection