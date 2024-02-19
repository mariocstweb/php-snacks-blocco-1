<?php
// Ottengo il testo tramite "GET"
$paragraph = $_GET['paragraph'];
// Lo suddivido in singole frasi ogni volta che incontro un punto "."
$sentences = explode('.', $paragraph);
// Itero tramite foreach su ogni frase e la stampo dentro un tag "p"
foreach ($sentences as $sentence) {
  echo "<p>$sentence</p>";
}

var_dump($sentences)
?>