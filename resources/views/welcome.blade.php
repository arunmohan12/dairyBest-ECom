@include('partials.header')

<!-- Slider -->
<div class="slider-block style-one bg-linear home-banner-res 2xl:h-[820px] xl:h-[740px] lg:h-[680px] md:h-[580px] sm:h-[500px] h-[420px] w-full">
    <div class="slider-main h-full w-full">
        <div class="swiper swiper-slider h-full relative">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="slider-item h-full w-full relative">
                        <div class="container w-full h-full flex items-center">
                            <div class="text-content sm:w-1/2 w-2/3 text-white">
                                <div class="homme-banner-heading banner-heading md:mt-5 mt-2" data-translate-key="banner-heading">Love at First Taste</div>
                                <div class="homme-banner-sub" data-translate-key="banner-subheading">La Mira offers delicious daily indulgences—creamy chocolates, rich sauces, velvety fruit purees, and flavored creams—crafted to elevate everyday moments. From sweet treats to savory delights, our products bring joy, flavor, and a touch of luxury to your routine.</div>

                                <!-- <a href="shop-breadcrumb-img.html" class="button-main md:mt-8 mt-3">Shop Now</a> -->
                            </div>
                            <div class="sub-img absolute left-0 top-0 w-full h-full z-[-1]">
                                <img src="{{asset('assets/images/home/banner1.webp')}}" alt="yoga3" class="w-full h-full object-cover" />
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="slider-item h-full w-full relative">
                        <div class="container w-full h-full flex items-center">
                            <div class="text-content sm:w-1/2 w-2/3 text-white">
                                <div class="homme-banner-heading md:mt-5 mt-2" data-translate-key="banner-heading">Love at First Taste</div>
                                <div class="homme-banner-sub" data-translate-key="banner-subheading">La Mira offers delicious daily indulgences—creamy chocolates, rich sauces, velvety fruit purees, and flavored creams—crafted to elevate everyday moments. From sweet treats to savory delights, our products bring joy, flavor, and a touch of luxury to your routine.</div>

                                <a href="" class="button-main banner-button md:mt-8 mt-3">Show Products</a>

                            </div>
                            <div class="sub-img absolute left-0 top-0 w-full h-full z-[-1]">
                                <img src="{{asset('assets/images/home/banner-02.jpg')}}" alt="yoga2" class="w-full h-full object-cover" />
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="slider-item h-full w-full relative">
                        <div class="container w-full h-full flex items-center">
                            <div class="text-content sm:w-1/2 w-2/3 text-white">
                                <div class="homme-banner-heading md:mt-5 mt-2" data-translate-key="banner-heading">Love at First Taste</div>
                                <div class="homme-banner-sub" data-translate-key="banner-subheading">La Mira offers delicious daily indulgences—creamy chocolates, rich sauces, velvety fruit purees, and flavored creams—crafted to elevate everyday moments. From sweet treats to savory delights, our products bring joy, flavor, and a touch of luxury to your routine.</div>

                                <a href="" class="button-main banner-button md:mt-8 mt-3">Show products</a>
                            </div>
                            <div class="sub-img absolute left-0 top-0 w-full h-full z-[-1]">
                                <img src="{{asset('assets/images/home/banner-03.jpg')}}" alt="yoga1" class="w-full h-full object-cover" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- <div class="swiper-pagination"></div> -->
        </div>
    </div>
</div>
</div>


<div class="trending-block style-six md:pt-20 pt-10">
    <div class="container">
        <div class="heading3 text-center">Explore Our Categories</div>
        <div class="list-trending relative section-swiper-navigation style-small-border style-outline md:mt-10 mt-6">
            <div class="swiper-button-prev"></div>
            <div class="swiper swiper-list-trending h-full relative">
                <div class="swiper-wrapper">
                    @foreach($categories as $category)
                    @php

                    $translationkey = str_replace(' ', '_', $category->name);
                    @endphp
                    <div class="swiper-slide" data-id="{{ $category->id }}">
                        <a href="javascript:void(0)" class="trending-item block relative cursor-pointer">
                            <div class="bg-img rounded-full overflow-hidden">
                                <!-- <img src="./assets/images/avatar/{{ $loop->index + 1 }}.png" alt="{{ $category->name }}" class="w-full" /> -->
                                <img
                                    src="{{ asset($category->image_path ? 'assets/images/products/categories/' . $category->image_path : 'assets/images/avatar/8.png') }}"
                                    alt="{{ $category->name }}"
                                    class="w-full" />

                            </div>
                            <div class="trending-name text-center mt-5 duration-500">
                                <span class="category-heading" data-translate-key="{{ $translationkey }}">{{ $category->name }}</span>
                                <!-- <span class="text-secondary"> ({{ rand(1, 20) }})</span> -->
                            </div>
                        </a>
                    </div>
                    @endforeach
                </div>
            </div>
            <div class="swiper-button-next"></div>
        </div>

    </div>
</div>



<div class="banner-block style-one grid sm:grid-cols-2 gap-5 md:pt-20 pt-10">
    @foreach($brands as $brand)
    <a href="{{ route('innerpages.product-listing', ['brandName' => Str::slug($brand->name)]) }}" class="banner-item relative block overflow-hidden duration-500">
        <div class="banner-img">
            <img src="{{ asset('assets/images/products/' . $brand->image_path)}}" class="duration-1000" alt="img" />
           
        </div>
        <div class="banner-content absolute top-0 left-0 w-full h-full flex flex-col items-center justify-center">
            <!-- <div class="heading2 text-white">La - Mira</div> -->
            <div class="text-button text-white relative inline-block pb-1 border-b-2 border-white duration-500 mt-2 brand-margin" data-brandid="{{ $brand->brand_id }}">Show products</div>
        </div>
    </a>
    @endforeach
</div>





<div class="tab-features-block filter-prodduct-block md:pt-20 pt-10">
    <div class="container">
        <div class="heading flex flex-col items-center text-center">
            <div class="menu-tab bg-surface rounded-2xl">
                <div class="menu flex items-center gap-2  p-1">
                    <div class="indicator absolute top-1 bottom-1 bg-white rounded-full shadow-md duration-300"></div>
                    <div class="tab-item relative text-secondary heading5 py-2 px-5 cursor-pointer duration-500 hover:text-black active" data-item="new-products">New Products</div>
                    <div class="tab-item relative text-secondary heading5 py-2 px-5 cursor-pointer duration-500 hover:text-black" data-item="other-products">Other Products</div>
                </div>
            </div>
        </div>
        <div class="list-product eight-product hide-product-sold grid xl:grid-cols-4 sm:grid-cols-3 grid-cols-2 md:gap-[30px] gap-4 relative section-swiper-navigation style-outline style-small-border md:mt-10 mt-6">
            <input type="hidden" id="productByTypeRoute" value="{{ route('products.byType') }}">

            @include('partials.product-item', ['products' => $products])

        </div>
    </div>
</div>

<div class="testimonial-block style-four relative">
    <div class="container half-screen-style relative w-full h-full">
        <div class="content md:w-1/2 lg:py-[110px] py-16">
            <!-- <div class="heading4 font-normal normal-case">I absolutely love this shop! The products are high-quality and the customer service is excellent. I always leave with exactly what I need and a smile on my face.</div> -->

        </div>
    </div>
    <div class="bg-img absolute top-0 left-0 w-full h-full z-[-1]">
        <img src="{{asset('assets/images/home/banner3.webp')}}" alt="bg-img" class="w-full h-full object-cover" />
    </div>
</div>

<div class="benefit-block  md:py-20 py-10">
    <div class="container">
        <div class="list-benefit grid items-start md:grid-cols-3 grid-cols-1 xl:gap-[160px] lg:gap-20 gap-10 gap-y-6">
            <div class="benefit-item flex flex-col items-center justify-center">
                <i class="icon-double-leaves lg:text-7xl text-5xl"></i>
                <div class="body1 font-semibold uppercase text-center mt-5">100% ORGANIC</div>
                <div class="caption1 text-secondary text-center mt-2">We believe in skin that looks like skin and radiance that come naturally</div>
            </div>
            <div class="benefit-item flex flex-col items-center justify-center">
                <i class="icon-leaves lg:text-7xl text-5xl"></i>
                <div class="body1 font-semibold uppercase text-center mt-5">NO SYNTHETIC COLORS</div>
                <div class="caption1 text-secondary text-center mt-3">With transparency ad our guide and color as our vehicle conventions</div>
            </div>
            <div class="benefit-item flex flex-col items-center justify-center">
                <i class="icon-rabbit-heart lg:text-7xl text-5xl"></i>
                <div class="body1 font-semibold uppercase text-center mt-5">NO ANIMAL TESTING</div>
                <div class="caption1 text-secondary text-center mt-3">We challenge the conventions of clean beauty to create.</div>
            </div>
        </div>
    </div>
</div>

<div class="testimonial-block md:pt-20 md:pb-16 pt-10 pb-8 md:mt-20 mt-10 bg-surface">
    <div class="container">
        <div class="heading3 text-center">Don't just take our word for it </div>
        <div class="list-testimonial pagination-mt40 md:mt-10 mt-6">
            <div class="swiper swiper-list-testimonial h-full relative">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="testimonial-item style-one h-full">
                            <div class="testimonial-main bg-white p-8 rounded-2xl h-full">
                                <div class="flex items-center gap-1">
                                    <i class="ph-fill ph-star text-yellow"></i>
                                    <i class="ph-fill ph-star text-yellow"></i>
                                    <i class="ph-fill ph-star text-yellow"></i>
                                    <i class="ph-fill ph-star text-yellow"></i>
                                    <i class="ph-fill ph-star text-yellow"></i>
                                </div>
                                <div class="heading6 title mt-4">Variety of Styles!</div>
                                <div class="desc mt-2">"Fantastic shop! Great selection, fair prices, and friendly staff. Highly recommended. The quality of the products is exceptional, and the prices are very reasonable!"</div>
                                <div class="text-button name mt-4">Lisa K.</div>
                                <div class="caption2 date text-secondary2 mt-1">August 13, 2024</div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="testimonial-item style-one h-full">
                            <div class="testimonial-main bg-white p-8 rounded-2xl h-full">
                                <div class="flex items-center gap-1">
                                    <i class="ph-fill ph-star text-yellow"></i>
                                    <i class="ph-fill ph-star text-yellow"></i>
                                    <i class="ph-fill ph-star text-yellow"></i>
                                    <i class="ph-fill ph-star text-yellow"></i>
                                    <i class="ph-fill ph-star text-yellow"></i>
                                </div>
                                <div class="heading6 title mt-4">Quality of Clothing!</div>
                                <div class="desc mt-2">"Anvouge's fashion collection is a game-changer! Their unique and trendy pieces have completely transformed my style. It's comfortable, stylish, and always on-trend."</div>
                                <div class="text-button name mt-4">Elizabeth A.</div>
                                <div class="caption2 date text-secondary2 mt-1">August 13, 2024</div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="testimonial-item style-one h-full">
                            <div class="testimonial-main bg-white p-8 rounded-2xl h-full">
                                <div class="flex items-center gap-1">
                                    <i class="ph-fill ph-star text-yellow"></i>
                                    <i class="ph-fill ph-star text-yellow"></i>
                                    <i class="ph-fill ph-star text-yellow"></i>
                                    <i class="ph-fill ph-star text-yellow"></i>
                                    <i class="ph-fill ph-star text-yellow"></i>
                                </div>
                                <div class="heading6 title mt-4">Customer Service!</div>
                                <div class="desc mt-2">"I absolutely love this shop! The products are high-quality and the customer service is excellent. I always leave with exactly what I need and a smile on my face."</div>
                                <div class="text-button name mt-4">Christin H.</div>
                                <div class="caption2 date text-secondary2 mt-1">August 13, 2024</div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="testimonial-item style-one h-full">
                            <div class="testimonial-main bg-white p-8 rounded-2xl h-full">
                                <div class="flex items-center gap-1">
                                    <i class="ph-fill ph-star text-yellow"></i>
                                    <i class="ph-fill ph-star text-yellow"></i>
                                    <i class="ph-fill ph-star text-yellow"></i>
                                    <i class="ph-fill ph-star text-yellow"></i>
                                    <i class="ph-fill ph-star text-yellow"></i>
                                </div>
                                <div class="heading6 title mt-4">Quality of Clothing!</div>
                                <div class="desc mt-2">"I can't get enough of Anvouge's high-quality clothing. It's comfortable, stylish, and always on-trend. The products are high-quality and the customer service is excellent."</div>
                                <div class="text-button name mt-4">Emily G.</div>
                                <div class="caption2 date text-secondary2 mt-1">August 13, 2024</div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="testimonial-item style-one h-full">
                            <div class="testimonial-main bg-white p-8 rounded-2xl h-full">
                                <div class="flex items-center gap-1">
                                    <i class="ph-fill ph-star text-yellow"></i>
                                    <i class="ph-fill ph-star text-yellow"></i>
                                    <i class="ph-fill ph-star text-yellow"></i>
                                    <i class="ph-fill ph-star text-yellow"></i>
                                    <i class="ph-fill ph-star text-yellow"></i>
                                </div>
                                <div class="heading6 title mt-4">Customer Service!</div>
                                <div class="desc mt-2">"I love this shop! The products are always top-quality, and the staff is incredibly friendly and helpful. They go out of their way to make sure that I'm satisfied my purchase."</div>
                                <div class="text-button name mt-4">Carolina C.</div>
                                <div class="caption2 date text-secondary2 mt-1">August 13, 2024</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-pagination"></div>
            </div>
        </div>
    </div>
</div>

<div class="instagram-block md:pt-20 pt-10">
    <div class="container">
        <div class="heading">
            <div class="heading3 text-center">Dairy Best On Instagram</div>
            <div class="text-center mt-3">#dairybestproducts</div>
        </div>
        <div class="list-instagram md:mt-10 mt-6">
            <div class="swiper swiper-list-instagram">
                <div class="swiper-wrapper">
                    @foreach($products as $product)

                    <div class="swiper-slide">
                        <a href="https://www.instagram.com/" target="_blank" class="item relative block rounded-[32px] overflow-hidden">
                            <img src="{{ asset('assets/images/products/' . Str::slug($product->bname) . '/' . $product->productimage) }}" alt="0" class="h-full w-full duration-500 relative" />
                            <div class="icon w-12 h-12 bg-white hover:bg-black duration-500 flex items-center justify-center rounded-2xl absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 z-[1]">
                                <div class="icon-instagram text-2xl text-black"></div>
                            </div>
                        </a>
                    </div>
                    @endforeach




                </div>
            </div>
        </div>
    </div>
</div>

<div class="brand-block md:py-[60px] py-[32px]">

</div>

@include('partials.footer')