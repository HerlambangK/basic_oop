<!-- 
    elang dan harimau 
-2 class utama Hewan dan Fight (tidak bisa di instansiasi)
-kelas Elang dan Harimau dapat menggunakan seluruh method dari kelas HF kelas ini dapat di instansiasi

properti hewan{nama, darah = 50 , jumlah ka6ki, keahlian}
property fight { ATTACK POWER< DEFENCE POWER}

 -->

<?php
 

require_once 'hewan.php';

 
    $hewan1 = new Harimau('harimau',4,50, 'cakar');
    echo 'nama hewan:'. $hewan1->get_namaHewan(). '</br>';
    echo 'jumlah Kaki:'. $hewan1->get_jumlahKaki(). '</br>';
    echo 'darah sekarang:'. $hewan1->get_darah(). '</br>';
    echo 'kemampuan sekarang:'. $hewan1->get_kemampuan(). '</br>';
    echo $hewan1->atraksi(). '</br>';

    // echo 'kemampuan: '. $hewan1->serang(). '</br>';

    echo '</br>';
    $hewanElang = new Elang('Elang',2,50, 'terbang');
    echo 'nama hewan:'. $hewanElang->get_namaHewan(). '</br>';
    echo 'jumlah Kaki:'. $hewanElang->get_jumlahKaki(). '</br>';
    echo 'darah sekarang:'. $hewanElang->get_darah(). '</br>';
    echo 'kemampuan sekarang:'. $hewanElang->get_kemampuan(). '</br>';
    echo $hewanElang->atraksi(). '</br>';
    echo '</br>'.'</br>';

    $bertarung = new Fight;
    echo $bertarung->serang(20,20,5). '</br>';
    echo $bertarung->diserang(20,20,5). '</br>';

 ?>