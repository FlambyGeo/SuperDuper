<html>
<head>
<title>Cyrillic alphabet</title>
<link rel="stylesheet" href="/style.css" type='text/css'>
</head>

<body>
    <?php include '../sidebar_en.html'; ?>
    <div id="sidebar_en"></div>

    <div id="main" style="margin-left:10%">

        <div class="maintitle">
        Cyrillic alphabet
        </div>    
       
        <div class="tab">
            <button class="tablinks" onclick="openTab(event, 'voyelles')" id="defaultOpen">Vowels</button>
            <button class="tablinks" onclick="openTab(event, 'grec')">Greek letters</button>
            <button class="tablinks" onclick="openTab(event, 'piege')">Trap letters</button>
            <button class="tablinks" onclick="openTab(event, 'autre')">Other letters</button>
            <button class="tablinks" onclick="openTab(event, 'lettres')">Train with all letters</button>
            <button class="tablinks" onclick="openTab(event, 'villes')">Train with city names</button>
        </div>

        <!-- Tab content -->
        <div id="voyelles" class="tabcontent">

            <div class="finalcontent">
                <h3>Introduction</h3>
                <p>This guide will enable you to read cyrillic, through exercises. There are 4 tabs to learn the different kinds letters, one tab with a quizz including all letters, and one tab to practice reading russian towns. </p>
                <p>The reference language is russian, and even though other languages such as bulgarian or ukrainian have specificities, they are not very different from a reading point of view, so what you learn here will be 95% valid.</p>
            </div>

            <div class="finalcontent">
                <h3>Vowels</h3>
                <p>Knowing the vowels is the most important thing to read cyrillic. </p>
                <p>There are two difficult letters : И -> i, and Y -> U.</p>

                <table class="alpha">
                <thead>
                    <tr><th>Cyrillic</th><th>Latin</th></tr>
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
                <h3>Some vowels add the "y" sound at the beginning :</h3>

                <table class="alpha">
                <thead>
                    <tr><th>Cyrillic</th><th>Latin</th></tr>
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
                <h3>Training</h3>

                <table class="alpha">
                <thead>
                    <tr><th>Cyrillic</th><th>Latin</th><th>Correct answer</th></tr>
                </thead>
                <tbody id="train_vo">
                </tbody>
                </table>
            </div>

            <button id="validate" onclick="checkAnswer()" style="visibility: hidden;">validate</button>
            
        </div>

        <div id="grec" class="tabcontent">
            <div class="finalcontent">
                <h3>Greek letters</h3>
                <p>Letters Gamma, Delta, Lambda, Pi and Phi are greek letters.</p>


                <table class="alpha">
                <thead>
                    <tr><th>Cyrillic</th><th>Latin</th></tr>
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
                <h3>Training</h3>

                <table class="alpha">
                <thead>
                    <tr><th>Cyrillic</th><th>Latin</th><th>Correct answer</th></tr>
                </thead>
                <tbody id="train_gr">
                </tbody>
                </table>
            </div>

        </div>

        <div id="piege" class="tabcontent">
            <div class="finalcontent">
                <h3>The trap letters</h3>
                <p>Some letters are confusing because they have a similar shape to a letter of the latin alphabet, but have a different pronounciation.</p>

                <table class="alpha">
                <thead>
                    <tr><th>Cyrillic</th><th>Latin</th></tr>
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
                <h3>Letter B and mute letters</h3>
                <p>I grouped both mute letters and letter B because they look alike.</p>  
                <table class="alpha">
                <thead>
                <tr><th>Cyrillic</th><th>Latin</th></tr>
                </thead>
                <tbody>
                <tr><td>Ь</td><td>'</td></tr>
                <tr><td>Ъ</td><td>"</td></tr>
                <tr><td>Б</td><td>b</td></tr>

                </tbody>
            </table>
            </div>

            <div class="finalcontent">
                <h3>Training</h3>

                <table class="alpha">
                <thead>
                    <tr><th>Cyrillic</th><th>Latin</th><th>Correct answer</th></tr>
                </thead>
                <tbody id="train_p">
                </tbody>
                </table>
            </div>


        </div>

        <div id="autre" class="tabcontent">
            <div class="finalcontent">
                <h3>Other letters</h3>
                <p>The other letters are all some kind of variation of the "ch" sound. </p>

                <table class="alpha">
                <thead>
                    <tr><th>Cyrillic</th><th>Latin</th></tr>
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
                <h3>Training</h3>

                <table class="alpha">
                <thead>
                    <tr><th>Cyrillic</th><th>Latin</th><th>Correct answer</th></tr>
                </thead>
                <tbody id="train_a">
                </tbody>
                </table>
            </div>


        </div>


        <div id="lettres" class="tabcontent">
            <div class="finalcontent">
                <h3>Training with all the letters</h3>

                <table class="alpha">
                <thead>
                    <tr><th>Cyrillic</th><th>Latin</th><th>Correct answer</th></tr>
                </thead>
                <tbody id="train_all">
                </tbody>
                </table>
            </div>          

        </div>

        <div id="villes" class="tabcontent">
            <div class="finalcontent">
                <h3>Training with city names</h3>

                <table class="alpha">
                <thead>
                    <tr><th>Cyrillic</th><th>Latin</th><th>Correct answer</th></tr>
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

