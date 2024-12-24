<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Cari Buku</title>
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
                <a class="nav-link" href="../buku/daftar_buku.php">Daftar Buku</a>
                </li>
            </ul>
            </div>
          </div>
        </nav>
        <section
          id="about"
          class="d-flex justify-content-center align-items-center flex-column">


          <!--
          Isikan codingan CRUD phpnya disini 
           -->
           <?php
// Koneksi ke database
include '../koneksi.php';

// Query untuk mengambil data buku
$sql = "SELECT * FROM buku";
$result = mysqli_query($conn, $sql);

// Cek jika ada data
if (mysqli_num_rows($result) > 0) {
    echo '<table class="table table-striped text-light">';
    echo '<thead>';
    echo '<tr><th>No</th><th>Judul Buku</th><th>Penulis</th><th>Kategori</th><th>Aksi</th></tr>';
    echo '</thead>';
    echo '<tbody>';
    
    $no = 1;
    while ($row = mysqli_fetch_assoc($result)) {
        echo '<tr>';
        echo '<td>' . $no++ . '</td>';
        echo '<td>' . htmlspecialchars($row['judul']) . '</td>';
        echo '<td>' . htmlspecialchars($row['penulis']) . '</td>';
        echo '<td>' . htmlspecialchars($row['kategori']) . '</td>';
        echo '<td>';
        echo '<a href="../crud/aksi_buku_edit.php?id=' . $row['id'] . '" class="btn btn-warning btn-sm">Edit</a> ';
        echo '<a href="../crud/aksi_buku_delete.php?id=' . $row['id'] . '" class="btn btn-danger btn-sm" onclick="return confirm(\'Yakin ingin menghapus?\')">Hapus</a>';
        echo '</td>';
        echo '</tr>';
    }

    echo '</tbody>';
    echo '</table>';
} else {
    echo '<p class="text-light">Tidak ada data buku.</p>';
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
