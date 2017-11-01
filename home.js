        function initMap() {
            var paris = {
                lat: 48.8584,
                lng: 2.2945
            };


            var map = new google.maps.Map(document.getElementById('map'), {
                zoom: 13,
                center: paris
            });


            var marker = new google.maps.Marker({
                position: paris,
                map: map
            });

            google.maps.event.addListener(map, 'click', function (event) {
                placeMarker(map, event.latLng);



            });

            google.maps.event.addListener(map, 'dblclick', function (event) {
                setMapOnAll(null);

            });


            $.ajax({
                url: 'address.php',
                data: 'lat=' + latitude,
                success: function (reponse) {
                    alert(reponse);
                }
            });


        };
        var markers = [];

        function placeMarker(map, location) {
            var marker = new google.maps.Marker({
                position: location,
                map: map
            });
            var infowindow = new google.maps.InfoWindow({
                content: 'Latitude: ' + location.lat() + '<br>Longitude: ' + location.lng()
            });

            infowindow.open(map, marker);
            markers.push(marker);

        };

        function setMapOnAll(map) {
            for (var i = 0; i < markers.length; i++) {
                markers[i].setMap(map);
            }
        };

        /*  function downloadUrl("points.xml", callback) {
              var request = window.ActiveXObject ?
                  new ActiveXObject('Microsoft.XMLHTTP') :
                  new XMLHttpRequest;

              request.onreadystatechange = function () {
                  if (request.readyState == 4) {
                      request.onreadystatechange = doNothing;
                      callback(request, request.status);

                  }
              };

              request.open('GET', url, true);
              request.send(null);
          }*/
