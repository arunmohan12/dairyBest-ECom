<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Dairy Best Foodstuff Trading LLC - شركة ديري بيست لتجارة المواد الغذائية ذ.م.م </title>

    <link rel="stylesheet" href="{{ asset('assets/css/swiper-bundle.min.css')}}" />
    <link rel="stylesheet" href="{{ asset('assets/css/swiper-bundle.min.css')}}" />
    <link rel="stylesheet" href="{{ asset('assets/css/style.css')}}" />
    <link rel="stylesheet" href="{{ asset('assets/dist/output-scss.css')}}" />
    <link rel="stylesheet" href="{{ asset('assets/dist/output-tailwind.css')}}" />
    <link rel="stylesheet" href="{{ asset('assets/css/scilens.css')}}" />

</head>

<body>
    <div id="top-nav" class="top-nav style-one top-banner md:h-[44px] h-[30px]">
        <div class="container mx-auto h-full">
            <div class="top-nav-main flex justify-between max-md:justify-between h-full">
                <div class="left-content flex items-center gap-5 ">
                    <div class="choose-type choose-language flex items-center gap-1.5">
                        <div class="select relative">
                            <p class="selected caption2 text-white">English</p>
                            <ul class="list-option bg-white">
                                <li data-item="en" class="caption2 active">English</li>
                                <li data-item="ar" class="caption2">Arabic</li>
                            </ul>
                        </div>
                        <i class="ph ph-caret-down text-xs text-white"></i>
                    </div>

                </div>
                <!-- <div class="right-content flex items-center gap-5 max-md:hidden"> -->
                <div class="right-content flex items-center gap-5 ">

                    <a href="https://www.facebook.com/" target="_blank">
                        <i class="icon-facebook text-white"></i>
                    </a>
                    <a href="https://www.instagram.com/" target="_blank">
                        <i class="icon-instagram text-white"></i>
                    </a>
                    <a href="https://www.youtube.com/" target="_blank">
                        <i class="icon-youtube text-white"></i>
                    </a>
                    <a href="https://twitter.com/" target="_blank">
                        <i class="icon-twitter text-white"></i>
                    </a>

                </div>
            </div>
        </div>
    </div>

    <div id="header" class="relative w-full">
        <div class="header-menu style-one absolute top-0 left-0 right-0 w-full md:h-[74px] h-[56px] bg-white">
            <div class="container mx-auto h-full">
                <div class="header-main flex justify-between h-full">
                    <div class="menu-mobile-icon lg:hidden flex items-center">
                        <i class="icon-category text-2xl"></i>
                    </div>
                    <div class="left flex items-center ">
                        <a href="{{ route('home') }}" class="logo text-3xl font-semibold text-center flex items-center gap-2">
                            <img src="{{ asset('assets/images/home/logo.png')}}" alt="Dairy Best" class="logo">

                        </a>

                        <div class="menu-main h-full max-lg:hidden header-gap">
                            <ul class="flex items-center gap-8 h-full">

                                <li class="h-full">
                                    <a href="#!" class="text-button-uppercase duration-300 h-full flex items-center justify-center" data-translate-key="products"> Explore </a>
                                    <div class="mega-menu absolute top-[74px] left-0 bg-white w-screen">
                                        <div class="container">
                                            <div class="flex justify-between py-8">
                                                <div class="banner-ads-block  basis-1/3">
                                                    <a href="javascript:void(0)" class="banner-ads-item bg-linear rounded-2xl relative block overflow-hidden cursor-pointer mt-8">
                                                        <div class="text-content py-14 pl-8 relative z-[1]">
                                                            <!-- <div class="text-button-uppercase text-white bg-red px-2 py-0.5 inline-block rounded-sm">Save $10</div> -->
                                                            <div class="heading6 mt-2">La - Mira</div>
                                                            <!-- <div class="body1 mt-3 text-secondary">Starting at <span class="text-red">$59.99</span></div> -->
                                                        </div>
                                                        <img src="./assets/images/other/bg-feature.png" alt="bg-img" class="h-full w-auto absolute right-0 top-0 duration-700" />
                                                    </a>
                                                    <a href="javascript:void(0)" class="banner-ads-item bg-linear rounded-2xl relative block overflow-hidden cursor-pointer mt-8">
                                                        <div class="text-content py-14 pl-8 relative z-[1]">
                                                            <!-- <div class="text-button-uppercase text-white bg-red px-2 py-0.5 inline-block rounded-sm">Save $10</div> -->
                                                            <div class="heading6 mt-2">Bono</div>
                                                            <!-- <div class="body1 mt-3 text-secondary">Starting at <span class="text-red">$59.99</span></div> -->
                                                        </div>
                                                        <img src="./assets/images/other/bg-feature.png" alt="bg-img" class="h-full w-auto absolute right-0 top-0 duration-700" />
                                                    </a>
                                                </div>
                                                <div class="nav-link basis-2/3 grid grid-cols-4 gap-y-8 pl-2.5">
                                                    <div class="nav-item">
                                                        <div class="text-button-uppercase pb-2">Drinks</div>
                                                        <ul>
                                                            <li>
                                                                <a href="javascript:void(0)" class="link text-secondary duration-300 cursor-pointer"> Tostato Coffee </a>
                                                            </li>
                                                            <li>
                                                                <a href="javascript:void(0)" class="link text-secondary duration-300 cursor-pointer"> Speculoos Truffle </a>
                                                            </li>

                                                            <li>
                                                                <a href="javascript:void(0)" class="link text-secondary duration-300 cursor-pointer"> Roll Wafer </a>
                                                            </li>
                                                            <li>
                                                                <a href="javascript:void(0)" class="link text-secondary duration-300 cursor-pointer "> Sea Salt Caramel </a>
                                                            </li>
                                                            <li>
                                                                <a href="javascript:void(0)" class="link text-secondary duration-300 cursor-pointer view-all-btn"> View All </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="nav-item">
                                                        <div class="text-button-uppercase pb-2">Biscuits</div>
                                                        <ul>
                                                            <li>
                                                                <a href="javascript:void(0)" class="link text-secondary duration-300 cursor-pointer"> Toffee Milk Chocolate </a>
                                                            </li>
                                                            <li>
                                                                <a href="javascript:void(0)" class="link text-secondary duration-300 cursor-pointer"> Milk Choco </a>
                                                            </li>

                                                            <li>
                                                                <a href="javascript:void(0)" class="link text-secondary duration-300 view-all-btn"> View All </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="nav-item">
                                                        <div class="text-button-uppercase pb-2">Fruit Puree</div>
                                                        <ul>
                                                            <li>
                                                                <a href="javascript:void(0)" class="link text-secondary duration-300 cursor-pointer"> Blue Raspberry</a>
                                                            </li>
                                                            <li>
                                                                <a href="javascript:void(0)" class="link text-secondary duration-300 cursor-pointer"> Coconut </a>
                                                            </li>
                                                            <li>
                                                                <a href="javascript:void(0)" class="link text-secondary duration-300 cursor-pointer"> Dragon </a>
                                                            </li>
                                                            <li>
                                                                <a href="javascript:void(0)" class="link text-secondary duration-300 cursor-pointer"> Mango </a>
                                                            </li>
                                                            <li>
                                                                <a href="javascript:void(0)" class="link text-secondary duration-300 view-all-btn"> View All </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="nav-item">
                                                        <div class="text-button-uppercase pb-2">Syrup</div>
                                                        <ul>
                                                            <li>
                                                                <a href="javascript:void(0)" class="link text-secondary duration-300 cursor-pointer"> Mint Syrup </a>
                                                            </li>
                                                            <li>
                                                                <a href="javascript:void(0)" class="link text-secondary duration-300 cursor-pointer"> Mojito Syrup </a>
                                                            </li>
                                                            <li>
                                                                <a href="javascript:void(0)" class="link text-secondary duration-300 cursor-pointer"> Pina Colada Syrup </a>
                                                            </li>
                                                            <li>
                                                                <a href="javascript:void(0)" class="link text-secondary duration-300 cursor-pointer"> Cherry Syrup </a>
                                                            </li>
                                                            <li>
                                                                <a href="javascript:void(0)" class="link text-secondary duration-300 view-all-btn"> View All </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="nav-item">
                                                        <div class="text-button-uppercase pb-2">Klija for you biscuits </div>
                                                        <ul>
                                                            <li>
                                                                <a href="javascript:void(0)" class="link text-secondary duration-300 cursor-pointer"> honey flavor black seed </a>
                                                            </li>
                                                            <li>
                                                                <a href="javascript:void(0)" class="link text-secondary duration-300 cursor-pointer"> Cardamom Flavor </a>
                                                            </li>
                                                            <li>
                                                                <a href="javascript:void(0)" class="link text-secondary duration-300 cursor-pointer"> fennel flavor black seed </a>
                                                            </li>
                                                            <li>
                                                                <a href="javascript:void(0)" class="link text-secondary duration-300 cursor-pointer"> biscuits with coffee </a>
                                                            </li>
                                                            <li>
                                                                <a href="javascript:void(0)" class="link text-secondary duration-300 view-all-btn"> View All </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="nav-item">
                                                        <div class="text-button-uppercase pb-2">Start oat biscuits</div>
                                                        <ul>
                                                            <li>
                                                                <a href="javascript:void(0)" class="link text-secondary duration-300 cursor-pointer"> Original </a>
                                                            </li>
                                                            <li>
                                                                <a href="javascript:void(0)" class="link text-secondary duration-300 cursor-pointer"> Honey Flavor </a>
                                                            </li>
                                                            <li>
                                                                <a href="javascript:void(0)" class="link text-secondary duration-300 cursor-pointer"> coconut flavour </a>
                                                            </li>
                                                            <li>
                                                                <a href="javascript:void(0)" class="link text-secondary duration-300 cursor-pointer"> biscuits without sugar </a>
                                                            </li>
                                                            <li>
                                                                <a href="javascript:void(0)" class="link text-secondary duration-300 view-all-btn"> View All </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="nav-item">
                                                        <div class="text-button-uppercase pb-2">bono star</div>
                                                        <ul>
                                                            <li>
                                                                <a href="javascript:void(0)" class="link text-secondary duration-300 cursor-pointer"> bono star chocolate </a>
                                                            </li>
                                                            <li>
                                                                <a href="javascript:void(0)" class="link text-secondary duration-300 cursor-pointer"> bono star dark </a>
                                                            </li>
                                                            <li>
                                                                <a href="javascript:void(0)" class="link text-secondary duration-300 cursor-pointer"> bono star crunuch </a>
                                                            </li>

                                                            <li>
                                                                <a href="javascript:void(0)" class="link text-secondary duration-300 view-all-btn"> View All </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="nav-item">
                                                        <div class="text-button-uppercase pb-2">Others</div>
                                                        <ul>
                                                            <li>
                                                                <a href="javascript:void(0)" class="link text-secondary duration-300 cursor-pointer"> bono star chocolate </a>
                                                            </li>
                                                            <li>
                                                                <a href="javascript:void(0)" class="link text-secondary duration-300 cursor-pointer"> bono star dark </a>
                                                            </li>
                                                            <li>
                                                                <a href="javascript:void(0)" class="link text-secondary duration-300 cursor-pointer"> bono star crunuch </a>
                                                            </li>

                                                            <li>
                                                                <a href="javascript:void(0)" class="link text-secondary duration-300 cursor-pointer"> bono star Chocolate </a>
                                                            </li>
                                                            <li>
                                                                <a href="javascript:void(0)" class="link text-secondary duration-300 view-all-btn"> View All </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="h-full">
                                    <a href="{{ route('innerpages.Allproducts') }}" class="text-button-uppercase duration-300 h-full flex items-center justify-center" data-translate-key="category"> Products </a> </a>
                                    <div class="mega-menu absolute top-[74px] left-0 bg-white w-screen">
                                        <!-- <div class="container">
                                            <div class="flex justify-between py-8">
                                                <div class="nav-link basis-2/3 flex justify-between pr-12">
                                                    <div class="nav-item">
                                                        <div class="text-button-uppercase pb-2">Shop Features</div>
                                                        <ul>
                                                            <li>
                                                                <a href="shop-breadcrumb-img.html" class="link text-secondary duration-300"> Shop Breadcrumb IMG </a>
                                                            </li>
                                                            <li>
                                                                <a href="javascript:void(0)" class="link text-secondary duration-300"> Shop Breadcrumb 1 </a>
                                                            </li>
                                                            <li>
                                                                <a href="shop-breadcrumb2.html" class="link text-secondary duration-300"> Shop Breadcrumb 2 </a>
                                                            </li>
                                                            <li>
                                                                <a href="shop-collection.html" class="link text-secondary duration-300"> Shop Collection </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="nav-item">
                                                        <div class="text-button-uppercase pb-2">Shop Features</div>
                                                        <ul>
                                                            <li>
                                                                <a href="shop-filter-canvas.html" class="link text-secondary duration-300"> Shop Filter Canvas </a>
                                                            </li>
                                                            <li>
                                                                <a href="shop-filter-options.html" class="link text-secondary duration-300"> Shop Filter Options </a>
                                                            </li>
                                                            <li>
                                                                <a href="shop-filter-dropdown.html" class="link text-secondary duration-300"> Shop Filter Dropdown </a>
                                                            </li>
                                                            <li>
                                                                <a href="shop-sidebar-list.html" class="link text-secondary duration-300"> Shop Sidebar List </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="nav-item">
                                                        <div class="text-button-uppercase pb-2">Shop Layout</div>
                                                        <ul>
                                                            <li>
                                                                <a href="shop-default.html" class="link text-secondary duration-300 cursor-pointer"> Shop Default </a>
                                                            </li>
                                                            <li>
                                                                <a href="shop-default-grid.html" class="link text-secondary duration-300 cursor-pointer"> Shop Default Grid </a>
                                                            </li>
                                                            <li>
                                                                <a href="shop-default-list.html" class="link text-secondary duration-300 cursor-pointer"> Shop Default List </a>
                                                            </li>
                                                            <li>
                                                                <a href="shop-fullwidth.html" class="link text-secondary duration-300 cursor-pointer"> Shop Full Width </a>
                                                            </li>
                                                            <li>
                                                                <a href="shop-square.html" class="link text-secondary duration-300"> Shop Square </a>
                                                            </li>
                                                            <li>
                                                                <a href="checkout.html" class="link text-secondary duration-300"> Checkout </a>
                                                            </li>
                                                            <li>
                                                                <a href="checkout2.html" class="link text-secondary duration-300"> Checkout Style 2 </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="nav-item">
                                                        <div class="text-button-uppercase pb-2">Products Pages</div>
                                                        <ul>
                                                            <li>
                                                                <a href="wishlist.html" class="link text-secondary duration-300"> Wish List </a>
                                                            </li>
                                                            <li>
                                                                <a href="search-result.html" class="link text-secondary duration-300"> Search Result </a>
                                                            </li>
                                                            <li>
                                                                <a href="cart.html" class="link text-secondary duration-300"> Shopping Cart </a>
                                                            </li>
                                                            <li>
                                                                <a href="login.html" class="link text-secondary duration-300"> Login/Register </a>
                                                            </li>
                                                            <li>
                                                                <a href="forgot-password.html" class="link text-secondary duration-300"> Forgot Password </a>
                                                            </li>
                                                            <li>
                                                                <a href="order-tracking.html" class="link text-secondary duration-300"> Order Tracking </a>
                                                            </li>
                                                            <li>
                                                                <a href="my-account.html" class="link text-secondary duration-300"> My Account </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="recent-product pl-2.5 basis-1/3">
                                                    <div class="text-button-uppercase pb-2">Recent Products</div>
                                                    <div class="list-product hide-product-sold grid grid-cols-2 gap-5 mt-3">
                                                        <div class="product-item grid-type" data-item="1">
                                                            <div class="product-main cursor-pointer block">
                                                                <div class="product-thumb bg-white relative overflow-hidden rounded-2xl">
                                                                    <div class="product-tag text-button-uppercase bg-green px-3 py-0.5 inline-block rounded-full absolute top-3 left-3 z-[1]">New</div>
                                                                    <div class="list-action-right absolute top-3 right-3 max-lg:hidden">
                                                                        <div class="add-wishlist-btn w-[32px] h-[32px] flex items-center justify-center rounded-full bg-white duration-300 relative">
                                                                            <div class="tag-action bg-black text-white caption2 px-1.5 py-0.5 rounded-sm">Add To Wishlist</div>
                                                                            <i class="ph ph-heart text-lg"></i>
                                                                        </div>
                                                                        <div class="compare-btn w-[32px] h-[32px] flex items-center justify-center rounded-full bg-white duration-300 relative mt-2">
                                                                            <div class="tag-action bg-black text-white caption2 px-1.5 py-0.5 rounded-sm">Compare Product</div>
                                                                            <i class="ph ph-arrow-counter-clockwise text-lg compare-icon"></i>
                                                                            <i class="ph ph-check-circle text-lg checked-icon"></i>
                                                                        </div>
                                                                    </div>
                                                                    <div class="product-img w-full h-full aspect-[3/4]">
                                                                        <img class="w-full h-full object-cover duration-700" src="./assets/images/product/1000x1000.png" alt="img" />
                                                                        <img class="w-full h-full object-cover duration-700" src="./assets/images/product/1000x1000.png" alt="img" />
                                                                    </div>
                                                                    <div class="list-action grid grid-cols-2 gap-3 px-5 absolute w-full bottom-5 max-lg:hidden">
                                                                        <div class="quick-view-btn w-full text-button-uppercase py-2 text-center rounded-full duration-300 bg-white hover:bg-black hover:text-white">Quick View</div>
                                                                        <div class="add-cart-btn w-full text-button-uppercase py-2 text-center rounded-full duration-500 bg-white hover:bg-black hover:text-white">Add To Cart</div>
                                                                    </div>
                                                                </div>
                                                                <div class="product-infor mt-4 lg:mb-7">
                                                                    <div class="product-sold sm:pb-4 pb-2">
                                                                        <div class="progress bg-line h-1.5 w-full rounded-full overflow-hidden relative">
                                                                            <div class="progress-sold bg-red absolute left-0 top-0 h-full"></div>
                                                                        </div>
                                                                        <div class="flex items-center justify-between gap-3 gap-y-1 flex-wrap mt-2">
                                                                            <div class="text-button-uppercase">
                                                                                <span class="text-secondary2 max-sm:text-xs">Sold: </span>
                                                                                <span class="max-sm:text-xs">12</span>
                                                                            </div>
                                                                            <div class="text-button-uppercase">
                                                                                <span class="text-secondary2 max-sm:text-xs">Available: </span>
                                                                                <span class="max-sm:text-xs">88</span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="product-name text-title duration-300">Faux-leather trousers</div>
                                                                    <div class="list-color py-2 max-md:hidden flex items-center gap-3 flex-wrap duration-500">
                                                                        <div class="color-item bg-black w-8 h-8 rounded-full duration-300 relative">
                                                                            <div class="tag-action bg-black text-white caption2 capitalize px-1.5 py-0.5 rounded-sm">Black</div>
                                                                        </div>
                                                                        <div class="color-item bg-green w-8 h-8 rounded-full duration-300 relative">
                                                                            <div class="tag-action bg-black text-white caption2 capitalize px-1.5 py-0.5 rounded-sm">Green</div>
                                                                        </div>
                                                                        <div class="color-item bg-red w-8 h-8 rounded-full duration-300 relative">
                                                                            <div class="tag-action bg-black text-white caption2 capitalize px-1.5 py-0.5 rounded-sm">Red</div>
                                                                        </div>
                                                                    </div>

                                                                    <div class="product-price-block flex items-center gap-2 flex-wrap mt-1 duration-300 relative z-[1]">
                                                                        <div class="product-price text-title">$40.00</div>
                                                                        <div class="product-origin-price caption1 text-secondary2">
                                                                            <del>$50.00</del>
                                                                        </div>
                                                                        <div class="product-sale caption1 font-medium bg-green px-3 py-0.5 inline-block rounded-full">-20%</div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="product-item grid-type" data-item="3">
                                                            <div class="product-main cursor-pointer block">
                                                                <div class="product-thumb bg-white relative overflow-hidden rounded-2xl">
                                                                    <div class="product-tag text-button-uppercase bg-green px-3 py-0.5 inline-block rounded-full absolute top-3 left-3 z-[1]">New</div>
                                                                    <div class="list-action-right absolute top-3 right-3 max-lg:hidden">
                                                                        <div class="add-wishlist-btn w-[32px] h-[32px] flex items-center justify-center rounded-full bg-white duration-300 relative">
                                                                            <div class="tag-action bg-black text-white caption2 px-1.5 py-0.5 rounded-sm">Add To Wishlist</div>
                                                                            <i class="ph ph-heart text-lg"></i>
                                                                        </div>
                                                                        <div class="compare-btn w-[32px] h-[32px] flex items-center justify-center rounded-full bg-white duration-300 relative mt-2">
                                                                            <div class="tag-action bg-black text-white caption2 px-1.5 py-0.5 rounded-sm">Compare Product</div>
                                                                            <i class="ph ph-arrow-counter-clockwise text-lg compare-icon"></i>
                                                                            <i class="ph ph-check-circle text-lg checked-icon"></i>
                                                                        </div>
                                                                    </div>
                                                                    <div class="product-img w-full h-full aspect-[3/4]">
                                                                        <img class="w-full h-full object-cover duration-700" src="./assets/images/product/1000x1000.png" alt="img" />
                                                                        <img class="w-full h-full object-cover duration-700" src="./assets/images/product/1000x1000.png" alt="img" />
                                                                    </div>
                                                                    <div class="list-action grid grid-cols-2 gap-3 px-5 absolute w-full bottom-5 max-lg:hidden">
                                                                        <div class="quick-view-btn w-full text-button-uppercase py-2 text-center rounded-full duration-300 bg-white hover:bg-black hover:text-white">Quick View</div>
                                                                        <div class="add-cart-btn w-full text-button-uppercase py-2 text-center rounded-full duration-500 bg-white hover:bg-black hover:text-white">Add To Cart</div>
                                                                    </div>
                                                                </div>
                                                                <div class="product-infor mt-4 lg:mb-7">
                                                                    <div class="product-sold sm:pb-4 pb-2">
                                                                        <div class="progress bg-line h-1.5 w-full rounded-full overflow-hidden relative">
                                                                            <div class="progress-sold bg-red absolute left-0 top-0 h-full"></div>
                                                                        </div>
                                                                        <div class="flex items-center justify-between gap-3 gap-y-1 flex-wrap mt-2">
                                                                            <div class="text-button-uppercase">
                                                                                <span class="text-secondary2 max-sm:text-xs">Sold: </span>
                                                                                <span class="max-sm:text-xs">12</span>
                                                                            </div>
                                                                            <div class="text-button-uppercase">
                                                                                <span class="text-secondary2 max-sm:text-xs">Available: </span>
                                                                                <span class="max-sm:text-xs">88</span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="product-name text-title duration-300">Off-the-Shoulder Blouse</div>
                                                                    <div class="list-color py-2 max-md:hidden flex items-center gap-3 flex-wrap duration-500">
                                                                        <div class="color-item bg-red w-8 h-8 rounded-full duration-300 relative">
                                                                            <div class="tag-action bg-black text-white caption2 capitalize px-1.5 py-0.5 rounded-sm">Red</div>
                                                                        </div>
                                                                        <div class="color-item bg-yellow w-8 h-8 rounded-full duration-300 relative">
                                                                            <div class="tag-action bg-black text-white caption2 capitalize px-1.5 py-0.5 rounded-sm">yellow</div>
                                                                        </div>
                                                                        <div class="color-item bg-green w-8 h-8 rounded-full duration-300 relative">
                                                                            <div class="tag-action bg-black text-white caption2 capitalize px-1.5 py-0.5 rounded-sm">green</div>
                                                                        </div>
                                                                    </div>

                                                                    <div class="product-price-block flex items-center gap-2 flex-wrap mt-1 duration-300 relative z-[1]">
                                                                        <div class="product-price text-title">$40.00</div>
                                                                        <div class="product-origin-price caption1 text-secondary2">
                                                                            <del>$50.00</del>
                                                                        </div>
                                                                        <div class="product-sale caption1 font-medium bg-green px-3 py-0.5 inline-block rounded-full">-20%</div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div> -->
                                </li>

                                <li class="h-full">
                                    <a href="{{ route('innerpages.about-us') }}" class="text-button-uppercase duration-300 h-full flex items-center justify-center" data-translate-key="aboutus"> About Us </a> </a>
                                </li>
                                <li class="h-full">
                                    <a href="{{ route('innerpages.contact-us') }}" class="text-button-uppercase duration-300 h-full flex items-center justify-center" data-translate-key="contactus"> Contact Us </a> </a>
                                </li>
                            </ul>
                        </div>
                    </div>


                </div>
            </div>
        </div>

        <!-- Menu Mobile -->
        <div id="menu-mobile" class="">
            <div class="menu-container bg-white h-full">
                <div class="container h-full">
                    <div class="menu-main h-full overflow-hidden">
                        <div class="heading py-2 relative flex items-center justify-center">
                            <div class="close-menu-mobile-btn absolute left-0 top-1/2 -translate-y-1/2 w-6 h-6 rounded-full bg-surface flex items-center justify-center">
                                <i class="ph ph-x text-sm"></i>
                            </div>
                            <a href="index.html" class="logo text-3xl font-semibold text-center">Anvogue</a>
                        </div>
                        <div class="form-search relative mt-2">
                            <i class="ph ph-magnifying-glass text-xl absolute left-3 top-1/2 -translate-y-1/2 cursor-pointer"></i>
                            <input type="text" placeholder="What are you looking for?" class="h-12 rounded-lg border border-line text-sm w-full pl-10 pr-4" />
                        </div>
                        <div class="list-nav mt-6">
                            <ul>
                                <li>
                                    <a href="#!" class="text-xl font-semibold flex items-center justify-between">Demo
                                        <span class="text-right">
                                            <i class="ph ph-caret-right text-xl"></i>
                                        </span>
                                    </a>
                                    <div class="sub-nav-mobile">
                                        <div class="back-btn flex items-center gap-3">
                                            <i class="ph ph-caret-left text-xl"></i>
                                            Back
                                        </div>
                                        <div class="list-nav-item w-full grid grid-cols-2 pt-2 pb-6">
                                            <ul>
                                                <li>
                                                    <a href="index.html" class="nav-item-mobile link text-secondary duration-300 active"> Home Fashion 1 </a>
                                                </li>
                                                <li>
                                                    <a href="fashion2.html" class="nav-item-mobile link text-secondary duration-300"> Home Fashion 2 </a>
                                                </li>
                                                <li>
                                                    <a href="fashion3.html" class="nav-item-mobile link text-secondary duration-300"> Home Fashion 3 </a>
                                                </li>
                                                <li>
                                                    <a href="fashion4.html" class="nav-item-mobile link text-secondary duration-300"> Home Fashion 4 </a>
                                                </li>
                                                <li>
                                                    <a href="fashion5.html" class="nav-item-mobile link text-secondary duration-300"> Home Fashion 5 </a>
                                                </li>
                                                <li>
                                                    <a href="fashion6.html" class="nav-item-mobile link text-secondary duration-300"> Home Fashion 6 </a>
                                                </li>
                                                <li>
                                                    <a href="fashion7.html" class="nav-item-mobile link text-secondary duration-300"> Home Fashion 7 </a>
                                                </li>
                                                <li>
                                                    <a href="fashion8.html" class="nav-item-mobile link text-secondary duration-300"> Home Fashion 8 </a>
                                                </li>
                                                <li>
                                                    <a href="fashion9.html" class="nav-item-mobile link text-secondary duration-300"> Home Fashion 9 </a>
                                                </li>
                                                <li>
                                                    <a href="fashion10.html" class="nav-item-mobile link text-secondary duration-300"> Home Fashion 10 </a>
                                                </li>
                                                <li>
                                                    <a href="fashion11.html" class="nav-item-mobile link text-secondary duration-300"> Home Fashion 11 </a>
                                                </li>
                                            </ul>
                                            <ul>
                                                <li>
                                                    <a href="underwear.html" class="nav-item-mobile link text-secondary duration-300"> Home Underwear </a>
                                                </li>
                                                <li>
                                                    <a href="cosmetic1.html" class="nav-item-mobile link text-secondary duration-300"> Home Cosmetic 1 </a>
                                                </li>
                                                <li>
                                                    <a href="cosmetic2.html" class="nav-item-mobile link text-secondary duration-300"> Home Cosmetic 2 </a>
                                                </li>
                                                <li>
                                                    <a href="cosmetic3.html" class="nav-item-mobile link text-secondary duration-300"> Home Cosmetic 3 </a>
                                                </li>
                                                <li>
                                                    <a href="pet.html" class="nav-item-mobile link text-secondary duration-300"> Home Pet Store </a>
                                                </li>
                                                <li>
                                                    <a href="jewelry.html" class="nav-item-mobile link text-secondary duration-300"> Home Jewelry </a>
                                                </li>
                                                <li>
                                                    <a href="furniture.html" class="nav-item-mobile link text-secondary duration-300"> Home Furniture </a>
                                                </li>
                                                <li>
                                                    <a href="watch.html" class="nav-item-mobile link text-secondary duration-300"> Home Watch </a>
                                                </li>
                                                <li>
                                                    <a href="toys.html" class="nav-item-mobile link text-secondary duration-300"> Home Toys Kid </a>
                                                </li>
                                                <li>
                                                    <a href="yoga.html" class="nav-item-mobile link text-secondary duration-300"> Home Yoga </a>
                                                </li>
                                                <li>
                                                    <a href="organic.html" class="nav-item-mobile link text-secondary duration-300"> Home Organic </a>
                                                </li>
                                                <li>
                                                    <a href="marketplace.html" class="nav-item-mobile link text-secondary duration-300"> Home Marketplace </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <a href="#!" class="text-xl font-semibold flex items-center justify-between mt-5">Features
                                        <span class="text-right">
                                            <i class="ph ph-caret-right text-xl"></i>
                                        </span>
                                    </a>
                                    <div class="sub-nav-mobile">
                                        <div class="back-btn flex items-center gap-3">
                                            <i class="ph ph-caret-left text-xl"></i>
                                            Back
                                        </div>
                                        <div class="list-nav-item w-full pt-2 pb-6">
                                            <div class="nav-link grid grid-cols-2 gap-5 gap-y-6">
                                                <div class="nav-item">
                                                    <div class="text-button-uppercase pb-1">For Men</div>
                                                    <ul>
                                                        <li>
                                                            <a href="javascript:void(0)" class="link text-secondary duration-300 cursor-pointer"> Starting From 50% Off </a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0)" class="link text-secondary duration-300 cursor-pointer"> Outerwear | Coats </a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0)" class="link text-secondary duration-300 cursor-pointer"> Sweaters | Cardigans </a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0)" class="link text-secondary duration-300 cursor-pointer"> Shirt | Sweatshirts </a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0)" class="link text-secondary duration-300 view-all-btn"> View All </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="nav-item">
                                                    <div class="text-button-uppercase pb-1">Skincare</div>
                                                    <ul>
                                                        <li>
                                                            <a href="javascript:void(0)" class="link text-secondary duration-300 cursor-pointer"> Faces Skin </a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0)" class="link text-secondary duration-300 cursor-pointer"> Eyes Makeup </a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0)" class="link text-secondary duration-300 cursor-pointer"> Lip Polish </a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0)" class="link text-secondary duration-300 cursor-pointer"> Hair Care </a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0)" class="link text-secondary duration-300 view-all-btn"> View All </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="nav-item">
                                                    <div class="text-button-uppercase pb-1">Health</div>
                                                    <ul>
                                                        <li>
                                                            <a href="javascript:void(0)" class="link text-secondary duration-300 cursor-pointer"> Cented Candle </a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0)" class="link text-secondary duration-300 cursor-pointer"> Health Drinks </a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0)" class="link text-secondary duration-300 cursor-pointer"> Yoga Clothes </a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0)" class="link text-secondary duration-300 cursor-pointer"> Yoga Equipment </a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0)" class="link text-secondary duration-300 view-all-btn"> View All </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="nav-item">
                                                    <div class="text-button-uppercase pb-1">For Women</div>
                                                    <ul>
                                                        <li>
                                                            <a href="javascript:void(0)" class="link text-secondary duration-300 cursor-pointer"> Starting From 60% Off </a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0)" class="link text-secondary duration-300 cursor-pointer"> Dresses | Jumpsuits </a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0)" class="link text-secondary duration-300 cursor-pointer"> T-shirts | Sweatshirts </a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0)" class="link text-secondary duration-300 cursor-pointer"> Accessories | Jewelry </a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0)" class="link text-secondary duration-300 view-all-btn"> View All </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="nav-item">
                                                    <div class="text-button-uppercase pb-1">For Kid</div>
                                                    <ul>
                                                        <li>
                                                            <a href="javascript:void(0)" class="link text-secondary duration-300 cursor-pointer"> Kids Bed </a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0)" class="link text-secondary duration-300 cursor-pointer"> Boy's Toy </a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0)" class="link text-secondary duration-300 cursor-pointer"> Baby Blanket </a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0)" class="link text-secondary duration-300 cursor-pointer"> Newborn Clothing </a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0)" class="link text-secondary duration-300 view-all-btn"> View All </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="nav-item">
                                                    <div class="text-button-uppercase pb-1">For Home</div>
                                                    <ul>
                                                        <li>
                                                            <a href="javascript:void(0)" class="link text-secondary duration-300 cursor-pointer"> Furniture | Decor </a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0)" class="link text-secondary duration-300 cursor-pointer"> Table | Living Room </a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0)" class="link text-secondary duration-300 cursor-pointer"> Chair | Work Room </a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0)" class="link text-secondary duration-300 cursor-pointer"> Lighting | Bed Room </a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0)" class="link text-secondary duration-300 view-all-btn"> View All </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <a href="#!" class="text-xl font-semibold flex items-center justify-between mt-5">Shop
                                        <span class="text-right">
                                            <i class="ph ph-caret-right text-xl"></i>
                                        </span>
                                    </a>
                                    <div class="sub-nav-mobile">
                                        <div class="back-btn flex items-center gap-3">
                                            <i class="ph ph-caret-left text-xl"></i>
                                            Back
                                        </div>
                                        <div class="list-nav-item w-full pt-2 pb-6">
                                            <div class="nav-link grid grid-cols-2 gap-5 gap-y-6 justify-between">
                                                <div class="nav-item">
                                                    <div class="text-button-uppercase pb-1">Shop Features</div>
                                                    <ul>
                                                        <li>
                                                            <a href="shop-breadcrumb-img.html" class="link text-secondary duration-300"> Shop Breadcrumb IMG </a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0)" class="link text-secondary duration-300"> Shop Breadcrumb 1 </a>
                                                        </li>
                                                        <li>
                                                            <a href="shop-breadcrumb2.html" class="link text-secondary duration-300"> Shop Breadcrumb 2 </a>
                                                        </li>
                                                        <li>
                                                            <a href="shop-collection.html" class="link text-secondary duration-300"> Shop Collection </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="nav-item">
                                                    <div class="text-button-uppercase pb-1">Shop Features</div>
                                                    <ul>
                                                        <li>
                                                            <a href="shop-filter-canvas.html" class="link text-secondary duration-300"> Shop Filter Canvas </a>
                                                        </li>
                                                        <li>
                                                            <a href="shop-filter-options.html" class="link text-secondary duration-300"> Shop Filter Options </a>
                                                        </li>
                                                        <li>
                                                            <a href="shop-filter-dropdown.html" class="link text-secondary duration-300"> Shop Filter Dropdown </a>
                                                        </li>
                                                        <li>
                                                            <a href="shop-sidebar-list.html" class="link text-secondary duration-300"> Shop Sidebar List </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="nav-item">
                                                    <div class="text-button-uppercase pb-1">Shop Layout</div>
                                                    <ul>
                                                        <li>
                                                            <a href="shop-default.html" class="link text-secondary duration-300 cursor-pointer"> Shop Default </a>
                                                        </li>
                                                        <li>
                                                            <a href="shop-default-grid.html" class="link text-secondary duration-300 cursor-pointer"> Shop Default Grid </a>
                                                        </li>
                                                        <li>
                                                            <a href="shop-default-list.html" class="link text-secondary duration-300 cursor-pointer"> Shop Default List </a>
                                                        </li>
                                                        <li>
                                                            <a href="shop-fullwidth.html" class="link text-secondary duration-300 cursor-pointer"> Shop Full Width </a>
                                                        </li>
                                                        <li>
                                                            <a href="shop-square.html" class="link text-secondary duration-300"> Shop Square </a>
                                                        </li>
                                                        <li>
                                                            <a href="checkout.html" class="link text-secondary duration-300"> Checkout </a>
                                                        </li>
                                                        <li>
                                                            <a href="checkout2.html" class="link text-secondary duration-300"> Checkout Style 2 </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="nav-item">
                                                    <div class="text-button-uppercase pb-1">Products Pages</div>
                                                    <ul>
                                                        <li>
                                                            <a href="wishlist.html" class="link text-secondary duration-300"> Wish List </a>
                                                        </li>
                                                        <li>
                                                            <a href="search-result.html" class="link text-secondary duration-300"> Search Result </a>
                                                        </li>
                                                        <li>
                                                            <a href="cart.html" class="link text-secondary duration-300"> Shopping Cart </a>
                                                        </li>
                                                        <li>
                                                            <a href="login.html" class="link text-secondary duration-300"> Login/Register </a>
                                                        </li>
                                                        <li>
                                                            <a href="forgot-password.html" class="link text-secondary duration-300"> Forgot Password </a>
                                                        </li>
                                                        <li>
                                                            <a href="order-tracking.html" class="link text-secondary duration-300"> Order Tracking </a>
                                                        </li>
                                                        <li>
                                                            <a href="my-account.html" class="link text-secondary duration-300"> My Account </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <a href="#!" class="text-xl font-semibold flex items-center justify-between mt-5">Product
                                        <span class="text-right">
                                            <i class="ph ph-caret-right text-xl"></i>
                                        </span>
                                    </a>
                                    <div class="sub-nav-mobile">
                                        <div class="back-btn flex items-center gap-3">
                                            <i class="ph ph-caret-left text-xl"></i>
                                            Back
                                        </div>
                                        <div class="list-nav-item w-full pt-2 pb-6">
                                            <div class="nav-link grid grid-cols-2 gap-5 gap-y-6 justify-between">
                                                <div class="nav-item">
                                                    <div class="text-button-uppercase pb-1">Products Features</div>
                                                    <ul>
                                                        <li>
                                                            <a href="product-default.html" class="link text-secondary duration-300"> Products Defaults </a>
                                                        </li>
                                                        <li>
                                                            <a href="product-sale.html" class="link text-secondary duration-300"> Products Sale </a>
                                                        </li>
                                                        <li>
                                                            <a href="product-countdown-timer.html" class="link text-secondary duration-300"> Products Countdown Timer </a>
                                                        </li>
                                                        <li>
                                                            <a href="product-grouped.html" class="link text-secondary duration-300"> Products Grouped </a>
                                                        </li>
                                                        <li>
                                                            <a href="product-bought-together.html" class="link text-secondary duration-300"> Frequently Bought Together </a>
                                                        </li>
                                                        <li>
                                                            <a href="product-out-of-stock.html" class="link text-secondary duration-300"> Products Out Of Stock </a>
                                                        </li>
                                                        <li>
                                                            <a href="product-variable.html" class="link text-secondary duration-300"> Products Variable </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="nav-item">
                                                    <div class="text-button-uppercase pb-1">Products Features</div>
                                                    <ul>
                                                        <li>
                                                            <a href="product-external.html" class="link text-secondary duration-300"> Products External </a>
                                                        </li>
                                                        <li>
                                                            <a href="product-on-sale.html" class="link text-secondary duration-300"> Products On Sale </a>
                                                        </li>
                                                        <li>
                                                            <a href="product-discount.html" class="link text-secondary duration-300"> Products With Discount </a>
                                                        </li>
                                                        <li>
                                                            <a href="product-sidebar.html" class="link text-secondary duration-300"> Products With Sidebar </a>
                                                        </li>
                                                        <li>
                                                            <a href="product-fixed-price.html" class="link text-secondary duration-300"> Products Fixed Price </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="nav-item">
                                                    <div class="text-button-uppercase pb-1">Products Layout</div>
                                                    <ul>
                                                        <li>
                                                            <a href="product-thumbnail-left.html" class="link text-secondary duration-300 cursor-pointer"> Products Thumbnails Left </a>
                                                        </li>
                                                        <li>
                                                            <a href="product-thumbnail-bottom.html" class="link text-secondary duration-300 cursor-pointer"> Products Thumbnails Bottom </a>
                                                        </li>
                                                        <li>
                                                            <a href="product-one-scrolling.html" class="link text-secondary duration-300 cursor-pointer"> Products Grid 1 Scrolling </a>
                                                        </li>
                                                        <li>
                                                            <a href="product-two-scrolling.html" class="link text-secondary duration-300 cursor-pointer"> Products Grid 2 Scrolling </a>
                                                        </li>
                                                        <li>
                                                            <a href="product-combined-one.html" class="link text-secondary duration-300 cursor-pointer"> Products Combined 1 </a>
                                                        </li>
                                                        <li>
                                                            <a href="product-combined-two.html" class="link text-secondary duration-300 cursor-pointer"> Products Combined 2 </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="nav-item">
                                                    <div class="text-button-uppercase pb-1">Products Styles</div>
                                                    <ul>
                                                        <li>
                                                            <a href="product-style1.html" class="link text-secondary duration-300 cursor-pointer"> Products Style 01 </a>
                                                        </li>
                                                        <li>
                                                            <a href="product-style2.html" class="link text-secondary duration-300 cursor-pointer"> Products Style 02 </a>
                                                        </li>
                                                        <li>
                                                            <a href="product-style3.html" class="link text-secondary duration-300 cursor-pointer"> Products Style 03 </a>
                                                        </li>
                                                        <li>
                                                            <a href="product-style4.html" class="link text-secondary duration-300 cursor-pointer"> Products Style 04 </a>
                                                        </li>
                                                        <li>
                                                            <a href="product-style5.html" class="link text-secondary duration-300 cursor-pointer"> Products Style 05 </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <a href="#!" class="text-xl font-semibold flex items-center justify-between mt-5">Blog
                                        <span class="text-right">
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
                                                    <a href="blog-default.html" class="link text-secondary duration-300"> Blog Default </a>
                                                </li>
                                                <li>
                                                    <a href="blog-list.html" class="link text-secondary duration-300"> Blog List </a>
                                                </li>
                                                <li>
                                                    <a href="blog-grid.html" class="link text-secondary duration-300"> Blog Grid </a>
                                                </li>
                                                <li>
                                                    <a href="blog-detail1.html" class="link text-secondary duration-300"> Blog Detail 1 </a>
                                                </li>
                                                <li>
                                                    <a href="blog-detail2.html" class="link text-secondary duration-300"> Blog Detail 2 </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <a href="#!" class="text-xl font-semibold flex items-center justify-between mt-5">Pages
                                        <span class="text-right">
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
                                                    <a href="about.html" class="link text-secondary duration-300"> About Us </a>
                                                </li>
                                                <li>
                                                    <a href="contact.html" class="link text-secondary duration-300"> Contact Us </a>
                                                </li>
                                                <li>
                                                    <a href="store-list.html" class="link text-secondary duration-300"> Store List </a>
                                                </li>
                                                <li>
                                                    <a href="page-not-found.html" class="link text-secondary duration-300"> 404 </a>
                                                </li>
                                                <li>
                                                    <a href="faqs.html" class="link text-secondary duration-300"> FAQs </a>
                                                </li>
                                                <li>
                                                    <a href="coming-soon.html" class="link text-secondary duration-300"> Coming Soon </a>
                                                </li>
                                                <li>
                                                    <a href="customer-feedbacks.html" class="link text-secondary duration-300"> Customer Feedbacks </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Menu bar -->
        <div class="menu_bar fixed bg-white bottom-0 left-0 w-full h-[70px] sm:hidden z-[101]">
            <div class="menu_bar-inner grid grid-cols-4 items-center h-full">
                <a href="index.html" class="menu_bar-link flex flex-col items-center ">
                    <span class="ph-bold ph-house text-2xl block"></span>
                    <span class="menu_bar-title caption2 font-semibold">Home</span>
                </a>
                <a href="shop-filter-canvas.html" class="menu_bar-link flex flex-col items-center ">
                    <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="#000000" viewBox="0 0 256 256"><path d="M104,192a8,8,0,0,1-8,8H80a8,8,0,0,1,0-16H96A8,8,0,0,1,104,192Zm72-8H160a8,8,0,0,0,0,16h16a8,8,0,0,0,0-16Zm-76-48a12,12,0,1,0-12-12A12,12,0,0,0,100,136Zm56,0a12,12,0,1,0-12-12A12,12,0,0,0,156,136Zm88.39-13.88A16,16,0,0,1,232,128H200v32a40,40,0,0,1-24,72H80a40,40,0,0,1-24-72V128H24A16,16,0,0,1,8.31,109,56.13,56.13,0,0,1,63.22,64h1.64A55.83,55.83,0,0,1,48,24a8,8,0,0,1,16,0,40,40,0,0,0,40,40h48a40,40,0,0,0,40-40,8,8,0,0,1,16,0,55.83,55.83,0,0,1-16.86,40h1.64a56.13,56.13,0,0,1,54.91,45A15.82,15.82,0,0,1,244.39,122.12ZM72,152.8a40.57,40.57,0,0,1,8-.8h96a40.57,40.57,0,0,1,8,.8V104a24,24,0,0,0-24-24H96a24,24,0,0,0-24,24ZM56,112v-8a39.81,39.81,0,0,1,8-24h-.8A40.09,40.09,0,0,0,24,112Zm144,80a24,24,0,0,0-24-24H80a24,24,0,0,0,0,48h96A24,24,0,0,0,200,192Zm32-80a40.08,40.08,0,0,0-39.2-32H192a39.81,39.81,0,0,1,8,24v8Z"></path></svg>
                    <span class="menu_bar-title caption2 font-semibold">Products</span>
                </a>
                <a href="shop-filter-canvas.html" class="menu_bar-link flex flex-col items-center ">
                <span class="ph-bold ph-info text-2xl block"></span>
                    <span class="menu_bar-title caption2 font-semibold">About Us</span>
                </a>
                <a href="shop-filter-canvas.html" class="menu_bar-link flex flex-col items-center ">
                <span class="ph-bold ph-phone text-2xl block"></span>
                <span class="menu_bar-title caption2 font-semibold">Contact</span>
                </a>
            </div>
        </div>