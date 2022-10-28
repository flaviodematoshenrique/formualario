
<?php

    include('config.php');
    Mysql::conectar();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>Formulário</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="form.css" rel="stylesheet">
</head>
<body>

<div class="form_cd">
    <h2>Cadastro de usuário</h2>
    <form method="Post">
        <div><input type="text" name="nome" placeholder="Nome"></div>
        <div><input type="text" name="email" placeholder="E-mail"></div>
        <div><input type="text" name="senha" placeholder="Senha"></div>
        <div><input type="submit" name="acao" value="Cadastrar"></div>
        <div><input type="hidden" name="form" value="f_form"></div>
    </form>
</div><!--form_cd-->   
</body>
</html>