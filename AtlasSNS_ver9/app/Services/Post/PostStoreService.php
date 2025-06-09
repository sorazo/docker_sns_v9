<?php

namespace App\Services\Post;

use App\Repositories\PostRepository;
use App\Services\Post\PostStoreService;
use App\Models\Post;

class PostStoreService
{
    public function __construct(private PostStoreService $repository) {}

    public function handle(Post $post, array $data)
    {
        return $this->repository->update($post, $data);
    }
}
