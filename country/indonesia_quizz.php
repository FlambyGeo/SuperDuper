<html>
<head>
<title>Indonesie</title>
<link rel="stylesheet" href="../style.css">
<!------------------------------------------MAP---------------------------------------------------------> 
<link rel="stylesheet" href="https://unpkg.com/leaflet@1.8.0/dist/leaflet.css" integrity="sha512-hoalWLoI8r4UszCkZ5kL8vayOGVae1oxXe/2A4AO6J9+580uKHDO3JdHb7NzwwzK5xr/Fs0W40kiNHxM9vyTtQ==" crossorigin=""/>
<script src="https://unpkg.com/leaflet@1.8.0/dist/leaflet.js" integrity="sha512-BB3hKbKWOc9Ez/TAwyWxNXeoV9c1v6FIeYiBieIWkpLjauysF18NzgR1MBNBXf8/KABdlkX68nAhlwcDFLGPCQ==" crossorigin=""></script>



<!------------------------------------------MAP STYLES--------------------------------------------------------->                                                                                        
<style>
      #mapIndonesia {
        height: 800px;
        width: 1200px;
      }
    </style>
</head>



<body>
    <?php include '../sidebar.html'; ?>
    <div id="sidebar"></div>

    <div id="main" style="margin-left:10%">

        <div class="maintitle">
        Indonesie
        </div>    
        <div class="tab">
            
            <button class="tablinks" onclick="openTab(event, 'quizz')" id="defaultOpen">Map</button>
        </div>

        <!-- Tab content -->



        <div id="quizz" class="tabcontent" id="defaultOpen">

        <select name="carte" id="carte">
            <option value="kab">Kabupaten</option>
            <option value="pk">Poste Kode</option>
            <option value="ac3">Téléphone 3 numéros</option>
            <option value="ac4">Téléphone 4 numéros</option>
        </select>
        <button onclick="loadMap();">VALIDER</button>
        <div>Cliquez sur : <span id="printA"></span> &nbsp;&nbsp;&nbsp;&nbsp;<button onclick='skip();'>passer</button></div>
        
            
            <div id="mapIndonesia"></div>

        </div>
        


    </div>

    <!------------------------------------------TABS---------------------------------------------------------> 
 <script src="/tabs.js"></script> 
    <!--------------------------------------------------------------------------data------------------------------------------------------------------------->
    <script>
        kabupatenList = ["Aceh Singkil",
"Aceh Tamiang",
"Agam",
"Alor",
"Asahan",
"Badung",
"Balikpapan",
"Bandar Lampung",
"Bandung",
"Banggai",
"Banggai Kepulauan",
"Bangka",
"Bangkalan",
"Bangli",
"Banjar",
"Banjar",
"Banjar Baru",
"Banjarmasin",
"Banjarnegara",
"Bantaeng",
"Bantul",
"Banyuasin",
"Banyumas",
"Banyuwangi",
"Barito",
"Barito Kuala",
"Barru",
"Batam",
"Batang",
"Batang Hari",
"Batu",
"Baubau",
"Bekasi",
"Belitung",
"Belu",
"Bengkalis",
"Bengkayang",
"Bengkulu",
"Berau",
"Bima",
"Binjai",
"Bitung",
"Blitar",
"Blora",
"Boalemo",
"Bojonegoro",
"Bolaang Mongondow",
"Bondowoso",
"Bone",
"Bone Bolango",
"Bontang",
"Boyolali",
"Brebes",
"Bukittinggi",
"Buleleng",
"Bulongan",
"Bulukumba",
"Bungo",
"Buol",
"Buton",
"Ciamis",
"Cianjur",
"Cilacap",
"Cilegon",
"Cimahi",
"Dairi",
"Deli Serdang",
"Demak",
"Denpasar",
"Depok",
"Dharmasraya",
"Dompu",
"Donggala",
"Dumai",
"Ende",
"Enrekang",
"Flores Timur",
"Garut",
"Gianyar",
"Gorontalo",
"Gowa",
"Gresik",
"Grobogan",
"Gunung Kidul",
"Gunung Mas",
"Hulu Sungai",
"Indragiri Hilir",
"Indragiri Hulu",
"Indramayu",
"Jakarta",
"Jember",
"Jembrana",
"Jeneponto",
"Jepara",
"Jombang",
"Kampar",
"Kapuas",
"Kapuas Hulu",
"Karanganyar",
"Karangasem",
"Karawang",
"Karimun",
"Karo",
"Katingan",
"Kaur",
"Kebumen",
"Kendal",
"Kendari",
"Kerinci",
"Ketapang",
"Klaten",
"Klungkung",
"Kolaka",
"Kota Bima",
"Kota Bogor",
"Kota Cirebon",
"Kota Kediri",
"Kota Kupang",
"Kota Magelang",
"Kota Mojokerto",
"Kota Probolinggo",
"Kota Semarang",
"Kota Surabaya",
"Kota Tangerang",
"Kota Tasikmalaya",
"Kota Tegal",
"Kotabaru",
"Kotamobagu",
"Kotawaringin Barat",
"Kotawaringin Timur",
"Kuantan Singingi",
"Kudus",
"Kulon Progo",
"Kuningan",
"Kupang",
"Kutai Barat",
"Kutai Kartanegara",
"Kutai Timur",
"Labuhanbatu",
"Lahat",
"Lamandau",
"Lamongan",
"Lampung Barat",
"Lampung Selatan",
"Lampung Tengah",
"Lampung Timur",
"Lampung Utara",
"Landak",
"Langkat",
"Langsa",
"Lebak",
"Lembata",
"Lima Puluh Koto",
"Lingga",
"Lombok",
"Lubuk Linggau",
"Lumajang",
"Luwu",
"Madiun",
"Magelang",
"Magetan",
"Majalengka",
"Majene",
"Makassar",
"Malang",
"Malinau",
"Mamasa",
"Mamuju",
"Manado",
"Mandailing Natal",
"Manggarai",
"Maros",
"Mataram",
"Medan",
"Merangin",
"Metro",
"Minahasa",
"Mojokerto",
"Morowali",
"Muara Enim",
"Muaro Jambi",
"Muna",
"Murung Raya",
"Musi Banyu Asin",
"Musi Rawas",
"Ngada",
"Nganjuk",
"Ngawi",
"Nias",
"Nunukan",
"Ogan Komering Ilir",
"Ogan Komering Ulu",
"Pacitan",
"Padang",
"Padang Panjang",
"Padang Pariaman",
"Padang Sidempuan",
"Pagar Alam",
"Palangka Raya",
"Palembang",
"Palopo",
"Palu",
"Pamekasan",
"Pandeglang",
"Pangkajene Kepulauan",
"Pangkal Pinang",
"Pare-Pare",
"Parigi Moutong",
"Pasaman",
"Paser",
"Pasuruan",
"Pati",
"Payakumbuh",
"Pekalongan",
"Pekanbaru",
"Pelalawan",
"Pemalang",
"Pematang Siantar",
"Penajam Paser Utara",
"Pesawaran",
"Pesisir Selatan",
"Pinrang",
"Pohuwato",
"Polewali Mandar",
"Ponorogo",
"Pontianak",
"Poso",
"Prabumulih",
"Pulang Pisau",
"Purbalingga",
"Purwakarta",
"Purworejo",
"Rejang Lebong",
"Rembang",
"Rokan Hilir",
"Rokan Hulu",
"Salatiga",
"Samarinda",
"Sambas",
"Samosir",
"Sampang",
"Sanggau",
"Sarolangun",
"Sawah Lunto",
"Selayar",
"Serang",
"Serdang Bedagai",
"Seruyan",
"Siak",
"Sibolga",
"Sidenreng Rappang",
"Sidoarjo",
"Sigi",
"Sijunjung",
"Sikka",
"Simalungun",
"Singkawang",
"Sinjai",
"Sintang",
"Situbondo",
"Sleman",
"Solok",
"Soppeng",
"Sragen",
"Subang",
"Sukabumi",
"Sukamara",
"Sukoharjo",
"Sumba Barat",
"Sumba Timur",
"Sumbawa",
"Sumedang",
"Sumenep",
"Surakarta",
"Tabalong",
"Tabanan",
"Takalar",
"Tana Toraja",
"Tanah Datar",
"Tanah Laut",
"Tangerang",
"Tanggamus",
"Tanjung Balai",
"Tanjung Jabung",
"Tanjung Pinang",
"Tapanuli",
"Tapin",
"Tarakan",
"Tebing Tinggi",
"Tebo",
"Tegal",
"Temanggung",
"Timor Tengah",
"Toba",
"Tojo Una Una",
"Toli-Toli",
"Tomohon",
"Trenggalek",
"Tuban",
"Tulang Bawang",
"Tulungagung",
"Wajo",
"Way Kanan",
"Wonogiri",
"Wonosobo",
"Yogyakarta"];

postKodeList = 

["15",
"16",
"17",
"1x",
"20",
"21",
"22",
"24",
"25",
"26",
"27",
"28",
"29",
"30",
"31",
"32",
"33",
"34",
"35",
"36",
"37",
"38",
"39",
"40",
"41",
"42",
"43",
"44",
"45",
"46",
"50",
"51",
"52",
"53",
"54",
"55",
"56",
"57",
"58",
"59",
"60",
"61",
"62",
"63",
"64",
"65",
"66",
"67",
"68",
"69",
"70",
"71",
"72",
"73",
"74",
"75",
"76",
"77",
"78",
"79",
"80",
"83",
"84",
"85",
"86",
"87",
"90",
"91",
"92",
"93",
"94",
"95",
"96"];

areaCode3List =
["021",
"022",
"023",
"024",
"025",
"026",
"027",
"028",
"029",
"031",
"032",
"033",
"034",
"035",
"036",
"037",
"038",
"040",
"041",
"042",
"043",
"044",
"045",
"046",
"047",
"048",
"051",
"052",
"053",
"054",
"055",
"056",
"061",
"062",
"063",
"064",
"065",
"071",
"072",
"073",
"074",
"075",
"076",
"077"];

areaCode4List =
["021",
"022",
"0231",
"0232",
"0233",
"0234",
"024",
"0251",
"0252",
"0253",
"0254",
"0260",
"0261",
"0262",
"0263",
"0264",
"0265",
"0266",
"0267",
"0271",
"0272",
"0273",
"0274",
"0275",
"0280",
"0281",
"0283",
"0284",
"0285",
"0286",
"0287",
"0291",
"0292",
"0293",
"0294",
"0295",
"0296",
"0298",
"031",
"0321",
"0322",
"0323",
"0324",
"0328",
"0331",
"0332",
"0333",
"0334",
"0335",
"0338",
"0341",
"0342",
"0343",
"0351",
"0352",
"0353",
"0354",
"0355",
"0356",
"0357",
"0358",
"0361",
"0362",
"0363",
"0365",
"0366",
"0368",
"0370",
"0371",
"0373",
"0374",
"0376",
"0379",
"0380",
"0381",
"0382",
"0383",
"0384",
"0386",
"0387",
"0388",
"0389",
"0401",
"0402",
"0403",
"0405",
"0409",
"0410",
"0411",
"0413",
"0414",
"0418",
"0419",
"0420",
"0421",
"0422",
"0423",
"0426",
"0427",
"0428",
"0431",
"0434",
"0438",
"044",
"0443",
"0445",
"0450",
"0451",
"0452",
"0453",
"0457",
"0461",
"0462",
"0464",
"0471",
"0473",
"0481",
"0482",
"0484",
"0485",
"0511",
"0512",
"0513",
"0517",
"0518",
"0519",
"0526",
"0527",
"0528",
"0531",
"0532",
"0534",
"0536",
"0537",
"0538",
"0541",
"0542",
"0543",
"0545",
"0548",
"0549",
"0551",
"0552",
"0553",
"0554",
"0556",
"0561",
"0562",
"0563",
"0564",
"0565",
"0567",
"061",
"0620",
"0621",
"0622",
"0623",
"0625",
"0627",
"0628",
"0631",
"0632",
"0633",
"0634",
"0636",
"0639",
"0641",
"0658",
"0711",
"0712",
"0713",
"0714",
"0716",
"0717",
"0718",
"0719",
"0721",
"0722",
"0723",
"0724",
"0725",
"0726",
"0727",
"0728",
"0730",
"0731",
"0732",
"0733",
"0734",
"0735",
"0736",
"0737",
"0739",
"0741",
"0742",
"0743",
"0744",
"0745",
"0746",
"0747",
"0748",
"0751",
"0752",
"0753",
"0754",
"0755",
"0756",
"0760",
"0761",
"0762",
"0764",
"0765",
"0766",
"0768",
"0769",
"0771",
"0776",
"0777",
"0778"];

        </script>


<!---------------------------------------------------------------------------------MAP----------------------------------------------------------------------------------->
<script>
      var mapI;
      var geoJSONLayer;
      var geoJSON;
      var legend = L.control({position: 'bottomright'});  
      var tooltipThreshold = 8;    
      var geoLayer;  
      var quizzAnswer; 
      var quizzList;        
      var randomNumber;
      var layerList;
      var soundClick=new Audio("/sound/click.wav");
      var soundValid=new Audio("/sound/valid.wav");
      soundClick.volume = 0.2;
      soundValid.volume = 0.1;
      var select = document.getElementById('carte');
      var showInfo = document.getElementById('printA'); 
         



      function setQuizz(qList){
      quizzList=qList;
      randomNumber =parseInt(Math.random() * quizzList.length);
      quizzAnswer = quizzList[randomNumber];
     showInfo.innerHTML = quizzAnswer;
      }

     drawMapI();
      mapI.doubleClickZoom.disable();
      loadJSON("kab");

      function loadMap(){

        var selectedValue = select.options[select.selectedIndex].value;
        

        //clear the layers
        mapI.removeLayer(geoLayer);
        
        //load the new json
        loadJSON(selectedValue);

      }


      function onClickPK(e) {
    if ( e.target.feature.properties.PostKode == quizzAnswer) {
            arrayRemove(quizzList,quizzAnswer);
            randomNumber =parseInt(Math.random() * quizzList.length);
            quizzAnswer = quizzList[randomNumber];
            showInfo.innerHTML = quizzAnswer;
            e.target.setStyle({fillColor: '#dddddd'});
            soundValid.play();
    }
    else
    {soundClick.play();}
  }

  function onClickKab(e) {
    if ( e.target.feature.properties.NAME_2 == quizzAnswer) {
            arrayRemove(quizzList,quizzAnswer);
            randomNumber =parseInt(Math.random() * quizzList.length);
            quizzAnswer = quizzList[randomNumber];
            showInfo.innerHTML = quizzAnswer;
            e.target.setStyle({fillColor: '#dddddd'});
            soundValid.play();
    }
    else
    {soundClick.play();}
  }

  function onClickAC3(e) {
    if ( e.target.feature.properties.AreaCode3 == quizzAnswer) {
            arrayRemove(quizzList,quizzAnswer);
            randomNumber =parseInt(Math.random() * quizzList.length);
            quizzAnswer = quizzList[randomNumber];
            showInfo.innerHTML = quizzAnswer;
            e.target.setStyle({fillColor: '#dddddd'});
            soundValid.play();
    }
    else
    {soundClick.play();}
  }

  function onClickAC4(e) {
    if ( e.target.feature.properties.AreaCode4 == quizzAnswer) {
            arrayRemove(quizzList,quizzAnswer);
            randomNumber =parseInt(Math.random() * quizzList.length);
            quizzAnswer = quizzList[randomNumber];
            showInfo.innerHTML = quizzAnswer;
            e.target.setStyle({fillColor: '#dddddd'});
            soundValid.play();
    }
    else
    {soundClick.play();}
  }


      function arrayRemove(arr, value) { 
    
    return arr.filter(function(ele){ 
        return ele != value; 
    });
}

      function featurefunction (feature, layer){  
          //layer.bindTooltip(feature.properties.PostKode, {direction:"center", permanent:true, className: 'labelstyle'});
          layerList[feature.properties.PostKode] = layer;
           layer.on({click : function (e) {onClick(e);}}); 
        
        }

      async function loadJSON(choice) {

        layerList = new Array();

        if (choice == "kab"){
           
            setQuizz(kabupatenList);
            const response = await fetch('/geojson/indonesia_kabupaten_final.geojson');
            const json = await response.json();
            geoLayer = L.geoJSON(json, { onEachFeature: function (feature, layer) {
              layerList[feature.properties.NAME_2] = layer;
           layer.on({click : function (e) {onClickKab(e);}}); 
        }}); 
            geoLayer.addTo(mapI);
        }

        if (choice == "pk"){
          setQuizz(postKodeList);
            const response = await fetch('/geojson/indonesia_postkode2.geojson');
            const json = await response.json();
            geoLayer = L.geoJSON(json, { onEachFeature: function (feature, layer) {
              layerList[feature.properties.PostKode] = layer;
           layer.on({click : function (e) {onClickPK(e);}}); }}
            ); 
            geoLayer.addTo(mapI);
        }

        if (choice == "ac3"){
          setQuizz(areaCode3List); 
            const response = await fetch('/geojson/indonesia_areacode3_final.geojson');
            const json = await response.json();
            geoLayer = L.geoJSON(json, { onEachFeature: function (feature, layer) {
              layerList[feature.properties.AreaCode3] = layer;
           layer.on({click : function (e) {onClickAC3(e);}}); }}); 
            geoLayer.addTo(mapI);
        }
    
        if (choice == "ac4"){
          setQuizz(areaCode4List); 
            const response = await fetch('/geojson/indonesia_areacode4_final.geojson');
            const json = await response.json();
            geoLayer = L.geoJSON(json, { onEachFeature: function (feature, layer) {
          layerList[feature.properties.AreaCode4] = layer;
           layer.on({click : function (e) {onClickAC4(e);}}); }}); 
            geoLayer.addTo(mapI);
        }
    
    }
        

                       
      function drawMapI() {
        mapI = L.map("mapIndonesia", {minZoom: 5, maxZoom : 10}).setView([-3, 116], 4);
        const attribution =
          '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors';
        const tileUrl = "https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png";
        const tiles = L.tileLayer(tileUrl, { attribution });
        tiles.addTo(mapI);
      }
                                                                            
                      
      function skip(){
             layerList[quizzAnswer].setStyle({fillColor: '#FF0000'});
             mapI.fitBounds(layerList[quizzAnswer].getBounds());
            arrayRemove(quizzList,quizzAnswer);
            randomNumber =parseInt(Math.random() * quizzList.length);
            quizzAnswer = quizzList[randomNumber];
            showInfo.innerHTML = quizzAnswer;
            soundClick.play();

      }                                                                      
     

                       
                       

    </script>


</body>

</html>



