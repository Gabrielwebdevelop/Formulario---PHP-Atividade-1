<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>atividade php 1 </title>
    <style>
        .formulario{
            /* display: flex;
            flex-direction: column; */
            display: grid;
        }

        .botao{
            background-color: #000;
            color: #fff;
            width: 200px;
        }

    
       
    </style>
</head>

<body>

<h1>Link embaixo</h1>

    <form action="validacao.php" method="post" class="formulario">
        <label for="nome">
            Nome:
            <input type="text" name="nome">
        </label><br>

        <label for="nomeUsuario">
            Nome de Usuario:
            <input type="text" name="nomeUsuario">
        </label><br>

        <label for="email">
            E-mail:
            <input type="text" name="email">
        </label><br>

        <label for="cpf">
            Cpf:
            <input type="text" name="cpf">
        </label><br>

        <label for="dataNascimento">
            Data de Nascimento:
            <input type="date" name="dataNascimento">
        </label><br>

        <label for="sexo">
            Sexo:
            <select name="sexo" id="">
                <option >Selecione seu sexo</option>
                <option >Masculino</option>
                <option >Feminino</option>
            </select>
        </label><br>

        <label for="endereco">
            Endereco:
            <input type="text" name="endereco">
        </label><br>

        <input type="submit" value="Me aperte!" class="botao"/>
       
    </form>
</body>

</html>