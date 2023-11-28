<?php
include 'config.php';

if (isset($_POST['submit'])) {
    $nome = $_POST['nome_cad'];
    $email = $_POST['email_cad'];
    $senha = password_hash($_POST['senha_cad'], PASSWORD_DEFAULT);
    $telefone = $_POST['telefone_cad'];
    $cpf = $_POST['cpf_cad'];
    $rua = $_POST['rua_cad'];
    $bairro = $_POST['bairro_cad'];

    if (strlen($telefone) > 20 || strlen($cpf) > 14) {
        http_response_code(400);
        echo 'Erro: número de telefone inválido e/ou CPF inválido';
    } else {
        $insertion = mysqli_query($conexao, "INSERT INTO pessoa (nome, email, senha, telefone, cpf, rua, bairro) VALUES ('$nome', '$email', '$senha', '$telefone', '$cpf', '$rua', '$bairro')");

        $confirmInsert = mysqli_query($conexao, "SELECT cpf FROM pessoa WHERE cpf = '$cpf'");

        if ($confirmInsert && mysqli_num_rows($confirmInsert) === 0) {
            echo mysqli_error($conexao);
        } else if ($confirmInsert && mysqli_num_rows($confirmInsert) > 0) {
            echo 'Sucesso';
        }
    }
}
?>