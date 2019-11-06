<?php  
    if(defined("IS_INDEX") == false)
    {
        die("Please stop here!");
    }
?>

<h4>
    Data Mahasiswa
    <span class="float-right">
        <a href="index.php?page=mahasiswa" class="btn btn-default">
            Kembali
        </a>
    </span>
</h4>
<br/>
<form action="index.php?page=simpan_mahasiswa" method="post">
    <table>
        <tr>
            <td>NIM</td>
            <td>:</td>
            <td><input type="text" name="nim" /></td> 
        </tr>
        <tr>
            <td>Nama</td>
            <td>:</td>
            <td><input type="text" name="nama" /></td> 
        </tr>
        <tr>
            <td>Alamat</td>
            <td>:</td>
            <td><input type="text" name="alamat" /></td> 
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td><input type="submit" /></td> 
        </tr>
    </table>
</form>