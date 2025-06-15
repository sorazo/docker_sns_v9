<x-logout-layout>
    <!-- 適切なURLを入力してください -->
{!! Form::open(['url' => 'register']) !!}

    <x-atoms.h2>新規ユーザー登録</x-atoms.h2>

    <x-atoms.label for="username">メールアドレス</x-atoms.label>
    <x-atoms.input type="username" name="username" class="mb-3" required />

    <x-atoms.label for="email">メールアドレス</x-atoms.label>
    <x-atoms.input type="email" name="email" class="mb-3" required />

    <x-atoms.label for="password">パスワード</x-atoms.label>
    <x-atoms.input type="password" name="password" class="mb-3" required />

    <x-atoms.label for="password_confirmation">パスワード確認</x-atoms.label>
    <x-atoms.input type="password" name="password_confirmation" class="mb-3" required />

    <div class="fw-normal text-end">
        <x-atoms.danger-button class="mb-4">登録</x-atoms.danger-button>
    </div>

    <x-atoms.p class="text-center">
        <x-atoms.a href="login" class="text-decoration-underline">ログイン画面へ戻る</x-atoms.a>
    </x-atoms.p>

{!! Form::close() !!}


</x-logout-layout>
