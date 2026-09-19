@include('partials.header')

            <div class="breadcrumb-block style-shared">
                <div class="breadcrumb-main bg-linear overflow-hidden">
                    <div class="container lg:pt-[134px] pt-24 pb-10 relative">
                        <div class="main-content w-full h-full flex flex-col items-center justify-center relative z-[1]">
                            <div class="text-content">
                                <div class="heading2 text-center">Business & Distribution</div>
                                <div class="link flex items-center justify-center gap-1 caption1 mt-3">
                                    <a href="{{ route('home') }}">Homepage</a>
                                    <i class="ph ph-caret-right text-sm text-secondary2"></i>
                                    <div class="text-secondary2 capitalize">Business & Distribution</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <section class="dist-hero about-reveal">
            <div class="dist-hero-bg">
                <img
                    src="{{ asset('assets/images/about-page-images/pistachio-sauce-studio.png') }}"
                    alt="La Mira professional distribution"
                />
            </div>
            <div class="dist-hero-overlay"></div>
            <div class="container dist-hero-content">
                <div class="dist-hero-inner">
                    <div class="caption1 text-button-uppercase tracking-[0.2em] dist-hero-label">Dairy Best Foodstuff Trading LLC</div>
                    <h1 class="heading2 dist-hero-title md:mt-4 mt-3">Wholesale distribution for professional kitchens</h1>
                    <p class="body1 dist-hero-text md:mt-5 mt-4">
                        Based in Dubai, we connect cafés, bakeries, restaurants, and retailers across the UAE with premium La Mira and Bono products — with reliable supply and dedicated trade support.
                    </p>
                    <div class="flex flex-wrap gap-4 md:mt-8 mt-6">
                        <a href="{{ route('innerpages.contact-us') }}" class="button-main bg-white text-black">Contact Sales</a>
                        <a href="{{ route('innerpages.Allproducts') }}" class="button-main dist-hero-btn-outline">Browse Catalogue</a>
                    </div>
                </div>
            </div>
        </section>

        <section class="dist-stats-strip">
            <div class="container">
                <div class="dist-stats-row">
                    <div class="dist-stat-item about-reveal" data-about-delay="0">
                        <div class="dist-stat-value">UAE</div>
                        <div class="dist-stat-label">Dubai headquarters</div>
                    </div>
                    <div class="dist-stat-item about-reveal" data-about-delay="80">
                        <div class="dist-stat-value">2</div>
                        <div class="dist-stat-label">Leading brands</div>
                    </div>
                    <div class="dist-stat-item about-reveal" data-about-delay="160">
                        <div class="dist-stat-value">200+</div>
                        <div class="dist-stat-label">Product lines</div>
                    </div>
                    <div class="dist-stat-item about-reveal" data-about-delay="240">
                        <div class="dist-stat-value">B2B</div>
                        <div class="dist-stat-label">Trade-focused supply</div>
                    </div>
                </div>
            </div>
        </section>

        <section class="dist-section">
            <div class="container md:py-20 py-14">
                <div class="dist-section-header about-reveal">
                    <div class="caption1 text-button-uppercase tracking-[0.18em]">Who we serve</div>
                    <div class="heading3 md:mt-3 mt-2">Built for professional food businesses</div>
                    <p class="body1 text-secondary md:mt-4 mt-3 md:max-w-2xl">
                        From boutique patisseries to hotel dessert kitchens — our range performs at scale without sacrificing taste or presentation.
                    </p>
                </div>
                <div class="dist-audience-grid md:mt-12 mt-8">
                    <div class="dist-audience-card about-reveal" data-about-delay="0">
                        <i class="ph ph-coffee text-4xl"></i>
                        <div class="heading6 mt-5">Cafés & coffee shops</div>
                        <p class="caption1 text-secondary mt-2">Sauces, syrups, and beverage bases for signature drinks and desserts.</p>
                    </div>
                    <div class="dist-audience-card about-reveal" data-about-delay="100">
                        <i class="ph ph-cake text-4xl"></i>
                        <div class="heading6 mt-5">Bakeries & patisseries</div>
                        <p class="caption1 text-secondary mt-2">Creams, fillings, and glazes for pastries, donuts, and plated desserts.</p>
                    </div>
                    <div class="dist-audience-card about-reveal" data-about-delay="200">
                        <i class="ph ph-building text-4xl"></i>
                        <div class="heading6 mt-5">Restaurants & hotels</div>
                        <p class="caption1 text-secondary mt-2">Consistent ingredients for high-volume kitchens and premium menus.</p>
                    </div>
                    <div class="dist-audience-card about-reveal" data-about-delay="300">
                        <i class="ph ph-factory text-4xl"></i>
                        <div class="heading6 mt-5">Manufacturers & caterers</div>
                        <p class="caption1 text-secondary mt-2">Bulk supply for production lines, events, and food service operations.</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="dist-section dist-section--dark">
            <div class="container md:py-20 py-14">
                <div class="dist-section-header dist-section-header--light about-reveal">
                    <div class="caption1 text-button-uppercase tracking-[0.18em]">How it works</div>
                    <div class="heading3 md:mt-3 mt-2">A straightforward partnership model</div>
                </div>
                <div class="dist-timeline md:mt-12 mt-8">
                    <div class="dist-timeline-step about-reveal" data-about-delay="0">
                        <div class="dist-timeline-marker">01</div>
                        <div class="dist-timeline-body">
                            <div class="heading6">Consult & catalogue</div>
                            <p class="caption1 dist-timeline-text mt-2">Share your menu needs and we recommend the right La Mira and Bono products.</p>
                        </div>
                    </div>
                    <div class="dist-timeline-step about-reveal" data-about-delay="120">
                        <div class="dist-timeline-marker">02</div>
                        <div class="dist-timeline-body">
                            <div class="heading6">Wholesale ordering</div>
                            <p class="caption1 dist-timeline-text mt-2">Flexible trade quantities suited to cafés, bakeries, and production kitchens.</p>
                        </div>
                    </div>
                    <div class="dist-timeline-step about-reveal" data-about-delay="240">
                        <div class="dist-timeline-marker">03</div>
                        <div class="dist-timeline-body">
                            <div class="heading6">Reliable delivery</div>
                            <p class="caption1 dist-timeline-text mt-2">Consistent UAE supply with dependable logistics from our Dubai base.</p>
                        </div>
                    </div>
                    <div class="dist-timeline-step about-reveal" data-about-delay="360">
                        <div class="dist-timeline-marker">04</div>
                        <div class="dist-timeline-body">
                            <div class="heading6">Ongoing support</div>
                            <p class="caption1 dist-timeline-text mt-2">Dedicated account help for new ranges, seasonal launches, and growth.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="dist-section dist-section--surface">
            <div class="container md:py-20 py-14">
                <div class="dist-section-header about-reveal">
                    <div class="caption1 text-button-uppercase tracking-[0.18em]">Our brands</div>
                    <div class="heading3 md:mt-3 mt-2">Two portfolios, one trusted supplier</div>
                </div>
                <div class="dist-brands-grid md:mt-12 mt-8">
                    <div class="dist-brand-card about-reveal-left" data-about-delay="0">
                        <div class="dist-brand-image">
                            <img
                                src="{{ asset('assets/images/about-page-images/mango-collection.png') }}"
                                alt="La Mira dessert ingredients"
                            />
                        </div>
                        <div class="dist-brand-content">
                            <div class="heading5">La Mira</div>
                            <p class="caption1 text-secondary mt-3">Premium dessert ingredients — sauces, creams, purees, syrups, ice cream mixes, and more.</p>
                            <a href="{{ route('innerpages.product-listing', ['brandName' => 'la-mira']) }}" class="text-button-uppercase dist-brand-link mt-5 inline-block">View La Mira products</a>
                        </div>
                    </div>
                    <div class="dist-brand-card about-reveal-right" data-about-delay="100">
                        <div class="dist-brand-image">
                            <img
                                src="{{ asset('assets/images/about-page-images/chocolate-hazelnut-cream.png') }}"
                                alt="Bono biscuits and cakes"
                            />
                        </div>
                        <div class="dist-brand-content">
                            <div class="heading5">Bono</div>
                            <p class="caption1 text-secondary mt-3">Biscuits, cakes, and snack products for retail and food service channels.</p>
                            <a href="{{ route('innerpages.product-listing', ['brandName' => 'bono']) }}" class="text-button-uppercase dist-brand-link mt-5 inline-block">View Bono products</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="dist-section">
            <div class="container md:py-20 py-14">
                <div class="dist-split-feature about-reveal">
                    <div class="dist-split-feature-media">
                        <img
                            src="{{ asset('assets/images/about-page-images/milk-chocolate-sauce.png') }}"
                            alt="La Mira distribution across the UAE"
                        />
                    </div>
                    <div class="dist-split-feature-content">
                        <div class="caption1 text-button-uppercase tracking-[0.18em]">Regional reach</div>
                        <div class="heading3 md:mt-4 mt-3">Supply you can count on</div>
                        <p class="body1 text-secondary md:mt-5 mt-4">
                            Dairy Best supports businesses across the UAE with a portfolio trusted by dessert professionals who demand batch-after-batch consistency.
                        </p>
                        <ul class="dist-checklist md:mt-6 mt-5">
                            <li>Premium La Mira & Bono brands</li>
                            <li>Structured wholesale logistics from Dubai</li>
                            <li>Sauces, creams, purees, syrups, mixes & biscuits</li>
                            <li>Sales support for pricing, samples & enquiries</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <div class="container">
            <div class="newsletter-block md:py-20 sm:py-14 py-10 sm:px-8 px-6 sm:rounded-[32px] rounded-3xl flex flex-col items-center bg-green md:mb-16 mb-10 about-reveal">
                <div class="heading3 text-white text-center">Start a wholesale partnership</div>
                <div class="text-white text-center mt-3 md:w-2/3 business-cta-desc">
                    Contact our team to discuss trade pricing, product samples, and distribution across the UAE.
                </div>
                <div class="flex flex-wrap items-center justify-center gap-4 sm:mt-10 mt-7">
                    <a href="{{ route('innerpages.contact-us') }}" class="button-main bg-white text-black">Contact Sales</a>
                    <a href="{{ route('innerpages.Allproducts') }}" class="button-main bg-transparent border border-white text-white">Browse Catalogue</a>
                </div>
                <div class="business-contact-strip md:mt-8 mt-6 about-reveal" data-about-delay="150">
                    <span>dairybestfood@gmail.com</span>
                    <span class="business-contact-divider">|</span>
                    <span>+971 50 923 8325</span>
                    <span class="business-contact-divider">|</span>
                    <span>Al Ras, Dubai, U.A.E</span>
                </div>
            </div>
        </div>

        @include('partials.footer')
