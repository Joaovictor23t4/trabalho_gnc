<template>
  <Header @parametroShopping="optionSelectShopping"/>

  <div class="container-carousel">
        <button class="arrow-left control" aria-label="Previous image" @click="handleCarousel('left')">◀</button>
        <button class="arrow-right control" aria-label="Next Image" @click="handleCarousel('right')">▶</button>
        <div class="noticias-wrapper carrousel">
            <div class="noticias">
                <p><a href="#"><img src="https://ingresso-a.akamaihd.net/prd/img/movie/as-marvels/c40ba3b5-3d94-44bc-b710-fa62254e9dd9.webp" alt="Contratação do fallen" class="item current-item"/></a>FURIA contrata FalleN</p> 
                <p><a href="#"><img src="https://ingresso-a.akamaihd.net/prd/img/movie/as-marvels/c40ba3b5-3d94-44bc-b710-fa62254e9dd9.webp" alt="Especulação da contratação do fallen" class="item"/></a>Há especulações sobre a contratação de FalleN</p>
                <p><a href="#"><img src="https://ingresso-a.akamaihd.net/prd/img/movie/as-marvels/c40ba3b5-3d94-44bc-b710-fa62254e9dd9.webp" alt="Major Rio de Janeiro" class="item"/></a>FURIA ganha da NAVI no Rio de Janeiro</p>
                <p><a href="#"><img src="https://ingresso-a.akamaihd.net/prd/img/movie/as-marvels/c40ba3b5-3d94-44bc-b710-fa62254e9dd9.webp" alt="Saída do saffe" class="item"/></a>Saida de saffe é confirmada pela FURIA</p>
                <p><a href="#"><img src="https://ingresso-a.akamaihd.net/prd/img/movie/as-marvels/c40ba3b5-3d94-44bc-b710-fa62254e9dd9.webp" alt="The Last Dance" class="item"/></a>Imperial anuncia The Last Dance</p>
                <p><a href="#"><img src="https://ingresso-a.akamaihd.net/prd/img/movie/as-marvels/c40ba3b5-3d94-44bc-b710-fa62254e9dd9.webp" alt="Última vaga RMR" class="item"/></a>Imperial conquista última vaga para o Major</p>
                <p><a href="#"><img src="https://ingresso-a.akamaihd.net/prd/img/movie/as-marvels/c40ba3b5-3d94-44bc-b710-fa62254e9dd9.webp" alt="Saída do Fer da Imperial" class="item"/></a>Fer anuncia saida da Imperial</p>
                <p><a href="#"><img src="https://ingresso-a.akamaihd.net/prd/img/movie/as-marvels/c40ba3b5-3d94-44bc-b710-fa62254e9dd9.webp" alt="HEN1 no banco de reservas" class="item"/></a>MIBR anuncia saida de HEN1</p>
                <p><a href="#"><img src="https://ingresso-a.akamaihd.net/prd/img/movie/as-marvels/c40ba3b5-3d94-44bc-b710-fa62254e9dd9.webp" alt="Tuurtle no banco de reservas" class="item"/></a>Tuurtle se despede do MIBR</p>
                <p><a href="#"><img src="https://ingresso-a.akamaihd.net/prd/img/movie/as-marvels/c40ba3b5-3d94-44bc-b710-fa62254e9dd9.webp" alt="SK vence Major em Cologne em 2016" class="item"/></a>Brasil conquista o mundo mais uma vez</p>
                <p><a href="#"><img src="https://ingresso-a.akamaihd.net/prd/img/movie/as-marvels/c40ba3b5-3d94-44bc-b710-fa62254e9dd9.webp" alt="SK vence ESL Pro League Odense 2017" class="item"/></a>SK é campeã da EPL Odense 2017</p>
                <p><a href="#"><img src="https://ingresso-a.akamaihd.net/prd/img/movie/as-marvels/c40ba3b5-3d94-44bc-b710-fa62254e9dd9.webp" alt="Troféu BLAST" class="item"></a>Brasileiros conquistam a Blast e calam a Dinamarca</p>
            </div>
        </div>
    </div>
</template>

<script setup>
import { ref, onMounted, watch } from 'vue';
import axios from 'axios';
import Header from "../components/Header.vue";

const valorShopping = ref('mueller');
const currentItem = ref(0);
const items = ref([]);

function optionSelectShopping(value) {
  valorShopping.value = value;
  // console.log(valorShopping.value);
}

const valorApi = ref([]);


onMounted( async () => {
    let response = await axios.get(`https://api-content.ingresso.com/v0/sessions/city/16/theater/${valorShopping.value === "mueller" ? "146" : "851"}?partnership=joaovictorpr`);

    valorApi.value = response.data;

    console.log(valorApi.value);

    items.value = document.querySelectorAll('.item');
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

const controls = {
  left: () => {
    currentItem.value = (currentItem.value - 1 + items.value.length) % items.value.length;
  },
  right: () => {
    currentItem.value = (currentItem.value + 1) % items.value.length;
  }
};

const handleCarousel = (direction) => {
  controls[direction]();
  items.value.forEach((item, index) => {
    item.classList.remove('current-item');
    if (index === currentItem.value) {
      item.classList.add('current-item');
      item.scrollIntoView({ behavior: 'smooth', block: 'end' });
    }
  });
};
</script>

<style scoped>
.container-carousel {
    position: relative;
    padding: 15px;
    max-width: 100%;
    margin: 0 auto;
    margin-top: 10px;
}

.noticias-wrapper {
    overflow-x: auto;
}

.noticias {
    display: flex;
    flex-wrap: row nowrap;
    gap: 15px;
    cursor: pointer;
}

.noticias > p {
    position: relative;
    font-size: 1.3em;
    font-family: var(--font-titulos-noticias);
    text-align: center;
    font-weight: 700;
    color: var(--tema-escuro-2);
}

.arrow-left,
.arrow-right {
    position: absolute;
    top: 0;
    left: 0;
    right: auto;
    bottom: 0;
    font-size: 20px;
    line-height: 250px;
    width: 40px;
    text-align: center;
    color: #fff;
    cursor: pointer;
    border: none;
    background: linear-gradient(to left, transparent 0%, black 200%);
    opacity: .1;
    transition: all 600ms ease-in-out;
}

.arrow-right {
    left: auto;
    right: 0;
    background: linear-gradient(to right, transparent 0%, black 200%);
}

.arrow-left:hover, .arrow-right:hover {
    opacity: 1;
}

.item {
    width: 800px;
    height: 400px;
    border-radius: 10px;
    flex-shrink: 0;
    opacity: .6;
    transition: all 600ms ease-in-out;
}

.current-item {
    opacity: 1;
}

/* This is from w3schools */
/* 
https://www.w3schools.com/howto/howto_css_hide_scrollbars.asp */
/* Hide scrollbar for Chrome, Safari and Opera */
.noticias-wrapper::-webkit-scrollbar {
    display: none;
}

/* Hide scrollbar for IE, Edge and Firefox */
.noticias-wrapper {
    -ms-overflow-style: none; /* IE and Edge */
    scrollbar-width: none; /* Firefox */
}
</style>