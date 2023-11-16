<template>
<div class="container-pai">
    <nav class="navbar navbar-expand-lg bg-dark">
      <div class="container-fluid">
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarTogglerDemo01"
          aria-controls="navbarTogglerDemo01"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
          <img src="../gnc-logo.png" alt="" width="100" height="100" class="logo" />
        </div>
      </div>
    </nav>
    <nav class="navbar bg-body-tertiary">
      <div class="container-fluid nav-cad">
        <h1>Cadastre-se</h1>
      </div>
    </nav>
  </div>
    <div class="container text-center">
        <div class="row">
        <div class="col-sm-8">
            <h1>Bem vindo de volta!</h1>
            <h2>Para continuar, faça login em sua conta.</h2>
            <div class="form">
            <form action="">
                <label for="email">Email</label>
                <input type="email" name="email" id="email" placeholder="Email" />
                <label for="senha">Senha</label>
                <input type="password" name="senha" id="senha" placeholder="Senha" />
                <button type="submit" class="btn btn-primary">Entrar</button>
                <router-link to="/">Esqueceu a senha?</router-link>
                <hr />
                <router-link to="/cadastro">Não tem uma conta? Cadastre-se</router-link>
            </form>
            </div>
        </div>
        <div class="col-sm-4">
            <img src="../gnc-logo.png" alt="" id="logo" />
            <h3>Não tem uma conta? Crie agora mesmo!</h3>
            <button type="button" class="btn btn-outline-secondary">Criar conta!</button>
        </div>
        </div>
    </div>
    <footer>
    <div class="container-footer">
      <div class="row">
        <div class="col-12">
          <p class="text-center">© 2023 GNC - Todos os direitos reservados</p>
        </div>
      </div>
    </div>
  </footer>
</template>

<style scoped>
body {
  background-color: black !important;
}
.bg-body-tertiary {
  background-color: rgb(71, 71, 71) !important;
  color: white !important;
  height: 60px !important;
  display: flex !important;
  justify-content: center !important;
  align-items: center !important;
}
.container-fluid {
  display: flex !important;
  justify-content: center !important;
  align-items: flex-start !important;
}
.navbar-expand-lg .navbar-collapse {
  display: flex !important;
  justify-content: center !important;
  align-items: flex-start !important;
  height: 100px !important;
}
h1 {
    color: white !important;
}
.container {
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
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
#email,
#senha {
  color: #000000 !important;
}
input {
  background-color: #f3ebeb !important;
}
.col-sm-4 {
  background-color: #000000 !important;
  border: #333333 0.5px solid !important;
}
.col-sm-8 {
  color: #a5a5a5 !important;
  background-color: #fffafa !important;
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
.container-footer {
  display: flex;
  justify-content: center;
  align-items: center;
  height: 100px;
  width: 100%;
  background-color: #212529;
  color: white;
}

.col-12 {
  display: flex;
  justify-content: center;
  align-items: center;
  height: 100px;
  width: 100%;
  background-color: #212529;
  color: white;
}
</style>
<script setup>
import { ref } from 'vue'

const login = ref([])
</script>
    
