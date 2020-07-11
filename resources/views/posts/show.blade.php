@extends('layouts.app')
@section('title','Show Single Post')

@section('content')    
    <h1>Single post:</h1>
    <h3>{{ $post->title }}</h3>
    <p>{{ $post->content }}</p>
    @if((new Carbon\Carbon())->diffInMinutes($post->created_at) < 5)
        <p>Brand new Post</p>
    @else 
        <p>Added: {{ $post->created_at ->diffForHumans() }}</p>
    @endif
@endsection('content')
