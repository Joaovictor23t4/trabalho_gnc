<template>
  <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
    integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
    crossorigin="anonymous"
    referrerpolicy="no-referrer"
  />
  <nav class="navbar navbar-expand-lg bg-dark">
    <div class="container-fluid">
      <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
        <a href="/">
          <img src="../assets/image/gnc-logo.png" alt="" width="100" height="100" class="logo" id="topo" />
        </a>
      </div>
    </div>
  </nav>
  <main>
    <div class="row">
      <div class="col col-esquerda">
        <div class="btn-group-vertical" role="group" aria-label="Vertical button group">
          <router-link to="/minha-conta/meus-pedidos" class="router">
            <button type="button" class="btn btn-light">
              <img src="../../ticket.png" alt="" class="icons" />Meus Pedidos
            </button>
          </router-link>
          <router-link to="/minha-conta/dados-pessoais" class="router">
            <button type="button" class="btn btn-danger btn-select">
              <img src="../../jornal.png" alt="" class="icons" />Dados Pessoais
            </button>
          </router-link>
          <router-link to="/pagamento" class="router">
            <button type="button" class="btn btn-light">
              <img src="../../cartao.png" alt="" class="icons" />Pagamento
            </button>
          </router-link>
        </div>
      </div>
      <div class="col col-meio">
        <div class="input-group mb-3">
          <span class="input-group-text" id="inputGroup-sizing-default">Nome</span>
          <input
            type="text"
            class="form-control"
            aria-label="Sizing example input"
            aria-describedby="inputGroup-sizing-default"
            disabled
          />
        </div>
        <div class="input-group mb-3">
          <span class="input-group-text" id="inputGroup-sizing-default">Email</span>
          <input
            type="text"
            class="form-control"
            aria-label="Sizing example input"
            aria-describedby="inputGroup-sizing-default"
            disabled
          />
        </div>
        <div class="input-group mb-3">
          <span class="input-group-text" id="inputGroup-sizing-default">Telefone</span>
          <input
            type="text"
            class="form-control"
            aria-label="Sizing example input"
            aria-describedby="inputGroup-sizing-default"
            disabled
          />
        </div>
        <div class="input-group mb-3">
          <span class="input-group-text group-maior" id="inputGroup-sizing-default">Data Nasc</span>
          <input
            type="text"
            class="form-control"
            aria-label="Sizing example input"
            aria-describedby="inputGroup-sizing-default"
            disabled
          />
        </div>
      </div>
      <div class="col col-direita">
        <div class="input-group mb-3">
          <span class="input-group-text" id="inputGroup-sizing-default">Bairro</span>
          <input
            type="text"
            class="form-control"
            aria-label="Sizing example input"
            aria-describedby="inputGroup-sizing-default"
            disabled
          />
        </div>
        <div class="input-group mb-3">
          <span class="input-group-text" id="inputGroup-sizing-default">Rua</span>
          <input
            type="text"
            class="form-control"
            aria-label="Sizing example input"
            aria-describedby="inputGroup-sizing-default"
            disabled
          />
        </div>
        <div class="input-group mb-3">
          <span class="input-group-text" id="inputGroup-sizing-default">CPF</span>
          <input
            type="text"
            class="form-control cpf"
            aria-label="Sizing example input"
            aria-describedby="inputGroup-sizing-default"
            disabled
          />
        </div>
      </div>
    </div>
  </main>
  <Footer />
  <FooterCopy />
</template>
<style scoped>
.btn-group-vertical {
  padding: 30px 0 30px 0;
  width: 100%;
}
.row {
  --bs-gutter-x: none !important;
}
.col-meio,
.col-direita {
  padding: 0 10px !important;
}
.icons {
  width: 40px;
  height: 30px;
  margin-right: 10px;
  display: flex;
  justify-content: flex-start;
  align-items: center;
}
.btn {
  padding: 10px;
  font-size: 18px;
  display: flex;
  justify-content: flex-start;
  align-items: center;
  color: #036e46;
  width: 80%;
}
.router {
  font-size: 18px;
  display: flex;
  justify-content: flex-start;
  align-items: center;
  color: #036e46;
  width: 90%;
  text-decoration: none;
}
.mb-3 {
  padding-top: 30px;
  padding-bottom: 30px;
}
.btn-select {
  color: white;
}
.btn-light {
  background-color: rgb(224, 224, 224);
  color: #036e46;
}
.btn-light:hover {
  background-color: rgb(197, 197, 197);
  color: #036e46;
}
.logo {
  width: 140px !important;
  height: 140px !important;
}
.container-fluid {
  display: flex !important;
  justify-content: center !important;
  align-items: flex-start !important;
}
.bg-body-tertiary {
  background-color: rgb(71, 71, 71) !important;
  color: white !important;
  height: 60px !important;
  display: flex !important;
  justify-content: center !important;
  align-items: center !important;
}
.navbar-expand-lg .navbar-collapse {
  display: flex !important;
  justify-content: center !important;
  align-items: flex-start !important;
  height: 140px !important;
}
.col-left {
  display: flex !important;
  justify-content: flex-start !important;
  align-items: flex-start !important;
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
<script>
import Footer from './components/FooterVue.vue'
import FooterCopy from './components/FooterCopy.vue'
export default {
  name: 'MeusDadosPessoais',
  components: {
    Footer,
    FooterCopy,
  },
}
</script>
