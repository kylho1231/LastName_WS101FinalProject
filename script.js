// =========================================
// Old Capitol San Jose Antique - Main Script
// =========================================

const body = document.body;
const navbar = document.getElementById('navbar');
const navToggle = document.getElementById('navToggle');
const navLinks = document.getElementById('navLinks');
const hero = document.querySelector('.hero');
const heroBackground = document.querySelector('.hero-bg');
const prefersReducedMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;

const scrollProgress = document.createElement('div');
scrollProgress.className = 'scroll-progress';
body.appendChild(scrollProgress);

const backToTopButton = document.createElement('button');
backToTopButton.className = 'back-to-top';
backToTopButton.type = 'button';
backToTopButton.setAttribute('aria-label', 'Back to top');
backToTopButton.innerHTML = `
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" aria-hidden="true">
        <path stroke-linecap="round" stroke-linejoin="round" d="M12 19V5m0 0l-6 6m6-6l6 6" />
    </svg>
`;
body.appendChild(backToTopButton);

let ticking = false;

const updateScrollState = () => {
    const scrollTop = window.scrollY;
    const documentHeight = document.documentElement.scrollHeight - window.innerHeight;
    const progress = documentHeight > 0 ? scrollTop / documentHeight : 0;

    scrollProgress.style.transform = `scaleX(${progress})`;

    if (navbar && !body.classList.contains('nav-open')) {
        navbar.classList.toggle('scrolled', scrollTop > 40 || navbar.classList.contains('force-scrolled'));
    }

    backToTopButton.classList.toggle('is-visible', scrollTop > 400);

    if (!prefersReducedMotion && hero && heroBackground) {
        const heroOffset = Math.min(scrollTop * 0.12, 48);
        heroBackground.style.transform = `translate3d(0, ${heroOffset}px, 0)`;
    }

    ticking = false;
};

const requestScrollUpdate = () => {
    if (!ticking) {
        window.requestAnimationFrame(updateScrollState);
        ticking = true;
    }
};

if (navbar && navbar.classList.contains('scrolled')) {
    navbar.classList.add('force-scrolled');
}

window.addEventListener('scroll', requestScrollUpdate, { passive: true });
window.addEventListener('resize', requestScrollUpdate);
window.addEventListener('load', requestScrollUpdate);

window.requestAnimationFrame(() => {
    body.classList.add('page-is-ready');
    body.classList.remove('page-is-loading');
});

const setNavState = (isOpen) => {
    if (!navLinks || !navToggle) return;

    navLinks.classList.toggle('open', isOpen);
    navToggle.classList.toggle('active', isOpen);
    navToggle.setAttribute('aria-expanded', String(isOpen));
    body.classList.toggle('nav-open', isOpen);
};

if (navToggle && navLinks) {
    navToggle.addEventListener('click', () => {
        setNavState(!navLinks.classList.contains('open'));
    });

    navLinks.querySelectorAll('a').forEach((link) => {
        link.addEventListener('click', () => setNavState(false));
    });

    document.addEventListener('keydown', (event) => {
        if (event.key === 'Escape') {
            setNavState(false);
        }
    });

    document.addEventListener('click', (event) => {
        const clickedInsideNav = navLinks.contains(event.target) || navToggle.contains(event.target);
        if (!clickedInsideNav && navLinks.classList.contains('open')) {
            setNavState(false);
        }
    });
}

const staggerGroups = [
    '.intro-grid > *',
    '.stats-ticker-grid > *',
    '.fun-facts-grid > *',
    '.visit-guide-grid > *',
    '.preview-gallery-grid > *',
    '.foods-grid > *',
    '.arts-gallery-full > *',
    '.arts-features-grid > *',
    '.hero-highlights > *'
];

staggerGroups.forEach((selector) => {
    document.querySelectorAll(selector).forEach((item, index) => {
        if (!item.classList.contains('reveal')) {
            item.classList.add('reveal', 'reveal-scale');
        }

        item.style.setProperty('--reveal-delay', `${index * 90}ms`);
    });
});

const revealElements = document.querySelectorAll('.reveal');
const tickerValues = document.querySelectorAll('.ticker-value');

const animateCounter = (element) => {
    if (element.dataset.counted === 'true') return;

    const target = Number(element.dataset.count || 0);
    const suffix = element.dataset.suffix || '';
    const duration = prefersReducedMotion ? 0 : 1800;
    const start = performance.now();

    const render = (value) => {
        element.textContent = `${Math.floor(value)}${suffix}`;
    };

    const tick = (now) => {
        const progress = duration === 0 ? 1 : Math.min((now - start) / duration, 1);
        const eased = 1 - Math.pow(1 - progress, 3);
        render(target * eased);

        if (progress < 1) {
            window.requestAnimationFrame(tick);
            return;
        }

        render(target);
    };

    element.dataset.counted = 'true';
    window.requestAnimationFrame(tick);
};

// Helper to check if element is in viewport
const isInViewport = (element) => {
    const rect = element.getBoundingClientRect();
    return rect.top < window.innerHeight && rect.bottom > 0;
};

if (!prefersReducedMotion && 'IntersectionObserver' in window) {
    const revealObserver = new IntersectionObserver((entries, observer) => {
        entries.forEach((entry) => {
            if (!entry.isIntersecting) return;

            entry.target.classList.add('is-visible', 'active');

            if (entry.target.classList.contains('stats-ticker')) {
                tickerValues.forEach((ticker) => animateCounter(ticker));
            }

            observer.unobserve(entry.target);
        });
    }, {
        threshold: 0.16,
        rootMargin: '0px 0px -10% 0px'
    });

    revealElements.forEach((element) => {
        revealObserver.observe(element);
        // Immediately show elements already in viewport
        if (isInViewport(element)) {
            element.classList.add('is-visible', 'active');
        }
    });

    const tickerSection = document.querySelector('.stats-ticker');
    if (tickerSection) {
        revealObserver.observe(tickerSection);
        if (isInViewport(tickerSection)) {
            tickerValues.forEach((ticker) => animateCounter(ticker));
        }
    }
} else {
    revealElements.forEach((element) => element.classList.add('is-visible', 'active'));
    tickerValues.forEach((ticker) => animateCounter(ticker));
}

const timelineItems = document.querySelectorAll('.interactive-timeline .timeline-item');

timelineItems.forEach((item) => {
    const trigger = item.querySelector('.timeline-trigger');
    const panel = item.querySelector('.timeline-panel');

    const setState = (open) => {
        item.classList.toggle('is-open', open);
        if (trigger) {
            trigger.setAttribute('aria-expanded', String(open));
        }

        if (panel) {
            panel.style.maxHeight = open ? `${panel.scrollHeight}px` : '0px';
        }
    };

    if (item.classList.contains('is-open')) {
        setState(true);
    } else {
        setState(false);
    }

    trigger?.addEventListener('click', () => {
        const willOpen = !item.classList.contains('is-open');
        timelineItems.forEach((other) => {
            if (other === item) return;
            const otherTrigger = other.querySelector('.timeline-trigger');
            const otherPanel = other.querySelector('.timeline-panel');
            other.classList.remove('is-open');
            otherTrigger?.setAttribute('aria-expanded', 'false');
            if (otherPanel) otherPanel.style.maxHeight = '0px';
        });
        setState(willOpen);
    });
});

const lightboxTriggers = document.querySelectorAll('.lightbox-trigger');

if (lightboxTriggers.length) {
    const lightbox = document.createElement('div');
    lightbox.className = 'lightbox';
    lightbox.innerHTML = `
        <div class="lightbox-dialog" role="dialog" aria-modal="true" aria-label="Image preview">
            <button class="lightbox-close" type="button" aria-label="Close image preview">&times;</button>
            <button class="lightbox-nav lightbox-prev" type="button" aria-label="Previous image">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7"/></svg>
            </button>
            <img class="lightbox-image" src="" alt="">
            <button class="lightbox-nav lightbox-next" type="button" aria-label="Next image">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7"/></svg>
            </button>
            <p class="lightbox-caption"></p>
        </div>
    `;

    body.appendChild(lightbox);

    const lightboxImage = lightbox.querySelector('.lightbox-image');
    const lightboxCaption = lightbox.querySelector('.lightbox-caption');
    const lightboxClose = lightbox.querySelector('.lightbox-close');
    const lightboxPrev = lightbox.querySelector('.lightbox-prev');
    const lightboxNext = lightbox.querySelector('.lightbox-next');
    const lightboxDialog = lightbox.querySelector('.lightbox-dialog');

    let activeTriggers = [];
    let currentIndex = 0;

    const closeLightbox = () => {
        lightbox.classList.remove('is-open');
        body.classList.remove('lightbox-open');
    };

    const showImage = (index) => {
        if (!activeTriggers.length) return;
        currentIndex = (index + activeTriggers.length) % activeTriggers.length;
        const trigger = activeTriggers[currentIndex];
        
        lightboxImage.style.opacity = '0.4';
        setTimeout(() => {
            lightboxImage.src = trigger.getAttribute('href') || '';
            lightboxImage.alt = trigger.querySelector('img')?.alt || '';
            lightboxCaption.textContent = trigger.dataset.caption || lightboxImage.alt || '';
            lightboxImage.style.opacity = '1';
        }, 150);
    };

    lightboxTriggers.forEach((trigger) => {
        trigger.addEventListener('click', (event) => {
            event.preventDefault();
            
            // Determine currently visible triggers (not hidden by filter)
            activeTriggers = Array.from(lightboxTriggers).filter(t => !t.hidden && !t.classList.contains('is-filtered-out'));
            
            // If the clicked trigger isn't part of active (e.g., if there's no filter), fallback to all
            if (!activeTriggers.includes(trigger)) {
                activeTriggers = Array.from(lightboxTriggers);
            }
            
            currentIndex = activeTriggers.indexOf(trigger);
            if (currentIndex === -1) currentIndex = 0;
            
            lightboxImage.style.transition = 'none';
            showImage(currentIndex);
            setTimeout(() => { lightboxImage.style.transition = ''; }, 50);
            
            lightbox.classList.add('is-open');
            body.classList.add('lightbox-open');
        });
    });

    lightboxPrev.addEventListener('click', (e) => { e.stopPropagation(); showImage(currentIndex - 1); });
    lightboxNext.addEventListener('click', (e) => { e.stopPropagation(); showImage(currentIndex + 1); });
    lightboxClose.addEventListener('click', closeLightbox);

    lightbox.addEventListener('click', (event) => {
        if (!lightboxDialog.contains(event.target) || event.target === lightboxDialog) {
            closeLightbox();
        }
    });

    document.addEventListener('keydown', (event) => {
        if (!lightbox.classList.contains('is-open')) return;
        
        if (event.key === 'Escape') {
            closeLightbox();
        } else if (event.key === 'ArrowLeft') {
            showImage(currentIndex - 1);
        } else if (event.key === 'ArrowRight') {
            showImage(currentIndex + 1);
        }
    });
}

document.querySelectorAll('.flip-card').forEach((card) => {
    const toggleFlip = () => card.classList.toggle('is-flipped');

    card.addEventListener('click', toggleFlip);
    card.addEventListener('keydown', (event) => {
        if (event.key === 'Enter' || event.key === ' ') {
            event.preventDefault();
            toggleFlip();
        }
    });
});

const galleryFilterButtons = document.querySelectorAll('.gallery-filter-btn');
const galleryItems = document.querySelectorAll('.arts-gallery-item[data-category]');

if (galleryFilterButtons.length && galleryItems.length) {
    galleryFilterButtons.forEach((button) => {
        button.addEventListener('click', () => {
            const filter = button.dataset.filter || 'all';

            galleryFilterButtons.forEach((item) => item.classList.toggle('is-active', item === button));

            galleryItems.forEach((item) => {
                const matches = filter === 'all' || item.dataset.category === filter;

                if (matches) {
                    item.hidden = false;
                    window.requestAnimationFrame(() => item.classList.remove('is-filtered-out'));
                    return;
                }

                item.classList.add('is-filtered-out');
                window.setTimeout(() => {
                    if (item.classList.contains('is-filtered-out')) {
                        item.hidden = true;
                    }
                }, 220);
            });
        });
    });
}

document.querySelectorAll('img').forEach((image) => {
    const frame = image.closest('.arts-gallery-item, .preview-gallery-item, .content-block-image, .page-header-bg, .hero-bg');
    if (!frame) return;

    frame.classList.add('is-loading');

    const markLoaded = () => {
        frame.classList.remove('is-loading');
        frame.classList.add('is-loaded');
    };

    if (image.complete) {
        markLoaded();
    } else {
        image.addEventListener('load', markLoaded, { once: true });
        image.addEventListener('error', markLoaded, { once: true });
    }
});

const sameOriginInternalLink = (link) => {
    if (!link.href) return false;
    if (link.target && link.target !== '_self') return false;
    if (link.hasAttribute('download')) return false;
    if (link.classList.contains('lightbox-trigger')) return false;
    const url = new URL(link.href, window.location.href);
    if (url.origin !== window.location.origin) return false;
    if (url.hash && url.pathname === window.location.pathname) return false;
    return /\.(php|html)$/.test(url.pathname) || url.pathname.endsWith('/');
};

document.querySelectorAll('a').forEach((link) => {
    if (!sameOriginInternalLink(link)) return;

    link.addEventListener('click', (event) => {
        if (event.metaKey || event.ctrlKey || event.shiftKey || event.altKey) return;
        event.preventDefault();
        body.classList.add('page-is-leaving');
        window.setTimeout(() => {
            window.location.href = link.href;
        }, prefersReducedMotion ? 0 : 320);
    });
});

backToTopButton.addEventListener('click', () => {
    window.scrollTo({
        top: 0,
        behavior: prefersReducedMotion ? 'auto' : 'smooth'
    });
});

requestScrollUpdate();
