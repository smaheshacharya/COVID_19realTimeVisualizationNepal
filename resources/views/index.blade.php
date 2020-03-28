<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="title" content="Corona infection Nepal Visualization">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link href='https://api.mapbox.com/mapbox-gl-js/v1.8.1/mapbox-gl.css' rel='stylesheet' />
    <style>
        *{
            margin: 0;
            padding: 0;

        }
        #map{
            width: 100vw;
            height: 80vh;
        }
        h4{
            font-style: inherit;
            font-family:monospace;
            font-weight: bold;
            font-display: initial;
            color:#505250;
            margin: 20px;
            color:white;

        }

       .container-fluid{
        background-image: url("storage/bg.jpg");
        repeat:no-repeat;
        height: 100vh;
        background-position: center;


       }
       footer{
           color: aliceblue;
           padding-top: 30px;
           font-family:monospace;
           text-align: center;       }
</style>
    <title>RealTime Corona Infection Visualization Nepal</title>
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-4">
                <h4>RealTime covid-19 Records Nepal</h4>
            </div>
            <div class="col-md-4">
               <h4> Total Infected: <span id="infect"></span> <br>
                Total Death: <span id="dead"></span><br>
                Total Recovery: <span id="rec"></span>
            </h4>

            </div>
            <div class="col-md-4">
              <h4>#stay_safe #stay_home</h4>

             </div>
        </div>
        <div class="row">

            <div id='map'></div>

        </div>
        <footer>
            All Right Reserved 2020
        </footer>

</div>


<script src='https://api.mapbox.com/mapbox-gl-js/v1.8.1/mapbox-gl.js'></script>
<script>
  mapboxgl.accessToken = 'pk.eyJ1Ijoic21haGVzaGFjaGFyeWEiLCJhIjoiY2s4YjdsZHVrMDFubjNubnIyMzJyazR6ZiJ9.gc4qSYcW_k1KCupTrYWGHA';
  var map = new mapboxgl.Map({
    container: 'map',
    style: 'mapbox://styles/mapbox/dark-v10',
    zoom:2,
    center: [20, 25],
  });

//   map.flyTo({center: [Lat, Lng]})
</script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
<script src="{{asset('js/app.js')}}"></script>
</body>
</html>
