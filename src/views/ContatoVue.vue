<template>
  <div class="container-pai">
    <nav class="navbar navbar-expand-lg bg-dark">
      <div class="container-fluid">
        <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
          <router-link to="/">
            <img src="../assets/images/gnc-logo.png" alt="" width="100" height="100" class="logo" />
          </router-link>
        </div>
      </div>
    </nav>
    <nav class="navbar bg-body-tertiary">
      <div class="container-fluid nav-cad">
        <h1>Contato</h1>
      </div>
    </nav>
  </div>
  <!-- Começo da página -->
  <main>
    <div class="row">
      <!-- Nomes -->
      <div class="col-6">
        <div class="box">
          <img src="../assets/images/Joao.jpg" alt="" />
          <p>Nome: João Victor Portela Rocha</p>
          <p>Turma: 1INFO3</p>
          <p>Email: joaovictor239090@gmail.com</p>
        </div>
      </div>
      <div class="col-6">
        <div class="box">
          <img src="../assets/images/Luiz.jpg" alt="" />
          <p>Nome: Luiz Fernando Blume Jacinto</p>
          <p>Turma: 1INFO3</p>
          <p>Email: luiz.fernando.251107@gmail.com</p>
        </div>
      </div>
      <!-- Fim dos nomes -->
    </div>
  </main>
  <!-- Fim da página -->
  <Footer />
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
main {
  background-color: white;
}
.row {
  --bs-gutter-x: none !important;
  padding: 20px !important;
  display: flex !important;
  justify-content: center !important;
  align-items: center !important;
}
.col-6 {
  display: flex !important;
  justify-content: center !important;
}
.box {
  width: 70%;
  height: 100%;
  background-color: #5c5c5c;
  border-radius: 20px;
  padding: 10px;
  display: flex !important;
  flex-direction: column;
  justify-content: center !important;
  align-items: center !important;
  color: white;
  justify-content: space-between !important;
}
.box img {
  width: 400px;
  height: 400px;
  border-radius: 50%;
  margin-bottom: 10px;
}
</style>
<script setup>
import FooterCopy from '../components/FooterCopy.vue'
import Footer from '../components/FooterVue.vue'
</script>
