<template>

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
    <tr v-for="(a, index) in panier" :key="index">
      <td>{{ a.titre }}</td>
      <td>{{ a.prix / 100 }}€</td>
      <td><img :src="pathImg(a.chemin_image)" style="height: 80px; width: 80px;"></td>
      <td> {{getProuitQuantite(index) }}</td>
      <td>
        <button class="btn btn-danger btn-block" @click="destroy(index)">supprimer<i class="fa fa-trash-o fa-lg"/>
        </button>
      </td>
    </tr>
    </tbody>
    <tfoot>
    <tr>
      <td colspan="3" class="text-right">Nombre d'articles :</td>
      <td>{{ nbrElePanier}}</td>
      <td></td>
    </tr>
    <tr>
      <td colspan="3" class="text-right">Total :</td>
      <td>{{ totalPanier }}€</td>
      <td></td>
    </tr>
    </tfoot>
  </table>
</template>

<script>

export default {
  name: "Panier",
  computed: {
    albums() {
      return this.$store.getters.albums;
    },
    panier() {
      return this.$store.state.panier;
    },
    quantite(){
      return this.$store.state.quantite;
    },
    totalPanier(){
      return this.$store.getters.totalPanier;
    },
    nbrElePanier(){
      return this.$store.getters.nbrElePanier;
    }

  },
  methods: {
    getProuitQuantite(index){
      return this.quantite[index]
    },
    destroy(index) {
     this.$store.commit('destroy',index)
    },
    pathImg(str) {
      return "images/album/" + str;
    },
  }
}

</script>

<style scoped>

</style>