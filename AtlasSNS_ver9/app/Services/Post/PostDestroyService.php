<?php

namespace App\Services\Post;

use App\Repositories\PostRepository;
use App\Services\Post\PostDestroyService;
use App\Models\Post;

class PostDestroyService
{
    public function __construct(private PostDestroyService $repository) {}

    public function handle(Post $post)
    {
        return $this->repository->delete($post);
    }
}
