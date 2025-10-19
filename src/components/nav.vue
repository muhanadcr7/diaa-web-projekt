import { ref } from 'vue'
import Startseite from './Startseite.vue'
import UeberUns from './UeberUns.vue'
import Kontakt from './Kontakt.vue'

<template>
  <nav class="navbar">
    <button @click="currentPage = 'start'">Startseite</button>
    <button @click="currentPage = 'ueberuns'">Über uns</button>
    <button @click="currentPage = 'kontakt'">Kontakt</button>
  </nav>

  <div class="page-container">
    <Startseite v-if="currentPage === 'start'" />
    <UeberUns v-if="currentPage === 'ueberuns'" />
    <Kontakt v-if="currentPage === 'kontakt'" />
  </div>
</template>

<script setup lang="ts">

const currentPage = ref<'start' | 'ueberuns' | 'kontakt'>('start')
</script>

<style scoped>
.navbar {
  display: flex;
  justify-content: center;
  gap: 2rem;
  background-color: #4f46e5;
  padding: 1rem;
}

.navbar button {
  background-color: transparent;
  color: white;
  border: none;
  font-weight: bold;
  cursor: pointer;
  transition: color 0.2s;
}

.navbar button:hover {
  color: #c7d2fe;
}

.page-container {
  margin: 2rem auto;
  max-width: 900px;
}
</style>
