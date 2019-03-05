<?php
    include "koneksi.php";

    $sql = "CREATE TABLE user(
        id int PRIMARY KEY,
        nama varchar(50), /*varchar adalah tipe data karakter atau alfabet(a-z)*/
        role varchar(50),
        availability varchar(50),
        age int,
        location varchar(50),
        years_expereience varchar(50),
        email varchar(50)
    )";

    if($koneksi->query($sql) == TRUE){
        echo "Tabel berhasil dibuat";
    }else{
        echo "Tabel gagal dibuat";
    }

?>