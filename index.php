<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema</title>
    
</head>
<body>
    <?php
        //inckuindo arquivo
        require './Usuarios.php';

        //instanciando a classe
        //criando objeto $listarusuarios
        $listarusuarios = new Usuarios();
        $result_usuarios = $listarusuarios->listar();
        foreach ($result_usuarios as $row){
           /* echo "<pre>";
            var_dump($row);
            echo "</pre>"; */

            extract($row);
            echo"<div class='card'";
            echo "Id: $id<br>";
            echo "Foto: <img src = '$imagem' width = '100px' height = '140px'";
            echo "Nome: $usuario<br>";
            echo "E-Mail: $email<br>";
            echo"<hr>";
            echo"</div>";
        }
            ?>
    
</body>
</html>
