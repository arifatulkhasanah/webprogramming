<?php  
    if(defined("IS_INDEX") == false)
    {
        die("Please stop here!");
    }


// mengubah di database
$data =  array(
    'nim' => $_POST['nim'],
    'nama' => $_POST['nama'],
    'alamat' => $_POST['alamat'],
);

update_data_mahasiswa($data);

redirect_to("mahasiswa");

?>