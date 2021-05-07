<template>
  <div class="home">
    <img alt="Vue logo" src="../assets/logo.png">
    <Accueil msg="Welcome to Your Vue.js App"/>
    <Footer/>
  </div>
</template>

<script>
// @ is an alias to /src
import Accueil from '@/components/Accueil.vue'
import Footer from '@/components/Footer.vue'

export default {
  name: 'Home',
  components: {
    Accueil,
    Footer,
  }
}
</script>
