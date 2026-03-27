<?php
$pageTitle = 'Eurovi.be – European Vibe Coding Championship';
include 'includes/header.php';
?>

    <!-- Hero Section -->
    <section class="hero competitions-hero" id="main-content" aria-labelledby="hero-heading">
        <div class="hero-content">
            <p class="logo" aria-hidden="true">EUROVI.BE</p>
            <h1 id="hero-heading">Put your agent to work.</h1>
            <p class="tagline">Europe's Vibe Coding Championship.</p>
            <p class="tagline-note">Physical competitions across Europe. Real challenges, real stages, real prizes.</p>
        </div>
    </section>

    <!-- Competitions List -->
    <section class="competitions-section" id="competitions" aria-labelledby="competitions-heading">
        <h2 id="competitions-heading" class="section-title">Competitions</h2>
        <p class="section-subtitle">Find your competition</p>

        <div class="competitions-list">

            <!-- Athens 2026 -->
            <article class="competition-entry competition-entry--open" aria-label="Athens Vibe Coding Competition 2026">
                <div class="competition-entry-left">
                    <div class="competition-flag-wrap" aria-hidden="true">🇬🇷</div>
                    <div class="competition-info">
                        <div class="competition-status competition-status--open">Registration Open</div>
                        <h3 class="competition-title">Athens Vibe Coding Competition 2026</h3>
                        <p class="competition-context">Part of Drupal Developer Days Athens 2026</p>
                        <div class="competition-details">
                            <span>📍 OTE Academy, Marousi, Athens</span>
                            <span>📅 Saturday, July 4, 2026</span>
                            <span>🏆 Medal + prizes TBA</span>
                        </div>
                        <div class="competition-notice">
                            <span class="notice-badge">Physical attendance required</span>
                            <span class="notice-badge">Open to all developers</span>
                        </div>
                    </div>
                </div>
                <div class="competition-entry-right">
                    <a href="/2026_Athens" class="btn btn-primary">View &amp; Register &rarr;</a>
                </div>
            </article>

            <!-- Upcoming -->
            <article class="competition-entry competition-entry--upcoming" aria-label="Upcoming competition locations">
                <div class="competition-entry-left">
                    <div class="competition-flag-wrap" aria-hidden="true">🇧🇪 🇳🇱</div>
                    <div class="competition-info">
                        <div class="competition-status competition-status--upcoming">Coming Soon</div>
                        <h3 class="competition-title">Kortrijk &amp; Rotterdam Editions</h3>
                        <p class="competition-context">Belgium and Netherlands competitions in development</p>
                    </div>
                </div>
                <div class="competition-entry-right">
                    <a href="/contact.php" class="btn btn-secondary">Stay Informed &rarr;</a>
                </div>
            </article>

        </div>
    </section>

    <!-- About Section -->
    <section class="about-section" id="about" aria-labelledby="about-heading">
        <div class="about-content">
            <h2 id="about-heading" class="section-title">What is Eurovi.be?</h2>
            <p class="about-text">Eurovi.be organises vibe coding competitions at developer events across Europe. Participants demonstrate what is possible when a skilled developer directs Claude 🦞 or another AI assistant with confidence and clarity, building complete, functional applications in a single sitting, live on stage.</p>
            <p class="about-text">The best vibe coders don't just prompt. They architect, direct, and deliver. That is what we reward.</p>
            <div style="margin-top: 2.5rem;">
                <a href="/2026_Athens" class="btn btn-primary">View Athens 2026</a>
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section class="faq-section" id="faq" aria-labelledby="faq-heading">
        <h2 id="faq-heading" class="section-title">Frequently Asked Questions</h2>
        <p class="section-subtitle">About Eurovi.be</p>

        <div class="faq-container" role="list">
            <div class="faq-item" role="listitem">
                <button class="faq-question" aria-expanded="false" aria-controls="faq-answer-1">
                    Who can participate?
                </button>
                <div class="faq-answer" id="faq-answer-1" role="region">
                    Anyone can apply. Submit your profile and show us what you are made of. Spots are limited. We review all submissions and select the top 3 contenders who will compete on stage. Physical presence at the event location is required if selected.
                </div>
            </div>

            <div class="faq-item" role="listitem">
                <button class="faq-question" aria-expanded="false" aria-controls="faq-answer-2">
                    What tools can I use?
                </button>
                <div class="faq-answer" id="faq-answer-2" role="region">
                    Any programming language, framework, or AI assistant you are comfortable with. Claude 🦞, Cursor, Windsurf, Copilot. Bring your preferred stack. Tell us about it in your profile submission.
                </div>
            </div>

            <div class="faq-item" role="listitem">
                <button class="faq-question" aria-expanded="false" aria-controls="faq-answer-3">
                    How does the selection work?
                </button>
                <div class="faq-answer" id="faq-answer-3" role="region">
                    You submit your profile: tools, an example project, your GitHub and Drupal.org profiles, and a video of you building. We review all submissions and select the top 3 finalists. Those 3 receive the challenge live on stage.
                </div>
            </div>

            <div class="faq-item" role="listitem">
                <button class="faq-question" aria-expanded="false" aria-controls="faq-answer-4">
                    How are projects judged?
                </button>
                <div class="faq-answer" id="faq-answer-4" role="region">
                    Projects are evaluated on business value, innovation and creativity, UI/UX quality, problem-solving approach, and overall execution. Judging takes place live on stage at the event.
                </div>
            </div>
        </div>
    </section>

    <?php /*
    Sponsors Section — hidden until confirmed sponsors
    <section class="sponsors-section" id="sponsors" aria-labelledby="sponsors-heading">
        <h2 id="sponsors-heading" class="section-title">Our Sponsors</h2>
        <p class="section-subtitle">Proudly supported by</p>

        <div class="sponsors-grid">
            <div class="sponsor-card">
                <div class="sponsor-logo">SPONSOR 1</div>
                <p style="color: #c8c8d4;">Location sponsor</p>
            </div>
            <div class="sponsor-card">
                <div class="sponsor-logo">SPONSOR 2</div>
                <p style="color: #c8c8d4;">Prize sponsor</p>
            </div>
            <div class="sponsor-card">
                <div class="sponsor-logo">SPONSOR 3</div>
                <p style="color: #c8c8d4;">Community sponsor</p>
            </div>
        </div>

        <div style="text-align: center; margin-top: 4rem;">
            <p style="color: #c8c8d4; margin-bottom: 1.5rem;">Interested in sponsoring Eurovi.be?</p>
            <a href="/contact.php" class="btn btn-secondary">Become a Sponsor</a>
        </div>
    </section>
    */ ?>

<?php include 'includes/footer.php'; ?>
