@extends('layouts.main')
@section('content')

    <h1>Posts</h1>

    <a href="{{ route('posts.create')}}">CREATE POST</a><br><br>

    @foreach($posts as $post)
        <a href="{{ route('posts.show', $post->id) }}"><div>{{$post->id}}.{{$post->title}} - {{$post->content}} - {{$post->likes}}</div></a>
        <br>
    @endforeach

    {{ $posts->links() }}
@endsection
