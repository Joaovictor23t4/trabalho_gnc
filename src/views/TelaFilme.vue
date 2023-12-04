<template>
  <div>
    <Header />
    {{ indexFilme }}
    <section id="banner">
        <img src="" alt="" id="img-banner">
    </section>
  </div>
</template>
<style scoped>
.row {
  --bs-gutter-x: none !important;
}
.image {
  background-color: black;
}
.col-esquerda {
  padding: 80px 20px 80px 15px !important;
}
.col-meio {
  padding: 10px !important;
}
.col-direita {
  padding: 20px !important;
}
main {
  background-color: white !important;
}
  
#banner {
  width: 100%;
}

#img-banner {
  width: 100%;
  height: 100%;
}
.meio-meio,
.embaixo-meio,
.topo-meio {
  padding: 20px 0 20px 0;
  font-size: 20px;
  display: flex;
  justify-content: flex-start;
  align-items: flex-start;
}
/* Mobile (425px) */
@media only screen and (max-width: 425px) {
  .col-esquerda {
    padding: 30px 10px !important;
  }

  .imagem {
    width: 100%;
    height: 100%;
  }

  .col-meio {
    padding: 10px !important;
  }
}
</style>

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
