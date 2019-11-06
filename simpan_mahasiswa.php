<?php  
    if(defined("IS_INDEX") == false)
    {
        die("Please stop here!");
    }


// menyimpan data ke dalam database
$data =  array(
    'nim' => $_POST['nim'],
    'nama' => $_POST['nama'],
    'alamat' => $_POST['alamat'],
);

simpan_data_mahasiswa($data);

redirect_to("mahasiswa");

?>