 var myCenter=new google.maps.LatLng(30.249796, -97.754667);
    function initialize()
    {
        var mapProp = {
          center:myCenter,
          scrollwheel: false,
          zoom:15,
          mapTypeId:google.maps.MapTypeId.ROADMAP
          };
        var map=new google.maps.Map(document.getElementById("co-google-map"),mapProp);
        var marker=new google.maps.Marker({
          position:myCenter,
            animation:google.maps.Animation.BOUNCE,
          icon:'',
            map: map,
          });
        var styles = [
          {
            stylers: [
              { hue: "#4481eb" },
            ]
          },
        ];
        map.setOptions({styles: styles});
        marker.setMap(map);
    }
    google.maps.event.addDomListener(window, 'load', initialize);