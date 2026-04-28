<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About - Radiant Slums</title>
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
                <li><a href="index.php">Home</a></li>
                <li><a href="about.php" class="active">About</a></li>
                <li><a href="purchase.php" class="btn-purchase">Purchase</a></li>
                <li><a href="contact.php">Contact</a></li>
            </ul>
        </div>
    </nav>

    <main>
        <section class="animate-on-scroll">
            <div class="section-header">
                <h2>About Radiant Slums</h2>
                <p>The story behind the neon-drenched world</p>
            </div>
            <div style="max-width:800px; margin:0 auto;">
                <p><strong>Radiant Slums</strong> is a dark cyberpunk-fantasy RPG set in the megacity of <em>Neo-Kyiv</em>, a sprawling urban labyrinth where ancient magic pulses beneath layers of chrome and concrete. You play as a "Runner" – a mercenary, hacker, or mage – navigating the fragile balance between corrupt corporations, rogue AIs, and the mysterious Glow that seeps from the city's depths.</p>
                <p>Our small, passionate team at <strong>RS Dev</strong> started this project in 2024 with a simple goal: to create a world that felt alive, dangerous, and utterly immersive. We combine hand-crafted pixel art with modern lighting effects, an original synthwave soundtrack, and deep, choice-driven storytelling.</p>
                <p>The game features a branching narrative with over 200 quests, 15 distinct districts, and a unique system that lets you combine cybernetic augmentations with arcane spells. Every decision reshapes the slums.</p>
            </div>
        </section>

        <section class="animate-on-scroll">
            <div class="section-header">
                <h2>Meet the Team</h2>
                <p>The minds behind the madness</p>
            </div>
            <div class="team-grid">
                <div class="team-member">
                    <div class="team-avatar"><img src="kacpi.jpg" alt="Kacper Mencweld"></div>
                    <h3>Kacper Mencweld</h3>
                    <p>Graphics</p>
                </div>
                <div class="team-member">
                    <div class="team-avatar"><img src="adi.jpg" alt="Adrian Gryczke"></div>
                    <h3>Adrian Gryczke</h3>
                    <p>Programmer</p>
                </div>
                <div class="team-member">
                    <div class="team-avatar"><img src="michu.jpg" alt="Michał Jung"></div>
                    <h3>Michał Jung</h3>
                    <p>Programmer</p>
                </div>
            </div>
        </section>

        <section class="animate-on-scroll">
            <div class="section-header">
                <h2>Our Vision</h2>
            </div>
            <div style="max-width:700px; margin:0 auto;">
                <p>We believe the best stories emerge from the spaces between technology and humanity. Radiant Slums isn't just about neon lights and cyberware; it's about the people who live in the cracks, the communities that survive, and the magic that refuses to die. We're building a game that respects your intelligence and rewards your curiosity.</p>
            </div>
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