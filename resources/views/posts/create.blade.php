@extends('layouts.app')

@section('title', 'Create a Post')

@section('content')
    <h2>Create Post</h2>
    <form method="POST" action="{{ route('posts.store')}}">
        @csrf
        @include('posts._form')
        <button type="submit">Create a post</button>
    </form>
   
@endsection

<h1>Test</h1>