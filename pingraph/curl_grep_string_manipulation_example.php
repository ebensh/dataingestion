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

?>

<html>
<head>
<title>Pinball</title>
<body>
<?php
   print_r(webpageToCsv(curl('http://www.neverdrains.com/bpso2016/playerIndex.php?disp=game&sel=Main&game=119')));
?>
    
</body>
</html>



