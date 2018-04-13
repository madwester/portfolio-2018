<?php
/*
Template Name: contact
*/
?>
<?php get_header(); ?>
<main>
    <div class="container">
        <div class="row contactrow">
                <div class="col-md-12 text-center">
                    <h1>Want to say hello?</h1>
                    <h3>I am due to graduate in July 2018. If you're looking for a freelancer for a website or to hire a Frontend Developer. Get in touch.</h3>
                </div>
                <div class="col-md-6 col-sm-12 contact-form">
                <?php echo do_shortcode( '[contact-form-7 id="56" title="Contact form 1"]' ); ?>
            </div>
            <div class="col-md-6 col-sm-12 contact-direct">
                <div class="col-md-12">
                    <h2>Contact me directly</h2>
                    <h5>Madeleine Westerström</h5>
                    <h5>Sydney, AU</h5>
                    <h5><a href="tel:+61415886060">+61 (0) 415-88 60 60</a></h5>
                    <h5><a href="mailto:madwester@gmail.com">madwester@gmail.com</a></h5>
                </div>
                <div class="col-md-12 column-contact">
                    <h2>Visit me online</h2>
                    <h5>+ <a href="https://github.com/madwester">Github</a></h5>
                    <h5>+ <a href="https://www.linkedin.com/in/madeleine-westerstr%C3%B6m-83364851/">LinkedIn</a></h5>
                    <h5>+ <a href="https://www.facebook.com/madeleine.westerstrom">Facebook</a></h5>
                </div>
            </div>
        </div>
    </div>
</main>
<?php get_footer(); ?>
