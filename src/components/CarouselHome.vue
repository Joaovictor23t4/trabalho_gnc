<template>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <Carousel
    v-bind="settings"
    :transition="1000"
    class="image"
    @mouseover="showElement = true"
    @mouseleave="showElement = false"
  >
    <Slide v-for="(item, itemIndex) in destaquesJson" :key="itemIndex" class="marginSlide">
        <div>
          <span v-if="item.event.images.length === 2">
            <img :src="item.event.images[1].url" alt="" class="card-img" />
          </span>
          <span v-else>
            <img src="/src/assets/images/capa-substituta-filme.webp" alt="" class="card-img" />
          </span>
          <div id="firstMovie" v-if="itemIndex === 0">
            <p id="firstDestaque">DESTAQUES</p>
            <p id="firstName">{{ item.event.title }}</p>
            <div class="firstGenresDuration">
              <span v-for="(genres, genresIndex) in item.event.genres" :key="genresIndex">
                {{ genres }} -
              </span>
              <span>{{ item.event.duration }} minutos</span>
            </div>
            <div id="firstVejaMais">
              <router-link to="tela-filme"><i class="fa fa-film"></i>Veja mais</router-link>
            </div>
          </div>

          <div class="otherMovies" v-else>
            <p class="msgDestaque">DESTAQUES</p>
            <p class="nameFilm">{{ item.event.title }}</p>
            <div class="genresDuration">
              <span v-for="(genres, genresIndex) in item.event.genres" :key="genresIndex">
                {{ genres }} -
              </span>
              <span>{{ item.event.duration }} minutos</span>
            </div>
            <div class="vejaMais">
              <router-link to="tela-filme"><i class="fa fa-film"></i>Veja mais</router-link>
            </div>
          </div>
        </div>
    </Slide>

    <template #addons>
      <div v-show="showElement">
        <Navigation class="hidden-element" :class="{ show: showElement }" />
      </div>
      <Pagination />
    </template>
  </Carousel>
</template>

<script setup>
import { ref, onMounted } from 'vue'
import axios from 'axios'
import 'vue3-carousel/dist/carousel.css'
import { Carousel, Slide, Pagination, Navigation } from 'vue3-carousel'

let linkCdn = document.createElement("link");
linkCdn.setAttribute('rel', 'stylesheet');
linkCdn.setAttribute('href', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==');
linkCdn.setAttribute('crossorigin', 'anonymous');
linkCdn.setAttribute('referrerpolicy', 'no-referrer');

document.head.appendChild(linkCdn);

const destaquesJson = ref([]);

onMounted(async () => {
  let response = await axios.get(
    `https://api-content.ingresso.com/v0/templates/highlights/16?partnership=joaovictorpr`
  )

  destaquesJson.value = response.data;


  console.log(destaquesJson.value);
})

const settings = ref({
  itemsToShow: 1.5,
  snapAlign: 'center'
})

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
  font-size: 30px;
  color: #FDFDFD;
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
  top: 160px;
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
  top: 200px;
  left: 63px;
  font-size: 20px;
}

#firstVejaMais > a > i, .vejaMais > a > i  {
  margin-right: 8px;
}
  @media screen and (max-width: 425px) {
  #firstDestaque,
  .msgDestaque,
  #firstName,
  .nameFilm,
  .firstGenresDuration,
  .genresDuration,
  #firstVejaMais,
  .vejaMais {
    font-size: 14px;
  }
  
  .firstGenresDuration,
  .genresDuration {
    top: 40px; /* Ajuste conforme necessário */
  }
  
  #firstVejaMais,
  .vejaMais {
    font-size: 16px; /* Ajuste conforme necessário */
  }
}

@media screen and (max-width: 768px) {
  #firstDestaque,
  .msgDestaque,
  #firstName,
  .nameFilm,
  .firstGenresDuration,
  .genresDuration,
  #firstVejaMais,
  .vejaMais {
    position: static;
    text-align: center;
  }
  
  .firstGenresDuration,
  .genresDuration {
    top: 10px; /* Ajuste conforme necessário */
  }
}
@media screen and (max-width: 1024px) {
  #firstDestaque,
  .msgDestaque,
  #firstName,
  .nameFilm,
  .firstGenresDuration,
  .genresDuration,
  #firstVejaMais,
  .vejaMais {
    font-size: 18px; /* Ajuste conforme necessário */
  }

  #firstDestaque,
  .msgDestaque {
    top: 40px; /* Ajuste conforme necessário */
  }

  #firstName,
  .nameFilm {
    font-size: 30px; /* Ajuste conforme necessário */
    top: 70px; /* Ajuste conforme necessário */
  }

  .firstGenresDuration,
  .genresDuration {
    top: 120px; 
264

  }

  #firstVejaMais,
  .vejaMais {
    top: 180px; /* Ajuste conforme necessário */
    font-size: 24px; /* Ajuste conforme necessário */
  }

  #firstVejaMais > a > i,
  .vejaMais > a > i {
    margin-right: 5px; /* Ajuste conforme necessário */
  }
}
</style>
