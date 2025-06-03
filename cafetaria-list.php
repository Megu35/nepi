<section id="List" class="py-5">
  <div class="container">
    <h2 class="text-center text-primary fw-bold mb-5">Daftar Menu</h2>
    <div class="row g-4">

      <!-- Batagor -->
      <div class="col-md-6">
        <div class="card shadow-lg border-0 rounded-4 overflow-hidden">
          <img src="php/img/batagor.jpg" class="card-img-top img-fluid" alt="Batagor Celink">
          <div class="card-body">
            <h5 class="card-title fw-semibold">Batagor Celink</h5>
            <p class="card-text text-muted">Deskripsi singkat mengenai batagor di kantin kami.</p>
            <a href="#mesen" class="btn btn-info rounded-pill px-4">Lihat Menu</a>
          </div>
        </div>
      </div>

      <!-- Katsu -->
      <div class="col-md-6">
        <div class="card shadow-lg border-0 rounded-4 overflow-hidden">
          <img src="php/img/katsu.jpg" class="card-img-top img-fluid" alt="Katsu Mama El">
          <div class="card-body">
            <h5 class="card-title fw-semibold">Katsu Mama El</h5>
            <p class="card-text text-muted">Deskripsi singkat mengenai Katsu di kantin kami.</p>
            <a href="#mesen" class="btn btn-info rounded-pill px-4">Lihat Menu</a>
          </div>
        </div>
      </div>

      <!-- Ayam Bakar -->
      <div class="col-md-6">
        <div class="card shadow-lg border-0 rounded-4 overflow-hidden">
          <img src="php/img/ayam bakar.jpg" class="card-img-top img-fluid" alt="Ayam Bakar Mama Sabrina">
          <div class="card-body">
            <h5 class="card-title fw-semibold">Ayam Bakar Mama Sabrina</h5>
            <p class="card-text text-muted">Deskripsi singkat mengenai Ayam Bakar di kantin kami.</p>
            <a href="#mesen" class="btn btn-info rounded-pill px-4">Lihat Menu</a>
          </div>
        </div>
      </div>

      <!-- Es Rafatar -->
      <div class="col-md-6">
        <div class="card shadow-lg border-0 rounded-4 overflow-hidden">
          <img src="php/img/es.jpg">
          <div class="card-body">
            <h5 class="card-title fw-semibold">Es Rafatar</h5>
            <p class="card-text text-muted">Deskripsi singkat mengenai Es di kantin kami.</p>
            <a href="#mesen" class="btn btn-info rounded-pill px-4">Lihat Menu</a>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>

 <style>
      .btn-circle {
        width: 36px;
        height: 36px;
        padding: 0;
        border-radius: 50%;
        text-align: center;
        font-size: 1.2rem;
        line-height: 1.5;
      }

      .add-btn {
        position: absolute;
        bottom: 10px;
        right: 10px;
      }

      .card-wrapper {
        position: relative;
      }
    </style>
  </head>
  <body>
    <section id="mesen">
    <div class="container py-5">
      <h2 class="text-center mb-4">Menu Batagor Celink</h2>
      <div class="row g-4">
        <!-- Menu Batagor -->
        <div class="col-md-6 col-lg-4">
          <div class="card h-100 card-wrapper">
            <div class="card-body">
              <h5 class="card-title">Batagor Biasa</h5>
              <p class="card-text">Batagor isi tahu, kembang kol dan kentang</p>
              <span class="badge bg-success">Rp 5.000</span>
            </div>
            <button class="btn btn-success btn-circle add-btn" onclick="addToCart('Batagor Biasa', 5000)"><i class="bi bi-plus"></i></button>
          </div>
        </div>

        <div class="col-md-6 col-lg-4">
          <div class="card h-100 card-wrapper">
            <div class="card-body">
              <h5 class="card-title">Batagor Sedang</h5>
              <p class="card-text">Batagor isi tahu, kembang kol dan kentang dengan porsi yang sedikit lebih besar</p>
              <span class="badge bg-success">Rp 10.000</span>
            </div>
            <button class="btn btn-success btn-circle add-btn" onclick="addToCart('Batagor Sedang', 10000)"><i class="bi bi-plus"></i></button>
          </div>
        </div>

        <div class="col-md-6 col-lg-4">
          <div class="card h-100 card-wrapper">
            <div class="card-body">
              <h5 class="card-title">Batagor Jumbo</h5>
              <p class="card-text">Batagor isi tahu, kembang kol dan kentang dengan porsi lebih besar dari sedang</p>
              <span class="badge bg-success">Rp 15.000</span>
            </div>
            <button class="btn btn-success btn-circle add-btn" onclick="addToCart('Batagor Jumbo', 15000)"><i class="bi bi-plus"></i></button>
          </div>
        </div>
      </div>
    </div>

    <div class="container py-5">
      <h2 class="text-center mb-4">Menu Katsu Mama El</h2>
      <div class="row g-4">
        <div class="col-md-6 col-lg-4">
          <div class="card h-100 card-wrapper">
            <div class="card-body">
              <h5 class="card-title">Katsu Saja</h5>
              <p class="card-text">Isinya hanya katsu</p>
              <span class="badge bg-success">Rp 10.000</span>
            </div>
            <button class="btn btn-success btn-circle add-btn" onclick="addToCart('Katsu Saja', 10000)"><i class="bi bi-plus"></i></button>
          </div>
        </div>

        <div class="col-md-6 col-lg-4">
          <div class="card h-100 card-wrapper">
            <div class="card-body">
              <h5 class="card-title">Katsu + Nasi</h5>
              <p class="card-text">Katsu ditambah dengan nasi</p>
              <span class="badge bg-success">Rp 15.000</span>
            </div>
            <button class="btn btn-success btn-circle add-btn" onclick="addToCart('Katsu + Nasi', 15000)"><i class="bi bi-plus"></i></button>
          </div>
        </div>
      </div>
    </div>

    <div class="container py-5">
      <h2 class="text-center mb-4">Menu Ayam Bakar Mama Sabrina</h2>
      <div class="row g-4">
        <div class="col-md-6 col-lg-4">
          <div class="card h-100 card-wrapper">
            <div class="card-body">
              <h5 class="card-title">Ayam Bakar</h5>
              <p class="card-text">Hanya berisi ayam bakar</p>
              <span class="badge bg-success">Rp 15.000</span>
            </div>
            <button class="btn btn-success btn-circle add-btn" onclick="addToCart('Ayam Bakar', 15000)"><i class="bi bi-plus"></i></button>
          </div>
        </div>

        <div class="col-md-6 col-lg-4">
          <div class="card h-100 card-wrapper">
            <div class="card-body">
              <h5 class="card-title">Ayam Bakar + Nasi</h5>
              <p class="card-text">Ayam bakar dengan nasi</p>
              <span class="badge bg-success">Rp 20.000</span>
            </div>
            <button class="btn btn-success btn-circle add-btn" onclick="addToCart('Ayam Bakar + Nasi', 20000)"><i class="bi bi-plus"></i></button>
          </div>
        </div>
      </div>
    </div>

    <div class="container py-5">
      <h2 class="text-center mb-4">Es Rafatar</h2>
      <div class="row g-4">
        <div class="col-md-6 col-lg-4">
          <div class="card h-100 card-wrapper">
            <div class="card-body">
              <h5 class="card-title">Aneka Pop Ice</h5>
              <p class="card-text">Semua rasa pop ice</p>
              <span class="badge bg-success">Rp 5.000</span>
            </div>
            <button class="btn btn-success btn-circle add-btn" onclick="addToCart('Aneka Pop Ice', 5000)"><i class="bi bi-plus"></i></button>
          </div>
        </div>

        <div class="col-md-6 col-lg-4">
          <div class="card h-100 card-wrapper">
            <div class="card-body">
              <h5 class="card-title">Jus Buah</h5>
              <p class="card-text">Aneka Jus Buah dengan berbagai buah alami</p>
              <span class="badge bg-success">Rp 15.000</span>
            </div>
            <button class="btn btn-success btn-circle add-btn" onclick="addToCart('Jus Buah', 15000)"><i class="bi bi-plus"></i></button>
          </div>
        </div>

        <div class="col-md-6 col-lg-4">
          <div class="card h-100 card-wrapper">
            <div class="card-body">
              <h5 class="card-title">Capcin</h5>
              <p class="card-text">Cappuccino dengan cincau</p>
              <span class="badge bg-success">Rp 5.000</span>
            </div>
            <button class="btn btn-success btn-circle add-btn" onclick="addToCart('Capcin', 5000)"><i class="bi bi-plus"></i></button>
          </div>
        </div>

        <div class="col-md-6 col-lg-4">
          <div class="card h-100 card-wrapper">
            <div class="card-body">
              <h5 class="card-title">Es Teh</h5>
              <p class="card-text">Es dengan teh</p>
              <span class="badge bg-success">Rp 3.000</span>
            </div>
            <button class="btn btn-success btn-circle add-btn" onclick="addToCart('Es Teh', 3000)"><i class="bi bi-plus"></i></button>
          </div>
        </div>

        <div class="col-md-6 col-lg-4">
          <div class="card h-100 card-wrapper">
            <div class="card-body">
              <h5 class="card-title">Minuman Sode</h5>
              <p class="card-text">Aneka minuman soda</p>
              <span class="badge bg-success">Rp 7.000</span>
            </div>
            <button class="btn btn-success btn-circle add-btn" onclick="addToCart('Minuman Sode', 7000)"><i class="bi bi-plus"></i></button>
          </div>
        </div>

        <div class="col-md-6 col-lg-4">
          <div class="card h-100 card-wrapper">
            <div class="card-body">
              <h5 class="card-title">Susu Kemasan</h5>
              <p class="card-text">Aneka rasa susu kemasan</p>
              <span class="badge bg-success">Rp 7.000</span>
            </div>
            <button class="btn btn-success btn-circle add-btn" onclick="addToCart('Susu Kemasan', 7000)"><i class="bi bi-plus"></i></button>
          </div>
        </div>
      </div>

<?php
// Tangani saat tombol tambah ditekan
if (isset($_POST['add_to_cart'])) {
    $item = $_POST['item'];
    $price = $_POST['price'];
    echo "<div class='alert alert-success text-center'>$item (Rp $price) berhasil ditambahkan ke keranjang.</div>";
}
?>


<!-- Bootstrap Script -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</>
</html>
