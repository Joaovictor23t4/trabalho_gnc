<template>
  <nav class="navbar navbar-expand-lg bg-dark">
    <div class="container-fluid">
      <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
        <a href="/">
          <img src="../assets/images/gnc-logo.png" alt="" width="100" height="100" class="logo" id="topo" />
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
              <img src="../assets/images/ticket.png" alt="" class="icons" />Meus Pedidos
            </button>
          </router-link>
          <router-link to="/minha-conta/dados-pessoais" class="router">
            <button type="button" class="btn btn-danger btn-select">
              <img src="../assets/images/jornal.png" alt="" class="icons" />Dados Pessoais
            </button>
          </router-link>
          <router-link to="/pagamento" class="router">
            <button type="button" class="btn btn-light">
              <img src="../assets/images/cartao.png" alt="" class="icons" />Pagamento
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
main {
  background-color: white !important;
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
/* Mobile (425px) */
@media only screen and (max-width: 425px) {
  .btn-group-vertical {
    padding: 20px 0;
  }

  .col-meio,
  .col-direita {
    padding: 0 5px !important;
  }

  .icons {
    width: 30px;
    height: 20px;
    margin-right: 5px;
  }

  .btn {
    padding: 8px;
    font-size: 16px;
    width: 100%;
  }

  .router {
    font-size: 16px;
    width: 100%;
  }

  .mb-3 {
    padding-top: 20px;
    padding-bottom: 20px;
  }

  .logo {
    width: 100px !important;
    height: 100px !important;
  }

  .container-fluid {
    align-items: center !important;
  }
}

/* Tablet (768px) */
@media only screen and (min-width: 426px) and (max-width: 768px) {
  .btn-group-vertical {
    padding: 30px 0;
  }

  .col-meio,
  .col-direita {
    padding: 0 10px !important;
  }

  .icons {
    width: 40px;
    height: 30px;
    margin-right: 10px;
  }

  .btn {
    font-size: 18px;
  }

  .router {
    font-size: 18px;
  }

  .mb-3 {
    padding-top: 30px;
    padding-bottom: 30px;
  }

  .logo {
    width: 120px !important;
    height: 120px !important;
  }
}

/* Desktop (1024px) */
@media only screen and (min-width: 769px) and (max-width: 1024px) {
  .btn-group-vertical {
    padding: 30px 0;
  }

  .col-meio,
  .col-direita {
    padding: 0 15px !important;
  }

  .icons {
    width: 50px;
    height: 40px;
    margin-right: 15px;
  }

  .btn {
    font-size: 20px;
  }

  .router {
    font-size: 20px;
  }

  .mb-3 {
    padding-top: 40px;
    padding-bottom: 40px;
  }

  .logo {
    width: 140px !important;
    height: 140px !important;
  }
}
</style>
<script>
import Footer from '../components/FooterVue.vue'
import FooterCopy from '../components/FooterCopy.vue'
export default {
  name: 'MeusDadosPessoais',
  components: {
    Footer,
    FooterCopy,
  },
}
</script>
