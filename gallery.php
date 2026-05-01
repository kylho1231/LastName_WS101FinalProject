<?php
$pageTitle = 'Gallery &mdash; Old Capitol, San Jose, Antique';
$metaDescription = 'Browse through a visual collection of the Old Capitol&apos;s history, local products, and cultural artifacts in San Jose de Buenavista, Antique.';
$currentPage = 'gallery';
require __DIR__ . '/includes/header.php';
?>

    <section class="page-header">
        <div class="page-header-bg">
            <img src="images/inside-of-the-old-capitol.jpg"
                alt="Gallery of the Old Capitol in San Jose, Antique"
                class="page-header-image">
        </div>
        <div class="page-header-overlay"></div>
        <div class="page-header-content">
            <span class="section-label section-label-light">Visual Journey</span>
            <h1 class="page-header-title">Photo Gallery</h1>
            <p class="page-header-subtitle">A vivid collection showcasing the heritage, livelihood, and arts of Antique.</p>
        </div>
    </section>

    <section class="page-content">
        <div class="container">
            <div class="gallery-filter-bar reveal">
                <button class="gallery-filter-btn is-active" type="button" data-filter="all">All</button>
                <button class="gallery-filter-btn" type="button" data-filter="heritage">Heritage</button>
                <button class="gallery-filter-btn" type="button" data-filter="culture">Culture</button>
                <button class="gallery-filter-btn" type="button" data-filter="products">Products</button>
            </div>
            <div class="content-block reveal">
                <div class="arts-gallery-full gallery-grid-auto" id="galleryGrid">
                    <a href="images/arts-and-culture.jpg" class="arts-gallery-item lightbox-trigger"
                        data-lightbox="gallery" data-caption="Arts &amp; Culture" data-category="culture">
                        <img src="images/arts-and-culture.jpg" alt="Arts and Culture" loading="lazy" decoding="async">
                        <div class="gallery-caption">Arts &amp; Culture</div>
                    </a>
                    <a href="images/bayo.jpg" class="arts-gallery-item lightbox-trigger"
                        data-lightbox="gallery" data-caption="Habol Weaves" data-category="culture">
                        <img src="images/bayo.jpg" alt="Habol &mdash; Philippines&apos; Finest Weaves" loading="lazy" decoding="async">
                        <div class="gallery-caption">Habol Weaves</div>
                    </a>
                    <a href="images/chips-of-tindahang-lokal.jpg" class="arts-gallery-item lightbox-trigger"
                        data-lightbox="gallery" data-caption="Local Snacks" data-category="products">
                        <img src="images/chips-of-tindahang-lokal.jpg" alt="Local Chips at Tindahang Lokal" loading="lazy" decoding="async">
                        <div class="gallery-caption">Local Snacks</div>
                    </a>
                    <a href="images/culinary-heritage-of-antique.jpg" class="arts-gallery-item lightbox-trigger"
                        data-lightbox="gallery" data-caption="Culinary Heritage" data-category="products">
                        <img src="images/culinary-heritage-of-antique.jpg" alt="Culinary Heritage of Antique" loading="lazy" decoding="async">
                        <div class="gallery-caption">Culinary Heritage</div>
                    </a>
                    <a href="images/inside-of-the-old-capitol.jpg" class="arts-gallery-item lightbox-trigger"
                        data-lightbox="gallery" data-caption="Inside the Old Capitol" data-category="heritage">
                        <img src="images/inside-of-the-old-capitol.jpg" alt="Inside the Old Capitol" loading="lazy" decoding="async">
                        <div class="gallery-caption">Inside the Old Capitol</div>
                    </a>
                    <a href="images/outside-of-tindahang-lokal.jpg" class="arts-gallery-item lightbox-trigger"
                        data-lightbox="gallery" data-caption="Tindahang Lokal" data-category="products">
                        <img src="images/outside-of-tindahang-lokal.jpg" alt="Outside Tindahang Lokal" loading="lazy" decoding="async">
                        <div class="gallery-caption">Tindahang Lokal</div>
                    </a>
                    <a href="images/picture-of-loren-promoting-the-tindang-local.jpg" class="arts-gallery-item lightbox-trigger"
                        data-lightbox="gallery" data-caption="Pride of Antique MSMEs" data-category="products">
                        <img src="images/picture-of-loren-promoting-the-tindang-local.jpg" alt="Promoting Tindahang Lokal" loading="lazy" decoding="async">
                        <div class="gallery-caption">Pride of Antique MSMEs</div>
                    </a>
                    <a href="images/plate-history-of-the-building-3.jpg" class="arts-gallery-item lightbox-trigger"
                        data-lightbox="gallery" data-caption="Historical Plate" data-category="heritage">
                        <img src="images/plate-history-of-the-building-3.jpg" alt="Historical Plate 3" loading="lazy" decoding="async">
                        <div class="gallery-caption">Historical Plate</div>
                    </a>
                    <a href="images/plate-history-of-the-building-old-capitol.jpg" class="arts-gallery-item lightbox-trigger"
                        data-lightbox="gallery" data-caption="Old Capitol Marker" data-category="heritage">
                        <img src="images/plate-history-of-the-building-old-capitol.jpg" alt="Old Capitol Historical Plate" loading="lazy" decoding="async">
                        <div class="gallery-caption">Old Capitol Marker</div>
                    </a>
                    <a href="images/plate-history-of-the-building-old-capitol2.jpg" class="arts-gallery-item lightbox-trigger"
                        data-lightbox="gallery" data-caption="Historical Marker" data-category="heritage">
                        <img src="images/plate-history-of-the-building-old-capitol2.jpg" alt="Old Capitol Historical Plate 2" loading="lazy" decoding="async">
                        <div class="gallery-caption">Historical Marker</div>
                    </a>
                    <a href="images/product1.jpg" class="arts-gallery-item lightbox-trigger"
                        data-lightbox="gallery" data-caption="Antique Handicrafts" data-category="products">
                        <img src="images/product1.jpg" alt="Handcrafted Products" loading="lazy" decoding="async">
                        <div class="gallery-caption">Antique Handicrafts</div>
                    </a>
                    <a href="images/showing-the-pintados.jpg" class="arts-gallery-item lightbox-trigger"
                        data-lightbox="gallery" data-caption="Pintados Patterns" data-category="culture">
                        <img src="images/showing-the-pintados.jpg" alt="Showing the Pintados" loading="lazy" decoding="async">
                        <div class="gallery-caption">Pintados Patterns</div>
                    </a>
                    <a href="images/stairs-of-the-old-capitol.jpg" class="arts-gallery-item lightbox-trigger"
                        data-lightbox="gallery" data-caption="Old Capitol Stairs" data-category="heritage">
                        <img src="images/stairs-of-the-old-capitol.jpg" alt="Stairs of the Old Capitol" loading="lazy" decoding="async">
                        <div class="gallery-caption">Old Capitol Stairs</div>
                    </a>
                    <a href="images/very-old-picture-of-the-old-capitol-town-of-the-san-jose-antique.jpg" class="arts-gallery-item lightbox-trigger"
                        data-lightbox="gallery" data-caption="Historic Town Photograph" data-category="heritage">
                        <img src="images/very-old-picture-of-the-old-capitol-town-of-the-san-jose-antique.jpg" alt="Historic town photograph" loading="lazy" decoding="async">
                        <div class="gallery-caption">Historic Town Photograph</div>
                    </a>
                </div>
            </div>
        </div>
    </section>

<?php require __DIR__ . '/includes/footer.php'; ?>
