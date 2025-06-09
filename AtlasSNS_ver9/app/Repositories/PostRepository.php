<?php

namespace App\Repositories;

use App\Models\Post;
use Illuminate\Support\Collection;

// DBに関わる全ての処理
class PostRepository
{
    public function getFilterPosts(array $userIds): Collection
    {
      return Post::whereIn('user_id', $userIds)
        ->latest()
        ->get();
    }

    public function create(array $data): Post
    {
        return Post::create($data);
    }

    public function update(Post $post, array $data): bool
    {
        return $post->update($data);
    }

    public function delete(Post $post): bool
    {
        return $post->delete();
    }
}
