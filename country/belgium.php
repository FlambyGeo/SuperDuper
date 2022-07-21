<html>
<head>
<title>Belgium</title>
<link rel="stylesheet" href="../style.css">
<!---------------------------------------------------------------------------------IMAGES------------------------------------------------------------------------------>
<script src ="/enlarge.js" ></script>

</head>



<body>
    <?php include '../sidebar.html'; ?>
    <div id="sidebar"></div>

    <div id="main" style="margin-left:10%">

        <div class="maintitle">
        Belgique
        </div>    
        <div class="tab">
            

            <button class="tablinks" onclick="openTab(event, 'facile')" id="defaultOpen">Facile</button>
            <button class="tablinks" onclick="openTab(event, 'inter')">Intermédiaire</button>
        </div>

        <!-- Tab content -->
        <div id="facile" class="tabcontent">

            <div class="finalcontent">
                <h3>Introduction</h3>
                <p>La belgique est un pays tout à fait classique à jouer, les informations principales sont les noms de commune et les numéros de route. Lorsqu'on cherche une commune sur la carte, il est possible de imiter la zone à scanner en fonctions de certaines informations : langue utilisée et numéro de téléphone.</p>  
         
                </div>

            <div class="finalcontent">
                <h3>Les panneaux de rue</h3>
                <p>En Belgique, il n'est pas rare de trouver le nom de la commune sur les panneaux de rue. </p>
            </div>

            <div class="finalcontent">
            <h3>Les langues</h3>
                <p>On identifie 5 zones linguistiques en Belgique : une zone flamande au nord, une zone française au sud, une zone bilingue à Bruxelles, et 2 petites zones allemandes à l'est.</p>
                <div class="imgdiv"><img src="../img/europe/belgium/language.png" class="imgcontent" onclick="enlargeImg('language')" id="language"></img></div>
            </div>

            <div class="finalcontent">
                <h3>Les autoroutes E, A et B</h3>
                <p>Les autoroutes belges ont 2 noms, un qui commence par E (numérotation européenne) et qui est très visible sur la carte, un qui commence par A avec 1 ou 2 chiffres, qui est beaucoup moins visible sur la carte, ce sont des carrés blancs qu'on peut voir en zoomant à certains endroits. Si vous trouvez un panneau qui ne vous donne que le nom en A, il vous faudra scanner les autoroutes E avec un zoom suffisant.</p>
                <p>Les autoroutes A à un seul chiffre partent toutes de Bruxelles.</p>
                <p>Les autoroutes A à 3 chiffres et les autoroutes B sont des bretelles, des petite portions qui relient 2 autoroutes majeures.</p> 
            </div>

        <div class="finalcontent">
                <h3>Les périphériques R</h3>
                <p>Les routes notées R pour ring correspondent aux périphériques des villes, vous y trouverez souvent de nombreuses directions qui vous permettront de vous repérer.</p>
                <p>Les plus importants sont le R0 autour de Bruxelles, les R1 et R2 autour de Antwerpen et le R3 autour de Charleroi.</p>
            </div>

            <div class="finalcontent">
                <h3>Les routes nationales N</h3>
                <p>Les routes notées N pour nationales suivent une certaine logique : Les routes N1 à N9 relient Bruxelles aux principales villes du pays. Les routes N à 2 et 3 chiffres sont rangées par zones, mais attention il existe des exceptions, certaines routes à 2 chiffres sont mal rangées.</p>
                <div class="imgdiv"><img src="../img/europe/belgium/belgique_routes.png" class="imgcontent" onclick="enlargeImg('routes')" id="routes"></img></div>
            </div>
        </div>

        <div id="inter" class="tabcontent">


        <div class="finalcontent">            
            <h3>Les villes</h3>
            <p>Pour apprendre les villes, vous avez le <a href="/country/quizz_cities.php">Quizz villes</a>. </p>
            </div>

            <div class="finalcontent">
                <h3>Les numéros de téléphone</h3>
                <p>Les numéros de téléphone fixes sont composés de 9 chiffres, dont un indicatif de 2 ou 3 chiffres qui commence par 0. Les numéros de portables sont en 04 avec 10 chiffres, ce qui ressemble aux numéros de la région de Liège, attention à ne pas les confondre.</p>
                <div class="imgdiv"><img src="../img/europe/belgium/areacodes.jpg" class="imgcontent" onclick="enlargeImg('ac')" id="ac"></img></div>
            <p>Pour vous entrainer, il y a le <a href="/country/quizz_tel.php">Quizz numéros de téléphone</a>.</p>
            </div>

            <div class="finalcontent">            
            <h3>Les régions</h3>
            <p>Pour apprendre les régions, vous avez ce <a href="https://www.geoguessr.com/seterra/fr/vgp/3065">Quizz Seterra</a>. </p>
            </div>

            <div class="finalcontent">
                <h3>Endroit particulier</h3>
                <p>Baarle Hertog est une enclave belge située aux Pays bas, proche de la frontière au nord de la ville belge de Turnhout.On peut y trouver des démarcations de frontière sur certains trottoirs.</p>
                <div class="imgdiv"><img src="/img/europe/belgium/border.png" class="imgcontent"></img></div>
            </div>
            
        </div>

           
        </div>


        


    </div>

    <!----------------------------------------------------------------------------- TABS ----------------------------------------------------------------------------->
                
        <script src="/tabs.js"> </script>    

</body>

</html>

