<html>
<head>
<title>Indonesie</title>
<link rel="stylesheet" href="../style.css">
<!---------------------------------------------------------------------------------IMAGES------------------------------------------------------------------------------>
<script>
      // Get the img object using its Id
      var enlarged = false;
      // Function to increase image size
      function enlargeImg(imgId) {
        img = document.getElementById(imgId);

        if (img.style.transform == "scale(3)")  {enlarged = true;}
        else{enlarged = false;}

        if (enlarged) {
            img.style.transform ="scale(1)";
            img.style.zIndex = "0";
        }
        else
        {
        // Set image size to 1.5 times original
        img.style.transform ="scale(3)";
        img.style.zIndex = "50";
        img.style.position = "relative";
        // Animation effect 
        img.style.transition = "transform 0.25s ease";
        console.log("click");
        }
    }

    </script>
<!------------------------------------------MAP---------------------------------------------------------> 
<link rel="stylesheet" href="https://unpkg.com/leaflet@1.8.0/dist/leaflet.css" integrity="sha512-hoalWLoI8r4UszCkZ5kL8vayOGVae1oxXe/2A4AO6J9+580uKHDO3JdHb7NzwwzK5xr/Fs0W40kiNHxM9vyTtQ==" crossorigin=""/>
<script src="https://unpkg.com/leaflet@1.8.0/dist/leaflet.js" integrity="sha512-BB3hKbKWOc9Ez/TAwyWxNXeoV9c1v6FIeYiBieIWkpLjauysF18NzgR1MBNBXf8/KABdlkX68nAhlwcDFLGPCQ==" crossorigin=""></script>




 <!------------------------------------------MAIN FUNCTION--------------------------------------------------------->
 <script>
      var markerList;

      var info = L.control();

    </script>    
<!------------------------------------------MAP STYLES--------------------------------------------------------->                                                                                        
<style>
      #mapKabupaten {
        height: 800px;
        width: 1200px;
      }
    </style>
    <style>
      #mapCountries {
        height: 400px;
        width: 800px;
      }
    </style>
  <!------------------------------------------LEGEND STYLES--------------------------------------------------------->                                                                                        
                                                                                               
<style>
.info {
    padding: 6px 8px;
    font: 12px/14px Arial, Helvetica, sans-serif;
    background: white;
    background: rgba(255,255,255,0.8);
    box-shadow: 0 0 15px rgba(0,0,0,0.2);
    border-radius: 5px;
}
.info h4 {
    margin: 0 0 5px;
    color: #777;
}
 .legend {
    line-height: 14px;
    color: #555;
}
.legend i {
    width: 14px;
    height: 14px;
    float: left;
    margin-right: 8px;
    opacity: 0.7;
}                                      
</style>
</head>



<body>
    <?php include '../sidebar.html'; ?>
    <div id="sidebar"></div>

    <div id="main" style="margin-left:10%">

        <div class="maintitle">
        Indonesie
        </div>    
        <div class="tab">
            
            <button class="tablinks" onclick="openTab(event, 'map')" id="defaultOpen">Map</button>
        </div>

        <!-- Tab content -->




            
            <div id="mapKabupaten"></div>

        </div>
        


    </div>
  


<!---------------------------------------------------------------------------------MAPK----------------------------------------------------------------------------------->
<script>
      var mapK;
      var geoJSONLayerK;
      var geoJSONK; 
      var tooltipThresholdK = 6;    
      var geoLayerK;  
      var info;                                              
      drawMapK();
      loadMapK();
     
      function loadMapK(){

        info = L.control();
        info.onAdd = function(mapC) {
        this._div = L.DomUtil.create("div", "info"); // create a div with a class "info"
        this.update();
        return this._div;
      };

      info.update = function (props) {
        if (props == null){
          this._div.innerHTML ="";
        }
        else {
    this._div.innerHTML = '<h4>Kabupaten : </h4>' + '<b>' + props.NAME_2 + '</b><br /><h4>Phone Code :</h4>' + props.AreaCode4 + '</b><br /><h4>Poste Kode:</h4>' + props.PostKode;
        }
};
        
        //load the new json
        loadJSONK();

      }

      async function loadJSONK() {
            const response = await fetch('/geojson/indonesia_kabupaten_final.geojson');
            const json = await response.json();
            info.addTo(mapK);
            geoLayerK = L.geoJSON(json, { onEachFeature: function (feature, layer) {
            layer.bindTooltip(feature.properties.NAME_2, {direction:"center", permanent:true, className: 'labelstyle'});
            layer.on({ mouseover: highlightFeatureK, mouseout: resetHighlightK });
          }}
            ); 
            geoLayerK.addTo(mapK);
        }

        //faire apparaitre/disparaitre les tooltip (kabupaten) en fonction du zoom.
        var lastZoom;

mapK.on('zoomend', function() {
    var zoom = mapK.getZoom();
    if (zoom < tooltipThresholdK && (!lastZoom || lastZoom >= tooltipThresholdK)) {
        mapK.getPane('tooltipPane').style.display = 'none';
    } else if (zoom >= tooltipThresholdK && (!lastZoom || lastZoom < tooltipThresholdK)) { 
        mapK.getPane('tooltipPane').style.display = 'block';
    }
    lastZoom = zoom;
});

                       
      function drawMapK() {
        mapK = L.map("mapKabupaten", {minZoom: 5, maxZoom : 10}).setView([-3, 116], 4);
        const attribution =
          '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors';
        const tileUrl = "https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png";
        const tiles = L.tileLayer(tileUrl, { attribution });
        tiles.addTo(mapK);
      }
                                                                                                                                                                             
                                                                            


      function highlightFeatureK(e) {
        var layer = e.target;

        layer.setStyle({
          weight: 5,
          color: "#fffb00",
          dashArray: "",
          fillOpacity: 0.5
        });

        if (!L.Browser.ie && !L.Browser.opera && !L.Browser.edge) {
          layer.bringToFront();
        }
            info.update(layer.feature.properties);
      }

      function resetHighlightK(e) {
        geoLayerK.resetStyle(e.target);
        info.update(null);
      }

    </script>


</body>

</html>



