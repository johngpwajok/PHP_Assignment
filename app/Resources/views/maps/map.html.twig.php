<!DOCTYPE html>
<html>

<head>
    <title>Map</title>
    <meta name="viewport" content="initial-scale=1.0">
    <meta charset="utf-8">

    <!-- style for application-->
    <style>
        #map {
            z-index:  0;
            height: 50%;
            width: 80%;
            margin-left: 5%;
            margin-right: 5%;
          }
        /*To fill the window. */
          html, body {
            height: 100%;
            margin: 0;
            padding: 0;
          }
    
          #search{
            margin-right: 5%
          }
    </style>

    <!-- js configuration-->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCbv9yX4ZyQtv6hG7Eh09fzBO5g6z-wnRc&callback=initMap" async defer></script>
    <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false&v=3&libraries=geometry"></script>
    <script>
        var map;
        var marker;
        var marker2;
          function initMap() {


              var myCenter = new google.maps.LatLng(65.0121,25.4651);
              var location2 = new google.maps.LatLng(64.8373,25.1865);
              var mapCanvas = document.getElementById("map");
              var mapOptions = {center: myCenter, zoom: 8};
              var map = new google.maps.Map(mapCanvas, mapOptions);
              marker = new google.maps.Marker({position:myCenter, title: myCenter});
              marker.setMap(map);
              marker2 = new google.maps.Marker({position:location2});
              marker2.setMap(map);
              document.getElementById('currentLocation').innerHTML += '<p>'+myCenter+'</p>';
              document.getElementById('destination').innerHTML += '<p>'+location2+'</p>';
    
    
             console.log("HELLO WORLD");
             var distance = google.maps.geometry.spherical.computeDistanceBetween(myCenter, location2);
             document.getElementById('theDistance').innerHTML += '<p>'+Math.round(distance/1000)+'km</p>';
             //var getDistance = google.maps.geometry.spherical.computeDistanceBetween(myCenter, location2);
             //alert('distance:' +math.round(getDistance/1000)+'km');

          marker.addListener('click', function() {
            alert("Hello");
            this.setIcon('http://maps.google.com/mapfiles/ms/icons/green-dot.png');

        });

           marker2.addListener('click', function() {
            alert("Hello");
            this.setIcon('http://maps.google.com/mapfiles/ms/icons/green-dot.png');

        });

    }

          var plugin = plugin;
    </script>


    <!--html for application-->
</head>

<body>

    <div id="map"></div><br>

    <div id="currentLocation">Current location: </div>
    <div id="destination">Destination: </div>
    <div id="theDistance">Distance: </div>
    <button id="colour" onclick="changeColour()">Change Marker Colour</button>
    <button id="shape" onclick="changeShape()">Change Marker shape</button>
    <!-- Search field for location-->
    <div id="search">
        <form id="searchBar" method="POST" action="{{ path('geo_code_address') }}">
            Location: <input type="text" name="userLocation" placeholder="Please enter location here">
            <input type="submit" value="Search">
        </form>
    </div>


</body>

</html>