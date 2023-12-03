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
        <h1>Cadastre-se</h1>
      </div>
    </nav>
  </div>
  <div id="container-box">
    <div class="box">
      <form action="/cadastro.php" method="POST">
        <fieldset>
          <legend><b>Formulário de clientes</b></legend>
          <div class="inputBox">
            <input type="text" name="nome" id="nome" class="inputUser" required />
            <label for="nome" class="labelInput">Nome Completo</label>
          </div>
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
          <div class="inputBox">
            <input
              type="tel"
              name="telefone"
              id="telefone"
              class="inputUser"
              required
              maxlength="30"
            />
            <label for="telefone" class="labelInput">Telefone</label>
          </div>
          <label for="data_nascimento"><b>Data de Nascimento:</b></label>
          <input type="date" name="data_nascimento" id="data_nascimento" required />
          <div class="inputBox">
            <input type="text" name="bairro" id="bairro" class="inputUser" required />
            <label for="bairro" class="labelInput">Bairro</label>
          </div>
          <div class="inputBox">
            <input type="text" name="rua" id="rua" class="inputUser" required />
            <label for="rua" class="labelInput">Rua</label>
          </div>
          <div class="inputBox">
            <input type="text" name="cpf" id="cpf" class="inputUser" required maxlength="11" />
            <label for="cpf" class="labelInput">CPF</label>
          </div>
          <div class="buttons">
            <router-link to="/login">
            <button type="submit" name="submit" id="submit">Voltar para o login</button>
            </router-link>
            <router-link to="/">
              <button type="submit" id="submit">Finalizar Cadastro!</button>
            </router-link>
          </div>
        </fieldset>
      </form>
    </div>
  </div>
  <FooterCopy />
</template>
<style scoped>
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

#container-box {
  display: flex;
  justify-content: center;
  align-items: center;
  padding: 32px;
}

.box {
  color: rgb(255, 255, 255);
  display: flex;
  justify-content: center;
  background-color: rgba(17, 14, 16, 0.8);
  padding: 20px;
  border-radius: 15px;
  width: 30%;
  height: 70%;
}

legend {
  text-align: center;
  border: 1px solid #ffffff;
  padding: 10px;
  background-color: #004b92;
  border-radius: 8px;
  color: #dadada;
  display: flex;
  justify-content: center;
  align-items: center;
  margin: 5px 0 30px 0;
}

.inputBox {
  position: relative;
}
.buttons {
  margin: 10px 0 0 0;
  display: flex;
  justify-content: space-between;
  align-items: center;
  width: 100%;
}
.inputUser {
  background: none;
  border: none;
  border-bottom: 1px solid white;
  outline: none;
  color: white;
  font-size: 15px;
  width: 100% !important;
  letter-spacing: 2px;
  display: flex;
  justify-content: center;
  align-items: center;
  white-space: pre-line;
  margin: 30px 0 30px 0;
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

#data_nascimento {
  border: none;
  border-radius: 10px;
  padding: 8px;
  outline: none;
  font-size: 17px;
}

#submit {
  background-color: #b00000;
  width: 100%;
  padding: 15px;
  border: none;
  color: white;
  font-size: 15px;
  cursor: pointer;
  border-radius: 10px;
  transition: 0.25s;
}

#submit:hover {
  background-color: #9b0000;
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

@media (max-width: 425px) {
  .box {
    width: 100%;
  }
}

@media (min-width: 426px) and (max-width: 768px) {
  .box {
    width: 80%;
  }
}

@media (min-width: 769px) and (max-width: 1024px) {
  .box {
    width: 60%;
  }
}

/* Media query for screens above 1024px (default styles) */
@media (min-width: 1025px) {
  .box {
    width: 30%; /* Default width */
  }
}
</style>
<script setup>
import { ref } from 'vue'
import { useRouter } from 'vue-router'
import FooterCopy from '../components/FooterCopy.vue'
const statusRequisicao = ref(null)
const router = useRouter()

const submitForm = async () => {
  const requisicao = await axios.get('/src/server_php/cadastro.php')

  statusRequisicao.value = requisicao.data

  if (statusRequisicao.value === 'Sucesso') {
    router.push('/login')
  } else {
    alert(statusRequisicao.value)
  }
}
</script>
