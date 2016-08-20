<html>
<head>
<title>Pinball</title>

<link rel="stylesheet" type="text/css" href="style.css" />

<meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=0;">

  <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
  <script type="text/javascript">
		google.charts.load('current', {packages: ['corechart', 'bar']});
		google.charts.setOnLoadCallback(drawBasic);

		function drawBasic() {

			  var data = google.visualization.arrayToDataTable([
				['Name','Score',],
				['100pts - Nathaniel Gibson',4483310,],
				['90pts - Ken Martin',3556970,],
				['81pts - Jay Robinson',3466780,],
				['73pts - Corey Hulse',2704140,],
				['66pts - Bill Shupp',2159310,],
				['60pts - Michael Reimer',1594130,],
				['55pts - Brian Service',731700,],
				['51pts - Brandon Service',628680,],
								['100pts - Nathaniel Gibson',4483310,],
				['90pts - Ken Martin',3556970,],
				['81pts - Jay Robinson',3466780,],
				['73pts - Corey Hulse',2704140,],
				['66pts - Bill Shupp',2159310,],
				['60pts - Michael Reimer',1594130,],
				['55pts - Brian Service',731700,],
				['51pts - Brandon Service',628680,],
								['100pts - Nathaniel Gibson',4483310,],
				['90pts - Ken Martin',3556970,],
				['81pts - Jay Robinson',3466780,],
				['73pts - Corey Hulse',2704140,],
				['66pts - Bill Shupp',2159310,],
				['60pts - Michael Reimer',1594130,],
				['55pts - Brian Service',731700,],
				['51pts - Brandon Service',628680,],
			  ]);

			  var options = {
				title: 'Game Scores: Fathom',
				chartArea: {width: '75%',
							top: 55,
							height: '40%'},
				legend: {position: 'none'},
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

			  var chart = new google.visualization.LineChart(document.getElementById('chart_div'));

			  chart.draw(data, options);
			}
  </script>

</head>

<body>

<div id="wrapper">
<center>

<?php
$output = shell_exec('sh helloworld.sh');
echo "<pre>$output</pre>";
?>
<p>
Testing
<p>

<?php
$output = shell_exec('sh neverdrains.sh');
echo "<pre>$output</pre>";

$player = explode(PHP_EOL, $output);



foreach ($player as $singleline) {
	if (substr_count($singleline, ",")>0) {
		$chartpart = explode(',', $singleline);
		echo "['" . $chartpart[3] . 'pts - #' . $chartpart[0] . ' - ' . $chartpart[1] . "'," . $chartpart[2] . '],';
	}
}


?>

<p>



</center>
</div>
</body>
</html>



