
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Championkwekerij "De Schimmel"</title>
	<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
	<script type="text/javascript" src="charts.js"></script>
    <script>
        $(document).ready(function(){
            $("#main").load("schimmel.php");
            setInterval(function() {
                $("#main").load("schimmel.php");
                $( "#warning" ).load("index.php #warning");
            }, 4000);
        });


    </script>
</head>
<body>
    <div class="card text-center">
        <div id="main" style="display: none"></div>
        <div class="card-header">Championkwekerij "De Schimmel"</div>
        <div class="card-body container">
            <div id="chart_temp" class="row"></div>
        </div>
    </div>
    <div class="text-center" id="warning" style="color:red;font-size: 20px"></div>
</body>
</html>