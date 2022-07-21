function loadTiles(myMap,myTiles,myLayer,currentType,nextType) {

    if (currentType != nextType) {

        if (myTiles != undefined){myTiles.remove(myMap);}
    if (myLayer != undefined) {myLayer.remove(myMap);} 
    var newTiles; 
    var newTilesURL;
    var newAttribution;  
    var newLayer;


if (nextType == "osm") {
    newAttribution =  '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors';
    newTilesURL = "https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png";
    myMap.options.maxZoom = 16;
}

if (nextType == "stamen") {
    newAttribution = 'Map tiles by <a href="http://stamen.com">Stamen Design</a>, <a href="http://creativecommons.org/licenses/by/3.0">CC BY 3.0</a>';
    newTilesURL = 'https://stamen-tiles-{s}.a.ssl.fastly.net/terrain/{z}/{x}/{y}{r}.png';
    myMap.options.maxZoom = 11;
}

if (nextType == "stamenvide") {
    newAttribution =  'Map tiles by <a href="http://stamen.com">Stamen Design</a>, <a href="http://creativecommons.org/licenses/by/3.0">CC BY 3.0</a>';
    newTilesURL = 'https://stamen-tiles-{s}.a.ssl.fastly.net/watercolor/{z}/{x}/{y}{r}.png';
    myMap.options.maxZoom = 11;
}

if (nextType == "stadia") {
    newAttribution =  '&copy; <a href="https://stadiamaps.com/">Stadia Maps</a>';
    newTilesURL = 'https://tiles.stadiamaps.com/tiles/outdoors/{z}/{x}/{y}{r}.png';
    myMap.options.maxZoom = 14;
}

if (nextType == "esri") {
    newAttribution =  'Tiles &copy; Esri';
    newTilesURL = 'https://server.arcgisonline.com/ArcGIS/rest/services/World_Street_Map/MapServer/tile/{z}/{y}/{x}';
    myMap.options.maxZoom = 14;
}

if (nextType == "esrivide") {
    newAttribution =  'Tiles &copy; Esri';
    newTilesURL = 'https://server.arcgisonline.com/ArcGIS/rest/services/World_Physical_Map/MapServer/tile/{z}/{y}/{x}';
    myMap.options.maxZoom = 8;
}

if (nextType == "cartodb") {
    newAttribution =  '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors &copy; <a href="https://carto.com/attributions">CARTO</a>';
    newTilesURL = 'https://{s}.basemaps.cartocdn.com/rastertiles/voyager/{z}/{x}/{y}{r}.png';
    myMap.options.maxZoom = 14;
}

if (nextType == "cartodbvide") {
    newAttribution =  '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors &copy; <a href="https://carto.com/attributions">CARTO</a>';
    newTilesURL = 'https://{s}.basemaps.cartocdn.com/rastertiles/voyager_nolabels/{z}/{x}/{y}{r}.png';
    myMap.options.maxZoom = 14;
}



newTiles = L.tileLayer(newTilesURL, { newAttribution });
newTiles.addTo(myMap);


if (nextType == "stamenvide" || nextType == "esrivide" || nextType == "cartodbvide") { newLayer = new L.StamenTileLayer("toner-lines"); newLayer.addTo(myMap);}

var ret = new Object();
ret.layer = newLayer;
ret.tiles = newTiles;
ret.mapType = nextType;
return ret;

}
else {
    var ret = new Object();
    ret.layer = myLayer;
    ret.tiles = myTiles;
    ret.mapType = nextType;
    return ret;

}
}