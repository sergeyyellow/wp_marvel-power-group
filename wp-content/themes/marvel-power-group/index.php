<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Marvel_Power_Group
 */

get_header();
?>

<div class="container">
    <div class="content-block">
        <h1>Marvel Power Group</h1>

        <p>Marvel Power Group is a boutique consulting firm with a fresh, markets-based approach to value
            creation. We offer services to clients in energy, water, manufacturing and transportation sectors.
        </p>

        <button class="contact-us--button" type="submit">Contact Us</button>
    </div>

    <div class="lines-block">
        <p class="line-1"></p>
        <p class="line-2"></p>
        <p class="line-3"></p>
        <div class="lines-block--grid">
            <p class="line-4"></p>
            <p class="line-5"></p>
        </div>
    </div>

    <p class="scroll--text">Scroll for more</p>
</div>

<div class="navigation-block">
    <div class="navigation-block__item-1">
        <p class="number-section">01</p>
        <p class="name-section">Home</p>
        <p class="line--active"></p>
    </div>

    <div class="navigation-block__item-2">
        <p class="number-section">02</p>
        <p class="line">
            <p />
    </div>

    <div class="navigation-block__item-3">
        <p class="number-section">03</p>
        <p class="line"></p>
    </div>

    <div class="navigation-block__item-4">
        <p class="number-section">04</p>
        <p class="line"></p>
    </div>
</div>
</section>

<section class="section-two about-us">
    <div class="container">
        <h2 id="about-us">About Us</h2>

        <div class="about-us-block">
            <img class="about-us-img" src="<?php the_field('about_us_image'); ?>" alt="About Us image">

            <div>
                <p>Our dynamic, solutions-oriented team brings decades
                    of relevant transactional, analytical and regulatory experience to supporting our clients’
                    unique
                    agendas.</p>
                <p>We are experienced practitioners who have run companies, successfully originated and closed
                    complex
                    deals, advocated and negotiated favorable policy and advanced technological innovation and
                    climate
                    leadership.</p>
                <p>We specialize in structuring balanced solutions for all affected stakeholders and uncovering
                    economic
                    opportunities in otherwise opaque environments.</p>
            </div>
        </div>
    </div>

    <div class="lines-block">
        <p class="line-1"></p>
        <p class="line-2"></p>
        <p class="line-3"></p>
        <div class="lines-block--grid">
            <p class="line-4"></p>
            <p class="line-5"></p>
        </div>
    </div>

    <div class="navigation-block">
        <div class="navigation-block__item-1">
            <p class="number-section">01</p>
            <p class="line"></p>
        </div>

        <div class="navigation-block__item-2">
            <p class="number-section">02</p>
            <p class="name-section">About</p>
            <p class="line--active">
                <p />
        </div>

        <div class="navigation-block__item-3">
            <p class="number-section">03</p>
            <p class="line"></p>
        </div>

        <div class="navigation-block__item-4">
            <p class="number-section">04</p>
            <p class="line"></p>
        </div>
    </div>
</section>

<section class="section-three services">
    <div class="container">
        <h2 id="services">Services</h2>

        <p class="mw-75">Our clients are at the forefront of energy transition and innovation. Their task is
            complex: balance
            reliability and cost effectiveness with new customer demands, investment decisions, decarbonization
            goals and an evolving menu of new technologies. We understand the task and bring deep expertise
            to addressing these challenges.</p>

        <div class="services-block">
            <div class="services-block__item-1">
                <h3>Enterprise Strategy</h3>

                <ul>
                    <li>Procurement and investment diligence</li>
                    <li>Customer engagement and retention</li>
                    <li>Renewable, DER, and EV program structuring</li>
                    <li>Reliability planning and reporting</li>
                </ul>

                <img class="arrow-right--button" src="<?php the_field('arrow_right_image'); ?>" alt="Arrow right">
            </div>
            <div class="services-block__item-2">
                <h3>Wholesale Power</h3>

                <ul>
                    <li>Commodity advisory and RFPs</li>
                    <li>Energy, capacity, REC, RIN, and LCFS placement</li>
                    <li>Enterprise PPA structuring</li>
                    <li>Contract extensions and re-packaging</li>
                </ul>

                <img class="arrow-right--button" src="<?php the_field('arrow_right_image'); ?>" alt="Arrow right">
            </div>
            <div class="services-block__item-3">
                <h3>Market Development</h3>

                <ul>
                    <li>New venture setup</li>
                    <li>Demand planning and acquisition</li>
                    <li>Project development and regulatory support</li>
                    <li>Partnership structuring</li>
                </ul>

                <img class="arrow-right--button" src="<?php the_field('arrow_right_image'); ?>" alt="Arrow right">
            </div>
        </div>

        <p class="mw-75">Our clients are time constrained and under-resourced. Agendas shift, budgets move and
            priorities change.
            We understand. We are agile, creative and immediately responsive to your various working styles,
            governance requirements and evolving needs. </p>
    </div>

    <div class="lines-block">
        <p class="line-1"></p>
        <p class="line-2"></p>
        <p class="line-3"></p>
        <div class="lines-block--grid">
            <p class="line-4"></p>
            <p class="line-5"></p>
        </div>
    </div>

    <div class="navigation-block">
        <div class="navigation-block__item-1">
            <p class="number-section">01</p>
            <p class="line"></p>
        </div>

        <div class="navigation-block__item-2">
            <p class="number-section">02</p>
            <p class="line"></p>
        </div>

        <div class="navigation-block__item-3">
            <p class="number-section">03</p>
            <p class="name-section">Services</p>
            <p class="line--active"></p>
        </div>

        <div class="navigation-block__item-4">
            <p class="number-section">04</p>
            <p class="line"></p>
        </div>
    </div>
</section>

<section class="section-four contact">
    <div class="container contact-container">
        <div class="contact-container__item-1">
            <h2 id="contact">Contact</h2>

            <p class="email-text">Email us here:</p>
            <p class="email"><a href="mailto:info@marvelpowergroup.com">info@marvelpowergroup.com</a></p>
        </div>
        <div class="contact-container__item-2">
            <form action="#" method="POST" id="contact-form" name="contact-form">
                <h4>Stay in the loop
                    by getting on
                    our mailing list</h4>

                <div class="form-grid-container">
                    <input class="name-field" type="text" name="name" id="name" placeholder="NAME *" required>
                    <input class="email-field" type="email" name="email" id="email" placeholder="E-MAIL *" required>

                    <button class="contact--button" type="button">Send</button>
                </div>
            </form>
        </div>
    </div>

    <div class="navigation-block">
        <div class="navigation-block__item-1">
            <p class="number-section">01</p>
            <p class="line"></p>
        </div>

        <div class="navigation-block__item-2">
            <p class="number-section">02</p>
            <p class="line"></p>
        </div>

        <div class="navigation-block__item-3">
            <p class="number-section">03</p>
            <p class="line"></p>
        </div>

        <div class="navigation-block__item-4">
            <p class="number-section">04</p>
            <p class="name-section">Contact</p>
            <p class="line--active"></p>
        </div>
    </div>
</section>

<?php
get_footer();
