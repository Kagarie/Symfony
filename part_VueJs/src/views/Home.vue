<template>
  <div class="home">
    <Accueil/>
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
