<?php

namespace App\Http\Controllers;

use App\Http\Resources\PostResource;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function create()
    {
        return view('post.create');
    }

    public function testResource()
    {
        return PostResource::collection(Post::paginate(15));
    }

    public function store()
    {
        $data = request()->validate([
            'title' => 'string',
            'content' => 'string',
            'likes' => 'integer'
        ]);

        Post::create($data);

        return redirect()->route('posts.index');
    }

    public function show($id)
    {
        $post = Post::findOrFail($id);
        return view('post.show', compact('post'));
    }

    public function getPostByTitle()
    {
        $post = Post::where('title', 'first')->first();
        dd($post);
    }

//    public function create()
//    {
//        $items = [
//            [
//                'title' => 'another post title',
//                'content' => 'another post content'
//            ],
//            [
//                'title' => 'new post title',
//                'content' => 'new post content'
//            ]
//        ];
//
//        foreach ($items as $item) {
//            Post::create($item);
//        }
//
//        dd('created');
//    }

    public function update($id)
    {
        $post = Post::find($id);

        $data = request()->validate([
            'title' => 'string',
            'content' => 'string',
            'likes' => 'integer'
        ]);

        $post->update($data);

        return redirect()->route('posts.show', $post->id);
    }

    public function edit($id)
    {
        $post = Post::findOrFail($id);

        return view('post.edit', compact('post'));
    }

    public function destroy(Post $post)
    {
        $post->delete();
        return redirect()->route('posts.index');
    }

    public function delete()
    {
//        $post = Post::withTrashed()->find(1);
        $post = Post::find(1);
        $post->exists() ? $post->delete() : dd('not found');

        dd('deleted');
    }

    public function firstOrCreate()
    {
        $post = Post::firstOrCreate(
            [
                'id' => 2
            ],
            [
                'title' => 'skipped'
            ]
        );

        $post1 = Post::firstOrCreate(
            [
                'id' => 3
            ],
            [
                'title' => 'created',
                'content' => 'kdshjsdhb'
            ]
        );
    }

    public function updateOrCreate()
    {
        $post = Post::updateOrCreate(
            [
                'id' => 2
            ],
            [
                'title' => 'updated'
            ]
        );

        $post1 = Post::updateOrCreate(
            [
                'id' => 5
            ],
            [
                'title' => 'created',
                'content' => 'aaaaa'
            ]
        );
    }
}
