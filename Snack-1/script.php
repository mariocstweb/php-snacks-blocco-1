<?php

$matchs = [
  "match1" => [
    "casa" => "Milano",
    "ospite" => "Torino",
    "punti_casa" => 55,
    "punti_ospite" => 60,
  ],
  "match2" => [
    "casa" => "Firenze",
    "ospite" => "Bologna",
    "punti_casa" => 30,
    "punti_ospite" => 65,
  ],
  "match3" => [
    "casa" => "Roma",
    "ospite" => "Lazio",
    "punti_casa" => 10,
    "punti_ospite" => 70,
  ],
];

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <ul>
    <?php foreach ($matchs as $key => $match) : ?>
    <li>
    <?= $match['casa'] ?> - <?= $match['ospite'] ?> | <?= $match['punti_casa'] ?> - <?= $match['punti_ospite'] ?>
    <?php endforeach; ?>
    </li>
  </ul>
</body>
</html>