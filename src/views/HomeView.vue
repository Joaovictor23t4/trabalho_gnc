<template>
  <Header @parametroShopping="optionSelectShopping"/>

  <CarouselHome />
</template>

<script setup>
import { ref, onMounted, watch } from 'vue';
import axios from 'axios';
import Header from '../components/Header.vue';
import CarouselHome from '../components/CarouselHome.vue'

const valorShopping = ref('mueller');

function optionSelectShopping(value) {
  valorShopping.value = value;
  // console.log(valorShopping.value);
}

const valorApi = ref([]);


onMounted( async () => {
    let response = await axios.get(`https://api-content.ingresso.com/v0/sessions/city/16/theater/${valorShopping.value === "mueller" ? "146" : "851"}?partnership=joaovictorpr`);

    valorApi.value = response.data;

    console.log(valorApi.value);
});

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