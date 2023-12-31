<?php

namespace App\Http\Controllers\Post;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;

class ShowController extends BaseController
{
    public function __invoke($id)
    {
        $post = Post::findOrFail($id);
        return view('post.show', compact('post'));
    }

}
