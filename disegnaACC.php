<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>



    <script src="https://code.highcharts.com/stock/highstock.js"></script>
    <script src="https://code.highcharts.com/stock/modules/data.js"></script>
    <script src="https://code.highcharts.com/stock/modules/exporting.js"></script>
    <script src="https://code.highcharts.com/stock/modules/export-data.js"></script>
    <title>desegna grafico dei accelerometri</title>
</head>

<body>

    <input type="file" id="csvFileInput" style="padding-bottom: 15px">

    <main>
        <div class="chart-container" id="chart-container">




            <!-- <div class="isResizable" id="accX">
	
	
	</div>
	
	</div>
	
	<div class="chart-container">
		<div class="isResizable" id="accY">
	
	
		</div>
	</div>
	
	<div class="chart-container">
		<div class="isResizable" id="accZ">
	
		</div> -->
        </div>

    </main>






    <script src="lib/papaparse.min.js"></script>
    <script type="module" src="js/script.js"></script>
</body>

</html>