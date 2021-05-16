<template>
  <div class="container">
    <br>
    <div class="card text-center">
      <h3 class="card-header">Album disponibles</h3>
      <table class="table" style="width: 80%; margin: 0 auto;">
        <thead>
        <tr>
          <th>Nom</th>
          <th>Date de sortie</th>
          <th>Pochette</th>
          <th>Prix</th>
        </tr>
        </thead>
        <tbody>
        <tr v-for="(a, index) in albums" :key="index">
          <td>{{ a.titre }}</td>
          <td>{{ a.date }}</td>
          <td><img :src="pathImg(a.chemin_image)" style="height: 80px; width: 80px;"></td>
          <td>{{ a.prix / 100 }} €</td>
          <td>
            <button class="btn btn-primary btn-block" @click="add(a)">Ajouter</button>
          </td>
        </tr>
        </tbody>
        <tfoot>
        <tr>
          <td colspan="3" class="text-right">Nombre d'articles :</td>
          <td>{{ nbrElePanier }}</td>
          <td></td>
        </tr>
        <tr>
          <td colspan="3" class="text-right">Total :</td>
          <td>{{ totalPanier }}€</td>
          <td></td>
        </tr>
        </tfoot>
      </table>
    </div>
  </div>
</template>

<script>
export default {
  name: "catalogue",
  data() {
    return {
      input: {ajouter: ''},
    }
  },
  computed: {
    albums() {
      return this.$store.getters["album/getAlbums"][0]
    },
    totalPanier() {
      return this.$store.getters["panier/totalPanier"]
    },
    nbrElePanier() {
      return this.$store.getters["panier/nbrElePanier"]
    }
  },
  methods: {
    add(album) {
      this.$store.commit("panier/add", album)
    },
    pathImg(str) {
      return "images/album/" + str;
    },
  }
}
</script>

<style scoped>

</style>