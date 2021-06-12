<?php
$kategori = 'Buah Mengandung banyak air adalah';
switch ($kategori)
{
  case 'Buah Mengandung banyak air adalah' :
    echo $kategori . ' Semangka,','Rambutan,','Jeruk';
    break;
  case 'Buah tropis' :
    echo $kategori .' nanas,','jambu,','mangga,','rambutan';
    break;
  case 'Buah Kering adalah' :
      echo $kategori . ' Kurma,','Pisang,','Kismis';
      break;
}
?>
