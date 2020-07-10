@extends('child')

@section('content')
    @foreach($posts as $post)
        <h3>{{ $post->title }}</h3>
        <p>{{ $post->content }} created_at {{ $post->created_at }}</p>
    @endforeach
    
@endsection
{{-- <h5>test</h5> --}}