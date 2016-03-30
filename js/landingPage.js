
var myCenter=new google.maps.LatLng(27.423438, 92.526712);
function initialize() {
  var mapProp = {
  center:myCenter,
  zoom:2,
  mapTypeId:google.maps.MapTypeId.ROADMAP
  };

var map=new google.maps.Map(document.getElementById("googleMap"),mapProp);
/*var marker = []
marker[0]=new google.maps.Marker({
  position:new google.maps.LatLng(35.703982, 51.391009),
  
  });

marker[0].setMap(map);*/
var locations = [
		[32.703982, 51.391009],//tehran
		[32.659899, 51.656119],//esfehan
		[29.607610, 52.542621],//shiraz
		[36.304181, 59.595286],//Mashhad
		[38.086230, 46.292345],//Tabriz
		[27.201468, 56.314107],//Bandar abas
		[26.801582, 55.890543],//Qeshm
		[-8.344295, 115.096111],//Bali
		[3.137115, 101.685479],//KL
		[5.382017, 100.265364],//Pinang
		[1.497623, 103.649557],//Johor
		[6.373210, 99.785849],//Langkawi
		[5.219171, 103.265267],//Kapas
		[1.357974, 103.816797],//singapor
		[39.912218, 116.396055],//beijing
		[9.939600, 76.266946]//Kochi
	]

	locations.forEach(function(entry) {
    	var marker=new google.maps.Marker({
  		position:new google.maps.LatLng(entry[0],entry[1]),  
  		});
  		marker.setMap(map);
	});
}
google.maps.event.addDomListener(window, 'load', initialize);