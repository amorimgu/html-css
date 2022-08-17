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
        <fieldset>
            <legend>Faça seu cadastro</legend>
            <form action="cadastro.php" method="post" target="_blank">
                <label>Nome:</label>
                <br>
                <input type="text" name="nome" placeholder="Seu nome">
                <br>
                <label>Telefone:</label>
                <br>
                <input type="tel" name="telefone" placeholder="(XX) XXXX-XXXX">
                <br>
                <label>E-mail:</label>
                <br>
                <input type="email" name="email" placeholder="Digite seu email">
                <br>
                <label>Mensagem</label>
                <br>
                <textarea name="mensagem"></textarea>
                <br>
                <input type="submit" name="Enviar">
                <input type="reset" value="Limpar">
            </form>
        </fieldset>
    </main>
</body>
</html>