<html>
<head>
<title>Suède</title>
<link rel="stylesheet" href="../style.css">
<!---------------------------------------------------------------------------------IMAGES------------------------------------------------------------------------------>
<script src ="/enlarge.js" ></script>

</head>



<body>
    <?php include '../sidebar.html'; ?>
    <div id="sidebar"></div>

    <div id="main" style="margin-left:10%">

        <div class="maintitle">
        Suède
        </div>    
        <div class="tab">
            

            <button class="tablinks" onclick="openTab(event, 'facile')" id="defaultOpen">Facile</button>
            <button class="tablinks" onclick="openTab(event, 'inter')">Bus et numéros de téléphone</button>
            <button class="tablinks" onclick="openTab(event, 'tryhard')">Terminaisons des noms de ville</button>
        </div>

        <!-- Tab content -->
        <div id="facile" class="tabcontent">

            <div class="finalcontent">
                <h3>Introduction</h3>
                <p>Le plus évident pour se repérer en Suède, ce ont les numéros de route et les directions, c'est expliqué dans le guide facile.</p>
                <p>Pour aller, si vous êtes en rural, vous trouverez assez fréquemment des arrêts de bus. Chacune des 21 régions de Suède possède son propre réseau de bus. Les panneaux/logos sont reconnaissables, de même que certains abribus. En urbain, les numéros de téléphone peuvent vous indiquer une zone. Tout cela est expliqué dans le guide intermédiaire.</p>
                <p>Pas grand chose à dire pour le guide tryhard, si ce n'est une carte des communes en fonction de leur terminaison.</p> 
            </div>




            <div class="finalcontent">
                <h3>Les routes</h3>
                <p>Les routes bleues suèdoises sont numérotées du sud vers le nord de la manière suivante :</p>
                <div class="imgdivVert"><img src="../img/europe/sweden/roads.png" class="imgcontent" onclick="enlargeImg('roads')" id="roads"></img></div>
                <p>-Les routes nationales de 9 à 99.</p>
                <p>-Les routes régionales de 100 à 404.</p>
                <p>Remarques :</p>
                <p>-Les routes sont bien regroupées, les routes avec des numéros proches sont souvent peu éloignées les unes des autres, en particulier quand elles sont dans la même dizaine.</p>
                <p>-la route 136 est sur l'île de ötland, les routes 140 sont sur l'île de Gotland.</p>
                
            </div>

            <div class="finalcontent">
                <h3>Les villes</h3>
                <p>Les plus grandes villes sont au sud, au nord les villes sont essentiellement sur la côte.</p>
                <p>Pour les apprendre je vous invite à aller dans le <a href="/country/quizz_cities.php">quizz ville</a>.</p>
            </div>
        </div>


        <div id="inter" class="tabcontent">

            <div class="finalcontent">
            <h3>Les bus</h3>
            <p>En rural, si vous n'avez ni numéro de route ni direction connue, le plus utile est de savoir reconnaître les arrêts de bus, qui sont spécifiques à chacune des 21 régions de Suède.</p>
            <div class="imgdivVert"><img src="../img/europe/sweden/bus.png" class="imgcontent" onclick="enlargeImg('bus')" id="bus"></img></div>
            <p>Uppland et Stockholm sont assez évidents à retenir puisque le logo reprend le nom de la région :</p>
            <div class="imgdiv"><img src="../img/europe/sweden/logos.png" class="imgcontent"></img></div>
            <p>De plus, certains abribus sont très faciles à reconnaître : dans la région de Örebro les abribus ont une ligne fluo jaune, dans la région de Västernorrland les abribus sont des cabanes en bois bleues.</p> 
            <div class="imgdiv"><img src="../img/europe/sweden/orebro_abribus.png" class="imgcontent"></img></div>
            <div class="imgdiv"><img src="../img/europe/sweden/vasterbotten_abribus.png" class="imgcontent"></img></div>
            <p>2 maps similaires pour s'entraîner, <a href="https://www.geoguessr.com/maps/5ee74c7a8446e84260d21f57">Sweden by bus</a> et <a href="https://www.geoguessr.com/maps/62c13209b91359d791eb6dfe">Sweden bus signs</a>. </p>
            </div>

            <div class="finalcontent">
            <h3>Les numéros de téléphone</h3>
            <p>Parfois utile en urbain, voici la carte des numéros de téléphones :</p>
            <div class="imgdivVert"><img src="../img/europe/sweden/area_codes.png" class="imgcontent" onclick="enlargeImg('area')" id="area"></img></div>
            <p>Les numéros en 07 sont les numéros de portable.</p>
            <p>Pour vous entraîner, il y a le <a href="/country/quizz_tel.php">quizz numéros de téléphones</a>.</p>
            </div>

            <div class="finalcontent">
            <h3>Les noms de région</h3>
            <p>Il n'est pas capital de connaître les noms de régions, ca peut néanmoins être pratique dans certains cas, pour les apprendre il y a ce <a href="https://www.geoguessr.com/seterra/en/vgp/3008">quizz Seterra</a>.</p>
            </div>


        </div>


        <div id="tryhard" class="tabcontent">

            <div class="finalcontent">
            <h3>Les noms de villes</h3>
            <p>La carte suivante vous donne la position des villes en fonction de leurs dernière lettres :</p>
            <div class="imgdivVert"><img src="../img/europe/sweden/topo.png" class="imgcontent" onclick="enlargeImg('topo')" id="topo"></img></div>
            </div>


        </div>

    <!----------------------------------------------------------------------------- TABS ----------------------------------------------------------------------------->
                
        <script src="/tabs.js"> </script>    

</body>

</html>

