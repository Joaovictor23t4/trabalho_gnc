<?php
if (isset($_POST['submit'])) {
    include_once('config.php');
    include_once('Cadastro.vue');
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $telefone = $_POST['telefone'];
    $data_nasc = $_POST['data_nascimento'];
    $bairro = $_POST['bairro'];
    $rua = $_POST['rua'];
    $cpf = $_POST['cpf'];
    $resultado = mysqli_query($conexao, "INSERT INTO usuario (nome, email, senha, telefone, data_nasc, bairro, rua, cpf) VALUES ('$nome', '$email', '$senha', '$telefone', '$data_nasc', '$bairro', '$rua', '$cpf')");
}
?>