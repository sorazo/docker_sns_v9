<x-logout-layout>
  <div class="text-center">
    <div class="mb-4">
      <x-atoms.p style="font-size: 1.15rem;">
        <x-atoms.span>{{ session('username') }}</x-atoms.span>さん
      </x-atoms.p>
      <x-atoms.p>ようこそ！
        <x-atoms.span>AtlasSNSへ</x-atoms.span>
      </x-atoms.p>
    </div>
    <div class="mb-3">
      <x-atoms.p>ユーザー登録が完了しました。</x-atoms.p>
      <x-atoms.p>早速ログインをしてみましょう。</x-atoms.p>
    </div>

    <x-atoms.p class="btn btn btn-danger">
      <x-atoms.a href="login">ログイン画面へ</x-atoms.a>
    </x-atoms.p>
  </div>
</x-logout-layout>
