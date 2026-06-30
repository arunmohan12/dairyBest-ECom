document.addEventListener("DOMContentLoaded", function () {

    const route = document.getElementById("productByTypeRoute").value;

    const tabs = document.querySelectorAll(".menu-tab .tab-item");
    const productContainer = document.querySelector(".list-product.eight-product");
    const indicator = document.querySelector(".indicator");

    function moveIndicator(tab) {
        indicator.style.left = `${tab.offsetLeft}px`;
        indicator.style.width = `${tab.offsetWidth}px`;
    }

    const activeTab = document.querySelector(".tab-item.active");
    if (activeTab) moveIndicator(activeTab);

    tabs.forEach(tab => {
        tab.addEventListener("click", function () {
            tabs.forEach(t => t.classList.remove("active"));
            this.classList.add("active");

            moveIndicator(this);

            const type = this.getAttribute("data-item");

            fetch(route, {
                method: "POST",
                headers: {
                    "Content-Type": "application/json",
                    "X-CSRF-TOKEN": document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                },
                body: JSON.stringify({ type: type })
            })
            .then(response => response.json())
            .then(data => {
                productContainer.innerHTML = data.html;
            })
            .catch(error => {
                console.error("Error loading products:", error);
            });
        });
    });


    const selectedBrandIds = $('.list-brand input:checked')
        .not('[name="brand_all"]')
        .map(function() { return this.value; })
        .get();

    if (selectedBrandIds.length > 0) {
        fetchFilteredProducts();       // update products
        fetchFilteredCategories(selectedBrandIds); // update categories
    }
    document.addEventListener('DOMContentLoaded', function() {
        checkAndToggleCategoryBlock();
    });
    
});





$('.list-option li').on('click', function() {
    var selectedLang = $(this).data('item');
    // UI update
    $('.selected').text($(this).text());
    $('.list-option li').removeClass('active');
    $(this).addClass('active');

    // CSRF token for POST request
    var csrfToken = $('meta[name="csrf-token"]').attr('content');

    // AJAX call to get translations
    $.ajax({
        url: '/get-translations',
        type: 'POST',
        data: {
            _token: csrfToken,
            lang: selectedLang
        },
        success: function(data) {
            $('[data-translate-key]').each(function() {
                var key = $(this).data('translate-key');
                if (data[key]) {
                    $(this).text(data[key]);
                }
            });
        }
    });
});

$('#chooseLanguageFooter').on('change', function() {
    var selectedLang = $(this).val(); // 'en' or 'ar'

    // CSRF token from meta tag
    var csrfToken = $('meta[name="csrf-token"]').attr('content');

    // AJAX call to fetch translations
    $.ajax({
        url: '/get-translations',
        type: 'POST',
        data: {
            _token: csrfToken,
            lang: selectedLang
        },
        success: function(data) {
            // Update all elements with translated text
            $('[data-translate-key]').each(function() {
                var key = $(this).data('translate-key');
                if (data[key]) {
                    $(this).text(data[key]);
                }
            });
        }
    });
});

// $(document).on('click', '#listings-container .pagination a', function(e) {
//     e.preventDefault(); 
//     var url = $(this).attr('href'); 

//     $.ajax({
//         url: url,
//         type: 'GET',
//         success: function(data) {
//             $('#listings-container').html(data); 
//             $('html, body').animate({
//                 scrollTop: $('.shop-product').offset().top
//             }, 200);
//         },
//     });
// });

// $(document).on('click', '#load-more', function(e) {
//     e.preventDefault(); // Prevent default link behavior

//     let link = $(this);
//     let nextPage = link.data('next-page');

//     $.ajax({
//         url: '?page=' + nextPage,
//         type: 'GET',
//         success: function(data) {
//             let parsed = $(data);

//             // Grab new products
//             let newListProduct = parsed.filter('.list-product').length 
//                 ? parsed.filter('.list-product') 
//                 : parsed.find('.list-product');

//             let newProducts = newListProduct.children('.product-item');

//             // Append new products
//             $('.list-product').append(newProducts);

//             // Update or remove link
//             let newLink = parsed.find('#load-more');
//             if (newLink.length) {
//                 link.data('next-page', newLink.data('next-page'));
//             } else {
//                 link.remove(); // No more products
//             }
//         },
//         error: function(xhr) {
//             console.error("Error loading products:", xhr.responseText);
//         }
//     });
// });





// Add this new JavaScript block
$(document).on('click', '.product-item', function() {
    // Get the product slugid from the data attribute
    var slugid = $(this).data('item');

    // Get the brand name from the data attribute or extract from current URL
    var brandName = $(this).data('brand-name');
    if (!brandName) {
        // Fallback: If data-brand-name isn't available, try to extract from current URL
        var pathSegments = window.location.pathname.split('/');
        // Assuming your URL is consistently /product-listing/{brandName}
        if (pathSegments.length >= 3 && pathSegments[1] === 'product-listing') {
            brandName = pathSegments[2];
        } else {
            console.error('Could not determine brand name for product redirection.');
            return; // Exit if brand name cannot be determined
        }
    }

    // Construct the URL using your Laravel route structure
    var productDescriptionUrl = `/product-listing/${brandName}/${slugid}`;

    // Redirect the browser to the product description page
    window.location.href = productDescriptionUrl;
});

// $(document).on('click', '.prev-btn', function() {
//     var $this = $(this);
//     // Check if the button is not visually disabled by the CSS class
//     if (!$this.hasClass('cursor-not-allowed')) {
//         var slugid = $this.data('slugid');
//         var brandName = $this.data('brand-name');

//         if (slugid && brandName) {
//             // Construct the URL using the data attributes
//             var url = `/product-listing/${brandName}/${slugid}`;
//             // Redirect the browser
//             window.location.href = url;
//         } else {
//             console.warn('Previous product data missing for redirection.');
//         }
//     }
// });

// // Handler for Next Product button
// $(document).on('click', '.next-btn', function() {
//     var $this = $(this);
//     // Check if the button is not visually disabled by the CSS class
//     if (!$this.hasClass('cursor-not-allowed')) {
//         var slugid = $this.data('slugid');
//         var brandName = $this.data('brand-name');

//         if (slugid && brandName) {
//             // Construct the URL using the data attributes
//             var url = `/product-listing/${brandName}/${slugid}`;
//             // Redirect the browser
//             window.location.href = url;
//         } else {
//             console.warn('Next product data missing for redirection.');
//         }
//     }
// });


document.querySelector('.list-type').addEventListener('click', function(e){
    if(e.target.closest('.main-category')){
        const category = e.target.closest('.main-category');
        const subcategoryList = category.nextElementSibling;

        document.querySelectorAll('.subcategory-list').forEach(function(list){
            if(list !== subcategoryList){
                list.style.maxHeight = null;
                list.classList.remove('show');
            }
        });

        if(subcategoryList.style.maxHeight){
            subcategoryList.style.maxHeight = null;
            subcategoryList.classList.remove('show');
        } else {
            subcategoryList.classList.add('show');
            subcategoryList.style.maxHeight = subcategoryList.scrollHeight + "px";
        }
    }
});



$(function () {

    const sidebar = $('.sidebar');
    const productContainer = $('.list-product-block');

    //-----------------------------------------
    // Fetch Products Function
    //-----------------------------------------
    function fetchFilteredProducts() {

        if (!productContainer.length) return;

        productContainer.html('<p class="text-center col-span-full">Loading...</p>');

        const categoryId =
            sidebar.find('.list-type .item.active .category-heading').data('cat-id') || '';

        const subcategoryId =
            sidebar.find('.subcategory-item.active').data('sub-id') || '';

        const selectedBrandIds =
            sidebar.find('.list-brand input:checked')
                .not('[name="brand_all"]')
                .map(function () {
                    return this.name.split('_')[1];
                }).get();

        const filterData = {
            category: categoryId,
            subcategory: subcategoryId,
            brands: selectedBrandIds
        };

        $.ajax({
            url: '/products/filter',
            type: 'POST',
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            contentType: 'application/json',
            data: JSON.stringify(filterData),

            success: function (html) {
                productContainer.html(html);
            },

            error: function () {
                productContainer.html(
                    '<p class="text-center col-span-full">Could not load products.</p>'
                );
            }
        });
    }


    
    $(document).on('click', '#load-more', function(e) {

        e.preventDefault();
    
        const nextPage = $(this).data('next-page');
    
        fetchFilteredProductsnextpage(nextPage);
    
    });
    
    function fetchFilteredProductsnextpage(page) {
    
        const categoryId =
            sidebar.find('.list-type .item.active .category-heading').data('cat-id') || '';
    
        const subcategoryId =
            sidebar.find('.subcategory-item.active').data('sub-id') || '';
    
        const selectedBrandIds =
            sidebar.find('.list-brand input:checked')
                .not('[name="brand_all"]')
                .map(function () {
                    return this.name.split('_')[1];
                }).get();
    
        const filterData = {
            category: categoryId,
            subcategory: subcategoryId,
            brands: selectedBrandIds
        };
    
        $.ajax({
            url: '/products/filter?page=' + page,
            type: 'POST',
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            contentType: 'application/json',
            data: JSON.stringify(filterData),
    
            success: function (html) {
    
                const parsed = $(html);
                const newProducts = parsed.find('.product-item');
    
                $('.list-product').append(newProducts);
    
                const newLoadMore = parsed.find('#load-more');
    
                if (newLoadMore.length) {
                    $('#load-more').data('next-page', newLoadMore.data('next-page'));
                } else {
                    $('#load-more').remove();
                }
            }
        });
    }

    
    //-----------------------------------------
    // Category Click
    //-----------------------------------------
    sidebar.on('click', '.category-heading', function () {
        $('.subcategory-item').removeClass('active');

        sidebar.find('.list-type .item').removeClass('active');

        $(this).closest('.item').addClass('active');

        // Reset subcategory active when category changes
        sidebar.find('.subcategory-item').removeClass('active');

        fetchFilteredProducts();
    });


    //-----------------------------------------
    // Subcategory Click
    //-----------------------------------------
    sidebar.on('click', '.subcategory-item', function () {

        sidebar.find('.subcategory-item').removeClass('active');

        $(this).addClass('active');

        fetchFilteredProducts();
    });



    sidebar.on('change', '.list-brand input[type="checkbox"]', function () {
        $('.list-type .item').removeClass('active');
        $('.subcategory-item').removeClass('active');
        if (this.checked) {
            sidebar.find('.list-brand input[type="checkbox"]')
                .not(this)
                .prop('checked', false);
        }
    
        const selectedBrandIds =
            sidebar.find('.list-brand input:checked')
                .not('[name="brand_all"]')
                .map(function () {
                    return this.name.split('_')[1];
                }).get();
    
        fetchFilteredProducts();
        fetchFilteredCategories(selectedBrandIds);
    });
    

});





function fetchFilteredCategories(selectedBrandIds) {

    $.ajax({
        url: '/categories/filter',
        type: 'POST',
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        contentType: 'application/json',
        data: JSON.stringify({
            brands: selectedBrandIds
        }),
        success: function (html) {

            const categoryList = $('.filter-type-block .list-type');
            categoryList.fadeOut(150, function() {
                $(this).html(html).fadeIn(200);
        
                // Check and toggle the block visibility
                checkAndToggleCategoryBlock();
            });
        }
        
    });
}
function checkAndToggleCategoryBlock() {
    
    const categoryBlock = document.querySelector('.filter-type-block');
    const categoryList = categoryBlock.querySelector('.list-type');
 
    if (!categoryList || categoryList.children.length === 0) {
        categoryBlock.style.display = 'none'; // hide entire block
        
    } else {
        $('.filter-type-block .heading6').removeClass('hidden');

        categoryBlock.style.display = 'block'; // show it
    }
}