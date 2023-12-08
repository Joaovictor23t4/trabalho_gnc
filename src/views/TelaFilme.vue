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

=======
<style scoped>
.row {
  --bs-gutter-x: none !important;
}
.image {
  background-color: black;
}
.col-esquerda {
  padding: 80px 20px 80px 15px !important;
}
.col-meio {
  padding: 10px !important;
}
.col-direita {
  padding: 20px !important;
}
main {
  background-color: white !important;
}
  
#banner {
  width: 100%;
}

#img-banner {
  width: 100%;
  height: 100%;
}
.meio-meio,
.embaixo-meio,
.topo-meio {
  padding: 20px 0 20px 0;
  font-size: 20px;
  display: flex;
  justify-content: flex-start;
  align-items: flex-start;
}
/* Mobile (425px) */
@media only screen and (max-width: 425px) {
  .col-esquerda {
    padding: 30px 10px !important;
  }

  .imagem {
    width: 100%;
    height: 100%;
  }

  .col-meio {
    padding: 10px !important;
  }
}
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
</style>
