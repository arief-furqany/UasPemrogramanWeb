<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style_login.css">
    <title>Document</title>
</head>
<body>
<div class="black-fill">
    <section>
      <form method="post" action="cek_login.php">
        <div class="form-box">
            <div class="form-value">
                <h2>Login</h2>
                <br>
                <br>
               
            <?php
              if(isset($_GET['pesan'])) {
                if($_GET['pesan'] == "gagal") {
                echo "<center><p style='color: red;'>Login gagal! Username dan password salah!</p></center>";
                } else if($_GET['pesan'] == "logout") {
                echo "<center><p style='color: gray;'>Anda telah berhasil logout</p></center>";  
                } else if($_GET['pesan'] == "belum_login") {
                  echo "<center><p style='color: white;'>Anda harus login untuk mengakses halaman admin</p></center>";
                }
              }
            ?>
                <div class="inputbox">
                    <ion-icon name="person-outline"></ion-icon>
                    <input type="text" name="username" required>
                    <label for="">Username</label>
                </div>
                <div class="inputbox">
                    <ion-icon name="lock-closed-outline"></ion-icon>
                    <input type="password" name="password" required>
                    <label for="">Password</label>
                </div>
                <button>Log in</button>
                <br>
                <br>
                <div class="home">
                  <p>Kembali ke <a href="../index.php">Home</a></p>
                </div> 
            </div>
        </div>
      </form>
    </section>
    </div>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>
</html>