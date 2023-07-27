@extends('layouts.main')
@section('content')

    <h1>edit post</h1>

    <form action="{{ route('posts.update', $post->id) }}" method='post'>
        @csrf
        @method('patch')
        <label for="title">title</label><br>
        <textarea type="text" id="title" name="title">{{$post->title}}</textarea><br>

        <label for="content">content</label><br>
        <textarea type="text" id="content" name="content">{{$post->content}}</textarea><br><br>

        <label for="likes">likes</label><br>
        <input type="number" id="likes" name="likes" value='{{$post->likes}}'><br><br>

        <input type="submit" value="Create">
    </form>

@endsection
