<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Resultado</title>
    <style>
        #errado{
            color:red;
        }
        #certo{
            color:green;
        }
    </style>
</head>
<body>
    <?php
        $senha1= $_POST["senha1"];
        $senha2= $_POST["senha2"];
        if($senha1==$senha2){
            echo "<h1 id=".certo.">Senha aceita!</h1>";
        }else{
            echo "<h1 id=".errado.">Preencha os campos corretamente!</h1>";
        }
    ?>
</body>
</html>