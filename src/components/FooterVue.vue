<template>
  <footer>
    <div id="footer_content">
      <div id="footer_contacts">
        <img src="../../gnc-logo.png" alt="" id="logofooter" />
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
          <a href="https://www.gnccinemas.com.br/index.php/home" class="footer-link" target="_blank" id="infoGnc">GNC Cinemas</a>
        </li>
        <li>
          <a href="https://www.gartenshopping.com.br/" class="footer-link" target="_blank" id="infoGarten">Shopping Garten</a>
        </li>
        <li>
          <a href="https://muellerjoinville.com.br/" class="footer-link" target="_blank" id="infoMueller">Shopping Mueller</a>
        </li>
      </ul>
      <ul class="footer-list">
        <li>
          <h3>Referências</h3>
        </li>
        <li>
          <a href="#header" class="footer-link" id="refTop">Voltar ao topo ▲</a>
        </li>
        <li>
          <a href="https://www.ingresso.com" class="footer-link" target="_blank" id="refIngresso">Ingressos.com</a>
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
  justify-items: center;
  padding: 3rem 3.5rem;
}
#footer_contacts h1 {
  margin-bottom: 0.75rem;
  margin: 0 auto;
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
#infoGnc:hover, #infoGarten:hover, #infoMueller:hover, #refTop:hover, #refIngresso:hover {
  transition: .2s;
  color: #c30000;
}
</style>
<script setup>

</script>
