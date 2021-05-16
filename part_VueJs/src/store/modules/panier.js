const state = () => ({
    panier: [],
    quantite: [],
})

const getters = {
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
}

const mutations = {

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
}

export default {
    namespaced: true,
    state,
    getters,
    mutations,
}
