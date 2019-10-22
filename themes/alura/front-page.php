<?php get_header() ?>
    <main class="conteudoPrincipal">
        <div class="conteudo-banner"><?= get_option('al_banner_home_campo_texto'); ?></div>
        <div class="img-holder" data-image="<?= get_option('al_banner_home_imagem_upload'); ?>"></div>
        <div class="container">
            <h2 class="subtitulo">Nossos cursos</h2>
            <nav>
                <ul class="conteudoPrincipal-cursos">
                    <li class="conteudoPrincipal-cursos-link"><a href="#">Java</a></li>
                    <li class="conteudoPrincipal-cursos-link"><a href="#">PHP</a></li>
                    <li class="conteudoPrincipal-cursos-link"><a href="#">Ruby on Rails</a></li>
                    <li class="conteudoPrincipal-cursos-link"><a href="#">.NET</a></li>
                    <li class="conteudoPrincipal-cursos-link"><a href="#">Pascal</a></li>
                    <li class="conteudoPrincipal-cursos-link"><a href="#">Flexbox</a></li>
                    <li class="conteudoPrincipal-cursos-link"><a href="#">Desenvolvimento Web</a></li>
                    <li class="conteudoPrincipal-cursos-link"><a href="#">Java Web</a></li>
                    <li class="conteudoPrincipal-cursos-link"><a href="#">Javascript</a></li>
                    <li class="conteudoPrincipal-cursos-link"><a href="#">AngularJS</a></li>
                    <li class="conteudoPrincipal-cursos-link"><a href="#">TDD com C</a></li>
                    <li class="conteudoPrincipal-cursos-link"><a href="#">Redes de computadores</a></li>
                    <li class="conteudoPrincipal-cursos-link"><a href="#">MySQL</a></li>
                    <li class="conteudoPrincipal-cursos-link"><a href="#">MariaDB</a></li>
                    <li class="conteudoPrincipal-cursos-link"><a href="#">Postegres</a></li>
                    <li class="conteudoPrincipal-cursos-link"><a href="#">Lógica de programação</a></li>
                    <li class="conteudoPrincipal-cursos-link"><a href="#">Lógica de programação</a></li>
                    <li class="conteudoPrincipal-cursos-link"><a href="#">Lógica de programação</a></li>
                </ul>
            </nav>
        </div>

        <section class="videoSobre">
            <div class="container">
                <iframe class="videoSobre-video" width="560" height="315"
                        src="https://www.youtube.com/embed/bIlOsJzBVaY?list=PLh2Y_pKOa4UcF1BYPJR3EIMRi3nWAUxIp"
                        frameborder="0" allowfullscreen></iframe>

                <div class="videoSobre-sobre">
                    <h2 class="videoSobre-sobre-title">Vantagens do Alurinha</h2>
                    <ul class="videoSobre-sobre-list">
                        <li class="videoSobre-sobre-item">Estude onde quiser</li>
                        <li class="videoSobre-sobre-item">Novos cursos todos os meses</li>
                        <li class="videoSobre-sobre-item">Cursos compatíveis com o mercado</li>
                    </ul>
                    <button class="videoSobre-button">Cadastre-se já</button>
                </div>
            </div>
        </section>

    </main>
<?php get_footer(); ?>