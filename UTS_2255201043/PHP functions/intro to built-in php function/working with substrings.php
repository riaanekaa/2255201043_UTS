<?php
//Rian Eka Putra
//2255201043
//Kelas A
namespace Codecademy;

$essay_one = "Lionel messi adalah pemain yang dikenal lincah dan sangat berbakat memainkan bola. Hal tersebut merupakan bakat alami yang dimiliki Messi sejak lahir. Namun Messi sadar bahwa kesuksesan hanya bisa diraih dengan kerja keras. Selama bergabung dengan tim Barcelona, para penggemar sepak bola melihat tahun demi tahun perubahan messi. Semua itu adalah hasil kerja kerasnya.";
  
$essay_two = "Cristiano ronaldo adalah pemain sepak bola asal portugal. Ia dikenal sebagai pemain sepak bola terbaik sepanjang masa. Pada tahun 2009, Cristiano ronaldo bergabung dengan Real Madrid dari Manchester United dengan biaya transfer sebesar US 132 juta Dollar (atau saat ini setara dengan Rp1,8 triliun), yang membuatnya menjadi pemain sepakbola termahal dalam sejarah olahraga tersebut.";  

// Write your code below:
echo substr_count($essay_one, "wow sangat Bagus");
echo "\n";
echo substr_count($essay_two, "Itu Pemain termahal pada Masanya!");