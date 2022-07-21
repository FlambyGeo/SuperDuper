<html>
<head>
<title>Indonésie</title>
<link rel="stylesheet" href="/style.css">
<script src ="/enlarge.js" ></script>
<!------------------------------------------MAP---------------------------------------------------------> 
<link rel="stylesheet" href="https://unpkg.com/leaflet@1.8.0/dist/leaflet.css" integrity="sha512-hoalWLoI8r4UszCkZ5kL8vayOGVae1oxXe/2A4AO6J9+580uKHDO3JdHb7NzwwzK5xr/Fs0W40kiNHxM9vyTtQ==" crossorigin=""/>
<script src="https://unpkg.com/leaflet@1.8.0/dist/leaflet.js" integrity="sha512-BB3hKbKWOc9Ez/TAwyWxNXeoV9c1v6FIeYiBieIWkpLjauysF18NzgR1MBNBXf8/KABdlkX68nAhlwcDFLGPCQ==" crossorigin=""></script>
<!------------------------------------------MAP STYLES--------------------------------------------------------->                                                                                        
    <style>
      #mapIndonesia {
        height: 800px;
        width: 1200px;
      }
      #mapKabupaten {
        height: 800px;
        width: 1200px;
      }
    </style>

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
        <div class="tab">
            <button class="tablinks" onclick="openTab(event, 'facile')" id="defaultOpen">Facile - introduction</button>
            <button class="tablinks" onclick="openTab(event, 'facile2')">Facile - Trouver les bonnes informations</button>
            <button class="tablinks" onclick="openTab(event, 'intermediate')">Intermédiaire - téléphones et codes postaux</button>
            <button class="tablinks" onclick="openTab(event, 'tryhard')">Tryhard - les kabupaten</button>
        </div>

        <!-- Tab content -->
        <div id="facile" class="tabcontent">

                <div class="finalcontent">
                    <h3>Introduction</h3>
                    <p>L'indonésie est un pays où l'on peut trouver beaucoup d'informations dans la streetview, qui sont souvent relativement faciles à interpreter. La grande difficulté vient du fait que ces inforamtions sont raraement marquées sur la carte, ce qui implique qu'il faut connaître par coeur énormément de choses pour pouvoir être bon.</p>
                    <p>Le guide facile explique comment lire les adresses, et permet de comprendre les découpages administratifs du pays.</p>
                    <p>Le guide intermédiaire s'intéresse aux informations qui ne sont pas trop dures à retenir : les nuémros de téléphones et les codes postaux.</p>
                    <p>Le guide tryhard explique le meilleur moyen de se localiser, qui est aussi le plus difficile à apprendre : les kabupaten.</p>
                </div>   



                <div class="finalcontent">
                    <h3>Les iles et les provinces</h3>
                    <p>Voici une carte des principales iles indonésiennes :</p>
                    <div class="imgdiv"><img src="/img/asia/indonesia/main_islands.png" class="imgcontent" onclick="enlargeImg('main_islands')" id="main_islands"></img></div>
                    <p>Les provinces reprennent pour beaucoup le nom de ces iles :</p>
                    <div class="imgdiv"><img src="/img/asia/indonesia/provinsi.jpg" class="imgcontent" onclick="enlargeImg('provinsi')" id="provinsi"></img></div>
                    <p>La langue indonésienne, qui est plus ou moins du malais, utilise énormément les 6 mots suivants pour indiquer des lieux :</p>

                    <table class="alpha">
                        <thead>
                            <tr><th>Indonésien</th><th>Français</th></tr>
                        </thead>
                    <tbody>
                        <tr><td>utara</td><td>nord</td></tr>
                        <tr><td>selatan</td><td>sud</td></tr>
                        <tr><td>barat</td><td>ouest</td></tr>
                        <tr><td>timur</td><td>est</td></tr>
                        <tr><td>tengarra</td><td>sud-est</td></tr>
                         <tr><td>tengah</td><td>centre</td></tr>
                    </tbody>
                    </table>
                    <p>Pour s'entraîner sur les provinces directement en indonésien, voici le quizz <a href="https://www.geoguessr.com/seterra/id/vgp/3219">Indonesia: Provinsi</a></p>
                </div>

                <div class="finalcontent">
                    <h3>La couverture streetview</h3>
                    <p>On peut remarquer que les iles du nord-est et la Papouasie ne sont pas du tout streetviewées, et que sur plusieurs iles seules les grandes routes principales sont couvertes.</p>
                    <div class="imgdiv"><img src="/img/asia/indonesia/coverage.png" class="imgcontent" onclick="enlargeImg('coverage')" id="coverage"></img></div>
                </div>

                <div class="finalcontent">
                    <h3>Les plus grandes villes du pays</h3>
                    <p>Vous pouvez vous entrainer à placer les plus grandes villes du pays sur une carte avec le quizz <a href="https://www.geoguessr.com/seterra/en/vgp/3790">Indonesia: Cities</a></p>
                </div>


            </div>

            <div id="facile2" class="tabcontent">

                <div class="finalcontent">
                    <h3>Les informations</h3>
                    <p>Dans les zones habitées d'indonésie, vous serez souvent inondé d'informations, il s'agit de trouver celles qui sont pertinentes.</p>
                    <p>Pour cela il vous faut comprendre:</p>
                    <p>-Quelles sont les infos inutiles.</p>
                    <p>-Ou sont marquées les infos utiles.</p>
                    <p>-Comment lire une adresse.</p>
                    <p>-Comment fonctionnent les numéros de téléphone.</p>
                </div>


                <div class="finalcontent">
                    <h3>Les informations inutiles</h3>
                    <p>Il y a 2 types d'affiches qu'on retrouve partout et qui n'ont aucun interet, assimiler cette info vous évitera de perdre votre temps : </p>
                    <p>-les publicités pour cigarettes, elles ont une mention obligatoire avec les mots peringatan (avertissement) et merokok (le tabac)</p>
                    <div class="imgdiv"><img src="/img/asia/indonesia/peringatan.png" class="imgcontent"></img></div>
                    <div class="imgdiv"><img src="/img/asia/indonesia/peringatan2.png" class="imgcontent"></img></div>
                    <p>-Les banières rouges et blanches de la fête nationale, elles sont génériques et mentionnent le nombre d'années depuis l'indépendance.</p>
                    <div class="imgdiv"><img src="/img/asia/indonesia/fetnat.png" class="imgcontent"></img></div>
                    <div class="imgdiv"><img src="/img/asia/indonesia/fetnat2.png" class="imgcontent"></img></div>
                </div>

                <div class="finalcontent">
                    <h3>Les informations utiles</h3>
                    <p>Les informations utiles sont les adresses (souvent partielles) et, en zone urbaine, les numéros de téléphone. 2 endroits à scruter en priorité pour les trouver :</p>
                    <p>-les batiments officiels, c'est souvent le jackpot, avec des adresses potentiellement completes, et marquées en gros donc lisibles. Exemple, le tribunal de Surakatra :</p>
                    <div class="imgdiv"><img src="/img/asia/indonesia/official.png" class="imgcontent"></img></div>
                    <p>-les enseignes des commerces, on y trouve régulièrement des numéros de téléphone et des bouts d'adresse.</p>
                    <p>-à savoir : les numéros de téléphones sont particulierement utiles en ville car il y a des lignes fixes, et quasiment inutiles en zone rurale car il n'y a que des portables.</p>
                </div>


                <div class="finalcontent">
                        <h3>Découpages administratif du pays</h3>
                        <p>L'indonésie comprend 34 provinsi.</p>
                        <p>Les provinsi sont découpées en :</p>
                        <p>-Kota, les villes les plus importantes, il y en a une centaine dans tout le pays.</p>
                        <p>-Kabupaten, un peu les équivalents des départements francais, qui regroupent dans un même enseble des villes plus petites et des zones rurales, il y en a près de 400.</p>
                        <p>Ces Kota/Kabupaten sont ensuite divisés en Kecamatan (districts), eux meme divisés en desa (villages) et kelurahan (communes).</p>
                </div>

                <div class="finalcontent">
                    <h3>Comprendre les adresses</h3>
                    <p>Essayons maintenant de lire une adresse, prenons par exemple : <b>JL. RAYA DESA LALANG KEC MEDANG DERAS KB BATU BARA  21258 TANJUNG</b></p>
                    <p>-JL. RAYA : JL = Jalan = rue, Raya est le nom de la rue.</p>
                    <p>-DESA LALANG : DESA = village, LALANG est le nom du village.</p>
                    <p>-KEC MEDANG DERAS : KEC = KECAMATAN = district, MEDANG DERAS est le nom du district.</p>
                    <p>-KB BATU BARA : KB = KABUPATEN = département, BATU BARA est le nom du département.</p>
                    <p>-21258 TANJUNG : Tanjung est le nom de la ville, 21258 est le code postal.</p>
                </div>

                <div class="finalcontent">
                    <h3>Estimer une zone</h3>
                    <p>La difficulté de l'Indonésie, c'est que meme avec une adresse complete qu'on comprend, il faut beaucoup de connaissances pour estimer sa position et de la réussite pour trouver l'endroit exact.</p>
                    <p>Reprenons notre adresse <b>JL. RAYA DESA LALANG KEC MEDANG DERAS KB BATU BARA  21258 TANJUNG</b></p>
                    <p>3 méthodes pour trouver la zone correspondante :</p>
                    <p>-Je peux estimer sa position à l'aide du kabupaten BATU BARA. Encore faut-il le connaitre (rappel : il y en a 400) et savoir le placer de tete sur la carte puisque les kabupaten ne sont pas marqués. C'est la meilleure facon de faire mais c'est très difficile.</p>
                    <p>-Admettons que je ne connaisse pas le kabupaten, je peux me repérer grace au code postal. Le Poste Kode, abrégé PK, est constitué de 5 chiffres, il donne une assez bonne indication de la zone. Avantage : pas horrible à apprendre car cela suit une certaine logique. Inconvénient : vous n'en trouverez pas à chaque round, peut être une fois sur 4 ou 5.</p>
                    <p>-Sinon, je peux aller chercher une info supplémentaire : un numéro de téléphone. Avantage : Comme les Poste Kode, ils sont realtivement précis et apprenables. Inconvénient : ils ne sont utiles qu'en zone urbaine(lignes fixes), les zones rurales utilisent des portables.</p>
                    <p>Les 3 méthodes sont détaillées dans la suite du guide, niveau intermédiaire pour les téléphones et les codes postaux, niveau tryhard pour les kabupaten.</p>
                </div>

                <div class="finalcontent">
                    <h3>Affiner un point</h3>
                    <p>Admettons qu'on aie appris nos codes postaux et nos kabupaten, et qu'on a la zone de notre point, quelques remarques pour affiner les points :</p>
                    <p>-Si vous êtes sur un axe majeur, la jalan peut être facile à trouver, en indonésie il n'y a pas de route nationale ou autoroute numérotées, toutes les routes sont des jalan. Par exemple, la JL Tol Medan Binjai est la route qui relie Medan à Binjai, "Tol" signifie que c'est une route à péage.</p>
                    <p>-les villes sont marquées sur la carte, mais ce n'est pas sytématique. Si vous trouvez votre ville, vous pouvez tenter de rechercher la jalan.</p>
                    <p>-les points d'interets sont vos amis. Typiquement, on trouve souvent sur la carte les masjid (mosquées), les pantai (plages), et les SMA/SMP/SMK (écoles), qui portent parfois le nom du desa ou de la jalan.</p>
                </div>

            </div>

        <div id="intermediate" class="tabcontent">
                
                <h3>intermédiaire</h3>
                <p>Le guide intermédiaire se concentre sur l'apprentissage des numéros de téléphones et des codes postaux, vous pouvez les visualiser sur cette carte :</p>
                <select name="carte" id="carte">
                    <option value="pk">Poste Kode</option>
                    <option value="ac3">Téléphone 3 numéros</option>
                    <option value="ac4">Téléphone 4 numéros</option>
                </select>
                <button onclick="loadMapI();">VALIDER</button>
            
                    <div id="mapIndonesia"></div>
                    <p>Rappels : </p>
                    <p>-un code postal (Post Kode, PK) est un numéro à 5 chiffres.</p>
                    <p>-les numéros de téléphones commencent par un indicatif de 4 chiffres qui indique la zone géographique. Exception : les numéros en 08 qui sont les portables. </p>
                    <p>Pour vous entraîner il y a la page <a href="/country/indonesia_quizz.php">Indonésie Quizz</a>.</p>
            

            <div class="finalcontent"> 
                <h3>Cartes pour aider à l'apprentissage des codes postaux.</h3>
                <div class="imgdiv"><img src="/img/asia/indonesia/pk_sumatera.jpg" class="imgcontent" onclick="enlargeImg('pk_sumatera')" id="pk_sumatera"></img></div>
                <div class="imgdiv"><img src="/img/asia/indonesia/pk_jawa.jpg" class="imgcontent" onclick="enlargeImg('pk_jawa')" id="pk_jawa"></img></div>
                <div class="imgdiv"><img src="/img/asia/indonesia/pk_kalimantan.jpg" class="imgcontent" onclick="enlargeImg('pk_kalimantan')" id="pk_kalimantan"></img></div>
                <div class="imgdiv"><img src="/img/asia/indonesia/pk_nusa.jpg" class="imgcontent" onclick="enlargeImg('pk_nusa')" id="pk_nusa"></img></div>
                <div class="imgdiv"><img src="/img/asia/indonesia/pk_sulawesi.jpg" class="imgcontent" onclick="enlargeImg('pk_sulawesi')" id="pk_sulawesi"></img></div>
            </div>
        </div>



        <div id="tryhard" class="tabcontent">
            <h3>tryhard</h3>
            <p>Le guide tryhard se concentre sur l'apprentissage des kabupaten. Vous pouvez les visualiser sur cette carte : </p>

            <div id="mapKabupaten"></div>
            <p>Pour vous entraîner il y a la page <a href="/country/indonesia_quizz.php">Indonésie Quizz</a> et la map geoguessr <a href="https://www.geoguessr.com/maps/6181d5ef34994a0001f63105"> Kabupaten Practice</a></p>
        
        </div>


    </div>



    <!----------------------------------------------------------------------------- TABS ----------------------------------------------------------------------------->
                
    <script>
  document.getElementById("defaultOpen").click();
                    
function openTab(evt, tabName) {
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
  document.getElementById(tabName).style.display = "block";
  evt.currentTarget.className += " active";
  if  (tabName == "intermediate") { mapI.invalidateSize();}
  if  (tabName == "tryhard") { mapK.invalidateSize();}
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
      drawMapI();
      loadMapI();
     
      function loadMapI(){
        var select = document.getElementById('carte');
        var selectedValue = select.options[select.selectedIndex].value;
        

        //clear the layers
        if (geoLayer != undefined) {mapI.removeLayer(geoLayer);};
        
        
        //load the new json
        loadJSON(selectedValue);

      }

      async function loadJSON(choice) {

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
      }

      function resetHighlight(e) {
        geoLayer.resetStyle(e.target);

      }
    </script>

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

