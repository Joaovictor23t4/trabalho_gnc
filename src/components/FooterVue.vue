<template>
  <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
    integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
    crossorigin="anonymous"
    referrerpolicy="no-referrer"
  />
  <footer>
    <div id="footer_content">
      <div id="footer_contacts">
        <img src="../assets/images/gnc-logo.png" alt="" id="logofooter" />
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
          <iframe v-if="store.cine === 'mueller'"
            :src="srcUrl[1].src"
            width="600"
            height="450"
            style="border: 0"
            allowfullscreen=""
            loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"
          ></iframe>
          <iframe v-else 
            :src="srcUrl[0].src" 
            width="600"
            height="450"
            style="border: 0"
            allowfullscreen=""
            loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"></iframe>
        </li>
      </ul>
      <div id="footer_subscribe">
        <h2>Acesse a página de contato, e veja os fundadores deste site!</h2>

        <div id="input_group">
          <router-link to="/contato" class="router">
            <button>Contato</button>
          </router-link>
        </div>
         <div id="input_group">
          <router-link to="/cadastro" class="router">
            <button>Cadastre-se</button>
          </router-link>
        </div>
         <div id="input_group">
          <router-link to="/login" class="router">
            <button>Login</button>
          </router-link>
        </div>
      </div>
    </div>
  </footer>
</template>

<script setup>
import { useMovieStore } from '../stores/movie'

const store = useMovieStore();

const srcUrl = [{
  name: "garten",
  src: "https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3578.284935080505!2d-48.85528182537082!3d-26.252414265937823!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94deafa4c5bcc777%3A0x38e98c600be478f4!2sGarten%20Shopping!5e0!3m2!1spt-BR!2sbr!4v1700860586200!5m2!1spt-BR!2sbr"
}, {
  name: "mueller",
  src: "https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14306.818767426446!2d-48.8491056!3d-26.3036717!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94deb047df2b28ef%3A0xbf208682735a91d!2sShopping%20Mueller%20Joinville!5e0!3m2!1spt-BR!2sbr!4v1702293236372!5m2!1spt-BR!2sbr"
}];
</script>
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

#infoGnc:hover, #infoGarten:hover, #infoMueller:hover, #refTop:hover, #refIngresso:hover, #input_group:hover {
  transition: .2s;
  color: #c30000;
}
#input_group {
  text-align: center;
  margin-top: 20px; /* Ajuste conforme necessário */
}

.router {
  text-decoration: none;
}

button {
  display: inline-block;
  border: none;
  padding: 10px 20px;
  letter-spacing: 2px;
  font-size: 28px;
  font-weight: bold;
  text-align: center;
  text-decoration: none;
  cursor: pointer;
  border-radius: 5px;
  transition: background-color 0.3s ease;
  width: 100%;
}

button:hover {
  background-color: #004b92; 
  color: #fff;
}

/* Desktop (1024px) */
@media only screen and (min-width: 769px) and (max-width: 1024px) {
  #footer_content {
    grid-template-columns: repeat(3, 1fr);
    padding: 2rem;
  }

  #footer_contacts img {
    width: 150px;
    height: 150px;
  }

  .footer-list {
    text-align: center;
  }

  iframe {
    width: 100%;
    height: 200px;
  }
}

/* Tablet (768px) */
@media only screen and (min-width: 426px) and (max-width: 768px) {
  #footer_content {
    grid-template-columns: repeat(2, 1fr);
    padding: 2rem;
  }

  #footer_social_media {
    margin-bottom: 1.5rem;
  }

  #footer_contacts img {
    width: 150px;
    height: 150px;
  }

  .footer-list {
    margin-top: 1.5rem;
  }

  iframe {
    width: 100%;
    height: 200px;
  }

  #footer_subscribe {
    margin-top: 1.5rem;
    margin-left: 35px;
  }
}


/* Mobile (425px) */
@media only screen and (max-width: 425px) {
  #footer_content {
    grid-template-columns: 1fr;
    padding: 2rem;
  }

  #footer_contacts {
    text-align: center;
  }

  #footer_contacts img {
    width: 120px;
    height: 120px;
  }

  #footer_social_media {
    justify-content: center;
  }

  .footer-list {
    text-align: center;
    margin-top: 1.5rem;
  }

  iframe {
    width: 100%;
    height: 200px;
  }

  #footer-subscribe > h1 {
    text-align: center;
  }
}
</style>
<script setup>

</script>
