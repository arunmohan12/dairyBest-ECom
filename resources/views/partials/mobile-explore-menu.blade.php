<div class="mobile-explore-panel">
    <div class="mobile-explore-brands">
        @foreach ($exploreBrands as $brand)
            <a
                href="{{ \App\Support\ExploreMenuBuilder::listingUrl(brandSlug: \Illuminate\Support\Str::slug($brand->name)) }}"
                class="mobile-explore-brand explore-brand-card banner-ads-item bg-linear rounded-2xl relative block overflow-hidden"
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
            class="mobile-explore-all-products text-button-uppercase"
        >
            View all products
        </a>
    </div>

    <div class="list-nav mobile-explore-categories">
        <div class="caption1 text-button-uppercase tracking-[0.12em] mobile-explore-categories__label">Shop by category</div>
        <ul>
            @foreach ($exploreCategories as $group)
                @php
                    $category = $group['category'];
                    $products = $group['products'];
                @endphp
                <li>
                    <a href="#!" class="text-xl font-semibold flex items-center justify-between mobile-explore-category-toggle">
                        <span>{{ $category->name }}</span>
                        <span class="text-right shrink-0 pl-3">
                            <i class="ph ph-caret-right text-xl"></i>
                        </span>
                    </a>
                    <div class="sub-nav-mobile">
                        <div class="back-btn flex items-center gap-3">
                            <i class="ph ph-caret-left text-xl"></i>
                            Back
                        </div>
                        <div class="list-nav-item w-full pt-2 pb-6">
                            <ul class="w-full">
                                <li>
                                    <a
                                        href="{{ \App\Support\ExploreMenuBuilder::listingUrl(categoryCode: $category->category_code) }}"
                                        class="link text-secondary duration-300 font-semibold"
                                    >
                                        All {{ $category->name }}
                                    </a>
                                </li>
                                @foreach ($products as $product)
                                    <li>
                                        <a
                                            href="{{ \App\Support\ExploreMenuBuilder::productUrl($product) }}"
                                            class="link text-secondary duration-300 explore-mega-nav__link"
                                            title="{{ $product->pname }}"
                                        >
                                            {{ $product->pname }}
                                        </a>
                                    </li>
                                @endforeach
                                <li>
                                    <a
                                        href="{{ \App\Support\ExploreMenuBuilder::listingUrl(categoryCode: $category->category_code) }}"
                                        class="link explore-mega-nav__view-all duration-300"
                                    >
                                        View All
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </li>
            @endforeach
        </ul>
    </div>
</div>
