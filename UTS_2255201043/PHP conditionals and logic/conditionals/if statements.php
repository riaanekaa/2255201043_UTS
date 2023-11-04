<?php
//Rian Eka Putra
//2255201043
//Kelas A
function markAnswer($balon)
{
  if ($balon) {
    return "hijau";
  } else {
    return "merah";
  }
}

echo markAnswer(FALSE);
echo "\n\n";
echo markAnswer(TRUE);
echo "\n\n";
