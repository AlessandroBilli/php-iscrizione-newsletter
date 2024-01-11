<?php
function emailAlert()
{
    if ($_SERVER["REQUEST_METHOD"] == "GET") {
        $email = $_GET["email"];

        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            echo '<div class="alert alert-success" role="alert">Email valida! Puoi procedere con l\'iscrizione.</div>';
            header('Location: thanks.php');
        } else {
            echo '<div class="alert alert-danger" role="alert">
                Email errata, @ o . mancanti.
              </div>';
        }
    }
}
