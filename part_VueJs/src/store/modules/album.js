import axios from 'axios'

//getters
const getters = {
    //return un tableau d objets d albums
    getAlbums() {
        let albums = [];

        axios.get("api/data.json")
            .then(rep => albums.push(rep.data[0].albums))
            .catch(error => console.log(error));
        return albums;
    },
}
export default {
    namespaced: true,
    getters,
}