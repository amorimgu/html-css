<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <main>
        <?php
        $nome = $_POST["nome"]; 
        $telefone = $_POST["telefone"]; 
        $email = $_POST["email"]; 
        $mensagem = $_POST["mensagem"]; 
        ?>
        <h1>Cadastro Feito com sucesso</h1>
        <ul>
            <li><?php echo $nome ?></li>
            <li><?php echo $telefone  ?></li>
            <li><?php echo $email ?></li>
            <li><?php echo $mensagem ?></li>
        </ul>
    </main>
</body>
</html>