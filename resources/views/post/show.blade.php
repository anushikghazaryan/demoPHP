@extends('layouts.main')
@section('content')

    <h1>Post</h1><br>

    @can('view', auth()->user())
        <p>Only Anushik can see this</p>
    @endcanany

    <br><br>

    <form action="{{ route('posts.destroy', $post)}}" method='post'>
        @csrf
        @method('delete')
        <div>{{$post->id}}.{{$post->title}} - {{$post->content}} - {{$post->likes}}</div>
        <input type="submit" value="delete">
    </form>

    <a href="{{ route('posts.index')}}">BACK</a><br><br>
    <a href="{{ route('posts.edit', $post->id)}}">EDIT</a>



@endsection
