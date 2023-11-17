<template>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <div class="container text-center">
    <div class="row">
      <div class="col-sm-8">
        <h1>Bem vindo de volta!</h1>
        <h2>Para continuar, faça login em sua conta.</h2>
        <div class="form">
            <form action="">
                <label for="email">Email</label>
                <input type="email" name="email" id="email" placeholder="Email">
                <label for="senha">Senha</label>
                <input type="password" name="senha" id="senha" placeholder="Senha">
                <button type="submit" class="btn btn-primary">Entrar</button>
                <router-link to="/">Esqueceu a senha?</router-link>
                <hr>
                <router-link to="/cadastro">Não tem uma conta? Cadastre-se</router-link>
            </form>
        </div>
      </div>
      <div class="col-sm-4">
        <img src="../gnc-logo.png" alt="" id="logo">
        <h3>Não tem uma conta? Crie agora mesmo!</h3>
        <button type="button" class="btn btn-outline-secondary">Criar conta!</button>
      </div>
    </div>
  </div>
</template>

<style scoped>
    body {
        background-color: black !important;
    }
    .row {
        display: flex !important;
        flex-direction: row !important;
        justify-content: center !important;
        width: 80vh !important;
    }
    #logo {
        width: 80%;
        height: 25vh;
    }
    h1 {
        color: black !important;
    }
    #email, #senha {
        color: #000000 !important;
    }
    input {
        background-color: #F3EBEB !important;
    }
    .col-sm-4 {
        background-color: #000000 !important;
        border: #333333 0.5px solid !important;
    }
    .col-sm-8 {
        color: #A5A5A5 !important;
        background-color: #FFFAFA !important;
        box-shadow: 1px 0px 4px 0px white !important;
    }
    .form {
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        width: 100%;
    }
    .form input {
        width: 100%;
        margin-bottom: 10px;
    }
    .form label {
        margin-bottom: 10px;
    }
    .form button {
        width: 100%;
        margin-top: 10px;
    }
</style>
<script setup>
    const login = ref([]);
    // data() {
    //     return {
    //         teste: 'teste'
    //     }
    // }
</script>