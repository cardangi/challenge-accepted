<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<?php


$button = $_GET [ 'submit' ]; $search = $_GET [ 'search' ]; if( $search == "Osasco" )header('Location: http://sitetestesaprender.rf.gd/cidaderesult.php'); else { if( strlen( $search ) <= 1 ) echo "Pesquisa mt curta!"; else { echo "Sua pesquisa: <b> $search </b> <hr size='1' > </ br > ";  $search_exploded = explode ( " ", $search ); $x = 0; foreach( $search_exploded as $cada_pesquisa ) { $x++; $construct = ""; if( $x == 1 ) $construct .="Palavras tipo '%$cada_pesquisa%'"; else $construct .="E Palavras tipo '%$cada_pesquisa%'"; } if ($search != "Osasco") echo "Ferramenta teste, só funciona Osasco, no caso não encontramos:  <b> $search </b>. </br> </br>"; } } ?>



