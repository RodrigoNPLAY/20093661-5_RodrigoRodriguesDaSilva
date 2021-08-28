<!DOCTYPE html>
<html>
<head>
<meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Doceria</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel="stylesheet" href="../css/styles.css">
</head>
<body>

<section id="home">
        <div>
            <ul class="menu">
                <li class="menu-li"><a href="../index.php">Home</a></li>
                <li class="menu-li"><a href="../pages/produtos.php">Produtos</a></li>
                <li class="menu-li"><a href="../pages/quem_somos.php">Quem Somos</a></li>
                <li class="menu-li"><a href="../pages/contacts.php">Contato</a></li>
                <li class="menu-li"><a href="../pages/localization.php">Localização</a></li>
            </ul>
        </div>
    </section>
    <img class="fundos_pages" src="../images/fundo.png">
    <br>
<section id="produtos">

<div>
    <h1 class="titulo">Produtos</h1>
    <?php
    include "../dados/produtos_lista.php";
    
    echo "<section class="."produtos_page".">";
    foreach ($produtos as $key => $value) :
        echo "<section class="."produto_page".">";
        echo "<h4> " . print_r($produtos[$key]["nome"], true) . "<br>" . "</a></h4>";
        echo "<img class="."img-responsiva"." src="."../" . print_r($produtos[$key]["imagem"], true) . "> ".
        "<h4>"."R$ " . print_r(number_format($produtos[$key]["preco"], 2), true)."</h4>"."</img></a>";
        echo "</section>";
        echo "<h4> " . print_r($produtos[$key]["descricao"], true) . "<br>" . "</a></h4>";
    endforeach;

    
    echo "</section>";
    ?>
</div>
</section>

<section id="rodape">
            <p>
                    Nome: Rodrigo Rodrigues da Silva Matricula : 20093661-5 Curso :SUPERIOR DE TECNOLOGIA EM SISTEMAS PARA INTERNET
            </p>
    </section>

</body>
</html>