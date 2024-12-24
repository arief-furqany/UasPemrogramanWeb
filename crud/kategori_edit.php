<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Edit Kategori</title>
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css"
    />
    <link rel="stylesheet" type="text/css" href="../css/back.css" />
    <link rel="icon" href="../img/lambang.png" />
  </head>
  <body class="body-home">
    <div class="black-fill">
      <br />
      <br />
      <div class="container">
        <nav class="navbar navbar-expand-lg bg-light" id="homeNav">
          <div class="container-fluid">
            <a class="navbar-brand" href="#">
              <img src="../img/lambang.png" width="50" />
            </a>
            <button
              class="navbar-toggler"
              type="button"
              data-bs-toggle="collapse"
              data-bs-target="#navbarSupportedContent"
              aria-controls="navbarSupportedContent"
              aria-expanded="false"
              aria-label="Toggle navigation"
            >
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="../index.php">Home</a>
                </li>
              </ul>
            </div>
          </div>
        </nav>
        <section
          id="about"
          class="d-flex justify-content-center align-items-center flex-column">

           <?php
           // Koneksi ke database
           include '../koneksi.php';

           // Ambil ID kategori dari parameter URL
           $id_kategori = $_GET['id'];

           // Query untuk mendapatkan data kategori berdasarkan ID
           $sql = "SELECT * FROM kategori WHERE id = $id_kategori";
           $result = mysqli_query($conn, $sql);

           // Jika data ditemukan
           if ($result && mysqli_num_rows($result) > 0) {
               $kategori = mysqli_fetch_assoc($result);
           } else {
               echo '<p class="text-light">Kategori tidak ditemukan!</p>';
               exit;
           }

           // Proses ketika form disubmit
           if ($_SERVER['REQUEST_METHOD'] === 'POST') {
               $nama_kategori = $_POST['nama_kategori'];

               // Update data kategori ke database
               $sql_update = "UPDATE kategori SET nama_kategori = '$nama_kategori' WHERE id = $id_kategori";

               if (mysqli_query($conn, $sql_update)) {
                   echo '<div class="alert alert-success">Data kategori berhasil diperbarui!</div>';
               } else {
                   echo '<div class="alert alert-danger">Gagal memperbarui data kategori: ' . mysqli_error($conn) . '</div>';
               }
           }
           ?>

           <!-- Form Edit Kategori -->
           <form method="POST" action="" class="text-light w-50">
               <div class="mb-3">
                   <label for="nama_kategori" class="form-label">Nama Kategori</label>
                   <input
                       type="text"
                       class="form-control"
                       id="nama_kategori"
                       name="nama_kategori"
                       value="<?= htmlspecialchars($kategori['nama_kategori']) ?>"
                       required
                   >
               </div>
               <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
               <a href="../kategori/kategori.php" class="btn btn-secondary">Kembali</a>
           </form>

        <br>
        <br>
        <br>

        </section>
        <div class="text-center text-light">
          Copyright &copy; 2023 Harald School. All rights reserved.
        </div>
      </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
