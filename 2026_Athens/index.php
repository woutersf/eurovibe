<?php
$pageTitle       = 'Athens Vibe Coding Competition 2026 | Drupal Developer Days | Eurovi.be';
$metaDescription = 'Compete in the Athens Vibe Coding Competition on April 22-25, 2026 at OTE Academy, Marousi, Athens, Greece. Build a complete application live on stage using Claude, Cursor, or any AI tool. Open to all developers worldwide. Physical presence required.';
$metaKeywords    = 'vibe coding competition Athens 2026, AI coding competition Greece, Drupal Developer Days Athens 2026, coding competition OTE Academy Marousi, Claude AI coding contest, vibe coding April 2026, developer competition Athens Greece, AI-assisted coding competition';
$ogDescription   = 'Open AI-assisted coding competition at Drupal Developer Days Athens 2026. Build a complete application live on stage at OTE Academy, Marousi, Athens. April 22-25, 2026. Register now.';
$extraStyles     = '/2026_Athens/style.css';
$geoMeta         = '
    <meta name="geo.region" content="GR-I">
    <meta name="geo.placename" content="Marousi, Athens, Greece">
    <meta name="geo.position" content="38.0500;23.8000">
    <meta name="ICBM" content="38.0500, 23.8000">
';
include __DIR__ . '/../includes/header.php';
?>

    <!-- DDD2026 Context Banner -->
    <div class="ddd-banner">
        Part of <a href="https://devdays2026.drupal.org.gr/" target="_blank" rel="noopener">Drupal Developer Days Athens 2026</a> | April 22-25, 2026 | OTE Academy, Athens, Greece
    </div>

    <!-- Hero Section -->
    <section class="hero" id="main-content" aria-labelledby="hero-heading">
        <div class="hero-content">
            <p class="logo" aria-hidden="true">EUROVI.BE | ATHENS</p>
            <h1 id="hero-heading">Vibe Coding Competition</h1>
            <p class="tagline">Build a complete application live on stage in Athens, Greece. Direct your 🦞 and show what it can do.</p>

            <div class="event-details" role="list" aria-label="Event details">
                <div class="detail-item" role="listitem">
                    <span class="detail-icon" aria-hidden="true">📍</span>
                    <span><strong>OTE Academy, Marousi, Athens, Greece</strong></span>
                </div>
                <div class="detail-item" role="listitem">
                    <span class="detail-icon" aria-hidden="true">📅</span>
                    <span><strong><time datetime="2026-04-22">April 22-25, 2026</time></strong></span>
                </div>
                <div class="detail-item" role="listitem">
                    <span class="detail-icon" aria-hidden="true">⏰</span>
                    <span><strong><time datetime="09:00">09:00</time> &ndash; <time datetime="18:00">18:00</time> EEST</strong></span>
                </div>
            </div>

            <!-- Key participation facts -->
            <div class="participation-notice" role="list" aria-label="Participation requirements">
                <div class="participation-badge participation-badge--required" role="listitem">
                    <span aria-hidden="true">✈️</span>
                    Physical presence in Athens required
                </div>
                <div class="participation-badge participation-badge--open" role="listitem">
                    <span aria-hidden="true">🌍</span>
                    Open to all developers, no invite needed
                </div>
            </div>

            <div class="prize-highlight" role="region" aria-labelledby="prizes-heading">
                <h2 id="prizes-heading"><span aria-hidden="true">🏆</span> Competition Prizes</h2>
                <div class="prize-tiers">
                    <div class="prize-tier">
                        <strong>1st Place</strong><br>
                        Medal + prizes to be announced
                    </div>
                    <div class="prize-tier">
                        <strong>2nd Place</strong><br>
                        Medal
                    </div>
                    <div class="prize-tier">
                        <strong>3rd Place</strong><br>
                        Medal
                    </div>
                </div>
            </div>

            <div class="cta-buttons">
                <a href="#register" class="btn btn-primary">Register Now &darr;</a>
                <a href="https://devdays2026.drupal.org.gr/" class="btn btn-secondary" target="_blank" rel="noopener">DDD Athens 2026 &rarr;</a>
            </div>
        </div>
    </section>

    <!-- Competition Flow -->
    <section class="vibe-section" aria-labelledby="competition-flow-heading">
        <h2 id="competition-flow-heading" class="section-title">How it works</h2>
        <p class="section-subtitle">Three steps to the stage.</p>

        <div class="vibe-content">
            <div class="vibe-card">
                <h3><span aria-hidden="true">📋</span> Step 1: Submit Your Profile</h3>
                <ul>
                    <li>Which AI tools you work with (Claude 🦞, Cursor, other)</li>
                    <li>An example project you have built with AI assistance</li>
                    <li>Your GitHub profile</li>
                    <li>Your Drupal.org profile</li>
                    <li>A screen-recorded video of you vibe coding</li>
                </ul>
                <a href="#register" class="btn btn-primary" style="display: inline-block; margin-top: 1.5rem;">Register Now &darr;</a>
            </div>

            <div class="vibe-card">
                <h3><span aria-hidden="true">🎯</span> Step 2: Top 3 Selected</h3>
                <ul>
                    <li>We review all submissions</li>
                    <li>The top 3 finalists are chosen</li>
                    <li>Selected participants are notified directly</li>
                    <li>Finalists must be present in Athens on April 22-25, 2026</li>
                </ul>
            </div>

            <div class="vibe-card">
                <h3><span aria-hidden="true">🏆</span> Step 3: Live on Stage</h3>
                <ul>
                    <li>The challenge is revealed live on stage</li>
                    <li>Build a complete project in one sitting</li>
                    <li>Judged in front of the DDD Athens audience</li>
                    <li>Winner takes home a medal and prizes to be announced</li>
                </ul>
            </div>
        </div>
    </section>

    <!-- Judging Criteria Section -->
    <section class="judging-section" id="judging" aria-labelledby="judging-heading">
        <h2 id="judging-heading" class="section-title">Judging Criteria</h2>
        <p class="section-subtitle">Five areas. Each weighted by the expert panel.</p>

        <div class="judging-grid">

            <div class="judging-card">
                <div class="judging-number">01</div>
                <h3>Business Impact</h3>
                <ul>
                    <li>Fit with the business case</li>
                    <li>Expected customer value</li>
                    <li>Real-world applicability</li>
                </ul>
            </div>

            <div class="judging-card">
                <div class="judging-number">02</div>
                <h3>Code Quality</h3>
                <ul>
                    <li>Structure and maintainability</li>
                    <li>Tests, CI/CD, linters</li>
                    <li>Technology choices</li>
                </ul>
            </div>

            <div class="judging-card">
                <div class="judging-number">03</div>
                <h3>AI Efficiency</h3>
                <ul>
                    <li>Open source vs. closed AI</li>
                    <li>Cost awareness</li>
                    <li>Transparency about AI spend</li>
                </ul>
            </div>

            <div class="judging-card">
                <div class="judging-number">04</div>
                <h3>Drupal &amp; Open Source</h3>
                <ul>
                    <li>Relevance to the community</li>
                    <li>Contribution potential</li>
                </ul>
            </div>

            <div class="judging-card">
                <div class="judging-number">05</div>
                <h3>Creativity &amp; Design</h3>
                <ul>
                    <li>Originality</li>
                    <li>Elegance of the solution</li>
                    <li>UX and design quality</li>
                </ul>
            </div>

        </div>
    </section>

    <!-- Registration Section -->
    <section class="register-section" id="register" aria-labelledby="register-heading">
        <h2 id="register-heading" class="section-title">Register</h2>
        <p class="section-subtitle">Submit your profile for the Athens Vibe Coding Competition</p>

        <div class="register-intro">
            <p>Fill in the form below to submit your candidacy. All developers are welcome. The competition is open to anyone who believes their agent is ready to perform.</p>
            <p>Registering is step one. We will review all submissions and contact the top 3 finalists directly. <strong style="color: #64B5F6;">Physical presence in Athens is required if you are selected.</strong></p>
        </div>

        <div class="register-frame-wrap">
            <iframe
                src="https://docs.google.com/forms/d/e/1FAIpQLScEv2dm2_ToVRVihpBKaWpDKDABZ6ldbVPETFByViJrOJyYbw/viewform?embedded=true"
                width="100%"
                height="1400"
                frameborder="0"
                marginheight="0"
                marginwidth="0"
                title="Athens Vibe Coding Competition 2026 Registration Form"
                loading="lazy">
                Loading registration form&hellip;
            </iframe>
        </div>

        <div class="register-direct-link">
            <a href="https://docs.google.com/forms/d/e/1FAIpQLScEv2dm2_ToVRVihpBKaWpDKDABZ6ldbVPETFByViJrOJyYbw/viewform?usp=header" target="_blank" rel="noopener">
                Having trouble with the form? Open it directly &rarr;
            </a>
        </div>
    </section>

    <!-- FAQ Section -->
    <section class="faq-section" id="faq" aria-labelledby="faq-heading">
        <h2 id="faq-heading" class="section-title">Frequently Asked Questions</h2>
        <p class="section-subtitle">Everything you need to know about the Athens competition</p>

        <div class="faq-container" role="list">
            <div class="faq-item" role="listitem">
                <button class="faq-question" aria-expanded="false" aria-controls="faq-a1">
                    Who can participate?
                </button>
                <div class="faq-answer" id="faq-a1" role="region">
                    Anyone can apply. The competition is completely open: no invitation, no qualification round, no affiliation required. Submit your profile, and if you are selected as a top 3 finalist, you must be physically present in Athens on April 22-25, 2026.
                </div>
            </div>

            <div class="faq-item" role="listitem">
                <button class="faq-question" aria-expanded="false" aria-controls="faq-a2">
                    Is physical presence in Athens required?
                </button>
                <div class="faq-answer" id="faq-a2" role="region">
                    Yes. The final competition takes place on stage at OTE Academy in Marousi, Athens, Greece on April 22-25, 2026. If you are selected as a finalist, you must be present in person. Travel and accommodation are the responsibility of the participant.
                </div>
            </div>

            <div class="faq-item" role="listitem">
                <button class="faq-question" aria-expanded="false" aria-controls="faq-a3">
                    What AI tools can I use?
                </button>
                <div class="faq-answer" id="faq-a3" role="region">
                    You may use any AI assistant: Claude 🦞, Cursor, Windsurf, GitHub Copilot, or any other tool. You can use any programming language and framework. Tell us about your preferred stack in the registration form. It is part of what we evaluate.
                </div>
            </div>

            <div class="faq-item" role="listitem">
                <button class="faq-question" aria-expanded="false" aria-controls="faq-a4">
                    How does selection work?
                </button>
                <div class="faq-answer" id="faq-a4" role="region">
                    Submit your profile: tools, an example project, your GitHub and Drupal.org profiles, and a screen-recorded video of you building with AI assistance. We review all submissions and select the 3 strongest candidates. Those 3 receive the challenge live on stage.
                </div>
            </div>

            <div class="faq-item" role="listitem">
                <button class="faq-question" aria-expanded="false" aria-controls="faq-a5">
                    What happens on the day of the competition?
                </button>
                <div class="faq-answer" id="faq-a5" role="region">
                    The 3 finalists receive the challenge on stage in front of the DDD Athens audience. Each builds a complete project in one sitting. Screens are shared live. At the end, an expert panel judges the results and announces the winner. Bring your own laptop with everything already installed and licensed.
                </div>
            </div>

            <div class="faq-item" role="listitem">
                <button class="faq-question" aria-expanded="false" aria-controls="faq-a6">
                    How are projects judged?
                </button>
                <div class="faq-answer" id="faq-a6" role="region">
                    Five criteria: business impact, code quality, AI efficiency, Drupal and open source relevance, and creativity and design. See the <a href="#judging" style="color: #64B5F6;">full judging criteria</a> above. The challenge is revealed on the day. Judging is live and transparent.
                </div>
            </div>

            <div class="faq-item" role="listitem">
                <button class="faq-question" aria-expanded="false" aria-controls="faq-a7">
                    Will the competition be livestreamed?
                </button>
                <div class="faq-answer" id="faq-a7" role="region">
                    Yes. Finalists' screens will be projected live and the competition will be streamed. By competing, you agree your screen may be shared with the audience and online viewers. This is confirmed in the registration form.
                </div>
            </div>
        </div>
    </section>

    <?php /*
    Sponsors Section — hidden until confirmed sponsors
    <section class="sponsors-section" id="sponsors" aria-labelledby="sponsors-heading">
        <h2 id="sponsors-heading" class="section-title">Sponsors</h2>
        <p class="section-subtitle">Proudly supported by</p>

        <div class="sponsors-grid">
            <div class="sponsor-card">
                <div class="sponsor-logo">SPONSOR 1</div>
                <p style="color: #8BA7C7;">Location sponsor</p>
            </div>
            <div class="sponsor-card">
                <div class="sponsor-logo">SPONSOR 2</div>
                <p style="color: #8BA7C7;">Prize sponsor</p>
            </div>
            <div class="sponsor-card">
                <div class="sponsor-logo">SPONSOR 3</div>
                <p style="color: #8BA7C7;">Community sponsor</p>
            </div>
        </div>

        <div style="text-align: center; margin-top: 4rem;">
            <p style="color: #8BA7C7; margin-bottom: 1.5rem;">Interested in sponsoring the Athens Vibe Coding Competition?</p>
            <a href="/contact.php" class="btn btn-secondary">Become a Sponsor</a>
        </div>
    </section>
    */ ?>

    <!-- Structured Data: Event -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "Event",
        "name": "Athens Vibe Coding Competition 2026",
        "description": "An open AI-assisted vibe coding competition co-located with Drupal Developer Days Athens 2026. Developers build a complete application live on stage at OTE Academy, Marousi, Athens, Greece. Open to all. Physical presence required.",
        "url": "https://eurovi.be/2026_Athens",
        "startDate": "2026-04-22T09:00:00+03:00",
        "endDate": "2026-04-25T18:00:00+03:00",
        "eventStatus": "https://schema.org/EventScheduled",
        "eventAttendanceMode": "https://schema.org/OfflineEventAttendanceMode",
        "isAccessibleForFree": true,
        "inLanguage": "en",
        "location": {
            "@type": "Place",
            "name": "OTE Academy",
            "url": "https://oteacademy.gr",
            "address": {
                "@type": "PostalAddress",
                "streetAddress": "Pelika and Spartis 1",
                "addressLocality": "Marousi",
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
        "organizer": {
            "@type": "Organization",
            "name": "Eurovi.be",
            "url": "https://eurovi.be"
        },
        "superEvent": {
            "@type": "Event",
            "name": "Drupal Developer Days Athens 2026",
            "url": "https://devdays2026.drupal.org.gr/"
        },
        "offers": {
            "@type": "Offer",
            "url": "https://eurovi.be/2026_Athens#register",
            "price": "0",
            "priceCurrency": "EUR",
            "availability": "https://schema.org/InStock"
        },
        "image": "https://eurovi.be/images/og-image.jpg"
    }
    </script>

    <!-- Structured Data: FAQ -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "FAQPage",
        "mainEntity": [
            {
                "@type": "Question",
                "name": "Who can participate in the Athens Vibe Coding Competition 2026?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Anyone can apply. The competition is completely open: no invitation, no qualification round, no affiliation required. Submit your profile, and if you are selected as a top 3 finalist, you must be physically present in Athens on April 22-25, 2026."
                }
            },
            {
                "@type": "Question",
                "name": "Is physical presence in Athens required?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Yes. The final competition takes place on stage at OTE Academy in Marousi, Athens, Greece on April 22-25, 2026. If you are selected as a finalist, you must be present in person. Travel and accommodation are the responsibility of the participant."
                }
            },
            {
                "@type": "Question",
                "name": "What AI tools can I use in the vibe coding competition?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "You may use any AI assistant: Claude, Cursor, Windsurf, GitHub Copilot, or any other tool. Any programming language and framework is allowed. The choice of AI tools is part of what the judges evaluate."
                }
            },
            {
                "@type": "Question",
                "name": "How does the selection process work?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Submit your profile including your AI tools, an example project, your GitHub and Drupal.org profiles, and a screen-recorded video of you building with AI assistance. The organizers review all submissions and select the 3 strongest candidates, who then compete live on stage."
                }
            },
            {
                "@type": "Question",
                "name": "How are projects judged at the Athens Vibe Coding Competition?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Projects are judged on five criteria: business impact, code quality, AI efficiency, Drupal and open source relevance, and creativity and design. The challenge is revealed live on the day. Judging is transparent and takes place in front of the audience."
                }
            },
            {
                "@type": "Question",
                "name": "Will the Athens Vibe Coding Competition be livestreamed?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Yes. Finalists' screens will be projected live and the competition will be streamed online. By competing, participants agree their screen may be shared with the live audience and online viewers."
                }
            }
        ]
    }
    </script>

<?php include __DIR__ . '/../includes/footer.php'; ?>
