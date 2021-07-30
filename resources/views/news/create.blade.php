@extends('layouts.app')

@section('title', 'Write news')

@section('content')
<form method="POST" action="/news" class="container-fluid">
  @csrf
  <div class="form-group">
    <label for="title">Title</label>
    <input type="text" name="title" class="form-control" id="title" placeholder="Enter title">
  </div>
  <div class="form-group">
    <label for="content">Content</label>
    <input type="text" name="content" class="form-control" id="content" placeholder="Enter content">
  </div>
  <div>
        <span>Choose your team:</span>    
        @foreach($teams as $team)
            <div class="form-check">
                <input type="checkbox" name="teams[]" class="form-check-input" id="team-{{$team->id}}" value="{{$team->id}}">
                <label class="form-check-label" for="team-{{$team->id}}">{{$team->name}}</label>
            </div>
        @endforeach
        @include('partials.error-message', ['field'=>'teams'])
    </div>

  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection