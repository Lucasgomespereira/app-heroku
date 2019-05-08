<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>App - Heroku</title>
</head>
<body>
    <form action="POST">
        <input type="text" name="senha1" id="senha1">
        <input type="text" name="senha2" id="senha2">
    </form>
    <?php
        $nome1= $_POST["senha1"];
        $senha2= $_POST["senha2"];
        if($senha1==$senha2){
            echo "Senha aceita!";
        }else{
            echo "Preencha os campos corretamente!";
        }
    ?>
</body>
</html>