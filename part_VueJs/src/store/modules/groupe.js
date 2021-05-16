import axios from "axios"

//getters
const getters = {
    getGroupe() {

        let groupes = new Array();

        axios.get("api/data.json")
            .then(rep => groupes.push(rep.data[1].groupes))
            .catch(error => console.log(error));
        return groupes;
    },
}

export default {
    namespaced:true,
    getters,
}