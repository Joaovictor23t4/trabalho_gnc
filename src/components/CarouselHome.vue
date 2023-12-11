<!-- eslint-disable no-unused-vars -->
<template>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <Carousel ref="carouselElement"
    v-bind="settings"
    :transition="1000"
    class="image"
    @mouseover="showElement = true"
    @mouseleave="showElement = false"
  >
    <Slide v-for="(item, itemIndex) in destaquesJson" :key="itemIndex" class="marginSlide">
        <div class="widthLi">
          <span v-if="item.event.images.length === 2">
            <img :src="item.event.images[1].url" alt="" class="card-img" />
          </span>
          <span v-else>
            <img src="/src/assets/images/banner-substituto-filme.jpg" alt="" class="card-img" />
          </span>
          <div id="firstMovie" v-if="itemIndex === 0">
            <p id="firstDestaque">DESTAQUES</p>
            <p id="firstName">{{ truncateTitle(item.event.title) }}</p>
            <div class="firstGenresDuration">
              <span v-for="(genres, genresIndex) in item.event.genres" :key="genresIndex">
                {{ genres }} -
              </span>
              <span>{{ item.event.duration }} minutos</span>
            </div>
            <div id="firstVejaMais">
              <router-link to="tela-filme" @click="movieStore.indexFilme = null; movieStore.optionFilme = 'cartaz'; movieStore.titleFilme = item.event.title"><i class="fa fa-film"></i>Veja mais</router-link>
            </div>
          </div>

          <div class="otherMovies" v-else>
            <p class="msgDestaque">DESTAQUES</p>
            <p class="nameFilm">{{ truncateTitle(item.event.title) }}</p>
            <div class="genresDuration">
              <span v-for="(genres, genresIndex) in item.event.genres" :key="genresIndex">
                {{ genres }} -
              </span>
              <span>{{ item.event.duration }} minutos</span>
            </div>
            <div class="vejaMais">
              <router-link to="tela-filme" @click="movieStore.indexFilme = null; movieStore.optionFilme = 'cartaz'; movieStore.titleFilme = item.event.title"><i class="fa fa-film"></i>Veja mais</router-link>
            </div>
          </div>
        </div>
    </Slide>

    <template #addons>
      <div v-show="showElement && widthBody >= 1024">
        <Navigation class="hidden-element" :class="{ show: showElement }" />
      </div>
      
      <div v-show="widthBody <= 768">
        <Navigation />
      </div>
      <Pagination />
    </template>
  </Carousel>
</template>

<script setup>
import { ref, onMounted, watch } from 'vue'
import axios from 'axios'
import 'vue3-carousel/dist/carousel.css'
import { Carousel, Slide, Pagination, Navigation } from 'vue3-carousel'
import { useMovieStore } from '../stores/movie'

const movieStore = useMovieStore();

let linkCdn = document.createElement("link");
linkCdn.setAttribute('rel', 'stylesheet');
linkCdn.setAttribute('href', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==');
linkCdn.setAttribute('crossorigin', 'anonymous');
linkCdn.setAttribute('referrerpolicy', 'no-referrer');

document.head.appendChild(linkCdn);

const destaquesJson = ref([]);
const widthBody = ref(document.querySelector('body').offsetWidth);
console.log(widthBody.value);

onMounted(async () => {
  let response = await axios.get(
    `https://api-content.ingresso.com/v0/templates/highlights/16?partnership=joaovictorpr`
  )

  destaquesJson.value = response.data;


  console.log(destaquesJson.value);
})

const settings = ref({
  itemsToShow: (widthBody.value <= 768) ? 0.9 : 1.5,
  snapAlign: 'center'
})

function truncateTitle(title) {
  const maxLength = 23;
    if (title.length > maxLength) {
      return `${title.substring(0, maxLength)}...`;
    }
    return title;
};

// eslint-disable-next-line no-unused-vars
const hover = ref({ showElement: false })
</script>

<style scoped>
.image {
  width: 100%;
}

.marginSlide {
  margin: 10px 10px 0 10px;
}
.card-img {
  width: 100%;
  border-radius: 1.25rem;
}

.hidden-element {
  opacity: 0;
  transition: 2s ease-in-out;
}

.hidden-element.show {
  opacity: 1;
}

.firstMovie {
  z-index: 2;
}

#firstDestaque, .msgDestaque {
  position: absolute;
  top: 80px;
  left: 50px;
  font-size: 14px;
  font-weight: 600;
  color: #585b79;
}

#firstName {
  position: absolute;
  top: 110px;
  left: 70px;
  font-size: 40px;
  color: #FDFDFD;
}

.nameFilm {
  position: absolute;
  top: 110px;
  left: 60px;
  text-align: left;
  font-size: 40px;
  color: #FDFDFD;
  word-break: inherit;
}

.firstGenresDuration {
  position: absolute;
  top: 170px;
  left: 70px;
  color: #6e728b;
  font-weight: 600;
}

.firstGenres > span {
  margin: 0 0 0 5px;
}

.genresDuration {
  position: absolute;
  top: 170px;
  left: 65px;
  color: #6e728b;
  font-weight: 600;
}

#firstVejaMais {
  position: absolute;
  top: 220px;
  left: 70px;
  font-size: 20px;
}

.vejaMais {
  position: absolute;
  top: 220px;
  left: 63px;
  font-size: 20px;
}

#firstVejaMais > a > i, .vejaMais > a > i  {
  margin-right: 8px;
}

.widthLi {
  width: 100%;
}

#span-alternativo {
  display: inline-block;
  width: 100%;
  height: 399px;
}

#span-alternativo > img {
  width: 100%;
  height: 100%;
}

@media screen and (max-width: 1024px) {
  #firstVejaMais, .vejaMais {
    top: 165px;
  }

  .firstGenresDuration, .genresDuration {
    top: 120px;
  }

  #firstName, .nameFilm {
    top: 60px;
  }

  #firstDestaque, .msgDestaque {
    top: 35px;
  }
}

@media screen and (max-width: 768px) {
  .card-img {
    border-radius: 0;
  }
}

@media screen and (max-width: 425px) {
  .marginSlide {
    margin: 0;
  }
  #firstVejaMais, .vejaMais {
    top: 110px;
    left: 45px;
  }

  .firstGenresDuration, .genresDuration {
    top: 80px;
    left: 45px;
  }

  #firstName, .nameFilm {
    top: 40px;
    left: 45px;
    font-size: 25px;
  }

  #firstDestaque {
    top: 15px;
    left: 25px;
  }

  .vejaMais {
    top: 110px;
    left: 55px;
  }

  .genresDuration {
    top: 80px;
    left: 55px;
  }

  .msgDestaque {
    top: 15px;
    left: 35px;
  }

  .nameFilm {
    top: 40px;
    left: 55px;
    font-size: 25px;
  }
}

@media screen and (max-width: 375px) {
  #firstVejaMais, .vejaMais {
    font-size: 18px;
  }
}

@media screen and (max-width: 320px) {
  .marginSlide {
    margin: 0;
  }
  #firstVejaMais, .vejaMais {
    top: 90px;
    left: 50px;
  }

  .firstGenresDuration, .genresDuration {
    top: 65px;
    left: 50px;
    font-size: 14px;
  }

  #firstName, .nameFilm {
    top: 35px;
    left: 50px;
    font-size: 20px;
  }

  #firstDestaque {
    top: 15px;
    left: 25px;
  }

  .vejaMais {
    top: 85px;
    left: 55px;
  }

  .genresDuration {
    top: 60px;
    left: 55px;
  }

  .msgDestaque {
    top: 10px;
    left: 35px;
  }

  .nameFilm {
    top: 30px;
    left: 55px;
    font-size: 20px;
  }
}
</style>