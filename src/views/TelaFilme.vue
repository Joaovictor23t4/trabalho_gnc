<template>
  <Header @parametroShopping="optionSelectShopping" />
  <main>
    <div class="row">
      <div class="col col-esquerda">
        <div class="image">
          <img src="../assets/images/gnc-logo.png" alt="Imagem do filme" class="imagem"/>
        </div>
      </div>
      <div class="col col-meio">
        <div class="topo-meio">
          <button @click="changeOptionMovies('sinopse')">Sinopse</button>
          <button @click="changeOptionMovies('sessoes')">Sessões</button>
        </div>
        <div v-if="opcaoFilme === 'sinopse'">
          <h2>Sinopse</h2>
          <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit...</p>
        </div>
        <div v-else>
          <h1>Sessões</h1>
          <div class="row">
            <div class="col">
              <div class="topo-meio">Sala 1</div>
              <div class="meio-meio">14:00 DUB</div>
              <div class="embaixo-meio">16:00 LEG</div>
            </div>
            <div class="col">
              <div class="topo-meio">Sala 2</div>
              <div class="meio-meio">14:00 DUB</div>
              <div class="embaixo-meio">16:00 LEG</div>
            </div>
            <div class="col">
              <div class="topo-meio">Sala 3</div>
              <div class="meio-meio">14:00 DUB</div>
              <div class="embaixo-meio">16:00 LEG</div>
            </div>
            <div class="row">
              <div class="col">
                <div class="topo-meio">Sala 4</div>
                <div class="meio-meio">14:00 LEG</div>
                <div class="embaixo-meio">16:00 DUB</div>
              </div>
              <div class="col">
                <div class="topo-meio">Sala 5</div>
                <div class="meio-meio">14:00 LEG</div>
                <div class="embaixo-meio">16:00 DUB</div>
              </div>
              <div class="col">
                <div class="topo-meio">Sala 6</div>
                <div class="meio-meio">14:00 LEG</div>
                <div class="embaixo-meio">16:00 DUB</div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col col-direita"></div>
    </div>
  </main>
  <Footer />
  <FooterCopy />
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

  .col-direita {
    padding: 20px !important;
  }

  .meio-meio,
  .embaixo-meio,
  .topo-meio {
    padding: 10px 0;
    font-size: 16px;
  }
}

/* Tablet (768px) */
@media only screen and (min-width: 426px) and (max-width: 768px) {
  .col-esquerda {
    padding: 40px 15px !important;
  }

  .col-meio {
    padding: 15px !important;
  }

  .col-direita {
    padding: 25px !important;
  }

  .meio-meio,
  .embaixo-meio,
  .topo-meio {
    padding: 15px 0;
    font-size: 18px;
  }
}

/* Desktop (1024px) */
@media only screen and (min-width: 769px) and (max-width: 1024px) {
  .col-esquerda {
    padding: 60px 20px !important;
  }

  .col-meio {
    padding: 20px !important;
  }

  .col-direita {
    padding: 30px !important;
  }

  .meio-meio,
  .embaixo-meio,
  .topo-meio {
    padding: 20px 0;
    font-size: 20px;
  }
}

</style>
<script setup>
import Header from '../components/Header.vue'
import Footer from '../components/FooterVue.vue'
import FooterCopy from '../components/FooterCopy.vue'
let opcaoFilme = 'sinopse'
let opcaoSessao = 'sessoes'
let changeOptionMovies = (option) => {
  opcaoFilme = option
}
</script>
