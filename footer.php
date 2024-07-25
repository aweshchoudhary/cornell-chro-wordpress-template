</main>

<dialog id="my_modal_2" class="modal">
    <div class="modal-box rounded md:p-10 p-5 md:max-w-[60%]">
        <?php echo do_shortcode('[wpforms id="235" title="true"]');
        ?>
    </div>
    <form method="dialog" class="modal-backdrop">
        <button>close</button>
    </form>
</dialog>

<div class="overlay fixed bottom-0 left-0 z-[999] w-full bg-white/85 py-3 flex justify-center backdrop-blur">
    <a href="/#get-brochure" class="text-white hover:text-white/80 block px-5 font-medium uppercase py-2.5 rounded bg-[#C60000] w-fit text-center">Download Brochure</a>
</div>


</main>
<footer class="md:p-20 px-5 md:py-20 py-10 mb-20 bg-primary text-white flex flex-wrap gap-5">
    <div class="flex flex-wrap lg:gap-20 md:gap-10 gap-5">
        <div class="shrink-0">
            <figure class="md:w-32 w-20">
                <?php $image_id = get_field("footer_logo", "option") ?>
                <?php echo wp_get_attachment_image($image_id, "medium", false, [
                    "loading" => "lazy",
                    "class" => "image-contain",
                ]); ?>
                <figcaption><?php echo wp_get_attachment_caption(
                                $image_id
                            ); ?></figcaption>
            </figure>

            <ul class="list-none pl-0 mt-10 space-y-3 text-lg">
                <?php
                $contacts = get_field("contacts", "option");
                if (count($contacts)) :
                    foreach ($contacts as $item) :
                ?>
                        <li>
                            <a href="<?php echo $item["link"]["url"] ?>" class="text-white hover:text-white/80 flex items-center gap-5" style="color: #FFF;">
                                <figure class="w-[30px]">
                                    <?php echo wp_get_attachment_image($item["icon"], "thumbnail", false, [
                                        "loading" => "lazy",
                                        "class" => "image-contain",
                                    ]); ?>
                                    <figcaption><?php echo wp_get_attachment_caption(
                                                    $item["icon"]
                                                ); ?></figcaption>
                                </figure>
                                <?php echo $item["link"]["title"] ?>
                            </a>
                        </li>
                <?php endforeach;
                endif;
                ?>
            </ul>
        </div>
        <div class="flex flex-wrap flex-1">
            <?php
            $addresses = get_field("addresses", "option");
            if ($addresses && count($addresses)) :
                foreach ($addresses as $item) :
            ?>
                    <div class="md:basis-1/2 basis-full flex items-start md:gap-5 gap-3 md:mt-10 mt-5">
                        <figure class="md:w-[40px] w-[30px] shrink-0">
                            <?php echo wp_get_attachment_image($item["icon"], "thumbnail", false, [
                                "loading" => "lazy",
                                "class" => "image-contain",
                            ]); ?>
                            <figcaption><?php echo wp_get_attachment_caption(
                                            $item["icon"]
                                        ); ?></figcaption>
                        </figure>
                        <div>
                            <h3 class="text-2xl mb-1 font-semibold text-third"><?php echo wp_kses_post($item["title"]) ?></h3>
                            <?php echo wp_kses_post($item["address"]) ?>
                        </div>
                    </div>
            <?php endforeach;
            endif;
            ?>
        </div>
    </div>
</footer>


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js" integrity="sha512-HGOnQO9+SP1V92SrtZfjqxxtLmVzqZpjFFekvzZVWoiASSQgSr4cw9Kqd2+l8Llp4Gm0G8GIFJ4ddwZilcdb8A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script>
    $('.slick-slider-testimonials').slick({
        dots: false,
        arrows: false,
        infinite: true,
        speed: 500,
        autoplay: false,
        adaptiveHeight: true,
        lazyLoad: 'ondemand',
        slidesToShow: 3,
        slidesToScroll: 1,
        responsive: [{
                breakpoint: 1024,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 1,
                }
            },
            {
                breakpoint: 600,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1
                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }
        ]
    });

    $('.custom-slick-prev').click(function() {
        $('.slick-slider-testimonials').slick('slickPrev');
    });

    $('.custom-slick-next').click(function() {
        $('.slick-slider-testimonials').slick('slickNext');
    });
</script>

<?php wp_footer() ?>

</body>

</html>