<template>
    <div id="containerGrid">
        <div id="containerOptions">
        <div id="periodOption">
            <div id="emCartazPeriod">
                <button @click="changeOptionMovies('cartaz')" id="buttonCartaz">
                    <p>Em Cartaz</p>
                </button>
            </div>
            <div id="emBrevePeriod">
                <button @click="changeOptionMovies('breve')" id="buttonbreve">
                    <p>Em Breve</p>
                </button>
            </div>
        </div>
        <div id="containerList">
            <div v-for="(div, divIndex) in movies" :key="divIndex" class="divCard">
                <span v-if="option.value === 'cartaz'">
                    <img :src="div.images[0].url" alt="" class="imageCard">
                </span>

                <span v-else>
                    <img v-if="div.images.length > 0" :src="div.images[0].url" alt="" class="imageCard">
                    <img v-else src="/src/assets/images/capa-substituta-filme.webp" alt="" class="imageCard">
                </span>

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

                <p class="titleCard">{{ div.title }}</p>
            </div>
        </div>
        </div>
    </div>
</template>

<script setup>
import { ref, onMounted, watch } from 'vue';
import axios from 'axios';

const option = ref('cartaz');
const movies = ref([]);

onMounted(async () => {
    let listaFilmes = await axios.get('https://api-content.ingresso.com/v0/templates/nowplaying/16?partnership=joaovictorpr');

    movies.value = listaFilmes.data;

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
</script>

<style scoped>
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
    height: 400px;
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
</style>