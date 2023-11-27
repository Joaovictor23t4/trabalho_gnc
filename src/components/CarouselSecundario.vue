<template>
    <div id="container">
    <div id="periodOption">
        <div id="emCartazPeriod">
            <p>Em Cartaz</p>
        </div>
        <div id="emBrevePeriod">
            <p>Em Breve</p>
        </div>
    </div>
  </div>

    <div id="containerCarousel">
        <Carousel v-bind="settings">
            <Slide v-for="(element, elementIndex) in movies" :key="elementIndex">
                <div class="container-slider">
                    <div class="containerImages">
                        <img :src="element.images[0].url" alt="" class="imagesFilms">
                    </div>
                    
                    <div class="containerNameFilms">
                        <p>{{ element.title }}</p>
                    </div>
                </div>
            </Slide>
            <!-- <template #addons>
            <Pagination />
            </template> -->
        </Carousel>
    </div>
</template>

<script setup>
import { ref, onMounted } from 'vue';
import axios from 'axios';
import 'vue3-carousel/dist/carousel.css'
import { Carousel, Slide, Pagination, Navigation } from 'vue3-carousel'

const settings = ref({
    itemsToShow: 3,
    snapAlign: 'center'
})

const option = ref('cartaz');
const movies = ref([]);

onMounted(async () => {
    let listaFilmes = await axios.get('https://api-content.ingresso.com/v0/templates/nowplaying/16?partnership=joaovictorpr');

    movies.value = listaFilmes.data;

    console.log(movies.value);
});
</script>

<style scoped>
#container {
    display: grid;
    grid-template-columns: 1fr 4.6fr 1fr;
    margin-bottom: 20px;
}
#periodOption {
    display: flex;
    grid-column: 2;
    /* justify-content: center; */
    margin-top: 50px;
    /* margin-left: 350px; */
    gap: 20px;
}

/* #periodOption::after {
    content: "";
    display: block;
    width: 70%;
    height: 1px;
    margin-top: 20px;
    border-bottom: 1px solid red;
    position: absolute;
} */

#emCartazPeriod, #emBrevePeriod {
    font-weight: bold;
    font-size: 26px;
    color: #FDFDFD;
}
#containerCarousel {
    display: flex;
    justify-content: center;
}

.containerImages {
    width: 192px;
    height: 282px;
}

.imagesFilms {
    width: 100%;
    height: 100%;
    border-radius: 10px;
}


li {
    width: 252px!important;
}

.container-slider {
    display: flex;
    flex-direction: column;
}
</style>