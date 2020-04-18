<?php  
include '../koneksi.php';

if(isset($_POST['simpan'])){
    $id         = $_POST['id_anggota'];
    $nama       = $_POST['nama'];
    $kelas      = $_POST['kelas'];
    $telp       = $_POST['telp'];
    $username   = $_POST['username'];
    $password   = $_POST['password'];
    $id_level   = $_POST['id_level'];
    

    $sql = "UPDATE anggota SET nama='$nama', kelas='$kelas', telp='$telp', username='$username', password='$password', id_level=$id_level WHERE id_anggota=$id";

    $res = mysqli_query($kon, $sql);
    $count = mysqli_affected_rows($kon);
    var_dump($count);
    if($res==1){
        echo "
            <script>
            alert('Data Berhasil Di Edit !!!');
            document.location.href='index.php';
            </script>
        ";
    }
    // else{
    //     echo "
    //         <script>
    //         alert('Data Berhasil Di Edit !!!');
    //         document.location.href='index.php';
    //         </script>
    //     ";
    // }
  }
?>