Masukkan Jumlah Bagian Variabel
Masukkan Jumlah Variabel

Bagian 3 Var 3
$Bagian1Var1.$Bagian1Var2.$Bagian1Var3 + 
$Bagian2Var1.$Bagian2Var2.$Bagian2Var3 + 
$Bagian3Var1.$Bagian3Var2.$Bagian3Var3

//membuat binernya per bagian
$binerBagian1 = $Bagian1Var1.$Bagian1Var2.$Bagian1Var3;
$binerBagian2 = $Bagian2Var1.$Bagian2Var2.$Bagian2Var3;
$binerBagian3 = $Bagian3Var1.$Bagian3Var2.$Bagian3Var3;

//konversi biner ke desimal
$binertodesimal_bagian1 = bindec($binerBagian1);
$binertodesimal_bagian2 = bindec($binerBagian2);
$binertodesimal_bagian3 = bindec($binerBagian3);

//mengurutkan bilangan
$mengurutkan_desimal = array("$binertodesimal_bagian1", "$binertodesimal_bagian2", "$binertodesimal_bagian3");

$urutan1 = $mengurutkan_desimal[0];
$urutan2 = $mengurutkan_desimal[1];
$urutan3 = $mengurutkan_desimal[2];

//konversi desimal ke biner
$biner_urutan_bagian1 = decbin($urutan1);
$biner_urutan_bagian2 = decbin($urutan2);
$biner_urutan_bagian3 = decbin($urutan3);

//penjumlahan biner
$penjumlahan_nomor1dan3 = 

