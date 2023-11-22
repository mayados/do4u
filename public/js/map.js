// Création d'une carte : initialisation et indication des coordonnées géographiques et du niveau de zoom
//  setView() return l'objet map
//  On indique [latitude, longitude]
var map = L.map('map').setView([48.584614, 7.7507127], 13);

// Ajout d'un tile layer : on indique la 
L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
    // Il faut mentionner d'où nous l'avons pris. Ici, ça provient d'OpenStreetMap
    attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>',
    // Le zoom maximum qu'un utilisateur pourra faire
    maxZoom: 19,
}).addTo(map);


// Ajout de marqueur
var myIcon = L.icon({
    iconUrl: "https://unpkg.com/leaflet@1.5.1/dist/images/marker-icon.png",
    // iconUrl: "../public/img/pointer.png",
    iconSize: [25, 40],
    iconAnchor: [22, 94],
    popupAnchor: [-3, -76],
    // shadowUrl: 'my-icon-shadow.png',
    // shadowSize: [68, 95],
    shadowAnchor: [22, 94]
});

var ville = L.marker([48.584614, 7.7507113], {icon : myIcon}).addTo(map);


