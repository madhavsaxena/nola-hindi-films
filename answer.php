<!doctype html>
<html class="no-js" lang="">

<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Hindi Films in New Orleans</title>
  <meta name="description" content="Check whether any Hindi films are showing in New Orleans today.">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Place favicon.ico in the root directory -->
  <link rel="stylesheet" href="assets/main.css">
  <link href="https://fonts.googleapis.com/css?family=Roboto:900" rel="stylesheet"> 
</head>

<body>
	<section class="content-wrapper">
      <?php
$date = date('Y-m-d');
$url = "https://www.amctheatres.com/movie-theatres/houston/amc-first-colony-24/showtimes/all/$date/amc-first-colony-24/all";

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
if ( preg_match($regex, $page, $list) )
    echo '<h1>Yes</h1><img src="assets/amir-khan-yes.jpg"><a class="button" href="https://www.amctheatres.com/movie-theatres/houston/amc-first-colony-24/showtimes/all/$date/amc-first-colony-24/all">Showtimes</a>';
else 
    echo "<h1>No</h1>"; 
?>

	</section>




  <script src="js/main.js"></script>

  <!-- Google Analytics: change UA-XXXXX-Y to be your site's ID. -->
  <script>
    window.ga = function () { ga.q.push(arguments) }; ga.q = []; ga.l = +new Date;
    ga('create', 'UA-XXXXX-Y', 'auto'); ga('send', 'pageview')
  </script>
  <script src="https://www.google-analytics.com/analytics.js" async defer></script>
</body>

</html>