@extends('layouts.app')

@section('title', $n->title)

@section('content')
<h3>{{ $n->title }}</h3>
<blockquote>{{ $n->content }}</blockquote>
<p>Author: {{ $n->user->name }}  Authors email: {{ $n->user->email }}</p>

<div>
@foreach($n->teams as $team)
<span> 
    {{$team->name}}
</span> 
@endforeach
</div>
@endsection