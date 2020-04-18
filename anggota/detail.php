<?php  
include '../koneksi.php';
include '../aset/header.php';

$id = $_GET['id_anggota']; 
$sql = mysqli_query($kon, "SELECT * FROM anggota WHERE id_anggota=$id");
$query = mysqli_query($kon, "SELECT * FROM kategori");
?>

<!DOCTYPE html>
<html>
<head>
	<title>Edit Data Anggota</title>
</head>
<body>
	<div class="container">
		<div class="row mt-4">
			<div class="col-md-9">
				<div class="card">
					<div class="card-header">
						<h2><i class="fas fa-user-plus"></i> Detail Data Anggota</h2>
					</div>
					<div class="card-body">
						<form method="post" action = "">
							<table class="table">
                            <?php
                            while($anggota = mysqli_fetch_assoc($sql)):
                            ?>

							<tr>
								<td>Nama Lengkap</td>
								<td><input type="text" name="nama" value="<?php echo $anggota['nama'];?>"></td>
							</tr>
							<tr>
								<td>Kelas</td>
								<td><input type="text" name="kelas"  value="<?php echo $anggota['kelas'];?>"></td>
							</tr>
							<tr>
								<td>Nomor Telepon</td>
								<td><input type="text" name="telp"  value="<?php echo $anggota['telp'];?>"></td>
							</tr>
							<tr>
								<td>Username</td>
								<td><input type="text" name="username" value="<?php echo $anggota['username'];?>"></td>
							</tr>
							<tr>
								<td>Password</td>
								<td><input type="text" name="password"  value="<?php echo $anggota['password'];?>"></td>
							</tr>
                            <?php
                            endwhile;
                            ?>
                            <tr>
                                <td class="text-left" colspan="2">
                                    <a href="index.php" class="btn btn-success"><i class="fas fa-angle-double-left"></i>kembali</a>
                                </td>
                            </tr>

							
							</table>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>

<?php  
include '../aset/footer.php';
?>