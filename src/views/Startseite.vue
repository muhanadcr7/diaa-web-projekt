<script setup lang="ts"></script>

<template>
  <div class="page-container">
    <header>
      <h1>Willkommen auf unserer Webseite</h1>
    </header>

    <main>
      <section class="content-block">
        <h2>Abschnitt 1</h2>
        <p>
          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent vehicula, 
          neque eget tincidunt blandit, nulla augue vulputate ligula, non tincidunt 
          mauris orci ut sapien.
        </p>
      </section>

      <section class="content-block">
        <h2>Abschnitt 2</h2>
        <p>
          Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium 
          doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore 
          veritatis et quasi architecto beatae vitae dicta sunt explicabo.
        </p>
      </section>
    </main>
  </div>
</template>

<style scoped>
.page-container {
  max-width: 900px;
  margin: 0 auto;
  padding: 2rem;
  font-family: Arial, sans-serif;
  line-height: 1.6;
}

header {
  text-align: center;
  margin-bottom: 3rem;
}

header h1 {
  font-size: 2.5rem;
  color: #4f46e5;
}

.content-block {
  margin-bottom: 2.5rem;
  padding: 1.5rem;
  background-color: #f5f5f5;
  border-radius: 10px;
}

.content-block h2 {
  margin-bottom: 1rem;
  color: #333;
}

.content-block p {
  color: #555;
}
</style>
