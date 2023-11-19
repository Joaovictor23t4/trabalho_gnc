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
        <h1>Bem vindo de volta!</h1>
      </div>
    </nav>
  </div>
  <div class="container text-center">
    <div class="row">
      <div class="col-sm-4">
        <img src="../gnc-logo.png" alt="" id="logo" />
        <h3>Não tem uma conta? Crie agora mesmo!</h3>
        <button type="button" class="btn btn-outline-secondary">Criar conta!</button>
      </div>
      <div class="col-sm-8">
        <h1>Bem vindo de volta!</h1>
        <h2>Para continuar, faça login em sua conta.</h2>
        <div class="form">
          <form action="">
            <div class="inputBox">
              <input type="text" name="email" id="email" class="inputUser" required />
              <label for="email" class="labelInput">Email</label>
            </div>
            <div class="inputBox">
            <input type="password" name="senha" id="senha" class="inputUser" required maxlength="30"/>
            <label for="senha" class="labelInput">Senha</label>
          </div>
            <button type="button" class="btn btn-outline-danger">Entrar</button>
            <router-link to="/">Esqueceu a senha?</router-link>
            <hr />
            <router-link to="/cadastro">Não tem uma conta? Cadastre-se</router-link>
          </form>
        </div>
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

.container {
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
  padding: 44px;
}
.row {
  display: flex !important;
  flex-direction: row !important;
  justify-content: center !important;
  width: 70% !important;
}
#logo {
  width: 80%;
  height: 25vh;
}
h1 {
  color: white !important;
}

.col-sm-4 {
  background-color: #000000 !important;
  border: #333333 0.5px solid !important;
  border-bottom-left-radius: 10px !important;
  border-top-left-radius: 10px !important;
  padding: 10px;
}
.col-sm-8 {
  color: #a5a5a5 !important;
  background-color: #272727 !important;
  box-shadow: 1px 0px 4px 0px white !important;
  border-bottom-right-radius: 10px !important;
  border-top-right-radius: 10px !important;
  padding: 20px;
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

h3 {
  color: white !important;
}
button {
  color: white !important;
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
.inputBox {
  position: relative;
}
.inputUser {
  background: none;
  border: none;
  border-bottom: 1px solid white;
  outline: none;
  color: white !important;
  font-size: 15px;
  width: 100% !important;
  letter-spacing: 2px;
  display: flex;
  justify-content: center;
  align-items: center;
  white-space: pre-line;
  margin: 30px 0 30px 0;
}
#email, #senha {
  color: white !important;
}

.labelInput {
  position: absolute;
  top: 0px;
  left: 0px;
  pointer-events: none;
  transition: 0.5s;
}

.inputUser:focus ~ .labelInput,
.inputUser:valid ~ .labelInput {
  top: -20px;
  font-size: 12px;
  color: #018d5c;
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
</style>
<script setup>
import { ref } from 'vue'

const login = ref([])
</script>
    
