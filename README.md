**Project Name:** Old Capitol &mdash; San Jose, Antique Heritage & Heritage Website<br>
**Designer:** Francis Dominic G. Tenorio<br>
**Framework Used:** Vanilla HTML5, Custom CSS3 (CSS Variables), Vanilla JavaScript, and PHP<br>
**Short Overview:** This project is a premium, responsive promotional website for the Old Capitol building in San Jose de Buenavista, Antique. It serves as a digital heritage guide, highlighting the rich 400-year history of the province, the "Tindahang Lokal" (local foods and products), and the vibrant arts and culture of the region.<br>
The website features a modern UI with glassmorphism effects, smooth scroll animations, a custom-built lightbox gallery, and a fully responsive navigation system, all designed to provide a high-end experience for both local and international visitors.

## 🎨 Design System
*   **Typography:** A sophisticated pairing of **Cormorant Garamond** (for elegant, heritage-focused headings) and **Manrope** (for high-readability body text). I implemented **Fluid Typography** using the `clamp()` function, ensuring text scales perfectly between mobile and desktop without sudden jumps.
*   **Color Palette:**
    *   **Emerald Green (`#1f5c43`):** Represents the lush nature and prestige of the Old Capitol.
    *   **Antique Gold (`#c8924c`):** Symbolizes the rich history and cultural value.
    *   **Parchment Background (`#f6f1e8`):** Evokes a sense of classic history and warmth.
*   **Visual Style:** Modern "Glassmorphism" with blurred backgrounds, subtle gradients, and custom shadows to create a sense of depth and premium quality.
*   **Accessibility:** Includes a `prefers-reduced-motion` media query to respect user system settings by disabling heavy animations for those who need it.

## 📁 Project Structure & Tech Stack
*   **HTML5 & CSS3:** Semantic structure with advanced CSS features like Variables, Flexbox, and Grid. I used a **Custom Grid System** to handle complex layouts like the gallery and timeline.
* **Modular PHP Architecture:** I transitioned the entire project to a **pure PHP-based system**, removing all redundant `.html` files. This ensures a more efficient development workflow using modular templates for consistent headers and footers across the site.
* **Interactive Features:**
    *   **"Did You Know?" Heritage Section:** Added a new promotional section with high-interest "fun facts" about the Old Capitol to keep visitors engaged and curious about the location.
    *   **Staggered Section Reveals:** I implemented a custom JavaScript function that automatically calculates and applies staggered animation delays (`90ms` increments) to grid items, ensuring sections like the Gallery and Features animate in with a professional "wave" effect.
    *   **High-Performance Scroll Logic:** The website uses `window.requestAnimationFrame` and a "ticking" state management pattern to handle scroll events. This ensures that the scroll progress bar and navbar effects remain butter-smooth even on lower-end devices.
    *   **Dynamic Background Parallax:** A subtle parallax effect on the Hero background provides a cinematic sense of depth as the user scrolls, automatically disabled for users with `prefers-reduced-motion` settings.
    *   **Modular PHP Templates:** I used a modular pattern for the header and footer, allowing for a "single source of truth" across all pages, which drastically improved the maintainability of the codebase.
    *   **Custom Lightbox Engine:** Built a native JavaScript lightbox from scratch that dynamically injects the viewer into the DOM only when needed, providing an accessible modal experience with keyboard (`Esc` key) and click-outside-to-close support.
    *   **Fluid Responsive Typography:** Using the CSS `clamp()` function, all headings and body text dynamically adjust their size based on the viewport width, maintaining perfect legibility without needing dozens of media queries.

## 📄 Key Pages
1.  **Home:** A high-impact landing page with a cinematic hero section and quick navigation to all categories.
2.  **History:** A deep dive into the 400-year timeline of San Jose de Buenavista and the Old Capitol.
3.  **Tindahang Lokal:** Showcasing the unique flavors and local products that define the province's commerce.
4.  **Arts & Culture:** Highlighting weaving traditions, festivals, and the craftsmanship of the Antiqueño people.
5.  **Gallery:** A visual storytelling page with a responsive grid and interactive photo viewer.

# AI Co-Pilot Log

---

## 1. Local Server Environment & Deployment
* **AI Tool Used:** Gemini
* **My Prompt:** "can you check on how do i open my website using laragon"
* **How I Used it:** The AI provided a comprehensive guide to moving the project to the Laragon `www` directory and accessing it via virtual hosts (e.g., `http://ws_old_capitolproject.test`). I used this to transition the site from a static file to a functional PHP local server environment.

## 2. Local Network Sharing & Collaboration
* **AI Tool Used:** Gemini
* **My Prompt:** "like im using a local host then i can share this to the other pc"
* **How I Used it:** The AI explained how to use the host PC's IP address and Laragon's built-in "Share" (Ngrok) feature. This allowed me to test the website's responsiveness on multiple devices and prepare for my upcoming presentation.

## 3. Design Audit & Quality Review
* **AI Tool Used:** Gemini
* **My Prompt:** "what do you say about the website"
* **How I Used it:** The AI performed a deep-dive audit of my HTML and CSS. It highlighted the strength of my typography choices (Cormorant Garamond/Manrope) and the technical efficiency of my CSS variables and `clamp()` functions. This gave me the confidence that the site meets professional standards.

## 4. Academic Rubric Optimization
* **AI Tool Used:** Gemini
* **My Prompt:** "can you see the scoring of my teacher" (provided image of rubric)
* **How I Used it:** The AI analyzed my teacher's specific criteria. It identified a critical gap in my "Technical Execution" score—the missing markdown documentation. The AI then helped generate this `README.md` to ensure I hit 100% of the requirements for my Sunday 3 PM deadline.

## 5. Responsive Fixes & Loading Speed
* **AI Tool Used:** Gemini
* **My Prompt:** (Previous interactions regarding image aspect ratios and lazy loading)
* **How I Used it:** Applied `aspect-ratio` properties to ensure images maintain a consistent 3/4 portrait look across all screen sizes and implemented `loading="lazy"` on all gallery images to improve the initial page load speed for the presentation.

## 6. Scroll Animation Logic
* **AI Tool Used:** Gemini
* **My Prompt:** "How do I make the elements fade in when I scroll down?"
* **How I Used it:** The AI suggested using the **Intersection Observer API** and provided a clean JavaScript snippet to add the `is-visible` class to elements. I applied this to all sections using the `.reveal` class to create a premium, high-end feel.

---
*Created for the Old Capitol Promotion Project — San Jose, Antique.*
