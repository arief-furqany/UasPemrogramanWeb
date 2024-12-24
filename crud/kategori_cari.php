<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Cari Kategori</title>
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
                  <a class="nav-link active" aria-current="page" href="../index.php"
                    >Home</a>
                </li>
                </ul>
              <ul class="navbar-nav me-right mb-2 mb-lg-0">
            <li class="nav-item">
                <a class="nav-link" href="../kategori/kategori.php">Kategori</a>
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

           // Query untuk mengambil data kategori
           $sql = "SELECT * FROM kategori";
           $result = mysqli_query($conn, $sql);

           // Tampilkan data dalam tabel
           if (mysqli_num_rows($result) > 0) {
               echo '<table class="table table-striped text-light">';
               echo '<thead><tr><th>No</th><th>Nama Kategori</th><th>Aksi</th></tr></thead>';
               echo '<tbody>';

               $no = 1;
               while ($row = mysqli_fetch_assoc($result)) {
                   echo '<tr>';
                   echo '<td>' . $no++ . '</td>';
                   echo '<td>' . htmlspecialchars($row['nama_kategori']) . '</td>';
                   echo '<td>';
                   echo '<a href="../kategori/edit_kategori.php?id=' . $row['id'] . '" class="btn btn-warning btn-sm">Edit</a> ';
                   echo '<a href="../kategori/delete_kategori.php?id=' . $row['id'] . '" class="btn btn-danger btn-sm" onclick="return confirm(\'Yakin ingin menghapus?\')">Hapus</a>';
                   echo '</td>';
                   echo '</tr>';
               }

               echo '</tbody>';
               echo '</table>';
           } else {
               echo '<p class="text-light">Tidak ada data kategori.</p>';
           }
           ?>


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
