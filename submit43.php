<?php 
	$bagian1var1	=	$_POST['bagian1var1'];
	$bagian1var2	=	$_POST['bagian1var2'];
	$bagian1var3	=	$_POST['bagian1var3'];
	$bagian2var1	=	$_POST['bagian2var1'];
	$bagian2var2	=	$_POST['bagian2var2'];
	$bagian2var3	=	$_POST['bagian2var3'];
	$bagian3var1	=	$_POST['bagian3var1'];
	$bagian3var2	=	$_POST['bagian3var2'];
    $bagian3var3    =   $_POST['bagian3var3'];
    $bagian4var1    =   $_POST['bagian4var1'];
    $bagian4var2    =   $_POST['bagian4var2'];
    $bagian3var3    =   $_POST['bagian4var3'];

	//membuat binernya per bagian
	$binerbagian1 = $bagian1var1.$bagian1var2.$bagian1var3;
	$binerbagian2 = $bagian2var1.$bagian2var2.$bagian2var3;
    $binerbagian3 = $bagian3var1.$bagian3var2.$bagian3var3;
    $binerbagian4 = $bagian4var1.$bagian4var2.$bagian4var3;

	//konversi biner ke desimal
	$binertodesimal_bagian1 = bindec($binerbagian1);
	$binertodesimal_bagian2 = bindec($binerbagian2);
    $binertodesimal_bagian3 = bindec($binerbagian3);
    $binertodesimal_bagian4 = bindec($binerbagian4);

	//mengurutkan bilangan
	$mengurutkan_desimal = array("$binertodesimal_bagian1", "$binertodesimal_bagian2", "$binertodesimal_bagian3", "$binertodesimal_bagian4");

	//mengambil nilai urut
	$urutan1 = $mengurutkan_desimal[0];
	$urutan2 = $mengurutkan_desimal[1];
    $urutan3 = $mengurutkan_desimal[2];
    $urutan4 = $mengurutkan_desimal[3];

	//konversi desimal ke biner
	$biner_urutan_bagian1 = decbin($urutan1);
	$biner_urutan_bagian2 = decbin($urutan2);
    $biner_urutan_bagian3 = decbin($urutan3);
    $biner_urutan_bagian4 = decbin($urutan4);

	if ($urutan1 == 0 or $urutan1 == 1)
    {
        $biner_urutan_bagian1 = '0'.'0'.decbin($urutan1);
    }
    elseif ($urutan1 == 2 or $urutan1 == 3) {
        $biner_urutan_bagian1 = '0'.decbin($urutan1);
    }
    else
    {
        $biner_urutan_bagian1 = decbin($urutan1);
    }

    if ($urutan2 == 0 or $urutan2 == 1)
    {
        $biner_urutan_bagian2 = '0'.'0'.decbin($urutan2);
    }
    elseif ($urutan2 == 2 or $urutan2 == 3) {
        $biner_urutan_bagian2 = '0'.decbin($urutan2);
    }
    else
    {
        $biner_urutan_bagian2 = decbin($urutan2);
    }

    if ($urutan3 == 0 or $urutan3 == 1)
    {
        $biner_urutan_bagian3 = '0'.decbin($urutan3);
    }
    elseif ($urutan3 == 2 or $urutan3 == 3) {
        $biner_urutan_bagian3 = '0'.decbin($urutan3);
    }
    else
    {
        $biner_urutan_bagian3 = decbin($urutan3);
    }

	//echo $biner_urutan_bagian1.' '.$biner_urutan_bagian2.' '.$biner_urutan_bagian3.'<br><br>';

	// mengambil nilai perbagian dan pervariabel
	$data_biner_1_array1 = substr($biner_urutan_bagian1,0,1);
    $data_biner_2_array1 = substr($biner_urutan_bagian1,1,-1);
    $data_biner_3_array1 = substr($biner_urutan_bagian1,2,3);

    // echo '1. '.$urutan1.' '.$data_biner_1_array1.'<br>';
    // echo '2. '.$urutan1.' '.$data_biner_2_array1.'<br>';
    // echo '3. '.$urutan1.' '.$data_biner_3_array1.'<br>';

    $data_biner_1_array2 = substr($biner_urutan_bagian2,0,1);
    $data_biner_2_array2 = substr($biner_urutan_bagian2,1,-1);
    $data_biner_3_array2 = substr($biner_urutan_bagian2,2,3);

    // echo '<br>1. '.$urutan2.' '.$data_biner_1_array2.'<br>';
    // echo '2. '.$urutan2.' '.$data_biner_2_array2.'<br>';
    // echo '3. '.$urutan2.' '.$data_biner_3_array2.'<br>';

    $data_biner_1_array3 = substr($biner_urutan_bagian3,0,1);
    $data_biner_2_array3 = substr($biner_urutan_bagian3,1,-1);
    $data_biner_3_array3 = substr($biner_urutan_bagian3,2,3);

    // echo '<br>1. '.$urutan3.' '.$data_biner_1_array3.'<br>';
    // echo '2. '.$urutan3.' '.$data_biner_2_array3.'<br>';
    // echo '3. '.$urutan3.' '.$data_biner_3_array3.'<br>';

    //menjumlahkan nomor urut 1 dan 3
    $nomor1var1 = $data_biner_1_array1;
    $nomor1var2 = $data_biner_1_array2;
    $nomor1var3 = $data_biner_1_array3;
    
    $nomor3var1 = $data_biner_3_array1;
    $nomor3var2 = $data_biner_3_array2;
    $nomor3var3 = $data_biner_3_array3;

    //menjumlahkan bagian 1 variabel 1 dengan bagian 3 variabel 1
    if ($nomor1var1 == 0 and $nomor3var1 == 0) {
    	//echo '0';
    	$hasil_1311 = '0';
    }
    elseif ($nomor1var1 == 1 and $nomor3var1 == 0) {
    	//echo '-';
    	$hasil_1311 = '-';
    }
    elseif ($nomor1var1 == 0 and $nomor3var1 == 1) {
    	//echo '-';
    	$hasil_1311 = '-';
    }
    elseif ($nomor1var1 == 1 and $nomor3var1 == 1) {
    	//echo '1';
    	$hasil_1311 = '1';
    }



    //menjumlahkan bagian 1 variabel 2 dengan bagian 3 variabel 2
    if ($nomor1var2 == 0 and $nomor3var2 == 0) {
    	//echo '0';
    	$hasil_1322 = '0';
    }
    elseif ($nomor1var2 == 1 and $nomor3var2 == 0) {
    	//echo '-';
    	$hasil_1322 = '-';
    }
    elseif ($nomor1var2 == 0 and $nomor3var2 == 1) {
    	//echo '-';
    	$hasil_1322 = '-';
    }
    elseif ($nomor1var2 == 1 and $nomor3var2 == 1) {
    	//echo '1';
    	$hasil_1322 = '1';
    }

    //menjumlahkan bagian 1 variabel 3 dengan bagian 3 variabel 3
    if ($nomor1var3 == 0 and $nomor3var3 == 0) {
    	//echo '0<br>';
    	$hasil_1333 = '0';
    }
    elseif ($nomor1var3 == 1 and $nomor3var3 == 0) {
    	//echo '-<br>';
    	$hasil_1333 = '-';
    }
    elseif ($nomor1var3 == 0 and $nomor3var3 == 1) {
    	//echo '-<br>';
    	$hasil_1333 = '-';
    }
    elseif ($nomor1var3 == 1 and $nomor3var3 == 1) {
    	//echo '1<br>';
    	$hasil_1333 = '1';
    }

    //====================================================

    //menjumlahkan nomor urut 2 dan 3
    $nomor2var1 = $data_biner_2_array1;
    $nomor2var2 = $data_biner_2_array2;
    $nomor2var3 = $data_biner_2_array3;
    
    $nomor3var1 = $data_biner_3_array1;
    $nomor3var2 = $data_biner_3_array2;
    $nomor3var3 = $data_biner_3_array3;

    //menjumlahkan bagian 2 variabel 1 dengan bagian 3 variabel 1
    if ($nomor2var1 == 0 and $nomor3var1 == 0) {
    	//echo '0';
    	$hasil_2311 = '0';
    }
    elseif ($nomor2var1 == 1 and $nomor3var1 == 0) {
    	//echo '-';
    	$hasil_2311 = '-';
    }
    elseif ($nomor2var1 == 0 and $nomor3var1 == 1) {
    	//echo '-';
    	$hasil_2311 = '-';
    }
    elseif ($nomor2var1 == 1 and $nomor3var1 == 1) {
    	//echo '1';
    	$hasil_2311 = '1';
    }

    //menjumlahkan bagian 2 variabel 2 dengan bagian 3 variabel 2
    if ($nomor2var2 == 0 and $nomor3var2 == 0) {
    	//echo '0';
    	$hasil_2322 = '0';
    }
    elseif ($nomor2var2 == 1 and $nomor3var2 == 0) {
    	//echo '-';
    	$hasil_2322 = '-';
    }
    elseif ($nomor2var2 == 0 and $nomor3var2 == 1) {
    	//echo '-';
    	$hasil_2322 = '-';
    }
    elseif ($nomor2var2 == 1 and $nomor3var2 == 1) {
    	//echo '1';
    	$hasil_2322 = '1';
    }

    //menjumlahkan bagian 2 variabel 3 dengan bagian 3 variabel 3
    if ($nomor2var3 == 0 and $nomor3var3 == 0) {
    	//echo '0';
    	$hasil_2333 = '0';
    }
    elseif ($nomor2var3 == 1 and $nomor3var3 == 0) {
    	//echo '-';
    	$hasil_2333 = '-';
    }
    elseif ($nomor2var3 == 0 and $nomor3var3 == 1) {
    	//echo '-';
    	$hasil_2333 = '-';
    }
    elseif ($nomor2var3 == 1 and $nomor3var3 == 1) {
    	//echo '1';
    	$hasil_2333 = '1';
    }

    //====================================================

    // menentukan hasil akhir persamaan
    $nilai_persamaan1 = $hasil_1311.$hasil_1322.$hasil_1333;
    $nilai_persamaan2 = $hasil_2311.$hasil_2322.$hasil_2333;

    //menentukan variabel A B C
    $variabel1_persamaan1 = $hasil_1311; // A
    $variabel2_persamaan1 = $hasil_1322; // B
    $variabel3_persamaan1 = $hasil_1333; // C

    //menentukan variabel A B C
    $variabel1_persamaan2 = $hasil_2311; // A
    $variabel2_persamaan2 = $hasil_2322; // B
    $variabel3_persamaan2 = $hasil_2333; // C

    
    // Penentuan ABC Bagian 1
    if ($variabel1_persamaan1 === '0') {
    	$variabel_a = '-A';
    }
    elseif ($variabel1_persamaan1 === '1') {
    	$variabel_a = 'A';
    }
    elseif ($variabel1_persamaan1 === '-') {
    	$variabel_a = '-';
    }

    //echo '<br>'.$variabel_a;

    if ($variabel2_persamaan1 === '0') {
    	$variabel_b = '-B';
    }
    elseif ($variabel2_persamaan1 === '1') {
    	$variabel_b = 'B';
    }
    elseif ($variabel2_persamaan1 === '-') {
    	$variabel_b = '-';
    }

    //echo $variabel_b;

    if ($variabel3_persamaan1 === '0') {
    	$variabel_c = '-C';
    }
    elseif ($variabel3_persamaan1 === '1') {
    	$variabel_c = 'C';
    }
    elseif ($variabel3_persamaan1 === '-') {
    	$variabel_c = '-';
    }

    //echo $variabel_c;

    //menentukan variabel A B C
    $variabel1_persamaan2 = $hasil_2311; // A
    $variabel2_persamaan2 = $hasil_2322; // B
    $variabel3_persamaan2 = $hasil_2333; // C

    

    // Penentuan ABC Bagian 1
    if ($variabel1_persamaan2 === '0') {
        $variabel_aa = '-A';
    }
    elseif ($variabel1_persamaan2 === '1') {
        $variabel_aa = 'A';
    }
    elseif ($variabel1_persamaan2 === '-') {
        $variabel_aa = '-';
    }

    //echo '<br>'.$variabel_aa;


    if ($variabel2_persamaan2 === '0') {
        $variabel_bb = '-B';
    }
    elseif ($variabel2_persamaan2 === '1') {
        $variabel_bb = 'B';
    }
    elseif ($variabel2_persamaan2 === '-') {
        $variabel_bb = '-';
    }

    //echo $variabel_bb;

    if ($variabel3_persamaan2 === '0') {
        $variabel_cc = '-C';
    }
    elseif ($variabel3_persamaan2 === '1') {
        $variabel_cc = 'C';
    }
    elseif ($variabel3_persamaan2 === '-') {
        $variabel_cc = '-';
    }

    //echo $variabel_cc;

    // cek apakah nilainya " - ", jika ya maka tidak ditampilkan
    if ($variabel_a === '-') {
        $variabel_a = '';
    }
    else
    {
        $variabel_a = $variabel_a;
    }

    if ($variabel_b === '-') {
        $variabel_b = '';
    }
    else
    {
        $variabel_b = $variabel_b;
    }

    if ($variabel_c === '-') {
        $variabel_c = '';
    }
    else
    {
        $variabel_c = $variabel_c;
    }


    if ($variabel_aa === '-') {
        $variabel_aa = '';
    }
    else
    {
        $variabel_aa = $variabel_aa;
    }

    if ($variabel_bb === '-') {
        $variabel_bb = '';
    }
    else
    {
        $variabel_bb = $variabel_bb;
    }

    if ($variabel_cc === '-') {
        $variabel_cc = '';
    }
    else
    {
        $variabel_cc = $variabel_cc;
    }

    
    // close cek apakah nilainya " - ", jika ya maka tidak ditampilkan 



    //echo '<br>'.$variabel_a.$variabel_b.$variabel_c.' + '.$variabel_aa.$variabel_bb.$variabel_cc;
    //echo '<br>';
    

    if (
            ($variabel_a == 'A' and $variabel_b == 'B' and $variabel_c == 'C') 
            OR 
            ($variabel_a == '' and $variabel_b == 'B' and $variabel_c == 'C') 
            OR
            ($variabel_a == 'A' and $variabel_b == '' and $variabel_c == 'C')
            OR
            ($variabel_a == '' and $variabel_b == 'B' and $variabel_c == 'C')
            OR
            ($variabel_a == 'A' and $variabel_b == 'B' and $variabel_c == '')
            OR
            ($variabel_a == '' and $variabel_b == '' and $variabel_c == 'C')
            OR
            ($variabel_a == 'A' and $variabel_b == '' and $variabel_c == '')
            OR
            ($variabel_a == '' and $variabel_b == 'B' and $variabel_c == '')
        ) 
    {
        $variabel_ic_1 = 'AND';
        //echo "IC AND<br>";
    }
    elseif 
        (
            ($variabel_a == '-A' and $variabel_b == 'B' and $variabel_c == 'C')
            OR
            ($variabel_a == '-A' and $variabel_b == '-B' and $variabel_c == 'C')
            OR
            ($variabel_a == '-A' and $variabel_b == 'B' and $variabel_c == '-C')
            OR
            ($variabel_a == 'A' and $variabel_b == '-B' and $variabel_c == 'C')
            OR
            ($variabel_a == 'A' and $variabel_b == 'B' and $variabel_c == '-C')
            OR
            ($variabel_a == 'A' and $variabel_b == '-B' and $variabel_c == '-C')
            OR
            ($variabel_a == '' and $variabel_b == '-B' and $variabel_c == 'C')
            OR
            ($variabel_a == '' and $variabel_b == '-B' and $variabel_c == '-C')
            OR
            ($variabel_a == '-A' and $variabel_b == '' and $variabel_c == 'C')
            OR
            ($variabel_a == '-A' and $variabel_b == '' and $variabel_c == '-C')
            OR
            ($variabel_a == '-A' and $variabel_b == 'B' and $variabel_c == '')
            OR
            ($variabel_a == '-A' and $variabel_b == '-B' and $variabel_c == '')
            OR
            ($variabel_a == '' and $variabel_b == '' and $variabel_c == '-C')
            OR
            ($variabel_a == '' and $variabel_b == '-B' and $variabel_c == '')
            OR
            ($variabel_a == 'A' and $variabel_b == '' and $variabel_c == '')
            OR
            ($variabel_a == '-A' and $variabel_b == '' and $variabel_c == '')


        ) 
    {
        $variabel_ic_1 = 'OR';
    }



    if (
            ($variabel_aa == 'A' and $variabel_bb == 'B' and $variabel_cc == 'C') 
            OR 
            ($variabel_aa == '' and $variabel_bb == 'B' and $variabel_cc == 'C') 
            OR
            ($variabel_aa == 'A' and $variabel_bb == '' and $variabel_cc == 'C')
            OR
            ($variabel_aa == '' and $variabel_bb == 'B' and $variabel_cc == 'C')
            OR
            ($variabel_aa == 'A' and $variabel_bb == 'B' and $variabel_cc == '')
            OR
            ($variabel_aa == '' and $variabel_bb == '' and $variabel_cc == 'C')
            OR
            ($variabel_aa == 'A' and $variabel_bb == '' and $variabel_cc == '')
            OR
            ($variabel_aa == '' and $variabel_bb == 'B' and $variabel_cc == '')
             OR
            ($variabel_aa == '-A' and $variabel_bb == '' and $variabel_cc == '')
        ) 
    {
        $variabel_ic_2 = 'AND';
    }
    elseif 
        (
            ($variabel_aa == '-A' and $variabel_bb == 'B' and $variabel_cc == 'C')
            OR
            ($variabel_aa == '-A' and $variabel_bb == '-B' and $variabel_cc == 'C')
            OR
            ($variabel_aa == '-A' and $variabel_bb == 'B' and $variabel_cc == '-C')
            OR
            ($variabel_aa == 'A' and $variabel_bb == '-B' and $variabel_cc == 'C')
            OR
            ($variabel_aa == 'A' and $variabel_bb == 'B' and $variabel_cc == '-C')
            OR
            ($variabel_aa == 'A' and $variabel_bb == '-B' and $variabel_cc == '-C')
            OR
            ($variabel_aa == '' and $variabel_bb == '-B' and $variabel_cc == 'C')
            OR
            ($variabel_aa == '' and $variabel_bb == '-B' and $variabel_cc == '-C')
            OR
            ($variabel_aa == '-A' and $variabel_bb == '' and $variabel_cc == 'C')
            OR
            ($variabel_aa == '-A' and $variabel_bb == '' and $variabel_cc == '-C')
            OR
            ($variabel_aa == '-A' and $variabel_bb == 'B' and $variabel_cc == '')
            OR
            ($variabel_aa == '-A' and $variabel_bb == '-B' and $variabel_cc == '')
            OR
            ($variabel_aa == '' and $variabel_bb == '' and $variabel_cc == '-C')
            OR
            ($variabel_aa == '' and $variabel_bb == '-B' and $variabel_cc == '')
            OR
            ($variabel_aa == 'A' and $variabel_bb == '' and $variabel_cc == '')


        ) 
    {
        $variabel_ic_2 = 'OR';
    }

?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="bootstrap/css/bootstrap-grid.css">
    <link rel="stylesheet" href="bootstrap/css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="bootstrap/css/bootstrap-reboot.css">
    <link rel="stylesheet" href="bootstrap/css/bootstrap-reboot.min.css">
    <title>Penyederhanaan Persamaan</title>
</head>
<body>

    <div class="card">
      <div class="card-header">
        Penyederhanaan Persamaan 3 Bagian Variabel dan 3 Variabel
      </div>
      
      <div class="card-group" style="margin: 3%">
            <?php 
                $bagian1var1    =   $_POST['bagian1var1'];
                $bagian1var2    =   $_POST['bagian1var2'];
                $bagian1var3    =   $_POST['bagian1var3'];
                $bagian2var1    =   $_POST['bagian2var1'];
                $bagian2var2    =   $_POST['bagian2var2'];
                $bagian2var3    =   $_POST['bagian2var3'];
                $bagian3var1    =   $_POST['bagian3var1'];
                $bagian3var2    =   $_POST['bagian3var2'];
                $bagian3var3    =   $_POST['bagian3var3'];

                echo "Persamaan :";
                if ($bagian1var1 == 1) { echo ' A '; } else if ($bagian1var1 == 0) { echo ' -A '; }
                if ($bagian1var2 == 1) { echo ' B '; } else if ($bagian1var2 == 0) { echo ' -B '; }
                if ($bagian1var3 == 1) { echo ' C '; } else if ($bagian1var3 == 0) { echo ' -C '; }

                echo " + ";

                if ($bagian2var1 == 1) { echo ' A '; } else if ($bagian2var1 == 0) { echo ' -A '; }
                if ($bagian2var2 == 1) { echo ' B '; } else if ($bagian2var2 == 0) { echo ' -B '; }
                if ($bagian2var3 == 1) { echo ' C '; } else if ($bagian2var3 == 0) { echo ' -C '; }

                echo " + ";

                if ($bagian3var1 == 1) { echo ' A '; } else if ($bagian3var1 == 0) { echo ' -A '; }
                if ($bagian3var2 == 1) { echo ' B '; } else if ($bagian3var2 == 0) { echo ' -B '; }
                if ($bagian3var3 == 1) { echo ' C '; } else if ($bagian3var3 == 0) { echo ' -C '; }

                echo "<br>Penyederhanaan : ";
                echo ''.$variabel_a.$variabel_b.$variabel_c.' + '.$variabel_aa.$variabel_bb.$variabel_cc;
            ?>
      </div>
    </div>


    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="bootstrap/js/bootstrap.bundle.js"></script>
    <script src="bootstrap/js/bootstrap.js"></script>
</body>
</html>



