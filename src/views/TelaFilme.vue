<template>
  <div>
    <Header />
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
          </div>
        </section>
    </section>

    <section>
      <Sessoes :title="responseFilme.title" idCinema="851"/>
    </section>
  </div>
</template>

<script setup>
import { ref, onMounted } from 'vue';
import axios from 'axios';
import Header from '../components/Header.vue';
import Sessoes from '../components/Sessoes.vue'
import { useMovieStore } from '../stores/movie';

const movieStore = useMovieStore()
const indexFilme = ref(movieStore.indexFilme);
const responseFilme = ref([])

async function consultarApi() {
  // console.log(indexFilme.value)

  let filmeGet = await axios.get('https://api-content.ingresso.com/v0/templates/nowplaying/16?partnership=joaovictorpr');

  responseFilme.value = filmeGet.data[indexFilme.value];

  // console.log(filmeGet.data[1].images[1].url);

  console.log(responseFilme.value);
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
  width: 100%;
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
    width: 20px;
    height: 20px;
}

#sinopse {
  width: 70%;
}

#textoSinopse {
  width: 100%;
  color: #FDFDFD;
}
</style>