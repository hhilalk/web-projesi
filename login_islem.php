<?php
// ========== LOGIN DOĞRULAMA ==========

$dogru_kullanici = 'b251210057@sakarya.edu.tr';
$dogru_sifre     = 'b251210057';

// POST ile gönderilmediyse login'e yönlendir
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: login.html');
    exit;
}

$kullanici = trim($_POST['kullanici'] ?? '');
$sifre     = trim($_POST['sifre'] ?? '');

// Boş alan kontrolü
if (empty($kullanici) || empty($sifre)) {
    header('Location: login.html?hata=' . urlencode('Kullanıcı adı ve şifre boş bırakılamaz.'));
    exit;
}

// Bilgileri karşılaştır
if ($kullanici === $dogru_kullanici && $sifre === $dogru_sifre) {
    // Başarılı giriş
    $ogrenci_no = explode('@', $kullanici)[0];
?>
<!DOCTYPE html>
<html lang="tr">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Hoşgeldiniz | Kişisel Web Sitem</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="css/style.css" />
</head>
<body>

  <nav class="navbar navbar-expand-lg sticky-top">
    <div class="container">
      <a class="navbar-brand" href="index.html">&#9670; Hilal Karamanlı</a>
    </div>
  </nav>

  <main class="container py-5">
    <div class="row justify-content-center">
      <div class="col-md-6 text-center">
        <div class="kart">
          <div style="font-size:4rem; margin-bottom:1rem;">✅</div>
          <h2 style="font-family:var(--font-baslik); color:var(--renk-lacivert);">
            Hoşgeldiniz <?php echo htmlspecialchars($ogrenci_no); ?>
          </h2>
          <p style="color:#666; margin-top:1rem;">Başarıyla giriş yaptınız.</p>
          <a href="index.html" class="btn-ana mt-3 d-inline-block">Ana Sayfaya Git</a>
        </div>
      </div>
    </div>
  </main>

  <footer>
    <div class="container">
      <div class="footer-alt">© 2026 Hilal Karamanlı — Web Teknolojileri Proje Ödevi</div>
    </div>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
<?php
} else {
    // Hatalı giriş
    header('Location: login.html?hata=' . urlencode('Kullanıcı adı veya şifre hatalı.'));
    exit;
}
?>