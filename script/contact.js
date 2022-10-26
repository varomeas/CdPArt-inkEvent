fetch('https://france-geojson.gregoiredavid.fr/repo/regions.geojson')
 .then((response) => response.json())
 .then(async (json) => {
 
 });
     
 var map = L.map('map').setView([45.042004, 3.884113], 17);

L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
    attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
}).addTo(map);

L.marker([45.042004, 3.884113]).addTo(map)
    .bindPopup('Place du Breuil')
    .openPopup();
