<div>
    <form wire:submit.prevent="register">
        <label for="name">名前</label>
        <input type="text" wire:model="name"><br>
        @error('name')
            <div class="text-red-500">{{ $message }}</div>
        @enderror

        <label for="email">メールアドレス</label>
        <input type="email" wire:model.lazy="email"><br>
        @error('email')
            <div class="text-red-500">{{ $message }}</div>
        @enderror

        <label for="password">パスワード</label>
        <input type="password" wire:model="password"><br>
        @error('password')
            <div class="text-red-500">{{ $message }}</div>
        @enderror

        <button>登録する</button>
    </form>
</div>
