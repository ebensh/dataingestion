<html>
<head>
<title>Pinball</title>

<link rel="stylesheet" type="text/css" href="style.css" />

<meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=0;">

  <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>


  <script type="text/javascript">
		google.charts.load('current', {packages: ['corechart', 'bar']});
		google.charts.setOnLoadCallback(draw119);
		google.charts.setOnLoadCallback(draw120);
		google.charts.setOnLoadCallback(draw121);
		google.charts.setOnLoadCallback(draw122);
		google.charts.setOnLoadCallback(draw123);
		google.charts.setOnLoadCallback(draw124);
		google.charts.setOnLoadCallback(draw125);
		google.charts.setOnLoadCallback(draw126);
		google.charts.setOnLoadCallback(draw127);
		google.charts.setOnLoadCallback(draw128);



<!-- ///////////////////  Chart #119 -->		
		function draw119() {

			  var data = google.visualization.arrayToDataTable([
				['Player','Score',],
<?php
$output = shell_exec('sh buffalo119.sh');
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
				title: 'Game Scores: The Walking Dead',
				chartArea: {width: '75%',
							top: 55,
							height: '40%'},
				legend: {position: 'none'},
				colors: ['#B82E2E'],
				pointSize: 10,
				hAxis: {
				  title: 'Player',
				  minValue: 0,
				  textStyle : {fontSize: 8},
				  },
				vAxis: {
				  title: 'Score',
				  format: 'short',
				}
			  };

			  var chart = new google.visualization.LineChart(document.getElementById('buffalo119'));

			  chart.draw(data, options);
			}

			
<!-- ///////////////////  Chart #120 -->		
		function draw120() {

			  var data = google.visualization.arrayToDataTable([
				['Player','Score',],
<?php
$output = shell_exec('sh buffalo120.sh');
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
				title: 'Game Scores: WWE',
				chartArea: {width: '75%',
							top: 55,
							height: '40%'},
				legend: {position: 'none'},
				colors: ['#3366CC'],
				pointSize: 10,
				hAxis: {
				  title: 'Player',
				  minValue: 0,
				  textStyle : {fontSize: 8},
				  },
				vAxis: {
				  title: 'Score',
				  format: 'short',
				}
			  };

			  var chart = new google.visualization.LineChart(document.getElementById('buffalo120'));

			  chart.draw(data, options);
			}



<!-- ///////////////////  Chart #121 -->		
		function draw121() {

			  var data = google.visualization.arrayToDataTable([
				['Player','Score',],
<?php
$output = shell_exec('sh buffalo121.sh');
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
				title: 'Game Scores: High Speed 2',
				chartArea: {width: '75%',
							top: 55,
							height: '40%'},
				legend: {position: 'none'},
				colors: ['#3366CC'],
				pointSize: 10,
				hAxis: {
				  title: 'Player',
				  minValue: 0,
				  textStyle : {fontSize: 8},
				  },
				vAxis: {
				  title: 'Score',
				  format: 'short',
				}
			  };

			  var chart = new google.visualization.LineChart(document.getElementById('buffalo121'));

			  chart.draw(data, options);
			}



<!-- ///////////////////  Chart #122 -->		
		function draw122() {

			  var data = google.visualization.arrayToDataTable([
				['Player','Score',],
<?php
$output = shell_exec('sh buffalo122.sh');
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
				title: 'Game Scores: Roller Coaster Tycoon',
				chartArea: {width: '75%',
							top: 55,
							height: '40%'},
				legend: {position: 'none'},
				colors: ['#0099C6'],
				pointSize: 10,
				hAxis: {
				  title: 'Player',
				  minValue: 0,
				  textStyle : {fontSize: 8},
				  },
				vAxis: {
				  title: 'Score',
				  format: 'short',
				}
			  };

			  var chart = new google.visualization.LineChart(document.getElementById('buffalo122'));

			  chart.draw(data, options);
			}				
			
			
<!-- ///////////////////  Chart #123 -->		
		function draw123() {

			  var data = google.visualization.arrayToDataTable([
				['Player','Score',],
<?php
$output = shell_exec('sh buffalo123.sh');
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
				title: 'Game Scores: No Good Gofers ',
				chartArea: {width: '75%',
							top: 55,
							height: '40%'},
				legend: {position: 'none'},
				colors: ['#5574A6'],
				pointSize: 10,
				hAxis: {
				  title: 'Player',
				  minValue: 0,
				  textStyle : {fontSize: 8},
				  },
				vAxis: {
				  title: 'Score',
				  format: 'short',
				}
			  };

			  var chart = new google.visualization.LineChart(document.getElementById('buffalo123'));

			  chart.draw(data, options);
			}				
			
			
<!-- ///////////////////  Chart #124 -->		
		function draw124() {

			  var data = google.visualization.arrayToDataTable([
				['Player','Score',],
<?php
$output = shell_exec('sh buffalo124.sh');
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
				title: 'Game Scores: World Cup Soccer 94',
				chartArea: {width: '75%',
							top: 55,
							height: '40%'},
				legend: {position: 'none'},
				colors: ['#329262'],
				pointSize: 10,
				hAxis: {
				  title: 'Player',
				  minValue: 0,
				  textStyle : {fontSize: 8},
				  },
				vAxis: {
				  title: 'Score',
				  format: 'short',
				}
			  };

			  var chart = new google.visualization.LineChart(document.getElementById('buffalo124'));

			  chart.draw(data, options);
			}				
			
<!-- ///////////////////  Chart #125 -->		
		function draw125() {

			  var data = google.visualization.arrayToDataTable([
				['Player','Score',],
<?php
$output = shell_exec('sh buffalo125.sh');
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
				pointSize: 10,
				hAxis: {
				  title: 'Player',
				  minValue: 0,
				  textStyle : {fontSize: 8},
				  },
				vAxis: {
				  title: 'Score',
				  format: 'short',
				}
			  };

			  var chart = new google.visualization.LineChart(document.getElementById('buffalo125'));

			  chart.draw(data, options);
			}				
			
			
<!-- ///////////////////  Chart #126 -->		
		function draw126() {

			  var data = google.visualization.arrayToDataTable([
				['Player','Score',],
<?php
$output = shell_exec('sh buffalo126.sh');
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
				title: 'Game Scores: Big Buck Hunter',
				chartArea: {width: '75%',
							top: 55,
							height: '40%'},
				legend: {position: 'none'},
				colors: ['#8B0707'],
				pointSize: 10,
				hAxis: {
				  title: 'Player',
				  minValue: 0,
				  textStyle : {fontSize: 8},
				  },
				vAxis: {
				  title: 'Score',
				  format: 'short',
				}
			  };

			  var chart = new google.visualization.LineChart(document.getElementById('buffalo126'));

			  chart.draw(data, options);
			}			
 
<!-- ///////////////////  Chart #127 -->		
		function draw127() {

			  var data = google.visualization.arrayToDataTable([
				['Player','Score',],
<?php
$output = shell_exec('sh buffalo127.sh');
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
				title: 'Game Scores: Mustang',
				chartArea: {width: '75%',
							top: 55,
							height: '40%'},
				legend: {position: 'none'},
				colors: ['#DC3912'],
				pointSize: 10,
				hAxis: {
				  title: 'Player',
				  minValue: 0,
				  textStyle : {fontSize: 8},
				  },
				vAxis: {
				  title: 'Score',
				  format: 'short',
				}
			  };

			  var chart = new google.visualization.LineChart(document.getElementById('buffalo127'));

			  chart.draw(data, options);
			}			
 
<!-- ///////////////////  Chart #128 -->		
		function draw128() {

			  var data = google.visualization.arrayToDataTable([
				['Player','Score',],
<?php
$output = shell_exec('sh buffalo128.sh');
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
				title: 'Game Scores: Avatar',
				chartArea: {width: '75%',
							top: 55,
							height: '40%'},
				legend: {position: 'none'},
				colors: ['#22AA99'],
				pointSize: 10,
				hAxis: {
				  title: 'Player',
				  minValue: 0,
				  textStyle : {fontSize: 8},
				  },
				vAxis: {
				  title: 'Score',
				  format: 'short',
				}
			  };

			  var chart = new google.visualization.LineChart(document.getElementById('buffalo128'));

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

<div class='pagetitle'>Buffalo Pinball Summer Open</div> - <a href="http://neverdrains.com/pincrossing">Main Standings</a>
<p>
<div id="buffalo119" style="width: 100%px; height: 500px;"></div>
<p>
<div id="buffalo120" style="width: 100%px; height: 500px;"></div>
<p>
<div id="buffalo121" style="width: 100%px; height: 500px;"></div>
<p>
<div id="buffalo122" style="width: 100%px; height: 500px;"></div>
<p>
<div id="buffalo123" style="width: 100%px; height: 500px;"></div>
<p>
<div id="buffalo124" style="width: 100%px; height: 500px;"></div>
<p>
<div id="buffalo125" style="width: 100%px; height: 500px;"></div>
<p>
<div id="buffalo126" style="width: 100%px; height: 500px;"></div>
<p>
<div id="buffalo127" style="width: 100%px; height: 500px;"></div>
<p>
<div id="buffalo128" style="width: 100%px; height: 500px;"></div>
<p>



</td>
</tr>
</table>

</div>
</div>
</body>
</html>



