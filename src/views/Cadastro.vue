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
    <div class="container text-center">
      <div class="row">
        <div class="col-sm-8">
          <h1>Bem vindo de volta!</h1>
          <h2>Para continuar, faça login em sua conta.</h2>
          <div class="form">
            <form action="" class="form">
              <form action="" method="post" class="form-conteudo">
                <label for="nome_cad">Nome</label>
                <input type="text" name="nome" id="campo_nome" placeholder="Nome" />
                <label for="tel_cad">Telefone</label>
                <input type="tel" name="telefone" id="campo_telefone" placeholder="Telefone" />
                <label for="email_cad">Email</label>
                <input type="email" name="email" id="campo_email" placeholder="Email" />
                <label for="confirmEmail_cad">Confirmar Email</label>
                <input
                  type="email"
                  name="confirmar_email"
                  id="confirmarEmail_cad"
                  placeholder="Confirmar Email"
                />
                <label for="cpf_cad">CPF</label>
                <input
                  type="text"
                  name="cpf"
                  id="campo_cpf"
                  placeholder="CPF"
                  v-model="cpf"
                  @input="formatarCPF()"
                  maxlength="11"
                />
                <label for="estado_cad">Estado</label>
                <select name="estado" id="campo_estado">
                  <option value="estado" title="Selecionar Estado">Selecionar Estado</option>
                  <option value="PR">Paraná</option>
                  <option value="RS">Rio Grande do Sul</option>
                  <option value="SC">Santa Catarina</option>
                  <option value="SP">São Paulo</option>
                </select>
                <label for="senha_cad">Senha</label>
                <input type="password" name="senha" id="campo_senha" placeholder="Senha" />
                <label for="confirmarSenha_cad">Confirmar Senha</label>
                <input
                  type="password"
                  name="confirmar_senha"
                  id="confirmarSenha_cad"
                  placeholder="Confirmar Senha"
                />
              </form>
            </form>
          </div>
        </div>
        <div class="col-sm-4">
          <img src="../gnc-logo.png" alt="" width="200" height="200" class="logo" />
          <h3>Já tem uma conta? Entre agora mesmo!</h3>
          <router-link to="/login"><button type="button" class="btn btn-outline-secondary">Conectar conta!</button></router-link>
        </div>
      </div>
    </div>
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
  },
  methods: {
    teste() {
      console.log('teste')
    },
    formatarCPF() {
      // Limpar o CPF de caracteres não numéricos
      let cpfLimpo = this.cpf.replace(/\D/g, '')

      // Adicionar pontos e traço ao CPF
      this.cpfFormatado = cpfLimpo.replace(/(\d{3})(\d{3})(\d{3})(\d{2})/, '$1.$2.$3-$4')
    }
  }
}
</script>
<style scoped>
.container-fluid {
  display: flex !important;
  justify-content: center !important;
  align-items: flex-start !important;
}
.form {
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
  width: 100%;
}
.form-conteudo,
label,
input {
  display: block;
}
.img {
  display: block;
}
.navbar-expand-lg .navbar-collapse {
  display: flex !important;
  justify-content: center !important;
  align-items: flex-start !important;
}
.bg-body-tertiary {
  background-color: rgb(71, 71, 71) !important;
  color: white !important;
}
body {
  background-color: black !important;
}
.row {
  display: flex !important;
  flex-direction: row !important;
  justify-content: center !important;
  height: auto !important;
  width: 100vh !important;
}
input {
  background-color: #ffffff !important;
}
.col-sm-4 {
  background-color: #000000 !important;
  border: #333333 0.5px solid !important;
  color: white !important;
}
.col-sm-8 {
  color: #000000 !important;
  background-color: #ffffff !important;
  box-shadow: 1px 0px 4px 0px white !important;
  border: #333333 1px solid !important;
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
.container {
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
  padding: 20px;
  width: 90vh !important;
}
.btn {
  color: white !important;
}
</style>