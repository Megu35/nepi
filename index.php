<?php
// index.php
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Kantin SMK Telkom Jakarta</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet" />
  <link rel="stylesheet" href="style.css" />
  <script src="buy.js"></script>
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg bg-dark shadow p-3 mb-5 bg-body-tertiary rounded">
  <div class="container">
    <a class="navbar-brand" href="#">
      <img src="data:image/png;base64,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" alt="Bootstrap" width="70" height="45" />
    </a>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item"><a class="nav-link active" href="#About">About Kantin</a></li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#List" data-bs-toggle="dropdown">Cafetaria List</a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#List">Batagor Celink</a></li>
            <li><a class="dropdown-item" href="#List">Katsu Mama El</a></li>
            <li><a class="dropdown-item" href="#List">Ayam Bakar Mama Sabrina</a></li>
            <li><a class="dropdown-item" href="#List">Es Rafatar</a></li>
          </ul>
        </li>
        <li class="nav-item"><a class="nav-link" href="#mesen">How to Buy</a></li>
        <li class="nav-item"><a class="nav-link" href="#">Contact Us</a></li>
      </ul>
    </div>
  </div>
</nav>


<!-- About Section -->
   <section id="About" class="mt-5">
      <div class="container py-5">
        <div class="row align-items-center">
          <!-- Kolom kiri: gambar + video -->
          <div class="col-md-6 position-relative">
            <img src="img/bagian belakang.jpg" class="img-fluid" alt="Gambar Latar" />
            <iframe
              width="60%"
              height="250"
              src="https://www.youtube.com/embed/YOUTUBE_VIDEO_ID"
              title="YouTube video player"
              frameborder="0"
              allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
              allowfullscreen
              style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); max-width: 90%; box-shadow: 0 0 15px rgba(0, 0, 0, 0.3); border-radius: 10px"
            >
            </iframe>
          </div>

          <!-- Kolom kanan: logo atas, judul tengah, teks bawah -->
          <div class="col-md-6 text-center">
            <img src="img/LOGO-SMK-TELKOM-JAKARTA-OK.png" alt="Logo Tambahan" width="100" class="mb-3" />
            <h4 class="mb-3">Deskripsi Kantin Kami</h4>
            <p class="lead px-3">Selamat datang di Kantin Digital! Temukan kantin favorit, jelajahi menu khas, dan nikmati kemudahan bertransaksi hanya di ujung jari Anda.</p>
          </div>
        </div>
      </div>
    </section>

<!-- Cafetaria List -->
<?php include 'cafetaria-list.php'; ?>

<!-- Menu List -->
<?php include 'order-from.php'; ?>
<?php include 'contact.php'; ?>


    <!-- Footer  -->
    <footer class="bg-dark text-white py-4 mt-5">
        <div class="container text-center">
            <p>&copy; 2025 Kantin SMK Telkom Jakarta</p>
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/script.js"></script>
</body>
</html>
<!-- JS -->
<script>
  function addToCart(item, price) {
    alert(`Ditambahkan: ${item} - Rp ${price}`);
  }
</script>
    <!-- Bootstrap Script -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
</body>
</html>
