<?php
// Template Name: Eligibility Form
get_header();
?>

<article class="md:p-20 p-5">
    <header class="text-center space-y-5 mb-5">
        <h1>Program Eligibility</h1>
        <p>Please provide your details. The Admissions Team will review your credentials and get back to you shortly.</p>
    </header>
    <div class="container w-[60%] mx-auto">
        <?php echo do_shortcode('[wpforms id="262" title="false"]');
        ?>
    </div>
</article>

<?php
get_footer();
?>