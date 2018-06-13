<?php 
session_start();

if((isset($_SESSION['zalogowany']))&&($_SESSION['zalogowany']==true)){
    header('Location:gra.php');
    exit();
}
// Parse error: syntax error, unexpected 'AND' (T_LOGICAL_AND) in C:\xampp7\htdocs\PHPyoutube\index.php on line 4
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
   
    tylko martwi ujrzeli koniec wojny - Platon<br><br>

    <form action="zaloguj.php" method="post">
    Login:  <br>     <input type="text" name="login"><br>
    Password: <br>   <input type="password" name="haslo"><br>
        <input type="submit" value="zaloguj sie">
    </form>
<?php

if(isset($_SESSION['blad'])){
echo $_SESSION['blad'];
}
?>

</form>


</body>   
<script type="text/javascript" src="http://code.jquery.com/jquery-1.9.0.min.js"></script>
<script type="text/javascript" src="js/jquery.waterwheelCarousel.min.js"></script>
<script type="text/javascript" src="js/script.js"></script>
</body>
</html>





