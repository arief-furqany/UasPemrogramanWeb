<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Harald School</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="../css/back.css">
    <link rel="icon" href="../img/lambang.png">
</head>
<body class="body-home">
    <div class="black-fill"><br /> <br />
        <div class="container">
        <nav class="navbar navbar-expand-lg bg-light"
             id="homeNav">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="../img/lambang.png" width="50">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Home</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="#about">About</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="#contact">Contact</a>
                </li>
            </ul>
            <ul class="navbar-nav me-right mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" href="../team/index.php">Team</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="logout.php">Logout</a>
                </li>
            </ul>
            </div>
        </div>
        </nav>
        <section class="welcome-text d-flex justify-content-center align-items-center flex-column">
            <img src="../img/lambang.png" width="150px" >
            <h4>Welcome to Harald School</h4>
            <p>Ancaman nyata sebenarnya bukan pada saat komputer mulai bisa berpikir seperti manusia, tetapi ketika manusia mulai berpikir seperti komputer.</p>
        </section>
        <section id="about"
            class="d-flex justify-content-center align-items-center flex-column">
            <div class="card mb-3 card-1">
            <div class="row g-0">
                <div class="col-md-4">
                <img src="../img/lambang.png" height="50px" class="img-fluid rounded-start" >
                </div>
                <div class="col-md-8">
                <div class="card-body">
                    <h5 class="card-title">About Us</h5>
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    <p class="card-text"><small class="text-muted">Harald School</small></p>
                </div>
                </div>
            </div>
            </div>
        </section>
        <section id="contact"
            class="d-flex justify-content-center align-items-center flex-column">
            <form>
                <h3>Contact Us</h3>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email address</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                </div>
                <div class="mb-3">
                    <label class="form-label">Nama</label>
                    <input type="text" class="form-control">
                </div>
                <div class="mb-3">
                    <label class="form-label">Deskripsi</label>
                    <textarea class="form-control" rows="4"></textarea>
                </div>
                <button type="submit" class="btn btn-warning">Send</button>
                </form>
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