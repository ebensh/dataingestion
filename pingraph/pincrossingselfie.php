<html>
<head>
<title>Pinball</title>

<link rel="stylesheet" type="text/css" href="style.css" />

<meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=0;">

  <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

<!-- ///////////////////  Chart #101 -->
  <script type="text/javascript">
		google.charts.load('current', {packages: ['corechart', 'bar']});
		google.charts.setOnLoadCallback(draw101);
		google.charts.setOnLoadCallback(draw102);
		google.charts.setOnLoadCallback(draw103);
		google.charts.setOnLoadCallback(draw104);

		function draw101() {

			  var data = google.visualization.arrayToDataTable([
				['Player','Score',],
<?php
$output = shell_exec('sh pincrossing101.sh');
$player = explode(PHP_EOL, $output);

foreach ($player as $singleline) {
	if (substr_count($singleline, ",")>0) {
		$chartpart = explode(',', $singleline);
		echo "['" . $chartpart[3] . 'pts (#' . $chartpart[0] . ') - ' . $chartpart[1] . "'," . $chartpart[2] . "],";
	}
}
?>
			  ]);

			  var options = {
				title: 'Game Scores: KISS Stern',
				chartArea: {width: '75%',
							top: 55,
							height: '40%'},
				legend: {position: 'none'},
				colors: ['#000000'],
				pointSize: 20,
				hAxis: {
				  title: 'Player',
				  minValue: 0,
				  textStyle : {fontSize: 10},
				  },
				vAxis: {
				  title: 'Score',
				  format: 'short',
				}
			  };

			  var chart = new google.visualization.LineChart(document.getElementById('pincrossing101'));

			  chart.draw(data, options);
			}
 
<!-- ///////////////////  Chart #101 -->

		function draw102() {

			  var data = google.visualization.arrayToDataTable([
				['Player','Score',],
<?php
$output = shell_exec('sh pincrossing102.sh');
$player = explode(PHP_EOL, $output);

foreach ($player as $singleline) {
	if (substr_count($singleline, ",")>0) {
		$chartpart = explode(',', $singleline);
		echo "['" . $chartpart[3] . 'pts (#' . $chartpart[0] . ') - ' . $chartpart[1] . "'," . $chartpart[2] . "],";
	}
}
?>
			  ]);

			  var options = {
				title: 'Game Scores: Fathom',
				chartArea: {width: '75%',
							top: 55,
							height: '40%'},
				legend: {position: 'none'},
				colors: ['#33ac71'],
				pointSize: 20,
				hAxis: {
				  title: 'Player',
				  minValue: 0,
				  textStyle : {fontSize: 10},
				  },
				vAxis: {
				  title: 'Score',
				  format: 'short',
				}
			  };

			  var chart = new google.visualization.LineChart(document.getElementById('pincrossing102'));

			  chart.draw(data, options);
			}
			
			
<!-- ///////////////////  Chart #103 -->

		function draw103() {

			  var data = google.visualization.arrayToDataTable([
				['Player','Score',],
<?php
$output = shell_exec('sh pincrossing103.sh');
$player = explode(PHP_EOL, $output);

foreach ($player as $singleline) {
	if (substr_count($singleline, ",")>0) {
		$chartpart = explode(',', $singleline);
		echo "['" . $chartpart[3] . 'pts (#' . $chartpart[0] . ') - ' . $chartpart[1] . "'," . $chartpart[2] . "],";
	}
}
?>
			  ]);

			  var options = {
				title: 'Game Scores: Medieval Madness',
				chartArea: {width: '75%',
							top: 55,
							height: '40%'},
				legend: {position: 'none'},
				colors: ['#DC3912'],
				pointSize: 20,
				hAxis: {
				  title: 'Player',
				  minValue: 0,
				  textStyle : {fontSize: 10},
				  },
				vAxis: {
				  title: 'Score',
				  format: 'short',
				}
			  };

			  var chart = new google.visualization.LineChart(document.getElementById('pincrossing103'));

			  chart.draw(data, options);
			}
 

 <!-- ///////////////////  Chart #104 -->

		function draw104() {

			  var data = google.visualization.arrayToDataTable([
				['Player','Score',],
<?php
$output = shell_exec('sh pincrossing104.sh');
$player = explode(PHP_EOL, $output);

foreach ($player as $singleline) {
	if (substr_count($singleline, ",")>0) {
		$chartpart = explode(',', $singleline);
		echo "['" . $chartpart[3] . 'pts (#' . $chartpart[0] . ') - ' . $chartpart[1] . "'," . $chartpart[2] . "],";
	}
}
?>
			  ]);

			  var options = {
				title: 'Game Scores: White Water',
				chartArea: {width: '75%',
							top: 55,
							height: '40%'},
				legend: {position: 'none'},
				colors: ['#0099C6'],
				pointSize: 20,
				hAxis: {
				  title: 'Player',
				  minValue: 0,
				  textStyle : {fontSize: 10},
				  },
				vAxis: {
				  title: 'Score',
				  format: 'short',
				}
			  };

			  var chart = new google.visualization.LineChart(document.getElementById('pincrossing104'));

			  chart.draw(data, options);
			}
 
 </script> 
 
 
 
</head>

<body>

<div id="wrapper">

<div id="frame">

<table class="main">
<tr>
<td>

<div class='pagetitle'>Pincrossing Selfie League</div> - <a href="http://neverdrains.com/pincrossing">Main Standings</a>
<p>
<div class='gametitle'>KISS Stern</div> - <a href="http://neverdrains.com/pincrossing/playerIndex.php?disp=game&sel=League&game=101">Current Scores</a>
<div id="pincrossing101" style="width: 100%px; height: 500px;"></div>
<p>
<div class='gametitle'>Fathom</div> - <a href="http://neverdrains.com/pincrossing/playerIndex.php?disp=game&sel=League&game=102">Current Scores</a>
<div id="pincrossing102" style="width: 100%px; height: 500px;"></div>
<p>
<div class='gametitle'>Medieval Madness</div> - <a href="http://neverdrains.com/pincrossing/playerIndex.php?disp=game&sel=League&game=103">Current Scores</a>
<div id="pincrossing103" style="width: 100%px; height: 500px;"></div>
<p>
<div class='gametitle'>White Water</div> - <a href="http://neverdrains.com/pincrossing/playerIndex.php?disp=game&sel=League&game=104">Current Scores</a>
<div id="pincrossing104" style="width: 100%px; height: 500px;"></div>


</td>
</tr>
</table>

</div>
</div>
</body>
</html>



