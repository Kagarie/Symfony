import axios from 'axios'

const state = () => ({
    albums: []
})

//mutations
const mutations = {
    chargerAlbums(state) {
        axios.get("api/data.json")
            .then(rep => state.albums=rep.data[0].album)
            .catch(error => console.log(error));
    },
}
export default {
    namespaced: true,
    state,
    mutations,
}