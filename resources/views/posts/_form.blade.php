<div class="form-group">
    <p>
        <label>Title</label>
        <input type="text" name="title" class="form-control" value="{{ old('title',$post->title ?? null) }}">
    </p>
</div>
<div class="form-group">
    <p>
        <label>Content</label>
        <input type="text" name="content" class="form-control" value="{{ old('content', $post->content ?? null) }}">
    </p>
</div>
@if($errors->any())
    <ul>
        @foreach($errors->all() as $error)
            <li style="color:red">{{ $error }}</li>
        @endforeach
    </ul>
@endif