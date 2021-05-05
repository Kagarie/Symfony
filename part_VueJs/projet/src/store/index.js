import Vue from 'vue'
import Vuex from 'vuex'

Vue.use(Vuex)

export default new Vuex.Store({
    state: {
        data: [
            {
                "type": "table", "name": "album", "database": "projet_S4", "data":
                    [
                        {"id": "1", "groupe_id": "1", "titre": "T.N.T", "prix": "700", "chemin_image": "tnt.jpg"},
                        {
                            "id": "2",
                            "groupe_id": "1",
                            "titre": "Back in Black",
                            "prix": "700",
                            "chemin_image": "ACDC-BackInBlack-Front.jpg"
                        },
                        {"id": "3", "groupe_id": "2", "titre": "Bleach", "prix": "1400", "chemin_image": "bleach.jpg"},
                        {
                            "id": "4",
                            "groupe_id": "2",
                            "titre": "Nervermind",
                            "prix": "1500",
                            "chemin_image": "copertina-nevermind-nirvana.webp"
                        },
                        {
                            "id": "5",
                            "groupe_id": "3",
                            "titre": "Life Is Peachy",
                            "prix": "900",
                            "chemin_image": "Life Is Peachy.jpg"
                        },
                        {
                            "id": "6",
                            "groupe_id": "3",
                            "titre": "Issues",
                            "prix": "1600",
                            "chemin_image": "korn_issues.jpg"
                        },
                        {
                            "id": "7",
                            "groupe_id": "4",
                            "titre": "L Aventurier",
                            "prix": "600",
                            "chemin_image": "aventurier.jpg"
                        },
                        {
                            "id": "8",
                            "groupe_id": "4",
                            "titre": "Le Baiser",
                            "prix": "1600",
                            "chemin_image": "le baiser.jpg"
                        },
                        {
                            "id": "9",
                            "groupe_id": "5",
                            "titre": "A Night at the Opera",
                            "prix": "800",
                            "chemin_image": "A_Night_at_the_Opera.jpg"
                        },
                        {
                            "id": "10",
                            "groupe_id": "5",
                            "titre": "Sheer Heart Attack",
                            "prix": "1100",
                            "chemin_image": "Sheer Heart Attack.jpg"
                        },
                        {
                            "id": "11",
                            "groupe_id": "6",
                            "titre": "Twist and Shout",
                            "prix": "1700",
                            "chemin_image": "Twist_and_Shout.jpg"
                        },
                        {
                            "id": "12",
                            "groupe_id": "6",
                            "titre": "Something New",
                            "prix": "1600",
                            "chemin_image": "Something_New.jpg"
                        },
                        {
                            "id": "13",
                            "groupe_id": "7",
                            "titre": "Destroyer",
                            "prix": "900",
                            "chemin_image": "destroyer.jpg"
                        },
                        {
                            "id": "14",
                            "groupe_id": "7",
                            "titre": "Love Gun",
                            "prix": "1400",
                            "chemin_image": "love gun.jpg"
                        },
                        {
                            "id": "15",
                            "groupe_id": "8",
                            "titre": "Killers",
                            "prix": "600",
                            "chemin_image": "Iron-Maiden-Killers.jpg"
                        },
                        {
                            "id": "16",
                            "groupe_id": "8",
                            "titre": "Fear of the Dark",
                            "prix": "1200",
                            "chemin_image": "album_iron_maiden_fear_of_the_dark.jpg"
                        },
                        {
                            "id": "17",
                            "groupe_id": "9",
                            "titre": "Love over Gold",
                            "prix": "1200",
                            "chemin_image": "Love over Gold.jpg"
                        },
                        {
                            "id": "18",
                            "groupe_id": "9",
                            "titre": "Brothers in Arms",
                            "prix": "1600",
                            "chemin_image": "BrothersDireStraits.png"
                        },
                        {
                            "id": "19",
                            "groupe_id": "10",
                            "titre": "Tribute",
                            "prix": "690",
                            "chemin_image": "Tenacious D - Tribute . jpg"
                        }
                    ]
            }
            , {
                "type": "table", "name": "groupe", "database": "projet_S4", "data":
                    [
                        {
                            "id": "1",
                            "nom": "AC\/DC",
                            "nombre_membre": "5",
                            "chemin_logo": "F4SDAe.webp",
                            "genre": "Hard Rock"
                        },
                        {
                            "id": "2",
                            "nom": "Nirvana",
                            "nombre_membre": "4",
                            "chemin_logo": "nirvana-logo-clipart-7.jpg",
                            "genre": "Grunge"
                        },
                        {
                            "id": "3",
                            "nom": "Korn",
                            "nombre_membre": "5",
                            "chemin_logo": "Korn_Logo_Black.svg.png",
                            "genre": "Nu Metal"
                        },
                        {
                            "id": "4",
                            "nom": "Indochine",
                            "nombre_membre": "5",
                            "chemin_logo": "08a2fc63a41b40c7d014c79db154ffe9--indochine.jpg",
                            "genre": "Pop Rock"
                        },
                        {"id": "5", "nom": "Queen", "nombre_membre": "5", "chemin_logo": "Queen1.png", "genre": "Rock"},
                        {
                            "id": "6",
                            "nom": "The Beatles",
                            "nombre_membre": "4",
                            "chemin_logo": "the_beatles_vector_logo_by_dutchlion-d5ovg0i.jpg",
                            "genre": "Rock"
                        },
                        {
                            "id": "7",
                            "nom": "Kiss",
                            "nombre_membre": "4",
                            "chemin_logo": "iphone4-Kiss-Logo.jpg",
                            "genre": "Glam Rock"
                        },
                        {
                            "id": "8",
                            "nom": "Iron Maiden",
                            "nombre_membre": "6",
                            "chemin_logo": "iron-maiden-logo.jpg",
                            "genre": "Heavy Metal"
                        },
                        {
                            "id": "9",
                            "nom": "Dire Straits",
                            "nombre_membre": "4",
                            "chemin_logo": "abab3424128727a422de1c22d4a19227.jpg",
                            "genre": "Blues Rock"
                        },
                        {
                            "id": "10",
                            "nom": "Tenacoius D",
                            "nombre_membre": "2",
                            "chemin_logo": "Tenacious_D_title_sequence . png",
                            "genre": "Comedy rock"
                        }
                    ]
            }
            , {
                "type": "table", "name": "musique", "database": "projet_S4", "data":
                    [
                        {
                            "id": "1",
                            "album_id": "2",
                            "chemin_musique": "ACDC-Back-in-black.mp3",
                            "titre": "Back In Black"
                        },
                        {"id": "2", "album_id": "1", "chemin_musique": "ACDC-T.N.T.mp3", "titre": "T.N.T"},
                        {
                            "id": "3",
                            "album_id": "12",
                            "chemin_musique": "Beatles-And-I-Love-Her.mp3",
                            "titre": "And I Love Her"
                        },
                        {
                            "id": "4",
                            "album_id": "11",
                            "chemin_musique": "Beatles-Twist-And-Shout.mp3",
                            "titre": "Twist And Shout"
                        },
                        {
                            "id": "5",
                            "album_id": "18",
                            "chemin_musique": "Dire-Straits-Brothers-In-Arms.mp3",
                            "titre": "Brothers In Arms"
                        },
                        {
                            "id": "6",
                            "album_id": "17",
                            "chemin_musique": "Dire-Straits-Love-Over-Gold.mp3",
                            "titre": "Love Over Gold"
                        },
                        {
                            "id": "7",
                            "album_id": "7",
                            "chemin_musique": "Indochine-aventurier.mp3",
                            "titre": "L'Aventurier"
                        },
                        {"id": "8", "album_id": "8", "chemin_musique": "Indochine-Le-baiser.mp3", "titre": "Le Baiser"},
                        {
                            "id": "9",
                            "album_id": "16",
                            "chemin_musique": "Iron-maiden-fear-of-the-dark.mp3",
                            "titre": "Fear Of The Dark"
                        },
                        {"id": "10", "album_id": "15", "chemin_musique": "Iron-Maiden-Killer.mp3", "titre": "Killers"},
                        {
                            "id": "11",
                            "album_id": "14",
                            "chemin_musique": "Kiss-Almost-Human.mp3",
                            "titre": "Almost Human"
                        },
                        {
                            "id": "12",
                            "album_id": "13",
                            "chemin_musique": "Kiss-Destroyer-Sweet-Pain.mp3",
                            "titre": "Sweet Pain"
                        },
                        {"id": "13", "album_id": "5", "chemin_musique": "KORN-Lost.mp3", "titre": "Lost"},
                        {"id": "14", "album_id": "6", "chemin_musique": "KORN-Trash.mp3", "titre": "Trash"},
                        {"id": "15", "album_id": "3", "chemin_musique": "Nirvana-Blew.mp3", "titre": "Blew"},
                        {
                            "id": "16",
                            "album_id": "4",
                            "chemin_musique": "Nirvana-Come-As-You-Are.mp3",
                            "titre": "Come As You Are"
                        },
                        {
                            "id": "17",
                            "album_id": "10",
                            "chemin_musique": "Queen-Killer-Queen.mp3",
                            "titre": "Killer Queen"
                        },
                        {"id": "18", "album_id": "9", "chemin_musique": "Queen-Sweet-Lady.mp3", "titre": "Sweet Lady"},
                        {
                            "id": "19",
                            "album_id": "19",
                            "chemin_musique": "Tenacious D- Tribute . mp3",
                            "titre": "Tribute"
                        }
                    ]
            }
            , {
                "type": "table", "name": "user", "database": "projet_S4", "data":
                    [
                        {
                            "id": "1",
                            "email": "user@user",
                            "roles": "0x5b5d",
                            "password": "$argon2id$v=19$m=65536,t=4,p=1$d1cxeWltODB6d01Sby9TRg$g4uxv1OWUzKm+KsOdnBPnlHWwHqHWXEGa1maidY0fiY",
                            "nom": "user",
                            "prenom": "user"
                        },
                        {
                            "id": "2",
                            "email": "admin@admin",
                            "roles": "0x5b22524f4c455f55534552222c22524f4c455f41444d494e225d",
                            "password": "$argon2id$v=19$m=65536,t=4,p=1$MDhPakhmUXdHa2c1NWJ2Ug$DhlqUBRg\/2NXMeeqhqHSnnRfx0eAxx6fSeZKYMRha24",
                            "nom": "admin",
                            "prenom": "admin"
                        },
                        {
                            "id": "3",
                            "email": "superAdmin@superAdmin",
                            "roles": "0x5b22524f4c455f55534552222c22524f4c455f53555045525f41444d494e225d",
                            "password": "$argon2id$v=19$m=65536,t=4,p=1$eGRiNkRUa0QySHhKQWgzaA$A4XJoRP22AbaI4Qfr4UHtp4TkQ4OiUCFt0L+sYAahf4",
                            "nom": "super_admin",
                            "prenom": "super_admin"
                        }
                    ]
            }
        ]
    },
    getters: {},
    mutations: {},
    actions: {},
    modules: {}
})
