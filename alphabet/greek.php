<html>
<head>
<title>Alphabet grec</title>
<link rel="stylesheet" href="/style.css" type='text/css'>
</head>

<body>
    <?php include '../sidebar.html'; ?>
    <div id="sidebar"></div>

    <div id="main" style="margin-left:10%">

        <div class="maintitle">
            Alphabet grec
        </div>    
       
        <div class="tab">
            <button class="tablinks" onclick="openTab(event, 'intro')" id="defaultOpen">Introduction</button>
            <button class="tablinks" onclick="openTab(event, 'voyelles')" >Voyelles</button>
            <button class="tablinks" onclick="openTab(event, 'consonnes')">Consonnes</button>
            <button class="tablinks" onclick="openTab(event, 'lettres')">S'entrainer avec toutes les lettres</button>
            <button class="tablinks" onclick="openTab(event, 'villes')">S'entrainer sur des noms de villes</button>
        </div>

        <!-- Tab content -->
        <div id="intro" class="tabcontent">

            <div class="finalcontent">
                <h3>Introduction</h3>
                <p>Ce guide vous permettra de déchiffrer les noms des villes de manière approximative. Il explique la conversion des lettres grecques en caractères latins de manière simple mais incomplète. En effet, le processus de traduction est complexe, un caractère grec peut être interprété différemment en fonction de sa place dans le mot, ou en fonction des caractères qui le précédent ou qui le suivent. Cela est néanmoins largement suffisant pour trouver des villes sur la carte. </p>
                <p>Toujours pour des questions de simplicité, les différents accents sur les lettres sont complètement ignorés. </p>
                <p>Vous devez déjà être familier avec plusieurs lettres grecques, certaines sont utilisées en mathémathiques dès le niveau collège (La lettre Pi qui est un P, la lettre Delta qui est un D).</p>
                <p>Si vous avez quelques bases en physique, vous en connaissez déjà plein d'autres : Lambda = L (longueur d'onde), Omega = O (vitesse angulaire), Theta = Th (déphasage), Mu = M (symbole des micromètres), Sigma = S (écart type), etc... </p>
            </div>
        </div>
        <div id="voyelles" class="tabcontent">

            <div class="finalcontent">
                <h3>Voyelles</h3>
                <table class="alpha">
                <thead>
                    <tr><th>Grec</th><th>Latin</th></tr>
                </thead>
                <tbody>
                    <tr><td>α</td><td>a</td></tr>
                    <tr><td>ε</td><td>e</td></tr>
                    <tr><td>η</td><td>i</td></tr>
                    <tr><td>ι</td><td>i</td></tr>
                    <tr><td>o</td><td>o</td></tr>
                    <tr><td>ω</td><td>o</td></tr>
                    <tr><td>υ</td><td>y/u (ca dépend)</td></tr>
                </tbody>
                </table>
            </div>   


            <div class="finalcontent">
                <h3>S'entrainer</h3>

                <table class="alpha">
                <thead>
                    <tr><th>Grec</th><th>Latin</th><th>Réponse correcte</th></tr>
                </thead>
                <tbody id="train_vo">
                </tbody>
                </table>
            </div>

            <button id="validate" onclick="checkAnswer()" style="visibility: hidden;">validate</button>
            
        </div>

        <div id="consonnes" class="tabcontent">
            <div class="finalcontent">


                <table class="alpha">
                <thead>
                    <tr><th>Grec</th><th>Latin</th></tr>
                </thead>
                <tbody>
                   <tr><td>β</td><td>v</td></tr>
                   <tr><td>γ</td><td>g</td></tr>
                   <tr><td>δ</td><td>d</td></tr>
                   <tr><td>ζ</td><td>z</td></tr>
                   <tr><td>θ</td><td>th</td></tr>
                   <tr><td>κ</td><td>k</td></tr>
                   <tr><td>λ</td><td>l</td></tr>
                   <tr><td>μ</td><td>m</td></tr>
                   <tr><td>ν</td><td>n</td></tr>
                   <tr><td>ξ</td><td>x</td></tr>
                   <tr><td>π</td><td>p</td></tr>
                   <tr><td>ρ</td><td>r</td></tr>
                   <tr><td>σ</td><td>s</td></tr>
                   <tr><td>ς</td><td>s</td></tr>
                   <tr><td>τ</td><td>t</td></tr>
                   <tr><td>Ф</td><td>f</td></tr>
                   <tr><td>χ</td><td>ch</td></tr>
                   <tr><td>ψ</td><td>ps</td></tr>
                </tbody>
                </table>
            </div>


            <div class="finalcontent">
                <h3>S'entrainer</h3>

                <table class="alpha">
                <thead>
                    <tr><th>Grec</th><th>Latin</th><th>Réponse correcte</th></tr>
                </thead>
                <tbody id="train_c">
                </tbody>
                </table>
            </div>

        </div>



        <div id="lettres" class="tabcontent">
            <div class="finalcontent">
                <h3>S'entrainer avec toutes les lettres</h3>

                <table class="alpha">
                <thead>
                    <tr><th>Grec</th><th>Latin</th><th>Réponse correcte</th></tr>
                </thead>
                <tbody id="train_all">
                </tbody>
                </table>
            </div>          

        </div>

        <div id="villes" class="tabcontent">
            <div class="finalcontent">
                <h3>S'entrainer sur des noms de villes</h3>

                <table class="alpha">
                <thead>
                    <tr><th>Grec</th><th>Latin</th><th>Réponse correcte</th></tr>
                </thead>
                <tbody id="train_vi">
                </tbody>
                </table>
            </div>          

        </div>




    </div>

    <!----------------------------------------------------------------------entrainements---------------------------------------------------------------------------------------->
    <script>

//déclarations communes

const lettersV = [
["α","a"],
["ε","e"],
["η","i"],
["ι","i"],
["υ","y/u"],
["ω","o"],
["o","o"]]

const lettersC = [
["β","v"],
["γ","g"],
["δ","d"],
["ζ","z"],
["θ","th"],
["κ","k"],
["λ","l"],
["μ","m"],
["ν","n"],
["ξ","x"],
["π","p"],
["ρ","r"],
["σ","s"],
["ς","s"],
["τ","t"],
["φ","f"],
["χ","ch"],
["ψ","ps"]]



const lettersAll = [
["α","a"],
["β","v"],
["γ","g"],
["δ","d"],
["ε","e"],
["ζ","z"],
["η","i"],
["θ","th"],
["ι","i"],
["κ","k"],
["λ","l"],
["μ","m"],
["ν","n"],
["ξ","x"],
["π","p"],
["ρ","r"],
["σ","s"],
["ς","s"],
["τ","t"],
["υ","u"],
["φ","f"],
["χ","ch"],
["ψ","ps"],
["ω","o"],
["o","o"]]

const cities = [
["Αθήνα","Athina"],
["Θεσσαλονίκη","Thessaloniki"],
["Πάτρα","Patra"],
["Ηράκλειο","Iraklio"],
["Λάρισα","Larisa"],
["Βόλος","Volos"],
["Ιωάννινα","Ioannina"],
["Τρίκαλα","Trikala"],
["Χαλκίδα","Khalkida"],
["Σέρρες","Serres"],
["Αλεξανδρούπολη","Alexandroupoli"],
["Ξάνθη","Xanthi"],
["Κατερίνη","Katerini"],
["Αγρίνιο","Agrinio"],
["Καλαμάτα","Kalamata"],
["Καβάλα","Kavala"],
["Χανιά","Khania"],
["Λαμία","Lamia"],
["Κομοτηνή","Komotini"],
["Ρόδος","Rodos"],
["Δράμα","Drama"],
["Βέροια","Veria"],
["Κοζάνη","Kozani"],
["Καρδίτσα","Karditsa"],
["Ρέθυμνο","Rethimno"],
["Πτολεμαΐδα","Ptolemaida"],
["Τρίπολη","Tripoli"],
["Κόρινθος","Korinthos"],
["Γέρακας","Yerakas"],
["Γιαννιτσά","Yiannitsa"],
["Μυτιλήνη","Mitilini"],
["Χίος","Khios"],
["Σαλαμίνα","Salamina"],
["Ελευσίνα","Elefsina"],
["Κέρκυρα","Kerkira"],
["Πύργος","Pirgos"],
["Μέγαρα","Megara"],
["Κιλκίς","Kilkis"],
["Θήβα","Thiva"],
["Άργος","argos"],
["Άρτα","arta"],
["Άρτεμη (Λούτσα)","artemi (Loutsa)"],
["Λιβαδειά","Livadia"],
["Ωραιόκαστρο","Oraiokastro"],
["Αίγιο","Aiyio"],
["Κως","Kos"],
["Κορωπί","Koropi"],
["Πρέβεζα","Preveza"],
["Σπάρτη","Sparti"],
["Νάουσα","Naousa"],
["Ορεστιάδα","Orestiada"],
["Περαία","Peraia"],
["Έδεσσα","edessa"],
["Φλώρινα","Phlorina"],
["Αμαλιάδα","Amaliada"],
["Παλλήνη","Pallini"],
["Θέρμη","Thermi"],
["Βάρη","Vari"],
["Νέα Μάκρη","Nea Makri"],
["Αλεξάνδρεια","Alexandria"],
["Παιανία","Paiania"],
["Καλύβια Θορικού","Kalivia Thorikou"],
["Ναύπλιο","Nafplio"],
["Ναύπακτος","Nafpaktos"],
["Καστοριά","Kastoria"],
["Γρεβενά","Grevena"],
["Μεσολόγγι","Mesolongi"],
["Γάζι","Gazi"],
["Ιεράπετρα","Ierapetra"],
["Κάλυμνος (Πόθια)","Kalimnos (Pothia)"],
["Ραφήνα","Raphina"],
["Λουτράκι","Loutraki"],
["Άγιος Νικόλαος","ayios Nikolaos"],
["Ερμούπολη","Ermoupoli"],
["Ιαλυσός","Ialisos"],
["Μάνδρα","Mandra"],
["Τύρναβος","Tirnavos"],
["Γλυκά Νερά","Glika Nera"],
["Άγιος Στέφανος","ayios Stephanos"],
["Διαβατά","Diavata"],
["Κιάτο","Kiato"],
["Ανατολή","Anatoli"],
["Ζάκυνθος","Zakinthos"],
["Αργοστόλι","Argostoli"],
["Πόρτο Ράφτη","Porto Raphti"],
["Μαρκόπουλο","Markopoulo"],
["Νέα Αρτάκη","Nea Artaki"],
["Ζεφύρι","Zephiri"],
["Σητεία","Sitia"],
["Νέα Μουδανιά","Nea Moudania"],
["Φάρσαλα","Pharsala"],
["Σίνδος","Sindos"],
["Διδυμότειχο","Didimotikho"],
["Σπάτα","Spata"],
["Ηγουμενίτσα","Igoumenitsa"],
["Επανομή","Epanomi"],
["Χρυσούπολη","Khrisoupoli"],
["Νέα Μηχανιώνα","Nea Mikhaniona"],
["Λευκάδα","Lefkada"],
["Νέα Πέραμος","Nea Peramos"],
["Καλαμπάκα","Kalampaka"],
["Σάμος","Samos"],
["Αλμυρός","Almiros"],
["Κουφάλια","Kouphalia"],
["Γιάννουλη","Yiannouli"],
["Λαγκαδάς","Langadas"],
["Μουρνιές","Mournies"],
["Κερατέα","Keratea"],
["Γαστούνη","Gastouni"],
["Άργος Ορεστικό","argos Orestiko"],
["Ελασσόνα","Elassona"],
["Χαλάστρα","Khalastra"],
["Νέα Καλλικράτεια","Nea Kallikratia"],
["Τρίλοφος","Trilophos"],
["Δροσιά","Drosia"],
["Καρπενήσι","Karpenisi"],
["Μαραθώνας","Marathonas"],
["Λαύριο","Lavrio"],
["Νάξος","Naxos"],
["Πολύκαστρο","Polikastro"],
["Λιτόχωρο","Litokhoro"],
["Άμφισσα","amphissa"],
["Αίγινα","Aiyina"],
["Νέο Καρλόβασι","Neo Karlovasi"],
["Κάτω Αχαΐα","Kato Akhaia"],
["Βασιλικό","Vasiliko"],
["Αριδαία","Aridaia"],
["Άνοιξη","anixi"],
["Ασβεστοχώρι","Asvestokhori"],
["Μοίρες","Mires"],
["Σούδα","Souda"],
["Παραλία Αχαΐας","Paralia Akhaias"],
["Κουνουπιδιανά","Kounoupidiana"],
["Οβρυά","Ovria"],
["Ανάβυσσος","Anavissos"],
["Θρακομακεδόνες","Thrakomakedones"],
["Πολύγυρος","Poliyiros"],
["Αμπελώνας","Ampelonas"],
["Αφάντου","Aphantou"],
["Μεσσήνη","Messini"],
["Νέοι Επιβάτες","Nei Epivates"],
["Φιλιατρά","Philiatra"],
["Λεοντάρι","Leontari"],
["Ψαχνά","Psakhna"],
["Μεγαλόπολη","Megalopoli"],
["Παλαμάς","Palamas"],
["Αυλώνας","Avlonas"],
["Μύρινα","Mirina"],
["Διόνυσος","Dionisos"],
["Σοφάδες","Sophades"],
["Νεροκούρος","Nerokouros"],
["Ξυλόκαστρο","Xilokastro"],
["Φίλυρο","Philiro"],
["Σιάτιστα","Siatista"],
["Φέρες","Pheres"],
["Σκύδρα","Skidra"],
["Πλαγιάρι","Playiari"],
["Αρχάγγελος","Arkhangelos"],
["Κρεμαστή","Kremasti"],
["Βροντάδος","Vrontados"],
["Τυμπάκι","Timpaki"],
["Ρίο","Rio"],
["Ορχομενός","Orkhomenos"],
["Κρύα Βρύση","Kria Vrisi"],
["Αγριά","Agria"],
["Μακροχώρι","Makrokhori"],
["Σιδηρόκαστρο","Sidirokastro"],
["Νέα Αγχίαλος","Nea Ankhialos"],
["Κυπαρισσία","Kiparissia"],
["Κάρυστος","Karistos"],
["Κρυονέρι","Krioneri"],
["Δροσιά","Drosia"],
["Γαργαλιάνοι","Gargaliani"],
["Αταλάντη","Atalanti"],
["Άγιος Αθανάσιος Θεσ/νίκης","ayios Athanasios Thes/nikis"],
["Νιγρίτα","Nigrita"],
["Στυλίδα","Stilida"],
["Σκιάθος","Skiathos"],
["Χορτιάτης","Khortiatis"],
["Αιάντειο Σαλαμίνας","Aiantio Salaminas"],
["Πεντέλη Αττικής","Penteli Attikis"],
["Αλιβέρι","Aliveri"],
["Τήνος","Tinos"],
["Μαγούλα","Magoula"],
["Δαράτσος Χανίων","Daratsos Khanion"],
["Αμπελάκια Σαλαμίνας","Ampelakia Salaminas"],
["Βόνιτσα","Vonitsa"],
["Καλοχώρι Θεσσαλονίκης","Kalokhori Thessalonikis"],
["Άγιοι Θεόδωροι Κορινθίας","ayii Theodori Korinthias"],
["Φιλιππιάδα","Philippiada"],
["Αγία Μαρίνα Κορωπίου","Avia Marina Koropiou"],
["Αλίαρτος","Aliartos"],
["Ζευγολατειό Κορινθίας","Zevgolatio Korinthias"],
["Ιτέα Φωκίδας","Itea Phokidas"],
["Ελευθερούπολη","Eleftheroupoli"],
["Ιστιαία","Istiaia"],
["Παροικιά","Parikia"],
["Αρκαλοχώρι","Arkalokhori"],
["Γύθειο","Yithio"],
["Νέα Μαγνησία","Nea Magnisia"],
["Κίσσαμος","Kissamos"],
["Βουλιαγμένη","Vouliagmeni"],
["Ερέτρια","Eretria"],
["Αιγίνιο","Aiyinio"],
["Κίτσι","Kitsi"],
["Κανάλια Κέρκυρας","Kanalia Kerkiras"],
["Σχηματάρι","Skhimatari"],
["Αιτωλικό","Aitoliko"],
["Κρανίδι","Kranidi"],
["Σπέτσες","Spetses"],
["Φαλάννη Λάρισας","Phalanni Larisas"],
["Περιβόλια Κυδωνίας Χανίων","Perivolia Kidonias Khanion"],
["Ανδραβίδα","Andravida"],
["Αρχάνες","Arkhanes"],
["Κατσικάς","Katsikas"],
["Νίκαια Λάρισας","Nikaia Larisas"],
["Νέα Ραιδεστός","Nea Raidestos"],
["Νεμέα","Nemea"],
["Ποταμός Κέρκυρας","Potamos Kerkiras"],
["Σουφλί","Souphli"],
["Μαλεσίνα Φθιώτιδας","Malesina Phthiotidas"],
["Αμφιλοχία","Amphilokhia"],
["Ηράκλεια Σερρών","Iraklia Serron"],
["Μύκονος (πόλη)","Mikonos (poli)"],
["Βασιλικά Θεσσαλονίκης","Vasilika Thessalonikis"],
["Λεωνίδιο","Leonidio"],
["Ληξούρι","Lixouri"],
["Λεπτοκαρυά Πιερίας","Leptokaria Pierias"],
["Σταυρός Θεσσαλονίκης","Stavros Thessalonikis"],
["Αμύνταιο","Amintaio"],
["Δρυμός Θεσσαλονίκης","Drimos Thessalonikis"],
["Κύμινα","Kimina"],
["Πόρος (χώρα)","Poros (khora)"],
["Αμάρυνθος","Amarinthos"],
["Κιμμέρια","Kimmeria"],
["Παστίδα Ρόδου","Pastida Rodou"],
["Γουμένισσα","Goumenissa"],
["Βαρθολομιό","Vartholomio"],
["Λαγυνά","Layina"],
["Προσοτσάνη","Prosotsani"],
["Νέα Πέραμος Καβάλας","Nea Peramos Kavalas"],
["Ροδίτσα Φθιώτιδας","Roditsa Phthiotidas"],
["Δεσκάτη","Deskati"],
["Κορινός","Korinos"],
["Ελεούσα Ιωαννίνων","Eleousa Ioanninon"],
["Χώρα Μεσσηνίας","Khora Messinias"],
["Άγιος Νικόλαος Ληλαντίων","ayios Nikolaos Lilantion"],
["Καρδία Θεσσαλονίκης","Kardia Thessalonikis"],
["Άρια Αργολίδας","aria Argolidas"],
["Κρηνίδες","Krinides"],
["Βελβεντός","Velventos"],
["Καπανδρίτι","Kapandriti"],
["Σάπες","Sapes"],
["Βραχάτι","Vrakhati"],
["Λητή","Liti"],
["Μελισσοχώρι Θεσσαλονίκης","Melissokhori Thessalonikis"],
["Ιερισσός","Ierissos"],
["Βάγια Βοιωτίας","Vayia Viotias"],
["Λιμένας Θάσου","Limenas Thasou"],
["Ζηπάρι Κω","Zipari Ko"],
["Μάλια","Malia"],
["Κοσκινού Ρόδου","Koskinou Rodou"],
["Καρδαμίτσια Ιωαννίνων","Kardamitsia Ioanninon"],
["Αγιά Λάρισας","Avia Larisas"],
["Γαλατάς Χανίων","Galatas Khanion"],
["Νέος Μαρμαράς","Neos Marmaras"],
["Άγιος Αθανάσιος Δράμας","ayios Athanasios Dramas"],
["Αλεπού Κέρκυρας","Alepou Kerkiras"],
["Ζαχάρω","Zakharo"],
["Καλλιθέα Πιερίας","Kallithea Pierias"],
["Μελίκη","Meliki"],
["Παραλία Βαθέος Αυλίδος","Paralia Vatheos Avlidos"],
["Καλαμπάκι","Kalampaki"],
["Βέλο Κορινθίας","Velo Korinthias"],
["Σοχός","Sokhos"],
["Χαλκηδόνα Θεσσαλονίκης","Khalkidona Thessalonikis"],
["Σκόπελος","Skopelos"],
["Νεάπολη Λακωνίας","Neapoli Lakonias"],
["Χλόη Καστοριάς","Khloi Kastorias"],
["Νέα Τρίγλια Χαλκιδικής","Nea Triglia Khalkidikis"],
["Σκάλα Λακωνίας","Skala Lakonias"],
["Γέφυρα Θεσσαλονίκης","Yephira Thessalonikis"],
["Μανιάκοι","Maniaki"],
["Ντράφι","Draphi"],
["Νέα Μεσημβρία","Nea Mesimvria"],
["Βελεστίνο","Velestino"],
["Αγία Τριάδα Θεσσαλονίκης","Avia Triada Thessalonikis"],
["Αμφίκλεια","Amphiklia"],
["Πλωμάρι","Plomari"],
["Σέρβια","Servia"],
["Ορμύλια","Ormilia"],
["Κρόκος Κοζάνης","Krokos Kozanis"],
["Εξοχή Ιωαννίνων","Exokhi Ioanninon"],
["Λιμένας Χερσονήσου","Limenas Khersonisou"],
["Νέο Ρύσιο","Neo Risio"],
["Κόνιτσα","Konitsa"],
["Φυλή","Phili"],
["Λευκίμμη","Lefkimmi"],
["Παναιτώλιο","Panaitolio"],
["Σαρωνίδα Αττικής","Saronida Attikis"],
["Οινόφυτα Βοιωτίας","Inophita Viotias"],
["Σταμάτα","Stamata"],
["Αξιούπολη","Axioupoli"],
["Δοξάτο","Doxato"],
["Πεδινή Ιωαννίνων","Pedini Ioanninon"],
["Ερυθρές Αττικής","Erithres Attikis"],
["Ασπροβάλτα","Asprovalta"],
["Καλυθιές Ρόδου","Kalithies Rodou"],
["Κατοχή Αιτωλοακαρνανίας","Katokhi Aitoloakarnanias"],
["Νεοχώρι Αιτωλοακαρνανίας","Neokhori Aitoloakarnanias"],
["Κολινδρός","Kolindros"],
["Νέα Βύσσα","Nea Vissa"],
["Καινούργιο Αιτ/νίας","Kainouryio Ait/nias"],
["Βιολί Χαράκι Ρεθύμνης","Violi Kharaki Rethimnis"],
["Δεμένικα","Demenika"],
["Νέα Κίος Αργολίδας","Nea Kios Argolidas"],
["Κασσάνδρεια","Kassandria"],
["Καμένα Βούρλα","Kamena Vourla"],
["Χωριστή","Khoristi"],
["Αμυγδαλεώνας","Amigdaleonas"],
["Νέα Παλάτια","Nea Palatia"],
["Παλαιά Φώκαια","Palaia Phokaia"],
["Νικήτη","Nikiti"],
["Πηγάδια Καρπάθου","Pigadia Karpathou"],
["Πλάκα Δήλεσι Βοιωτίας","Plaka Dilesi Viotias"],
["Αστακός Αιτωλοακαρνανίας","Astakos Aitoloakarnanias"],
["Κρανέα Ελασσόνος","Kranea Elassonos"],
["Σπερχειάδα","Sperkhiada"],
["Νεάπολη Λασιθίου","Neapoli Lasithiou"],
["Πάλαιρος","Palairos"],
["Άγιος Βασίλειος Αχαΐας","ayios Vasilios Akhaias"],
["Αράχωβα","Arakhova"],
["Λέχαιο","Lekhaio"],
["Λεχαινά","Lekhaina"],
["Παραδείσι","Paradisi"],
["Μεγάλη Παναγία","Megali Panayia"],
["Ανατολικό Θεσσαλονίκης","Anatoliko Thessalonikis"],
["Ίασμος Ροδόπης","iasmos Rodopis"],
["Κένταυρος Ξάνθης","Kentavros Xanthis"],
["Βραχναίικα","Vrakhnaiika"],
["Ροδοδάφνη Αχαΐας","Rododaphni Akhaias"],
["Λουτρά Αιδηψού Εύβοιας","Loutra Aidipsou evias"],
["Λιβανάτες","Livanates"],
["Νέα Βρασνά","Nea Vrasna"],
["Ξηροπόταμος Δράμας","Xiropotamos Dramas"],
["Μαρκόπουλο Ωρωπού","Markopoulo Oropou"],
["Περίσταση Πιερίας","Peristasi Pierias"],
["Γαλάτιστα","Galatista"],
["Νέα Σελεύκεια","Nea Selefkia"],
["Μολάοι","Molai"],
["Νέα Ζίχνη","Nea Zikhni"],
["Καναλλάκι Πρέβεζας","Kanallaki Prevezas"],
["Φιλιάτες","Philiates"],
["Τραγανό Πηνειού Ηλείας","Tragano Piniou Ilias"],
["Σελήνια Σαλαμίνας","Selinia Salaminas"],
["Ερμιόνη Αργολίδας","Ermioni Argolidas"],
["Μέτσοβο","Metsovo"],
["Σταυρός Φθιώτιδας","Stavros Phthiotidas"],
["Εχίνος","Ekhinos"],
["Λυγουριό Αργολίδας","Ligourio Argolidas"],
["Λιμενάρια Θάσου","Limenaria Thasou"],
["Άγιος Κωνσταντίνος Φθιώτιδας","ayios Konstantinos Phthiotidas"],
["Πυλί Κω","Pili Ko"],
["Νάουσα Πάρου","Naousa Parou"],
["Σήμαντρα Χαλκιδικής","Simantra Khalkidikis"],
["Νέα Μάλγαρα","Nea Malgara"],
["Νέο Σούλι Σερρών","Neo Souli Serron"],
["Πέλλα","Pella"],
["Λευκώνας Σερρών","Lefkonas Serron"],
["Βαθύ Εύβοιας","Vathi evias"],
["Κύμη","Kimi"],
["Ελάτεια","Elatia"],
["Αγία Μαρίνα Λέρου","Avia Marina Lerou"],
["Παραμυθιά Θεσπρωτίας","Paramithia Thesprotias"],
["Οιχαλία Τρικάλων","Ikhalia Trikalon"],
["Σύμη","Simi"],
["Πύλος","Pilos"],
["Βαθύλακκος Θεσσαλονίκης","Vathilakkos Thessalonikis"],
["Αγιάσος","Aviasos"],
["Ανώγεια","Anoyia"],
["Συκούριο Λάρισας","Sikourio Larisas"],
["Τυχερό Έβρου","Tikhero evrou"],
["Αρναία","Arnaia"],
["Βαμβακόπουλο Χανίων","Vamvakopoulo Khanion"],
["Βάρδα","Varda"],
["Νεάπολη Κοζάνης","Neapoli Kozanis"],
["Άστρος","astros"],
["Ευξεινούπολη","Efxinoupoli"],
["Διμήνι Μαγνησίας","Dimini Magnisias"],
["Μακρακώμη","Makrakomi"],
["Αγία Παρασκευή Θεσ/νίκης","Avia Paraskevi Thes/nikis"],
["Λιβάδι Λάρισας","Livadi Larisas"],
["Νικήσιανη","Nikisiani"],
["Άγιος Κήρυκος Ικαρίας","ayios Kirikos Ikarias"],
["Νέα Λάμψακος Εύβοιας","Nea Lampsakos evias"],
["Παληό Καβάλας","Palio Kavalas"],
["Γαλατάς Τροιζηνίας","Galatas Trizinias"],
["Αγία Παρασκευή Λέσβου","Avia Paraskevi Lesvou"],
["Κυριάκι Βοιωτίας","Kiriaki Viotias"],
["Διακοπτό","Diakopto"],
["Ζαγκλιβέρι","Zangliveri"],
["Τερπνή","Terpni"],
["Νέα Καρβάλη","Nea Karvali"],
["Κάτω Νευροκόπι","Kato Nevrokopi"],
["Κέφαλος Κω","Kephalos Ko"],
["Σκούταρι Σερρών","Skoutari Serron"],
["Κάτω Γούβες Ηρακλείου","Kato Gouves Irakliou"],
["Κάτω Σούλι Αττικής","Kato Souli Attikis"],
["Ανθούσα Αττικής","Anthousa Attikis"],
["Αλιστράτη","Alistrati"],
["Κυψέλη Αίγινας","Kipseli Aiyinas"],
["Μιντιλόγλι Αχαΐας","Mintilogli Akhaias"],
["Διώνη Αττικής","Dioni Attikis"],
["Κρουσώνας Ηρακλείου","Krousonas Irakliou"],
["Ζαρός","Zaros"],
["Πολίχνιτος Λέσβου","Polikhnitos Lesvou"],
["Μεσοποταμία Καστοριάς","Mesopotamia Kastorias"],
["Χαλκούτσι","Khalkoutsi"],
["Λεπενού","Lepenou"],
["Ταγαράδες","Tagarades"],
["Πάργα","Parga"],
["Πλατύ Ημαθίας","Plati Imathias"],
["Βλαχιώτης Λακωνίας","Vlakhiotis Lakonias"],
["Άδενδρο","adendro"],
["Κωστακιοί","Kostakii"],
["Ροδόπολη Αττικής","Rodopoli Attikis"],
["Ζαγορά Μαγνησίας","Zagora Magnisias"],
["Ροδολίβος","Rodolivos"],
["Πάνορμος Καλύμνου","Panormos Kalimnou"],
["Αντιμάχεια","Antimakhia"],
["Καρδιτσομαγούλα","Karditsomagoula"],
["Σέλερο","Selero"],
["Λακκί Λέρου","Lakki Lerou"],
["Φαρκαδόνα","Pharkadona"],
["Τσαριτσάνη","Tsaritsani"],
["Καρίτσα Πιερίας","Karitsa Pierias"],
["Πεντάλοφος Θεσσαλονίκης","Pentalophos Thessalonikis"],
["Αγία Βαρβάρα Ηρακλείου","Avia Varvara Irakliou"],
["Πλαταμώνας Πιερίας","Platamonas Pierias"],
["Γαλαξείδι Φωκίδας","Galaxidi Phokidas"],
["Πικέρμι","Pikermi"],
["Γυμνό Ευβοίας","Yimno Evias"],
["Αιανή Κοζάνης","Aiani Kozanis"],
["Νέα Μανολάδα Ηλείας","Nea Manolada Ilias"],
["Αγία Μαρίνα Χανίων","Avia Marina Khanion"]
]

var randomLetter = lettersV[parseInt(Math.random() * lettersV.length)];
var inputB = document.createElement("INPUT"); 
var refTable = document.getElementById("train_vo");
inputB.setAttribute("type", "text");



//enter key


// Execute a function when the user releases a key on the keyboard
inputB.addEventListener("keyup", function(event) {
// Number 13 is the "Enter" key on the keyboard
if (event.keyCode === 13) {
// Cancel the default action, if needed
event.preventDefault();
// Trigger the button element with a click
document.getElementById("validate").click();
}
}); 




function addLine(tableID) {

    if (tableID == "train_vo"){randomLetter = lettersV[parseInt(Math.random() * lettersV.length)];}
    if (tableID == "train_c"){randomLetter = lettersC[parseInt(Math.random() * lettersC.length)];}
    if (tableID == "train_all"){randomLetter = lettersAll[parseInt(Math.random() * lettersAll.length)];}
    if (tableID == "train_vi"){randomLetter = cities[parseInt(Math.random() * cities.length)];}

    // Récupération d'une référence à la table
        
        var oldButton = document.getElementById("validate");

    // Insère une ligne dans la table à l'indice de ligne 0
    var newLine = refTable.insertRow(0);

    // Insère une cellule dans la ligne à l'indice 0
    var newCellA = newLine.insertCell(0);
    var newCellB = newLine.insertCell(1);
    var newCellC = newLine.insertCell(2);

     // Ajoute un nœud texte à la cellule
    var textA = document.createTextNode(randomLetter[0]);                
    newCellA.appendChild(textA);
    newCellB.appendChild(inputB);
    inputB.focus();
}



function checkAnswer() {

    var row0 = refTable.rows[0];
    var answer = inputB.value;                   
    var newText = document.createTextNode(answer);
    inputB.value = "";

    row0.cells[1].removeChild(inputB);
    row0.cells[1].appendChild(newText);
    row0.cells[2].appendChild(document.createTextNode(randomLetter[1]))
    
    //console.log(answer);
    //console.log(randomLetter[1]);
    if (answer == randomLetter[1])
    { console.log("ok");
        row0.style.background = "green";
        addLine(refTable.id);
    }
        else
    {
        console.log("fail");
        row0.style.background = "red";
        addLine(refTable.id);
    }


}

function setTable(strTable) {
refTable=document.getElementById(strTable);
refTable.innerHTML = "";
addLine(strTable);
}

//execution
addLine(refTable);

</script>


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
  
  
    //training tables
    if(tabName == "voyelles") { setTable("train_vo");}
    if(tabName == "consonnes" ) { setTable("train_c");}
    if(tabName == "lettres" ) { setTable("train_all");}
    if(tabName == "villes" ) { setTable("train_vi");}


  }
 
</script>                

</body>

</html>

