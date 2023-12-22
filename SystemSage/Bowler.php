

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel = "stylesheet" href = "Bowler.css">
	

</head>
<body>
<script>
  $(document).ready(function(){

      setInterval(function(){
          $("#autorefresh").load(window.location.href + "#autorefresh");
      },30000);
  });
</script>

	<div class = "autorefresh">
<nav>
    <ul class = "sidebar">
    <li><a href = "Home.php">Home</a></li>
        
        <li><a href = "Batsman.php">Batsman</a></li>
        <li><a href = "Ranking.php">Rankings</a></li>
		<li><a href = "About.php">About</a></li>
   </ul>
</nav> 
</body>
</html>


<?php
 
 
$link = mysqli_connect("localhost","root","");
mysqli_select_db($link,"bowler_db");
$res = mysqli_query($link,"select * from bowler");

$test = array();
$count = 0;

while($row = mysqli_fetch_array($res))
{
    $test[$count]["label"] = $row["Bowler"];
    $test[$count]["y"] = $row["Run"];

    $count = $count+1;

}

?>
<!DOCTYPE HTML>
<html>
<head>
<script>
window.onload = function() {
 
var chart = new CanvasJS.Chart("chartContainer", {
	animationEnabled: true,
	theme: "light2",
	title:{
		text: "Bowler Statistics"
	},
	axisY: {
		title: "Run Given by a bowler 10 overs"
	},
	data: [{
		type: "column",
		yValueFormatString: "#,##0.## Runs",
		dataPoints: <?php echo json_encode($test, JSON_NUMERIC_CHECK); ?>
	}]
});
chart.render();
 
}
</script>
</head>
<body>
<div id="chartContainer" style="height: 370px; width: 100%;"></div>
<script src="https://cdn.canvasjs.com/canvasjs.min.js"></script>
<div>
    <h1>Asia Cup 2023</h1>
    <h4>Supported by:</h4><a href = "https://systemsage.tech/">SystemSage Solutions</a>
</div>
</div>  
</body>
</html>       