<?php  
    if(defined("IS_INDEX") == false)
    {
        die("Please stop here!");
    }

    $nim = $_GET['nim'];
    hapus_mahasiswa($nim);
    redirect_to("mahasiswa");

?>

