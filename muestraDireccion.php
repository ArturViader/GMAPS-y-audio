<html><head><title>Dirección</title><meta charset="UTF-8">
  <script src="http://code.jquery.com/jquery-3.2.1.js"></script>
<link href="jquery.gmaps.css" rel="stylesheet" />
<script src="js/jquery.gmaps.js"> 
    </script>  

<script>
   
 $(document).ready(function () {
     $('.gmaps').gmaps();
});
    

function localitza()
{

  var address = $('#address').val();
var key = "INSERTATUAPIKEY";    
  $.ajax({
                    url:"https://maps.googleapis.com/maps/api/geocode/json?address=" + address + "&key=" + key,
                    dataType:'json',
                    success:function(data)
                    {
                         $('#res').val(data['resultat']);
                         var lat = data['results'][0]['geometry']['location']['lat'];
                         var long = data['results'][0]['geometry']['location']['lng'];

                    /*    $('#pantalla').gmaps().latitude = lat;
                        $('#pantalla').gmaps().longitude = long;
                        $('#1').gmaps().data.latitude=lat;
                        $('#1').data-lat=long;*/
                        
                        
                        
                       
                   

                                                        
                        
                        
               
                        
                        
                    } ,
     });

       
}
    
    </script>
    <style>
 
.gmaps {
height:500px;
width: 100%;
}
</style>
    
</head>
<body>
<div id="pantalla" data-key="INSERTATUAPIKEY"
data-control-zoom="true"
data-control-type="true"
data-control-scale="true"
data-control-streetview="true"
data-control-rotate="true"
data-event-mousewheel="true"
 
data-zoom="14" role="map" class="gmaps">
 
<!-- items de ubicaciones -->
 
    <?php
    
    if(isset($_GET['address']))
    {
        extract($_GET);
        $json = file_get_contents('https://maps.googleapis.com/maps/api/geocode/json?address='.urlencode($address).'&key=INSERTATUAPIKEY');
       
        $obj = json_decode($json);
        
        $lat = $obj->{'results'}[0]->{'geometry'}->{'location'}->{'lat'};
        
        $long = $obj->{'results'}[0]->{'geometry'}->{'location'}->{'lng'};
        
        echo"<div
data-id='1'
data-lat='$lat'
data-lng='$long'
class='marker'>
<div class='map-card'>
<h1>$address</h1>
</div>
</div>
";
        
    }
    else if(isset($_GET['punts']))
    {
        ?>
        <div
            data-id="1"
            data-lat="41.3850639"
            data-lng="2.1734035"
            class="marker">
            <div class="map-card">
            <h1>Barcelona</h1>
        <p><iframe width="560" height="315" src="https://www.youtube.com/embed/uOzwwZxjPRs" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe></p>
            </div>
            </div>
            
            <div
            data-id="1"
            data-lat="48.8722344"
            data-lng="2.7758079"
            class="marker">
            <div class="map-card">
            <h1>Eurodisney París</h1>
        <p><iframe width="560" height="315" src="https://www.youtube.com/embed/fjAMe3JdPE0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe></p>
            </div>
            </div>
            
            <div
            data-id="1"
            data-lat="28.385233"
            data-lng="-81.563874"
            class="marker">
            <div class="map-card">
            <h1>Disneyworld</h1>
        <p><iframe width="560" height="315" src="https://www.youtube.com/embed/B4NOSwz-66I" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe></p>
            </div>
            </div>
        
    <?php
    }
    else
    {
        
    ?>
    
<div
data-id="1"
data-lat="37.8009695"
data-lng="-122.4270361"
class="marker">
<div class="map-card">
<h1>Lombard Street</h1>
    <p>Lombard Street. San Francisco, Califormia.</p>
</div>
</div>
 

<!-- fin datos de ubicación -->
<?php
    }
?>
</div>

    
<?php



?>
    
</body>




</html>
