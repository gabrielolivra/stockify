<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/cadastro.css">
    <title>Cadastro</title>
</head>
<body>
    <main>
        <img src="./img/cadastro.svg" alt="">
        <form action="validaCadastro.php" method="post">
        <h1>Cadastro</h1>

            <div class="container-input">
                <label for="Nome">Nome</label>
                <input type="text" name="nome" id="">
            </div>
            <div class="container-input">
                <label for="Email">Email</label>
                <input type="email" name="email" id="">
            </div>
            <div class="container-input">
                <label for="Senha">Senha</label>
                <input type="password" name="senha" id="">
            </div>
            <div class="container-input">
                <label for="Confirmar senha">Confirmar senha</label>
                <input type="password" name="confirm-senha" id="">
            </div>

            <input type="submit" value="Cadastrar">
        </form>
    </main>
</body>
</html>