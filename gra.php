<?php session_start();
if(!isset($_SESSION['zalogowany'])){

    header('Location:index.php');
}



error_reporting(0);
?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="css/style.css">
    <title>Osadnicy</title>
</head>
<body>
   
   <?php 

echo "<p>Witaj ".$_SESSION['user']."![<a href='logout.php'>logout</a>]</p>";
echo "<p><b>Drewno</b>: ".$_SESSION['drewno'];
echo "| <b>Kamień</b>: ".$_SESSION['kamien'];
echo "| <b>Zboże</b>: ".$_SESSION['zboze'];

echo "| <p><b>E-mail</b>: ".$_SESSION['email'];
echo "| <br><b>Dni premium</b>: ".$_SESSION['dnipremium']."</p>";
?>
   
</body>   
<script type="text/javascript" src="http://code.jquery.com/jquery-1.9.0.min.js"></script>
<script type="text/javascript" src="js/jquery.waterwheelCarousel.min.js"></script>
<script type="text/javascript" src="js/script.js"></script>
</body>
</html>





