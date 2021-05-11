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
      </table>
    </div>
    <p style="text-align: center">Total du panier {{ totalPanier() }} € | {{ nbrElePanier() }} éléments</p>
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
      let albums = new Array();
      this.$store.state.data.forEach((key) => {
        if (key.name == "album") {
          albums.push(key.data);
        }
      })
      return albums[0];
    },
    panier() {
      return this.$store.state.panier;
    },
    qte() {
      return this.$store.state.quantite;
    }
  },
  methods: {
    add(album) {
      this.panier.push(album);
      this.qte[0] += 1;
    },
    destroy(index) {
      this.panier.splice(index, 1);
    },
    pathImg(str) {
      return "images/album/" + str;
    },
    totalPanier() {
      let total = 0;
      this.$store.state.panier.forEach((key) => {
        total += key.prix / 100;
      })
      return total.toFixed(2);
    },
    nbrElePanier() {
      return this.$store.state.panier.length;
    }
  }
}
</script>

<style scoped>

</style>