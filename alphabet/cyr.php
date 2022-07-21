<html>
<head>
<title>Alphabet cyrillique</title>
<link rel="stylesheet" href="/style.css" type='text/css'>
</head>

<body>
    <?php include '../sidebar.html'; ?>
    <div id="sidebar"></div>

    <div id="main" style="margin-left:10%">

        <div class="maintitle">
            Alphabet cyrillique
        </div>    
       
        <div class="tab">
            <button class="tablinks" onclick="openTab(event, 'voyelles')" id="defaultOpen">Voyelles</button>
            <button class="tablinks" onclick="openTab(event, 'grec')">Lettres greques</button>
            <button class="tablinks" onclick="openTab(event, 'piege')">Lettres piege</button>
            <button class="tablinks" onclick="openTab(event, 'autre')">Autres lettres</button>
            <button class="tablinks" onclick="openTab(event, 'lettres')">S'entrainer avec toutes les lettres</button>
            <button class="tablinks" onclick="openTab(event, 'villes')">S'entrainer sur des noms de villes</button>
        </div>

        <!-- Tab content -->
        <div id="voyelles" class="tabcontent">

            <div class="finalcontent">
                <h3>Introduction</h3>
                <p>Ce guide vous permettra d'apprendre à lire le cyrillique, avec des exercices d'entrainement. Il se compose de 4 onglets pour apprendre les lettres, d'un onglet récapitulatif pour réviser l'ensemble des lettres, et d'un onglet qui vous permet de pratiquer la lecture sur les noms de ville russes. </p>
                <p>La langue de référence est le russe, en sachant que les autres langues telles que l'ukrainien ou le bulgare ont leurs particularités mais ne sont pas très différentes du point de vue de la lecture, ce que vous apprenez pour le russe y est valable dans 95% des cas.</p>
            </div>

            <div class="finalcontent">
                <h3>Voyelles</h3>
                <p>Si vous connaissez les voyelles vous avez déjà fait 50% du travail pour pouvoir lire le cyrillique. </p>
                <p>Le cyrillique utilise certaines voyelles similaires au latin, avec deux pièges : le И qui correspond au i latin, et le Y qui correspond au U.</p>

                <table class="alpha">
                <thead>
                    <tr><th>Cyrillique</th><th>Latin</th></tr>
                </thead>
                <tbody>
                    <tr><td>a</td><td>a</td></tr>
                    <tr><td>Э</td><td>e</td></tr>
                    <tr><td>И</td><td>i</td></tr>
                    <tr><td>o</td><td>o</td></tr>
                    <tr><td>y</td><td>u</td></tr>
                </tbody>
                </table>
            </div>   
         
            <div class="finalcontent">
                <h3>Certaines voyelles se prononcent avec le son y au début</h3>

                <table class="alpha">
                <thead>
                    <tr><th>Cyrillique</th><th>Latin</th></tr>
                </thead>
                <tbody>
                    <tr><td>Я</td><td>ya</td></tr>
                    <tr><td>E</td><td>ye</td></tr>
                    <tr><td>ё</td><td>yo</td></tr>
                    <tr><td>ю</td><td>yu</td></tr>
                    <tr><td>Ы</td><td>y'</td></tr>
                </tbody>
                </table>
            </div>


            <div class="finalcontent">
                <h3>S'entrainer</h3>

                <table class="alpha">
                <thead>
                    <tr><th>Cyrillique</th><th>Latin</th><th>Réponse correcte</th></tr>
                </thead>
                <tbody id="train_vo">
                </tbody>
                </table>
            </div>

            <button id="validate" onclick="checkAnswer()" style="visibility: hidden;">validate</button>
            
        </div>

        <div id="grec" class="tabcontent">
            <div class="finalcontent">
                <h3>lettres empruntées au grec</h3>
                <p>les lettres Gamma, Delta, Lambda, Pi et Phi sont issues du grec.</p>


                <table class="alpha">
                <thead>
                    <tr><th>Cyrillique</th><th>Latin</th></tr>
                </thead>
                <tbody>
                   <tr><td>Г</td><td>g</td></tr>
                   <tr><td>Д</td><td>d</td></tr>
                   <tr><td>Л</td><td>l</td></tr>
                   <tr><td>П</td><td>p</td></tr>
                   <tr><td>Ф</td><td>f</td></tr>
                </tbody>
                </table>
            </div>


            <div class="finalcontent">
                <h3>S'entrainer</h3>

                <table class="alpha">
                <thead>
                    <tr><th>Cyrillique</th><th>Latin</th><th>Réponse correcte</th></tr>
                </thead>
                <tbody id="train_gr">
                </tbody>
                </table>
            </div>

        </div>

        <div id="piege" class="tabcontent">
            <div class="finalcontent">
                <h3>Les lettres pièges</h3>
                <p>Les lettres piège sont les plus difficles à retenir, puisqu'elles ont la meme forme qu'une lettre latine mais pas la même prononciation.</p>

                <table class="alpha">
                <thead>
                    <tr><th>Cyrillique</th><th>Latin</th></tr>
                </thead>
                <tbody>
                    <tr><td>C</td><td>s</td></tr>
                    <tr><td>B</td><td>v</td></tr>
                    <tr><td>H</td><td>n</td></tr>
                    <tr><td>P</td><td>r</td></tr>

                </tbody>
               </table>
            </div>

            <div class="finalcontent">
                <h3>Les lettres muettes et la lettre B</h3>
                <p>J'ai regroupé les 2 symboles muets et la lettre B car ils se ressemblent.</p>  
                <table class="alpha">
                <thead>
                <tr><th>Cyrillique</th><th>Latin</th></tr>
                </thead>
                <tbody>
                <tr><td>Ь</td><td>'</td></tr>
                <tr><td>Ъ</td><td>"</td></tr>
                <tr><td>Б</td><td>b</td></tr>

                </tbody>
            </table>
            </div>

            <div class="finalcontent">
                <h3>S'entrainer</h3>

                <table class="alpha">
                <thead>
                    <tr><th>Cyrillique</th><th>Latin</th><th>Réponse correcte</th></tr>
                </thead>
                <tbody id="train_p">
                </tbody>
                </table>
            </div>


        </div>

        <div id="autre" class="tabcontent">
            <div class="finalcontent">
                <h3>Autres lettres</h3>
                <p>Les autres lettres sont pour beaucoup des variantes du son "ch". </p>

                <table class="alpha">
                <thead>
                    <tr><th>Cyrillique</th><th>Latin</th></tr>
                </thead>
                <tbody>
                    <tr><td>З</td><td>z</td></tr>               
                    <tr><td>Ж</td><td>zh</td></tr>
                    <tr><td>Й</td><td>j</td></tr>
                    <tr><td>Ц</td><td>cz</td></tr>
                    <tr><td>Ч</td><td>ch</td></tr>
                    <tr><td>Ш</td><td>sh</td></tr>
                    <tr><td>Щ</td><td>shh</td></tr>
                </tbody>
                </table>
            </div>

            <div class="finalcontent">
                <h3>S'entrainer</h3>

                <table class="alpha">
                <thead>
                    <tr><th>Cyrillique</th><th>Latin</th><th>Réponse correcte</th></tr>
                </thead>
                <tbody id="train_a">
                </tbody>
                </table>
            </div>


        </div>


        <div id="lettres" class="tabcontent">
            <div class="finalcontent">
                <h3>S'entrainer avec toutes les lettres</h3>

                <table class="alpha">
                <thead>
                    <tr><th>Cyrillique</th><th>Latin</th><th>Réponse correcte</th></tr>
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
                    <tr><th>Cyrillique</th><th>Latin</th><th>Réponse correcte</th></tr>
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
    ["a","a"],
    ["Э","e"],
    ["e","e"],    
    ["И","i"],
    ["o","o"],
    ["Я","ya"],
    ["E","ye"],
    ["Y","u"],
    ["ё","yo"],
    ["ю","yu"],
    ["Ы","y'"]
]

const lettersG = [
    ["Г","g"],
    ["Д","d"],
    ["Л","l"],
    ["П","p"],
    ["Ф","f"]
]

const lettersP = [
    ["C","s"],
    ["B","v"],
    ["H","n"],
    ["P","r"],
    ["Ь","'"],
    ["Ъ",'"'],
    ["Б","b"]
]

const lettersA = [
    ["З","z"],
    ["Ж","zh"],
    ["Й","j"],
    ["Ц","cz"],
    ["Ч","ch"],
    ["Ш","sh"],
    ["Щ","shh"]

]

const lettersAll = [
    ["a","a"],
    ["Э","e"],
    ["e","e"],    
    ["И","i"],
    ["o","o"],
    ["Я","ya"],
    ["E","ye"],
    ["Y","u"],
    ["ё","yo"],
    ["ю","yu"],
    ["Ы","y'"],
    ["Г","g"],
    ["Д","d"],
    ["Л","l"],
    ["П","p"],
    ["Ф","f"],
    ["C","s"],
    ["B","v"],
    ["H","n"],
    ["P","r"],
    ["Ь","'"],
    ["Ъ",'"'],
    ["Б","b"],
    ["З","z"],
    ["Ж","zh"],
    ["Й","j"],
    ["Ц","cz"],
    ["Ч","ch"],
    ["Ш","sh"],
    ["Щ","shh"]
]

const cities = [
["Москва","Moscow"],
["Санкт-Петербург","Saint Petersburg"],
["Новосибирск","Novosibirsk"],
["Екатеринбург","Yekaterinburg"],
["Казань","Kazan"],
["Нижний Новгород","Nizhny Novgorod"],
["Челябинск","Chelyabinsk"],
["Самара","Samara"],
["Омск","Omsk"],
["Ростов-на-Дону","Rostov-on-Don"],
["Уфа","Ufa"],
["Красноярск","Krasnoyarsk"],
["Воронеж","Voronezh"],
["Пермь","Perm"],
["Волгоград","Volgograd"],
["Краснодар","Krasnodar"],
["Саратов","Saratov"],
["Тюмень","Tyumen"],
["Тольятти","Tolyatti"],
["Ижевск","Izhevsk"],
["Барнаул","Barnaul"],
["Ульяновск","Ulyanovsk"],
["Иркутск","Irkutsk"],
["Хабаровск","Khabarovsk"],
["Махачкала","Makhachkala"],
["Ярославль","Yaroslavl"],
["Владивосток","Vladivostok"],
["Оренбург","Orenburg"],
["Томск","Tomsk"],
["Кемерово","Kemerovo"],
["Новокузнецк","Novokuznetsk"],
["Рязань","Ryazan"],
["Набережные Челны","Naberezhnye Chelny"],
["Астрахань","Astrakhan"],
["Киров","Kirov"],
["Пенза","Penza"],
["Балашиха","Balashikha"],
["Липецк","Lipetsk"],
["Чебоксары","Cheboksary"],
["Калининград","Kaliningrad"],
["Тула","Tula"],
["Севастополь","Sevastopol"],
["Ставрополь","Stavropol"],
["Курск","Kursk"],
["Улан-Удэ","Ulan-Ude"],
["Сочи","Sochi"],
["Тверь","Tver"],
["Магнитогорск","Magnitogorsk"],
["Иваново","Ivanovo"],
["Брянск","Bryansk"],
["Белгород","Belgorod"],
["Сургут","Surgut"],
["Владимир","Vladimir"],
["Чита","Chita"],
["Архангельск","Arkhangelsk"],
["Нижний Тагил","Nizhny Tagil"],
["Симферопoль","Simferopol"],
["Калуга","Kaluga"],
["Якутск","Yakutsk"],
["Грозный","Grozny"],
["Волжский","Volzhsky"],
["Смоленск","Smolensk"],
["Саранск","Saransk"],
["Череповец","Cherepovets"],
["Курган","Kurgan"],
["Подольск","Podolsk"],
["Вологда","Vologda"],
["Орёл","Oryol"],
["Владикавказ","Vladikavkaz"],
["Тамбов","Tambov"],
["Мурманск","Murmansk"],
["Петрозаводск","Petrozavodsk"],
["Нижневартовск","Nizhnevartovsk"],
["Кострома","Kostroma"],
["Йошкар-Ола","Yoshkar-Ola"],
["Новороссийск","Novorossiysk"],
["Стерлитамак","Sterlitamak"],
["Химки","Khimki"],
["Таганрог","Taganrog"],
["Мытищи","Mytishchi"],
["Сыктывкар","Syktyvkar"],
["Комсомольск-на-Амуре","Komsomolsk-on-Amur"],
["Нижнекамск","Nizhnekamsk"],
["Нальчик","Nalchik"],
["Шахты","Shakhty"],
["Дзержинск","Dzerzhinsk"],
["Энгельс","Engels"],
["Благовещенск","Blagoveshchensk"],
["Королёв","Korolyov"],
["Братск","Bratsk"],
["Великий Новгород","Veliky Novgorod"],
["Орск","Orsk"],
["Старый Оскол","Stary Oskol"],
["Ангарск","Angarsk"],
["Псков","Pskov"],
["Люберцы","Lyubertsy"],
["Южно-Сахалинск","Yuzhno-Sakhalinsk"],
["Бийск","Biysk"],
["Прокопьевск","Prokopyevsk"],
["Абакан","Abakan"],
["Армавир","Armavir"],
["Балаково","Balakovo"],
["Норильск","Norilsk"],
["Рыбинск","Rybinsk"],
["Северодвинск","Severodvinsk"],
["Петропавловск-Камчатский","Petropavlovsk-Kamchatsky"],
["Красногорск","Krasnogorsk"],
["Уссурийск","Ussuriysk"],
["Волгодонск","Volgodonsk"],
["Новочеркасск","Novocherkassk"],
["Сызрань","Syzran"],
["Каменск-Уральский","Kamensk-Uralsky"],
["Златоуст","Zlatoust"],
["Альметьевск","Almetyevsk"],
["Электросталь","Elektrostal"],
["Керчь","Kerch"],
["Миасс","Miass"],
["Салават","Salavat"],
["Хасавюрт","Khasavyurt"],
["Пятигорск","Pyatigorsk"],
["Копейск","Kopeysk"],
["Находка","Nakhodka"],
["Рубцовск","Rubtsovsk"],
["Майкоп","Maykop"],
["Коломна","Kolomna"],
["Березники","Berezniki"],
["Одинцово","Odintsovo"],
["Домодедово","Domodedovo"],
["Ковров","Kovrov"],
["Нефтекамск","Neftekamsk"],
["Каспийск","Kaspiysk"],
["Нефтеюганск","Nefteyugansk"],
["Кисловодск","Kislovodsk"],
["Новочебоксарск","Novocheboksarsk"],
["Батайск","Bataysk"],
["Щёлково","Shchyolkovo"],
["Дербент","Derbent"],
["Серпухов","Serpukhov"],
["Назрань","Nazran"],
["Раменское","Ramenskoye"],
["Черкесск","Cherkessk"],
["Новомосковск","Novomoskovsk"],
["Кызыл","Kyzyl"],
["Первоуральск","Pervouralsk"],
["Новый Уренгой","Novy Urengoy"],
["Орехово-Зуево","Orekhovo-Zuyevo"],
["Долгопрудный","Dolgoprudny"],
["Обнинск","Obninsk"],
["Невинномысск","Nevinnomyssk"],
["Ессентуки","Yessentuki"],
["Октябрьский","Oktyabrsky"],
["Димитровград","Dimitrovgrad"],
["Пушкино","Pushkino"],
["Камышин","Kamyshin"],
["Ноябрьск","Noyabrsk"],
["Евпатория","Yevpatoria"],
["Реутов","Reutov"],
["Жуковский","Zhukovsky"],
["Северск","Seversk"],
["Муром","Murom"],
["Новошахтинск","Novoshakhtinsk"],
["Артём","Artyom"],
["Ачинск","Achinsk"],
["Бердск","Berdsk"],
["Элиста","Elista"],
["Арзамас","Arzamas"],
["Ханты-Мансийск","Khanty-Mansiysk"],
["Ногинск","Noginsk"],
["Елец","Yelets"],
["Железногорск","Zheleznogorsk"],
["Зеленодольск","Zelenodolsk"],
["Новокуйбышевск","Novokuybyshevsk"],
["Сергиев Посад","Sergiyev Posad"],
["Тобольск","Tobolsk"],
["Воткинск","Votkinsk"],
["Саров","Sarov"],
["Междуреченск","Mezhdurechensk"],
["Михайловск","Mikhaylovsk"],
["Серов","Serov"],
["Сарапул","Sarapul"],
["Анапа","Anapa"],
["Ленинск-Кузнецкий","Leninsk-Kuznetsky"],
["Ухта","Ukhta"],
["Воскресенск","Voskresensk"],
["Соликамск","Solikamsk"],
["Глазов","Glazov"],
["Магадан","Magadan"],
["Великие Луки","Velikiye Luki"],
["Мичуринск","Michurinsk"],
["Лобня","Lobnya"],
["Гатчина","Gatchina"],
["Канск","Kansk"],
["Каменск-Шахтинский","Kamensk-Shakhtinsky"],
["Губкин","Gubkin"],
["Бузулук","Buzuluk"],
["Киселёвск","Kiselyovsk"],
["Ейск","Yeysk"],
["Ивантеевка","Ivanteyevka"],
["Новотроицк","Novotroitsk"],
["Чайковский","Chaykovsky"],
["Бугульма","Bugulma"],
["Железногорск","Zheleznogorsk"],
["Юрга","Yurga"],
["Кинешма","Kineshma"],
["Азов","Azov"],
["Кузнецк","Kuznetsk"],
["Усть-Илимск","Ust-Ilimsk"],
["Новоуральск","Novouralsk"],
["Клин","Klin"],
["Видное","Vidnoye"],
["Мурино","Murino"],
["Ялта","Yalta"],
["Озёрск","Ozyorsk"],
["Кропоткин","Kropotkin"],
["Бор","Bor"],
["Всеволожск","Vsevolozhsk"],
["Геленджик","Gelendzhik"],
["Черногорск","Chernogorsk"],
["Усолье-Сибирское","Usolye-Sibirskoye"],
["Балашов","Balashov"],
["Новоалтайск","Novoaltaysk"],
["Дубна","Dubna"],
["Шадринск","Shadrinsk"],
["Верхняя Пышма","Verkhnyaya Pyshma"],
["Выборг","Vyborg"],
["Елабуга","Yelabuga"],
["Минеральные Воды","Mineralnye Vody"],
["Егорьевск","Yegoryevsk"],
["Троицк","Troitsk"],
["Чехов","Chekhov"],
["Чапаевск","Chapayevsk"],
["Белово","Belovo"],
["Биробиджан","Birobidzhan"],
["Когалым","Kogalym"],
["Кирово-Чепецк","Kirovo-Chepetsk"],
["Дмитров","Dmitrov"],
["Туймазы","Tuymazy"],
["Славянск-на-Кубани","Slavyansk-na-Kubani"],
["Феодосия","Feodosia"],
["Минусинск","Minusinsk"],
["Сосновый Бор","Sosnovy Bor"],
["Наро-Фоминск","Naro-Fominsk"],
["Анжеро-Судженск","Anzhero-Sudzhensk"],
["Кстово","Kstovo"],
["Сунжа","Sunzha"],
["Буйнакск","Buynaksk"],
["Ступино","Stupino"],
["Георгиевск","Georgiyevsk"],
["Заречный","Zarechny"],
["Горно-Алтайск","Gorno-Altaysk"],
["Белогорск","Belogorsk"],
["Белорецк","Beloretsk"],
["Кунгур","Kungur"],
["Ишим","Ishim"],
["Урус-Мартан","Urus-Martan"],
["Ишимбай","Ishimbay"],
["Павловский Посад","Pavlovsky Posad"],
["Клинцы","Klintsy"],
["Гуково","Gukovo"],
["Россошь","Rossosh"],
["Асбест","Asbest"],
["Котлас","Kotlas"],
["Зеленогорск","Zelenogorsk"],
["Донской","Donskoy"],
["Лениногорск","Leninogorsk"],
["Избербаш","Izberbash"],
["Туапсе","Tuapse"],
["Вольск","Volsk"],
["Ревда","Revda"],
["Будённовск","Budyonnovsk"],
["Берёзовский","Beryozovsky"],
["Сибай","Sibay"],
["Полевской","Polevskoy"],
["Лыткарино","Lytkarino"],
["Лысьва","Lysva"],
["Кумертау","Kumertau"],
["Белебей","Belebey"],
["Нерюнгри","Neryungri"],
["Лесосибирск","Lesosibirsk"],
["Фрязино","Fryazino"],
["Сертолово","Sertolovo"],
["Чистополь","Chistopol"],
["Прохладный","Prokhladny"],
["Борисоглебск","Borisoglebsk"],
["Нягань","Nyagan"],
["Лабинск","Labinsk"],
["Крымск","Krymsk"],
["Тихвин","Tikhvin"],
["Гудермес","Gudermes"],
["Алексин","Aleksin"],
["Александров","Alexandrov"],
["Михайловка","Mikhaylovka"],
["Ржев","Rzhev"],
["Щёкино","Shchyokino"],
["Тихорецк","Tikhoretsk"],
["Сальск","Salsk"],
["Шали","Shali"],
["Павлово","Pavlovo"],
["Шуя","Shuya"],
["Мелеуз","Meleuz"],
["Краснотурьинск","Krasnoturyinsk"],
["Искитим","Iskitim"],
["Североморск","Severomorsk"],
["Апатиты","Apatity"],
["Свободный","Svobodny"],
["Выкса","Vyksa"],
["Лиски","Liski"],
["Дзержинский","Dzerzhinsky"],
["Волжск","Volzhsk"],
["Вязьма","Vyazma"],
["Воркута","Vorkuta"],
["Гусь-Хрустальный","Gus-Khrustalny"],
["Снежинск","Snezhinsk"],
["Краснокамск","Krasnokamsk"],
["Арсеньев","Arsenyev"],
["Краснокаменск","Krasnokamensk"],
["Белореченск","Belorechensk"],
["Салехард","Salekhard"],
["Жигулёвск","Zhigulyovsk"],
["Котельники","Kotelniki"],
["Тимашёвск","Timashyovsk"],
["Кириши","Kirishi"]

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
    if (tableID == "train_gr"){randomLetter = lettersG[parseInt(Math.random() * lettersG.length)];}
    if (tableID == "train_p"){randomLetter = lettersP[parseInt(Math.random() * lettersP.length)];}
    if (tableID == "train_a"){randomLetter = lettersA[parseInt(Math.random() * lettersA.length)];}
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
    if(tabName == "grec" ) { setTable("train_gr");}
    if(tabName == "piege" ) { setTable("train_p");}
    if(tabName == "autre" ) { setTable("train_a");}
    if(tabName == "lettres" ) { setTable("train_all");}
    if(tabName == "villes" ) { setTable("train_vi");}


  }
 
</script>                

</body>

</html>

