@extends('layouts.app')

@section('content')
    

    @forelse($posts as $post)
        <a href="{{ route('posts.show',['post'=> $post->id]) }}"><h3>{{ $post->title }}</h3></a>
        <h5>{{ $post->content }}</h5>
        <a href="{{ route('posts.edit',['post'=> $post->id]) }}" class="btn btn-primary">Edit Post</a>
        <form method="POST" action="{{ route('posts.destroy',['post'=>$post->id]) }}" class="fm-inline">
            @csrf
            @method('DELETE')
            <input type="submit" value="DELETE" class="btn btn-danger">
        </form>
        
    @empty 
        <h5>No posts yet!</h5>
    @endforelse
    
@endsection
{{-- <h5>test</h5> --}}