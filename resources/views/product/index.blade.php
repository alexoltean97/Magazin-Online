<x-app-layout>
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-4">
        @foreach($products as $product)
            <div
                x-data="productItem({{json_encode([
                    'id' => $product->id,
                    'image' => $product->image,
                    'title' => $product->title,
                    'price' => $product->price,
                    'addToCartUrl' => route('cart.add', $product)
                ])}}"
                class="border border-1 border-gray-200 rounded-md hover:border-purple-600 transition-colors bg-white"
            >
                <a href="{{route('product.view', $product->slug)}}" class="aspect-w-3 aspect-h-2 block overflow-hidden aspect-w-5 aspect-h-3">
                    <img
                        src="{{$product->image}}"
                        alt=""
                        class="object-cover rounded-lg hover:scale-105 hover:rotate-1 transition-transform object-cover"
                    />
                </a>
                <div class="p-4">
                    <h3 class="text-lg">
                        <a href="{{route('product.view', $product->slug)}}">
                          {{$product->title}}
                        </a>
                    </h3>
                    <h5 class="font-bold">{{$product->price}}</h5>
                </div>
                <div class="flex justify-between py-3 px-4">

                    <button class="btn-primary" @click="addToCart()">
                        Add to Cart
                    </button>
                </div>
            </div>

        @endforeach
    </div>
    {{$products->links()}}
</x-app-layout>
