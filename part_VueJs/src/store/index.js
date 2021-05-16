import Vue from 'vue'
import Vuex from 'vuex'
import axios from "axios";

Vue.use(Vuex)

export default new Vuex.Store({
    state: {
        panier: [],
        quantite: [],
    },
    getters: {
        //retourne un tableau d objets d albums
        getAlbums() {

            let albums = new Array();

            axios.get("/api/data.json")
                .then(rep => albums.push(rep.data[0].albums))
                .catch(error => console.log(error));
            return albums;
        },
        getGroupe() {

            let groupes = new Array();

            axios.get("/api/data.json")
                .then(rep => groupes.push(rep.data[1].groupes))
                .catch(error => console.log(error));
            return groupes;
        },

        //retourne le total du panier
        totalPanier(state) {
            let total = 0;
            state.panier.forEach((key, value) => {
                total += key.prix * state.quantite[value] / 100;
            })
            return total.toFixed(2);
        },
        //retourne le nombre d elements dans le panier
        nbrElePanier(state) {
            let nbr = 0;
            state.quantite.forEach((key) => {
                nbr += key;
            })
            return nbr;
        },
    },
    mutations: {

        //ajoute un album dans le panier
        add(state, album) {
            let newArticle = true;
            state.panier.forEach((key, value) => {
                //si l album est deja present dans le panier on incremente sa quantite
                if (album.id == key.id) {
                    state.quantite[value] += 1;
                    newArticle = false;
                }
            })
            //si l album n est pas present on l ajoute
            if (newArticle) {
                state.panier.push(album);
                state.quantite.push(1);
            }
        },
        destroy(state, index) {
            state.quantite.splice(index, 1);
            state.panier.splice(index, 1);
        },

    },
    actions: {},
    modules: {}
})
