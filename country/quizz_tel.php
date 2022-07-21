<html>
<head>
<title>Area Codes Quizz</title>
<link rel="stylesheet" href="../style.css">
<!------------------------------------------MAP---------------------------------------------------------> 
<link rel="stylesheet" href="/leaflet/leaflet.css"/>
<script src="/leaflet/leaflet-src.js"></script>
<script type="text/javascript" src="https://stamen-maps.a.ssl.fastly.net/js/tile.stamen.js?v1.3.0"></script>
<script src='https://api.mapbox.com/mapbox.js/plugins/leaflet-fullscreen/v1.0.1/Leaflet.fullscreen.min.js'></script>
<link href='https://api.mapbox.com/mapbox.js/plugins/leaflet-fullscreen/v1.0.1/leaflet.fullscreen.css' rel='stylesheet' />


<!------------------------------------------MAP STYLES--------------------------------------------------------->                                                                                        
<style>
      #mapCities {
        height: 800px;
        width: 1200px;
      }
    </style>

     <!------------------------------------------LEGEND STYLES--------------------------------------------------------->                                                                                        
                                                                                               
<style>
.infoQ {
    padding: 6px 8px;
    font: 12px/14px Arial, Helvetica, sans-serif;
    background: white;
    background: rgba(255,255,255,0.8);
    box-shadow: 0 0 15px rgba(0,0,0,0.2);
    border-radius: 5px;
}
.infoQ h2 {
    margin: 0 0 5px;
    font-size: 28px;
    color: #777;
}

.infoQ h3 {
    margin: 0 0 5px;
    font-size: 2Opx;
    color: #777;
}

.infoTimer {
    padding: 6px 8px;
    font: 12px/14px Arial, Helvetica, sans-serif;
    font-size: 28px;
    background: white;
    background: rgba(255,255,255,0.8);
    box-shadow: 0 0 15px rgba(0,0,0,0.2);
    border-radius: 5px;
}
.infoTimer h2 {
    margin: 0 0 5px;
    color: #777;
}

.infoError {
    padding: 6px 8px;
    font: 12px/14px Arial, Helvetica, sans-serif;
    font-size: 20px;
    background: white;
    background: rgba(255,255,255,0.8);
    box-shadow: 0 0 15px rgba(0,0,0,0.2);
    border-radius: 5px;
}
.infoError h3 {
    margin: 0 0 5px;
    color: #777;
}

.leaflet-popup-content-wrapper, .leaflet-popup.tip {
  background-color: "transparent";
}

</style>
<!--------------------------------------------OPTIONS - COLLAPSIBLE----------------------------------------------------------------->
<style>
 /* Style the button that is used to open and close the collapsible content */
 .collapsible {
  background-color: #eee;
  color: #444;
  cursor: pointer;
  padding: 18px;
  width: 100%;
  border: none;
  text-align: left;
  outline: none;
  font-size: 15px;
}

/* Add a background color to the button if it is clicked on (add the .active class with JS), and when you move the mouse over it (hover) */
.active, .collapsible:hover {
  background-color: #ccc;
}

/* Style the collapsible content. Note: hidden by default 
.content {
  padding: 0 18px;
  display: none;
  overflow: hidden;
  background-color: #f1f1f1;
} */

.options {
  padding: 0 18px;
  background-color: white;
  max-height: 0;
  overflow: hidden;
  transition: max-height 0.2s ease-out;
}
</style>
</head>
styleonclick


<body>
    <?php include '../sidebar.html'; ?>
    <div id="sidebar"></div>

    <div id="main" style="margin-left:10%">

        <div class="maintitle">
        Numéros de téléphone
        </div>    
        <div class="tab">
            
            <button class="tablinks" onclick="openTab(event, 'quizz')" id="defaultOpen">Map</button>
        </div>

        <!-- Tab content -->



        <div id="quizz" class="tabcontent" id="defaultOpen">

        <table><thead><tr><td>Pays</td><td>Style de carte</td><td>Timer</td><td>Label lieu</td><td>Label numéro</td></tr></thead>
        <tbody><tr>
        <td><select id="ddPays"></select></td>
        <td><select id="ddTiles">
        <option value="osm">OpenStreeMap</option>
        <option value="stamen">Stamen</option>
        <option value="esri">ESRI</option>
        <option value="cartodb">CartoDB</option>
        <option value="esrivide">ESRI vide</option>
        <option value="cartodbvide">CartoDB vide</option>
        <option value="stamenvide">Stamen vide</option>
        </select></td>
        <td><input id="htmlTimer" type="checkbox"></input></td>
        <td><input id="htmlLocation" type="checkbox"></input></td>
        <td><input id="htmlAreaCode" type="checkbox"></input></td>
        <td><button onclick="loadQuizz();">DEMARRER</button></td>
        <td><button onclick="loadLearn();">MODE APPRENTISSAGE</button></td>
        <td>La touche F permet d'activer/désactiver le plein ecran. Touche P pour passer.</td>
        </tr></tbody></table>
            
            <div id="mapCities"></div>
            <button type="button" class="collapsible">Options d'affichage</button>
        <div class="options">
            <table>
            <thead><tr><td></td><td>N° tel</td><td>Erreurs</td><td>Timer</td></tr></thead>
            <tbody><tr><td>Position</td>
            <td><select id="cityPos">  
            <option value="topcenter">Milieu Haut</option> 
          <option value="topleft">Haut Gauche</option>
          <option value="topright">Haut Droite</option>
          <option value="middleleft">Milieu Gauche</option>
          <option value="middleright">Milieu Droite</option>
          <option value="bottomleft">Bas Gauche</option>
          <option value="bottomcenter">Milieu Bas</option>
          <option value="bottomright">Bas Droite</option>
        </select></td>
            <td><select id="errorPos">  
            <option value="topright">Haut Droite</option> 
          <option value="topleft">Haut Gauche</option>
          <option value="topcenter">Milieu Haut</option>
          <option value="middleleft">Milieu Gauche</option>
          <option value="middleright">Milieu Droite</option>
          <option value="bottomleft">Bas Gauche</option>
          <option value="bottomcenter">Milieu Bas</option>
          <option value="bottomright">Bas Droite</option>
        </select></td>
        <td><select id="timerPos">  
        <option value="topright">Haut Droite</option>   
          <option value="topleft">Haut Gauche</option>
          <option value="topcenter">Milieu Haut</option>
          <option value="middleleft">Milieu Gauche</option>
          <option value="middleright">Milieu Droite</option>
          <option value="bottomleft">Bas Gauche</option>
          <option value="bottomcenter">Milieu Bas</option>
          <option value="bottomright">Bas Droite</option>
        </select></td>
            </tr>
        <!--<tr><td>Taille</td>
        <td><select id="citySize">   
          <option value="8">8</option>
          <option value="12">12</option>
          <option value="16">16</option>
          <option value="20">20</option>
          <option value="28">28</option>
          <option value="36">36</option>
        </select></td>
        <td><select id="scoreSize">   
          <option value="8">8</option>
          <option value="12">12</option>
          <option value="16">16</option>
          <option value="20">20</option>
          <option value="28">28</option>
          <option value="36">36</option>
        </select></td>
        <td><select id="timerSize">   
          <option value="8">8</option>
          <option value="12">12</option>
          <option value="16">16</option>
          <option value="20">20</option>
          <option value="28">28</option>
          <option value="36">36</option>
        </select></td>        
    </tr>
    <tr><td>Couleur</td>
        <td><select id="cityColor">   
          <option value="8">gris</option>
          <option value="12">noir</option>
          <option value="16">vert</option>
          <option value="20">bleu</option>
          <option value="28">rouge</option>
        </select></td>
        <td><select id="scoreColor">   
          <option value="8">gris</option>
          <option value="12">noir</option>
          <option value="16">vert</option>
          <option value="20">bleu</option>
          <option value="28">rouge</option>
        </select></td>
        <td><select id="timerColor">   
          <option value="8">gris</option>
          <option value="12">noir</option>
          <option value="16">vert</option>
          <option value="20">bleu</option>
          <option value="28">rouge</option>
        </select></td></tr>
        <tr><td>Background</td>
            <td><select id="cityBackground">   
          <option value="white">blanc</option>
          <option value="transparent">transparent</option>
          <option value="grey">gris</option>
        </select></td>
        <td><select id="scoreBackground">   
        <option value="white">blanc</option>
          <option value="transparent">transparent</option>
          <option value="grey">gris</option>
        </select></td>
        <td><select id="timerBackground">   
        <option value="white">blanc</option>
          <option value="transparent">transparent</option>
          <option value="grey">gris</option>
        </select></td></tr>-->
        
        </tbody>    
            </table>
            <!--<table><thead><tr><td>Taille de la carte</td><td>Afficher les marqueurs</td></tr></thead>
            <tbody><tr>
                <td><select id="mapSize">   
        <option value="white">blanc</option>cListselectedPays
          <option value="transparent">transparent</option>
          <option value="grey">gris</option>
        </select></td>
                <td><input id="htmlMarker" type="checkbox"></input></td>
            
            </tr></tbody>
            </table>-->
            <button onclick="updateOptions();">VALIDER</button>
        </div> 
       
      </div>
        


    </div>

    <!------------------------------------------TABS---------------------------------------------------------> 
 <script src="/tabs.js"></script> 
 <!----------------------------------------------MAP TILES-------------------------------------------------------------->
 <script src="/tiles.js"></script>  

<!----------------------------------------------------------------------------DROPDOWN---------------------------------------------------------------------------->
<script>
  var cList;
  var dd = document.getElementById('ddPays');
  dd.length = 0;

  var cList = [
    {country : "Belgique", geojson : "belgium_areacodes.geojson"},
    {country : "Cambodge", geojson : "cambodia_areacodes.geojson"},
    {country : "Canada", geojson : "canada_areacodes_final.geojson"},
    {country : "Malaisie 2 numéros", geojson : "malaysia_areacodes_2digits.geojson"},
    {country : "Malaisie 3 numéros", geojson : "malaysia_areacodes_3digits.geojson"},
    {country : "Russie 2 numéros", geojson : "russia_areacodes_2_latin.geojson"},
    {country : "Russie 3 numéros", geojson : "russia_areacodes_3_latin.geojson"},
    {country : "Россия 2 numéros", geojson : "russia_areacodes_2_cyr.geojson"},
    {country : "Россия 3 numéros", geojson : "russia_areacodes_3_cyr.geojson"},
    {country : "Suède", geojson : "sweden_areacodes.geojson"},
    {country : "Taïwan", geojson : "taiwan_areacodes.geojson"}, 
    {country : "Thaïlande", geojson : "thailand_areacodes_final.geojson"}

];
  showCountries();

function showCountries() {

        for (let i = 0; i < cList.length; i++) {
        option = document.createElement('option');
        option.text = cList[i].country;
        option.value = cList[i];
        dd.add(option);
        }
  
}





</script>

<!---------------------------------------------------------------------------------MAP----------------------------------------------------------------------------------->
<script>
      var mapCities;
      var geoJSONLayer;
      var geoJSON; 
      var tooltipThreshold = 8;    
      var geoLayer;  
      var quizzAnswer; 
      var cityAnswer;
      var quizzList;   
      var cityList;     
      var randomNumber;
      var layerList;
      var soundClick=new Audio("/sound/click.wav");
      var soundValid=new Audio("/sound/valid.wav");
      soundClick.volume = 0.2;
      soundValid.volume = 0.1;
      var selectPays = document.getElementById('ddPays');
      var selectTile = document.getElementById('ddTiles');
      var popupClick;
      var lGroup;
      var mapLine;
      var isOngoing = false;
      var infoQ;
      var infoError;
      var infoTimer;
      var intNumber = 0;
      var intNumberTotal = 0;
      var hasTimer = false;
      var intTimer = 0;
      var myTimer;
      var tilesOSM;
      var tilesStamen;
      var tilesStamenVide;
      var layerStamen;
      var blankLayer;
      var blankLayer2;
      var niceLayer;
      var Status = new Object();
      var startTime = new Date();
      var endTime = new Date();
      var intError =0;
      var intErrorTotal = 0;
      var hasLocation;
      var hasAreaCode;

      drawmapCities();
      mapCities.doubleClickZoom.disable();
      

        infoInit();
      

      function loadQuizz(){

        //var selectedPays = selectPays.options[selectPays.selectedIndex].value;
        var selectedPays = cList[selectPays.selectedIndex];
        var selectedTile = selectTile.options[selectTile.selectedIndex].value;
        hasTimer = document.getElementById('htmlTimer').checked;
        hasLocation = document.getElementById('htmlLocation').checked;
        hasAreaCode = document.getElementById('htmlAreaCode').checked;

        stopTimer();
        resetTimer();

        intNumber = 0;
        intError = 0;
        intErrorTotal = 0;

        Status = loadTiles(mapCities,Status.tiles,Status.layer,Status.mapType,selectedTile);

        loadJSON(selectedPays);
        //todo liste des reponses


 
            updateOptions();
            if (hasTimer) { startTimer(); startTime = Date.now();}
        };
        

                       
      function drawmapCities() {


        mapCities = L.map("mapCities", {minZoom: 2, maxZoom : 15, zoomControl: false}).setView([0,0], 4);
        Status = loadTiles(mapCities,Status.tiles,Status.layer,Status.mapType,"osm");
        
      }



      function onClick(e) { 
        var timeRound;

        if (isOngoing) {
            if ( e.target.feature.properties.AreaCode == quizzAnswer) {
                      soundClick.play();
                      quizzList.splice(randomNumber,1); //delete element
                      cityList.splice(randomNumber,1);
                      intNumber += 1;
                      e.target.setStyle({fillColor: errorColor(intError), fillOpacity: 0.7});
                      intError =0;
                      infoError.update();

                      if (hasLocation || hasAreaCode){
                        let str = "";
                        if (hasAreaCode) {str += e.target.feature.properties.AreaCode+" ";}
                        if (hasLocation) {str += e.target.feature.properties.City;}
                        e.target.bindTooltip(str,{permanent: true}).openTooltip();
                      }
                     

                      if (quizzList.length > 0) {
                              randomNumber =parseInt(Math.random() * quizzList.length);
                              quizzAnswer = quizzList[randomNumber];
                              cityAnswer = cityList[randomNumber];
                              infoQ.update(quizzAnswer,intNumber,intNumberTotal);                          
                          }
                      else {
                              if (hasTimer) { stopTimer();}
                              isOngoing=false;
                              infoQ.update("Quizz terminé",intNumberTotal,intNumberTotal); 
                      }
              }
              else
              { intError += 1; intErrorTotal += 1; infoError.update();}
            }    
          }
                                                                                                                                                      
                       


          async function loadJSON(oPays) {

              layerList = new Array();
              
              const response = await fetch('/geojson/'+oPays.geojson);
              const json = await response.json();
              intNumberTotal = json.features.length;
              quizzList = new Array();
              cityList = new Array();
              json.features.forEach (element => {quizzList.push(element.properties.AreaCode);cityList.push(element.properties.City);});
              if (geoLayer != undefined) { geoLayer.remove(mapCities);}
                                          geoLayer = L.geoJSON(json,
                                            { onEachFeature: function (feature, layer) {
                                              layerList[feature.properties.AreaCode] = layer;
                                              layer.on({click : function (e) {onClick(e);}});
                                              layer.setStyle({ fillColor: 'white', weight: 2, opacity: 1,color: 'black',fillOpacity: 0.1});
                                              
                                          }});
              geoLayer.addTo(mapCities);
              bestFitZoom();

            console.log(quizzList);
            randomNumber =parseInt(Math.random() * quizzList.length);
            quizzAnswer = quizzList[randomNumber];
            cityAnswer = cityList[randomNumber];
            infoQ.update(quizzAnswer,0,intNumberTotal);
            intError = 0;
            intErrorTotal = 0;
            infoError.update();
            isOngoing= true;


}


    function infoInit () {
        infoQ = L.control({ position: 'topleft' });
        infoQ.onAdd = function(mapCities) {
        this._div = L.DomUtil.create("div", "infoQ"); // create a div with a class "info"
        this.update();
        return this._div;
        };

      infoQ.update = function (str,int1,int2) {
        if (str == null){
          this._div.innerHTML ="";
        }
        else {
        this._div.innerHTML = '<h2>'+ str +'</h2>' +'<br><h3>('+int1+"/"+int2+')</h3>';
        }
        };
        infoQ.addTo(mapCities);
    
        infoTimer = L.control({ position: 'topleft' });
        infoTimer.onAdd = function(mapCities) {
        this._div = L.DomUtil.create("div", "infoTimer"); // create a div with a class "info"
        this.update();
        return this._div;
        };

        infoTimer.update = function (str) {
        if (str == null){
          this._div.innerHTML ="";
        }
        else {
        this._div.innerHTML = '<h2>'+ str +'</h2>';
        }
        };
        infoTimer.addTo(mapCities);
    

        infoError = L.control({ position: 'topleft' });
        infoError.onAdd = function(mapCities) {
        this._div = L.DomUtil.create("div", "infoError"); // create a div with a class "info"
        this.update();
        return this._div;
        };

      infoError.update = function () {
        if (intError == undefined || intErrorTotal == undefined) {this._div.innerHTML=""}
        else {this._div.innerHTML = '<h3>Erreurs : '+intError+' ('+intErrorTotal+')</h3>';}
        }

        infoError.addTo(mapCities);
    
    
    }

    function updateOptions(){
        var selectCityPos = document.getElementById('cityPos');
        var selectTimerPos = document.getElementById('timerPos');
        var selectErrorPos = document.getElementById('errorPos');

        var valueCityPos = selectCityPos.options[selectCityPos.selectedIndex].value;
        var valueTimerPos = selectTimerPos.options[selectTimerPos.selectedIndex].value;
        var valueErrorPos = selectErrorPos.options[selectErrorPos.selectedIndex].value;

        infoQ.setPosition(valueCityPos);
        infoTimer.setPosition(valueTimerPos);
        infoError.setPosition(valueErrorPos);




    }

    function startTimer() {
        intTimer = 0;
        myTimer = setInterval(addSecond, 1000);
        infoTimer.update("<h2>"+showTime(intTimer)+"</h2>");
    }
    function addSecond() {
        intTimer += 1;
        infoTimer.update("<h2>"+showTime(intTimer)+"</h2>");
    }
    function stopTimer() {
        clearInterval(myTimer);
    }
    function resetTimer() {
        intTimer = 0;
    }


    function showTime(value) {
    const sec = parseInt(value, 10); // convert value to number if it's string
    let hours   = Math.floor(sec / 3600); // get hours
    let minutes = Math.floor((sec - (hours * 3600)) / 60); // get minutes
    let seconds = sec - (hours * 3600) - (minutes * 60); //  get seconds
    // add 0 if value < 10; Example: 2 => 02
    if (hours   < 10) {hours   = "0"+hours;}
    if (minutes < 10) {minutes = "0"+minutes;}
    if (seconds < 10) {seconds = "0"+seconds;}
    if (hours == 0) { return minutes+':'+seconds; }
    else { return hours+':'+minutes+':'+seconds; }// Return is HH : MM : SS
}

    function errorColor(intE){
      
      if (intE == 0) { return "#00FF00";}
      else if (intE == 1) { return "#4CFF00";}
      else if (intE == 2) { return "#B2FF00";}
      else if (intE == 3) { return "#FFFF00";}
      else if (intE == 4) { return "#FFB200";}
      else if (intE == 5) { return "#FF4C00";}
      else { return "#FF0000";}

    }

    function bestFitZoom()
    {
        // declaring the group variable  
        var group = new L.featureGroup;

        group.addLayer(geoLayer);

         mapCities.fitBounds(group.getBounds());
    }

    async function loadLearn(){
 //var selectedPays = selectPays.options[selectPays.selectedIndex].value;
 var selectedPays = cList[selectPays.selectedIndex];
        var selectedTile = selectTile.options[selectTile.selectedIndex].value;


        stopTimer();
        resetTimer();

        intNumber = 0;
        intError = 0;
        intErrorTotal = 0;

        Status = loadTiles(mapCities,Status.tiles,Status.layer,Status.mapType,selectedTile);

      layerList = new Array();
              
              const response = await fetch('/geojson/'+selectedPays.geojson);
              const json = await response.json();
              intNumberTotal = json.features.length;
              quizzList = new Array();
              cityList = new Array();
              json.features.forEach (element => {quizzList.push(element.properties.AreaCode);cityList.push(element.properties.City);});
              if (geoLayer != undefined) { geoLayer.remove(mapCities);}
                                          geoLayer = L.geoJSON(json,
                                            { onEachFeature: function (feature, layer) {
                                              layerList[feature.properties.AreaCode] = layer;
                                              layer.bindTooltip(feature.properties.City+" "+feature.properties.AreaCode,{permanent: true}).openTooltip();
                                              layer.setStyle({ fillColor: 'green', weight: 2, opacity: 1,color: 'black',fillOpacity: 0.25});
                                              
                                          }});
              geoLayer.addTo(mapCities);
              bestFitZoom(); 

    }

    function skip(){
        soundClick.play();
                      quizzList.splice(randomNumber,1); //delete element
                      cityList.splice(randomNumber,1);
                      intNumber += 1;
                      layerList[quizzAnswer].setStyle({fillColor: errorColor(10), fillOpacity: 0.7});
                      intError =0;
                      intErrorTotal +=10;
                      infoError.update(intError);

                      if (hasLocation || hasAreaCode){
                        let str = "";
                        if (hasAreaCode) {str += quizzAnswer+" ";}
                        if (hasLocation) {str += cityAnswer;}
                        layerList[quizzAnswer].bindTooltip(str,{permanent: true}).openTooltip();
                      }
                      mapCities.fitBounds(layerList[quizzAnswer].getBounds());

                      if (quizzList.length > 0) {
                              randomNumber =parseInt(Math.random() * quizzList.length);
                              quizzAnswer = quizzList[randomNumber];
                              cityAnswer = cityList[randomNumber];
                              infoQ.update(quizzAnswer,intNumber,intNumberTotal);                          
                          }
                      else {
                              if (hasTimer) { stopTimer();}
                              isOngoing=false;
                              infoQ.update("",intNumberTotal,intNumberTotal); 
                      }
            

      }                    

</script>



<!------------------------------------------------------------COLLAPSIBLE------------------------------------------------------------------>
<script>
var coll = document.getElementsByClassName("collapsible");
var i;

for (i = 0; i < coll.length; i++) {
  coll[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var content = this.nextElementSibling;
    if (content.style.maxHeight){
      content.style.maxHeight = null;
    } else {
      content.style.maxHeight = content.scrollHeight + "px";
    }
  });
}
</script>

<script>
document.addEventListener('keydown', fScreen);
function fScreen(e){
if (e.key == "f" || e.key == "F") { mapCities.toggleFullscreen();}
if (isOngoing && (e.key == "p" || e.key == "P")) { skip();}
}
</script>




    


</body>

</html>



