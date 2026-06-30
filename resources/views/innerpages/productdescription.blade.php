@include('partials.header')


<!-- Menu bar -->
<div class="menu_bar fixed bg-white bottom-0 left-0 w-full h-[70px] sm:hidden z-[101]">
    <div class="menu_bar-inner grid grid-cols-4 items-center h-full">
        <a href="{{ route('home') }}" class="menu_bar-link flex flex-col items-center gap-1">
            <span class="ph-bold ph-house text-2xl block"></span>
            <span class="menu_bar-title caption2 font-semibold">Home</span>
        </a>
        <a href="{{ route('innerpages.Allproducts') }}" class="menu_bar-link flex flex-col items-center gap-1">
            <span class="ph-bold ph-list text-2xl block"></span>
            <span class="menu_bar-title caption2 font-semibold">Products</span>
        </a>
        <!-- <a href="search-result.html" class="menu_bar-link flex flex-col items-center gap-1">
            <span class="ph-bold ph-magnifying-glass text-2xl block"></span>
            <span class="menu_bar-title caption2 font-semibold">Search</span>
        </a> -->
        <!-- <a href="cart.html" class="menu_bar-link flex flex-col items-center gap-1">
            <div class="cart-icon relative">
                <span class="ph-bold ph-handbag text-2xl block"></span>
                <span class="quantity cart-quantity absolute -right-1.5 -top-1.5 text-xs text-white bg-black w-4 h-4 flex items-center justify-center rounded-full">0</span>
            </div>
            <span class="menu_bar-title caption2 font-semibold">Cart</span>
        </a> -->
    </div>
</div>

<div class="breadcrumb-product">
    <div class="main bg-surface md:pt-[88px] pt-[70px] pb-[14px]">
        <div class="container flex items-center justify-between flex-wrap gap-3">
            <div class="left flex items-center gap-1">
                <a href="{{ route('home') }}" class="caption1 text-secondary2 hover:underline">Homepage</a>
                <i class="ph ph-caret-right text-xs text-secondary2"></i>
                <div class="caption1 text-secondary2">Products</div>
                <i class="ph ph-caret-right text-xs text-secondary2"></i>
                <div class="caption1 capitalize">{{ $product->pname }}</div>
            </div>
            <div class="right flex items-center gap-3">
                {{-- Previous Product Button --}}
                <div class="prev-btn flex items-center cursor-pointer text-secondary hover:text-black pr-3 border-r border-line
        @if (!isset($previousProduct) || is_null($previousProduct)) opacity-50 cursor-not-allowed @endif"
                    @if (isset($previousProduct) && !is_null($previousProduct))
                    data-slugid="{{ $previousProduct->slugid }}"
                    data-brand-name="{{ Str::slug($previousProduct->bname) }}"
                    @endif>
                    <i class="ph ph-caret-circle-left text-2xl text-black"></i>
                    <span class="caption1 pl-1">Previous Product</span>
                </div>

                {{-- Next Product Button --}}
                <div class="next-btn flex items-center cursor-pointer text-secondary hover:text-black
        @if (!isset($nextProduct) || is_null($nextProduct)) opacity-50 cursor-not-allowed @endif"
                    @if (isset($nextProduct) && !is_null($nextProduct))
                    data-slugid="{{ $nextProduct->slugid }}"
                    data-brand-name="{{ Str::slug($nextProduct->bname) }}"
                    @endif>
                    <span class="caption1 pr-1">Next Product</span>
                    <i class="ph ph-caret-circle-right text-2xl text-black"></i>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

<div class="product-detail two-scrolling grouped style-grouped">
    <div class="featured-product underwear md:py-20 py-14">
        <div class="container flex justify-between gap-y-6 flex-wrap">
            <div class="list-img md:w-1/2 md:pr-[45px] w-full">
                <div class="sticky">
                    {{-- Main Swiper (mySwiper2) --}}
                    <div class="swiper mySwiper2 rounded-2xl overflow-hidden swiper-initialized swiper-horizontal swiper-backface-hidden">
                        <div class="swiper-wrapper" id="swiper-wrapper-223acba349fccc55" aria-live="polite">
                            @foreach ($productImages as $index => $imageUrl)
                            <div class="swiper-slide popup-link {{ $index === 0 ? 'swiper-slide-active' : '' }}" role="group" aria-label="{{ $index + 1 }} / {{ count($productImages) }}" style="width: 470px;">
                                <img src="{{ $imageUrl }}" alt="Product Image {{ $index + 1 }}" class="w-full aspect-[3/4] object-cover">
                            </div>
                            @endforeach
                        </div>
                        <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
                    </div>

                    {{-- Thumbnail Swiper (mySwiper) --}}
                    <div class="swiper mySwiper swiper-initialized swiper-horizontal swiper-watch-progress swiper-backface-hidden swiper-thumbs">
                        <div class="swiper-wrapper" id="swiper-wrapper-aa16aa93410a5b0ad" aria-live="polite" style="transform: translate3d(0px, 0px, 0px);">
                            @foreach ($productImages as $index => $imageUrl)
                            <div class="swiper-slide {{ $index === 0 ? 'swiper-slide-visible swiper-slide-fully-visible swiper-slide-active swiper-slide-thumb-active' : '' }}" role="group" aria-label="{{ $index + 1 }} / {{ count($productImages) }}" style="width: 600px;">
                                <img src="{{ $imageUrl }}" alt="Thumbnail {{ $index + 1 }}" class="w-full aspect-[3/4] object-cover">
                            </div>
                            @endforeach
                        </div>
                        <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
                    </div>
                </div>

                {{-- Popup Swiper (assuming this is for a larger view when an image is clicked) --}}
                <div class="swiper popup-img">
                    <span class="close-popup-btn absolute top-4 right-4 z-[2]">
                        <i class="ph ph-x text-3xl text-white"></i>
                    </span>
                    <div class="swiper-wrapper">
                        @foreach ($productImages as $index => $imageUrl)
                        <div class="swiper-slide popup-link">
                            <img src="{{ $imageUrl }}" alt="Popup Image {{ $index + 1 }}" class="w-full aspect-[3/4] object-cover">
                        </div>
                        @endforeach
                    </div>
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-button-next"></div>
                </div>
            </div>
            <div class="product-infor md:w-1/2 w-full lg:pl-[15px] md:pl-2">
                <div class="sticky">
                    <div class="flex justify-between">
                        <div>
                            <!-- <div class="product-category caption2 text-secondary font-semibold uppercase">Cream</div> -->
                            <div class="product-name heading4 product-desc-top-margin"> {{ $product->pname }}</div>
                        </div>

                    </div>


                    <div class="list-action mt-6">
                        <div class="flex items-center gap-3 flex-wrap">
                            <div class=" text-title-product-description">Packing Pieces x Box:</div>
                            <div class="product-total-price ">{{ $product->packing_pieces }}</div>
                            <div class="w-px h-4 bg-line"></div>
                            <div class="product-origin-price font-normal text-secondary2">
                                Net Weight
                            </div>
                            <div class="product-sale caption2 font-semibold bg-green px-3 py-0.5 inline-block rounded-full">{{ $product->weight }} </div>
                        </div>



                    </div>

                    <div class="desc-tab">
                        <!-- <div class="desc-block sm:pb-6 pb-4 border-b border-line sm:mt-6 mt-4">

                            <div class="desc-item description open" data-item="Description">
                                <div class="right md:mt-6 mt-4">
                                    <div class="heading6">About This Products</div>
                                    <div class="text-secondary mt-2">
                                        Keep your home organized, yet elegant with storage cabinets by Onita Patio Furniture. These cabinets not only make a great storage units, but also bring a great decorative accent to your decor. Traditionally designed, they are perfect to be used in the hallway, living room, bedroom, office or any place where you need to store or display things. Made of high quality materials, they are sturdy and durable for years. Bring one-of-a-kind look to your
                                        interior with furniture from Onita Furniture!
                                    </div>
                                </div>
                                <div class="left md:mt-8 mt-5">
                                    <div class="heading6">Description</div>
                                    <div class="text-secondary mt-2">
                                        Keep your home organized, yet elegant with storage cabinets by Onita Patio Furniture. These cabinets not only make a great storage units, but also bring a great decorative accent to your decor. Traditionally designed, they are perfect to be used in the hallway, living room, bedroom, office or any place where you need to store or display things. Made of high quality materials, they are sturdy and durable for years. Bring one-of-a-kind look to your
                                        interior with furniture from Onita Furniture!
                                    </div>
                                </div>

                            </div>
                        </div> -->

                        <div class="list-social flex items-center gap-6 mt-4">

                            <a href="https://wa.me/971564719021?text={{ urlencode('Hello, I would like to enquire about the product: ' . $product->pname) }}"
                                class="button-enquiry enquiry-button"
                                target="_blank"
                                rel="noopener noreferrer">
                                <div class="icon-whatsapp text-2xl text-black"></div>

                                Order now
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- <div class="tab-features-block filter-product-block md:pb-20 pb-10">
    <div class="container">
        <div class="heading3 text-center">Related Products</div>
        <div class="list-product six-product hide-product-sold relative section-swiper-navigation style-outline style-small-border md:mt-10 mt-6">
            <div class="swiper-button-prev2 sm:left-10 left-6">
                <i class="ph-bold ph-caret-left text-xl"></i>
            </div>
            <div class="swiper swiper-list-product h-full relative">
                <div class="swiper-wrapper">
                </div>
            </div>
            <div class="swiper-button-next2 sm:right-10 right-6">
                <i class="ph-bold ph-caret-right text-xl"></i>
            </div>
        </div>
    </div>
</div> -->

@include('partials.footer')