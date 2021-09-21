<?php
//if(isset($_POST['submit'])){ // działa z ifem jak i bez ifa 
$lowisko = $_POST['lowisko'];
$data = $_POST['data'];
$sedzia = $_POST['sedzia'];
$baza=mysqli_connect('localhost','root','','wedkarstwo');

if(mysqli_connect_errno())
{echo"wystapil blad polaczenia z baza";}
$wynik=mysqli_query($baza, "INSERT INTO `zawody_wedkarskie`(`id`, `Karty_wedkarskie_id`, `Lowisko_id`, `data_zawodow`, `sedzia`) VALUES 
(' ', 0,'$lowisko','$data','$sedzia' )");

mysqli_close($baza);

// } jak nie zadziła to odkomentować ifa


?>
