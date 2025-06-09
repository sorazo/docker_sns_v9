<?php

namespace App\Http\Controllers\Post;

use App\Http\Controllers\Controller;
use App\Services\Post\PostIndexService;

class IndexController extends Controller
{
    // 本当に、画面遷移のみ
    public function __invoke(PostIndexService $service)
    {
        $posts = $service->handle();
        return view('posts.index', compact('posts'));
    }
}
