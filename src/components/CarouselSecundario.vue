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
<!-- <Carousel v-bind="settings">
        <Slide v-for="slide in 10" :key="slide">
        <div class="carousel__item">{{ slide }}</div>
        </Slide>

        <template #addons>
        <Navigation />
        </template>
    </Carousel> -->
  </div>
</template>

<script setup>
import { ref } from 'vue';
import 'vue3-carousel/dist/carousel.css'
import { Carousel, Slide, Pagination, Navigation } from 'vue3-carousel'

const settings = ref({
    itemsToShow: 5,
    snapAlign: 'center'
})

const movies = ref([]);
</script>

<style scoped>
#container {
    display: grid;
    grid-template-columns: 1.2fr 4.5fr 1fr;
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
}
</style>