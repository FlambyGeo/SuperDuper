<html>
<head>
<title>Canada</title>
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

</head>



<body>
    <?php include '../sidebar.html'; ?>
    <div id="sidebar"></div>

    <div id="main" style="margin-left:10%">

        <div class="maintitle">
        Canada
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
                <p>Le Canada est un pays divisé en 10 provinces habitées, et 3 territoires relativement déserts au nord du pays.</p>
                <p>Le guide facile donne des informations générales sur les provinces, les plus grandes villes, et des connaissances basiques du pays.</p>
                <p>Le guide intermédiaire s'intéresse au meilleur moyen de reconnaitre les provinces : la signalisation routière.</p>
                <p>Le guide tryhard couvre les numéros de téléphone ainsi que certaines zones extremement spécifiques.</p>
            </div>   
         
           

            <div class="finalcontent">
                <h3>Les provinces et territoires</h3>
                <p>La carte suivante représente les 10 provinces et 3 territoires (Yukon, Northwestern territory et Nunavut) du Canada avec leur capitale :</p>
                <div class="imgdiv"><img src="../img/america/canada/provinces2.png" class="imgcontent" onclick="enlargeImg('provinces')" id="provinces"></img></div>
                <p>Vous pouvez vous entraîner à placer les grandes villes et les provinces sur la carte grâce à ces quizz :</p>
                <p>- <a href="https://www.geoguessr.com/seterra/fr/vgp/3006">Les provinces</a></p>
                <p>- <a href="https://www.geoguessr.com/seterra/en/vgp/3050">Les grandes villes</a></p>
            </div>

            <div class="finalcontent">
                <h3>Quelques astuces simples peuvent limiter vos recherches à certaines zones :</h3>
                <br>
                <p>2 types de paysages faciles à reconnaitre :</p>
                <p>-les montagnes sont uniquement dans l'ouest du pays, c'est à dire principalement la British Columbia et parfois le Yukon.</p>
                <div class="imgdiv"><img src="../img/america/canada/mountain.png" class="imgcontent"></img></div>
                <p>-les grandes plaines agricoles à perte de vue se situent en Alberta, au Sasktachewan et au Manitoba. Les routes sont en grande majorité des lignes droites, exactement nord-sud ou exactement est-ouest.</p>
                <div class="imgdiv"><img src="../img/america/canada/plain.png" class="imgcontent"></img></div>
                <br>
                <p>L'usage de la langue francaise :</p>
                <p>-une seule province est purement francophone : le Quebec.</p>
                <p>-une seule province utilise à la fois le francais et l'anglais comme langue officielle : le New Brunswick.</p>
                <p>-deux provinces sont anglophones mais avec de nombreux noms de villes en francais : Le Newfoundland et le Manitoba.</p>
            </div>
            

        </div>

        <div id="inter" class="tabcontent">
            <div class="finalcontent">
                <h3>Identifier les provinces gràce a la signalisation routière.</h3>
                <p>Il est assez facile de savoir dans quelle province on se trouve si l'on sait reconnaitre les différents panneaux, le guide intermédiaire vous liste les panneaux provinciaux, avec une map d'entrainement pour l'ensemble : <a href="https://www.geoguessr.com/maps/626ccc546b39e3ca4cac4f73"> Canada provincial road signs </a></p></p>
            </div>

            <div class="finalcontent">            
            <h3>Les panneaux qui désignent les routes</h3>
            <p>Les panneaux désignant les routes provinciales sont tous différents :</p>
            <div class="imgdiv"><img src="../img/america/canada/canada_shields.png" class="imgcontent" onclick="enlargeImg('shields')" id="shields"></img></div>
            <p>Les panneaux transcanada highway, l'autoroute qui fait tout le pays d'est en ouest avec un logo vert/feuille d'érable, peuvent également vous donner la province dans certains cas :</p>
            <p>-si vous arrivez à zoomer suffisamment, la province est parfois marquée dessus.</p>
            <p>-dans le newfoudnland, le logo a des "cornes" :</p>
            <div class="imgdiv"><img src="../img/america/canada/transcanada_nfl.png" class="imgcontent"></img></div>
            <p>-la transcanada est en général numérotée route 1, mais il existe des chiffres spéciques à certains endroits. Il n'est pas nécessaire d'apprendre les différents numéros, cela se retrouve très facilement sur la carte.</p>
            <p style="padding:0 0 0 20px;">-la numéro 2 est dans le New Brunswick.</p>
            <p style="padding:0 0 0 20px;">-la numéro 16 part au nord de Winnipeg et va jusqu'en Colombie Britannique.</p>
            <p style="padding:0 0 0 20px;">-la numéro 100 est un contournement de Winnipeg.</p>
            <p style="padding:0 0 0 20px;">-les numéros 103 et 104 sont en Nova Scotia.</p>

            </div>

            <div class="finalcontent">
                <h3>Quelques panneaux de signalisation routière spécifiques.</h3>
                <p>Les panneaux stop sont marqués "Stop" dans tout le pays, sauf au Quebec ("Arrêt") et au New Brunswick ("Arrêt Stop").</p>
                <p>Les limites de vitesse de l'Ontario sont reconnaissables au bandeau noir en bas du panneau.</p>
                <div class="imgdiv"><img src="../img/america/canada/canada_signs.png" class="imgcontent"></img></div>
            </div>

            <div class="finalcontent">
                <h3>Les panneaux de noms de rue</h3>
                <p>Dans l'ensemble du pays, les rues sont en anglais : street abrégé ST, drive abrégé dr, etc...</p>
                <p>-Le Quebec fait bien sûr exception avec des noms francais.</p>
                <p>-Si vous avez des doubles abbréviations de nom de rue : "39 e/th" pour "trente-neuvième/thirty ninth", "Rue St" pour Rue/Street, "dr prom" pour drive/promenade, "cour ct" pour cour/court, et même "av ave" pour... avenue/avenue. Vous êtes soit au New Brunswick, soit sur la Prince Edward Island, soit dans le nord de l'Ontario (par exemple Ottawa, Sudbury...).</p>
            </div>

            <div class="finalcontent">
                <h3>Différencier les routes de terre en Alberta, Saskatchewan et Manitoba.</h3>
                <p>Ces 3 états comprenant d'immenses plaines agricoles ont quadrillé leur territoire avec des routes secondaires nord-sud et est-ouest. Ces routes sont nommées et numérotées, les intersections sont tout à fait trouvables sur la carte à condition d'identifier la province.</p>
                <p>Les routes secondaires du Manitoba s'appellent simplement "road", abrégé "rd". Les routes Nord sont des est-ouest qui partent de 1 à la frontière USA, avec des numéros qui augmentent lorsqu'on va au nord. Elles seront notées "Rd 12 N" ou parfois simplement "12 N". Les routes nord-sud sont nommées East ou West, en fonction de leur position par rapport à Winnipeg. La route "Rd 25 E" ou "25 E" est ainsi la 25ème route lorsqu'on part de Winnipeg en direction de l'est.</p>
                <p>Le Saskatchewan et l'Alberta utilisent un système de Range Road ("rg road") nord-sud et de township roads ("twn road") est-ouest.</p>
                <p>On peut être certain d'être en Alberta si l'on voit le bollard à double bande noire, très fréquent aux intersections.</p>                
                <div class="imgdiv"><img src="../img/america/canada/bollard_alberta.png" class="imgcontent"></img></div>
            </div>
            
        </div>

        <div id="tryhard" class="tabcontent">
            <div class="finalcontent">
                <h3>Les numéros de téléphone</h3>
                <p>Les numéros de téléphone canadiens ont un indicatif de 3 chiffres suivi d'un numéro de 7 chiffres. Ils s'écrivent sous la forme 640 123 1234.</p>
                <p>On distingue 2 types d'indicatifs, les indicatifs principaux qui sont les indicatifs historiques, et les indicatifs secondaires qui ont été introduits lorsque tous les numéros possibles ont été épuisés. </p>
                <p>Je considère que c'est une véritable perte de temps d'apprendre les indicatifs secondaires, car cela complique beaucoup l'apprentissage alors qu'on en trouve très peu dans les steetview.</p>
                <p>Voici la carte des indicatifs principaux : </p>
                <div class="imgdiv"><img src="../img/america/canada/canada_main_area_codes.png" class="imgcontent" onclick="enlargeImg('codes')" id="codes"></img></div>
                <p>Pour vous entraîner, une map geoguessr à jouer en no move : <a href="https://www.geoguessr.com/maps/6278e57476413bbf9d38fd16/play"> Canada : area codes / phone numbers</a></p>
            </div>


            <div class="finalcontent">
            <p>Au Canada, il existe un certain nombre de zones isolées qui sont streetviewées, si vous tombez dessus sans les connaitre vous aurez beaucoup de difficulté à les placer. Je vous explique les principales caractéristiques de ces zones, néanmoins je vous conseille d'aller vous balader dans les streetview si vous voulez avoir un meilleur feeling pour ces endroits spécifiques. </p>
            <div class="imgdiv"><img src="../img/america/canada/canada_zones.png" class="imgcontent" onclick="enlargeImg('zones')" id="zones"></img></div>
            </div>


            <div class="finalcontent">
                <h3>Zone spécifique : Iqaluit</h3>
                <p>La ville d'Iqaluit (ᐃᖃᓗᐃᑦ : beaucoup de poisson) est la capitale du Nunavut. Elle est reconnaissable à l'utilisation de l'écriture Inuktitut et à la streetview enneigée.</p>
                <div class="imgdiv"><img src="../img/america/canada/stop_iqualuit.png" class="imgcontent"></img></div>
            </div>

            <div class="finalcontent">
                <h3>Zone spécifique : Ikaluktutiak</h3>
                <p>La ville d'Ikaluktutiak (lieu où il fait bon pêcher) est reconnaissable à ses panneaux stop et sa streetview boueuse.</p>
                <div class="imgdiv"><img src="../img/america/canada/ikaluk.png" class="imgcontent" onclick="enlargeImg('ikal')" id="ikal"></img></div>
            </div>

            <div class="finalcontent">
                <h3>Zone spécifique : Yellowknife</h3>
                <p>Yellowknife, au nord du great slave lake, est la seule ville du northwestern territory qui est streetviewée. La route qui y mène, en passant par Enterprise et Fort Providence, est également streetviewée.</p>
            </div>

            <div class="finalcontent">
                <h3>Zone spécifique : Churchill</h3>
                <p>Churchill est connu pour son tourisme centré autour des ours polaires. La ville elle-même est streetviewée, avec des panneaux de rue assez uniques. Il y a quelques trekkers autour de la ville. </p>
                <div class="imgdiv"><img src="../img/america/canada/churchill.png" class="imgcontent"></img></div>
            </div>


            <div class="finalcontent">
                <h3>Zones spécifique : Trans Labrador Highway et Happy Valley - Goose Bay</h3>
                <p>Si vous avez l'impression que le soleil vous rend aveugle, vous êtes sur la Trans Labrador Highway qui mène à la ville de Happy Valley - Goose Bay. La ville elle-même peut se reconnaitre de 3 manières : le nom de la ville est marqué à plusieurs endroits, il existe un "quartier bleu", et le cimetière au sud de la ville est très reconnaissable.</p>
                <div class="imgdiv"><img src="../img/america/canada/HV_bleu.png" class="imgcontent"></img></div>
                <div class="imgdiv"><img src="../img/america/canada/HV_cimetierre.png" class="imgcontent"></img></div>
            </div>
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

</body>

</html>

