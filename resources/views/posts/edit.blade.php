@extends('layouts.app')

@section('title', 'Create a Post')

@section('content')
    <h2>Update Post</h2>
    <form method="POST" action="{{ route('posts.update',['post'=> $post->id])}}"">
        @method('PUT')
        @csrf
        <p>
            <label>Title</label>
            <input type="text" name="title" value="{{ old('title',$post->title) }}">
        </p>
        <p>
            <label>Content</label>
            <input type="text" name="content" value="{{ old('content', $post->content) }}">
        </p>
        <button type="submit">Update Post</button>
    </form>
    @if($errors->any())
            <ul>
                @foreach($errors->all() as $error)
                    <li style="color:red">{{ $error }}</li>
                @endforeach
            </ul>
    @endif
@endsection

<h1>Test</h1>