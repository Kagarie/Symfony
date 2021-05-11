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
      <td> item.quantity</td>
      <td>
        <button class="btn btn-danger btn-block" @click="destroy(index)">supprimer<i class="fa fa-trash-o fa-lg"/>
        </button>
      </td>
    </tr>
    </tbody>
    <tfoot>
    <tr>
      <td colspan="3" class="text-right">Nombre d'articles :</td>
      <td>{{ nbrElePanier() }}</td>
      <td></td>
    </tr>
    <tr>
      <td colspan="3" class="text-right">Total :</td>
      <td>{{ totalPanier() }}€</td>
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
    quantite(){
      return this.$store.state.quantite;
    }
  },
  methods: {
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
      return total;
    },
    nbrElePanier() {
      return this.panier.length;
      /*let total = 0 ;
      for(var i = 0 ; i<this.quantite.length;i+=1)
        total+=this.quantite[i]
      return total;*/
    }
  }
}

</script>

<style scoped>

</style>