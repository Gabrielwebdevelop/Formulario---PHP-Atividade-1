<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .formulario{
            display: grid;
            color: #fff;
            
        }
    </style>
</head>
<body style="background-color: #000;"> 
    <form action="" class="formulario">
        
        <?php 
            echo $_POST["nome"]."<br>";
            echo $_POST["nomeUsuario"]."<br>";
            echo $_POST["email"]."<br>";
            echo $_POST["cpf"]."<br>";
            echo $_POST["dataNascimento"]."<br>";
            echo $_POST["sexo"]."<br>";
            echo $_POST["endereco"]."<br>";
            
        ?>

    </form>
</body>
</html>