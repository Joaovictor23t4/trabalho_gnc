<template>
  <div>
    <Header />
    {{ indexFilme }}
    <section id="banner">
        <img src="" alt="" id="img-banner">
    </section>
  </div>
</template>

<script setup>
import { ref, onMounted } from 'vue';
import Header from '../components/Header.vue';
import { useMovieStore } from '../stores/movie';

const movieStore = useMovieStore()

const idFilme = ref(0);
const indexFilme = ref(movieStore.indexFilme)

onMounted(() => {
  idFilme.value = $route.params.id
})
</script>

<style scoped>
#banner {
  width: 100%;
}

#img-banner {
  width: 100%;
  height: 100%;
}
</style>