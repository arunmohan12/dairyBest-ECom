@include('partials.header')



<div class="shop-product breadcrumb1 lg:py-20 md:py-14 py-10">
    <div class="container">
        <div class="flex max-md:flex-wrap gap-y-8">
            <div class="list-product-block style-grid lg:w-3/4 md:w-2/3 w-full md:pr-3" id="listings-container">
                @include('partials.listingpagination', ['products' => $products])

            </div>
            <div class="sidebar lg:w-1/4 md:w-1/3 w-full md:pl-12">

                <div class="filter-brand pb-8 mt-8">
                    <div class="heading6">Brands</div>
                    <div class="list-brand mt-4">
                        <div class="brand-item flex items-center justify-between" data-item="all">
                            <div class="left flex items-center cursor-pointer">
                                <div class="block-input">
                                    <input type="checkbox" name="brand_all" id="brand_all" />
                                    <i class="ph-fill ph-check-square icon-checkbox text-2xl"></i>
                                </div>
                                <label for="brand_all" class="brand-name capitalize pl-2 cursor-pointer">All</label>
                            </div>
                            <div class="text-secondary2 number">{{ $totalProductsCount }}</div>
                        </div>

                        @foreach($brands as $brand)
                        <div class="brand-item flex items-center justify-between" data-item="{{ Str::slug($brand->name) }}">
                            <div class="left flex items-center cursor-pointer">
                                <div class="block-input">
                                    <input type="checkbox" name="brand_{{ $brand->brand_id }}" id="brand_{{ $brand->brand_id }}" />
                                    <i class="ph-fill ph-check-square icon-checkbox text-2xl"></i>
                                </div>
                                <label for="brand_{{ $brand->brand_id }}" class="brand-name capitalize pl-2 cursor-pointer">{{ $brand->name }}</label>
                            </div>
                            <div class="text-secondary2 number">{{ $brand->products_count }}</div>
                        </div>
                        @endforeach
                    </div>
                </div>

                <div class="filter-type-block pb-8 border-b border-line">

                    <div class="heading6 {{ isset($brand) && $categories->count() ? '' : 'hidden' }}">
                        Categories
                    </div>

                    @include('partials.category-sidebar')


                </div>


            </div>
        </div>
    </div>
</div>

@include('partials.footer')