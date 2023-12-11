<template>
  <div>
    <Header @parametroShopping="changeId"/>
    <section id="banner">
        <img v-if="responseFilme.images.length === 2" :src="responseFilme.images[1].url" alt="" class="img-banner">
        <img v-else src="/src/assets/images/banner-substituto-filme.jpg" alt="" class="img-banner">

        <section id="infoBanner">
          <div id="imgCapa">
            <img v-if="responseFilme.images[0]" :src="responseFilme.images[0].url" alt="">
            <img v-else src="/src/assets/images/capa-substituta-filme.webp" alt="">
          </div>

          <div id="flexInfos">
            <h1 id="tituloFilme">{{responseFilme.title}}</h1>

            <div id="generos">
              <span v-for="(genero, generoIndex) in responseFilme.genres" :key="generoIndex">
                {{ genero }} |
              </span>

              <img v-if="responseFilme.contentRating === 'Livre'" src="/src/assets/images/cr-livre.png" alt="" class="crCard">
              <img v-else-if="responseFilme.contentRating === '10 anos'" src="/src/assets/images/cr-dez.png" alt="" class="crCard">
              <img v-else-if="responseFilme.contentRating === '12 anos'" src="/src/assets/images/cr-doze.png" alt="" class="crCard">
              <img v-else-if="responseFilme.contentRating === '14 anos'" src="/src/assets/images/cr-catorze.png" alt="" class="crCard">
              <img v-else-if="responseFilme.contentRating === '16 anos'" src="/src/assets/images/cr-dezesseis.png" alt="" class="crCard">
              <img v-else-if="responseFilme.contentRating === '18 anos'" src="/src/assets/images/cr-dezoito.png" alt="" class="crCard">
              <span v-else class="containerCrSub">
                  <div class="crSubstituta">
                      <div class="crSubFlex">?</div>
                  </div>
              </span>
            </div>

            <div id="sinopse">
              <p id="textoSinopse">{{responseFilme.synopsis}}</p>
            </div>

            <div id="cinema">
              <p id="textoCinema">Você escolheu ver o filme no <span>Shopping {{ correctionName }}</span></p>
            </div>
          </div>
        </section>
    </section>

    <OptionFilme :title="responseFilme.title" :idCinema="nameCine" :aboutFilmeInfo="responseFilme"/>

    <FooterVue />
    <FooterCopy />
  </div>
</template>
<style scoped>
#banner {
  width: 100%;
  height: 370px;
  margin-top: 20px;
}

.img-banner {
  width: 100%;
  height: 100%;
  opacity: .4;
}

#infoBanner {
  display: flex;
  gap: 30px;
  position: absolute;
  top: 150px;
  left: 150px;
}

#imgCapa {
  width: 282px;
  height: 392px;
}

#imgCapa > img {
  height: 100%;
}

#flexInfos {
  display: flex;
  flex-direction: column;
  gap: 20px;
}

#tituloFilme {
  color: #FDFDFD;
  font-size: 2.2em;
}

#generos {
  display: flex;
  align-items: center;
  gap: 10px;
}

#generos > span {
  color: #8b8b8b;
  font-size: 1.2em;
}

.crCard {
    position: relative;
    top: 2px;
    width: 18px;
    height: 18px;
}

#sinopse {
  width: 70%;
}

#textoSinopse {
  width: 100%;
  color: #FDFDFD;
}

#textoCinema {
  color: #FDFDFD;
}

#textoCinema > span {
  text-decoration: underline;
}

.copyFooter {
  height: 100px;
  min-height: auto;
}
/* Móvel (até 425px) */
@media only screen and (max-width: 425px) {
  #banner {
    height: 250px;
    margin-top: 10px;
  }

  .img-banner {
    opacity: 0.6;
  }

  #infoBanner {
    top: 120px;
    left: 20px;
  }

  #imgCapa {
    width: 180px;
    height: 250px;
  }

  #flexInfos {
    gap: 10px;
  }

  #tituloFilme {
    font-size: 1.5em;
  }

  #generos > span {
    font-size: 1em;
  }

  .crCard {
    width: 14px;
    height: 14px;
  }

  #sinopse {
    width: 100%;
  }

  #textoSinopse {
    font-size: 0.9em;
  }

  #textoCinema {
    font-size: 0.9em;
  }

  #textoCinema > span {
    text-decoration: underline;
    font-size: 0.9em;
  }
}

/* Tablet (768px) */
@media only screen and (min-width: 426px) and (max-width: 768px) {
  #banner {
    height: 300px;
    margin-top: 15px;
  }

  .img-banner {
    opacity: 0.5;
  }

  #infoBanner {
    top: 140px;
    left: 50px;
  }

  #imgCapa {
    width: 220px;
    height: 300px;
  }

  #tituloFilme {
    font-size: 1.8em;
  }

  #generos > span {
    font-size: 1.2em;
  }

  .crCard {
    width: 16px;
    height: 16px;
  }

  #sinopse {
    width: 80%;
  }

  #textoSinopse {
    font-size: 1em;
  }

  #textoCinema {
    font-size: 1em;
  }

  #textoCinema > span {
    text-decoration: underline;
    font-size: 1em;
  }
}

/* Desktop (até 1024px) */
@media only screen and (min-width: 769px) and (max-width: 1024px) {
  #banner {
    height: 350px;
    margin-top: 20px;
  }
  .img-banner {
    opacity: 0.4;
  }
  #infoBanner {
    top: 160px;
    left: 70px;
  }
  #imgCapa {
    width: 250px;
    height: 350px;
  }
  #tituloFilme {
    font-size: 2em;
  }
  #generos > span {
    font-size: 1.5em;
  }
  .crCard {
    width: 20px;
    height: 20px;
  }
  #sinopse {
    width: 90%;
  }
  #textoSinopse {
    font-size: 1.2em;
  }
  #textoCinema {
    font-size: 1.2em;
  }
  #textoCinema > span {
    text-decoration: underline;
    font-size: 1.2em;
  }
}
</style>
<script setup>
import { ref, onMounted } from 'vue';
import axios from 'axios';
import Header from '../components/Header.vue';
import OptionFilme from '../components/optionFilme.vue'
import FooterVue from '../components/FooterVue.vue';
import FooterCopy from '../components/FooterCopy.vue';
import { useMovieStore } from '../stores/movie';
import FooterVueVue from '../components/FooterVue.vue';
import FooterCopyVue from '../components/FooterCopy.vue';

const movieStore = useMovieStore()
const indexFilme = ref(movieStore.indexFilme);
const optionData = ref(movieStore.optionFilme);
const titleFilme = ref(movieStore.titleFilme);
const responseFilme = ref([]);
const nameCine = ref(movieStore.cine)
const correctionName = (nameCine.value === 'mueller') ? "Mueller" : "Garten";

async function consultarApi() {
  // console.log(indexFilme.value)

  if (optionData.value === "cartaz") {
    let filmeGet = await axios.get('https://api-content.ingresso.com/v0/templates/nowplaying/16?partnership=joaovictorpr');

    if (indexFilme.value === null) {
      for (let c = 0; c < filmeGet.data.length; c++) {
        if (filmeGet.data[c].title === titleFilme.value) {
          responseFilme.value = filmeGet.data[c];
        }
      }
    } else {
      responseFilme.value = filmeGet.data[indexFilme.value]
    }
    
    // console.log(filmeGet.data[1].images[1].url);

    // console.log(responseFilme.value);
  } else {
    let filmeGet = await axios.get('https://api-content.ingresso.com/v0/templates/soon/16?partnership=joaovictorpr');

    responseFilme.value = filmeGet.data[indexFilme.value];

    // console.log(responseFilme.value);
  }
}

function changeId(value) {
  nameCine.value = value;
  // console.log(nameCine.value);
}

consultarApi();
</script>