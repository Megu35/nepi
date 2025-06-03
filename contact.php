    <style>
      body {
        background: linear-gradient(to bottom, #ffffff, #f1f1f1);
        min-height: 100vh;
        display: flex;
        flex-direction: column;
      }

      .contact-section {
        flex: 1;
        display: flex;
        align-items: center;
        justify-content: center;
      }

      .contact-card {
        background-color: white;
        border-radius: 20px;
        box-shadow: 0 15px 40px rgba(0, 0, 0, 0.1);
        padding: 2rem;
        width: 100%;
        max-width: 600px;
      }

      .form-control,
      .input-group-text {
        border-radius: 10px;
      }

      .btn-primary {
        border-radius: 50px;
        padding-left: 2rem;
        padding-right: 2rem;
        box-shadow: 0 8px 20px rgba(13, 110, 253, 0.3);
        transition: 0.3s;
      }

      .btn-primary:hover {
        background-color: #0056d2;
      }

      h2 {
        font-weight: bold;
        color: #0d6efd;
      }
    </style>
  </head>
  <body>
    <section>
<div class="contact-section py-5">
      <div class="contact-card">
        <h2 class="text-center mb-4">Hubungi Kami</h2>
        <form action="process_contact.php" method="POST">
          <div class="mb-3">
            <label for="name" class="form-label">Nama Lengkap</label>
            <div class="input-group">
              <span class="input-group-text"><i class="bi bi-person-fill"></i></span>
              <input type="text" class="form-control" id="name" name="name" required />
            </div>
          </div>
          <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <div class="input-group">
              <span class="input-group-text"><i class="bi bi-envelope-fill"></i></span>
              <input type="email" class="form-control" id="email" name="email" required />
            </div>
          </div>
          <div class="mb-4">
            <label for="message" class="form-label">Pesan/Kritik/Saran</label>
            <div class="input-group">
              <span class="input-group-text"><i class="bi bi-chat-dots-fill"></i></span>
              <textarea class="form-control" id="message" name="message" rows="5" required></textarea>
            </div>
          </div>
          <div class="text-center">
            <button type="submit" class="btn btn-primary">Kirim Pesan</button>
          </div>
        </form>
      </div>
    </section>      
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"></script>
  </body>
  </html>
  </div>
</html>
