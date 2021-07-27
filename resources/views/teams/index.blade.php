@extends('layouts.app')

@section('title', 'Teams')

@section('content')
<h3>Teams:</h3>
@foreach($teams as $team)
<p><a href="{{ route('show.teams', ['team' => $team]) }}">{{ $team->name }}</a></p>
@endforeach
@endsection