    <footer>
        <div class="logo">EUROVI.BE</div>
        <p>The European Vibe Coding Championship</p>
        <p>Organized with passion for Europe's developer community</p>

        <div class="footer-links">
            <a href="/#faq">FAQ</a>
            <a href="/contact.php">Contact</a>
            <a href="/privacy.php">Privacy Policy</a>
        </div>

        <p style="margin-top: 2rem; font-size: 0.9rem; opacity: 0.6;">
            © 2026 Eurovi.be. All rights reserved.
        </p>
    </footer>

    <!-- Schema.org: Organization -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "Organization",
        "name": "Eurovi.be",
        "url": "https://eurovi.be",
        "description": "Eurovi.be organises AI-assisted vibe coding competitions at developer events across Europe.",
        "logo": "https://eurovi.be/favicon.svg",
        "sameAs": []
    }
    </script>

    <script>
        // Smooth scroll for anchor links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });

        // FAQ accordion
        document.querySelectorAll('.faq-question').forEach(question => {
            question.addEventListener('click', function() {
                const item = this.parentElement;
                const isActive = item.classList.contains('active');

                // Close all other items
                document.querySelectorAll('.faq-item').forEach(otherItem => {
                    otherItem.classList.remove('active');
                    const btn = otherItem.querySelector('.faq-question');
                    if (btn) btn.setAttribute('aria-expanded', 'false');
                });

                // Toggle current item
                if (!isActive) {
                    item.classList.add('active');
                    this.setAttribute('aria-expanded', 'true');
                } else {
                    item.classList.remove('active');
                    this.setAttribute('aria-expanded', 'false');
                }
            });
        });

    </script>
</body>
</html>
