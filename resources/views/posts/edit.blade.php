@extends('layouts.app')

@section('title', 'Create a Post')

@section('content')
    <h2>Update Post</h2>
    <form method="POST" action="{{ route('posts.update',['post'=> $post->id])}}"">
        @method('PUT')
        @csrf
        @include('posts._form')
        <button type="submit">Update Post</button>
        </form>
        
@endsection

<h1>Test</h1>