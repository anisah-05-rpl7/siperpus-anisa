<?php

include'../koneksi.php';

$sql = "SELECT * FROM anggota";

$res = mysqli_query($kon,$sql);

$anggota= array();

while($data = mysqli_fetch_assoc($res)) {
    $anggota[]=$data;
}
include'../aset/header.php';
?>

<div class="container">
    <div class="row mt-4">
    <div class="col-md">
    </div>
    </div>
</div>

<div class="card">
<div class="card-header">
    <h2 class="card-title"><i class="far fa-edit"></i>Data Anggota</h2>
    <a href="tambah.php" class="badge badge-info">Tambah Data</a>
</div>
<div class="card-body">
<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nama</th>
      <th scope="col">Kelas</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>

  <?php
  $no = 1;
  foreach($anggota as $a){?>
  <tr>
    <th scope="row"><?=$no ?></th>
    <td><?=$a['nama']?></td>
    <td><?=$a['kelas']?></td>
<td>
<a href="detail.php?id_anggota=<?= $a['id_anggota']?>" class="badge badge-success">Detail</a>
<a href="edit.php?id_anggota=<?= $a['id_anggota']?>" class="badge badge-warning">Edit</a>
<a href="hapus.php?id_anggota=<?= $a['id_anggota']?>" class="badge badge-danger">Hapus</a>

</td>
  </tr>

<?php
$no++;}
?>
</table>
</div>
</div>

<div class="container">
<div class="row mt-4">
<div class="col-md">
</div>
</div>
</div>

<?php
include'../aset/footer.php';
?>