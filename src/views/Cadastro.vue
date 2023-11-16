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
  <div class="box">
    <form action="HomeView.vue" method="POST">
      <fieldset>
        <legend><b>Formulário de clientes</b></legend>
        <div class="inputBox">
          <input type="text" name="nome" id="nome" class="inputUser" required />
          <label for="nome" class="labelInput">Nome Completo</label>
        </div>
        <div class="inputBox">
          <input type="text" name="email" id="email" class="inputUser" required />
          <label for="email" class="labelInput">Email</label>
        </div>
        <div class="inputBox">
          <input type="password" name="senha" id="senha" class="inputUser" required />
          <label for="senha" class="labelInput">Senha</label>
        </div>
        <div class="inputBox">
          <input type="tel" name="telefone" id="telefone" class="inputUser" required />
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
          <input type="text" name="cpf" id="cpf" class="inputUser" required maxlength="11"/>
          <label for="cpf" class="labelInput">CPF</label>
        </div>
        <input type="submit" name="submit" id="submit" action="../../Cadastro.php"/>
      </fieldset>
    </form>
  </div>
</template>
<script>
export default {
  name: 'Cadastro',
  data() {
    return {
      teste: 'teste',
      cpf: '',
      cpfFormatado: ''
    }
  }
}
</script>
<style scoped>
.bg-body-tertiary {
  background-color: rgb(71, 71, 71) !important;
  color: white !important;
  height: 60px !important;
  margin-bottom: -70px;
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

.box {
  color: rgb(255, 255, 255);
  position: relative;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  background-color: rgba(17, 14, 16, 0.8);
  padding: 20px;
  border-radius: 15px;
  width: 40%;
  height: 80%;
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

.inputUser {
  background: none;
  border: none;
  border-bottom: 1px solid white;
  outline: none;
  color: white;
  font-size: 15px;
  width: 100%;
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
}

#submit:hover {
  background-color: #720000;
}
</style>