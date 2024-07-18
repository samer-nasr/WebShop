<div class="grid grid-cols-2 gap-10 py-12">

    <div class="space-y-4" x-data="{ image : '/{{ $product->image->path }}'}">
        <div class="bg-white p-5 rounded-lg shadow">
            <img x-bind:src="image" alt="">
        </div>

        <div class="grid grid-cols-4 gap-4">
            @foreach( $product->images as $image)
                <div class="rounded bg-white shadow pt-2 ">
                    <img src="/{{$image->path}}" x-on:click="image='/{{$image->path}}'"    alt="" >
                </div>
            @endforeach
        </div>
    </div>

    <div>
        <h1 class="text-3xl font-medium">{{ $product->name }}</h1>
        <div class="text-xl text-gray-700">
            {{ $product->price }}
        </div>

        <div class="mt-4">
            {{ $product->description }}
        </div>

        <div class="mt-4 space-y-4">
            <select wire:model.change="variant" class="block w-full rounded-md border-0 py-1.5 pl-3 pr-10 text-gray-700">
                @foreach ($product->variants as $variant)

                <option value="{{ $variant->id}}">
                    {{ $variant->size }}/
                    {{ $variant->color }}
                </option>

                @endforeach
            </select>

            <div>@error('variant') {{ $message }} @enderror</div>

            <x-button wire:click='addToCart' class="w-full">
                Add to cart
            </x-button>

        </div>
    </div>
</div>
