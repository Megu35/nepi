// Fungsi untuk menambahkan item ke keranjang
function addToCart(productName, price) {
  // 1. Kirim data ke server untuk disimpan ke database
  saveToDatabase(productName, price);

  // 2. Update tampilan keranjang
  updateCartDisplay(productName, price);

  // 3. Hitung ulang total
  calculateTotal();
}

// Fungsi untuk menyimpan ke database (menggunakan AJAX)
function saveToDatabase(productName, price) {
  fetch('save_to_cart.php', {
    method: 'POST',
    headers: {
      'Content-Type': 'application/json',
    },
    body: JSON.stringify({
      product_name: productName,
      price: price,
      quantity: 1,
    }),
  })
    .then((response) => response.json())
    .then((data) => {
      if (!data.success) {
        console.error('Gagal menyimpan ke database:', data.message);
      }
    })
    .catch((error) => {
      console.error('Error:', error);
    });
}

// Fungsi untuk update tampilan keranjang
function updateCartDisplay(productName, price) {
  const cartItems = document.getElementById('cart-items');
  const itemElement = document.createElement('div');
  itemElement.className = 'cart-item';
  itemElement.innerHTML = `
        <span class="product-name">${productName}</span>
        <span class="product-price">Rp ${price.toLocaleString()}</span>
        <span class="product-quantity">1</span>
    `;
  cartItems.appendChild(itemElement);
}

// Fungsi untuk menghitung total
function calculateTotal() {
  fetch('get_cart_total.php')
    .then((response) => response.json())
    .then((data) => {
      if (data.success) {
        document.getElementById('total-amount').textContent = data.total.toLocaleString();
      }
    })
    .catch((error) => {
      console.error('Error:', error);
    });
}
