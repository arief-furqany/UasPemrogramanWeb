<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Input Buku</title>
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
          class="d-flex justify-content-center align-items-center flex-column"
        >
        <?php
        include "../koneksi.php";
        ?>
        <style>
            body {
                color: white;
            }

            table, th, td {
                border: 2px solid white;
                color: white;
            }

            a {
                color: black;
                text-decoration: none;
            }
            button {
              border-radius: 10px;
            }
        </style>
        <h2>Input Data Buku</h2>
        <br>
        <form method='POST' action='aksi_buku_input.php' enctype='multipart/form-data'>
            <table border='0' width='100%' cellspacing='5' cellpadding='5'>
                <tr><td>Buku ISBN</td><td><input type='text' name='buku_ISBN' size='10'></td></tr>
                <tr><td>Judul Buku</td><td><input type='text' name='buku_judul' size='50'></td></tr>
                <tr><td>Penerbit</td><td><input type='text' name='penerbit_id'></td></tr>
                <tr><td>Tanggal Terbit</td><td><input type='date' name='buku_tglterbit'></td></tr>
                <tr><td>Jumlah Halaman</td><td><input type='number' name='buku_jmlhalaman'></td></tr>
                <tr><td>Deskripsi Buku</td><td><textarea name='buku_deskripsi'></textarea></td></tr>
                <tr><td>Harga Buku</td><td><input type='number' step='0.01' name='buku_harga'></td></tr>
                <tr>
                    <td colspan='2'>
                        <input type='submit' value='Simpan'>
                        <input type='reset' value='Batal'>
                    </td>
                </tr>
            </table>
            <br>
            <br>
            <button>
                <a href='../buku/daftar_buku.php'> Daftar Buku </a>
            </button>
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
