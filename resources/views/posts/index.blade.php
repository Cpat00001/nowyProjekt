@extends('layouts.app')

@section('content')
    

    @forelse($posts as $post)
        <a href="{{ route('posts.show',['post'=> $post->id]) }}"><h3>{{ $post->title }}</h3></a>
        <h5>{{ $post->content }}</h5>
        <a href="{{ route('posts.edit',['post'=> $post->id]) }}"><h3>Edit Post</h3></a>
        <form method="POST" action="{{ route('posts.destroy',['post'=>$post->id]) }}">
            @csrf
            @method('DELETE')
            <input type="submit" value="DELETE">
        </form>
        
    @empty 
        <h5>No posts yet!</h5>
    @endforelse
    
@endsection
{{-- <h5>test</h5> --}}