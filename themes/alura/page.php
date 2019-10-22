<?php
get_header();
if (have_posts()) :
    the_post();
    ?>
    <section class="titulo-page container">
        <?php
        the_title();
        ?>
    </section>
    <?php
    the_content();
endif;
?>
    <section class="sidebar-page">
        <?php
        if (!function_exists('dynamic_sidebar') || !dynamic_sidebar("Widget Alurinha")) ;
        ?>
    </section>
    </section>
<p>Estou dento do arquivo page.php</p>
<?php
get_footer();
