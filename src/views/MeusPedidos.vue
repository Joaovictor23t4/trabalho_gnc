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
          <img src="../gnc-logo.png" alt="" width="100" height="100" class="logo" id="topo" />
        </a>
      </div>
    </div>
  </nav>
  <main>
    <div class="row">
      <div class="col col-esquerda">
        <div class="btn-group-vertical" role="group" aria-label="Vertical button group">
          <router-link to="/minha-conta/meus-pedidos" class="router">
            <button type="button" class="btn btn-danger btn-select">
              <img src="../../ticket.png" alt="" class="icons" />Meus Pedidos
            </button>
          </router-link>
          <router-link to="/minha-conta/dados-pessoais" class="router">
            <button type="button" class="btn btn-light btn-select">
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
        <h1 v-if="pedidos > 0">Você tem os seguintes pedidos:</h1>
        <h1 v-else>Você ainda não tem pedidos :(</h1>
      </div>
      <div class="col col-direita"></div>
    </div>
  </main>
  <footer>
    <div id="footer_content">
      <div id="footer_contacts">
        <img src="../gnc-logo.png" alt="" id="logofooter" />
        <p>Nossas redes sociais</p>
        <div id="footer_social_media">
          <a href="https://www.instagram.com/gnccinemas/" class="footer-link" id="instagram">
            <i class="fa-brands fa-instagram"></i>
          </a>
          <a
            href="https://www.facebook.com/GNCCinemas/?locale=pt_BR"
            class="footer-link"
            id="facebook"
          >
            <i class="fa-brands fa-facebook-f"></i>
          </a>
          <a
            href="https://wa.me/qr/B74IRQ5IJLXVJ1"
            class="footer-link"
            id="whatsapp"
            target="_blank"
          >
            <i class="fa-brands fa-whatsapp"></i>
          </a>
        </div>
      </div>
      <ul class="footer-list">
        <li>
          <h3>Para mais informações, acesse:</h3>
        </li>
        <li>
          <a href="https://www.gnccinemas.com.br/index.php/home" class="footer-link" target="_blank"
            >GNC Cinemas</a
          >
        </li>
        <li>
          <a href="https://www.gartenshopping.com.br/" class="footer-link" target="_blank"
            >Shopping Garten</a
          >
        </li>
        <li>
          <a href="https://muellerjoinville.com.br/" class="footer-link" target="_blank"
            >Shopping Mueller</a
          >
        </li>
      </ul>
      <ul class="footer-list">
        <li>
          <h3>Referências</h3>
        </li>
        <li>
          <a href="#topo" class="footer-link">Voltar ao topo ▲</a>
        </li>
        <li>
          <a href="https://www.ingresso.com" class="footer-link" target="_blank">Ingressos.com</a>
        </li>
        <li>
          <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3578.284935080505!2d-48.85528182537082!3d-26.252414265937823!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94deafa4c5bcc777%3A0x38e98c600be478f4!2sGarten%20Shopping!5e0!3m2!1spt-BR!2sbr!4v1700860586200!5m2!1spt-BR!2sbr"
            width="600"
            height="450"
            style="border: 0"
            allowfullscreen=""
            loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"
          ></iframe>
        </li>
      </ul>
      <div id="footer_subscribe">
        <h3>Inscreva-se</h3>
        <p>Entre com seu email para notificarmos novas notícias.</p>

        <div id="input_group">
          <input type="email" id="email" />
          <button>
            <i class="fa-regular fa-envelope"></i>
          </button>
        </div>
      </div>
    </div>
  </footer>
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
  height: 100% !important;
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
    min-height: 500px !important;
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
#logofooter {
  border-radius: 180px;
  width: 180px;
}
footer {
  width: 100%;
  color: #ffffff;
}
#footer-link {
  text-decoration: none;
}
#footer_content {
  background-color: #202020;
  display: grid;
  grid-template-columns: repeat(4, 1fr);
  padding: 3rem 3.5rem;
}
#footer_contacts h1 {
  margin-bottom: 0.75rem;
}
#footer_social_media {
  display: flex;
  gap: 2rem;
  margin-top: 1.5rem;
}
#footer_social_media .footer-link {
  display: flex;
  justify-content: center;
  align-items: center;
  height: 2.5rem;
  width: 2.5rem;
  color: var(--color-neutral-40);
  border-radius: 50%;
  transition: all 0.4s;
  text-decoration: none;
}
#footer_social_media .footer-link:hover {
  opacity: 0.8;
}
#instagram {
  background: linear-gradient(#7f37c9, #ff2992, #ff9807);
}
#facebook {
  background-color: #4267b3;
}
#whatsapp {
  background-color: #25d366;
}
.footer-list {
  display: flex;
  flex-direction: column;
  gap: 0.75rem;
  list-style: none;
}
.footer-list .footer-link {
  color: var(--color-neutral-40);
  transition: all 0.4s;
}
.footer-list .footer-link:hover {
  color: var(---color-neutral-20);
}
#footer_subscribe {
  display: flex;
  flex-direction: column;
  gap: 1.5rem;
}
#footer_subscribe p {
  color: var(---color-neutral-20);
}
iframe {
  width: 200px;
  height: 200px;
  border: none;
}
</style>