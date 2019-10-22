
<footer class="rodapePrincipal">
    <div class="container">

        <section class="rodapePrincipal-navMap">
            <h3 class="subtitulo">Mapa de cursos</h3>
            <nav class="rodapePrincipal-navMap-list">

                <h4 class="navmap-list-title navmap-list-title-backend">Linguagens Backend</h4>
                <a class="rodapePrincipal-navMap-link" href="#">Java</a>
                <a class="rodapePrincipal-navMap-link" href="#">PHP</a>
                <a class="rodapePrincipal-navMap-link" href="#">Pascal</a>
                <a class="rodapePrincipal-navMap-link" href="#">Scala</a>
                <a class="rodapePrincipal-navMap-link" href="#">Python</a>
                <a class="rodapePrincipal-navMap-link" href="#">Java Web</a>
                <a class="rodapePrincipal-navMap-link" href="#">Assembly</a>
                <a class="rodapePrincipal-navMap-link" href="#">Lógica de programação</a>

                <h4 class="navmap-list-title navmap-list-title-frontend">Linguagens Frontend</h4>
                <a class="rodapePrincipal-navMap-link" href="#">Flexbox</a>
                <a class="rodapePrincipal-navMap-link" href="#">Desenvolvimento Web</a>
                <a class="rodapePrincipal-navMap-link" href="#">Javascript</a>
                <a class="rodapePrincipal-navMap-link" href="#">AngularJS</a>
                <a class="rodapePrincipal-navMap-link" href="#">ReactJS</a>
                <a class="rodapePrincipal-navMap-link" href="#">Polymer</a>

                <h4 class="navmap-list-title navmap-list-title-framework">Frameworks</h4>
                <a class="rodapePrincipal-navMap-link" href="#">Ruby on Rails</a>
                <a class="rodapePrincipal-navMap-link" href="#">VRaptor</a>
                <a class="rodapePrincipal-navMap-link" href="#">SpringMVC</a>
                <a class="rodapePrincipal-navMap-link" href="#">NodeJS</a>
                <a class="rodapePrincipal-navMap-link" href="#">Django</a>
                <a class="rodapePrincipal-navMap-link" href="#">Bootstrap3</a>

                <h4 class="navmap-list-title navmap-list-title-bancoDeDados">Banco de dados</h4>
                <a class="rodapePrincipal-navMap-link" href="#">MySQL</a>
                <a class="rodapePrincipal-navMap-link" href="#">MariaDB</a>
                <a class="rodapePrincipal-navMap-link" href="#">Postegres</a>

            </nav>
        </section>

    </div>

    <section class="rodapePrincipal-patrocinadores">
        <div class="container">
            <ul class="rodapePrincipal-patrocinadores-list">
                <li>
                    <a class="rodapePrincipal-patrocinadores-list-link patrocinadores-list-link-alura" href="#">
                        <img src="<?= get_template_directory_uri()?>/img/logos/alura.svg" alt="Logo da Alura">
                    </a>
                </li>
                <li>
                    <a class="rodapePrincipal-patrocinadores-list-link patrocinadores-list-link-caelum" href="#">
                        <img src="<?= get_template_directory_uri()?>/img/logos/caelum.svg" alt="Logo da Caelum">
                    </a>
                </li>
                <li>
                    <a class="rodapePrincipal-patrocinadores-list-link patrocinadores-list-link-casaDoCodigo" href="#">
                        <img src="<?= get_template_directory_uri()?>/img/logos/cdc.svg" alt="Logo da Casa do Código">
                    </a>
                </li>
            </ul>
        </div>
    </section>
</footer>

</body>
<?php wp_footer() ?>
</html>