<?php
    $nawal = 0;
    $nakhir = 10;
    
    while($nawal < $nakhir){ //while pengecekannya di awal
        echo "Perulangan ke-".$nawal."<br>"; //perulangan akan berakhir jika bernilai false, jika true maka terus berulang
        $nawal++; //nilai setiap perulangan akan di tambahkan 1 angka
    }

    echo "<hr>"; //pemisah baris

    $nawal = 0; //jika ini dihapus maka perulangan 10 aja kelihatan, karena perulangan terakhir

    do{ // do while pengecekannya di akhir, kenapa muncul 10 dulu, karena masuk dulu baru diperiksa, minimal dia melakukan perulangan 1x 
        echo "Perulangan ke-".$nawal."<br>";
        $nawal++;
    }while($nawal < $nakhir);
