<?php  
    if(defined("IS_INDEX") == false)
    {
        die("Please stop here!");
    }
?>

<h4>
    From Edit Data Mahasiswa
    <span class="float-right">
        <a href="index.php?page=mahasiswa" class="btn btn-light">
            Kembali
        </a>
    </span>
</h4>
<br/>
<?php
    $nim = $_GET['nim'];
    $data = get_mahasiswa_by_nim($nim);
?>

<form action="index.php?page=update_mahasiswa" method="post">

    <input type="hidden" name="nim" value="<?php echo $nim;?>"/>
    <table>
        <tr>
            <td>Nama</td>
            <td>:</td>
            <td><input type="text" name="nama" value="<?php echo $data['nama']?>"/></td>
        </tr>
        <tr>
            <td>Alamat</td>
            <td>:</td>
            <td><input type="text" name="alamat" value="<?php echo $data['alamat']?>"/></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td><input type="submit"/></td> 
        </tr>
    </table>
</form>