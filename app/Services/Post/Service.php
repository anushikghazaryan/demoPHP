<?php

namespace App\Services\Post;

use App\Models\Post;

class Service
{
    public function update($data, $id) {
        $post = Post::find($id);
        $post->update($data);
    }
}
