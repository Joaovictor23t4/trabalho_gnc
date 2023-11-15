<template>
  <Header @parametroShopping="optionSelectShopping"/>

  <ul>
    <li v-for="(filme, index) in valorApi" :key="index">{{film[index][index].title}}</li>
  </ul>
</template>

<script setup>
import { ref, onMounted } from 'vue';
import axios from 'axios';
import Header from "../components/Header.vue";

const valorShopping = ref('');

function optionSelectShopping(value) {
  valorShopping.value = value;
  console.log(valorShopping.value);
}

const valorApi = ref([]);


onMounted( async () => {
    let response = await axios.get("https://api-content.ingresso.com/v0/sessions/city/16/theater/851?partnership=joaovictorpr");

    for (let c = 0; c < response.data.length; c++) {
      valorApi.value.push(response.data[c])
    }
    console.log(valorApi.value)
});
</script>