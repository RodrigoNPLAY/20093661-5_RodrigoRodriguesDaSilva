<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Doceria</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <script src='main.js'></script>
    <link rel="stylesheet" href="css/styles.css">
</head>

<body>
    <section id="home">
        <div>
            <ul class="menu">
                <li class="menu-li"><a href="index.php">Home</a></li>
                <li class="menu-li"><a href="pages/produtos.php">Produtos</a></li>
                <li class="menu-li"><a href="pages/quem_somos.php">Quem Somos</a></li>
                <li class="menu-li"><a href="pages/contacts.php">Contato</a></li>
                <li class="menu-li"><a href="pages/localization.php">Localização</a></li>
            </ul>
        </div>

            <img class="fundo" src="images/fundo.png">
    </section>

    <section id="produtos">

        <div>
            <h1 class="titulo">Produtos</h1>
            <?php
            include "dados/produtos_lista.php";

            echo "<section class="."produtos".">";
            foreach ($produtos as $key => $value) :
                echo "<section class="."produto".">";
                echo "<h4><a href=" . "pages/produtos.php" . ">" . print_r($produtos[$key]["nome"], true) . "<br>" . "</a></h4>";
                echo "<a href=" . "pages/produtos.php" . ">"."<img class="."img-responsiva"." src=" . print_r($produtos[$key]["imagem"], true) . "> ".
                "<h4>"."R$ " . print_r(number_format($produtos[$key]["preco"], 2), true)."</h4>"."</img></a>";
                echo "</section>";
            endforeach;
            echo "</section>";
            ?>
        </div>
    </section>


    <section id="quem_somos">
        <h1>Quem somos ?</h1>
        <div class="tamanho">
            <p>
                There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.
            </p>
            <a href="pages/quem_somos.php" class="link">Saiba mais</a>
        </div>
    </section>
    <section id="localizacao">
        <h1 class="titulo">localização</h1>
        <div id="map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14412.100874745722!2d-49.2750292!3d-25.4374204!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x90dee31a944c0292!2sUniCesumar%20-%20Curitiba%20%2F%20Centro!5e0!3m2!1spt-BR!2sbr!4v1630026913960!5m2!1spt-BR!2sbr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>
        <a href="pages/localization.php">Saiba mais</a>
    </section>
        <section id="contato">
            <div>
                <form>
                    <div>
                        <div>
                            <label>Name</label>
                            <input type="text" placeholder="Escreva seu nome">
                        </div>

                    </div>

                    <div>
                        <div>
                            <label>Email</label>
                            <input type="text" placeholder="Informe seu e-mail">
                        </div>
                    </div>

                    <div>
                        <div>
                            <label>Subject</label>
                            <input type="text" placeholder="Assunto">
                        </div>
                    </div>

                    <div>

                        <div>
                            <label>Message</label>
                            <br>
                            <textarea cols="30" rows="10" class="form-control" placeholder="Mensagem"></textarea>
                        </div>
                    </div>
                    <div>
                        <input type="submit" value="Enviar">
                    </div>
                </form>
            </div>
                <a href="pages/contacts.php">Abrir Página de contatos</a>
        </section>

    <section id="rodape">
            <p>
                    Nome: Rodrigo Rodrigues da Silva Matricula : 20093661-5 Curso :SUPERIOR DE TECNOLOGIA EM SISTEMAS PARA INTERNET
            </p>
    </section>

    
</body>

</html>
