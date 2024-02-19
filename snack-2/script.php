<?php
// Recupero i valori in GET
$name = $_GET['name'];
$email = $_GET['email'];
$age = $_GET['age']; 

// Flag di partenza
$access_allowed = true;

// Controllo se il nome ha almeno tre caratteri
// if (strlen($name) < 3) {
//   $access_allowed = false;
//   echo "Nome non valido, inserisci almeno tre caratteri.";
// }

// Controllo se sono presenti questi caratteri nell'email: "@" e "."
// if (strpos($email, '@') === false || strpos($email, '.') === false) {
//   $access_allowed = false;
//   echo "Formato email non valido.";
// }

// Controllo se l'età è un numero
// if (!is_numeric($age)) {
//   $access_allowed = false;
//   echo "L'età inserita non è un numero.";
// }
// Controllo se il nome ha almeno tre caratteri e se l'email ha il formato corretto e se l'età non è un numero
if (strlen($name) < 3 || strpos($email, '@') === false || strpos($email, '.') === false || !is_numeric($age)) {
  $access_allowed = false;
  echo "Accesso negato.";
} else {
  echo "Accesso riuscito.";
}
?>
