<?php
    $nama ="kaleb";
    if( empty($nama)){
        echo "variabel nama tidak ada nilainya.<BR>";
    } else {
        echo "variabel nama ada nilainya..<BR>"; 
    }

    for($i=0; $i<5; $i++){
    echo "HALLO SA PU NAMA ".$nama."...".$i."<BR>";
    }

    $mahasiswa = ["kaleb","maurens","ades","nata","vilna","juna","josua"];

    function cetaknama($nama){
        echo $nama." di cetak <br>";
    }

    for($a=0; $a<count($mahasiswa); $a++){
        cetaknama($mahasiswa[$a]);

    }

?>