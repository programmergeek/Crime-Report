// Initialize and add the map
function initMap() {
    // The location of Gaborone
    const gaborone= { lat: -24.653257, lng: 25.906792 };
    // The map, centered at Gaborone
    const map = new google.maps.Map(document.getElementById("map"), {
      zoom: 13,
      center: gaborone,
    });
    // The marker, positioned at Gaborone
    const marker = new google.maps.Marker({
      position: gaborone,
      map: map,
    });
  }
  
  window.initMap = initMap;