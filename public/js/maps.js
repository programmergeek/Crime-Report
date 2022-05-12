let map
let marker
const lat = document.getElementById("lat")
const long = document.getElementById("long")
console.log(lat.value)

// Initialize and add the map
function initMap() {
    // The location of Gaborone
    const gaborone= { lat: -24.6282, lng: 25.9231 };
    // The map, centered at Gaborone
    map = new google.maps.Map(document.getElementById("map"), {
      zoom: 13,
      center: gaborone,
    });
    // The marker, positioned at Gaborone
    marker = new google.maps.Marker({
      position: gaborone,
      map: map,
    });
  }

  // update map when div#lat is click
  lat.addEventListener("click", () => {
    marker.setMap(null) // remove markers already on map
    const coords = new google.maps.LatLng(lat.value, long.value) // set new coordinate values
    map = new google.maps.Map(document.getElementById("map"), {
      zoom: 13,
      center: coords
    }) // create new map object
    marker = new google.maps.Marker({
      position: coords,
    }) // create new marker
    marker.setMap(map) // set marker
  })
  
  window.initMap = initMap;