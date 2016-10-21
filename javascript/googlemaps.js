      function initMap() {
        var uluru = {lat: 53.351, lng: -3.022};
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 8,
          center: uluru,
          streetViewControl: false
        });

        var marker = new google.maps.Marker({
          position: uluru,
          map: map
        });
      }