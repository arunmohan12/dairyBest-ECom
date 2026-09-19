<div class="mega-menu absolute top-[74px] left-0 bg-white w-screen">
    <div class="container">
        <div class="flex justify-between py-8">
            <div class="banner-ads-block basis-1/3">
                @foreach ($exploreBrands as $brand)
                    <a
                        href="{{ \App\Support\ExploreMenuBuilder::listingUrl(brandSlug: \Illuminate\Support\Str::slug($brand->name)) }}"
                        class="explore-brand-card banner-ads-item bg-linear rounded-2xl relative block overflow-hidden cursor-pointer {{ $loop->first ? 'mt-8' : 'mt-6' }}"
                    >
                        <div class="explore-brand-card__overlay"></div>
                        <div class="explore-brand-card__content text-content relative z-[2]">
                            <div class="heading6">{{ $brand->name }}</div>
                            <div class="caption1 explore-brand-card__count">{{ $brand->products_count }} products</div>
                        </div>
                        @if ($brand->image_path)
                            <img
                                src="{{ asset('assets/images/products/' . $brand->image_path) }}"
                                alt="{{ $brand->name }}"
                                class="explore-brand-card__image duration-700"
                            />
                        @else
                            <img
                                src="{{ asset('assets/images/other/bg-feature.png') }}"
                                alt="{{ $brand->name }}"
                                class="explore-brand-card__image duration-700"
                            />
                        @endif
                    </a>
                @endforeach
                <a
                    href="{{ route('innerpages.Allproducts') }}"
                    class="text-button-uppercase inline-block mt-6 text-black duration-300 hover:text-[#25721f]"
                >
                    View all products
                </a>
            </div>
            <div class="explore-mega-nav nav-link basis-2/3 pl-2.5">
                @foreach ($exploreCategories as $group)
                    @php
                        $category = $group['category'];
                        $products = $group['products'];
                    @endphp
                    <div class="nav-item explore-mega-nav__column">
                        <a
                            href="{{ \App\Support\ExploreMenuBuilder::listingUrl(categoryCode: $category->category_code) }}"
                            class="explore-mega-nav__heading text-button-uppercase duration-300 hover:text-[#25721f]"
                        >
                            {{ $category->name }}
                        </a>
                        <ul class="explore-mega-nav__list">
                            @foreach ($products as $product)
                                <li class="explore-mega-nav__item">
                                    <a
                                        href="{{ \App\Support\ExploreMenuBuilder::productUrl($product) }}"
                                        class="link explore-mega-nav__link text-secondary duration-300 hover:text-black"
                                        title="{{ $product->pname }}"
                                    >
                                        {{ $product->pname }}
                                    </a>
                                </li>
                            @endforeach
                            <li class="explore-mega-nav__item">
                                <a
                                    href="{{ \App\Support\ExploreMenuBuilder::listingUrl(categoryCode: $category->category_code) }}"
                                    class="link explore-mega-nav__link explore-mega-nav__view-all duration-300 hover:text-[#25721f]"
                                >
                                    View All
                                </a>
                            </li>
                        </ul>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
