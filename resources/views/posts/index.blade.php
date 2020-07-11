@extends('layouts.app')

@section('content')
    

    @forelse($posts as $post)
        <a href="{{ route('posts.show',['post'=> $post->id]) }}"><h3>{{ $post->title }}</h3></a>
        <h5>{{ $post->content }}</h5>
    @empty 
        <h5>No posts yet!</h5>
    @endforelse
    
@endsection
{{-- <h5>test</h5> --}}