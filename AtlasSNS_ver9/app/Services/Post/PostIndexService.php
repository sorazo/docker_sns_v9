<?php

namespace App\Services\Post;

use App\Repositories\PostRepository;
use Auth;

class PostIndexService
{
  // ここで、DB以外の実行処理
    public function __construct(private PostRepository $repository) {}

    public function handle()
    {
      $authId = Auth::id();

      // 認証ユーザーのフォロー対象IDを取得
      $followIds = Auth::user()->following()->pluck('followed_id')->toArray();;

      // 自分自身を含める
      $userIds = array_merge([$authId], $followIds);

        return $this->repository->getFilterPosts($userIds);
    }
}
