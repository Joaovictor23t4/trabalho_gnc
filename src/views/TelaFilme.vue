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
        
      </div>
      <div class="col col-meio">
        
      </div>
      <div class="col col-direita">
        
      </div>
    </div>
  </main>
  <Footer />
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
<script>
import Footer from '../components/FooterVue.vue';
</script>
