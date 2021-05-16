import Vue from 'vue'
import Vuex from 'vuex'

import album from "@/store/modules/album";
import groupe from "@/store/modules/groupe";
import panier from "@/store/modules/panier";

Vue.use(Vuex)

export default new Vuex.Store({
    modules: {
        panier,
        album,
        groupe,
    },
})

