<?php  
    if(defined("IS_INDEX") == false)
    {
        die("Please stop here!");
    }
?>

<h4>
    Data Mahasiswa
    <span class="float-right">
        <a href="index.php?page=from_add_mahasiswa" class="btn btn-primary">
            Tambah Data Mahasiswa
        </a>
    </span>
</h4>

<?php
    $mahasiswa = get_mahasiswa();
?>

<table class="table table-bordered">
    <tr>
    <th>nim</th>
    <th>nama</th>
    <th>alamat</th>
    <th>aksi</th>
    </tr>
<?php
while($row = mysqli_fetch_assoc($mahasiswa))
{
    echo "<tr>
        <td>".$row['nim']."</td>
        <td>".$row['nama']."</td>
        <td>".$row['alamat']."</td>
        <td>
            <a href='index.php?page=edit_mahasiswa&nim=".$row['nim']."'>Edit</a> |
            <a href='index.php?page=hapus_mahasiswa&nim=".$row['nim']."'>Hapus</a>
        </td>
    </tr>";
}
?>
</table>

