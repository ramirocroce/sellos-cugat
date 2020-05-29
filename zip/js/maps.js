// JavaScript Document

    function initialize() {
      if (GBrowserIsCompatible()) {
        var map = new GMap2(document.getElementById("map_canvas"));
        map.setCenter(new GLatLng(-34.607339,-58.383923), 15);   
      
        var iconoMarca = new GIcon(G_DEFAULT_ICON);
        iconoMarca.image = "../images/stamp.png";
        var tamanoIcono = new GSize(25,32);
        iconoMarca.iconSize = tamanoIcono;
        iconoMarca.shadow = "../images/shadow-stamp.png"; 
        var tamanoSombra = new GSize(42,32);
        iconoMarca.shadowSize = tamanoSombra;
   
        var point = new GPoint (-58.383923, -34.607339);
        var marker = new GMarker(point, iconoMarca);
         map.addOverlay(marker); 
		
      }
    }