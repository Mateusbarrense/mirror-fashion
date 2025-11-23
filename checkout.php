<?php

$cabecalho_title = "Checkout Mirror Fashion";

include("cabecalho.php");
?>

<h1>Ótima escolha!</h1>
<p>Obrigado por comprar na Mirror Fashion! 
    Preencha seus dados para finalizar a compra.</p>

<h2>Sua compra</h2>
<dl>
    <dt>Produto</dt>
    <dd><?php print $_POST["nome"] ?></dd>

    <dt>Preço</dt>
    <dd><?php print $_POST["preco"] ?></dd>

    <dt>Cor</dt>
    <dd><?php print $_POST["cor"] ?></dd>
    
    <dt>Tamanho</dt>
    <dd><?php print $_POST["tamanho"] ?></dd>
</dl>

<?php
include("rodape.php");
?>
 