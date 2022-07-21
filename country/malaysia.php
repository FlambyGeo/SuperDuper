<html>
<head>
<title>Malaisie</title>
<link rel="stylesheet" href="../style.css">
<!---------------------------------------------------------------------------------IMAGES------------------------------------------------------------------------------>
<script src ="/enlarge.js" ></script>

</head>



<body>
    <?php include '../sidebar.html'; ?>
    <div id="sidebar"></div>

    <div id="main" style="margin-left:10%">

        <div class="maintitle">
        Malaisie
        </div>    
        <div class="tab">
            

            <button class="tablinks" onclick="openTab(event, 'facile')" id="defaultOpen">Facile - Continent ou Bornéo</button>
            <button class="tablinks" onclick="openTab(event, 'reg')" >Régions et villes</button>
            <button class="tablinks" onclick="openTab(event, 'roads')" >Routes</button>
            <button class="tablinks" onclick="openTab(event, 'tel')" >Indicatifs téléphoniques</button>
            <button class="tablinks" onclick="openTab(event, 'post')" >Codes postaux</button>

        </div>

        <!-- Tab content -->
        <div id="facile" class="tabcontent">

            <div class="finalcontent">
                <h3>Introduction</h3>
                <p>La Malaisie est un pays où on trouve énormément d'informations sur notre position, on progresse très vite quand on apprend à interpreter les indices.</p>
                <p>A apprendre, par ordre d'importance :</p>
                <p>-différencier la partie continentale de Bornéo.</p>
                <p>-les régions.</p>
                <p>-les grandes villes et les pièges de la carte.</p>
                <p>-la numérotation des routes.</p>
                <p>-les indicatifs téléphoniques.</p>
                <p>-les codes postaux</p>
                
            </div>

            <div class="finalcontent">
                <h3>Stratégie</h3>
                <p>En milieu urbain, il n'est pas utile d'aller très loin, il vaut mieux scanner les affiches et particulièrement les magasins pour essayer de trouver une adresse.</p>
                <p>En milieu rural, il est plus rentable de se déplacer le plus vite possible en cherchant soit un panneau de direction soit une borne kilometrique, qui vous indiquera votre numéro de route et les villes les plus proches.</p>

            </div>

            <div class="finalcontent">
            <h3>Différencier Bornéo et le continent</h3>
            <p>La malaisie est un pays en 2 parties, une partie continentale et une partie sur l'île de Bornéo. De nombreuses connaissances spécifiques abordées plus tard dans le guide tels que les noms de région/ville, les codes postaux ou les numéros de téléphone vous permettront de vous retrouver de manière plus générale dans tout le pays. En plus de cela, il y a 3 éléments de méta qui permettent de savoir dans quelle partie on se trouve : les poteaux électriques, les bollards et les panneaux de direction.</p>
            <p>1/ Le marquage des poteaux électriques : la plupart des poteaux électriques du continent ont un carré noir avec un marquage/numérotation. La présence du marquage vous garantit que vous êtes sur le continent, son absence vous indique que vous avez de bnnes chances d'être sur Bornéo.</p>
            <div class="imgdiv"><img src="../img/asia/malaysia/pole1.png" class="imgcontent"></img></div>
            <p>2/ Ce type de poteau électrique (double piquet, de gros disques sur les fils) se trouve sur Bornéo, je n'en ai jamais vu sur le continent :</p>
            <div class="imgdiv"><img src="../img/asia/malaysia/pole02.png" class="imgcontent"></img></div>
            <p>3/ La présence de bollards : il n'y a quasiment aucun bollard sur Bornéo, on peut y trouver des blocs de bétons au bord des routes mais les véritables bollards avec des réflecteurs y sont rarissimes.</p>
            <div class="imgdiv"><img src="../img/asia/malaysia/bollard.png" class="imgcontent"></img></div>
            <p>4/ Les panneaux de direction :</p>
            <p>4a/ Il est fréquent d'avoir des panneaux de direction importants sans numéro de route sur Bornéo, c'est rare sur le continent.</p>
            <div class="imgdiv"><img src="../img/asia/malaysia/direction.png" class="imgcontent"></img></div>
            <p>4b/ Les routes Q sont spécifiques à la région de Sarawak sur Bornéo.</p>
            <p>4c/ Le logo du département des transports est souvent utilisé sur les routes secondaires de la région de Sabah sur Bornéo,  avec des noms de rue (JLN) :</p>
            <div class="imgdiv"><img src="../img/asia/malaysia/jkr01.png" class="imgcontent"></img></div>
            <p>Voici à quoi ressemble le logo du panneau :</p>
            <div class="imgdiv"><img src="../img/asia/malaysia/jkr02.png" class="imgcontent"></img></div>
            <p>4d/ Les routes numérotées dans les 500 sont spécifiques à la région de Sabah sur Bornéo.</p>
            </div>

        </div>

        <div id="reg" class="tabcontent">

            <div class="finalcontent">
                <h3>Les régions</h3>
                <p>Le nom de la région apparait fréquemment, notamment sur les adresses des commerces. Savoir reconnaître le nom d'une région est vraiment très utile. Comme il y en a peu, il est ensuite assez facile de les retrouver sur la carte si on ne connait pas les emplacements par coeur.</p>
                <div class="imgdiv"><img src="../img/asia/malaysia/regions.png" class="imgcontent" onclick="enlargeImg('regions')" id="regions"></img></div>
                <P>Pour les apprendre, il y a ce <a href="https://www.geoguessr.com/seterra/en/vgp/3173">quizz Seterra</a>.</p>
            </div>

            <div class="finalcontent">
                <h3>Les grandes villes</h3>
                <p>Comme pour tous les pays, il y a le <a href="/country/quizz_cities.php">quizz villes</a> qui vous permet d'apprendre les villes.</p>
                <p>Il est important de connaître par coeur les capitales de région parce qu'elles sont cachées sur la carte. En effet, la carte google est buggée, et elle affiche le nom de région à la place du nom de la capitale, qui n'est visible qu'en zoomant très fort. Vous avez la carte avec les régions et leur capitale dans le paragraphe précédent.</p>
                <p>Je vous conseille également de retenir spécifiquement les villes de Bornéo, elles sont peu nombreuses et souvent indiquées de très loin, c'est très pratique de connaître les plus grandes.</p>

            </div>       
        </div>

        <div id="roads" class="tabcontent">

            <div class="finalcontent">
                <h3>Les numérotations des routes</h3>
                <p>Il existe différents types de routes :</p>
                <p>Les autoroutes, avec un système de péage, sont notées E pour Expressway.</p>
                <p>Les routes fédérales ont simplement un numéro, sans aucune lettre.</p>
                <p>Les routes régionales ont un numéro précédé d'une lettre qui correspond à la région.</p>
<br>
                <p>Sur la carte google vous verrez des routes notées AH pour Asian Highways. Ce sont des numérotations théoriques qui n'apparaissent pas sur les panneaux en Malaisie, si vous voulez connaître le numéro de la route correspondante il faut zoomer dessus.</p>
            </div>

            <div class="finalcontent">
                <h3>Trouver les informations</h3>
                <p> Les numéros de routes sont marqués sur la plupart des panneaux de direction, ainsi que sur les bornes kilometriques.</p>           
                <div class="imgdiv"><img src="../img/asia/malaysia/panneau.png" class="imgcontent"></img></div>
                <p>Les bornes kilométriques vous indiquent également la route et les prochaines villes sur votre chemin.</p>
                <div class="imgdiv"><img src="../img/asia/malaysia/borne.png" class="imgcontent"></img></div>
            </div>

            <div class="finalcontent">
                <h3>Les autoroutes E </h3>
                <p>Les autoroutes E sont concentrées dans la région de Selangor autour de Kuala Lumpur, mais il y en a aussi quelques unes autour de la ville de Johor à coté de Singapour.</p>
                <p>Seules 3 d'entre elles parcourent le pays : les E1, E2 et E8.</p>
                <div class="imgdiv"><img src="../img/asia/malaysia/eroadsb.png" class="imgcontent"></img></div>
            </div>

            
            <div class="finalcontent">
                <h3>Les routes fédérales</h3>
                <p>Les routes fédérales sont notées avec un simple numéro.</p>
                <p>Quelques pièges :</p>
                <p>-Les routes 1,13,22 et 5xx sont sur Bornéo. Mais les routes 1 et 13 ne sont pas uniques, elles existent aussi en Malaisie continentale.</p>
            </div>


            <div class="finalcontent">
                <h3>Les routes régionales</h3>
                <p>Pour chacune des régions, il y a une lettre correspondante : </p>
                <div class="imgdiv"><img src="../img/asia/malaysia/lroads.png" class="imgcontent"></img></div>
                <p>Piège : deux régions utilisent la lettre R, Perlis au nord ouest et Sabah à l'est de Bornéo.</p>
                <p>Note : pour un certain nombre de régions, la lettre correspond au nom de région. J pour Johor, K pour Kedah, M pour Malacca, N pour Negeri Sembilan, T pour Terengganu.</p>
            </div>


        </div>


        <div id="tel" class="tabcontent">

            <div class="finalcontent">
                <h3>Indicatifs téléphoniques</h3>
                <p>Les numéros de téléphone comportent un indicatif de 3 chiffres qui va de 030 à 099. les numéros en 01 sont les numéros de portables, les numéros en 02 sont les numéros de Singapour*.</p>
                <p>Les premiers chiffres sont faciles à retenir et suivent plus ou moins les frontières des régions :</p>
                <div class="imgdiv"><img src="../img/asia/malaysia/phone_numbers.png" class="imgcontent" onclick="enlargeImg('phone')" id="phone"></img></div>
                <p>Le <a href="/country/quizz_tel.php">quizz numéros de téléphone</a> vous permet de les apprendre, et d'aller plus loin si vous voulez apprendre les 3 premiers chiffres.</p>
                <br>
                <br>
                <br>

                <p>*Lors de l'indépendance en 1963, Singapour faisait partie de la Malaisie, mais les tensions politiques et ethniques (75% de la population de Singapour est d'origine chinoise) ont abouti à la séparation en 1965.</p>
            </div>

        </div>

    <div id="post" class="tabcontent">

        <div class="finalcontent">
        <h3>Codes postaux</h3>
        <p>Les codes postaux apparaissent souvent dans les adresses, cela peut être un plus d'avoir une idée générale de leur répartition, néanmoins les codes postaux apparaissent quaisment tout le temps sur des adresses "complètes" qui vous donneront également la ville et la région. C'est donc l'information la moins importante à apprendre.</p>
        <div class="imgdiv"><img src="../img/asia/malaysia/post.png" class="imgcontent" onclick="enlargeImg('pcode')" id="pcode"></img></div>
        </div>

    </div>








    <!----------------------------------------------------------------------------- TABS ----------------------------------------------------------------------------->
                
        <script src="/tabs.js"> </script>    

</body>

</html>

