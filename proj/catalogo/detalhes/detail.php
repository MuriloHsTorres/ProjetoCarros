<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
    <?php
        include_once "../../others/connection.php";
    ?>
</head>
<body>
    <?php
                if(isset($_GET['ID'])) {
                    $id = $_GET['ID'];
                    $sql = 'SELECT * FROM carros';
                    if($res=mysqli_query($con, $sql)) {
                        $registros = mysqli_fetch_assoc($res);
                        $nomeCarro = $registros['modelo_carros'];
                        $marcaCarro = $registros['marca_carros'];
                        $anoCarro = $registros ['ano_carros'];
                        $valorCarro = $registros['preco_carros'];
                        $categoriaCarro = $registros ['categoria_carros'];
                        $corCarro = $registros ['cor_carros'];
                        $descCarro = $registros ['descricao_carros'];
                        $urlImg = $registros['imagem_carros'];
                    }
                }
    ?>
    <header>
        <h1 class="logo">SpeedDrive</h1>

        <form action="" method="post" class="barra-pesquisa" id="form-pesquisa">
            <input type="text" name="nome_do_carro" placeholder="Digite o Carro em busca" size="45" class="campo-pesquisa">
            <button type="submit" class="btn-pesquisa"><i class="fas fa-search"></i></button>
        </form>
        <script>
            // Impede o envio do formulário ao clicar no botão de pesquisa
            document.getElementById('form-pesquisa').addEventListener('submit', function(event) {
            event.preventDefault();  // Impede o comportamento padrão de envio
            console.log("A pesquisa foi clicada, mas o envio foi bloqueado.");
            });
        </script>

        <nav class="menu">
            <ul>
                <li class="dropdown"> <!--Classe para que o submenu deste item desça-->
                    <a href="#" class="drop-btn">Sobre Nós</a> 
                    <ul class="submenu">
                        <li class="submenu-item"><a href="#sobre">Sobre</a></li>
                        <li class="submenu-item"><a href="#historia">História</a></li>
                        <li class="submenu-item"><a href="#missao">Missão</a></li>
                        <li class="submenu-item"><a href="#diferenca">Diferença</a></li>
                        <li class="submenu-item"><a href="#valores">Valores</a></li>
                        <li class="submenu-item"><a href="#visao">Visão</a></li>
                        <li class="submenu-item"><a href="#porque">Porque?</a></li>
                    </ul>
                </li>
                <li class="dropdown"> <!--Classe para que o submenu deste item desça-->
                    <a href="#" class="drop-btn">Marcas</a> 
                    <ul class="submenu"> <!--Classe para que este menu tenha um sub-->
                        <!--<li class="submenu-item"><a href="#">BMW</a></li> Classe de item do submenu-->

                        <?php
                            $sql = 'SELECT DISTINCT marca_carros FROM carros';
                            if ($res=mysqli_query($con, $sql)) {
                                $marcaCarro = array();
                                $i = 0;

                                while($registros = mysqli_fetch_assoc($res)) {
                                    $marcaCarro[$i] = $registros['marca_carros'];
                                    ?>

                                    <li class="submenu-item"><a href="/proj/catalogo/catalogo.php?marca=<?php echo $marcaCarro[$i] ?>"><?php echo $marcaCarro[$i]; ?></a></li>

                                    <?php
                                    $i++;
                                }
                            }
                        ?>
                    </ul>
                </li>
                <!--<li><a href="#">Contato</a></li>-->
            </ul>
        </nav>

    </header>

    <main>
        <div class="content">
            <div class="left-content">
                <p>Place</p>
            </div>
            <div class="image-content">
                <img src="<?php echo $urlImg ?>" alt="Foto do Carro" class="image">
                <a href="#" class="btn"><?php echo $valorCarro ?></a>
            </div>
            <div class="right-content">
                <p>holder</p>
            </div>
        </div>
    </main>

</body>
</html>