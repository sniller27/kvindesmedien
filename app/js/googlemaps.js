function initialize() {
    var position = new google.maps.LatLng(55.674270, 12.600858);
    var myOptions = {
      zoom: 16,
    scrollwheel: false,
    navigationControl: false,
    mapTypeControl: false,
    scaleControl: false,
    draggable: false,
      center: position,
      mapTypeId: google.maps.MapTypeId.ROADMAP
    };
    var map = new google.maps.Map(
        document.getElementById("map_canvas"),
        myOptions);
 
    var marker = new google.maps.Marker({
        position: position,
        map: map,
        title:"Kvindesmedien"
    });  
 
    var contentString = 'Kvindesmedien Aps <br> Mælkevejen 83 E, 1440 København';
    var infowindow = new google.maps.InfoWindow({
        content: contentString
    });
 
//    google.maps.event.addListener(marker, 'click', function() {
      infowindow.open(map,marker);
//    });
 
  }