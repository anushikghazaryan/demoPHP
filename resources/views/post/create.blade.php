@extends('layouts.main')
@section('content')

    <h1>create post</h1>

    <form action="{{ route('posts.store') }}" method='post'>
        @csrf
        <label for="title">title</label><br>
        <textarea type="text" id="title" name="title" placeholder='title'></textarea><br>

        <label for="content">content</label><br>
        <textarea type="text" id="content" name="content" placeholder="content"></textarea><br><br>

        <label for="likes">likes</label><br>
        <input type="number" id="likes" name="likes"><br><br>

        <input type="submit" value="Create">
    </form>

@endsection
