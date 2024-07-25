<!DOCTYPE html>
<html <?php language_attributes() ?>>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo the_title(); ?></title>
    <?php wp_head() ?>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.min.css" integrity="sha512-17EgCFERpgZKcm0j0fEq1YCJuyAWdz9KUtv1EjVuaOz8pDnh/0nZxmU6BBXwaaxqoi9PQXnRWqlcDB027hgv9A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css" integrity="sha512-yHknP1/AwR+yx26cB1y0cjvQUMvEa2PFzt1c9LlS4pRQ5NOTZFWbhBig+X9G9eYW/8m0/4OXNx8pxJ6z57x0dw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/styles/global.css">
</head>

<body <?php body_class() ?>>
    <?php wp_body_open() ?>

    <header>
        <div class="flex items-center justify-between md:py-5 md:px-20 px-5 py-5 md:gap-0 gap-20">
            <a class="block" href="/">
                <figure class="md:w-[100px] w-[50px]">
                    <img class="w-full object-contain" src="<?php echo get_template_directory_uri() ?>/media/logo.jpg" alt="">
                    <figcaption></figcaption>
                </figure>
            </a>
            <a class="block" href="/">
                <figure class="md:w-[250px] w-[160px]">
                    <img class="w-full object-contain" src="<?php echo get_template_directory_uri() ?>/media/ilr-logo.png" alt="">
                    <figcaption></figcaption>
                </figure>
            </a>
        </div>
        <div class="bg-primary md:px-10 py-3 px-5">
            <h2 class="font-bold text-white text-center md:text-3xl sm:text-2xl text-xl mb-0">CORNELL CHRO LEADERSHIP PROGRAM</h2>
        </div>
    </header>

    <main>