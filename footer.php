


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Footer Example</title>
    <link rel="stylesheet" href="footer.css"> <!-- Ensure this CSS file is correctly linked -->
</head>
<body>
    <!-- Other content of your page -->

    <footer>
        <img class="logo" src="/wordpress/wp-content/themes/BANDMATES./images/black_logo.png" alt="Logo">
        <p>&copy; <?php echo date('Y'); ?> BandMates. Tous droits réservés.</p>

        <div class="footer-columns">
            <div class="footer-section">
                <h2>Besoin d'aide</h2>
                <a href="/support">Support</a><br>
                <a href="/faq">FAQ</a>
                <hr>
            </div>

            <div class="footer-section">
                <h2>Contact</h2>
                <p>Bandmates.info@gmail.com</p>
                <p>+32 470 00 00 00</p>
                <hr>
            </div>
        </div>
    </footer>
</body>
</html>