<html>
<head>
<title>Cities Quizz</title>
<link rel="stylesheet" href="../style.css">
<!------------------------------------------MAP---------------------------------------------------------> 
<link rel="stylesheet" href="/leaflet/leaflet.css"/>
<script src="/leaflet/leaflet-src.js"></script>
<script type="text/javascript" src="https://stamen-maps.a.ssl.fastly.net/js/tile.stamen.js?v1.3.0"></script>
<script src='https://api.mapbox.com/mapbox.js/plugins/leaflet-fullscreen/v1.0.1/Leaflet.fullscreen.min.js'></script>
<link href='https://api.mapbox.com/mapbox.js/plugins/leaflet-fullscreen/v1.0.1/leaflet.fullscreen.css' rel='stylesheet' />


<script>

  var scoreTotal = 0;

  function distance(lat1,lng1,lat2,lng2) {
const R = 6371; // kmetres
const φ1 = lat1 * Math.PI/180; // φ, λ in radians
const φ2 = lat2 * Math.PI/180;
const Δφ = (lat2-lat1) * Math.PI/180;
const Δλ = (lng2-lng1) * Math.PI/180;

const a = Math.sin(Δφ/2) * Math.sin(Δφ/2) +
          Math.cos(φ1) * Math.cos(φ2) *
          Math.sin(Δλ/2) * Math.sin(Δλ/2);
const c = 2 * Math.atan2(Math.sqrt(a), Math.sqrt(1-a));

const d = R * c;
return Math.round(d);
}

function score(d,t) {

  var result = 1000;

   var scoreDistance = d - 15;
   var scoreTime = t - 15;

    if (scoreDistance > 0)  {result -= scoreDistance;}
    if (scoreTime > 0) {result -= (5*scoreTime);}
    if (result < 0) { result = 0; }
return Math.round(result);
}

function markerColor(intScore){

    if (intScore == 950) { return "#0000FF";}
    else if (intScore > 950) { return "#00FF00";}
    else if (intScore > 900) { return "#00FF00";}
    else if (intScore > 850) { return "#19FF00";}
    else if (intScore > 800) { return "#33FF00";}
    else if (intScore > 750) { return "#4CFF00";}
    else if (intScore > 700) { return "#66FF00";}
    else if (intScore > 650) { return "#7FFF00";}
    else if (intScore > 600) { return "#99FF00";}
    else if (intScore > 550) { return "#B2FF00";}
    else if (intScore > 500) { return "#CCFF00";}
    else if (intScore > 450) { return "#E5FF00";}
    else if (intScore > 400) { return "#FFFF00";}
    else if (intScore > 350) { return "#FFE500";}
    else if (intScore > 300) { return "#FFCC00";}
    else if (intScore > 250) { return "#FFB200";}
    else if (intScore > 200) { return "#FF9900";}
    else if (intScore > 150) { return "#FF7F00";}
    else if (intScore > 100) { return "#FF6600";}
    else if (intScore > 50) { return "#FF4C00";}
    else  { return "#FF0000";}



}
</script>

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

.infoScore {
    padding: 6px 8px;
    font-size: 28px;
    font: 12px/14px Arial, Helvetica, sans-serif;
    background: white;
    background: rgba(255,255,255,0.8);
    box-shadow: 0 0 15px rgba(0,0,0,0.2);
    border-radius: 5px;
}
.infoScore h2 {
    margin: 0 0 5px;
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



<body>
    <?php include '../sidebar_en.html'; ?>
    <div id="sidebar_en"></div>

    <div id="main" style="margin-left:10%">

        <div class="maintitle">
        Cities
        </div>    
        <div class="tab">
            
            <button class="tablinks" onclick="openTab(event, 'quizz')" id="defaultOpen">Map</button>
        </div>

        <!-- Tab content -->



        <div id="quizz" class="tabcontent" id="defaultOpen">

        <table><thead><tr><td>Country</td><td>Cities</td><td>Map Style</td><td>Timer</td><td></td></tr></thead>
        <tbody><tr>
        <td><select id="ddPays"></select></td>
        
        <td><select id="ddNumber">
          <option value="10">top 10</option>
          <option value="20">top 20</option>
          <option value="30">top 30</option>
          <option value="50">top 50</option>
          <option value="75">top 75</option>
          <option value="100">top 100</option>
          <option value="150">top 150</option>
          <option value="200">top 200</option>
          <option value="250">top 250</option>
          <option value="500">top 500</option>
          <option value="c100">50-100</option>
          <option value="c150">100-150</option>
          <option value="c200">150-200</option>
          <option value="c250">200-250</option>
          <option value="c300">250-300</option>
          <option value="c350">300-350</option>
          <option value="c400">350-400</option>
          <option value="c450">400-450</option>
          <option value="c500">450-500</option>
        </select></td>
        <td><select id="ddTiles">
        <option value="osm">OpenStreeMap</option>
        <option value="stamen">Stamen</option>
        <option value="stamenvide">Stamen vide</option>
        </select></td>
        <td><input id="htmlTimer" type="checkbox"></input></td>
        <td><button onclick="loadQuizz();">START</button></td>
        <td>F key for full screen mode on/off.</td>
        </tr></tbody></table>
            
            <div id="mapCities"></div>
            <button type="button" class="collapsible">Options</button>
        <div class="options">
            <table>
            <thead><tr><td></td><td>City</td><td>Score</td><td>Timer</td></tr></thead>
            <tbody><tr><td>Position</td>
            <td><select id="cityPos">  
            <option value="topcenter">Top Center</option> 
          <option value="topleft">Top Left</option>
          <option value="topright">Top Right</option>
          <option value="middleleft">Middle Left</option>
          <option value="middleright">Middle Right</option>
          <option value="bottomleft">Bottom Left</option>
          <option value="bottomcenter">Bottom Center</option>
          <option value="bottomright">Bottom Right</option>
        </select></td>
            <td><select id="scorePos">  
            <option value="topright">Top Right</option> 
          <option value="topleft">Top Left</option>
          <option value="topcenter">Top Center</option>
          <option value="middleleft">Middle Left</option>
          <option value="middleright">Middle Right</option>
          <option value="bottomleft">Bottom Left</option>
          <option value="bottomcenter">Bottom Center</option>
          <option value="bottomright">Bottom Right</option>
        </select></td>
        <td><select id="timerPos">  
        <option value="topright">Top Right</option> 
          <option value="topleft">Top Left</option>
          <option value="topcenter">Top Center</option>
          <option value="middleleft">Middle Left</option>
          <option value="middleright">Middle Right</option>
          <option value="bottomleft">Bottom Left</option>
          <option value="bottomcenter">Bottom Center</option>
          <option value="bottomright">Bottom Right</option>
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
        <option value="white">blanc</option>
          <option value="transparent">transparent</option>
          <option value="grey">gris</option>
        </select></td>
                <td><input id="htmlMarker" type="checkbox"></input></td>
            
            </tr></tbody>
            </table>-->
            <button onclick="updateOptions();">VALIDER</button>
        </div> 
            <div>
                <table class="alpha">
                  <thead><tr><th>Ville</th><th>Score</th><th>Temps</th></tr></thead>
                  <tbody id="tableScore"></tbody>

                </table>

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
  var tScore = document.getElementById('tableScore');
  showCountries();

function showCountries() {
    var query ="countrylist2"
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        var res = this.responseText;
        cList = JSON.parse(res);
        for (let i = 0; i < cList.length; i++) {
        option = document.createElement('option');
        option.text = cList[i].country + " (" + cList[i][1] + ")" ;
        option.value = cList[i].country;
        dd.add(option);
    }
      }
    };
    xmlhttp.open("GET","/sqldatabase.php?query="+query+"&country=''&number=0",true);
    xmlhttp.send();
  
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
      var quizzList;        
      var randomNumber;
      var layerList;
      var soundClick=new Audio("/sound/click.wav");
      var soundValid=new Audio("/sound/valid.wav");
      soundClick.volume = 0.2;
      soundValid.volume = 0.1;
      var selectPays = document.getElementById('ddPays');
      var selectNumber = document.getElementById('ddNumber');
      var selectTile = document.getElementById('ddTiles');
      var popupClick;
      var lGroup;
      var mapLine;
      var isOngoing = false;
      var infoQ;
      var infoScore;
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
      //var optionShowScore = true;
      //var optionShowTimer = true;
      //var optionShowProgress = true; 
      var Status = new Object();
      Status.mapType = "osm";
      var startTime = new Date();
      var endTime = new Date();

      drawmapCities();
      mapCities.doubleClickZoom.disable();
      

        infoInit();
      

      function loadQuizz(){

        var selectedPays = selectPays.options[selectPays.selectedIndex].value;
        var selectedNumber = selectNumber.options[selectNumber.selectedIndex].value;
        var selectedTile = selectTile.options[selectTile.selectedIndex].value;
        hasTimer = document.getElementById('htmlTimer').checked;

        stopTimer();
        resetTimer();
        /*if (selectedNumber.startsWith("c")) {intNumberTotal = 50; }
        else { intNumberTotal = parseInt(selectedNumber);}*/
        
        intNumber = 0;

        if (Status.mapType == "osm") {
                if (selectedTile == "stamen")
                {tilesOSM.remove(mapCities); tilesStamen.addTo(mapCities); mapCities.options.maxZoom = 11;}
                if (selectedTile == "stamenvide")
                {tilesOSM.remove(mapCities); tilesStamenVide.addTo(mapCities); layerStamen.addTo(mapCities); mapCities.options.maxZoom = 11;}

        }
        else if (Status.mapType == "stamen") {
            if (selectedTile == "osm") {tilesStamen.remove(mapCities); tilesOSM.addTo(mapCities); mapCities.options.maxZoom = 14;}
            if (selectedTile == "stamenvide") {tilesStamen.remove(mapCities); tilesStamenVide.addTo(mapCities); layerStamen.addTo(mapCities); mapCities.options.maxZoom = 11;}
        }
        else if (Status.mapType == "stamenvide") {
            if (selectedTile == "osm") {layerStamen.remove(mapCities); tilesStamenVide.remove(mapCities); tilesOSM.addTo(mapCities); mapCities.options.maxZoom = 14;}
            if (selectedTile == "stamen") {layerStamen.remove(mapCities); tilesStamenVide.remove(mapCities); tilesStamen.addTo(mapCities); mapCities.options.maxZoom = 11;}
        }
        Status.mapType = selectedTile;
        
        var xmlhttp = new XMLHttpRequest();

        xmlhttp.onreadystatechange = function() {
          if (this.readyState == 4 && this.status == 200) {
            var res = this.responseText;       
            quizzList = JSON.parse(res);
            if (selectedNumber.startsWith("c")) { quizzList.splice(0, parseInt(selectedNumber.substring(1))-50 )}
            intNumberTotal = quizzList.length;
            console.log(quizzList);
            randomNumber =parseInt(Math.random() * quizzList.length);
            quizzAnswer = quizzList[randomNumber];
            infoQ.update(quizzAnswer.city,0,intNumberTotal);
            infoScore.update(0);
            isOngoing= true;
            scoreTotal = 0;
            tScore.innerHTML = "";
            if (lGroup != undefined)
            {lGroup.remove(mapCities);}
            lGroup = new L.LayerGroup();
            lGroup.addTo(mapCities);
          }
          if (popupClick!=undefined){
            popupClick.remove(mapCities);
            popupClick = undefined;
          }
          if (mapLine != undefined)
            {mapLine.remove(mapCities); mapLine = undefined;} 

        };
        console.log("selectedNumber : "+selectedNumber);
        if (selectedNumber.startsWith("c")) { xmlhttp.open("GET","/sqldatabase.php?query=country&country="+selectedPays+"&number="+selectedNumber.substring(1),true);}
    else { xmlhttp.open("GET","/sqldatabase.php?query=country&country="+selectedPays+"&number="+selectedNumber,true); }
    xmlhttp.send();
    updateOptions();
    if (hasTimer) { startTimer(); startTime = Date.now();}

      }
        

                       
      function drawmapCities() {
        //blankLayer = new L.StamenTileLayer("terrain");
        //niceLayer= new L.StamenTileLayer("terrain");
        blankLayer = new L.StamenTileLayer("watercolor");
        blankLayer2 = new L.StamenTileLayer("toner-lines");
        /*var Stamen_TonerLines = L.tileLayer('https://stamen-tiles-{s}.a.ssl.fastly.net/toner-lines/{z}/{x}/{y}{r}.{ext}', {
	attribution: 'Map tiles by <a href="http://stamen.com">Stamen Design</a>, <a href="http://creativecommons.org/licenses/by/3.0">CC BY 3.0</a> &mdash; Map data &copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors',
	subdomains: 'abcd',
	minZoom: 0,
	maxZoom: 20,
	ext: 'png'
});*/
        mapCities = L.map("mapCities", {minZoom: 2, maxZoom : 15, zoomControl: false}).setView([0,0], 4);
        
        const attributionOSM =  '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors';
        const tileUrlOSM = "https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png";
        tilesOSM = L.tileLayer(tileUrlOSM, { attributionOSM });
        const attributionStamen = 'Map tiles by <a href="http://stamen.com">Stamen Design</a>, <a href="http://creativecommons.org/licenses/by/3.0">CC BY 3.0</a> &mdash; Map data &copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors';
        const tileUrlStamen = 'https://stamen-tiles-{s}.a.ssl.fastly.net/terrain/{z}/{x}/{y}{r}.png';
        tilesStamen =  L.tileLayer(tileUrlStamen, { attributionStamen });
        const tileUrlStamenVide = 'https://stamen-tiles-{s}.a.ssl.fastly.net/watercolor/{z}/{x}/{y}{r}.png';
        tilesStamenVide = L.tileLayer(tileUrlStamenVide, { attributionStamen });
        tilesOSM.addTo(mapCities);
        layerStamen = new L.StamenTileLayer("toner-lines");
      }



      mapCities.on('click', function(e) { 
        if (isOngoing) {
            var scoreRound;
            var timeRound;
            soundClick.play();       
            var clickLocation= e.latlng;
            var dist = distance(e.latlng.lat, e.latlng.lng, quizzAnswer.lat, quizzAnswer.lng);
            if (hasTimer) {
                endTime = Date.now();
                timeRound = Math.round((endTime - startTime)/1000);
                startTime = Date.now();
                scoreRound = score(dist,timeRound);
                addLine(tScore,quizzAnswer.city,scoreRound,showTime(timeRound));
            }
            else
            {scoreRound = score(dist,0); addLine(tScore,quizzAnswer.city,scoreRound,"0");}

            scoreTotal += scoreRound;
            intNumber += 1;
            

            //add a line on the map
            if (mapLine != undefined)
            {mapLine.remove(mapCities)} 
            mapLine = L.polyline([clickLocation, [quizzAnswer.lat, quizzAnswer.lng]], {color: 'black'})
            mapLine.addTo(mapCities);


             // add the marker and popup to the map.
             var myColor = markerColor(scoreRound);
            var myMark = L.circleMarker([quizzAnswer.lat,quizzAnswer.lng], {"radius": 10, "stroke" : true, "color" : "FFFFFF", "fill" : true, "fillColor" : myColor, "fillOpacity" : 0.8});
            myMark.bindPopup(quizzAnswer.city+"<br>" + quizzAnswer.population + " hab.");
            lGroup.addLayer(myMark);
            popupClick = L.popup()
              .setLatLng(clickLocation)
              .setContent(dist + ' km')
              .openOn(mapCities);      

            
            quizzList.splice(randomNumber,1); //delete element
            if (quizzList.length > 0) {
                  randomNumber =parseInt(Math.random() * quizzList.length);
                  quizzAnswer = quizzList[randomNumber];
                  infoQ.update(quizzAnswer.city,intNumber,intNumberTotal);
                  infoScore.update(scoreTotal);
                }
            else {
                if (hasTimer) { stopTimer();}
                isOngoing=false;
                infoQ.update("End of quizz",intNumberTotal,intNumberTotal); 
            }

              }
            
          });
                                                                                                                                               
    function addLine(tableA,cityA,scoreA,timeA)    {
        // Insère une ligne dans la table à l'indice de ligne 0
        var newLine = tableA.insertRow(0);

        // Insère une cellule dans la ligne à l'indice 0
        var newCellA = newLine.insertCell(0);
        var newCellB = newLine.insertCell(1);
        var newCellC = newLine.insertCell(2);

        // Ajoute un nœud texte à la cellule                
        newCellA.appendChild(document.createTextNode(cityA));
        newCellB.appendChild(document.createTextNode(scoreA));
        newCellC.appendChild(document.createTextNode(timeA));
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
    
        infoScore = L.control({ position: 'topleft' });
        infoScore.onAdd = function(mapCities) {
        this._div = L.DomUtil.create("div", "infoScore"); // create a div with a class "info"
        this.update();
        return this._div;
        };

        infoScore.update = function (str) {
        if (str == null){
          this._div.innerHTML ="";
        }
        else {
        this._div.innerHTML = '<h2>'+ str +'</h2>';
        }
        };
        infoScore.addTo(mapCities);
    
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
    
    
    
    }

    function updateOptions(){
        var selectCityPos = document.getElementById('cityPos');
        var selectScorePos = document.getElementById('scorePos');
        var selectTimerPos = document.getElementById('timerPos');
        /*var selectCitySize = document.getElementById('citySize');
        var selectScoreSize = document.getElementById('scoreSize');
        var selectTimerSize = document.getElementById('timerSize');
        var selectCityColor = document.getElementById('cityColor');
        var selectScoreColor = document.getElementById('scoreColor');
        var selectTimerColor = document.getElementById('timerColor');
        var selectCityBG = document.getElementById('cityBackground');
        var selectScoreBG = document.getElementById('scoreBackground');
        var selectTimerBG = document.getElementById('timerBackground');*/

        var valueCityPos = selectCityPos.options[selectCityPos.selectedIndex].value;
        var valueScorePos = selectScorePos.options[selectScorePos.selectedIndex].value;
        var valueTimerPos = selectTimerPos.options[selectTimerPos.selectedIndex].value;

        /*var valueCitySize = selectCitySize.options[selectCitySize.selectedIndex].value;
        var valueScoreSize = selectScoreSize.options[selectScoreSize.selectedIndex].value;
        var valueTimerSize = selectTimerSize.options[selectTimerSize.selectedIndex].value;

        var valueCityColor = selectCityColor.options[selectCityColor.selectedIndex].value;
        var valueScoreColor = selectScoreColor.options[selectScoreColor.selectedIndex].value;
        var valueTimerColor = selectTimerColor.options[selectTimerColor.selectedIndex].value;

        var valueCityBG = selectCityBG.options[selectCityBG.selectedIndex].value;
        var valueScoreBG = selectScoreBG.options[selectScoreBG.selectedIndex].value;
        var valueTimerBG = selectTimerBG.options[selectTimerBG.selectedIndex].value;*/

        infoQ.setPosition(valueCityPos);
        infoScore.setPosition(valueScorePos);
        infoTimer.setPosition(valueTimerPos);





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
}
</script>




    


</body>

</html>



