<html>
<head>
<title>USA</title>
<link rel="stylesheet" href="../style.css">
<!---------------------------------------------------------------------------------IMAGES------------------------------------------------------------------------------>
<script src ="/enlarge.js" ></script>

</head>



<body>
    <?php include '../sidebar.html'; ?>
    <canvas class="background" id="background" style="position:fixed; top:0;left:0;z-index:-1;">
    <div id="sidebar"></div>

    <div id="main" style="margin-left:10%">

        <div class="maintitle">
        USA
        </div>    
        <div class="tab">
            

            <button class="tablinks" onclick="openTab(event, 'facile')" id="defaultOpen">Facile</button>
            <button class="tablinks" onclick="openTab(event, 'inter')">Intermédiaire</button>
            <button class="tablinks" onclick="openTab(event, 'tryhard')">Tryhard</button>
        </div>

        <!-- Tab content -->
        <div id="facile" class="tabcontent">

            <div class="finalcontent">
                <h3>Introduction</h3>
                <p>Ce guide Etats Unis couvre uniquement les 50 états des états unis, mais pas les 5 territoires américains qui sont souvent séparés dans geoguessr (American Samoa, Guam, the Northern Mariana Islands, Puerto Rico, the U.S. Virgin Islands).</p>
                <p>Aux USA, il y a 4 choses utiles à connaître :</p>
                <p>-les paysages : ils vous donnent une idée peu précise de la zone dans laquelle vous vous trouvez.</p>
                <p>-le système routier fédéral : vous trouverez régulièrement des numéros de route.</p>
                <p>-le système routier spécifique à chaque état.</p>
                <p>-les plaques d'immatriculation.</p>
                <p>Si vous connaissez ces différents éléments, vous pouvez encore rajouter à celà certains indices spécifiques à chaque état expliqués dans le guide tryhard.</p>
                <p>On pourrait encore rajouter à cela les numéros de téléphones, mais le système est tellement absurde qu'il est quasi-impossible à apprendre. En effet, ils ont volontairement fait en sorte que des indicatifs qui se ressemblent soient à des endroits complètement différents du pays.</p>       
            </div>

            <div class="finalcontent">
                <h3>Les paysages</h3>
                <p>On peut repérer les différents types de paysage sur cette carte : </p>
                <div class="imgdiv"><img src="../img/america/usa/veget.jpg" class="imgcontent" onclick="enlargeImg('veget')" id="veget"></img></div>
                <p>On peut noter : </p>
                <p>-la présence des grandes plaines au centre, avec généralement pas mal d'agriculture, et de l'herbe plus rase à l'ouest.</p>
                <p>-les Apalaches, seules "montagnes" à l'est avec un paysage unique de grandes collines boisées.</p>
                <p>-Hawaï n'est pas sur la carte mais c'est le seul endroit avec une végétation réellement tropicale et quelques zones volcaniques désolées.</p>
            </div>

            <div class="finalcontent">
                <h3>Les interstates</h3>
                <p>La plupart des interstates traversent tout le pays. Celles portant un numéro pair sont des routes est-ouest allant de 2 au sud à 96 au nord. Celles portant un numéro impair sont des routes nord-sud allant de 5 à l'ouest à 99 à l'est. Hawaï et l'Alaska ont une numérotation à part.</p>
                <div class="imgdiv"><img src="../img/america/usa/interstates.png" class="imgcontent" onclick="enlargeImg('interstates')" id="interstates"></img></div>
                <p>Les interstates portent des numéros à 2 chiffres, prenez en compte uniquement les 2 derniers chiffres et cherchez autour d'une grande ville. Par exemple la 205 est l'interstate 05 autour de Portland. Attention, les interstates à 3 chiffres ne snt pas toutes uniques, par exemple la 215 correpond à l'intertate 15 à Las Vegas mais aussi à Salt Lake City.</p>
                <p>Remarque : le nom de l'état est parfois marqué en petit au dessus du numéro de l'interstate.</p>
            </div>

        <div class="finalcontent">
                <h3>Les US highways</h3>
                <p>Tout comme les interstates, ces routes traversent tout le pays. Elles sont numérotées avec une logique similaire : </p>
                <div class="imgdiv"><img src="../img/america/usa/ushighways.png" class="imgcontent" onclick="enlargeImg('ushighways')" id="ushighways"></img></div>
                <p>Au delà du numéro 101, les numéros à 3 chiffres sont, comme pour les interstates, des branches des routes à 2 chiffres, parfois directement connectées, parfois proches géographiquement.</p>
                <p>Il n'existe pas de US highway à Hawaï ou en Alaska.</p>
                
            </div>

            <div class="finalcontent">
            <h3>Le système routier</h3>
            <p>Si vous voulez plus de détails concernant les routes fédérales, je vous recommande la vidéo en anglais de Chicago Geographer : <a href="https://www.youtube.com/watch?v=Ur_cwyeMn2M">United States GeoGuessr Tips - Episode 1: The Basics</a></p>
            </div>
        </div>

        <div id="inter" class="tabcontent">

            <div class="finalcontent">            
            <h3>Les state highways</h3>
            <p>Les state highways sont les routes principales d'un état en particulier, elles apparaissent toutes sur la carte dans un ovale blanc, mais chaque état à son propre design reconnaissable.</p>
            <p>Pour les apprendre, il y a le quizz <a href="/country/quizz_usa.php">State highways shields</a></p>
            </div>

            <div class="finalcontent">
            <h3>Les grandes villes</h3>
            <p>Si vous souhaitez apprendre les villes, je vous propose un quizz spécifique ou vous pouvez choisir X villes par état, le <a href="/country/quizz_cities_usa.php">Quizz US cities</a>.</p> 
            </div>
            
        </div>       
        <div id="tryhard" class="tabcontent">


            <div class="finalcontent">            
            <h3>Les plaques d'immatriculation</h3>
            <p>Les plaques d'immatriculation peuvent vous permettre d'identifier dans lequel vous vous trouvez, mais il est prudent d'en trouver plusieurs pour confirmer. Le gros avantage est que cela marche bien dans les zones résidentielles (beaucoup de voitures garées), c'est à dire là où vous ne trouverez quasiment aucun autre indice. Il est néanmoins extremement difficile de les apprendre toutes d'un coup, d'autant plus que les états ont souvent plusieurs modèles de plaques d'immatriculation. Je vous propose donc de commencer par apprendre les plus faciles dans les 3 chapitres suivants.</p>
            </div>

            <div class="finalcontent">  
            <h3>3 plaques "évidentes"</h3>
            <p>Les plaques d'Arizona, d'Utah et de Floride sont très reconnaissables car assez uniques.</p>
            <p>Les plaques d'Arizona contiennet du violet en bas à gauche, c'est la seule plaque d'immatriculation qui contient cette couleur.</p>
            <div class="imgdiv"><img src="../img/america/usa/plate_arizona.jpg" class="imgcontent"></img></div>
            <p>Les plaques de Floride ont 2 oranges avec des feuilles en plein centre. Combiné au paysage, c'est assez inratable.</p>
            <div class="imgdiv"><img src="../img/america/usa/plate_florida.jpg" class="imgcontent"></img></div>
            <p>Certaines plaques de l'Utah ont une forme marron/rouge unique, qui représente une plaine avec une arche sur la droite.</p>
            <div class="imgdiv"><img src="../img/america/usa/plate_utah.jpg" class="imgcontent"></img></div>
            <p>Pour en voir quelques unes dans le jeu, vous pouvez essayer ma map <a href="https://www.geoguessr.com/maps/62bb45ee36391f1754c492d8">US 3 easy plates</a></p>
            </div>
            
            <div class="finalcontent"> 
            <h3>Les plaques d'immatriculation contenant du jaune</h3>
            <p>Il n'y a que 4 zones avec des plaques d'immatriculation jaunes : nord est, sud est, new mexico et Alaska.</p>
            <div class="imgdiv"><img src="../img/america/usa/yellowplates.png" class="imgcontent"></img></div>
            <p>J'ai créé la map suivante pour l'entraînement : <a href="https://www.geoguessr.com/maps/62baa0906c782417b82f96d9">US yellow plates</a></p>
            <p>La logique à suivre est la suivante :</p>
            <p>Si vous voyez une plaque completement jaune dans un environnement sec/dersertique, c'est le Nouveau Mexique.</p>
            <div class="imgdiv"><img src="../img/america/usa/plate_newmexico.jpg" class="imgcontent"></img></div>
            <p>Si vous voyez une plaque completement jaune dans un environnement nordique/montagneux, vous êtes en Alaska.</p>
            <div class="imgdiv"><img src="../img/america/usa/plate_alaska.jpg" class="imgcontent"></img></div>
            <p>Les plaques d'Alabama sont les seules à être Jaune Vert Bleu (de haut en bas).</p>
            <div class="imgdiv"><img src="../img/america/usa/plate_alabama.jpg" class="imgcontent"></img></div>
            <p>Les plaques du New Jersey sont les seules à être Jaune Blanc (de haut en bas).</p>
            <div class="imgdiv"><img src="../img/america/usa/plate_newjersey.jpg" class="imgcontent"></img></div>
            <p>Les plaques avec un point jaune (souvent au centre) sont en Géorgie.</p>
            <div class="imgdiv"><img src="../img/america/usa/plate_georgia.jpg" class="imgcontent"></img></div>
            <p>Les plaques Bleu Blanc Jaune sont plus difficiles à attribuer. Si vous avez un feeling nord est, c'est la Pennsylvanie. Sinon, la Géorgie ou la Louisiane. La différence n'est pas toujours claire mais en Louisiane on peut parfois distinguer un point rouge en haut de la plaque.</p>
            <div class="imgdiv"><img src="../img/america/usa/plate_pennsylvania.jpg" class="imgcontent"></img></div>
            <div class="imgdiv"><img src="../img/america/usa/plate_georgia2.jpg" class="imgcontent"></img></div>
            <div class="imgdiv"><img src="../img/america/usa/plate_louisiana.jpg" class="imgcontent"></img></div>
            <p>Les plaques du Delaware et de New York sont souvent completement jaunes. En théorie, certaines plaques de New York sont noires au dessus, certaines plaques du Delaware sont un mix de bleu foncé et de jaune au centre. En pratique on peut confondre mais ce n'est pas trop grave dans le sens ou les 2 états sont voisins.</p>
            <div class="imgdiv"><img src="../img/america/usa/plate_newyork.jpg" class="imgcontent"></img></div> 
            <div class="imgdiv"><img src="../img/america/usa/plate_delaware.jpg" class="imgcontent"></img></div>   
        </div>

            <div class="finalcontent"> 
            <h3>Les plaques d'immatriculation contenant du vert</h3>
            <p>Il y a 5 états où les plaques sont reconnaissables avec du vert.</p>
            <p>J'ai créé la map suivante pour l'entraînement : <a href="https://www.geoguessr.com/maps/62badc3a6c782417b82f9e6f">US green plates</a></p>
            <p>La logique à suivre est la suivante :</p>
            <p>Les plaques totalement vertes (avec parfois un peu de blanc) sont au Vermont.</p>
            <div class="imgdiv"><img src="../img/america/usa/plate_vermont.jpg" class="imgcontent"></img></div>
            <p>On trouve également des plaques completement vertes/turquoise au Nouveau Mexique, même si la plupart des plaques du Nouveau Mexique sont jaunes.</p>
            <div class="imgdiv"><img src="../img/america/usa/plate_newmexicogreen.jpg" class="imgcontent"></img></div>
            <p>Les plaques blanches à gauches et vertes à droite sont au New Hampshire.</p>
            <div class="imgdiv"><img src="../img/america/usa/plate_newhampshire.jpg" class="imgcontent"></img></div>
            <p>Les plaques d'Alabama sont les seules à être Jaune Vert Bleu (de haut en bas).</p>
            <div class="imgdiv"><img src="../img/america/usa/plate_alabama.jpg" class="imgcontent"></img></div>
            <p>Les plaques bleues ou blanches avec un point vert clair au centre sont en Oregon.</p>
            <div class="imgdiv"><img src="../img/america/usa/plate_oregon.jpg" class="imgcontent"></img></div>
            </div>

            <div class="finalcontent">
            <h3>Indices supplémentaires</h3>
            <p>Il existe tout un tas d'autres indices tels que des marques ou des drapeaux qui peuvent vous donner l'état dans lequel vous vous trouvez, la map geoguessr <a href="https://www.geoguessr.com/maps/5fb4a16924491b00010c608d">US State-Specific Clues</a> les regroupe. Cette map se joue en no move, l'indice principal est au centre de l'écran, et vous pouvez trouver la liste des indices dans la description de la carte.</p>
            </div>
            
        </div>

           



        


    </div>

    <!----------------------------------------------------------------------------- TABS ----------------------------------------------------------------------------->
                
        <script src="/tabs.js"> </script>    
</canvas>

    <!----------------------------------------------------------------------------- draw ----------------------------------------------------------------------------->
                
    <script src="/background.js"> </script>   
</body>

</html>

