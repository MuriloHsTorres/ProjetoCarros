<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php
        include_once "connection.php";
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
            $valorCarro = $registros['preco_carros'];
            $urlImg = $registros['imagem_carros'];

            echo $nomeCarro;
            echo $marcaCarro;
            echo $valorCarro;
            echo $urlImg;
        }
    }
    ?>
</body>
</html>