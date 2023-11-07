<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mapa</title>
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.6.0/dist/leaflet.css" crossorigin=""/>
    <script src="https://unpkg.com/leaflet@1.6.0/dist/leaflet.js" crossorigin=""></script>

<!----------------------Leaflet-ZoomBar---------------------------------->

    <link rel="stylesheet" type="text/css" href="stylesheets/L.Control.ZoomBar.css"/>
    <script type="text/javascript" src="js/L.Control.ZoomBar.js"></script>

<!----------------------Leaflet-ZoomBar---------------------------------->

    <!----------------------Leaflet-search---------------------------------->

    <script src="/assets/531cbf94/leaflet-search.js"></script>

    <!--API Maps JavaScript inline-->

    <script async src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&callback=initMap">
    </script>
    
    <!--Teste dia 03-10
    

    <link rel="stylesheet" href="./iconLayers.css"/>
    <script src="./iconLayers.js"></script>-->

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>



    <!--Leaflet Draw Plugin-->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/leaflet.draw/0.4.2/leaflet.draw.css"/>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/leaflet.draw/0.4.2/leaflet.draw.js"></script>

    <!--Geojson Estado de Roraima-->
    <script src="./GeoJson/roraima/estadoDeRoraima.geojson"></script>

    <!--GeodJson rodovias estaduais-->
    <script src="./GeoJson/rodoviasEstaduais/rodEstAltoAlegre.geojson"></script>
    <script src="./GeoJson/rodoviasEstaduais/rodEstAmajari.geojson"></script>
    <script src="./GeoJson/rodoviasEstaduais/rodEstBoaVista.geojson"></script>
    <script src="./GeoJson/rodoviasEstaduais/rodEstBonfim.geojson"></script>
    <script src="./GeoJson/rodoviasEstaduais/rodEstCanta.geojson"></script>
    <script src="./GeoJson/rodoviasEstaduais/rodEstMucajai.geojson"></script>
    <script src="./GeoJson/rodoviasEstaduais/rodEstNormandia.geojson"></script>
    <script src="./GeoJson/rodoviasEstaduais/rodEstPacaraima.geojson"></script>
    <script src="./GeoJson/rodoviasEstaduais/rodEstUiramuta.geojson"></script>

    <!--GeodJson rodovias federais-->

    <script src="./GeoJson/rodoviasFederais/rodFedAmajari.geojson"></script>
    <script src="./GeoJson/rodoviasFederais/rodFedBoaVista.geojson"></script>
    <script src="./GeoJson/rodoviasFederais/rodFedBonfim.geojson"></script>
    <script src="./GeoJson/rodoviasFederais/rodFedCanta.geojson"></script>
    <script src="./GeoJson/rodoviasFederais/rodFedCaracarai.geojson"></script>
    <script src="./GeoJson/rodoviasFederais/rodFedCaroebe.geojson"></script>
    <script src="./GeoJson/rodoviasFederais/rodFedIracema.geojson"></script>
    <script src="./GeoJson/rodoviasFederais/rodFedMucajai.geojson"></script>
    <script src="./GeoJson/rodoviasFederais/rodFedNormandia.geojson"></script>
    <script src="./GeoJson/rodoviasFederais/rodFedPacaraima.geojson"></script>
    <script src="./GeoJson/rodoviasFederais/rodFedRorainopolis.geojson"></script>
    <script src="./GeoJson/rodoviasFederais/rodFedSJBaliza.geojson"></script>
    <script src="./GeoJson/rodoviasFederais/rodFedSLAnaua.geojson"></script>

    <!--GeodJson rodovias municipais-->

    <script src="./GeoJson/rodoviasVicMunicipais/rodVicMunAltoAlegre.geojson"></script>
    <script src="./GeoJson/rodoviasVicMunicipais/rodVicMunAmajari.geojson"></script>
    <script src="./GeoJson/rodoviasVicMunicipais/rodVicMunBoaVista.geojson"></script>
    <script src="./GeoJson/rodoviasVicMunicipais/rodVicMunBonfim.geojson"></script>
    <script src="./GeoJson/rodoviasVicMunicipais/rodVicMunCanta.geojson"></script>
    <script src="./GeoJson/rodoviasVicMunicipais/rodVicMunCaracarai.geojson"></script>
    <script src="./GeoJson/rodoviasVicMunicipais/rodVicMunCaroebe.geojson"></script>
    <script src="./GeoJson/rodoviasVicMunicipais/rodVicMunIracema.geojson"></script>
    <script src="./GeoJson/rodoviasVicMunicipais/rodVicMunMucajai.geojson"></script>
    <script src="./GeoJson/rodoviasVicMunicipais/rodVicMunNormandia.geojson"></script>
    <script src="./GeoJson/rodoviasVicMunicipais/rodVicMunPacaraima.geojson"></script>
    <script src="./GeoJson/rodoviasVicMunicipais/rodVicMunRorainopolis.geojson"></script>
    <script src="./GeoJson/rodoviasVicMunicipais/rodVicMunSJBaliza.geojson"></script>
    <script src="./GeoJson/rodoviasVicMunicipais/rodVicMunSLAnaua.geojson"></script>
    <script src="./GeoJson/rodoviasVicMunicipais/rodVicMunUiramuta.geojson"></script>

    <!--GeoJson municipios de RR-->

    <script src="./GeoJson/municipios/altoAlegre.geojson"></script>
    <script src="./GeoJson/municipios/amajari.geojson"></script>
    <script src="./GeoJson/municipios/boaVista.geojson"></script>
    <script src="./GeoJson/municipios/bonfim.geojson"></script>
    <script src="./GeoJson/municipios/canta.geojson"></script>
    <script src="./GeoJson/municipios/caracarai.geojson"></script>
    <script src="./GeoJson/municipios/caroebe.geojson"></script>
    <script src="./GeoJson/municipios/iracema.geojson"></script>
    <script src="./GeoJson/municipios/mucajai.geojson"></script>
    <script src="./GeoJson/municipios/normandia.geojson"></script>
    <script src="./GeoJson/municipios/pacaraima.geojson"></script>
    <script src="./GeoJson/municipios/rorainopolis.geojson"></script>
    <script src="./GeoJson/municipios/sjBaliza.geojson"></script>
    <script src="./GeoJson/municipios/slAnaua.geojson"></script>
    <script src="./GeoJson/municipios/uiramuta.geojson"></script>

    <!--GeoJson pontes-->
    
    <script src="./GeoJson/pontes/pontesDeConcreto.geojson"></script>
    <script src="./GeoJson/pontes/pontesDeMadeira.geojson"></script>


    <!--Biblioteca Leaflet-->
    
    <link rel="stylesheet" href="./Leaflet/leaflet.groupedlayercontrol.css">
    <script src="./Leaflet/leaflet.groupedlayercontrol.js"></script>
    


    <style>
    .container{
        border: 2px solid red;
        width: 34%;
        height: 10vh;
        
        
        text-align: center;
        display: flex;
    }

    .h4{
        margin: 0;
        padding: 0%;
    }
    .p{
        margin: 0;
        padding: 0%;
        
    }
    
    #mapDIV {
        
        height: 90vh;
        display: flex;
        width: 70vw;
        border: solid 1px black;
    }

    
    .sidebar{
        border: 2px solid red;
        height: 100%;
    }
    
    </style>

    
</head>

<body>
     <!-----------------------side bar vindo do gisdeit------------------------->

    <div class="container">
        <div>
            <h4>SEINF - Secretaria Estadual de Infraestrutura de Roraima</h4>
            <p><b>DEIT - Departamento de Infraestrutura de Transporte</b> <br>
            GIS-DEIT - Sistema de Informações Geograficas DEIT    
            </p>
        </div>
        <!--<h4>SEINF - Secretaria Estadual de Infraestrutura de Roraima</h4>
        <p>DEIT - Departamento de Infraestrutura de Transporte <br>
        GIS-DEIT - Sistema de Informações Geograficas DEIT    
        </p>-->
    
    
    <!--<ul>
            <h4>SEINF - Secretaria Estadual de Infraestrutura de Roraima</h4>
            <h5>DEIT - Departamento de Infraestrutura de Transporte</h5>
            <h5>GIS-DEIT - Sistema de Informações Geograficas DEIT</h5>
        </ul>-->
        
                
    </div>
    
    <div class="d-flex h-100">
        <div class="row m-0 w-100">
                   
            <div id="sidebar" class="col-3">

                <div>
                    <div>
                        <h6 style="float:left;">Consulte por Arquivo (Json/GeoJson - GEO)</h6>
                    </div>
                        <input type="file" id="arquivo" class="form-control">
                        <input class="btn btn-primary" type="button" onclick="removerLayJson()"  value="Remover Tema" id="remLay">

                    <div>
                        <h6 style="float:left;">Consulte por ShapeFile (.zip) </h6>
                        <input type="file" id="shap" class="form-control">
                        <input class="btn btn-primary" type="button" onclick="removerLayShap()"  value="Remover Tema" id="remLay">
                    </div>

                    <div>
                        <h5>Consulte por Coordenada</h5>

                        <label for="latitude">Latitude</label>
                        <input type="text" class="form-control" id="latitude" name="latitude" placeholder="ex. 0.0000000000000000">

                        <label for="longitude">Longitude</label>
                        <input type="text" class="form-control" id="longitude" name="longitude" placeholder="ex. -0.0000000000000000">

                        <input type="submit" class="btn btn-primary" onclick="addMarcador()" value="Enviar" id="remLay">
                        <input class="btn btn-primary" type="button" onclick="removerTema()"  value="Remover Marcador" id="remLay">
                    </div>    
                        

              
                </div>
                <!--<h3 class="titulo-centralizado">Controles</h3>
                    <ul>
                        <li class="itens">Pesquisa</li>
                        <li class="itens">Objeto1</li>
                        <li class="itens">Objeto2</li>
                        <li class="itens">Objeto3</li>
                    </ul>-->
            </div>
            <div id="mapDIV" class="col"></div>
            
        </div>

        
    </div>

    <script src="./itensSidebar/file.js"></script>
    <script src="./itensSidebar/consultaShap.js"></script>
    <script src="/itensSidebar/leaflet.shpfile.js"></script>
    <script src="/itensSidebar/shp.js"></script>
    <script src="/itensSidebar/bundle.js"></script>
    

    <!--<input type="button" onclick= "removeMap(google, osm)" value="Google Satélite">
    <input type="button" onclick="removeMap(osm, google)" value="Google Streets">-->
    
    <script src="./GeoJson/rodoviasEstaduais/codigosEst/rodEstaduais.js"></script>
    <script src="./GeoJson/rodoviasFederais/codigosFed/rodFederais.js"></script>
    <script src="./GeoJson/rodoviasVicMunicipais/codigosMun/rodMunicipais.js"></script>
    <script src="./GeoJson/municipios/codigos/municipios.js"></script>
    <script src="./GeoJson/pontes/codigos/pontes.js"></script>
    
    <script src="./mapa.js"></script>
    <script src="./GeoJson/roraima/estadoRoraima.js"></script>

    <script src="/assets/531cbf94/leaflet-search.js"></script>
    <script>
        var map = L.map("map", {
            center: [ 52.3727598, 4.8936041 ],
            zoom: 14,
        });
        L.tileLayer("https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png", { attribution: "Map data ..."}).addTo(map);
        map.addControl(L.control.search());
    </script>
 
   
</body>

</html>