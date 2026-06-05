<?php
/**
 * Template Name: Aspira Open House Landing Page
 * Description: WordPress-ready template for the Aspira National Open House case study.
 */

if (!defined('ABSPATH')) {
    exit;
}

$theme_uri = get_template_directory_uri();

get_header();
?>

<main id="primary" class="site-main aspira-open-house-page">
    <section class="hero" aria-labelledby="hero-title">
        <div class="hero-media" aria-hidden="true">
            <img src="<?php echo esc_url($theme_uri . '/assets/aspira-hero.jpg'); ?>" alt="">
        </div>
        <div class="hero-overlay"></div>
        <div class="hero-content">
            <div class="hero-copy">
                <p class="eyebrow">National Open House</p>
                <h1 id="hero-title">Step inside Aspira and picture your next chapter.</h1>
                <p class="hero-lede">
                    Join us for a guided visit, meet the people who make each residence feel welcoming,
                    and discover the services, dining, wellness programs, and community life available close to home.
                </p>
                <div class="hero-actions">
                    <a class="btn btn-primary" href="#rsvp">Reserve a visit</a>
                    <a class="btn btn-secondary" href="#what-to-expect">What to expect</a>
                </div>
            </div>

            <aside class="rsvp-card" id="rsvp" aria-labelledby="rsvp-title">
                <p class="card-kicker">RSVP today</p>
                <h2 id="rsvp-title">Save your spot</h2>
                <p class="form-intro">Share where you would like to visit. A team member can confirm your preferred day and details.</p>

                <?php
                /*
                 * Production option:
                 * Replace this prototype form with the existing HubSpot embed,
                 * Gravity Forms shortcode, or a WordPress form block.
                 */
                ?>
                <form id="rsvp-form">
                    <label>
                        Full name
                        <input type="text" name="name" autocomplete="name" required>
                    </label>
                    <label>
                        Email
                        <input type="email" name="email" autocomplete="email" required>
                    </label>
                    <label>
                        Preferred residence
                        <select name="location" required>
                            <option value="">Select a location</option>
                            <option>Alliston - Aspira Kingsmere</option>
                            <option>Barrie - Aspira The Barrieview</option>
                            <option>Kingston - Aspira Waterford Kingston</option>
                            <option>Ottawa - Aspira Red Oak</option>
                            <option>Toronto - Aspira Kensington Place</option>
                            <option>Waterloo - Aspira Hygate Waterloo</option>
                            <option>Other Aspira residence</option>
                        </select>
                    </label>
                    <label class="consent-check">
                        <input type="checkbox" name="communications_consent">
                        <span>
                            Sign me up for Aspira emails and communications. You can unsubscribe at any time.
                            See our <a href="https://www.aspiralife.ca/legals/privacy-policy/">privacy policy</a> for details.
                        </span>
                    </label>
                    <button class="btn btn-submit" type="submit">RSVP for the Open House</button>
                    <p class="form-note">Prefer to talk? Call <a href="tel:18669594848">1-866-959-4848</a>.</p>
                    <p class="success-message" role="status" aria-live="polite"></p>
                </form>
            </aside>
        </div>
    </section>

    <section class="details-band" id="dates" aria-labelledby="dates-title">
        <div class="section-inner">
            <div>
                <p class="eyebrow">Open House dates</p>
                <h2 id="dates-title">Drop in between 1pm and 4pm.</h2>
            </div>
            <div class="date-grid">
                <article class="date-card">
                    <p class="date">May 29-30</p>
                    <h3>Friday and Saturday</h3>
                    <p>All Aspira Retirement Residences are welcoming guests for tours, questions, and conversation.</p>
                </article>
                <article class="date-card accent">
                    <p class="date">May 31-June 1</p>
                    <h3>Sunday and Monday</h3>
                    <p>Aspira Kensington Place in Toronto continues the Open House weekend with dedicated tour times.</p>
                </article>
            </div>
        </div>
    </section>

    <section class="expect-section" id="what-to-expect" aria-labelledby="expect-title">
        <div class="section-inner split">
            <div class="expect-copy">
                <p class="eyebrow">Why attend</p>
                <h2 id="expect-title">A better visit starts with the questions families actually have.</h2>
                <p>
                    Explore the spaces, learn about available support, experience the community,
                    and leave with clear answers for your next step.
                </p>
                <div class="benefits">
                    <article>
                        <span>01</span>
                        <h3>Tour the residence</h3>
                        <p>Explore shared spaces, suites, dining rooms, and gathering areas in person.</p>
                    </article>
                    <article>
                        <span>02</span>
                        <h3>Meet the team</h3>
                        <p>Ask about care, wellness, food, programming, and what support can look like day to day.</p>
                    </article>
                    <article>
                        <span>03</span>
                        <h3>Bring your family</h3>
                        <p>Compare options together and leave with practical next steps for planning a move.</p>
                    </article>
                </div>
            </div>
            <figure class="campaign-card">
                <div class="campaign-stack">
                    <img src="<?php echo esc_url($theme_uri . '/assets/open-house-social.jpg'); ?>" alt="Aspira National Open House spring campaign graphic">
                    <img src="<?php echo esc_url($theme_uri . '/assets/open-house-graphic.jpg'); ?>" alt="Spring Open House tabletop campaign image">
                </div>
                <figcaption>Spring is on at Aspira. Come experience the community in person.</figcaption>
            </figure>
        </div>
    </section>

    <section class="locations-section" id="locations" aria-labelledby="locations-title">
        <div class="section-inner">
            <div class="section-heading">
                <p class="eyebrow">Find your residence</p>
                <h2 id="locations-title">Choose a nearby Aspira community.</h2>
                <p>Search for a nearby Aspira residence and choose where you would like to visit.</p>
            </div>
            <div class="location-tool">
                <label class="search-label" for="location-search">Search by city or residence</label>
                <input id="location-search" type="search" placeholder="Try Toronto, Ottawa, Barrie, Kingston...">
                <div class="location-list" id="location-list" aria-live="polite">
                    <a href="https://www.aspiralife.ca/our-locations/ontario/alliston/aspira-kingsmere-retirement-living/">
                        <strong>Aspira Kingsmere</strong><span>Alliston, Ontario</span>
                    </a>
                    <a href="https://www.aspiralife.ca/our-locations/ontario/barrie/aspira-the-barrieview-retirement-living/">
                        <strong>Aspira The Barrieview</strong><span>Barrie, Ontario</span>
                    </a>
                    <a href="https://www.aspiralife.ca/our-locations/ontario/kingston/aspira-waterford-kingston-retirement-living/">
                        <strong>Aspira Waterford Kingston</strong><span>Kingston, Ontario</span>
                    </a>
                    <a href="https://www.aspiralife.ca/our-locations/ontario/ottawa/aspira-red-oak-retirement-living/">
                        <strong>Aspira Red Oak</strong><span>Ottawa, Ontario</span>
                    </a>
                    <a href="https://www.aspiralife.ca/our-locations/ontario/toronto/aspira-kensington-place-retirement-living/">
                        <strong>Aspira Kensington Place</strong><span>Toronto, Ontario</span>
                    </a>
                    <a href="https://www.aspiralife.ca/our-locations/ontario/waterloo/aspira-hygate-waterloo-retirement-living/">
                        <strong>Aspira Hygate Waterloo</strong><span>Waterloo, Ontario</span>
                    </a>
                </div>
            </div>
        </div>
    </section>
</main>

<?php
get_footer('aspira-open-house');
