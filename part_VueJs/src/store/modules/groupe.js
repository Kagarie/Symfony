import axios from "axios"

const state = () => ({
    groupes: [],
})
//mutations
const mutations = {
    chargerGroupe(state) {
        axios.get("api/data.json")
            .then(rep => state.groupes =rep.data[1].groupe)
            .catch(error => console.log(error));
    },
}

export default {
    namespaced: true,
    state,
    mutations,
}