<?php 
$cabecalho_title = "Sobre Nós";
$cabecalho_css = '<link rel="stylesheet" href="css\sobre.css">';
include("cabecalho.php");
?>
    <!-- <link rel="stylesheet" href="css\sobre.css"> -->

    <!-- <img src="img\logo.png" alt="Logotipo da Mirror Fashion"> -->
    <article>
        <h1> A Mirror Fashion </h1>
        <section id="diferenciais">
        <h2 id="diferenciais">Diferenciais</h2>
        <ul>
            <li>Menor preço do varejo, garantido</li>
            <li>Se você achar uma loja mais barata, leva o produto de graça</li>
            <li>Menor preço do varejo, garantido</li>
            <li>Todas as compras com frete grátis para o Brasil todo</li>
            <li>Maior comércio eletrônico de moda do país</li>
            <li>Atendimento via telefone, email, chat e whatsapp</li>
            <li>Presente em todos os estados e DF</li>
        </ul>
        <p> Mais informações <a href="#info">aqui</a>.</p>
        <p>A <strong>Mirror Fashion</strong> é a maior empresa de comércio eletrônico no segmento de moda em todo o
            mundo.
            Fundada há 
            <?php print date('Y') - 1932 ?> anos, possui filiais em 124 países, sendo líder de mercado com mais de 90% de
            participação em 118 deles.</p>

        <!-- <a href="https://www.caelum.com.br">Caelum</a>. -->

        <p>Nosso centro de distribuição fica em <a href="https://maps.google.com.br/?q=Jacarezinho">Jacarezinho</a>, no
            Paraná. De lá, saem 48 aviões que distribuem nossos produtos às casas do mundo todo. Nosso centro de
            distribuição:</p>
        <figure id="centro-distribuicao">
            <img src="img\centro-distribuicao.png" alt="Centro de Distribuição da Mirror Fashion">
            <figcaption>Centro de Distribuição da Mirror Fashion.</figcaption>
        </figure>
        <p>Compre suas roupas e acessórios na Mirror Fashion. Acesse nossa loja ou entre em contato
            se tiver dúvidas. Conheça também nossa história e nossos diferenciais.</p>
            </section>
        <section id="historia">
            <h2 id="historia">História</h2>
            <figure id="familia-pelho">
                <img src="img\familia-pelho.jpg" alt="Família Pelho">
                <figcaption>Família Pelho.</figcaption>
            </figure>

            <p>A fundação em 1932 ocorreu no momento da descoberta econônica do interior do Paraná. A
                família Pelho, tradicional da região, investiu todas as suas economias nessa nova iniciativa,
                revolucionária para a época. O fundador <em>Eduardo Simões Pelho</em>, dotado de particular visão
                administrativa, guiou os negócios da empresa durante mais de 50 anos, muitos deles ao lado
                de seu filho <em>E. S. Pelho Filho</em>, atual CEO. O nome da empresa é inspirado no nome da família.
            </p>

            <p>O crescimento da empresa foi praticamente instantâneo. Nos primeiros 5 anos, já atendia 18 países.
                Bateu a marca de 100 países em apenas 15 anos de existência. Até hoje, já atendeu 740 milhões
                de usuários diferentes, em bilhões de diferentes pedidos.</p>

            <p>O crescimento em número de funcionários é também assombroso. Hoje, é a maior empregadora do
                Brasil, mas mesmo após apenas 5 anos de sua existência, já possuía 30 mil funcionários. Fora do
                Brasil, há 240 mil funcionários, além dos 890 mil brasileiros nas instalações de Jacarezinho e
                nos escritórios em todo país.</p>

            <p>Dada a importância econômica da empresa para o Brasil, a família Pelho já recebeu diversos prêmios,
                homenagens e condecorações. Todos os presidentes do Brasil já visitaram as instalações da Mirror
                Fashion, além de presidentes da União Européia, Ásia e o secretário-geral da ONU.</p>
        </section>
        <p>Acesse <a href="index.html">nossa loja</a>.</p>
        <p>Conheça nossa <a href="#historia">história</a> e veja nossos <a href="#diferenciais">diferenciais</a>.</p>

        <h2 id="info">Mais informações sobre o assunto:</h2>
        <p>Informações</p>
    </article>
    <!-- <div id="rodape">
        <img src="img/logo.png">
        &copy; Copyright Mirror Fashion
    </div> -->

<?php 
include("rodape.php");
?>