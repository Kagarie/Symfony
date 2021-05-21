<template>
  <div id="app">
    <div id="nav" class="navbar navbar-expand-lg navbar-dark">
      <router-link class="navbar-brand" style="color: #FFFFFF" to="/">Buy-And-Listen</router-link>
      <button class="navbar-toggler" type="button" data-toggle="collapse">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
          <router-link class="nav-item nav-link" to="/">Accueil</router-link>

          <router-link class="nav-item nav-link" to="/Catalogue">Catalogue</router-link>

          <router-link class="nav-item nav-link" to="/Panier">Panier</router-link>
        </div>
      </div>
    </div>
      <router-view></router-view>
  </div>
</template>

<script>
export default {
  name: 'App',
}

</script>
<style scoped>
#nav {
  background: #212529;
  padding: 1em 1em 1em;
}

#nav a {
  font-weight: bold;
  color: #777777;
}

#nav a.router-link-exact-active {
  color: #ffffff;
}

</style>