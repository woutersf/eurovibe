<?php
$pageTitle       = 'Kortrijk Vibe Coding Competition 2026 | DrupalCamp Kortrijk | Eurovi.be';
$metaDescription = 'Kortrijk Vibe Coding Competition at DrupalCamp Kortrijk, June 29-30, 2026. Build an app live on stage using AI tools. Open to all developers. Register now.';
$metaKeywords    = 'vibe coding competition Kortrijk 2026, AI coding competition Belgium, DrupalCamp Kortrijk 2026, coding competition Kortrijk, Claude AI coding contest, vibe coding June 2026, developer competition Belgium, AI-assisted coding competition';
$ogDescription   = 'Open AI-assisted coding competition at DrupalCamp Kortrijk 2026. Build a complete application live on stage in Kortrijk, Belgium. June 29-30, 2026. Register now.';
$extraStyles     = '/2026_Kortrijk/style.css';
$geoMeta         = '
    <meta name="geo.region" content="BE-VWV">
    <meta name="geo.placename" content="Kortrijk, Belgium">
    <meta name="geo.position" content="50.7958;3.2470">
    <meta name="ICBM" content="50.7958, 3.2470">
';
include 'includes/header.php';
?>

    <!-- DrupalCamp Context Banner -->
    <div class="ddd-banner">
        Part of <a href="https://drupalcamp.be/" target="_blank" rel="noopener">DrupalCamp Kortrijk 2026</a> | June 29-30, 2026 | Kortrijk, Belgium
    </div>

    <!-- Hero Section -->
    <section class="hero" id="main-content" aria-labelledby="hero-heading">
        <div class="hero-content">
            <p class="logo" aria-hidden="true">EUROVI.BE | KORTRIJK</p>
            <h1 id="hero-heading">Kortrijk Vibe Coding Competition 2026</h1>
            <p class="tagline">Build a complete application live on stage in Kortrijk, Belgium. <br>Show us what your agents can do.</p>

            <div class="event-details" role="list" aria-label="Event details">
                <div class="detail-item" role="listitem">
                    <span class="detail-icon" aria-hidden="true">📍</span>
                    <span><strong>Sint-Martens-Latemlaan 1B, 8500 Kortrijk, Belgium</strong></span>
                </div>
                <div class="detail-item" role="listitem">
                    <span class="detail-icon" aria-hidden="true">📅</span>
                    <span><strong><time datetime="2026-06-29/2026-06-30">June 29-30, 2026</time></strong></span>
                </div>
                <div class="detail-item" role="listitem">
                    <span class="detail-icon" aria-hidden="true">⏰</span>
                    <span><strong><time datetime="09:00">09:00</time> &ndash; <time datetime="18:00">18:00</time> CEST</strong></span>
                </div>
            </div>

            <!-- Key participation facts -->
            <div class="participation-notice" role="list" aria-label="Participation requirements">
                <div class="participation-badge participation-badge--required" role="listitem">
                    <span aria-hidden="true">✈️</span>
                    Physical presence in Kortrijk required
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
                <a href="https://drupalcamp.be/" class="btn btn-secondary" target="_blank" rel="noopener">DrupalCamp Kortrijk 2026 &rarr;</a>
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
                    <li>Finalists must be present in Kortrijk on June 29-30, 2026</li>
                </ul>
            </div>

            <div class="vibe-card">
                <h3><span aria-hidden="true">🏆</span> Step 3: Live on Stage</h3>
                <ul>
                    <li>The challenge is revealed live on stage</li>
                    <li>Build a complete project in one sitting</li>
                    <li>Judged in front of the DrupalCamp Kortrijk audience</li>
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
        <p class="section-subtitle">Submit your profile for the Kortrijk Vibe Coding Competition</p>

        <div class="register-intro">
            <p>Fill in the form below to submit your candidacy. All developers are welcome. The competition is open to anyone who believes their agent is ready to perform.</p>
            <p>Registering is step one. We will review all submissions and contact the top 3 finalists directly. <strong style="color: #F38A7E;">Physical presence in Kortrijk is required if you are selected.</strong></p>
        </div>

        <div class="register-frame-wrap">
            <iframe
                src="https://docs.google.com/forms/d/e/1FAIpQLScXGC_k2pFhFqMu6ai9_-CV9knD2YNoRMvGW_4rpAGanJUIyQ/viewform?embedded=true"
                width="100%"
                height="1400"
                frameborder="0"
                marginheight="0"
                marginwidth="0"
                title="Kortrijk Vibe Coding Competition 2026 Registration Form"
                loading="lazy">
                Loading registration form&hellip;
            </iframe>
        </div>

        <div class="register-direct-link">
            <a href="https://docs.google.com/forms/d/e/1FAIpQLScXGC_k2pFhFqMu6ai9_-CV9knD2YNoRMvGW_4rpAGanJUIyQ/viewform?usp=header" target="_blank" rel="noopener">
                Having trouble with the form? Open it directly &rarr;
            </a>
        </div>
    </section>

    <!-- FAQ Section -->
    <section class="faq-section" id="faq" aria-labelledby="faq-heading">
        <h2 id="faq-heading" class="section-title">Frequently Asked Questions</h2>
        <p class="section-subtitle">Everything you need to know about the Kortrijk competition</p>

        <div class="faq-container" role="list">
            <div class="faq-item" role="listitem">
                <button class="faq-question" aria-expanded="false" aria-controls="faq-a1">
                    Who can participate?
                </button>
                <div class="faq-answer" id="faq-a1" role="region">
                    Anyone can apply. The competition is completely open: no invitation, no qualification round, no affiliation required. Submit your profile, and if you are selected as a top 3 finalist, you must be physically present in Kortrijk on June 29-30, 2026.
                </div>
            </div>

            <div class="faq-item" role="listitem">
                <button class="faq-question" aria-expanded="false" aria-controls="faq-a2">
                    Is physical presence in Kortrijk required?
                </button>
                <div class="faq-answer" id="faq-a2" role="region">
                    Yes. The final competition takes place on stage at DrupalCamp Kortrijk in Kortrijk, Belgium on June 29-30, 2026. If you are selected as a finalist, you must be present in person. Travel and accommodation are the responsibility of the participant.
                </div>
            </div>

            <div class="faq-item" role="listitem">
                <button class="faq-question" aria-expanded="false" aria-controls="faq-a3">
                    What AI tools can I use?
                </button>
                <div class="faq-answer" id="faq-a3" role="region">
                    You may use any AI assistant: Claude 🦞, Cursor, Windsurf, GitHub Copilot, or any other tool. You can use any programming language and framework. Tell us about your preferred stack in the registration form. It is part of what we evaluate. Obviously we like open source!
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
                    The 3 finalists receive the challenge on stage in front of the DrupalCamp Kortrijk audience. Each builds a complete project in one sitting. Screens are shared live. At the end, an expert panel judges the results and announces the winner. Bring your own laptop with everything already installed and licensed.
                </div>
            </div>

            <div class="faq-item" role="listitem">
                <button class="faq-question" aria-expanded="false" aria-controls="faq-a6">
                    How are projects judged?
                </button>
                <div class="faq-answer" id="faq-a6" role="region">
                    Five criteria: business impact, code quality, AI efficiency, Drupal and open source relevance, and creativity and design. See the <a href="#judging" style="color: #F38A7E;">full judging criteria</a> above. The challenge is revealed on the day. Judging is live and transparent.
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
                <p style="color: #C8A39C;">Location sponsor</p>
            </div>
            <div class="sponsor-card">
                <div class="sponsor-logo">SPONSOR 2</div>
                <p style="color: #C8A39C;">Prize sponsor</p>
            </div>
            <div class="sponsor-card">
                <div class="sponsor-logo">SPONSOR 3</div>
                <p style="color: #C8A39C;">Community sponsor</p>
            </div>
        </div>

        <div style="text-align: center; margin-top: 4rem;">
            <p style="color: #C8A39C; margin-bottom: 1.5rem;">Interested in sponsoring the Kortrijk Vibe Coding Competition?</p>
            <a href="/contact.php" class="btn btn-secondary">Become a Sponsor</a>
        </div>
    </section>
    */ ?>

    <!-- Structured Data: Event -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "Event",
        "name": "Kortrijk Vibe Coding Competition 2026",
        "description": "An open AI-assisted vibe coding competition co-located with DrupalCamp Kortrijk 2026. Developers build a complete application live on stage in Kortrijk, Belgium. Open to all. Physical presence required.",
        "url": "https://eurovi.be/2026_Kortrijk.php",
        "startDate": "2026-06-29T09:00:00+02:00",
        "endDate": "2026-06-30T18:00:00+02:00",
        "eventStatus": "https://schema.org/EventScheduled",
        "eventAttendanceMode": "https://schema.org/OfflineEventAttendanceMode",
        "isAccessibleForFree": true,
        "inLanguage": "en",
        "location": {
            "@type": "Place",
            "name": "DrupalCamp Kortrijk",
            "address": {
                "@type": "PostalAddress",
                "streetAddress": "Sint-Martens-Latemlaan 1B",
                "addressLocality": "Kortrijk",
                "addressRegion": "West Flanders",
                "postalCode": "8500",
                "addressCountry": "BE"
            },
            "geo": {
                "@type": "GeoCoordinates",
                "latitude": "50.7958",
                "longitude": "3.2470"
            }
        },
        "organizer": {
            "@type": "Organization",
            "name": "Eurovi.be",
            "url": "https://eurovi.be"
        },
        "superEvent": {
            "@type": "Event",
            "name": "DrupalCamp Kortrijk 2026",
            "url": "https://drupalcamp.be/"
        },
        "offers": {
            "@type": "Offer",
            "url": "https://eurovi.be/2026_Kortrijk.php#register",
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
                "name": "Who can participate in the Kortrijk Vibe Coding Competition 2026?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Anyone can apply. The competition is completely open: no invitation, no qualification round, no affiliation required. Submit your profile, and if you are selected as a top 3 finalist, you must be physically present in Kortrijk on June 29-30, 2026."
                }
            },
            {
                "@type": "Question",
                "name": "Is physical presence in Kortrijk required?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Yes. The final competition takes place on stage at DrupalCamp Kortrijk in Kortrijk, Belgium on June 29-30, 2026. If you are selected as a finalist, you must be present in person. Travel and accommodation are the responsibility of the participant."
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
                "name": "How are projects judged at the Kortrijk Vibe Coding Competition?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Projects are judged on five criteria: business impact, code quality, AI efficiency, Drupal and open source relevance, and creativity and design. The challenge is revealed live on the day. Judging is transparent and takes place in front of the audience."
                }
            },
            {
                "@type": "Question",
                "name": "Will the Kortrijk Vibe Coding Competition be livestreamed?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Yes. Finalists' screens will be projected live and the competition will be streamed online. By competing, participants agree their screen may be shared with the live audience and online viewers."
                }
            }
        ]
    }
    </script>

    <!-- Structured Data: Breadcrumb -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "BreadcrumbList",
        "itemListElement": [
            {
                "@type": "ListItem",
                "position": 1,
                "name": "Home",
                "item": "https://eurovi.be"
            },
            {
                "@type": "ListItem",
                "position": 2,
                "name": "Kortrijk Vibe Coding Competition 2026",
                "item": "https://eurovi.be/2026_Kortrijk.php"
            }
        ]
    }
    </script>

<?php include 'includes/footer.php'; ?>
