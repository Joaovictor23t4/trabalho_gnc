<template>
  <main>
    <Header @parametroShopping="optionSelectShopping"/>

    <CarouselHome />

    <ListCard />

    <Footer />

    <FooterCopy />
  </main>
</template>

<script setup>
import { ref, onMounted, watch } from 'vue';
import { useMovieStore } from '../stores/movie';
import axios from 'axios';
import Header from '../components/Header.vue';
import CarouselHome from '../components/CarouselHome.vue';
import ListCard from '../components/ListCard.vue';
import Footer from '../components/FooterVue.vue'
import FooterCopy from '../components/FooterCopy.vue';
const valorShopping = ref('mueller');

function optionSelectShopping(value) {
  valorShopping.value = value;
  storeMovie.cine = value;
  // console.log(valorShopping.value);
}

const storeMovie = useMovieStore();

const valorApi = ref([]);


onMounted( async () => {
    let response = await axios.get(`https://api-content.ingresso.com/v0/sessions/city/16/theater/146?partnership=joaovictorpr`);

    valorApi.value = response.data;
    // console.log(valorApi.value);
});

// eslint-disable-next-line no-unused-vars
watch(valorShopping, async (newValue, oldValue) => {
  let response;

  if (newValue === "mueller") {
    response = await axios.get(`https://api-content.ingresso.com/v0/sessions/city/16/theater/146?partnership=joaovictorpr`);

    valorApi.value = response.data;
  } else {
    response = await axios.get(`https://api-content.ingresso.com/v0/sessions/city/16/theater/851?partnership=joaovictorpr`);

    valorApi.value = response.data;
  }
})
</script>

<style scoped>
</style>