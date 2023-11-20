<template>
<div id="carouselExampleIndicators" class="carousel slide">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
    <div v-for="(item, itemIndex) in destaquesJson" :key="itemIndex">
        <div v-for="(filme, filmeIndex) in item.event" :key="filmeIndex">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img :src="filme.images[1].url" class="d-block w-100" alt="...">
                </div>
              </div>
        </div>
    </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
</template>

<script setup>
import { ref, onMounted, watch } from 'vue'
import axios from 'axios'

const destaquesJson = ref([])

onMounted(async () => {
  let response = await axios.get(
    `https://api-content.ingresso.com/v0/templates/highlights/16?partnership=joaovictorpr`
  )

  destaquesJson.value = response.data

  console.log(destaquesJson.value)
})
</script>

<style scoped>
</style>
