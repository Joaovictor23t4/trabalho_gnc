<template>
  <Header @parametroShopping="optionSelectShopping"/>

  <div>
    <h2>Filmes em Cartaz</h2>
    <div v-for="(dados, dataIndex) in valorApi" :key="dataIndex">
        <h2>{{dados.dateFormatted}} - {{dados.dayOfWeek}}</h2>
        <div v-for="(filme, filmeIndex) in dados.movies" :key="filmeIndex">
          <p><strong>Titulo</strong>: {{filme.title}}</p>
          <div>
            <p v-if="filme.contentRating === 'livre'">Classificação indicativa: {{filme.contentRating}} <img src="/src/assets/images/cr-livre.png" alt=""></p>
            <p v-else-if="filme.contentRating === '10 anos'">Classificação indicativa: {{filme.contentRating}} <img src="/src/assets/images/cr-dez.png" alt=""></p>
            <p v-else-if="filme.contentRating === '12 anos'">Classificação indicativa: {{filme.contentRating}} <img src="/src/assets/images/cr-doze.png" alt=""></p>
            <p v-else-if="filme.contentRating === '14 anos'">Classificação indicativa: {{filme.contentRating}} <img src="/src/assets/images/cr-catorze.png" alt=""></p>
            <p v-else-if="filme.contentRating === '16 anos'">Classificação indicativa: {{filme.contentRating}} <img src="/src/assets/images/cr-dezesseis.png" alt=""></p>
            <p v-else>Classificação indicativa: {{filme.contentRating}} <img src="/src/assets/images/cr-dezoito.png" alt=""></p>
          </div>
          <p>Duração: {{filme.duration}} minutos</p>
          <p>Gêneros: {{filme.genres.join(", ")}}</p>
          <p>Produtora: {{filme.distributor}}</p>
          <img :src="filme.images[0].url" alt="">
        </div>
    </div>
  </div> 
</template>

<script setup>
import { ref, onMounted, watch } from 'vue';
import axios from 'axios';
import Header from "../components/Header.vue";

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
img {
  width: 100px;
}
</style>