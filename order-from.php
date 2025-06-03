<?php 
include 'db.php'; 
?>

  <!--Batagor Celink-->
  <style>
  .menu-card {
    border: 1px solid #ddd;
    border-radius: 5px;
    padding: 10px 15px;
    margin-bottom: 12px;
  }
  .menu-row {
    display: flex;
    justify-content: space-between;
    align-items: center;
  }
  .menu-label {
    flex: 0 0 85%; 
  }
  .qty-input {
    flex: 0 0 12%; 
    max-width: 60px;
  }
  .menu-section {
    margin-bottom: 30px;
  }
  .menu-section h2 {
    margin-bottom: 20px;
    border-bottom: 2px solid #007bff;
    padding-bottom: 5px;
  }
</style>

<div class="container mt-5">
  <h2 class="text-center mb-4">Pesen Makanan & Minuman</h2>
  <form id="formOrder">
    <div class="row"></div>
  <br>
<form id="formOrder">
  <!-- Menu Batagor -->
  <div class="menu-section">
    <h2>Batagor</h2>

    <div class="menu-card">
      <div class="menu-row">
        <label>
          <input type="checkbox" class="form-check-input menu-item" data-harga="10000" data-stok="10">
          Batagor Biasa - Stok: <span class="stok">10</span>
        </label>
        <input type="number" class="form-control form-control-sm qty-input" value="1" min="1" disabled>
      </div>
    </div>

    <div class="menu-card">
      <div class="menu-row">
        <label>
          <input type="checkbox" class="form-check-input menu-item" data-harga="8000" data-stok="4">
          Batagor Sedang - Stok: <span class="stok">4</span>
        </label>
        <input type="number" class="form-control form-control-sm qty-input" value="1" min="1" disabled>
      </div>
    </div>

    <div class="menu-card">
      <div class="menu-row">
        <label>
          <input type="checkbox" class="form-check-input menu-item" data-harga="5000" data-stok="6">
          Batagor Jumbo - Stok: <span class="stok">6</span>
        </label>
        <input type="number" class="form-control form-control-sm qty-input" value="1" min="1" disabled>
      </div>
    </div>
  </div>

  <!-- Menu Katsu -->
  <div class="menu-section">
    <h2>Katsu</h2>

    <div class="menu-card">
      <div class="menu-row">
        <label>
          <input type="checkbox" class="form-check-input menu-item" data-harga="10000" data-stok="5">
          Katsu Aja - Stok: <span class="stok">5</span>
        </label>
        <input type="number" class="form-control form-control-sm qty-input" value="1" min="1" disabled>
      </div>
    </div>

    <div class="menu-card">
      <div class="menu-row">
        <label>
          <input type="checkbox" class="form-check-input menu-item" data-harga="1" data-stok="4">
          Katsu + Nasi - Stok: <span class="stok">4</span>
        </label>
        <input type="number" class="form-control form-control-sm qty-input" value="1" min="1" disabled>
      </div>
    </div>
  </div>

  <!-- Menu Ayam Bakar -->
  <div class="menu-section">
    <h2>Ayam Bakar</h2>

    <div class="menu-card">
      <div class="menu-row">
        <label>
          <input type="checkbox" class="form-check-input menu-item" data-harga="15000" data-stok="5">
          Ayam Bakar - Stok: <span class="stok">5</span>
        </label>
        <input type="number" class="form-control form-control-sm qty-input" value="1" min="1" disabled>
      </div>
    </div>

    <div class="menu-card">
      <div class="menu-row">
        <label>
          <input type="checkbox" class="form-check-input menu-item" data-harga="20000" data-stok="4">
          Ayam Bakar + Nasi - Stok: <span class="stok">4</span>
        </label>
        <input type="number" class="form-control form-control-sm qty-input" value="1" min="1" disabled>
      </div>
    </div>
  </div>

  <!-- Menu Minuman -->
  <div class="menu-section">
    <h2>Pesen Minuman</h2>

    <div class="menu-card">
      <div class="menu-row">
        <label>
          <input type="checkbox" class="form-check-input menu-item" data-harga="5000" data-stok="5">
          Aneka Pop Ice - Stok: <span class="stok">5</span>
        </label>
        <input type="number" class="form-control form-control-sm qty-input" value="1" min="1" disabled>
      </div>
    </div>

    <div class="menu-card">
      <div class="menu-row">
        <label>
          <input type="checkbox" class="form-check-input menu-item" data-harga="5000" data-stok="4">
          Jus Buah - Stok: <span class="stok">4</span>
        </label>
        <input type="number" class="form-control form-control-sm qty-input" value="1" min="1" disabled>
      </div>
    </div>

    <div class="menu-card">
      <div class="menu-row">
        <label>
          <input type="checkbox" class="form-check-input menu-item" data-harga="5000" data-stok="5">
          Capcin - Stok: <span class="stok">5</span>
        </label>
        <input type="number" class="form-control form-control-sm qty-input" value="1" min="1" disabled>
      </div>
    </div>

    <div class="menu-card">
      <div class="menu-row">
        <label>
          <input type="checkbox" class="form-check-input menu-item" data-harga="3000" data-stok="4">
          Es Teh - Stok: <span class="stok">4</span>
        </label>
        <input type="number" class="form-control form-control-sm qty-input" value="1" min="1" disabled>
      </div>
    </div>

    <div class="menu-card">
      <div class="menu-row">
        <label>
          <input type="checkbox" class="form-check-input menu-item" data-harga="7000" data-stok="5">
          Minuman Sode - Stok: <span class="stok">5</span>
        </label>
        <input type="number" class="form-control form-control-sm qty-input" value="1" min="1" disabled>
      </div>
    </div>

    <div class="menu-card">
      <div class="menu-row">
        <label>
          <input type="checkbox" class="form-check-input menu-item" data-harga="7000" data-stok="4">
          Susu Kemasan - Stok: <span class="stok">4</span>
        </label>
        <input type="number" class="form-control form-control-sm qty-input" value="1" min="1" disabled>
      </div>
    </div>
  </div>

  <hr>
  <h4>Total Harga: <span id="totalHarga">Rp0</span></h4>
  <button type="button" class="btn btn-primary mt-3" onclick="tampilkanQR()">Bayar Sekarang</button>
</form>

  <div class="qr-box" id="qrBox" style="display: none;">
    <h5>Scan QR Code Ini Untuk Membayar</h5>
    <img src="https://media.istockphoto.com/id/1347277567/vector/qr-code-sample-for-smartphone-scanning-on-white-background.jpg?s=612x612&w=0&k=20&c=PYhWHZ7bMECGZ1fZzi_-is0rp4ZQ7abxbdH_fm8SP7Q=" alt="QR Code">
  </div>
</div>
<br>

<script>
  const items = document.querySelectorAll('.menu-item');
  const totalEl = document.getElementById('totalHarga');
  const qrBox = document.getElementById('qrBox');

  items.forEach(item => {
    const qtyInput = item.closest('.menu-card').querySelector('.qty-input');

    item.addEventListener('change', () => {
      qtyInput.disabled = !item.checked;
      hitungTotal();
    });

    qtyInput.addEventListener('input', hitungTotal);
  });

  function hitungTotal() {
    let total = 0;
    items.forEach(item => {
      const qtyInput = item.closest('.menu-card').querySelector('.qty-input');
      if (item.checked) {
        const harga = parseInt(item.dataset.harga);
        const qty = parseInt(qtyInput.value) || 0;
        total += harga * qty;
      }
    });
    totalEl.textContent = 'Rp' + total.toLocaleString('id-ID');
  }

  function tampilkanQR() {
    let valid = true;

    items.forEach(item => {
      if (item.checked) {
        const qtyInput = item.closest('.menu-card').querySelector('.qty-input');
        const stokEl = item.closest('.menu-card').querySelector('.stok');

        const stok = parseInt(item.dataset.stok);
        const qty = parseInt(qtyInput.value);

        if (qty > stok) {
          alert("Stok tidak cukup untuk: " + item.parentElement.textContent.trim());
          valid = false;
        }
      }
    });

    if (!valid) return;

    items.forEach(item => {
      if (item.checked) {
        const qtyInput = item.closest('.menu-card').querySelector('.qty-input');
        const stokEl = item.closest('.menu-card').querySelector('.stok');

        let stok = parseInt(item.dataset.stok);
        const qty = parseInt(qtyInput.value);

        stok -= qty;
        item.dataset.stok = stok;
        stokEl.textContent = stok;

        // Reset input
        qtyInput.value = 1;
        item.checked = false;
        qtyInput.disabled = true;
      }
    });

    hitungTotal();
    qrBox.style.display = 'block';
  }
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>