@extends('layouts.app')

@section('title', 'News')

@section('content')
<h3>News:</h3>

<ul>
    @foreach($news as $n)
    <li><a href="{{ route('show.news', ['n' => $n] ) }}">{{ $n->title }}</a></li>    
    <p>Posted by: {{ $n->user->name }}</a></p>
    @endforeach
</ul>

<div>
    {{ $news->links() }}
</div>

@endsection