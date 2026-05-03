<?php
// ========== İLETİŞİM FORMU İŞLEME ==========
// Form POST ile gönderilmediyse ana sayfaya yönlendir
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: iletisim.html');
    exit;
}

// Gelen verileri al ve temizle
$adSoyad          = htmlspecialchars(trim($_POST['adSoyad'] ?? ''));
$email            = htmlspecialchars(trim($_POST['email'] ?? ''));
$telefon          = htmlspecialchars(trim($_POST['telefon'] ?? ''));
$konu             = htmlspecialchars(trim($_POST['konu'] ?? ''));
$iletisimTercihi  = htmlspecialchars(trim($_POST['iletisimTercihi'] ?? ''));
$mesaj            = htmlspecialchars(trim($_POST['mesaj'] ?? ''));
$kvkk             = isset($_POST['kvkk']) ? 'Onaylandı' : 'Onaylanmadı';
?>
<!DOCTYPE html>
<html lang="tr">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Form Sonucu | Kişisel Web Sitem</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="css/style.css" />
</head>
<body>

  <!-- ========== NAVBAR ========== -->
  <nav class="navbar navbar-expand-lg sticky-top">
    <div class="container">
      <a class="navbar-brand" href="index.html">&#9670; Hilal Karamanlı</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navMenu">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navMenu">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item"><a class="nav-link" href="index.html">Hakkımda</a></li>
          <li class="nav-item"><a class="nav-link" href="cv.html">CV</a></li>
          <li class="nav-item"><a class="nav-link" href="sehrim.html">Şehrim</a></li>
          <li class="nav-item"><a class="nav-link" href="miras.html">Mirasımız</a></li>
          <li class="nav-item"><a class="nav-link" href="ilgi.html">İlgi Alanlarım</a></li>
          <li class="nav-item"><a class="nav-link active" href="iletisim.html">İletişim</a></li>
          <li class="nav-item"><a class="nav-link" href="login.html">Giriş</a></li>
        </ul>
      </div>
    </div>
  </nav>

  <main class="container py-5">
    <div class="row justify-content-center">
      <div class="col-lg-7">

        <div class="kart text-center mb-4" style="padding:2rem;">
          <div style="font-size:3rem; margin-bottom:1rem;">✅</div>
          <h2 style="font-family:var(--font-baslik); color:var(--renk-lacivert);">Form Başarıyla Gönderildi!</h2>
          <p style="color:#666;">Gönderdiğiniz bilgiler aşağıda listelenmiştir.</p>
        </div>

        <div class="kart">
          <h4 style="font-family:var(--font-baslik); color:var(--renk-lacivert); margin-bottom:1.5rem;">Gönderilen Bilgiler</h4>
          <table class="table table-borderless" style="font-size:0.95rem;">
            <tbody>
              <tr>
                <td style="color:var(--renk-vurgu); font-weight:600; width:40%;">Ad Soyad</td>
                <td><?php echo $adSoyad; ?></td>
              </tr>
              <tr>
                <td style="color:var(--renk-vurgu); font-weight:600;">E-posta</td>
                <td><?php echo $email; ?></td>
              </tr>
              <tr>
                <td style="color:var(--renk-vurgu); font-weight:600;">Telefon</td>
                <td><?php echo $telefon; ?></td>
              </tr>
              <tr>
                <td style="color:var(--renk-vurgu); font-weight:600;">Konu</td>
                <td><?php echo $konu; ?></td>
              </tr>
              <tr>
                <td style="color:var(--renk-vurgu); font-weight:600;">İletişim Tercihi</td>
                <td><?php echo $iletisimTercihi; ?></td>
              </tr>
              <tr>
                <td style="color:var(--renk-vurgu); font-weight:600;">Mesaj</td>
                <td><?php echo $mesaj; ?></td>
              </tr>
              <tr>
                <td style="color:var(--renk-vurgu); font-weight:600;">KVKK Onayı</td>
                <td><?php echo $kvkk; ?></td>
              </tr>
            </tbody>
          </table>

          <div class="mt-4 text-center">
            <a href="iletisim.html" class="btn-ana">← Forma Geri Dön</a>
          </div>
        </div>

      </div>
    </div>
  </main>

  <!-- ========== FOOTER ========== -->
  <footer>
    <div class="container">
      <div class="row g-4">
        <div class="col-md-4">
          <h6>Hilal Karamanlı</h6>
          <p>Sakarya Üniversitesi<br>Bilgisayar Mühendisliği</p>
        </div>
        <div class="col-md-4">
          <h6>Hızlı Bağlantılar</h6>
          <ul class="list-unstyled">
            <li><a href="index.html">Hakkımda</a></li>
            <li><a href="sehrim.html">Şehrim - Ordu</a></li>
            <li><a href="iletisim.html">İletişim</a></li>
          </ul>
        </div>
        <div class="col-md-4">
          <h6>İletişim</h6>
          <p>b25121XXXXX@sakarya.edu.tr</p>
        </div>
      </div>
      <div class="footer-alt">
        © 2026 Hilal Karamanlı — Web Teknolojileri Proje Ödevi
      </div>
    </div>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>