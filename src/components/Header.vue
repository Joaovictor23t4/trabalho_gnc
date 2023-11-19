<template>
  <header>
    <nav id="nav">
      <div id="nav-principal">
        <div id="bloco1">
          <router-link to="/"><img src="/src/assets/images/gnc-logo.png" alt="" id="logo"></router-link>
          <div id="container-shopping">
            <span>
              <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-geo-alt" viewBox="0 0 16 16">
                  <path d="M12.166 8.94c-.524 1.062-1.234 2.12-1.96 3.07A31.493 31.493 0 0 1 8 14.58a31.481 31.481 0 0 1-2.206-2.57c-.726-.95-1.436-2.008-1.96-3.07C3.304 7.867 3 6.862 3 6a5 5 0 0 1 10 0c0 .862-.305 1.867-.834 2.94zM8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10z"/>
                  <path d="M8 8a2 2 0 1 1 0-4 2 2 0 0 1 0 4zm0 1a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
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
                <input type="search" placeholder="Pesquisar filme" id="inSearch"/>
             </div>
        </div>
        <div id="bloco3">
          <div id="container-usuario">
            <span>
              <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
                <i class="bi bi-person-circle"></i>
              </svg>
            </span>
            <button id="btnUsuario">Entre ou cadastre-se</button>
          </div>
          </div>
      </div>
    </nav>
  </header>
</template>

<script setup>
import { ref } from 'vue';

const selectedShopping = ref("mueller");

// Utilize o defineEmits diretamente para declarar os eventos que serão emitidos
const emit = defineEmits(['parametroShopping']);

function handleSelectChange(event) {
  selectedShopping.value = event.target.value;
  emit('parametroShopping', selectedShopping.value);
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
  background-color: #161F2E;
}

#bloco1 {
  display: flex;
  align-items: center;
  gap: 20px;
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

#inSearch {
  border: none;
  outline: none;
  width: 300px;
  height: 35px;
  border-radius: 15px;
  padding: 0 16px;
  background-color: #2A364A;
  color: #424F64;
}

#inSearch::placeholder {
  color: #424F64;
}

#logo {
    width: 100px;
}
</style>