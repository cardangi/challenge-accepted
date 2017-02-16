<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="style.css">
<?php 
include("index.php");
date_default_timezone_set('America/Sao_Paulo');
$date = date('d/m/Y');
$hora = date('H:i:s');
?>





<h1> Previsão para Osasco - SP </h1>
<div class="jumbotron">
<div class="container">
<p><? echo $date?></p>
<small><?echo $hora?></small>
</div>
</div>

</html>
