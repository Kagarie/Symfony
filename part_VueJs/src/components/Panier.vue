<template>
  <div>
    <table class="table" style="width: 80%; margin: 0 auto;">
      <thead>
      <tr>
        <th>Album</th>
        <th>Prix</th>
        <th>Pochette</th>
        <th>Quantité</th>
        <th></th>
      </tr>
      </thead>
      <tbody>
      <tr v-for="(album, index) in panier" :key="index">
        <td>{{ album.titre }}</td>
        <td>{{ album.prix / 100 }}€</td>
        <td><img :src="pathImg(album.chemin_image)" style="height: 80px; width: 80px;"></td>
        <td> {{ getProuitQuantite(index) }}</td>
        <td>
          <button class="btn btn-danger btn-block" @click="destroy(index)">supprimer<i class="fa fa-trash-o fa-lg"/>
          </button>
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

</template>

<script>


export default {
  name: "Panier",
  computed: {
    panier() {
      return this.$store.state.panier.panier;
    },
    totalPanier() {
      return this.$store.getters["panier/totalPanier"];
    },
    nbrElePanier() {
      return this.$store.getters["panier/nbrElePanier"];
    }
  },
  methods: {
    getProuitQuantite(index) {
      return this.$store.state.panier.quantite[index]
    },
    destroy(index) {
      this.$store.commit("panier/destroy", index)
    },
    pathImg(str) {
      return "images/album/" + str;
    },
  }
}


</script>

<style scoped>

</style>