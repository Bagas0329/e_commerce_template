<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>Kontak Kami</title>
    <!-- Menambahkan Font Awesome untuk ikon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        nav {
            background-color: #333;
            overflow: hidden;
        }

        nav a {
            float: left;
            display: block;
            color: #f2f2f2;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
            font-size: 17px;
        }

            body {
                font-family: Arial, sans-serif;
                padding: 40px;
                background-color: #f4f4f4;
                text-align: center;
            }

            h1 {
                color: #333;
            }

            .whatsapp-button {
                display: inline-block;
                background-color: #25D366;
                color: white;
                padding: 12px 20px;
                font-size: 18px;
                border-radius: 5px;
                text-decoration: none;
                margin-top: 20px;
                transition: background-color 0.3s ease;
            }

            .whatsapp-button:hover {
                background-color: #1ebe5d;
            }

            .whatsapp-button i {
                margin-right: 8px;
            }
    </style>
</head>

<body>
    <nav>
        <a href="index.php" class="logo">Get Books!</a>
        <a href="about.php" class="active">About Us!</a>
    </nav>

    <h1>Hubungi Kami</h1>
    <p>Silakan klik tombol di bawah untuk menghubungi kami melalui WhatsApp:</p>
    <a href="https://wa.me/6281316496515" class="whatsapp-button" target="_blank">
        <i class="fa fa-whatsapp"></i> Chat via WhatsApp
    </a>

    <button onclick="window.location.href='http://localhost/JWD-ASSET-main/index.php#';">
        Kembali ke Halaman Utama
    </button>

</body>

</html>