<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= bloginfo('name') ?> | Cursos online</title>
    <link rel="stylesheet" href="<?= get_template_directory_uri() ?>/css/reset.css">
    <link rel="stylesheet" href="<?= get_template_directory_uri() ?>/style.css">
    <link rel="stylesheet" href="<?= get_template_directory_uri() ?>/css/flexbox.css">
    <?php wp_head() ?>
</head>
<body>

<header class="cabecalhoPrincipal">
    <div class="container">
            <h1 class="cabecalhoPrincipal-titulo">
                <a href="<?= home_url() ?>"><?= bloginfo('name') ?></a>
            </h1>
        <?php

        wp_nav_menu(array(
            'theme_location' => 'principal'));
        ?>

    </div>

</header>