<template>
  <div>
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
      </form>
      <form action="" method="post" class="form-conteudo">
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
</template>
<script>
export default {
  name: 'Cadastro',
  data() {
    return {
      teste: 'teste',
      cpf: '',
      cpfFormatado: '',
    }
  },
  methods: {
    teste() {
      console.log('teste')
    },
   formatarCPF() {
      // Limpar o CPF de caracteres não numéricos
      let cpfLimpo = this.cpf.replace(/\D/g, '');

      // Adicionar pontos e traço ao CPF
      this.cpfFormatado = cpfLimpo.replace(/(\d{3})(\d{3})(\d{3})(\d{2})/, '$1.$2.$3-$4');
    },
  }
}
</script>
<style scoped>
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
</style>