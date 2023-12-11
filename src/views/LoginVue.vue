<template>
  <div class="container-pai">
    <nav class="navbar navbar-expand-lg bg-dark">
      <div class="container-fluid">
        <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
          <img src="../assets/images/gnc-logo.png" alt="" width="100" height="100" class="logo" />
        </div>
      </div>
    </nav>
    <nav class="navbar bg-body-tertiary">
      <div class="container-fluid nav-cad">
        <h1>Bem vindo de volta!</h1>
      </div>
    </nav>
  </div>
  <main>
    <div class="container text-center">
      <div class="row">
        <div class="col-sm-4">
          <img src="../assets/images/gnc-logo.png" alt="" id="logo" />
          <h3>Não tem uma conta? Crie agora mesmo!</h3>
          <router-link to="/cadastro">
            <button type="button" class="btn btn-outline-danger">Criar conta!</button>
          </router-link>
        </div>
        <div class="col-sm-8">
          <h1>Bem vindo de volta!</h1>
          <h2>Para continuar, faça login em sua conta.</h2>
          <div class="form">
            <form action="">
              <div class="inputBox">
                <input type="email" name="email" id="email" class="inputUser" required />
                <label for="email" class="labelInput">Email</label>
              </div>
              <div class="inputBox">
                <input
                  type="password"
                  name="senha"
                  id="senha"
                  class="inputUser"
                  required
                  maxlength="30"
                />
                <label for="senha" class="labelInput">Senha</label>
              </div>
              <router-link to="/">
                <button type="button" class="btn btn-outline-danger">Entrar</button>
              </router-link>
              <router-link to="/esqueci-senha">Esqueceu a senha?</router-link>
              <hr />
              <router-link to="/cadastro">Não tem uma conta? Cadastre-se</router-link>
            </form>
          </div>
        </div>
      </div>
    </div>
  </main>
  <FooterCopy />
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
main {
  background-color: white;
}
.container {
  display: flex !important;
  flex-direction: column !important;
  justify-content: center !important;
  align-items: center !important;
  padding-top: 100px !important;
  padding-bottom: 100px !important;
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
#email,
#senha {
  color: white !important;
  font-size: 0.8em;
  padding: 0 3px;
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

#esqueceuSenha {
  display: inline-block;
  margin-top: 10px;
}

/* Media query for screens between 425px and 768px */
@media (min-width: 426px) and (max-width: 768px) {
  .container {
    padding: 30px;
  }

  .col-sm-4 {
    width: 40%;
  }

  .col-sm-8 {
    width: 60%;
  }
}

/* Media query for screens between 768px and 1024px */
@media (min-width: 769px) and (max-width: 1024px) {
  .container {
    padding: 40px;
  }

  .col-sm-4 {
    width: 30%;
  }

  .col-sm-8 {
    width: 70%;
  }
}

/* Media query for screens above 1024px (default styles) */
@media (min-width: 1025px) {
  .container {
    padding: 40px;
  }

  .row {
    width: 70%;
  }

  .col-sm-4 {
    width: 30%;
  }

  .col-sm-8 {
    width: 70%;
  }
}

@media (max-width: 425px) {
  .container {
    padding: 20px;
  }

  .row {
    flex-direction: column;
    width: 80%!important;
  }

  .col-sm-4,
  .col-sm-8 {
    width: 100%;
    border-radius: 0;
  }
  .col-sm-4 {
    display: none;
  }
  .col-sm-8 {
    border-radius: 10px;
  }
}

@media (max-width: 375px) {
        .container {
      padding: 20px;
    }
  
    .row {
      flex-direction: column;
      width: 90%!important;
    }
  
    .col-sm-4,
    .col-sm-8 {
      width: 100%;
      border-radius: 0;
    }
    .col-sm-4 {
      display: none;
    }
    .col-sm-8 {
      border-radius: 10px;
    }
}

@media (max-width: 320px) {
    .container {
    padding: 20px;
  }

  .row {
    flex-direction: column;
    width: 100%!important;
  }

  .col-sm-4,
  .col-sm-8 {
    width: 100%;
    border-radius: 0;
  }
  .col-sm-4 {
    display: none;
  }
  .col-sm-8 {
    border-radius: 10px;
  }
}
</style>
<script setup>
import FooterCopy from '../components/FooterCopy.vue'
</script>
    
