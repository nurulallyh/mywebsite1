<?php
if (isset($_GET['delete'])) {
    $id = $_GET['id'];
    $query_delete = mysqli_query($koneksi, "DELETE FROM petugas where id_petugas = '$id' ");

    if($query_delete){
        ?>
            <script>
                alert("Data Berhasil Dihapus");
            </script>
        <?php
        header('location:http://localhost/15_PTSGANJIL2021_12RPL1_MuhammadDaffaAbiyyuSyaddad/admin.php?page=petugas');
    }
}

    if ($query_delete) {
        ?>

        <div class="alert alert-warning alert-dismissible fade show" role="alert">
        DATA BERHASIL DIHAPUS !!
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    <?php
    }else {
        ?>

        <div class="alert alert-warning alert-dismissible fade show" role="alert">
        DATA GAGAL DIHAPUS !!
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    <?php
    }
?>