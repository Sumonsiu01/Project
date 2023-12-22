<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel = "stylesheet" href = "Bowler.css">
</head>
<body>
<nav>
    <ul class = "sidebar">

        <li><a href = "Home.php">Home</a></li>
        <li><a href = "Bowler.php">Bowler</a></li>
        <li><a href = "Batsman.php">Batsman</a></li>
		<li><a href = "About.php">About</a></li>
   </ul>
</nav> 
</body>
</html>


<?php
 


$link = mysqli_connect("localhost","root","");
mysqli_select_db($link,"batsman_db");
$res = mysqli_query($link,"select * from ratings");

$test = array();
$count = 0;

while($row = mysqli_fetch_array($res))
{
    $test[$count]["label"] = $row["Team"];
    $test[$count]["y"] = $row["Rating"];

    $count = $count+1;

}
 
?>
<!DOCTYPE HTML>
<html>
<head>
<script>
window.onload = function () {
 
var chart = new CanvasJS.Chart("chartContainer", {
	title: {
		text: "Ranking After Asia Cup 2023"
	},
	axisY: {
		title: "Ratings"
	},
	data: [{
		type: "line",
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
</body>
</html>                   