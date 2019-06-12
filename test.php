    <?php

        echo "Test";
        echo "<br>";

        /* sample string */
        $str = "aabcdeee";

        /* menghitung panjang string */
        $nStr = strlen($str);
        echo $str;
        echo "<br>";

        /* melakukan distinct pada string */
        $dist = count_chars($str, 3);

        /* menghitung panjang string setelah dilakukan distinct */
        $nDist = strlen($dist);

        /* Deklarasi array */
        $hasil = array();

        /* Variable bantu untuk menghitung jumlah tiap karakter */
        $jml;

        /* Looping sejumlah panjang string distinct */
        for ($i=0; $i < $nDist; $i++) {

            /* Looping sejumlah panjang string */
            for ($j=0; $j < $nStr; $j++) {

                /* Jika karakter hasil distinct string sama dengan karakter pada string  */
                if (substr($dist,$i,1) == substr($str,$j,1)) {
                    
                    /* Lakukan increment */
                    $jml += 1;

                    /* Simpan jumlah ke array associative */
                    $hasil[substr($dist,$i,1)] = $jml;
                } 

            }

            /* Set jumlah jadi nol lagi */
            $jml = 0;
            
        }

        /* Melakukan sorting descending pada array */
        arsort($hasil);

        /* Menampilkan array ke browser */
        foreach ($hasil as $k => $v) {
            echo $k." = ".$v;
            echo "<br>"; 
        }

        /* Menyimpan array ke file txt */
        file_put_contents("hasil.txt", var_export($hasil, TRUE));

    ?>
