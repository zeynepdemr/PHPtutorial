<?php
// --- 1. Butonlardan gelen istekleri kontrol et ---
if (isset($_POST['accept_cookies'])) {
    setcookie("cookies_accepted", "true", time() + (3600));
    header("Location: index.php");
    exit;
}

if (isset($_POST['reject_cookies'])) {
    setcookie("cookies_rejected", "true", time() + (3600)); 
    header("Location: index.php");
    exit;
}

$cookieStatus = "none"; // varsayılan: henüz karar verilmemiş

if (isset($_COOKIE['cookies_accepted'])) {
    $cookieStatus = "accepted";
} elseif (isset($_COOKIE['cookies_rejected'])) {
    $cookieStatus = "rejected";
}
?>

<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <title>Cookie Denemesi</title>
    <style>
        body {
            font-family: Arial;
            margin: 0;
            padding: 0;
        }
        .cookie-banner {
            position: fixed;
            bottom: 0;
            width: 100%;
            text-align: center;
            padding: 15px;
            color: #fff;
        }
        .accepted {
            background: #4CAF50;
        }
        .rejected {
            background: #d9534f;
        }
        .default {
            background: #222;
        }
        button {
            background: #fff;
            color: #222;
            border: none;
            padding: 8px 15px;
            cursor: pointer;
            margin-left: 5px;
            border-radius: 4px;
        }
        button:hover {
            background: #ddd;
        }
    </style>
</head>
<body>

    <h1>Hoş Geldin!</h1>

    <?php if ($cookieStatus === "none"): ?>
        <div class="cookie-banner default">
            Bu site çerezleri kullanıcı deneyimini iyileştirmek için kullanır.
            <form method="post" style="display:inline;">
                <button type="submit" name="accept_cookies">Kabul Et</button>
                <button type="submit" name="reject_cookies">Reddet</button>
            </form>
        </div>
    <?php elseif ($cookieStatus === "accepted"): ?>
        <div class="cookie-banner accepted">
            🍪 Çerezleri kabul ettiğin için teşekkürler!
        </div>
    <?php elseif ($cookieStatus === "rejected"): ?>
        <div class="cookie-banner rejected">
            ❌ Çerezleri reddettin. Bazı özellikler sınırlı olabilir.
        </div>
    <?php endif; ?>

</body>
</html>
