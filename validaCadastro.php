<?php
// Verifica se o formulário foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtém os valores do formulário
    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $senha = $_POST["senha"];
    $confirmSenha = $_POST["confirm-senha"];

    // Validação básica
    if (empty($nome) || empty($email) || empty($senha) || empty($confirmSenha)) {
        echo "Por favor, preencha todos os campos.";
    } elseif ($senha !== $confirmSenha) {
        echo "As senhas não correspondem.";
    } else {
        // Processo de cadastro no banco de dados
        // Aqui você pode adicionar o código para inserir os dados em um banco de dados ou realizar outras ações necessárias

        // Exemplo: Inserir no banco de dados
        // Substitua as informações abaixo pelas suas próprias configurações de banco de dados
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "estoque";

        // Conexão com o banco de dados
        $conn = new mysqli($servername, $username, $password, $dbname);
        // Verifica se a conexão foi estabelecida com sucesso
        if ($conn->connect_error) {
            die("Falha na conexão com o banco de dados: " . $conn->connect_error);
        }

        // Verifica se o usuário já está cadastrado
        $sql = "SELECT * FROM cadastro WHERE email = '$email'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            echo "Este e-mail já foi cadastrado.";
        } else {
            // Insere o usuário no banco de dados
            $sql = "INSERT INTO cadastro (nome, email, senha) VALUES ('$nome', '$email', '$senha')";
            if ($conn->query($sql) === TRUE) {
                echo "Usuário cadastrado com sucesso!";
            } else {
                echo "Erro ao cadastrar o usuário: " . $conn->error;
            }
        }

        // Fecha a conexão com o banco de dados
        $conn->close();
    }
}
?>

<?php
// Função para enviar o email de confirmação
function enviarEmailConfirmacao($nome, $email) {
    $assunto = 'Confirmação de Cadastro';
    $mensagem = "Olá $nome,\n\nObrigado por se cadastrar no nosso site!";
    $headers = "From: gabriel.bernardino@aluno.unifapce.edu.br\r\n";
    $headers .= "Reply-To: gabriel.bernardino@aluno.unifapce.edu.br\r\n";
    
    // Use a função mail() para enviar o email
    if (mail($email, $assunto, $mensagem, $headers)) {
        echo "Email de confirmação enviado com sucesso para $email.";
    } else {
        echo "Ocorreu um erro ao enviar o email de confirmação.";
    }
}

// Verifica se o formulário foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtém os valores do formulário
    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $senha = $_POST["senha"];
    $confirmSenha = $_POST["confirm-senha"];

    // Validação básica
    if (empty($nome) || empty($email) || empty($senha) || empty($confirmSenha)) {
        echo "Por favor, preencha todos os campos.";
    } elseif ($senha !== $confirmSenha) {
        echo "As senhas não correspondem.";
    } else {
        // Processo de cadastro no banco de dados
        // Aqui você pode adicionar o código para inserir os dados em um banco de dados ou realizar outras ações necessárias

        // Exemplo: Inserir no banco de dados
        // Substitua as informações abaixo pelas suas próprias configurações de banco de dados
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "estoque";

        // Conexão com o banco de dados
        $conn = new mysqli($servername, $username, $password, $dbname);
        // Verifica se a conexão foi estabelecida com sucesso
        if ($conn->connect_error) {
            die("Falha na conexão com o banco de dados: " . $conn->connect_error);
        }

        // Verifica se o usuário já está cadastrado
        $sql = "SELECT * FROM cadastro WHERE email = '$email'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            echo "Este e-mail já foi cadastrado.";
        } else {
            // Insere o usuário no banco de dados
            $sql = "INSERT INTO cadastro (nome, email, senha) VALUES ('$nome', '$email', '$senha')";
            if ($conn->query($sql) === TRUE) {
                // Chama a função para enviar o email de confirmação
                enviarEmailConfirmacao($nome, $email);
                echo "Usuário cadastrado com sucesso!";
            } else {
                echo "Erro ao cadastrar o usuário: " . $conn->error;
            }
        }

        // Fecha a conexão com o banco de dados
        $conn->close();
    }
}
?>
