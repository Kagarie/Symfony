<template style="text-align: center;">
  <div>
    <header class="section background-white">
      <div class="line text-center">
        <h1 class="alert">
          Buy-And-Listen</h1>
        <p class="margin-bottom-0 text-size-16 text-dark">Duis autem vel eum iriure dolor in hendrerit in vulputate
          velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis.<br>
          Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod.</p>
      </div>
    </header>
    <section style="text-align: center;">
      <div v-for="c in this.$store.state.groupes" :key="c"
           style="width: 19%; display: inline-block; text-align: center; border: 1px solid; margin: 1em">
        <a href="#" :alt="c.nom">
          <h2>{{ c.nom }}</h2>
          <p>Nombre de membres : {{ c.nombre_membre }}</p>
          <img :src="path(c.chemin_logo)" alt="img">
        </a>
      </div>
    </section>
  </div>
</template>

<script>
export default {
  name: 'Accueil',
  computed: {},
  methods: {
    path(str) {
      return "images/groupe_logo/" + str;
    }
  }
}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped>
h3 {
  margin: 40px 0 0;
}

ul {
  list-style-type: none;
  padding: 0;
}

li {
  display: inline-block;
  margin: 0 10px;
}

a {
  text-decoration: none;
  color: black;
}

img {
  width: 80%;
  height: 150px;
  margin: auto;
  margin-bottom: 1em;
}
</style>
