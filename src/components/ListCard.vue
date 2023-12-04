<template>
    <div id="containerGrid">
        <div id="containerOptions">
        <div id="periodOption">
            <div id="emCartazPeriod">
                <button @click="changeOptionMovies('cartaz'); changeColorOption('pCartaz')" id="buttonCartaz">
                    <p ref="paragraphCartaz">Em Cartaz</p>
                </button>
            </div>
            <div id="emBrevePeriod">
                <button @click="changeOptionMovies('breve'); changeColorOption('pBreve')" id="buttonbreve">
                    <p ref="paragraphBreve">Em Breve</p>
                </button>
            </div>
        </div>
        <div id="containerList">
            <div v-for="(div, divIndex) in movies" :key="divIndex" class="divCard">
                <router-link @click="movieStore.indexFilme = divIndex" to='/tela-filme' v-if="option.value === 'cartaz'">
                    <span>
                        <img :src="div.images[0].url" alt="" class="imageCard">
                    </span>
                </router-link>

                <router-link @click="movieStore.indexFilme = divIndex" to='/tela-filme' v-else>
                    <span>
                        <img v-if="div.images.length > 0" :src="div.images[0].url" alt="" class="imageCard">
                        <img v-else src="/src/assets/images/capa-substituta-filme.webp" alt="" class="imageCard">
                    </span>
                </router-link>

                <img v-if="div.contentRating === 'Livre'" src="/src/assets/images/cr-livre.png" alt="" class="crCard">
                <img v-else-if="div.contentRating === '10 anos'" src="/src/assets/images/cr-dez.png" alt="" class="crCard">
                <img v-else-if="div.contentRating === '12 anos'" src="/src/assets/images/cr-doze.png" alt="" class="crCard">
                <img v-else-if="div.contentRating === '14 anos'" src="/src/assets/images/cr-catorze.png" alt="" class="crCard">
                <img v-else-if="div.contentRating === '16 anos'" src="/src/assets/images/cr-dezesseis.png" alt="" class="crCard">
                <img v-else-if="div.contentRating === '18 anos'" src="/src/assets/images/cr-dezoito.png" alt="" class="crCard">
                <span v-else class="containerCrSub">
                    <div class="crSubstituta">
                        <div class="crSubFlex">?</div>
                    </div>
                </span>

                <router-link :to="{name: 'tela-filme', params: { id: divIndex } }"> 
                    <p class="titleCard">{{ div.title }}</p> 
                </router-link>
            </div>
        </div>
        </div>
    </div>
</template>

<script setup>
import { ref, onMounted, watch } from 'vue';
import axios from 'axios';
import { useMovieStore } from '../stores/movie'

const movieStore = useMovieStore();
const option = ref('cartaz');
const movies = ref([]);
const paragraphCartaz = ref(null);
const paragraphBreve = ref(null);

onMounted(async () => {
    let listaFilmes = await axios.get('https://api-content.ingresso.com/v0/templates/nowplaying/16?partnership=joaovictorpr');

    movies.value = listaFilmes.data;

    paragraphCartaz.value.classList.add("chosenPeriod");
    paragraphBreve.value.classList.add("reservePeriod");

    console.log(movies.value);
})

function changeOptionMovies(chosenOption) {
    option.value = chosenOption;
}

watch(option, async (newValue, oldValue) => {
    let response;

    if (newValue === "breve") {
        response = await axios.get('https://api-content.ingresso.com/v0/templates/soon/16?partnership=joaovictorpr');
        movies.value = response.data;

        console.log(movies.value);
    } else {
        response = await axios.get('https://api-content.ingresso.com/v0/templates/nowplaying/16?partnership=joaovictorpr');
        movies.value = response.data;

        console.log(movies.value);
    }
})

function changeColorOption(element) {
    if (element === 'pCartaz') {
        paragraphCartaz.value.classList.remove('reservePeriod');
        paragraphBreve.value.classList.remove('chosenPeriod');
        paragraphCartaz.value.classList.add('chosenPeriod');
        paragraphBreve.value.classList.add('reservePeriod');
    } else if (element === 'pBreve') {
        paragraphBreve.value.classList.remove('reservePeriod');
        paragraphCartaz.value.classList.remove('chosenPeriod');
        paragraphBreve.value.classList.add('chosenPeriod');
        paragraphCartaz.value.classList.add('reservePeriod');
    }
}
</script>

<style scoped>
a {
    text-decoration: none;
}

#containerGrid {
    display: grid;
    grid-template-columns: 10% 90%;
}
#containerOptions {
    display: flex;
    flex-direction: column;
    grid-column: 2;
}
#periodOption {
    display: flex;
    margin-top: 50px;
    margin-bottom: 15px;
    gap: 20px;
    position: relative;
}

#emCartazPeriod > button , #emBrevePeriod > button {
    border: none;
    background: transparent;
    cursor: pointer;
    font-weight: bold;
    font-size: 26px;
    color: #FDFDFD;
}

#containerList {
    display: flex;
    flex-wrap: wrap;
    gap: 20px;
}

.divCard {
    display: flex;
    flex-direction: column;
    align-items: center;
    width: 252px;
    height: 342px;
    margin-bottom: 80px;
}

.imageCard {
    width: 252px;
    height: 342px;
    border-radius: .6rem;
}

.crCard {
    position: relative;
    bottom: 335px;
    right: 100px;
    width: 25px;
    height: 25px;
}

.containerCrSub {
    position: relative;
    bottom: 335px;
    right: 100px;
}

.crSubstituta {
    display: flex;
    justify-content: center;
    align-items: center;
    background-color: #a8a7a7;
    width: 25px;
    height: 25px;
}

.titleCard {
    color: #FDFDFD;
    font-weight: 600;
    font-size: 17px;
    position: relative;
    bottom: 10px;
}

.chosenPeriod {
    color: #028657;
    border-bottom: 3px solid #028657;
}

.reservePeriod {
    color: #004686;
}

@media screen and (max-width: 425px) {
  #emCartazPeriod > button,
  #emBrevePeriod > button {
    font-size: 16px; /* Ajuste conforme necessário */
  }
  #periodOption {
    display: flex;
    justify-content: center;
  }
  .divCard {
    width: 100%; /* Ocupa toda a largura */
  }
}
@media screen and (max-width: 768px) {
  #containerOptions {
    grid-column: 1;
  }
  .titleCard {
    font-size: 14px;
    flex-wrap: wrap;
  }
  #periodOption {
    margin-top: 20px;
    flex-direction: row;
    display: flex;
    justify-content: center;
  }
  #emCartazPeriod > button,
  #emBrevePeriod > button {
    font-size: 20px;
  }
  #containerList {
    justify-content: center;
    margin-bottom: 30px;
  }
  .divCard {
    margin-top: 20px;
    margin-bottom: 20px;
    display: flex;
    justify-content: center;
    align-items: center;
  }
}
@media screen and (max-width: 1024px) {
  #containerGrid {
    grid-template-columns: 1fr;
  }
  #containerList {
    justify-content: center;
    display: flex;
  }
  #periodOption {
    margin-top: 20px;
    flex-direction: row;
    display: flex;
    justify-content: center;
  }
}
</style>