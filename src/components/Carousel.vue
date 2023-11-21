<template>
  <div id="carouselExampleIndicators" class="carousel slide">
    <div class="carousel-indicators">
      <button v-for="(botao, botaoIndex) in destaquesJson" :key="botaoIndex" type="button" data-bs-target="#carouselExampleIndicators" :data-bs-slide-to="botaoIndex" class="active" aria-current="true" :aria-label="'Slide ' + botaoIndex"
      ></button>
    </div>

    <div v-for="(item, itemIndex) in destaquesJson" :key="itemIndex">
      <div v-for="(filme, filmeIndex) in item.event.images" :key="filmeIndex">
        <div v-if="filme.type === 'PosterHorizontal'" class="carousel-inner">
          <div v-if="itemIndex === 0" class="carousel-item active">
            <img :src="filme.url" class="d-block w-100" alt="..." />
          </div>
          <div v-else class="carousel-item">
            <img :src="filme.url" class="d-block w-100" alt="..." />
          </div>
        </div>
      </div>
    </div>
    <button
      class="carousel-control-prev"
      type="button"
      data-bs-target="#carouselExampleIndicators"
      data-bs-slide="prev"
    >
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button
      class="carousel-control-next"
      type="button"
      data-bs-target="#carouselExampleIndicators"
      data-bs-slide="next"
    >
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
