<template>
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
  <div class="container text-center">
    <div class="row">
      <div class="col col-left">
        <div class="btn-group-vertical" role="group" aria-label="Vertical button group">
          <button type="button" class="btn btn-light">
            <img src="../../ticket.png" alt="" class="icons" />Meus Pedidos
          </button>
          <button type="button" class="btn btn-danger btn-select">
            <img src="../../jornal.png" alt="" class="icons" />Dados Pessoais
          </button>
          <button type="button" class="btn btn-light">
            <img src="../../cartao.png" alt="" class="icons" />Pagamento
          </button>
        </div>
      </div>
      <div class="col">
        <div class="input-group">
          <span class="input-group-text">First and last name</span>
          <input type="text" aria-label="First name" class="form-control" />
          <input type="text" aria-label="Last name" class="form-control" />
        </div>
      </div>
      <div class="col">Column</div>
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
.btn-group-vertical {
  padding: 30px 0 30px 0;
  width: 400px;
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
}
.btn-select {
  color: white;
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