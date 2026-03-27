    <footer>
        <div class="logo">EUROVI.BE</div>
        <p>The European Vibe Coding Championship</p>
        <p>Organized with passion for Europe's developer community</p>

        <div class="footer-links">
            <a href="/#rules">Rules & Guidelines</a>
            <a href="/#faq">FAQ</a>
            <a href="/contact.php">Contact</a>
            <a href="/#privacy">Privacy Policy</a>
        </div>

        <p style="margin-top: 2rem; font-size: 0.9rem; opacity: 0.6;">
            © 2026 Eurovi.be. All rights reserved.
        </p>
    </footer>

    <!-- Schema.org Structured Data -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "Event",
        "name": "Eurovi.be - European Vibe Coding Championship",
        "description": "Eurovi.be is the premier European vibe coding competition where top developers from across Europe compete in productivity, efficiency and speed. Taking place at OTE Academy in Marousi, Athens, Greece.",
        "startDate": "2026-07-04T09:00:00+03:00",
        "endDate": "2026-07-04T18:00:00+03:00",
        "eventStatus": "https://schema.org/EventScheduled",
        "eventAttendanceMode": "https://schema.org/OfflineEventAttendanceMode",
        "location": {
            "@type": "Place",
            "name": "OTE Academy",
            "address": {
                "@type": "PostalAddress",
                "streetAddress": "Pelika and Spartis 1",
                "addressLocality": "Marousi, Athens",
                "addressRegion": "Attica",
                "postalCode": "15122",
                "addressCountry": "GR"
            },
            "geo": {
                "@type": "GeoCoordinates",
                "latitude": "38.0500",
                "longitude": "23.8000"
            }
        },
        "image": "https://eurovi.be/images/og-image.jpg",
        "organizer": {
            "@type": "Organization",
            "name": "European Vibe Coding Association",
            "url": "https://eurovi.be",
            "address": {
                "@type": "PostalAddress",
                "addressLocality": "Athens",
                "addressRegion": "Attica",
                "addressCountry": "GR"
            }
        },
        "offers": {
            "@type": "Offer",
            "url": "https://eurovi.be/#register",
            "price": "0",
            "priceCurrency": "EUR",
            "availability": "https://schema.org/InStock",
            "validFrom": "2025-12-11"
        },
        "performer": {
            "@type": "PerformingGroup",
            "name": "European Vibe Coders"
        },
        "inLanguage": "en",
        "isAccessibleForFree": true,
        "maximumAttendeeCapacity": 50
    }
    </script>

    <!-- LocalBusiness Schema for venue -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "EducationalOrganization",
        "name": "OTE Academy",
        "address": {
            "@type": "PostalAddress",
            "streetAddress": "Pelika and Spartis 1",
            "addressLocality": "Marousi, Athens",
            "addressRegion": "Attica",
            "postalCode": "15122",
            "addressCountry": "GR"
        },
        "geo": {
            "@type": "GeoCoordinates",
            "latitude": "38.0500",
            "longitude": "23.8000"
        },
        "url": "https://oteacademy.gr"
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
