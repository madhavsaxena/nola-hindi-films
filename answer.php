
      <?php
$date = date('Y-m-d');
$url = "https://www.amctheatres.com/movie-theatres/new-orleans/amc-elmwood-palace-20/showtimes/all/$date/amc-elmwood-palace-20/all";

$curl = curl_init($url);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, TRUE);

$page = curl_exec($curl);

if(curl_errno($curl)) // check for execution errors
{
  echo 'Scraper error: ' . curl_error($curl);
  exit;
}

curl_close($curl);

$regex = '/\b(\w*Hindi\w*)\b/';
if ( preg_match($regex, $page, $list) ) {
      $fcheck->status = "Yes";
  $myJSON = json_encode($fcheck);
  file_put_contents('filmstatus.json', $myJSON);
  echo $myJSON;}
  else {
    $fcheck->status = "No - try again later";
  $myJSON = json_encode($fcheck);
  file_put_contents('filmstatus.json', $myJSON);
  echo $myJSON;}
?>

