

// Fonction d'initialisation de la carte

function initMap()
{
  var myLatLng = {lat:  46.162733, lng:  -1.202464};

  var map = new google.maps.Map(document.getElementById('mapp'), {
    zoom: 15,
    center: myLatLng,
	gestureHandling: 'greedy'
	// scrollwheel: false,
	// zoomControl: true
	// disableDefaultUI: true
  });


	// var marker = new google.maps.Marker({
    // position: myLatLng,
    // map: map,
    // title: 'Plebiscit'});


   textmarker = new google.maps.Marker({
      position: map.getCenter(),
      map: map,
      visible: false
  	});

  var infowindow = new google.maps.InfoWindow({
    	content: "Plebiscit"
		});
    // infowindow.open(map, textmarker);


	map.addListener('click', function(e) {
    placeMarker(e.latLng, map);
	});

    var contentString =
        '<p>test</p>';

    var infowindow = new google.maps.InfoWindow({
        content: contentString
    });


}
window.onload = function()
{
	// Fonction d'initialisation qui s'exécute lorsque le DOM est chargé
	initMap();
};


function placeMarker(position, map) 
{
    var marker = new google.maps.Marker({
        position: position,
        map: map
    });
	if(marker != null) 
	{
	map.panTo(position);
	}
	else
	{
    // markers[].setMap(null);
	}
}