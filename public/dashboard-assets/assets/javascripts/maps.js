
var geocoder;
  var map;
  function initMap()  {
    geocoder = new google.maps.Geocoder();
    var latlng = new google.maps.LatLng(23.634501, -102.5527839997);
    var mapOptions = {
      zoom: 5,
      center: latlng,
      styles:
      [
    {
        "featureType": "landscape",
        "stylers": [
            {
                "hue": "#FFBB00"
            },
            {
                "saturation": 43.400000000000006
            },
            {
                "lightness": 37.599999999999994
            },
            {
                "gamma": 1
            }
        ]
    },
    {
        "featureType": "road.highway",
        "stylers": [
            {
                "hue": "#FFC200"
            },
            {
                "saturation": -61.8
            },
            {
                "lightness": 45.599999999999994
            },
            {
                "gamma": 1
            }
        ]
    },
    {
        "featureType": "road.arterial",
        "stylers": [
            {
                "hue": "#FF0300"
            },
            {
                "saturation": -100
            },
            {
                "lightness": 51.19999999999999
            },
            {
                "gamma": 1
            }
        ]
    },
    {
        "featureType": "road.local",
        "stylers": [
            {
                "hue": "#FF0300"
            },
            {
                "saturation": -100
            },
            {
                "lightness": 52
            },
            {
                "gamma": 1
            }
        ]
    },
    {
        "featureType": "water",
        "stylers": [
            {
                "hue": "#0078FF"
            },
            {
                "saturation": -13.200000000000003
            },
            {
                "lightness": 2.4000000000000057
            },
            {
                "gamma": 1
            }
        ]
    },
    {
        "featureType": "poi",
        "stylers": [
            {
                "hue": "#00FF6A"
            },
            {
                "saturation": -1.0989010989011234
            },
            {
                "lightness": 11.200000000000017
            },
            {
                "gamma": 1
            }
        ]
    }
]

    }
    map = new google.maps.Map(document.getElementById("map"), mapOptions);

     my_marker = new google.maps.Marker({
        map: map
        //,position: new google.maps.LatLng(-34.397, 150.644)
    });
  }

  function codeAddress() {
     var address = document.getElementById("address").value;
 	if(address.length)
 	{
     geocoder.geocode( { 'address': address}, function(results, status) {
       if (status == google.maps.GeocoderStatus.OK) {
         map.setCenter(results[0].geometry.location);
 		mylatlong = new google.maps.LatLng(results[0].geometry.location.lat(), results[0].geometry.location.lng());
 		console.log(mylatlong);
 		my_marker.setPosition(mylatlong);
 		$('.lat_val').val(results[0].geometry.location.lat());
 		$('.lng_val').val(results[0].geometry.location.lng());
 		map.setZoom(16); /* ajustar el zoom del mapa cuando ejecutas la busqueda*/
       } else {
         alert("Geocode was not successful for the following reason: " + status);
       }
     });
 	}else
 		alert('no hay datos intenta de nuevo');

   }
