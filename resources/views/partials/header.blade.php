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
                <div class="header-main flex items-center h-full w-full gap-4">
                    <div class="menu-mobile-icon lg:hidden flex items-center shrink-0" role="button" aria-label="Open menu" tabindex="0">
                        <i class="icon-category text-2xl"></i>
                    </div>
                    <a href="{{ route('home') }}" class="logo text-3xl font-semibold flex items-center shrink-0">
                        <img src="{{ asset('assets/images/home/logo.png')}}" alt="Dairy Best" class="logo">
                    </a>

                    <div class="menu-main h-full max-lg:hidden header-gap ml-auto">
                        <ul class="flex items-center justify-end h-full">

                                <li class="h-full">
                                    <a href="{{ route('innerpages.Allproducts') }}" class="text-button-uppercase duration-300 h-full flex items-center justify-center" data-translate-key="category"> Products </a>
                                </li>

                                <li class="h-full">
                                    <a href="{{ route('innerpages.about-us') }}" class="text-button-uppercase duration-300 h-full flex items-center justify-center" data-translate-key="aboutus">About Us</a>
                                </li>
                                <li class="h-full">
                                    <a href="{{ route('innerpages.business-distribution') }}" class="text-button-uppercase duration-300 h-full flex items-center justify-center" data-translate-key="distribution">Distribution</a>
                                </li>
                                <li class="h-full">
                                    <a href="{{ route('innerpages.contact-us') }}" class="text-button-uppercase duration-300 h-full flex items-center justify-center" data-translate-key="contactus">Contact Us</a>
                                </li>
                            </ul>
                        </div>
                </div>
            </div>
        </div>

        <!-- Menu Mobile -->
        <div id="menu-mobile" class="menu-mobile--explore">
            <div class="menu-container bg-white h-full">
                <div class="container h-full">
                    <div class="menu-main h-full overflow-hidden flex flex-col">
                        <div class="heading py-2 relative flex items-center justify-center shrink-0">
                            <div class="close-menu-mobile-btn absolute left-0 top-1/2 -translate-y-1/2 w-6 h-6 rounded-full bg-surface flex items-center justify-center">
                                <i class="ph ph-x text-sm"></i>
                            </div>
                            <a href="{{ route('home') }}" class="logo flex items-center justify-center">
                                <img src="{{ asset('assets/images/home/logo.png') }}" alt="Dairy Best" class="h-8 w-auto">
                            </a>
                        </div>
                        <div class="form-search relative mt-2 shrink-0">
                            <i class="ph ph-magnifying-glass text-xl absolute left-3 top-1/2 -translate-y-1/2 cursor-pointer"></i>
                            <input type="text" placeholder="What are you looking for?" class="h-12 rounded-lg border border-line text-sm w-full pl-10 pr-4" />
                        </div>
                        @include('partials.mobile-explore-menu')
                    </div>
                </div>
            </div>
        </div>

        <!-- Menu bar -->
        <div class="menu_bar fixed bg-white bottom-0 left-0 w-full h-[70px] sm:hidden z-[101]">
            <div class="menu_bar-inner menu_bar-inner--five grid grid-cols-5 items-center h-full">
                <a href="{{ route('home') }}" class="menu_bar-link flex flex-col items-center gap-0.5">
                    <span class="ph-bold ph-house text-xl block"></span>
                    <span class="menu_bar-title caption2 font-semibold">Home</span>
                </a>
                <a href="{{ route('innerpages.Allproducts') }}" class="menu_bar-link flex flex-col items-center gap-0.5">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#000000" viewBox="0 0 256 256" aria-hidden="true"><path d="M104,192a8,8,0,0,1-8,8H80a8,8,0,0,1,0-16H96A8,8,0,0,1,104,192Zm72-8H160a8,8,0,0,0,0,16h16a8,8,0,0,0,0-16Zm-76-48a12,12,0,1,0-12-12A12,12,0,0,0,100,136Zm56,0a12,12,0,1,0-12-12A12,12,0,0,0,156,136Zm88.39-13.88A16,16,0,0,1,232,128H200v32a40,40,0,0,1-24,72H80a40,40,0,0,1-24-72V128H24A16,16,0,0,1,8.31,109,56.13,56.13,0,0,1,63.22,64h1.64A55.83,55.83,0,0,1,48,24a8,8,0,0,1,16,0,40,40,0,0,0,40,40h48a40,40,0,0,0,40-40,8,8,0,0,1,16,0,55.83,55.83,0,0,1-16.86,40h1.64a56.13,56.13,0,0,1,54.91,45A15.82,15.82,0,0,1,244.39,122.12ZM72,152.8a40.57,40.57,0,0,1,8-.8h96a40.57,40.57,0,0,1,8,.8V104a24,24,0,0,0-24-24H96a24,24,0,0,0-24,24ZM56,112v-8a39.81,39.81,0,0,1,8-24h-.8A40.09,40.09,0,0,0,24,112Zm144,80a24,24,0,0,0-24-24H80a24,24,0,0,0,0,48h96A24,24,0,0,0,200,192Zm32-80a40.08,40.08,0,0,0-39.2-32H192a39.81,39.81,0,0,1,8,24v8Z"></path></svg>
                    <span class="menu_bar-title caption2 font-semibold">Products</span>
                </a>
                <a href="{{ route('innerpages.about-us') }}" class="menu_bar-link flex flex-col items-center gap-0.5">
                    <span class="ph-bold ph-info text-xl block"></span>
                    <span class="menu_bar-title caption2 font-semibold">About</span>
                </a>
                <a href="{{ route('innerpages.business-distribution') }}" class="menu_bar-link flex flex-col items-center gap-0.5">
                    <span class="ph-bold ph-truck text-xl block"></span>
                    <span class="menu_bar-title caption2 font-semibold">Distrib.</span>
                </a>
                <a href="{{ route('innerpages.contact-us') }}" class="menu_bar-link flex flex-col items-center gap-0.5">
                    <span class="ph-bold ph-phone text-xl block"></span>
                    <span class="menu_bar-title caption2 font-semibold">Contact</span>
                </a>
            </div>
        </div>