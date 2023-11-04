<?php
//Rian Eka Putra
//2255201043
//Kelas A
$dinosaurus = "Brontosaurus";
$jenis = "Hewan Purba";

function generateLessonName($trex)
{
  global $dinosaurus;
  return $dinosaurus . ": " . $trex;
}

echo generateLessonName($jenis);