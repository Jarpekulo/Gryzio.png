<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ToZrob - Login</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="login-container">
        <div class="login-box">
            <h1>ToZrob</h1>
            <!-- Formularz wysyła dane do login.php za pomocą POST -->
            <form action="login.php" method="POST">
                <input type="text" placeholder="Login" name="login" required>
                <input type="password" placeholder="Hasło" name="password" required>
                <button type="submit">Prześlij</button>
            </form>
            <br><a href="Rejestracja.php"> <button>Nie masz konta? zalóż</button></a>
        </div>
    </div>
</body>
</html> 