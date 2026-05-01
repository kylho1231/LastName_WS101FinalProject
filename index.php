<?php
$pageTitle = 'Old Capitol &mdash; San Jose, Antique | Heritage, Foods &amp; Arts';
$metaDescription = 'Discover the Old Capitol of San Jose de Buenavista, Antique. Explore rich history, local delicacies, and the vibrant arts and culture of Western Visayas.';
$currentPage = 'home';
$navbarScrolled = false;
require __DIR__ . '/includes/header.php';
?>

    <section class="hero" id="home">
        <div class="hero-bg">
            <img src="images/inside-of-the-old-capitol.jpg" alt="Inside the Old Capitol Building of San Jose, Antique">
        </div>
        <div class="hero-overlay"></div>
        <div class="hero-content">
            <div class="hero-badge">Province of Antique, Philippines</div>
            <h1 class="hero-title">The <em>Old Capitol</em> of<br>San Jose, Antique</h1>
            <p class="hero-subtitle">
                Step back in time and discover the heart of Antique &mdash; where heritage meets the beauty of Western
                Visayas, its flavors, and its people.
            </p>
            <div class="hero-ctas">
                <a href="history.php" class="hero-cta">
                    Explore the Heritage
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2.5"
                        stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3" />
                    </svg>
                </a>
                <a href="foods.php" class="hero-cta-secondary">Tindahang Lokal</a>
            </div>
            <div class="hero-highlights">
                <div class="hero-highlight">
                    <strong>400+ Years</strong>
                    <span>Of living heritage rooted in Antique's civic history.</span>
                </div>
                <div class="hero-highlight">
                    <strong>Culture &amp; Craft</strong>
                    <span>Explore local food, weaving traditions, and community pride.</span>
                </div>
                <div class="hero-highlight">
                    <strong>Town Center Visit</strong>
                    <span>An easy stop while exploring San Jose de Buenavista.</span>
                </div>
            </div>
        </div>
        <div class="hero-scroll">
            <span>Scroll</span>
            <div class="scroll-line"></div>
        </div>
    </section>

    <section class="intro-cards">
        <div class="container">
            <div class="intro-grid reveal">
                <a href="history.php" class="intro-card">
                    <div class="intro-card-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M12 6.042A8.967 8.967 0 006 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 016 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 016-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0018 18a8.967 8.967 0 00-6 2.292m0-14.25v14.25" />
                        </svg>
                    </div>
                    <h3>Rich History</h3>
                    <p>400+ years of heritage from the Spanish era to today.</p>
                </a>
                <a href="foods.php" class="intro-card">
                    <div class="intro-card-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M12 8.25v-1.5m0 1.5c-1.355 0-2.697.056-4.024.166C6.845 8.51 6 9.473 6 10.608v2.513m6-4.871c1.355 0 2.697.056 4.024.166C17.155 8.51 18 9.473 18 10.608v2.513M15 8.25v-1.5m-6 1.5v-1.5m12 9.75l-1.5.75a3.354 3.354 0 01-3 0 3.354 3.354 0 00-3 0 3.354 3.354 0 01-3 0 3.354 3.354 0 00-3 0 3.354 3.354 0 01-3 0L3 16.5m15-3.379a48.474 48.474 0 00-6-.371c-2.032 0-4.034.126-6 .371m12 0c.39.049.777.102 1.163.16 1.07.16 1.837 1.094 1.837 2.175v5.169c0 .621-.504 1.125-1.125 1.125H4.125A1.125 1.125 0 013 20.625v-5.17c0-1.08.768-2.014 1.837-2.174A47.78 47.78 0 016 13.12M12.265 3.11a.375.375 0 11-.53 0L12 2.845l.265.265z" />
                        </svg>
                    </div>
                    <h3>Tindahang Lokal</h3>
                    <p>Authentic Antique&ntilde;o flavors and proudly local products.</p>
                </a>
                <a href="arts.php" class="intro-card">
                    <div class="intro-card-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M9.813 15.904L9 18.75l-.813-2.846a4.5 4.5 0 00-3.09-3.09L2.25 12l2.846-.813a4.5 4.5 0 003.09-3.09L9 5.25l.813 2.846a4.5 4.5 0 003.09 3.09L15.75 12l-2.846.813a4.5 4.5 0 00-3.09 3.09zM18.259 8.715L18 9.75l-.259-1.035a3.375 3.375 0 00-2.455-2.456L14.25 6l1.036-.259a3.375 3.375 0 002.455-2.456L18 2.25l.259 1.035a3.375 3.375 0 002.455 2.456L21.75 6l-1.036.259a3.375 3.375 0 00-2.455 2.456zM16.894 20.567L16.5 21.75l-.394-1.183a2.25 2.25 0 00-1.423-1.423L13.5 18.75l1.183-.394a2.25 2.25 0 001.423-1.423l.394-1.183.394 1.183a2.25 2.25 0 001.423 1.423l1.183.394-1.183.394a2.25 2.25 0 00-1.423 1.423z" />
                        </svg>
                    </div>
                    <h3>Arts &amp; Culture</h3>
                    <p>Weaving, festivals, and centuries-old craftsmanship.</p>
                </a>
            </div>
        </div>
    </section>

    <section class="stats-ticker reveal" id="heritage-stats">
        <div class="container">
            <div class="section-header">
                <span class="section-label">By The Numbers</span>
                <h2 class="section-title">A Quick Snapshot of Antique</h2>
                <p class="section-desc mx-auto text-center">
                    These highlights help visitors understand the scale of Antique's heritage, local communities, and
                    the place the Old Capitol continues to hold in provincial identity.
                </p>
            </div>
            <div class="stats-ticker-grid">
                <article class="ticker-card">
                    <span class="ticker-value" data-count="400" data-suffix="+">0</span>
                    <h3>Years of History</h3>
                    <p>Centuries of governance, architecture, and civic memory.</p>
                </article>
                <article class="ticker-card">
                    <span class="ticker-value" data-count="18">0</span>
                    <h3>Municipalities</h3>
                    <p>A province shaped by many communities and local stories.</p>
                </article>
                <article class="ticker-card">
                    <span class="ticker-value" data-count="590" data-suffix="K+">0</span>
                    <h3>Population</h3>
                    <p>A living culture carried by Antique&ntilde;os across the province.</p>
                </article>
            </div>
        </div>
    </section>

    <div class="section-divider section-divider-top divider-to-fun-facts" aria-hidden="true">
        <svg viewBox="0 0 1440 140" preserveAspectRatio="none">
            <path d="M0,70 C180,20 360,20 540,70 C720,120 900,120 1080,70 C1260,20 1350,20 1440,50 L1440,140 L0,140 Z"></path>
            <path class="wave-echo" d="M0,70 C180,20 360,20 540,70 C720,120 900,120 1080,70 C1260,20 1350,20 1440,50 L1440,140 L0,140 Z"></path>
        </svg>
    </div>

    <section class="fun-facts">
        <div class="container">
            <div class="section-header reveal">
                <span class="section-label">Did You Know?</span>
                <h2 class="section-title">Heritage Stories Worth Knowing</h2>
                <p class="section-desc mx-auto text-center">Click each card to discover a hidden story about the Old Capitol.</p>
            </div>
            <div class="fun-facts-grid">
                <div class="flip-card" tabindex="0" role="button" aria-label="Flip card: The Survivor">
                    <div class="flip-card-inner">
                        <div class="flip-card-front">
                            <div class="flip-card-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 21v-8.25M15.75 21v-8.25M8.25 21v-8.25M3 9l9-6 9 6m-1.5 12V10.332A48.36 48.36 0 0012 9.75c-2.551 0-5.056.2-7.5.582V21M3 21h18M12 6.75h.008v.008H12V6.75z" />
                                </svg>
                            </div>
                            <span class="flip-card-label">History</span>
                            <h3>The Survivor</h3>
                            <span class="flip-hint">Click to reveal &#8594;</span>
                        </div>
                        <div class="flip-card-back">
                            <span class="flip-card-label">History</span>
                            <h3>The Survivor</h3>
                            <p>The Old Capitol building famously survived the massive Lady Caycay earthquake of 1948, which destroyed many other colonial structures across Panay Island.</p>
                        </div>
                    </div>
                </div>
                <div class="flip-card delay-120" tabindex="0" role="button" aria-label="Flip card: Changing Capitals">
                    <div class="flip-card-inner">
                        <div class="flip-card-front">
                            <div class="flip-card-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z" />
                                </svg>
                            </div>
                            <span class="flip-card-label">Geography</span>
                            <h3>Changing Capitals</h3>
                            <span class="flip-hint">Click to reveal &#8594;</span>
                        </div>
                        <div class="flip-card-back">
                            <span class="flip-card-label">Geography</span>
                            <h3>Changing Capitals</h3>
                            <p>While San Jose is the capital today, the original capital of Antique was actually <strong>Hamtic</strong>. The seat of power was moved here in the early 1800s.</p>
                        </div>
                    </div>
                </div>
                <div class="flip-card delay-240" tabindex="0" role="button" aria-label="Flip card: Royal Heritage">
                    <div class="flip-card-inner">
                        <div class="flip-card-front">
                            <div class="flip-card-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M11.48 3.499a.562.562 0 011.04 0l2.125 5.111a.563.563 0 00.475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 00-.182.557l1.285 5.385a.562.562 0 01-.84.61l-4.725-2.885a.563.563 0 00-.586 0L6.982 20.54a.562.562 0 01-.84-.61l1.285-5.386a.562.562 0 00-.182-.557l-4.204-3.602a.563.563 0 01.321-.988l5.518-.442a.563.563 0 00.475-.345L11.48 3.5z" />
                                </svg>
                            </div>
                            <span class="flip-card-label">Legacy</span>
                            <h3>Royal Heritage</h3>
                            <span class="flip-hint">Click to reveal &#8594;</span>
                        </div>
                        <div class="flip-card-back">
                            <span class="flip-card-label">Legacy</span>
                            <h3>Royal Heritage</h3>
                            <p>The name San Jose de Buenavista was given by Spanish settlers who were struck by the beautiful coastal view as they approached Antique from the sea.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="section-divider divider-to-testimonials" aria-hidden="true">
        <svg viewBox="0 0 1440 140" preserveAspectRatio="none">
            <path d="M0,70 C180,120 360,120 540,70 C720,20 900,20 1080,70 C1260,120 1350,120 1440,90 L1440,140 L0,140 Z"></path>
            <path class="wave-echo" d="M0,70 C180,120 360,120 540,70 C720,20 900,20 1080,70 C1260,120 1350,120 1440,90 L1440,140 L0,140 Z"></path>
        </svg>
    </div>

    <section class="testimonials">
        <div class="container">
            <div class="section-header reveal">
                <span class="section-label">Voices of Visitors</span>
                <h2 class="section-title">What People Say</h2>
                <p class="section-desc mx-auto text-center">
                    Hear from tourists, historians, and locals who have experienced the timeless charm of the Old Capitol.
                </p>
            </div>
            <div class="testimonials-grid reveal">
                <div class="testimonial-card">
                    <div class="testimonial-stars">
                        ★★★★★
                    </div>
                    <p class="testimonial-text">"Walking through the Old Capitol is like stepping into a living museum. The architecture and the stories preserved here are truly breathtaking. A must-visit in Antique!"</p>
                    <div class="testimonial-author">
                        <strong>Maria S.</strong>
                        <span>Heritage Enthusiast</span>
                    </div>
                </div>
                <div class="testimonial-card delay-120">
                    <div class="testimonial-stars">
                        ★★★★★
                    </div>
                    <p class="testimonial-text">"Tindahang Lokal was a delightful surprise. I loved being able to buy authentic local products right after learning about the province's rich history."</p>
                    <div class="testimonial-author">
                        <strong>James R.</strong>
                        <span>Travel Blogger</span>
                    </div>
                </div>
                <div class="testimonial-card delay-240">
                    <div class="testimonial-stars">
                        ★★★★★
                    </div>
                    <p class="testimonial-text">"The woven fabrics and cultural displays are stunning. You can feel the immense pride the Antique&ntilde;os have for their heritage. Highly recommended!"</p>
                    <div class="testimonial-author">
                        <strong>Elena V.</strong>
                        <span>Cultural Researcher</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="section-divider divider-to-visit" aria-hidden="true">
        <svg viewBox="0 0 1440 140" preserveAspectRatio="none">
            <path d="M0,70 C180,20 360,20 540,70 C720,120 900,120 1080,70 C1260,20 1350,20 1440,50 L1440,140 L0,140 Z"></path>
            <path class="wave-echo" d="M0,70 C180,20 360,20 540,70 C720,120 900,120 1080,70 C1260,20 1350,20 1440,50 L1440,140 L0,140 Z"></path>
        </svg>
    </div>

    <section class="visit-guide">
        <div class="container">
            <div class="visit-guide-head reveal">
                <span class="section-label">Plan Your Visit</span>
                <h2 class="section-title">Everything You Need Before You Go</h2>
                <p class="section-desc">
                    Make your trip easier with a quick guide to what to expect, what to explore nearby, and which
                    pages to visit first.
                </p>
            </div>
            <div class="visit-guide-grid reveal">
                <article class="visit-guide-card">
                    <h3>Best For First-Time Visitors</h3>
                    <p>Start with the Old Capitol's history, then explore local products, textiles, and cultural
                        pieces that give Antique its distinct character.</p>
                    <span class="visit-guide-tag">Heritage Walk</span>
                </article>
                <article class="visit-guide-card">
                    <h3>What To Explore Nearby</h3>
                    <p>Visit the heritage markers, browse Tindahang Lokal, and enjoy visual exhibits and local
                        craftsmanship featured across the site.</p>
                    <span class="visit-guide-tag">Town Center</span>
                </article>
                <article class="visit-guide-card">
                    <h3>Suggested Route</h3>
                    <p>Read the history page first, continue to local foods and products, then end with the arts and
                        gallery pages for a fuller cultural experience.</p>
                    <span class="visit-guide-tag">Easy Flow</span>
                </article>
            </div>
        </div>
    </section>

    <section class="home-gallery-preview">
        <div class="container">
            <div class="preview-gallery-layout reveal">
                <div class="preview-gallery-copy">
                    <span class="section-label">Photo Preview</span>
                    <h2 class="section-title">See The Spaces, Textures, and Stories</h2>
                    <p class="section-desc">
                        Take a quick visual look at Antique's heritage, local products, and woven traditions before
                        opening the full gallery.
                    </p>
                    <a href="gallery.php" class="btn-light preview-gallery-btn">
                        View Full Gallery
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2.5"
                            stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3" />
                        </svg>
                    </a>
                </div>
                <div class="preview-gallery-grid">
                    <a href="images/inside-of-the-old-capitol.jpg" class="preview-gallery-item lightbox-trigger reveal-scale"
                        data-lightbox="home-preview" data-caption="Inside the Old Capitol">
                        <img src="images/inside-of-the-old-capitol.jpg" alt="Inside the Old Capitol" loading="lazy" decoding="async">
                        <span>Inside the Old Capitol</span>
                    </a>
                    <a href="images/product1.jpg" class="preview-gallery-item lightbox-trigger reveal-scale"
                        data-lightbox="home-preview" data-caption="Local products from Antique">
                        <img src="images/product1.jpg" alt="Local products and handicrafts from Antique" loading="lazy" decoding="async">
                        <span>Local Products</span>
                    </a>
                    <a href="images/bayo.jpg" class="preview-gallery-item lightbox-trigger reveal-scale"
                        data-lightbox="home-preview" data-caption="Patadyong-inspired weaving and fashion">
                        <img src="images/bayo.jpg" alt="Patadyong-inspired weaving and fashion from Antique" loading="lazy" decoding="async">
                        <span>Textile Traditions</span>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <div class="section-divider divider-to-map" aria-hidden="true">
        <svg viewBox="0 0 1440 140" preserveAspectRatio="none">
            <path d="M0,60 C190,110 350,110 540,60 C730,10 910,10 1110,60 C1260,96 1360,100 1440,84 L1440,140 L0,140 Z"></path>
            <path class="wave-echo" d="M0,60 C190,110 350,110 540,60 C730,10 910,10 1110,60 C1260,96 1360,100 1440,84 L1440,140 L0,140 Z"></path>
        </svg>
    </div>

    <section class="map-section" id="location">
        <div class="container">
            <div class="map-header reveal">
                <span class="section-label">Find Us</span>
                <h2 class="section-title">Visit the Old Capitol</h2>
                <p class="section-desc map-header-desc">
                    Located in the heart of San Jose de Buenavista, Antique &mdash; the Old Capitol is easily accessible
                    and ready to welcome visitors.
                </p>
            </div>
            <div class="map-grid reveal">
                <div class="map-embed">
                    <iframe
                        src="https://maps.google.com/maps?q=Old%20Capitol%2C%20San%20Jose%20de%20Buenavista%2C%20Antique%2C%20Philippines&z=17&output=embed"
                        width="100%" height="100%" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade" title="Old Capitol Location Map with marker">
                    </iframe>
                </div>
                <div class="map-info">
                    <div class="map-info-card">
                        <div class="map-info-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z" />
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z" />
                            </svg>
                        </div>
                        <div>
                            <h4>Address</h4>
                            <p>San Jose de Buenavista, Antique, Western Visayas, Philippines 5700</p>
                        </div>
                    </div>
                    <div class="map-info-card">
                        <div class="map-info-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M12 6v6h4.5m4.5 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        </div>
                        <div>
                            <h4>Opening Hours</h4>
                            <div class="opening-hours">
                                <div class="hours-row">
                                    <span class="hours-day">Monday - Saturday</span>
                                    <span class="hours-time">9:00 AM - 4:30 PM</span>
                                </div>
                                <div class="hours-row">
                                    <span class="hours-day">Sunday</span>
                                    <span class="hours-time">9:00 AM - 2:00 PM</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <a href="https://maps.app.goo.gl/oA5EkhNmhRyz537W8" target="_blank" rel="noopener noreferrer"
                        class="map-directions-btn">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                            stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M9 6.75V15m0 0l3-3m-3 3l-3-3m12 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                        Open in Google Maps
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section class="visit-cta">
        <div class="container">
            <h2 class="reveal">Experience the Soul of Antique</h2>
            <p class="reveal">
                Whether you're a history enthusiast, a food lover, or a culture seeker &mdash; the Old Capitol of San
                Jose, Antique awaits you with open arms and warm hearts.
            </p>
            <a href="history.php" class="btn-light reveal">
                Start Exploring
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2.5"
                    stroke="currentColor" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3" />
                </svg>
            </a>
        </div>
    </section>

<?php require __DIR__ . '/includes/footer.php'; ?>
