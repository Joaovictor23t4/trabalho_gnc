import { ref, computed } from 'vue'
import { defineStore } from 'pinia'

export const useMovieStore = defineStore('counter', {
  state: () => ({
    indexFilme: null,
  }),
})
