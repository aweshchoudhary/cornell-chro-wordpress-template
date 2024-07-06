<?php

function cornell_chro_enqueue_styles()
{
    // Enqueue the main stylesheet
    wp_enqueue_style('cornell-chro', get_stylesheet_uri(), array(), '1.0.0', 'all');

    // Enqueue an additional stylesheet
    // wp_enqueue_style('custom-layout-style', get_template_directory_uri() . '/styles/global.css', array('cornell-chro'), '1.0.0', 'all');
}

add_action('wp_enqueue_scripts', 'cornell_chro_enqueue_styles');

function my_custom_funcs()
{
?>
    <script type="text/javascript">
        document.addEventListener('DOMContentLoaded', function() {
            const country_select = document.querySelector('.country-select');
            const msg_container = document.querySelector('.countries-dissallowed-msg');
            const download_btn = document.querySelector(".wpforms-submit");

            country_select.addEventListener("change", () => {
                setTimeout(() => {
                    if (msg_container.style.display !== "none") {
                        download_btn.disabled = true;
                    } else {
                        download_btn.disabled = false;
                    }
                }, 200);

            })
        });
    </script>
    <?php
};

add_action("wp_footer", "my_custom_funcs");

// Function to check query parameter and pass it to JavaScript
function check_modal_query_param()
{
    if (isset($_GET['modal']) && $_GET['modal'] == 'open') {
    ?>
        <script>
            document.getElementById('my_modal_2')?.showModal();
        </script>
    <?php
    } else {
    ?>
        <script>
            document.getElementById('my_modal_2')?.close();
        </script>

<?php
    }
}
add_action('wp_footer', 'check_modal_query_param');
