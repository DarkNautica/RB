<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Pricing - Your Company Name</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Include CSS -->
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <!-- Include Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@600&family=Yellowtail&display=swap" rel="stylesheet">
</head>
<body>
     <!-- Include Header with the site-header class -->
     @include('header', ['class' => 'site-header'])

    <!-- Main Content -->
    <main>
        <section class="hero-section">
            <!-- Starry Night Background -->
            <div class="stars">
                @for ($i = 0; $i < 50; $i++)
                    <div class="star"></div>
                @endfor

                <!-- Shooting Stars -->
                <div class="shooting-star"></div>
                <div class="shooting-star"></div>
            </div>

            <!-- Hero Text Content -->
            <div class="hero-content container">
                <div class="hero-text">
                    <span>Custom Designs, Custom Coded</span>
                    <h1>Small Business Web Designer</h1>
                    <p>No page builders or WordPress. We offer 100% hand-coded websites with superior results starting at $175/mo as well as Google Ads and SEO services.</p>
                    <div class="hero-buttons">
                        <a href="/contact" class="button primary">Get Started</a>
                        <a href="/about" class="button secondary">About Us</a>
                    </div>
                </div>
            </div>

            <!-- Forest Background -->
            <div class="forest-background">
                <img src="{{ asset('images/forestbg.svg') }}" alt="Forest Background">
            </div>
        </section>

        <section class="about-section">
            <div class="container">
                <h2 class="about-title">WHAT WE DO</h2>
                <h3 class="about-subtitle">NEVER WORRY ABOUT<br>YOUR WEBSITE EVER AGAIN</h3>
                <p class="about-description">
                    At Oak Harbor Web Designs, we specialize in small business web design and development for clients anywhere in the US and Canada. Every line of code is written by hand to ensure the best performance and make Google happy, which helps bring in more customers to your site and bring more revenue to your business. We also manage the edits for you and will never leave you high and dry. Our goal is to create long-term relationships with our clients and see them grow over time.
                </p>
            </div>
        </section>
        

<!-- Features Section -->
<section class="features-section">
    <div class="container">
        <div class="features-cards">
            <!-- Card 1 -->
            <div class="features-card">
                <div class="card-icon-wrapper">
                    <div class="card-icon">
                        <img src="{{ asset('images/mobile-icon.svg') }}" alt="Mobile Icon">
                    </div>
                </div>
                <h3 class="card-title">Mobile First Design</h3>
                <p class="card-description">
                    We start building your site for mobile devices first, making sure the code is as lean and optimized with no bloated waste, making the site even more responsive.
                </p>
                <a href="/contact" class="card-link">Get Started</a>
            </div>

            <!-- Card 2 -->
            <div class="features-card">
                <div class="card-icon-wrapper">
                    <div class="card-icon">
                        <img src="{{ asset('images/responsive-icon.svg') }}" alt="Responsive Icon">
                    </div>
                </div>
                <h3 class="card-title">Fully Responsive</h3>
                <p class="card-description">
                    Your website will fit all mobile screen sizes, tablets, and desktop sizes so visitors can access your site from anywhere and see a beautiful site no matter the screen size.
                </p>
                <a href="/contact" class="card-link">Get Started</a>
            </div>

            <!-- Card 3 -->
            <div class="features-card">
                <div class="card-icon-wrapper">
                    <div class="card-icon">
                        <img src="{{ asset('images/100icon.svg') }}" alt="Page Speed Icon">
                    </div>
                </div>
                <h3 class="card-title">Optimized Page Speed</h3>
                <p class="card-description">
                    If your site takes more than 3 seconds to load, you can lose up to 50% of your traffic. Our sites load in 1 second or less, ensuring everyone that visits your site reaches it.
                </p>
                <a href="/contact" class="card-link">More About Page Speed</a>
            </div>

            <!-- Card 4 -->
            <div class="features-card">
                <div class="card-icon-wrapper">
                    <div class="card-icon">
                        <img src="{{ asset('images/seo-icon.svg') }}" alt="SEO Icon">
                    </div>
                </div>
                <h3 class="card-title">SEO Services</h3>
                <p class="card-description">
                    We have an in-house SEO specialist who understands local SEO and how to rank in your local market with plenty of case studies to show results and monthly reports.
                </p>
                <a href="/services/seo" class="card-link">More About SEO</a>
            </div>

            <!-- Card 5 -->
            <div class="features-card">
                <div class="card-icon-wrapper">
                    <div class="card-icon">
                        <img src="{{ asset('images/ppc-icon.svg') }}" alt="PPC Icon">
                    </div>
                </div>
                <h3 class="card-title">Google PPC Ads</h3>
                <p class="card-description">
                    We also offer Pay-Per-Click Google Ads creation and management with our Google Ads expert who can create effective ad campaigns to maximize your ROI.
                </p>
                <a href="/services/ads" class="card-link">More About Ads</a>
            </div>

            <!-- Card 6 -->
            <div class="features-card">
                <div class="card-icon-wrapper">
                    <div class="card-icon">
                        <img src="{{ asset('images/us-icon.svg') }}" alt="US Icon">
                    </div>
                </div>
                <h3 class="card-title">Based in the USA</h3>
                <p class="card-description">
                    We do not hire cheap overseas developers. We are mostly based in the USA with team members in Washington, Texas, Pennsylvania, and the UK, working 100% remotely.
                </p>
                <a href="/about" class="card-link">More About Us</a>
            </div>
        </div>
    </div>
</section>


<section class="pricing-section">
    <div class="container">
        <div class="pricing-cards">
            <!-- Lump Sum Plan -->
            <div class="pricing-card">
                <h2 class="package-name">LUMP SUM</h2>
                <ul class="features-list">
                    <li>
                        <img src="/images/check.svg" alt="Check">
                        <span>Design And Development</span>
                    </li>
                    <li>
                        <img src="/images/check.svg" alt="Check">
                        <span>$25/mo Hosting</span>
                    </li>
                    <li>
                        <img src="/images/check.svg" alt="Check">
                        <span>$100 fee Per Page after 5</span>
                    </li>
                    <li>
                        <img src="/images/check.svg" alt="Check">
                        <span>+$50/mo Unlimited Edits Add-on</span>
                    </li>
                    <li>
                        <img src="/images/check.svg" alt="Check">
                        <span>+$250 To Add A Blog</span>
                    </li>
                    <li>
                        <img src="/images/xmark.svg" alt="X Mark">
                        <span>24/7 Support</span>
                    </li>
                    <li>
                        <img src="/images/xmark.svg" alt="X Mark">
                        <span>Lifetime Updates</span>
                    </li>
                </ul>
                <div class="price">$3800 <span class="duration">+$25/mo Hosting</span></div>
                <a href="/contact" class="button">Get Started</a>
            </div>
            <!-- Monthly Plan -->
            <div class="pricing-card popular">
                <h2 class="package-name">MONTHLY</h2>
                <ul class="features-list">
                    <li>
                        <img src="/images/check.svg" alt="Check">
                        <span>Design And Development</span>
                    </li>
                    <li>
                        <img src="/images/check.svg" alt="Check">
                        <span>Includes Hosting</span>
                    </li>
                    <li>
                        <img src="/images/check.svg" alt="Check">
                        <span>$100 fee Per Page After 5</span>
                    </li>
                    <li>
                        <img src="/images/check.svg" alt="Check">
                        <span>+$250 To Add A Blog</span>
                    </li>
                    <li>
                        <img src="/images/check.svg" alt="Check">
                        <span>Unlimited Edits</span>
                    </li>
                    <li>
                        <img src="/images/check.svg" alt="Check">
                        <span>24/7 Support</span>
                    </li>
                    <li>
                        <img src="/images/check.svg" alt="Check">
                        <span>Lifetime Updates</span>
                    </li>
                </ul>
                <div class="price">$175 <span class="duration">Per Month</span></div>
                <a href="/contact" class="button">Get Started</a>
            </div>
            <!-- Ecommerce Plan -->
            <div class="pricing-card">
                <h2 class="package-name">ECOMMERCE</h2>
                <ul class="features-list">
                    <li>
                        <img src="/images/check.svg" alt="Check">
                        <span>Custom Shopify Store</span>
                    </li>
                    <li>
                        <img src="/images/check.svg" alt="Check">
                        <span>Configure Any And All Apps</span>
                    </li>
                    <li>
                        <img src="/images/check.svg" alt="Check">
                        <span>Integrated Shipping</span>
                    </li>
                    <li>
                        <img src="/images/check.svg" alt="Check">
                        <span>Shopify Tutorial Walkthrough</span>
                    </li>
                    <li>
                        <img src="/images/check.svg" alt="Check">
                        <span>Fully Editable In Shopify CMS</span>
                    </li>
                    <li>
                        <img src="/images/xmark.svg" alt="X Mark">
                        <span>+$50/mo Unlimited Edits</span>
                    </li>
                    <li>
                        <img src="/images/xmark.svg" alt="X Mark">
                        <span>24/7 Support</span>
                    </li>
                </ul>
                <div class="price">$8k <span class="duration">Starting</span></div>
                <a href="/contact" class="button">Get Started</a>
            </div>
        </div>
    </div>
</section>


<section class="testimonials-section">
    <div class="container">
        <!-- Title Section -->
        <h3 class="section-title">Testimonials</h3>
        <h2 class="section-subtitle">Trusted Web Designer Across the Country</h2>
        <p class="section-description">
            We have helped small business owners all over the US and Canada get the website they have been wanting for years. 
            We are invested in our clients just as much as they are in our work. When you work with Oak Harbor Web Designs, 
            you aren’t just working with an agency, you’re working with a dedicated partner.
        </p>

        <!-- Testimonials Cards -->
        <div class="testimonials-cards">
            <!-- Card 1 -->
            <div class="testimonial-card">
                <blockquote>
                    "Jayden and his team have been awesome to work with. The value they provide for the cost is unbeatable. 
                    Jayden is talented and responsive. I highly recommend him for your website needs!"
                </blockquote>
                <h4 class="client-name">Ryan M.</h4>
                <p class="client-location">New York City, NY</p>
            </div>
            <!-- Card 2 -->
            <div class="testimonial-card">
                <blockquote>
                    "RobbinsBuilds and Jayden have made the process of building a website a fun, exciting experience. 
                    He is very personable and answers your questions within a quick manner. I’ll be using him in the future."
                </blockquote>
                <h4 class="client-name">Alex R.</h4>
                <p class="client-location">Los Angeles, CA</p>
            </div>
            <!-- Card 3 -->
            <div class="testimonial-card">
                <blockquote>
                    "I approached Jayden with a very specific vision for our new website, and he knocked it out of the park. 
                    I was looking for a clean, original design and a faster site. He absolutely delivered."
                </blockquote>
                <h4 class="client-name">Timothy K.</h4>
                <p class="client-location">Portland, OR</p>
            </div>
        </div>
    </div>
</section>



<!-- Footer -->
<footer class="site-footer">
    <div class="container">
        <div class="footer-content">
            <!-- Logo Section -->
            <div class="footer-logo">
                <img src="{{ asset('images/logo.svg') }}" alt="Company Logo">
            </div>
            <!-- Quick Links Section -->
            <div class="footer-links">
                <ul>
                    <li><a href="/">Home</a></li>
                    <li><a href="/about">About Us</a></li>
                    <li><a href="/services">Services</a></li>
                    <li><a href="/pricing">Pricing</a></li>
                    <li><a href="/contact">Contact</a></li>
                </ul>
            </div>
        </div>
        <p class="footer-copy">&copy; {{ date('Y') }} RobbinsBuilds. All rights reserved.</p>
    </div>
</footer>

