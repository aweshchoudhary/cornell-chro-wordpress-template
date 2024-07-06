<?php
// Template Name: Get In Touch Form
get_header();
?>

<article class="md:p-20 p-5">
    <div class="w-[60%] mx-auto">

        <header class="space-y-5 mb-5">
            <p>We are glad to see your interest in Cornell’s CHRO Leadership Program <br>
                Please provide your details and get access to the program brochure.</p>
        </header>
        <div class="container mx-auto">
            <?php echo do_shortcode('[wpforms id="269" title="false"]');
            ?>
        </div>
    </div>
</article>

<?php
get_footer();
?>