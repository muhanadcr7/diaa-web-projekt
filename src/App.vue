<script setup lang="ts">
import ContactForm from './views/kontakt.vue'
import Startseite from './views/startseite.vue'
import { ref } from 'vue'
const showForm = ref(false)
</script>

<template>
  <div class="center">
    <div>
      <p>Die Webseite ist in der Bearbeitung</p>
      <button @click="showForm = true">Kontaktformular anzeigen</button>
      <Startseite />
      <ContactForm v-if="showForm" />
    </div>
  </div>
</template>

<style scoped>
.center {
  display: flex;
  justify-content: center;
  align-items: center;
  height: 100vh;
  flex-direction: column;
  text-align: center;
}

button {
  margin-top: 1rem;
  padding: 0.5rem 1rem;
  border-radius: 6px;
  border: none;
  background-color: #4f46e5;
  color: white;
  cursor: pointer;
}
button:hover {
  background-color: #4338ca;
}
</style>
