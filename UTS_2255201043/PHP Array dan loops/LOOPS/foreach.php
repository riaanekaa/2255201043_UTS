<?php
//RIAN EKA PUTRA
//2255201043
$scores = [
  "rian" => 99,
  "rendi" => 95,
  "jefri" => 98,
  "syafiq" => 91,
  "zainal arifin" => 88
];

foreach ($scores as $score) {
  echo "Someone received a score of $score.\n";
}

foreach ($scores as $name => $score) {
  echo "$name received a score of $score.\n";
}
//Kelas A