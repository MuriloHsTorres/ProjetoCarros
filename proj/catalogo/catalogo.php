<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <script src="https://kit.fontawesome.com/939fae6bc5.js" crossorigin="anonymous"></script>

    <?php
        include_once "../others/connection.php";

        if(isset($_GET['marca'])) {
            $marca = $_GET['marca'];
        }
    ?>

    <title>SpeedDrive</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1 class="logo">SpeedDrive</h1>

        <h2 class="marca"><?php echo $marca ?></h2>

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
                <li><a href="/proj/index.php" target="_self" rel="author">Sobre Nós</a></li>
                <li class="dropdown">
                    <a href="#" class="drop-btn">Marcas</a> 
                    <ul class="submenu"><?php
                            $sql = 'SELECT DISTINCT marca_carros FROM carros';
                            if ($resHeader=mysqli_query($con, $sql)) {
                                $marcaCarroHeader = array();
                                $i = 0;

                                while($registrosHeader = mysqli_fetch_assoc($resHeader)) {
                                    $marcaCarroHeader[$i] = $registrosHeader['marca_carros'];
                                    ?>

                                    <li class="submenu-item"><a href="/proj/catalogo/catalogo.php?marca=<?php echo $marcaCarroHeader[$i] ?>"><?php echo $marcaCarroHeader[$i]; ?></a></li>

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
        <section id="marcas" class="car_display">
            <?php
                $sql = 'SELECT * FROM carros
                WHERE marca_carros = "' . $marca . '"';
                if ($res=mysqli_query($con, $sql)) {
                    $nomeCarro = array();
                    $marcaCarro = array();
                    $valorCarro = array();
                    $i = 0;
                    while ($registros=mysqli_fetch_assoc($res)) {
                        $nomeCarro[$i] = $registros['modelo_carros'];
                        $marcaCarro[$i] = $registros['marca_carros'];
                        $valorCarro[$i] = $registros['preco_carros'];
                        $urlImg[$i] = $registros['imagem_carros'];
                        $id[$i] = $registros['id_carros'];
                        ?>

                        <div class="car_box">
                            <img src="<?php echo $urlImg[$i]; ?>" alt="imagem_carro" class="car_img">
                            <div class="content">
                                <h3><?php echo $nomeCarro[$i]; ?></h3>
                                <p><?php echo $marcaCarro[$i]; ?></p>
                                <a href="/proj/catalogo/detalhes/detail.php?ID=<?php echo $id[$i]; ?>" target="_self"><button>Ver Veículo</button></a>
                            </div>
                        </div>
                        
                        <?php
                        $i++;
                    }
                }
            ?>
            
            <div class="car_box">
                <img src="image.png" alt="imagem_carro" class="car_img">
                <div class="content">
                    <h3>Carro X</h3>
                    <p>Marca X</p>
                    <a href="#"><button>R&#36;111.111,10</button></a>
                </div>
            </div>

        </section>
    </main>

    <footer>
        <div>
            <p class="logo">SpeedDrive</p>
            <a href="https://github.com/MuriloHsTorres/ProjetoCarros" target="_blank"><i class="fa-brands fa-github"></i></a>
            <p>Email: speeddrive&#64;motors.com</p>
            <p>Telefone: (55) +12 98562-2653</p>
            <p>Localização: Rua Motors Sports 111, São Paulo, Brasil</p>
            <p>&#169; SpeedDrive. Todos direitos reservados.</p>
        </div>
    </footer>
    <?php if(isset($con)){ mysqli_close($con); }?>
</body>
</html>