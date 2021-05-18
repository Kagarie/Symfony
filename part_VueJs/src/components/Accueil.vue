<template style="text-align: center;">
  <div>
    <header class="section background-white">
      <div class="line text-center">
        <h1 class="alert">
          Buy-And-Listen</h1>
        <p class="margin-bottom-0 text-size-16 text-dark">Ce site est un projet pour ma fac. Il comprend une partie php avec le framework Symfony et une partie js avec Vue Js<br>
          Le thème choisi est l'achat de musique</p>
      </div>
    </header>
    <section style="text-align: center;">
      <div v-if="chargerApi">
        <div v-for="(g,index) in groupes" :key="index"
             style="width: 19%; display: inline-block; text-align: center; border: 1px solid; margin: 1em">
            <h2>{{ g.nom }}</h2>
            <p>Nombre de membres : {{ g.nombre_membre }}</p>
            <img :src="path(g.chemin_logo)" alt="img">
        </div>
      </div>
      <div v-else>
        <p style="text-align: center">Problème lors du chargement des données</p>
      </div>
    </section>
  </div>
</template>

<script>
export default {
  name: 'Accueil',
  computed: {
    groupes() {
      return this.$store.state.groupe.groupes
    },
    chargerApi() {
      return this.$store.state.album.albums.length > 1 && this.$store.state.groupe.groupes.length > 1
    },

  },
  methods: {
    path(str) {
      return "images/groupe_logo/" + str;
    },
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
