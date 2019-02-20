<!DOCTYPE html>
<html>
<head>
    <title>Hoelaat is het</title>
    <meta http-equiv="refresh" content="1">
	<link rel="stylesheet" type="text/css" href="css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet"> 
</head>
<?php 
date_default_timezone_set("Europe/Amsterdam");

$dayText = ["Morgen", "Middag", "Avond", "Nacht"];
$dayClass = ["morgen", "middag", "avond", "nacht"];
$timeOfDay = date("H:i:s");


if ($timeOfDay < 6) {
    $dayTextnr = 3;

}else if ($timeOfDay < 12) {
    $dayTextnr = 0;

}else if ($timeOfDay < 18) {
    $dayTextnr = 1;

}else if ($timeOfDay < 24) {
    $dayTextnr = 2;

}
?>
<body class = "<?php echo $dayClass[$dayTextnr]; ?>">
     <h1>Goede <?php echo $dayClass[$dayTextnr]; ?>!</h1>
     <p>Het is nu: <?php echo $timeOfDay; ?></p>
</body>
</html>