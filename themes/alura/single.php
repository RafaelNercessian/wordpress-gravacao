<?php get_header() ?>
    <main class="conteudoPrincipal">
        <div class="container">
            <?php if (have_posts()) :
                while (have_posts()) :
                    the_post(); ?>
                    <h2 class="subtitulo"><?= the_title() ?></h2>
                    <h3 class="subtitulo-curso">Faça esse curso e:</h3>
                    <section class="conteudo-curso">
                        <div class="conteudo-curso-detalhes">
                            <?= get_post_meta($post->ID, 'faca_esse_curso', true); ?>
                        </div>
                        <iframe class="elasticMedia" src="<?= get_post_meta($post->ID, 'video_url', true); ?>"
                                frameborder="0"
                                webkitallowfullscreen="" mozallowfullscreen="" allowfullscreen="100%"></iframe>
                    </section>
                <?php endwhile; ?>
            <?php endif; ?>


            <h3 class="subtitulo-curso">Conteúdo detalhado</h3>

            <section class="container-conteudo-detalhado">
                <?= get_post_meta($post->ID, 'conteudo_detalhado', true); ?>
            </section>
        </div>

    </main>
<?php get_footer() ?>