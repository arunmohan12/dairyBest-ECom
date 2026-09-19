@include('partials.header')

            <div class="breadcrumb-block style-shared">
                <div class="breadcrumb-main bg-linear overflow-hidden">
                    <div class="container lg:pt-[134px] pt-24 pb-10 relative">
                        <div class="main-content w-full h-full flex flex-col items-center justify-center relative z-[1]">
                            <div class="text-content">
                                <div class="heading2 text-center">About Us</div>
                                <div class="link flex items-center justify-center gap-1 caption1 mt-3">
                                    <a href="{{ route('home') }}">Homepage</a>
                                    <i class="ph ph-caret-right text-sm text-secondary2"></i>
                                    <div class="text-secondary2 capitalize">About Us</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <section class="about-split-section">
            <header class="about-section-header about-reveal">
                <div class="caption1 text-button-uppercase tracking-[0.2em]">La Mira by Dairy Best</div>
                <h2 class="heading3 md:mt-3 mt-2">Love at First Taste</h2>
            </header>
            <div class="about-split-grid">
                <div class="about-split-image about-reveal-left">
                    <img
                        src="{{ asset('assets/images/about-page-images/chocolate-hazelnut-cream.png') }}"
                        alt="La Mira chocolate hazelnut cream with artisan donuts"
                    />
                </div>
                <div class="about-split-content about-reveal-right">
                    <div class="about-split-inner">
                        <div class="body1 text-secondary">
                            La Mira was created with a passion for delivering premium dessert ingredients that help cafés, bakeries, restaurants, and dessert professionals create unforgettable experiences.
                        </div>
                        <div class="body1 text-secondary md:mt-4 mt-3">
                            From velvety fruit purees and rich sauces to flavored creams and ice cream mixes, every product is crafted for consistency, taste, and the kind of indulgence your customers remember.
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="about-split-section about-split-section--surface">
            <header class="about-section-header about-reveal">
                <div class="caption1 text-button-uppercase tracking-[0.18em]">Our Story</div>
                <h2 class="heading3 md:mt-3 mt-2">Crafted for creators who care about every detail</h2>
            </header>
            <div class="about-split-grid about-split-grid--reverse">
                <div class="about-split-image about-reveal-right">
                    <img
                        src="{{ asset('assets/images/about-page-images/milk-chocolate-sauce.png') }}"
                        alt="La Mira milk chocolate sauce"
                    />
                </div>
                <div class="about-split-content about-reveal-left">
                    <div class="about-split-inner">
                        <div class="body1 text-secondary">
                            Behind every La Mira product is a commitment to quality ingredients, reliable performance in professional kitchens, and flavors that elevate both sweet and savory creations.
                        </div>
                        <div class="body1 text-secondary md:mt-4 mt-3">
                            Through Dairy Best Foodstuff Trading LLC, we proudly serve businesses across the UAE and beyond — from boutique patisseries to high-volume production kitchens.
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="about-split-section">
            <header class="about-section-header about-reveal">
                <div class="caption1 text-button-uppercase tracking-[0.18em]">Signature Sauces</div>
                <h2 class="heading3 md:mt-3 mt-2">Rich finishes that transform the ordinary</h2>
            </header>
            <div class="about-split-grid">
                <div class="about-split-image about-reveal-left">
                    <img
                        src="{{ asset('assets/images/about-page-images/pistachio-sauce.png') }}"
                        alt="La Mira pistachio sauce with filled donut"
                    />
                </div>
                <div class="about-split-content about-reveal-right">
                    <div class="about-split-inner">
                        <div class="body1 text-secondary">
                            Our premium dessert sauces — from pistachio and milk chocolate to fruit-forward favorites — deliver smooth texture, vibrant color, and balanced sweetness.
                        </div>
                        <div class="body1 text-secondary md:mt-4 mt-3">
                            Perfect for drizzling, glazing, filling, and plating, they help you create signature looks without compromising on speed or consistency.
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="about-split-section about-split-section--surface">
            <header class="about-section-header about-reveal">
                <div class="caption1 text-button-uppercase tracking-[0.18em]">Complete Solutions</div>
                <h2 class="heading3 md:mt-3 mt-2">From mix to masterpiece</h2>
            </header>
            <div class="about-split-grid about-split-grid--reverse">
                <div class="about-split-image about-reveal-right">
                    <img
                        src="{{ asset('assets/images/about-page-images/mango-collection.png') }}"
                        alt="La Mira mango ice cream mix and mango sauce"
                    />
                </div>
                <div class="about-split-content about-reveal-left">
                    <div class="about-split-inner">
                        <div class="body1 text-secondary">
                            La Mira goes beyond toppings. Our ice cream powder mixes, fruit purees, syrups, and flavored creams give you the building blocks for entire menus.
                        </div>
                        <div class="body1 text-secondary md:mt-4 mt-3">
                            Milkshakes, gelato, plated desserts, beverages, and bakery fillings — all with the same premium standard your brand deserves.
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="about-split-section">
            <header class="about-section-header about-reveal">
                <div class="caption1 text-button-uppercase tracking-[0.18em]">Chocolate Hazelnut Sauce</div>
                <h2 class="heading3 md:mt-3 mt-2">A classic indulgence, elevated</h2>
            </header>
            <div class="about-split-grid">
                <div class="about-split-image about-reveal-left">
                    <img
                        src="{{ asset('assets/images/about-page-images/chocolate-hazelnut-sauce.png') }}"
                        alt="La Mira chocolate hazelnut sauce on pancakes"
                    />
                </div>
                <div class="about-split-content about-reveal-right">
                    <div class="about-split-inner">
                        <div class="body1 text-secondary">
                            A timeless favorite for breakfast menus, desserts, and beverage toppers — rich, smooth, and made to impress from the first pour.
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="about-split-section about-split-section--surface">
            <header class="about-section-header about-reveal">
                <div class="caption1 text-button-uppercase tracking-[0.18em]">Flavored Creams & Fillings</div>
                <h2 class="heading3 md:mt-3 mt-2">Built for artisan baking</h2>
            </header>
            <div class="about-split-grid about-split-grid--reverse">
                <div class="about-split-image about-reveal-right">
                    <img
                        src="{{ asset('assets/images/about-page-images/pistachio-sauce-studio.png') }}"
                        alt="La Mira pistachio sauce studio presentation"
                    />
                </div>
                <div class="about-split-content about-reveal-left">
                    <div class="about-split-inner">
                        <div class="body1 text-secondary">
                            Smooth, stable creams designed for donuts, pastries, and layered desserts — the kind of filling that keeps your display looking as good as it tastes.
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="benefit-block md:py-20 py-14">
            <div class="container">
                <header class="about-section-header about-reveal">
                    <div class="caption1 text-button-uppercase tracking-[0.18em]">Why La Mira</div>
                    <h2 class="heading3 md:mt-3 mt-2">Why professionals choose La Mira</h2>
                </header>
                <div class="list-benefit grid items-start lg:grid-cols-4 md:grid-cols-2 grid-cols-1 gap-[30px] md:mt-12 mt-8">
                    <div class="benefit-item flex flex-col items-center justify-center text-center px-4 about-reveal" data-about-delay="0">
                        <i class="icon-guarantee lg:text-7xl text-5xl"></i>
                        <div class="heading6 mt-5">Premium Quality</div>
                        <div class="caption1 text-secondary mt-3">Consistent flavor, texture, and performance batch after batch.</div>
                    </div>
                    <div class="benefit-item flex flex-col items-center justify-center text-center px-4 about-reveal" data-about-delay="100">
                        <i class="icon-leaves lg:text-7xl text-5xl"></i>
                        <div class="heading6 mt-5">Versatile Range</div>
                        <div class="caption1 text-secondary mt-3">Sauces, creams, purees, syrups, and mixes for every menu style.</div>
                    </div>
                    <div class="benefit-item flex flex-col items-center justify-center text-center px-4 about-reveal" data-about-delay="200">
                        <i class="icon-delivery-truck lg:text-7xl text-5xl"></i>
                        <div class="heading6 mt-5">Trusted Supply</div>
                        <div class="caption1 text-secondary mt-3">Reliable distribution through Dairy Best across the UAE and region.</div>
                    </div>
                    <div class="benefit-item flex flex-col items-center justify-center text-center px-4 about-reveal" data-about-delay="300">
                        <i class="icon-phone-call lg:text-7xl text-5xl"></i>
                        <div class="heading6 mt-5">Partner Support</div>
                        <div class="caption1 text-secondary mt-3">Dedicated support for businesses looking to grow with premium ingredients.</div>
                    </div>
                </div>
            </div>
        </section>

        <div class="container">
            <div class="newsletter-block md:py-20 sm:py-14 py-10 sm:px-8 px-6 sm:rounded-[32px] rounded-3xl flex flex-col items-center bg-green md:mb-16 mb-10 about-reveal">
                <header class="about-section-header about-reveal">
                    <div class="caption1 text-button-uppercase tracking-[0.18em]">Get Started</div>
                    <h2 class="heading3 md:mt-3 mt-2">Ready to elevate your menu?</h2>
                </header>
                <div class="text-center mt-3 md:w-2/3">
                    Discover the full La Mira range or speak with our team about wholesale and business partnerships.
                </div>
                <div class="flex flex-wrap items-center justify-center gap-4 sm:mt-10 mt-7">
                    <a href="{{ route('innerpages.Allproducts') }}" class="button-main bg-white text-black">Explore Products</a>
                    <a href="{{ route('innerpages.contact-us') }}" class="button-main bg-transparent border border-white text-white">Contact Us</a>
                </div>
            </div>
        </div>

        @include('partials.footer')
