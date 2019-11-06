<?php if (defined("IS_INDEX")==false)
        {
            die("Please stop here!");
        }

?>

<?php
function connect_to_db()
{
    $conn = mysqli_connect("127.0.0.1","root","","webprogramming");

    if($conn == false)
    {
        echo mysqli_connect_error();
        die();
    }
    else
    {
        return $conn;
    }
}

    function select_db($sql)
    {
        $conn = connect_to_db();
        return mysqli_query($conn, $sql);
    }

    function get_mahasiswa()
    {
        $sql = "select * from mahasiswa";
        return select_db($sql);
    }

    function get_mahasiswa_by_nim($nim)
    {
        $conn = connect_to_db();
        $sql = "select * from mahasiswa where nim=".$nim;
        $query = mysqli_query($conn,$sql);
        return mysqli_fetch_array($query);
    }

    function hapus_mahasiswa($nim)
    {
        $conn = connect_to_db();
        $sql = "delete from mahasiswa where nim=".$nim;
        mysqli_query($conn,$sql);
    }

    function simpan_data_mahasiswa($data)
    {
        $conn = connect_to_db();
        $nim = $data['nim'];
        $nama = $data['nama'];
        $alamat = $data['alamat'];
        $sql = "insert into mahasiswa
                values ('$nim', '$nama', '$alamat')";
        mysqli_query($conn, $sql);
    }

    function update_data_mahasiswa($data)
    {
        $conn = connect_to_db();
        $nim = $data['nim'];
        $nama = $data['nama'];
        $alamat = $data['alamat'];
        $sql = "update mahasiswa
                set nama='$nama', alamat='$alamat'
                where nim='$nim'";
        mysqli_query($conn, $sql);
    }
    function proses_login($username,$password)
    {
        $conn = connect_to_db();
        $sql = "SELECT * FROM pengguna WHERE username='$username'
        AND password='".md5($password)."'";
        $query = mysqli_query($conn,$sql);

        $num =  mysqli_num_rows($query);
        return ($num > 0);
    }

    function redirect_to($page)
    {
    echo"<script>
        window.location = 'index.php?page=$page'
        </script>";
    }

    function tambah_mahasiswa($nim)
    {
        $conn = connect_to_db();
        $sql = "INSERT INTO mahasiswa VALUES ('$nim', '$nama', '$alamat')";
        mysqli_query($conn,$sql);
    }

?>

