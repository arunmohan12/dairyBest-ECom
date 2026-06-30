

    <div class="list-type filter-type menu-tab mt-4">
        @foreach($categories as $category)
        <div class="category-wrapper">
            <div class="item tab-item flex items-center justify-between cursor-pointer main-category">
                <div class="type-name text-secondary has-line-before hover:text-black capitalize">
                    <span class="category-heading"
                        data-cat-id="{{ $category->category_code }}">
                        {{ $category->name }} ({{ $category->products_count }})
                    </span>
                </div>
            </div>

            <!-- Subcategories -->
          
            <div class="subcategory-list ml-6 mt-2 max-h-0 overflow-hidden transition-all duration-300">
                @forelse($category->subcategories as $sub)
                <div class="subcategory-item py-1 cursor-pointer text-secondary hover:text-black"
                    data-sub-id="{{ $sub->id }}">
                    {{ $sub->name }} ({{ $sub->products_count ?? 0 }})
                </div>
                @empty
                @endforelse
            </div>
        </div>
        @endforeach
    </div>
