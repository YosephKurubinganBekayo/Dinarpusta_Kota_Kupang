<?php
// Koneksi database
?>

<section class="content">
  <div class="row">
    <div class="col-md-12">
      <div class="box box-info">
        <div class="box-header with-border">
          <h3 class="box-title">Tambah Data Departemen</h3>
        </div>
        <form action="" method="post" enctype="multipart/form-data">
          <div class="box-body">
            <div class="form-group">
              <label>Nama Departemen</label>
              <input type="text" name="nama_departemen" class="form-control" placeholder="Masukkan Nama Departemen" required>
            </div>
            <div class="form-group">
              <label>Gambar</label>
              <input type="file" name="gambar" class="form-control" required>
            </div>
          </div>
          <div class="box-footer">
            <input type="submit" name="tambah" value="Tambah Data" class="btn btn-info">
            <a href="?page=MyApp/data_departemen" class="btn btn-warning">Batal</a>
          </div>
        </form>
      </div>
    </div>
  </div>
</section>

<?php
// Proses tambah data
if (isset($_POST['tambah'])) {
  $nama_departemen = $_POST['nama_departemen'];
  $gambar_baru = $_FILES['gambar']['name'];

  // Validasi dan upload gambar
  if ($gambar_baru) {
    $target_dir = "../img/"; // Folder spesifik untuk gambar departemen
    $imageFileType = strtolower(pathinfo($gambar_baru, PATHINFO_EXTENSION));
    $file_name = time() . '_' . uniqid() . '.' . $imageFileType; // Nama unik untuk file
    $target_file = $target_dir . $file_name;

    // Validasi file
    $check = getimagesize($_FILES["gambar"]["tmp_name"]);
    if ($check !== false && in_array($imageFileType, ['jpg', 'jpeg', 'png'])) {
      if (move_uploaded_file($_FILES["gambar"]["tmp_name"], $target_file)) {
        $gambar = $file_name; // Gunakan nama file unik
      } else {
        echo "<script>alert('Gagal mengupload gambar.');</script>";
        $gambar = ""; // Jika gagal upload, gambar kosong
      }
    } else {
      echo "<script>alert('File yang diunggah bukan gambar atau format tidak sesuai.');</script>";
      $gambar = ""; // Gambar kosong karena validasi gagal
    }
  } else {
    $gambar = ""; // Jika tidak ada gambar yang diunggah
  }

  // Jika gambar sukses diupload atau kosong
  $query_tambah = $koneksi->query("INSERT INTO departemen (nama_departemen, gambar) VALUES ('$nama_departemen', '$gambar')");

  if ($query_tambah) {
    echo "<script>
            Swal.fire({title: 'Tambah Data Berhasil', text: '', icon: 'success', confirmButtonText: 'OK'})
            .then((result) => {
                if (result.value) {
                    window.location = 'index.php?page=MyApp/data_departemen';
                }
            })
            </script>";
  } else {
    // Hapus file jika query gagal
    if (!empty($gambar) && file_exists($target_file)) {
      unlink($target_file);
    }
    echo "<script>
            Swal.fire({title: 'Tambah Data Gagal', text: '', icon: 'error', confirmButtonText: 'OK'})
            .then((result) => {
                if (result.value) {
                    window.location = 'index.php?page=MyApp/tambah_departemen';
                }
            })
            </script>";
  }
}
?>