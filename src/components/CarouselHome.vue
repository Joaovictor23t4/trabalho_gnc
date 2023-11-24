<template>
<Carousel v-bind="settings" :transition="1000" class="image">
    <Slide v-for="slide in 10" :key="slide">
      {{ slide }}
    </Slide>

    <template #addons>
      <Navigation />
      <Pagination />
    </template>
</Carousel>
</template>

<script setup>
import { ref, onMounted, watch } from 'vue'
import axios from 'axios'
import 'vue3-carousel/dist/carousel.css'
import { Carousel, Slide, Pagination, Navigation } from 'vue3-carousel'

const destaquesJson = ref([])

onMounted(async () => {
  let response = await axios.get(
    `https://api-content.ingresso.com/v0/templates/highlights/16?partnership=joaovictorpr`
  )

  destaquesJson.value = response.data

  console.log(destaquesJson.value)
})

const settings = ref({
  itemsToShow: 1,
  snapAlign: 'center',
});
</script>

<style scoped>
  .image {
    margin: 0 auto;
    width: 60%;
    background-color: green;
  }
</style>
