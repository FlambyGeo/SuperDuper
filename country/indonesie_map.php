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
      #mapIndonesia {
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



        <div id="map" class="tabcontent" id="defaultOpen">

        <select name="carte" id="carte">
            <option value="kab">Kabupaten</option>
            <option value="pk">Poste Kode</option>
            <option value="ac3">Téléphone 3 numéros</option>
            <option value="ac4">Téléphone 4 numéros</option>
        </select>
        <button onclick="loadMap();">VALIDER</button>
            
            <div id="mapIndonesia"></div>

        </div>
        


    </div>

    <!----------------------------------------------------------------------------- TABS ----------------------------------------------------------------------------->
                
                <script>
  document.getElementById("defaultOpen").click();
                    
function openTab(evt, cityName) {
  // Declare all variables
  var i, tabcontent, tablinks;

  // Get all elements with class="tabcontent" and hide them
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }

  // Get all elements with class="tablinks" and remove the class "active"
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }

  // Show the current tab, and add an "active" class to the button that opened the tab
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " active";                                                                              
} 
</script>   


<!---------------------------------------------------------------------------------MAP----------------------------------------------------------------------------------->
<script>
      var mapI;
      var geoJSONLayer;
      var geoJSON;
      var legend = L.control({position: 'bottomright'});  
      var tooltipThreshold = 8;    
      var geoLayer;  
      var info;                                              
      drawMapI();
      loadMap();
     
      function loadMap(){
        var select = document.getElementById('carte');
        var selectedValue = select.options[select.selectedIndex].value;
        

        //clear the layers
        if (geoLayer != undefined) {mapI.removeLayer(geoLayer);};
        
        if (info != undefined) { info.remove(); }
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
        loadJSON(selectedValue);

      }

      async function loadJSON(choice) {

        if (choice == "kab"){
            tooltipThreshold = 8; 
            const response = await fetch('/geojson/indonesia_kabupaten_final.geojson');
            const json = await response.json();
            info.addTo(mapI);
            geoLayer = L.geoJSON(json, { onEachFeature: function (feature, layer) {
            layer.bindTooltip(feature.properties.NAME_2, {direction:"center", permanent:true, className: 'labelstyle'});
            layer.on({ mouseover: highlightFeature, mouseout: resetHighlight });
          }}
            ); 
            geoLayer.addTo(mapI);
            
        }

        if (choice == "pk"){
            tooltipThreshold = 3; 
            const response = await fetch('/geojson/indonesia_postkode2.geojson');
            const json = await response.json();
            geoLayer = L.geoJSON(json, { onEachFeature: function (feature, layer) {
            layer.bindTooltip(feature.properties.PostKode, {direction:"center", permanent:true, className: 'labelstyle'});
            layer.on({ mouseover: highlightFeature, mouseout: resetHighlight });
          }}
            ); 
            geoLayer.addTo(mapI);
        }

        if (choice == "ac3"){
            tooltipThreshold = 4; 
            const response = await fetch('/geojson/indonesia_areacode3_final.geojson');
            const json = await response.json();
            geoLayer = L.geoJSON(json, { onEachFeature: function (feature, layer) {
            layer.bindTooltip(feature.properties.AreaCode3, {direction:"center", permanent:true, className: 'labelstyle'});
            layer.on({ mouseover: highlightFeature, mouseout: resetHighlight });
          }}
            ); 
            geoLayer.addTo(mapI);
        }
    
        if (choice == "ac4"){
            tooltipThreshold = 6; 
            const response = await fetch('/geojson/indonesia_areacode4_final.geojson');
            const json = await response.json();
            geoLayer = L.geoJSON(json, { onEachFeature: function (feature, layer) {
            layer.bindTooltip(feature.properties.AreaCode4, {direction:"center", permanent:true, className: 'labelstyle'});
            layer.on({ mouseover: highlightFeature, mouseout: resetHighlight });
          }}
            ); 
            geoLayer.addTo(mapI);
        }
    
    }
        //var geoparsed= JSON.parse(geoJSON);
        

         

        //faire apparaitre/disparaitre les tooltip (kabupaten) en fonction du zoom.
        var lastZoom;

mapI.on('zoomend', function() {
    var zoom = mapI.getZoom();
    if (zoom < tooltipThreshold && (!lastZoom || lastZoom >= tooltipThreshold)) {
        mapI.getPane('tooltipPane').style.display = 'none';
    } else if (zoom >= tooltipThreshold && (!lastZoom || lastZoom < tooltipThreshold)) { 
        mapI.getPane('tooltipPane').style.display = 'block';
    }
    lastZoom = zoom;
});

                       
      function drawMapI() {
        mapI = L.map("mapIndonesia", {minZoom: 5, maxZoom : 10}).setView([-3, 116], 4);
        const attribution =
          '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors';
        const tileUrl = "https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png";
        const tiles = L.tileLayer(tileUrl, { attribution });
        tiles.addTo(mapI);
      }
                                                                            
      /*async function getgeoJSON(data) {
  
        fetch('/geojson/indonesia_kabupaten.json').then(function(response) {
            if(response.ok) {
                response.json().then(function(response) {
                 data = response;
                });
                } else {
                console.log('Mauvaise réponse du réseau');
            }
            })
            .catch(function(error) {
                console.log('Il y a eu un problème avec l\'opération fetch: ' + error.message);
            });


      }  */                                                                  
                                                                            
    /*function updategeojson(data) {
        if (geoJSONLayer) {
          geoJSONLayer.clearLayers();
        }
        window.mapI.addLayer(geoJSONLayer);
      }*/
                                                                            
                                                                            
     function style(feature) {
        return {
          fillColor: getcolor(feature.properties.averageScore),
          weight: 2,
          opacity: 1,
          color: "white",
          dashArray: "3",
          fillOpacity: 0.7
        };
      }                                                                      
                                                                            


      function highlightFeature(e) {
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

        var select = document.getElementById('carte');
        var choice = select.options[select.selectedIndex].value;
        if (choice == "kab") { info.update(layer.feature.properties);}
      }

      function resetHighlight(e) {
        geoLayer.resetStyle(e.target);

        var select = document.getElementById('carte');
        var choice = select.options[select.selectedIndex].value;
        if (choice == "kab") { info.update(null); }
      }

      /*function onEachFeature(feature, layer) {
        //console.log(feature.properties.averageScore);
        var str = feature.properties.ADMIN + ": ";
        str +=   feature.properties.count + " rounds <br>";
        str +=  "avg score : " + Math.round(feature.properties.averageScore) + "<br>";
        //str +=  "avg distance : " + showDistance(feature.properties.averageDistanceInMeters);
        str += "avg time : " + showTime(feature.properties.averageTime) + "<br>";
        layer.bindPopup(
              str
        );
      }*/
                       
                       
      legend.onAdd = function (mapC) {

    var div = L.DomUtil.create('div', 'info legend');
        grades = [0,1000,2000,3000,4000,4500,5000];
        labels = [];
        div.innerHTML = "Average Score <br>";
    // loop through our density intervals and generate a label with a colored square for each interval
    for (var i = 0; i < grades.length-1; i++) {
        var str =  '<i style="background:' + getcolor(grades[i] + 1) + '"></i> ' + grades[i] + '&ndash;' + grades[i + 1] + '<br>';                    
      div.innerHTML += str;
    }
div.innerHTML += '<i style="background:' + getcolor(5000) + '"></i> ' + "5000" + '<br>'; 
    return div;
};   
   // legend.addTo(mapC);
    </script>


</body>

</html>



