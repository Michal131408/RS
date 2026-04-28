<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Radiant Slums | Home</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nosifer&family=Rajdhani:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="icon" href="data:image/svg+xml,<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 100 100'><text y='.9em' font-size='90'>🌆</text></svg>">
</head>
<body>
    <header>
        <h1 class="cyberpunk" data-text="RADIANT SLUMS">RADIANT SLUMS</h1>
    </header>

    <nav>
        <div class="nav-inner">
            <span class="nav-logo">RS</span>
            <input type="checkbox" id="nav-toggle" class="nav-toggle">
            <label for="nav-toggle" class="nav-toggle-label" aria-label="Toggle navigation menu">
                <span></span><span></span><span></span>
            </label>
            <ul>
                <li><a href="index.php" class="active">Home</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="purchase.php" class="btn-purchase">Purchase</a></li>
                <li><a href="contact.php">Contact</a></li>
            </ul>
        </div>
    </nav>

    <main>
        <section class="hero animate-on-scroll">
            <div class="section-header">
                <h2>Welcome to Radiant Slums</h2>
                <p>Radiant Slums is a unique blend of cyberpunk and fantasy, set in a sprawling metropolis where technology and magic coexist. Explore dark alleys, neon-lit streets, and hidden corners of the city as you uncover its secrets.</p>
                <p>Join us on this thrilling adventure and experience the world of Radiant Slums like never before!</p>
            </div>
        </section>

        <section class="animate-on-scroll">
            <div class="section-header">
                <h2>Why Play?</h2>
                <p>Discover what makes Radiant Slums an unforgettable journey</p>
            </div>
            <div class="card-grid">
                <div class="card"><span class="card-icon">🎮</span><h3>Immersive Gameplay</h3><p>Deep character progression, branching storylines, and real-time combat that blends magic with cybernetics.</p></div>
                <div class="card"><span class="card-icon">🌆</span><h3>Expansive World</h3><p>Explore 15 unique districts, from glittering corporate spires to the grimy undercity. Every corner hides a secret.</p></div>
                <div class="card"><span class="card-icon">⚡</span><h3>Tech & Magic</h3><p>Wield devastating spells alongside advanced weaponry. Hack systems, summon entities, or do both at once.</p></div>
            </div>
        </section>

        <section class="stats-section animate-on-scroll">
            <div class="stats-grid">
                <div class="stat-item"><span class="stat-number">50K+</span><span class="stat-label">Active Players</span></div>
                <div class="stat-item"><span class="stat-number">200+</span><span class="stat-label">Unique Quests</span></div>
                <div class="stat-item"><span class="stat-number">15</span><span class="stat-label">Districts</span></div>
                <div class="stat-item"><span class="stat-number">100%</span><span class="stat-label">Addictive</span></div>
            </div>
        </section>

        <div class="two-col animate-on-scroll">
            <section>
                <h2>📡 Latest News</h2>
                <p><strong>Update v2.4 "Neon Dawn"</strong> is live! New district unlocked, fresh questlines, and major balance tweaks.</p>
                <p style="margin-top:8px;"><em>Coming soon:</em> Multiplayer raids — team up and take on corporate megastructures.</p>
            </section>
            <section>
                <h2>💬 Community</h2>
                <p>Join our vibrant community of fans and creators. Share your builds, fan art, theories, and custom mods.</p>
                <p style="margin-top:8px;"><strong>#RadiantSlums</strong> — tag your screenshots for a chance to be featured!</p>
            </section>
        </div>

        <section class="cta-banner animate-on-scroll">
            <h2>Ready to Dive In?</h2>
            <p>Grab your copy now and become a legend in the neon-drenched streets of Radiant Slums.</p>
            <a href="purchase.php" class="btn-glow">Purchase Now</a>
        </section>
    </main>

    <footer>
        <div class="footer-inner">
            <div class="footer-col">
                <h4>Navigate</h4>
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="about.php">About</a></li>
                    <li><a href="purchase.php">Purchase</a></li>
                    <li><a href="contact.php">Contact</a></li>
                </ul>
            </div>
            <div class="footer-col">
                <h4>Community</h4>
                <ul><li><a href="#">Discord</a></li><li><a href="#">Twitter / X</a></li><li><a href="#">Reddit</a></li><li><a href="#">Wiki</a></li></ul>
            </div>
            <div class="footer-col">
                <h4>Support</h4>
                <ul><li><a href="#">FAQ</a></li><li><a href="#">Patch Notes</a></li><li><a href="#">Report a Bug</a></li><li><a href="#">Privacy Policy</a></li></ul>
            </div>
        </div>
        <div class="footer-bottom">
            <p>&copy; 2026 <span>RS Dev</span>. All rights reserved. — Made with ⚡ in the slums.</p>
        </div>
    </footer>

    <button class="back-to-top" id="backToTop" aria-label="Back to top">▲</button>

    <script>
    (function() {
        // --- Back to Top Button ---
        const backToTopBtn = document.getElementById('backToTop');

        function toggleBackToTop() {
            if (window.scrollY > 500) {
                backToTopBtn.classList.add('visible');
            } else {
                backToTopBtn.classList.remove('visible');
            }
        }

        backToTopBtn.addEventListener('click', function() {
            window.scrollTo({ top: 0, behavior: 'smooth' });
        });

        window.addEventListener('scroll', toggleBackToTop, { passive: true });

        // --- Animacja przy scrollowaniu (Intersection Observer) ---
        const animatedElements = document.querySelectorAll('.animate-on-scroll');

        if ('IntersectionObserver' in window) {
            const observer = new IntersectionObserver(function(entries) {
                entries.forEach(function(entry) {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('animated');
                        observer.unobserve(entry.target);
                    }
                });
            }, {
                threshold: 0.15,
                rootMargin: '0px 0px -40px 0px'
            });

            animatedElements.forEach(function(el) {
                observer.observe(el);
            });
        } else {
            // Fallback: pokaż wszystkie od razu
            animatedElements.forEach(function(el) {
                el.classList.add('animated');
            });
        }

        // --- Zamknięcie menu mobilnego po kliknięciu linka ---
        const navToggle = document.getElementById('nav-toggle');
        const navLinks = document.querySelectorAll('nav ul li a');

        navLinks.forEach(function(link) {
            link.addEventListener('click', function() {
                if (navToggle && navToggle.checked) {
                    navToggle.checked = false;
                }
            });
        });

        // --- Początkowy stan przycisku ---
        toggleBackToTop();
    })();
</script>
</body>
</html>