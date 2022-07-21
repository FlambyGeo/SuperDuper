<html>
<head>
<title>Alphabets asiatiques</title>
<link rel="stylesheet" href="../style.css">
</head>

<body>
    <?php include '../sidebar.html'; ?>
    <div id="sidebar"></div>

    <div id="main" style="margin-left:10%">

        <div class="maintitle">
        Guide débutant - Asie
        </div>    
        <div class="tab">
            

            <button class="tablinks" onclick="openTab(event, 'latin')" id="defaultOpen">Latin et Dzongkha</button>
            <button class="tablinks" onclick="openTab(event, 'thai')">Khmer, Thaï et Lao</button>
            <button class="tablinks" onclick="openTab(event, 'coreen')">Coréen, Japonais et Chinois</button>
            <button class="tablinks" onclick="openTab(event, 'tamoul')">Tamoul et Singhalais</button>
            <button class="tablinks" onclick="openTab(event, 'bangla')">Bangla</button>
        </div>

        <!-- Tab content -->
        <div id="latin" class="tabcontent">

            <div class="finalcontent">
            <h3>Asie du sud Est : l'alphabet latin</h3>
            <p>6 pays utilisent l'alphabet latin en Asie du sud est.</p>
            </div>   
         
            <div class="finalcontent">
            <h3>le Vietnam</h3>
            Le vietnamien est très facile à reconnaitre : des mots très courts et beaucoup trop d'accents.
            <div class="imgdiv"><img src="../img/beginner/asia/vietnamien.png" class="imgcontent"></img></div>
            </div>

            
        </div>

        <div id="thai" class="tabcontent">
            <div class="finalcontent">
            <h3>Les alphabets khmer, thaï et lao</h3>
            <p>le thaï et le lao sont extremement proches l'un de l'autres, ce sont tous deux des dérivés lointains du khmer.</p>
            </div>

        </div>

        <div id="coreen" class="tabcontent">
        <div class="finalcontent">
            <h3>Les alphabets Coréen, Japonais et Chinois</h3>
            <p>L'alphabet coréen est totalement unique, en revanche le japonais et le chinois partagent de nombreux caractères.</p>
        </div>
        </div>

        <div id="bangla" class="tabcontent">
        <div class="finalcontent">
            <h3>L'alphabet Bangla</h3>
            <p>Le bangla, script utilisé au bangladesh, se caracterise par la ligne continue en haut des mots. C’est en cela très similaires aux differentes langues indiennes, cependant, pour des raisons légales, les rues en Inde ne sont pas disponibles sur streetview (il existe en revanche des lieux tels que les temples ou les universités indiennes qui sont couverts). </p>
            <div class="imgdiv"><img src="../img/beginner/asia/bangla.png" class="imgcontent"></img></div>
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

