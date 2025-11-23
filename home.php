<?php
$cabecalho_title = "Página inicial";
include("cabecalho.php");
?>

<section id="main">
    <!-- Conteúdo principal -->

    <div class="container destaque">

        <section class="busca">
            <h2>Busca</h2>

            <form action="http://www.google.com.br/search" id="form-busca">
                <input type="search" name="q" id="q">
                <input type="image" src="img\busca.png">
            </form>

        </section> <!-- fim .busca -->

        <section class="menu-departamentos">
            <h2>Departamentos</h2>

            <nav>
                <ul>
                    <li><a href="#">Blusas e Camisas</a>
                        <ul>
                            <li><a href='#'>Manga curta</a></li>
                            <li><a href='#'>Manga comprida</a></li>
                            <li><a href='#'>Camisa social</a></li>
                            <li><a href='#'>Camisa casual</a></li>
                        </ul>
                    </li>
                    <li><a href="#">Calças</a></li>
                    <li><a href="#">Saias</a></li>
                    <li><a href="#">Vestidos</a></li>
                    <li><a href="#">Sapatos</a></li>
                    <li><a href="#">Bolsas e Carteiras</a></li>
                    <li><a href="#">Acessórios</a></li>
                </ul>
            </nav>
        </section><!-- Fim .menu-departamentos -->
        <a href="#" class='pause' id="#botao-destaque"><img src="img\destaque-home.png" alt="Promoção: Big City Night"
                id="bigcity"></a>

    </div>

</section>

<section id="destaques">
    <!-- Painéis com destaques -->
    <div class="container paineis">
        <!-- Os paineis de novidades e mais vendidos entrarão aqui -->
        <section class="painel novidades">
            <h2>Novidades</h2>
            <ol>
                <!-- primeiro produto -->
                <li>
                    <a href="produto.html">
                        <figure><img src="img\produtos\miniatura1.png">
                            <figcaption>Fuzz Cardigan por R$ 129,90</figcaption>
                        </figure>
                    </a>
                </li>
                <li>
                    <a href="produto.html">
                        <figure><img src="img\produtos\miniatura2.png">
                            <figcaption>Camiseta Lilás 69,90</figcaption>
                        </figure>
                    </a>
                </li>
                <li>
                    <a href="produto.html">
                        <figure><img src="img\produtos\miniatura3.png">
                            <figcaption>Casaco Verde R$ 129,90</figcaption>
                        </figure>
                    </a>
                </li>
                <li>
                    <a href="produto.html">
                        <figure><img src="img\produtos\miniatura4.png">
                            <figcaption>Jaqueta Vinho R$159,90</figcaption>
                        </figure>
                    </a>
                </li>
                <li>
                    <a href="produto.html">
                        <figure><img src="img\produtos\miniatura5.png">
                            <figcaption>Camiseta Regata Azul R$ 59,90</figcaption>
                        </figure>
                    </a>
                </li>
                <li>
                    <a href="produto.html">
                        <figure><img src="img\produtos\miniatura6.png">
                            <figcaption>Camiseta Rosa por R$ 69,90</figcaption>
                        </figure>
                    </a>
                </li>
            </ol>

        </section>
        <section class="painel mais-vendidos">
            <h2>Mais Vendidos</h2>
            <ol>
                <li>
                    <a href="produto.html">
                        <figure><img src="img\produtos\miniatura7.png">
                            <figcaption>Camiseta Turquesa por R$ 59,90</figcaption>
                        </figure>
                    </a>
                </li>
                <li>
                    <a href="produto.html">
                        <figure><img src="img\produtos\miniatura8.png">
                            <figcaption>Camiseta Verde por R$ 69,90</figcaption>
                        </figure>
                    </a>
                </li>
                <li>
                    <a href="produto.html">
                        <figure><img src="img\produtos\miniatura9.png">
                            <figcaption>Camisa Xadrez por R$ 99,90</figcaption>
                        </figure>
                    </a>
                </li>
                <li>
                    <a href="produto.html">
                        <figure><img src="img\produtos\miniatura10.png">
                            <figcaption>Blusa Rosa por R$ 79,90</figcaption>
                        </figure>
                    </a>
                </li>
                <li>
                    <a href="produto.html">
                        <figure><img src="img\produtos\miniatura11.png">
                            <figcaption>Shorts Verde por R$ 79,90</figcaption>
                        </figure>
                    </a>
                </li>
                <li>
                    <a href="produto.html">
                        <figure><img src="img\produtos\miniatura12.png">
                            <figcaption>Camisa Azul Claro por R$ 99,90</figcaption>
                        </figure>
                    </a>
                </li>
            </ol>
        </section>

    </div>


</section>

<?php 
include("rodape.php");
?>