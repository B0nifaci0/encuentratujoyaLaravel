
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
        map: map,
        draggable: true,
        animation: google.maps.Animation.DROP,
        position: new google.maps.LatLng(-34.397, 150.644)
    });
  }

  function codeAddress() {
     var address = document.getElementById("address").value;
 	if(address.length)
 	{
     geocoder.geocode( { 'address': address,
     componentRestrictions: {
       country: 'MX'
     }}, function(results, status) {
       if (status == google.maps.GeocoderStatus.OK) {
         map.setCenter(results[0].geometry.location);
     		mylatlong = new google.maps.LatLng(results[0].geometry.location.lat(), results[0].geometry.location.lng());
     		console.log(mylatlong);
     		my_marker.setPosition(mylatlong);
        my_marker.addListener('dragend', function(event){
          console.log("Lat" + event.latLng.lat());
          console.log("Lng" + event.latLng.lng())
          $('.lat_val').val(event.latLng.lat());
       		$('.lng_val').val(event.latLng.lng());
        });
        //console.log(results[0]);
     		$('.lat_val').val(results[0].geometry.location.lat());
     		$('.lng_val').val(results[0].geometry.location.lng());
     		map.setZoom(16); /* ajustar el zoom del mapa cuando ejecutas la busqueda*/

        address = address.replace(/ /g,"+");

        $.ajax({
          url: 'https://maps.googleapis.com/maps/api/geocode/json?address='+ address +'&components=country:MX',
          type: 'GET',
          dataType : 'json',
          success : function(json) {
             // alert('https://maps.googleapis.com/maps/api/geocode/json?address='+ address +'&components=country:MX')
            var state = getState(results[0].address_components);
            if (state) {
              $("#state").val(state);
            }
          },
          error : function(xhr, status) {
            alert('Disculpe, existió un problema');
          }
        });

       } else {
         alert("Geocode was not successful for the following reason: " + status);
       }
     });
 	}else
 		alert('no hay datos intenta de nuevo');

   }

   function getState(address_components) {
      //alert(address_components.length)
      if (address_components.length == 0) {
        alert("La dirección no se ha encontrado")
        return false;
      }

      if (address_components.length < 3) {
        alert("Introduzca una dirección más especifica")
        return false;
      }
      var state;
      address_components.forEach(function(item, index){
        if (item.types[0] == "administrative_area_level_1") {
          console.log(index + "-->" + item.long_name);
          state = item.long_name;
        }
      });
      return state;
   }
