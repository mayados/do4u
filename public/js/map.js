//Creation of a map : initialization and indication of geographical coordonates et zoom level
// setView() return map object
// We set [latitude, longitude]
var map = L.map('map').setView([48.584614, 7.7507127], 13);


L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
    // We have to mention where we tok it. Here, it comes from d'OpenStreetMap
    attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>',
    // maximal zoom a user will be able to make
    maxZoom: 19,
}).addTo(map);


// Add marker
var myIcon = L.icon({
    iconUrl: "https://unpkg.com/leaflet@1.5.1/dist/images/marker-icon.png",
    iconSize: [25, 40],
    iconAnchor: [22, 94],
    popupAnchor: [-3, -76],
    shadowAnchor: [22, 94]
});

var ville = L.marker([48.584614, 7.7507113], {icon : myIcon}).addTo(map);


