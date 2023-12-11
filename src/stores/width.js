import { defineStore } from "pinia";

export const useWidthStore = defineStore('counter', {
    state: () => ({
        widthMain: null
    }),
})