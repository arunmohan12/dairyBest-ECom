<div class="filter-heading flex items-center justify-between gap-5 flex-wrap">
    <div class="caption1 text-secondary2">
        @if ($products->total() > 0)
        Showing {{ $products->firstItem() }} – {{ $products->lastItem() }} of {{ $products->total() }} products
        @else
        No products found
        @endif
    </div>
</div>

<div class="list-filtered flex items-center gap-3 flex-wrap"></div>

<div class="list-product hide-product-sold grid lg:grid-cols-3 grid-cols-2 sm:gap-[30px] gap-[20px] mt-7" data-item="9">
    @foreach ($products as $product)

    <div data-item="{{ $product-> slugid }}" data-brand-name="{{ Str::slug($product->bname) }}" class="product-item">
        <div class="product-main cursor-pointer block">
            <div class="product-thumb bg-white relative overflow-hidden rounded-2xl">

                <div class="product-img image-container   w-full h-full aspect-[3/4]">
                    <img class="w-full h-full object-cover duration-700"
                        src="{{ $product->imageUrl() }}"
                        alt="{{ $product->pname }}">
                </div>

            </div>
            <div class="product-infor mt-4 lg:mb-7">
                {{-- Optional color swatches were removed until variant images are available. --}}
                <div class="product-name text-title duration-300 mt-4">{{ $product->pname }}</div>



                <div class="product-price-block flex items-center gap-2 flex-wrap mt-1 duration-300 relative z-[1]">

                    <div class="product-origin-price caption1 text-secondary2">Net Weight</div>

                   
                    <div class="product-sale caption2 font-medium bg-green px-3 py-0.5 inline-block rounded-full">
                    {{ $product->weight ?? 'N/A' }} 
                    </div>

                </div>

            </div>
        </div>

    </div>
    @endforeach

</div>
<!-- <div class="list-pagination w-full flex items-center gap-4 mt-10 pagination">
    @if ($products->onFirstPage())
    <span>&laquo;</span>
    @else
    <a href="{{ $products->previousPageUrl() }}">&laquo;</a>
    @endif

    @foreach ($products->getUrlRange(1, $products->lastPage()) as $page => $url)
    <a href="{{ $url }}" class="{{ $products->currentPage() == $page ? 'active' : '' }}">{{ $page }}</a>
    @endforeach

    @if ($products->hasMorePages())
    <a href="{{ $products->nextPageUrl() }}">&raquo;</a>
    @else
    <span>&raquo;</span>
    @endif
</div> -->

<div class="list-pagination w-full flex items-center gap-4 mt-10 pagination text-center">
    @if ($products->hasMorePages())
        <a href="#" id="load-more" 
           data-next-page="{{ $products->currentPage() + 1 }}" 
           class="link text-secondary duration-300 cursor-pointer view-all-btn">
            Show more
        </a>
    @endif
</div>


