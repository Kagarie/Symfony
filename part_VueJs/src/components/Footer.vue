<template>
  <div>
    <footer>
      <div class="background-dark padding text-center footer-social">
        <a href="https://github.com/Kagarie" target="_blank"><img
            src="https://pluspng.com/img-png/github-logo-png-white-github-11-icon-free-white-social-icons-256x256.png"
            alt="Github"></a>
        <a href="https://www.univ-larochelle.fr" target="_blank"><img
            src="https://yt3.ggpht.com/a/AGF-l79v6QE7e15egOY4wHL-PWVh1oRmE_ntmIce=s900-c-k-c0xffffffff-no-rj-mo"
            alt="Fac de la Rochelle"></a>

      </div>

      <!-- Bottom Footer -->
      <section class="padding background-dark full-width">
        <div class="text-center">
          <p class="text-size-12">Copyright 2019, Vision Design - graphic zoo</p>
          <p class="text-size-12">All images is purchased from Bigstock. Do not use the images in your
            website.</p>
        </div>
      </section>
    </footer>
  </div>
</template>

<script>


export default {
  name: 'Footer',

}
</script>

<style scoped>
footer {
  position: absolute;
  width: 100%;
  height: 110px;
  margin-top: 2em;
  background: #212529;
}

section, footer {
  color: #777777;
}

img {
  margin: 4px 4px 4px 0;
  height: 32px;
  width: 32px;
}
</style>