<x-logout-layout>

  <!-- 適切なURLを入力してください -->
    {!! Form::open(['url' => 'login']) !!}

    <x-atoms.h2>AtlasSNSへようこそ</x-atoms.h2>

    <x-atoms.label for="email">メールアドレス</x-atoms.label>
    <x-atoms.input type="email" name="email" class="mb-3" />

    <x-atoms.label for="password">パスワード</x-atoms.label>
    <x-atoms.input type="password" name="password" class="mb-3" />

    <div class="fw-normal text-end">
      <x-atoms.danger-button class="mb-4">ログイン</x-atoms.danger-button>
    </div>

    <x-atoms.p class="text-center">
      <x-atoms.a href="register" class="text-decoration-underline">新規ユーザーの方はこちら</x-atoms.a>
    </x-atoms.p>

    {!! Form::close() !!}



</x-logout-layout>
