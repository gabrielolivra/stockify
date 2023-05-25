<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/login.css">
    <title>Estoque</title>
</head>
<body>
    <main>
<form action="validaLogin.php" method="post">
    <img src="./img/logo.svg" alt="">
    <div class="inputs">
        <label for="email">Email</label>
        <input type="email" name="email" id="" placeholder='Digite seu email'>
    </div>
    
    <div class="inputs">
        <label for="senha">Senha</label>
        <input type="password" name="senha" id="" placeholder='Digite sua senha'>
    </div>
    <input type="submit" value="Conectar">
</form>
    </main>
</body>
</html>