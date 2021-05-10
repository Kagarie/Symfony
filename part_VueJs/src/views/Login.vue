<template>
  <div class="Connexion">
    <Connexion/>
    <Footer/>
  </div>
</template>

<script>
// @ is an alias to /src'
import Connexion from '@/components/Connexion'
import Footer from '@/components/Footer'

export default {
  name: 'Login',
  components: {
    Connexion,
    Footer
  }
}
</script>
