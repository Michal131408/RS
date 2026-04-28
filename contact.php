<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact - Radiant Slums</title>
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
                <li><a href="about.php">About</a></li>
                <li><a href="purchase.php" class="btn-purchase">Purchase</a></li>
                <li><a href="contact.php" class="active">Contact</a></li>
            </ul>
        </div>
    </nav>

    <main>
        <section class="animate-on-scroll">
            <div class="section-header">
                <h2>Get in Touch</h2>
                <p>Questions? Feedback? Want to join the team? Drop us a message.</p>
            </div>

            <div class="contact-form" id="contactFormContainer">
                <form id="contactForm" onsubmit="handleSubmit(event)">
                    <div class="form-group">
                        <label for="name">Runner Name</label>
                        <input type="text" id="name" name="name" placeholder="e.g. NeonGhost42" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" id="email" name="email" placeholder="your@email.com" required>
                    </div>
                    <div class="form-group">
                        <label for="message">Your Message</label>
                        <textarea id="message" name="message" placeholder="Tell us what's on your mind..." required></textarea>
                    </div>
                    <button type="submit" class="btn-submit">Send Transmission</button>
                </form>
                <div class="form-message" id="formMessage">✓ Transmission received. We'll get back to you within 24 hours.</div>
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
<script>
    function handleSubmit(event) {
        event.preventDefault();
        const form = document.getElementById('contactForm');
        const msg = document.getElementById('formMessage');
        
        if (!form.checkValidity()) return;
        
        form.style.display = 'none';
        msg.style.display = 'block';
        
        setTimeout(function() {
            form.style.display = 'block';
            msg.style.display = 'none';
            form.reset();
        }, 5000);
    }
</script>
</body>
</html>