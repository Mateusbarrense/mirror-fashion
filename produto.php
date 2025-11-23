<?php
$mysqli = new mysqli("localhost:80", "root", "1234", "mirror_fashion");

if ($mysqli->connect_error) {
    die('Connection failed: ' . $mysqli->connect_error);
}

$query = "SELECT * FROM PRODUTOS";
$result = $mysqli->query($query);
// if ($result->num_rows > 0) {};

$mysqli->close();

$cabecalho_title = "Produto da Mirror Fashion";
$cabecalho_css = '<link rel="stylesheet" href="css\produto.css">';
$cabecalho_css_web = '<link rel="stylesheet" media="(min-width: 600px)" href="css\produtoweb.css">';
include("cabecalho.php");
?>

<div class="container">

    <div class="produto-back">
        <div class="produto">

            <h1><?php print $produto["nome"] ?></h1>
            <p>por apenas <?php print $produto["preco"] ?></p>
            <form action="checkout.php" method="POST">
                <label for="nome" id="nome" name="nome"></label>
                <input type="text" name="nome" id="nome">

                <fieldset class="cores">
                    <legend>Escolha a cor:</legend>

                    <input type="hidden" name="nome" value="Fuzzy Cardigan">
                    <input type="hidden" name="preco" value="129,90">
                    <input type="radio" name="cor" value="verde" id="verde" checked>
                    <label for="verde"><img src="img/produtos/foto2-verde.png"
                            alt="Modelo vestindo camiseta na cor verde com estampa de caveira e frase 'Bad to the bone'"></label>

                    <input type="radio" name="cor" value="rosa" id="rosa" checked>
                    <label for="rosa"><img src="img/produtos/foto2-rosa.png"
                            alt="Modelo vestindo camiseta na cor rosa com estampa de caveira e frase 'Bad to the bone'"></label>

                    <input type="radio" name="cor" value="azul" id="azul" checked>
                    <label for="azul"><img src="img/produtos/foto2-azul.png"
                            alt="Modelo vestindo camiseta na cor azul com estampa de caveira e frase 'Bad to the bone'"></label>
                </fieldset>

                <fieldset class="tamanhos">
                    <legend>Escolha o tamanho:</legend>
                    <input type="range" min="36" max="46" value="42" step="2" name="tamanho" id="tamanho">
                </fieldset>

                <input type="submit" class="comprar" value="Comprar">
            </form>
        </div>

        <div class="detalhes">
            <h2>Detalhes do produto</h2>
            <p><?php print $produto["descricao"] ?></p>

            <table>
                <thead>
                    <tr>
                        <th>Característica</th>
                        <th>Detalhe</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Modelo</td>
                        <td>Cardigã 7845</td>
                    </tr>
                    <tr>
                        <td>Material</td>
                        <td>Algodão e poliester</td>
                    </tr>
                    <tr>
                        <td>Cores</td>
                        <td>Azul, Rosa e Verde</td>
                    </tr>
                    <tr>
                        <td>Lavagem</td>
                        <td>Lavar à mão</td>
                    </tr>
                </tbody>
            </table>
        </div>

    </div>
</div>

<?php
include("rodape.php");
?>