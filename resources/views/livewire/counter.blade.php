<div>
    <div style="text-align: center">
        <button wire:click="increment">+</button>
        <h1>{{ $count }}</h1>
        <div class="mb-8"></div>
        こんにちは、{{ $name }}さん<BR>
            {{-- <input type="text" wire:model.debounce.200ms="name"><br> --}}
            {{-- <input type="text" wire:model.lazy="name"><br> --}}
            {{-- <input type="text" wire:model.defer="name"><br> --}}
            <input type="text" wire:model="name"><br>
            <button wire:mouseover="mouseOver">マウスを合わせてね！</button>
</div>
