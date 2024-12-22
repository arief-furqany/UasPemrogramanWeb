<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Daftar Kategori</title>
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
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
                <a class="nav-link" href="../crud/kategori_input.php">Tambah Kategori</a>
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
echo "
<style>
    body {
        color: white;
    }

    table, th, td {
        border: 2px solid white;
        color: white;
    }

    a {
        color: white;
        text-decoration: none;
    }
    a:hover {
      color: blue;
      text-decoration: underline;
    }
    th {
      text-align: center;
    }
</style>
<h2>Kategori</h2>
<br>
<table border=1 width=100% cellspacing=0 cellpadding=8>
<br>
<tr>
    <th>Kategori ID</th><th>Nama Kategori</th><th>Action</th>
</tr>";

$tampil=mysqli_query($koneksi,"SELECT * FROM kategori");
while ($r=mysqli_fetch_array($tampil)){
    echo "
    <tr>
    <td align='center'>$r[kategori_id]</td>
    <td>$r[kategori_nama]</td>
    <td align='center'>
    <a href='../crud/kategori_edit.php?id=$r[kategori_id]'>Edit</a> &nbsp;
    <a href='../crud/aksi_kategori_delete.php?id=$r[kategori_id]'>Delete</a>
    </td>
    </tr>";
}

echo "</table>";
echo "<br>
<form method='POST' action='../crud/kategori_cari.php'>
    Kata pencarian: <input type='text' name='keyword'>
    <input type='submit' value='Cari'>
</form>";

?>
<br>
<br>
<br>
        </section>
        <div class="footer">
        <div class="footer-row">
            <div class="footer-content">
                <h4>Info</h4>
                <ul class="links">
                    <li><a href="#">About</a></li>
                    <li><a href="#">Project</a></li>
                    <li><a href="#">Portovolio</a></li>
                    <li><a href="#">Service</a></li>
                    <li><a href="#">Contact</a></li>
                </ul>
            </div>
            <div class="footer-content">
                <h4>Konten</h4>
                <ul class="links">
                    <li><a href="#">Ebook Gratis</a></li>
                    <li><a href="#">Blog</a></li>
                    <li><a href="#">Cara Pembayaran</a></li>
                    <li><a href="#">Pelatihan Gratis</a></li>
                    <li><a href="#">tema</a></li>
                </ul>
            </div>
            <div class="footer-content">
                <h4>Tentang Kami</h4>
                <ul class="links">
                    <li><a href="#">Tentang</a></li>
                    <li><a href="#">Penawaran & Promo Special</a></li>
                    <li><a href="#">Karir</a></li>
                    <li><a href="#">Security</a></li>
                    <li><a href="#">Kontak Kami</a></li>
                    <li><a href="#">Help</a></li>
                </ul>
            </div>
            <div class="footer-content">
                <h4>Newsletter</h4>
                <p>Jangan lupa untuk selalu berkomentar agar kami selalu
                    melakukan yang terbaik untuk website ini.
                </p>
                <form action="#">
                    <input type="text" placeholder="Masukkan Email..." required>
                    <button type="submit">KOMENTAR</button>
                </form>
                <div class="icon">
                    <i class="fab fa-facebook-f"></i>
                    <i class="fab fa-twitter"></i>
                    <i class="fab fa-linkedin"></i>
                    <i class="fab fa-github"></i>
                </div>
            </div>

        </div>
        </div>
      </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
