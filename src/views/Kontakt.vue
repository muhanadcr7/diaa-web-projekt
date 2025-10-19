<script setup lang="ts">
import { ref } from 'vue'

// Formulardaten
const name = ref('')
const email = ref('')
const message = ref('')

// Feedback
const submitted = ref(false)

function submitForm() {
  // Hier würdest du z.B. einen API-Call machen
  console.log('Form submitted:', { vorname: name.value,nachname: name.value, email: email.value, message: message.value })
  submitted.value = true
  // Formular zurücksetzen
  
  name.value = ''
  email.value = ''
  message.value = ''
}
</script>

<template>
  <div class="center">
    <div class="form-container">
      <h2>Kontaktformular</h2>

      <form @submit.prevent="submitForm">
        <label for="name">Vorname:</label>
        <input type="text" id="name" v-model="name" required />

        <label for="name">Nachname:</label>
        <input type="text" id="name" v-model="name" required />

        <label for="email">E-Mail:</label>
        <input type="email" id="email" v-model="email" required />

        <label for="message">Nachricht:</label>
        <textarea id="message" v-model="message" rows="5" required></textarea>

        <button type="submit">Senden</button>
      </form>

      <p v-if="submitted" class="success-msg">Vielen Dank! Ihre Nachricht wurde gesendet.</p>
    </div>
  </div>
</template>

<style scoped>
.center {
  display: flex;
  justify-content: center;
  align-items: center;
  height: 100vh;
  text-align: center;
}

.form-container {
  width: 90%;
  max-width: 400px;
  background-color: #f9f9f9;
  padding: 2rem;
  border-radius: 12px;
  box-shadow: 0 4px 12px rgba(0,0,0,0.1);
}

form {
  display: flex;
  flex-direction: column;
  gap: 1rem;
}

input, textarea {
  padding: 0.5rem;
  border-radius: 6px;
  border: 1px solid #ccc;
  width: 100%;
}

button {
  padding: 0.7rem;
  border: none;
  background-color: #4f46e5;
  color: white;
  border-radius: 6px;
  cursor: pointer;
  transition: background-color 0.2s;
}

button:hover {
  background-color: #4338ca;
}

.success-msg {
  margin-top: 1rem;
  color: green;
  font-weight: bold;
}
</style>
