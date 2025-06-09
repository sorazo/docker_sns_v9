<?php

namespace App\Services\Post;

use App\Repositories\PostRepository;
use App\Services\Post\PostUpdateService;
use App\Models\Post;

class UpdatePostService
{
    public function __construct(private PostUpdateService $repository) {}

    public function handle(Post $post, array $data)
    {
        return $this->repository->update($post, $data);
    }
}
