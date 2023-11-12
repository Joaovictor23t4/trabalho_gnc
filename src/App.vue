<script setup>
import { RouterLink, RouterView } from 'vue-router'
import Login from './views/Login.vue'
</script>

<template>
  <RouterView />
  <Login />
</template>

<style scoped>
#app {
  background-color: black !important;
}
</style>
<script>
export default {
  components: { Login },
  
}
</script>