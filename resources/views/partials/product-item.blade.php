@foreach($products as $product)
<div data-item="{{ $product-> slugid }}" data-brand-name="{{ Str::slug($product->bname) }}" class="product-item">
        <div class="product-main cursor-pointer block">
            <div class="product-thumb bg-white relative overflow-hidden rounded-2xl">

                <div class="product-img image-container   w-full h-full aspect-[3/4]">
                    <img class="w-full h-full object-cover duration-700"
                        src="{{ asset('assets/images/products/' . Str::slug($product->bname) . '/' . $product->productimage) }}"
                        alt="img">
                </div>

            </div>
            <div class="product-infor mt-4 lg:mb-7">

                <div class="product-name text-title duration-300">{{ $product->pname }}</div>



                <div class="product-price-block flex items-center gap-2 flex-wrap mt-1 duration-300 relative z-[1]">

                    <div class="product-origin-price caption1 text-secondary2">Net Weight</div>

                   
                    <div class="product-sale caption1 font-medium bg-green px-3 py-0.5 inline-block rounded-full">
                    {{ $product->weight }} 
                    </div>

                </div>
            </div>
        </div>

    </div>

@endforeach