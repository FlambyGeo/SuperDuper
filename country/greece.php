<html>
<head>
<title>Grèce</title>
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
        Grèce
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
                <p>La Grèce est un pays où l'on trouve souvent beaucoup d'informations dans les zones habitées, la difficulté est de savoir les interprêter.</p>
                <p>Le guide facile donne des informations générales sur les principales villes, régions, îles, et sur les types de paysage.</p>
                <p>Le guide intermédiaire permet d'apprendre plus de villes et explique comment fonctionnent les numéros de téléphone, qui sont le moyen le plus efficace pour vous situer dans le pays.</p>
                <p>Le guide tryhard rentre dans le détail des numéros de téléphone, et redirige vers la page pour apprendre à lire le grec.</p>
            </div>   
         
            <div class="finalcontent">
                <h3>Les régions et les grandes villes</h3>
                <p>Le nom des différentes régions n'est pas très important à retenir, ce n'est pas une information qui apparait souvent sur la streetview. Il est en revanche utile de savoir situer les plus grandes villes du pays.</p>
                <div class="imgdiv"><img src="../img/europe/greece/regions.png" class="imgcontent" onclick="enlargeImg('regions')" id="regions"></img></div>
                <p>Particularité : Le mont athos au nord du pays, est une zone à part avec un gouvernement religieux, c'est en quelque sorte l'équivalent du Vatican mais pour la religion orthodoxe.</p>
            </div>

            <div class="finalcontent">
                <h3>Les îles</h3>
                <p>La plus grande île du pays est bien sûr la Crète au sud du pays, assez peuplée et avec une bonne couverture streetview.</p>
                <p>Il a également plusieurs groupes d'îles, comme le montre la carte ci-dessous :</p>
                <div class="imgdiv"><img src="../img/europe/greece/islands.png" class="imgcontent"></img></div>
                <p>Cela permet d'avoir une vue générale, néanmoins il est plus utile de connaître le nom des villes présentes sur les îles que les noms des îles elles-mêmes, c'est ce qui est proposé dans le guide intermédiaire si vous souhaitez aller plus loin.</p>
            </div>

            <div class="finalcontent">
                <h3>Les paysages</h3>
                <p>On peut globalement distinguer 3 zones de paysages :</p>
                <div class="imgdiv"><img src="../img/europe/greece/paysages.png" class="imgcontent"></img></div>
                <p>La Crète est à la fois très montagneuse et très sèche.</p>
                <div class="imgdiv"><img src="../img/europe/greece/cr01.png" class="imgcontent"></img></div>
                <div class="imgdiv"><img src="../img/europe/greece/cr02.png" class="imgcontent"></img></div>
                <div class="imgdiv"><img src="../img/europe/greece/cr03.png" class="imgcontent"></img></div>
                <p>Le Péloponnèse est composé de collines relativement sèches, mais à un degré moindre que la Crète.</p>
                <div class="imgdiv"><img src="../img/europe/greece/pelo01.png" class="imgcontent"></img></div>
                <div class="imgdiv"><img src="../img/europe/greece/pelo02.png" class="imgcontent"></img></div>
                <div class="imgdiv"><img src="../img/europe/greece/pelo03.png" class="imgcontent"></img></div>
                <p>La zone nord est composée de montagnes recouvertes de végétation et de grandes plaines agricoles.</p>
                <div class="imgdiv"><img src="../img/europe/greece/mont01.png" class="imgcontent"></img></div>
                <div class="imgdiv"><img src="../img/europe/greece/plaine01.png" class="imgcontent"></img></div>
                <p>Les montagnes les plus escarpées, avec des vallées profondes et des pics élevés, sont au sud ouest.</p>
                <div class="imgdiv"><img src="../img/europe/greece/mont02.png" class="imgcontent"></img></div>
            </div>
            

        </div>

        <div id="inter" class="tabcontent">
            <div class="finalcontent">
                <h3>Que faut-il apprendre pour devenir meilleur en grèce?</h3>
                <p>Les 3 choses les plus utiles à connaître sont : les villes, les numéros de téléphone, et savoir lire le grec.</p>
            </div>

            <div class="finalcontent">
                <h3>Les numéros de téléphone</h3>
                <p>Vous trouverez des numéros de téléphone fixe dans toutes les zones habitées, même parfois dans des villages assez petits. Ils permettent de savoir précisément ou vous vous trouvez.</p>
                <p>Un numéro de téléphone fait forcément 10 chiffres. Si vous voyez un numéro de téléphone avec moins de 10 chiffres (typiquement, 5 ou 6 chiffres), cela signifie qu'il ne contient pas l'indicatif téléphonique de la région, il faut donc l'ignorer.</p>
                <p>Un numéro de ligne fixe commence par un 2, un numéro de téléphone portable commence par un 6. Si vous trouvez un numéro de téléphone qui commence par 0, c'est un numéro fixe qui est resté à l'ancien format 20ème siècle, il vous suffit de remplacer le 0 par un 2.</p>
                <p>Comprendre avec un exemple : prenons le numéro 23810 12345. </p>
                <p>-Le premier chiffre 2 nous indique que c'est un numéro fixe, donc valide pour trouver notre position. </p>
                <p>-Les deux premiers chiffres 23 nous indiquent toute la région autour de Thessalonique.</p>
                <p>-Les trois premiers chiffres 238 nous indiquent toute la sous-région de Edessa, proche de Thessalonique.</p>
                <p>-Les quatre premiers chiffres 2381 nous indiquent que nous sommes à Edessa même, le 1 indique toujours la ville la plus importante de la zone.</p>
                <p>En fonction de vos connaissances, vous connaîtrez donc votre position avec plus ou moins de précision. Pour le guide intermédiaire, je vous propose de retenir simplement les zones à 2 chiffres :</p>
                <div class="imgdiv"><img src="../img/europe/greece/tel1digit.png" class="imgcontent"></img></div>

            </div>
            <div class="finalcontent">
                <h3>Les principales villes de Grèce</h3>
                <p>Pour apprendre les villes je vous propose ce <a href="https://www.geoguessr.com/seterra/en/vgp/3262?c=GU94E">Quizz Seterra</a>.</p>

            </div>
            
        </div>

        <div id="tryhard" class="tabcontent">
            <div class="finalcontent">
                <h3>Les numéros de téléphones détaillés</h3>
                <p>Les îles entre parenthèses ne sont pas streetviewées.</p>
                <div class="imgdiv"><img src="../img/europe/greece/tel.png" class="imgcontent" onclick="enlargeImg('tel')" id="tel"></img></div>
                <p>Remarque : les 1 désignent les grandes villes, par exemple 21 pour Athènes ou 231 pour Thessalonique. Les 9 correspondent aux alentours des villes correspondantes, par exemple 29 ce sont les alentours d'Athènes et 239 les alentours de Thessalonique.</p>
                <p>Pour vous entraîner, une map geoguessr à jouer en no move : <a href="https://www.geoguessr.com/maps/626709a82e5e0e877bdd5d24/play"> Greece : phone numbers</a></p>
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

