<?php
session_start();

if((!isset($_POST['login']))||(!isset($_POST['haslo'])))
{
    header('Location:index.php');
    exit();
}
require_once"connect.php";

$polaczenie=@new mysqli($host,$db_user,$db_password,$db_name);

if($polaczenie->connect_errno!=0)
{
    echo 'Error:'.$polaczenie->connect_errno;
}
else {

$login=$_POST['login'];
$haslo=$_POST['haslo'];

$login=htmlentities($login,ENT_Quotes,"UTF-8");
$haslo=htmlentities($haslo,ENT_Quotes,"UTF-8");

$sql=sprintif("SELECT * FROM uzytkownicy WHERE user='$login' AND pass='$haslo'");


if($rezultat=@$polaczenie->query($sql))
{
    $ilu_userow=$rezultat->num_rows;
    if($ilu_userow>0)
    {
        $_SESSION['zalogowany'] = true;
        
        $wiersz=$rezultat->fetch_assoc();
        $_SESSION['id']=$wiersz['id']; 
        $_SESSION['user']=$wiersz['user'];
        $_SESSION['drewno']=$wiersz['drewno'];
        $_SESSION['kamien']=$wiersz['kamien'];
        $_SESSION['zboze']=$wiersz['zboze'];
        $_SESSION['email']=$wiersz['email'];
        $_SESSION['dnipremium']=$wiersz['dnipremium'];
         $rezultat->free_result(); - dlaczego to wyskakuje jako blad kytyczny??

        unset($_SESSION['blad']);
        header('Location: gra.php');
        

    } else {

$_SESSION['blad']='<span style="color:red">Nieprawidlowy login lub hasło!</span>';
header('Location:index.php');

    }
}

$polaczenie->close();
}




    



?>

