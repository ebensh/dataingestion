<?php
function curl($url) {
  // From http://stackoverflow.com/a/16338271 .
  $ch = curl_init();
  // Set URL and other appropriate options.
  curl_setopt($ch, CURLOPT_URL, $url);
  curl_setopt($ch, CURLOPT_HEADER, 0);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

  // Curl the URL, save to output.
  $output = curl_exec($ch);

  // Close curl resource, free up system resources.
  curl_close($ch);

  return $output;
}

function webpageToCsv($webpage) {
  // This can be optimized by combining str_replaces into one, etc. but it
  // is left expanded for readability :)
  // You can insert print_r($lines); at any step to see the progress.
  $lines = explode(PHP_EOL, $webpage);  // Break html into an array of lines
  // Only grab tr and td lines.
  $lines = preg_grep('_<td>|<tr class="row/|</tr>_', $lines);
  $lines = array_map('trim', $lines);  // Eliminate whitespace at start and end
  $lines = preg_replace('_</*a[^>]*>_', '', $lines);  // Eliminate <a href=...>
  $smooshed = implode($lines);  // Smoosh it all back together into one string
  $lines = explode('</tr>', $smooshed);  // Break it apart by </tr>
  $lines = str_replace(',', '', $lines);  // Delete commas
  $lines = str_replace('</td>', ',', $lines);  // Replace </td> with commas
  $lines = preg_replace('_<[^>]*>_', '', $lines);  // Remove all remaining tags
  // Trim the trailing ',' from each line.
  $lines = array_map('rtrim', $lines, array_fill(0, count($lines), ','));
  // Remove any remaining empty lines.
  $lines = array_filter($lines);
  return $lines;
}

function getNeverdrainsPages() {
  $data = array(
    '119' => webpageToCsv(curl('http://www.neverdrains.com/bpso2016/playerIndex.php?disp=game&sel=Main&game=119')),
    '120' => webpageToCsv(curl('http://www.neverdrains.com/bpso2016/playerIndex.php?disp=game&sel=Main&game=120')),
  );
  return $data;
}
?>


<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script type="text/javascript">
google.charts.load('current', {packages: ['corechart', 'bar']});
google.charts.setOnLoadCallback(drawAllTables);

function drawTable(scores, title, element_id) {
  var data = google.visualization.arrayToDataTable(
      [['Player','Score',]].concat(scores));
  var options = {
      title: title,
      chartArea: {width: '75%', top: 55, height: '40%'},
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
      },
  };

  var chart = new google.visualization.LineChart(document.getElementById(element_id));
  chart.draw(data, options);  
}

function drawAllTables() {
  var neverdrains_data = JSON.parse('<?php echo json_encode(getNeverdrainsPages()); ?>');
  for (game_id in neverdrains_data) {
    var scores_table = [];

    var game_scores = neverdrains_data[game_id];
    // Build a table from the game scores, making our 2d array for charting.
    for (player_id in game_scores) {
      var player_row = game_scores[player_id].split(",");
      // Expand for readability.
      var place = player_row[0];
      var name = player_row[1];
      var score = Number(player_row[2]);
      var points = player_row[3];
      scores_table.push([points + 'pts (#' + place + ') - ' + name, score]);
    }

    drawTable(scores_table, game_id, 'buffalo' + game_id);
  }
}

</script>

<html>
<head>
<title>Pinball</title>
<link rel="stylesheet" type="text/css" href="style.css" />
<meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=0;">
<body>    
<script type="text/javascript">
// Print the data, now using the javascript variable.
// console.log(neverdrains_data);

// Or look up a specific game.
// var game_119 = neverdrains_data[119];
// console.log(game_119);

// Or a specific score in that game.
// Note that this is indexed by json key, so 1-indexed for players.
// var game_119_top_player = neverdrains_data[119][1];
// console.log(game_119_top_player);

// Or print the scores out as drawings in a table.
// drawAllTables();
</script>

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

</td>
</tr>
</table>
</div>
</div>
</body>
</html>



