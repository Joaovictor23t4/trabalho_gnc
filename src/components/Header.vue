<template>
  <header id="header">
    <nav id="nav">
      <div id="nav-principal">
        <div id="bloco1">
          <router-link to="/"
            ><img src="/src/assets/images/gnc-logo-2.png" alt="" id="logo"
          /></router-link>
          <div id="container-shopping" v-show="pathAtual !== '/tela-filme'">
            ;
            <span>
              <svg
                xmlns="http://www.w3.org/2000/svg"
                id="icon-shopping"
                fill="currentColor"
                class="bi bi-geo-alt"
                viewBox="0 0 16 16"
              >
                <path
                  d="M12.166 8.94c-.524 1.062-1.234 2.12-1.96 3.07A31.493 31.493 0 0 1 8 14.58a31.481 31.481 0 0 1-2.206-2.57c-.726-.95-1.436-2.008-1.96-3.07C3.304 7.867 3 6.862 3 6a5 5 0 0 1 10 0c0 .862-.305 1.867-.834 2.94zM8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10z"
                />
                <path d="M8 8a2 2 0 1 1 0-4 2 2 0 0 1 0 4zm0 1a3 3 0 1 0 0-6 3 3 0 0 0 0 6z" />
                <i class="bi bi-geo-alt"></i>
              </svg>
            </span>
            <select id="selectShopping" v-model="selectedShopping" @change="handleSelectChange">
              <option value="" disabled>Escolha seu shopping</option>
              <option value="mueller" selected>Mueller</option>
              <option value="garten">Garten</option>
            </select>
          </div>
        </div>
        <div id="bloco2">
          <div id="container-search">
            <input type="search" placeholder="Pesquisar filme" id="inSearch" />
            <span>
              <svg
                xmlns="http://www.w3.org/2000/svg"
                id="icon-search"
                fill="currentColor"
                class="bi bi-search"
                viewBox="0 0 16 16"
              >
                <path
                  d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0"
                />
                <i class="bi bi-search"></i>
              </svg>
            </span>
          </div>
        </div>
        <div id="bloco3">
          <div id="container-usuario">
            <span>
              <svg
                xmlns="http://www.w3.org/2000/svg"
                id="icon-user"
                fill="currentColor"
                class="bi bi-person-circle"
                viewBox="0 0 16 16"
              >
                <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
                <path
                  fill-rule="evenodd"
                  d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"
                />
                <i class="bi bi-person-circle"></i>
              </svg>
            </span>
          </div>
        </div>
      </div>
    </nav>
  </header>
</template>

<script setup>
import { ref } from 'vue'
import { useRouter } from 'vue-router'
import { useMovieStore } from '../stores/movie'

const selectedShopping = ref('mueller')

const router = useRouter()
const pathAtual = router.currentRoute.value.path

const storeMovie = useMovieStore()

storeMovie.cine = selectedShopping.value

console.log(pathAtual)

// Utilize o defineEmits diretamente para declarar os eventos que serão emitidos
const emit = defineEmits(['parametroShopping'])

function handleSelectChange(event) {
  selectedShopping.value = event.target.value
  storeMovie.cine = event.target.value
  emit('parametroShopping', selectedShopping.value)
  // console.log(selectedShopping.value)
}
</script>

<style scoped>
#nav {
  display: flex;
  flex-direction: column;
}

#nav-principal {
  display: flex;
  justify-content: space-around;
  align-items: center;
  background-color: #161f2e;
}

#bloco1 {
  display: flex;
  align-items: center;
  gap: 20px;
}

#icon-shopping {
  width: 32px;
  height: 32px;
}

#icon-search {
  width: 28px;
  height: 28px;
}

#icon-user {
  width: 40px;
  height: 40px;
}
button {
  cursor: pointer;
  background-color: transparent;
  border: transparent;
}
button:hover {
  background-color: rgb(46, 46, 46);
  border: transparent;
}
.btn.show {
  background-color: transparent;
  border: transparent;
}
.dropdown-menu {
  background-color: #161f2e;
  border: none;
  border-radius: 0;
  box-shadow: none;
}
.dropdown-item {
  cursor: pointer;
  color: #ffffff;
  background-color: transparent;
  display: flex !important;
  justify-content: flex-start !important;
  align-items: center !important;
}
#bloco3 {
  display: flex;
  align-items: center;
  gap: 10px;
}

#container-shopping > select {
  border: none;
  background: transparent;
  outline: none;
  appearance: none;
  color: #fff;
  cursor: pointer;
}

#container-shopping > select > option {
  color: #000;
}

#container-shopping > span {
  color: #ffffffe0;
  margin-left: 20px;
}

#container-usuario > span {
  margin-right: 20px;
  color: #ffffffe0;
}

#btnUsuario {
  margin-right: 10px;
  border: none;
  outline: none;
  background: transparent;
  color: #fdfdfd;
}

#container-search > span {
  position: relative;
  top: 0px;
  left: 10px;
  color: #fdfdfd;
}

#inSearch {
  border: none;
  outline: none;
  width: 300px;
  height: 35px;
  border-radius: 15px;
  padding: 0 16px;
  background-color: #2a364a;
  color: #424f64;
}

#inSearch::placeholder {
  color: #424f64;
}

#logo {
  width: 100px;
  position: relative;
  top: 8px;
}

@media only screen and (min-width: 769px) and (max-width: 1024px) {
  #bloco1 {
    flex-direction: row;
    align-items: center;
    gap: 20px;
  }

  #container-shopping {
    flex-direction: row;
    align-items: center;
    margin-top: 0;
  }

  #container-shopping > select {
    width: auto;
  }

  #bloco2 {
    display: flex;
  }

  #bloco3 {
    flex-direction: row;
    align-items: center;
    gap: 10px;
  }

  #btnUsuario {
    bottom: 0;
    margin-right: 10px;
  }
}

/* Tablet (768px) */
@media only screen and (min-width: 426px) and (max-width: 768px) {
  #nav-principal {
    display: flex;
    justify-content: space-between;
    align-items: center;
    gap: 30px;
  }

  #bloco1 {
    display: flex !important;
    align-items: center;
    gap: 10px;
    width: 50%;
  }

  #logo {
    margin-left: 10px;
  }

  #container-shopping {
    flex-direction: column;
    align-items: center;
    margin-top: 10px;
  }

  #container-shopping > select {
    width: 50%;
  }

  #bloco2 {
    width: 70%;
  }

  #bloco3 {
    width: 15%;
    flex-direction: column;
    align-items: center;
    gap: 10px;
  }

  #btnUsuario {
    display: none;
    bottom: 0;
    margin-right: 0;
  }
}

@media only screen and (max-width: 425px) {
  #bloco1 {
    align-items: center;
    gap: 10px;
  }

  #logo {
    margin-left: 10px;
  }

  #container-usuario {
    display: flex;
    align-content: center;
  }

  #container-usuario > span {
    margin-right: 0;
  }

  #container-shopping {
    position: relative;
    bottom: 5px;
    flex-direction: column;
    align-items: flex-start;
    margin-top: 10px;
  }

  #selectShopping {
    width: 50%;
  }

  #bloco2 {
    width: 15%;
  }

  #container-search > input {
    display: none;
  }

  #bloco3 {
    flex-direction: column;
    align-items: center;
    gap: 10px;
    width: 20%;
  }

  #icon-user {
    width: 35px;
    height: 35px;
  }

  #btnUsuario {
    display: none;
    bottom: 0;
    margin-right: 0;
  }
}

@media only screen and (max-width: 320px) {
  #bloco1 {
    align-items: center;
    gap: 10px;
    width: 60%;
  }

  #logo {
    margin-left: 10px;
    width: 70px;
  }

  #container-usuario {
    display: flex;
    align-content: center;
  }

  #container-usuario > span {
    margin-right: 0;
  }

  #container-shopping {
    position: relative;
    bottom: 5px;
    flex-direction: column;
    align-items: flex-start;
    margin-top: 10px;
  }

  #container-shopping > span {
    margin-left: 0;
  }

  #container-shopping > select {
    font-size: 0.8em;
  }

  #icon-shopping {
    width: 25px;
    height: 25px;
  }

  #selectShopping {
    width: 50%;
  }

  #bloco2 {
    width: 15%;
  }

  #container-search > input {
    display: none;
  }

  #bloco3 {
    flex-direction: column;
    align-items: center;
    gap: 10px;
    width: 20%;
  }

  #icon-search {
    position: relative;
    right: 2px;
  }

  #icon-user {
    width: 30px;
    height: 30px;
  }

  #btnUsuario {
    display: none;
    bottom: 0;
    margin-right: 0;
  }
}
</style>