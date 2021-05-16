<template>
  <div>
    <Catalogue/>
    <Footer/>
  </div>
</template>

<script>
import Catalogue from '@/components/catalogue'
import Footer from '@/components/Footer.vue'


export default {
  name: "Catalogue",
  components: {
    Catalogue,
    Footer,
  }
}
</script>


<style scoped>

</style>