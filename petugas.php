<?php

if (isset($_POST['save'])) {
    $nama       = $_POST['nama'];
    $jabatan    = $_POST['jabatan'];
    $telp       = $_POST['telp'];
    $alamat     = $_POST['alamat'];
    $query_insert = mysqli_query($koneksi,"INSERT INTO petugas VALUES('','$nama','$jabatan','$telp','$alamat')");
    if($query_insert)
    {
        ?>
        <div class="alert alert-success">
            Data Berhasil Disimpan!
        </div>
        <?php
    header('refresh:3; URL=http://localhost/15_PTSGANJIL2021_12RPL1_MuhammadDaffaAbiyyuSyaddad/admin.php?page=petugas');
    }
  }
?>
<center><h1 class="mt-4 mb-3">Data Petugas</h1></center>
<button type="button" class="btn btn-primary mb-1" data-bs-toggle="modal" data-bs-target="#tambahpetugas">
  Tambah Data
</button>
<table class="table table-striped">
    <tr>
        <th>No</th>
        <th>Nama</th>
        <th>Jabatan</th>
        <th>No Telepon</th>
        <th>Alamat</td>
        <th>--Action--</th>
    </tr>
    <?php
        $no=1;
        $query = mysqli_query($koneksi,"SELECT * FROM petugas");
        foreach ($query as $row) {
    ?>
    <tr>
        <td><?php echo $no; ?></td>
        <td><?php echo $row['nama']; ?></td>
        <td><?php echo $row['jabatan']; ?></td>
        <td><?php echo $row['telp']; ?></td>
        <td><?php echo $row['alamat']; ?></td>
        <td>
            <a href="?page=deletepetugas&delete=&id=<?php echo $row['id_petugas'];?>">
                <button class="btn btn-danger">Hapus</button>
            </a>
        </td>
    </tr>
    <?php
    $no++;
    }
    ?>
</table>

<div class="modal fade" id="tambahpetugas" tabindex="-1" aria-labelledby="tambahpetugasLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="tambahpetugasLabel">Form Tambah petugas</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form action="" method="post">
                <div class="form-group mt-3">
                    <input class="form-control" type="text" name="nama" placeholder="Nama Lengkap">
                </div>
                <div class="form-group mt-3">
                    <input class="form-control" type="text" name="jabatan" placeholder="Jabatan">
                </div>
                <div class="form-group mt-3">
                    <input class="form-control" type="text" name="telp" placeholder="No Telepon">
                </div>
                <div class="form-group mt-3">
                    <textarea name="alamat" id="" class="form-control" placeholder="Alamat Lengkap"></textarea>
                </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="submit" name="save" class="btn btn-primary">Save changes</button>
            </form>
        </div>
        </div>
    </div>
</div>