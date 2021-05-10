<template>
  <div>
    <section style="text-align: center">
      <div v-for="album in this.$store.state.albumes" :key="album"
           style="width: 19%; display: inline-block; text-align: center; border: 1px solid;margin: 1em;">
        <h3>{{ album.titre }}</h3>
        <p>date de sortie : {{ dateSortie(album.date) }} </p>
        <p>{{ pathMus(album.id) }} </p>
        <img :src="pathImg(album.chemin_image)" style=" width: 80%; margin: 0 auto ">
        <audio controls style="width: 80%">
          <source :src="pathMus(album.id)" type="audio/mp3">
        </audio>

        <p> Prix de l'album : {{ album.prix / 100 }}€</p>
      </div>
    </section>
  </div>
</template>

<script>
export default {
  name: "Catalogue",
  methods: {
    pathImg(str) {
      return "images/album/" + str;
    },
    dateSortie(date) {
      return date.toString()
    },

    pathMus(albumId) {
      for (var item in this.$store.state.musiques) {
        if (albumId == item.album_id) {
          return "musiques/" + item.chemin_musique;
        }
      }
      // return "musiques/" + this.$store.getters.getAlbumMusique(idAlbum);
    }
  }
}
</script>

<style scoped>

</style>