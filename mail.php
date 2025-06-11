<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $name    = htmlspecialchars(trim($_POST["name"]));
    $email   = htmlspecialchars(trim($_POST["email"]));
    $message = htmlspecialchars(trim($_POST["message"]));

    $to      = "roifanmarzuki@gmail.com";
    $subject = "Pesan Baru dari Website";
    $body    = "Nama: $name\nEmail: $email\n\nPesan:\n$message";

    $headers = "From: roifanmarzuki@gmail.com\r\n" .
               "Reply-To: $email\r\n" .
               "MIME-Version: 1.0\r\n" .
               "Content-type: text/plain; charset=UTF-8\r\n" .
               "X-Mailer: PHP/" . phpversion();

    if (!empty($name) && !empty($email) && !empty($message) && filter_var($email, FILTER_VALIDATE_EMAIL)) {
        if (mail($to, $subject, $body, $headers)) {
            echo "Pesan berhasil dikirim!";
        } else {
            echo "Gagal mengirim email.";
        }
    } else {
        echo "Data tidak lengkap atau email tidak valid.";
    }
}
?>
