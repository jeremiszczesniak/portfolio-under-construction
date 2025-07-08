<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="style.css" rel="stylesheet" type="text/css">
    <link rel="shortcut icon" href="favicon.png" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Domine:wght@400..700&display=swap" rel="stylesheet">
    <title>Kontakt</title>
</head>
<body>
    <nav class="navbar">
        <div class="dropdown">
            <button class="access" id="listabtn" switch="0" onclick="klik()"><img class="acc" src="disabled.png"></button>
            <div class="list" id="list">
                <p>Ułatwienia dostępności</p>
                    <button class="btnlist" id="increase-font">Powiększ romiar tekstu</button>
                    <button class="btnlist" id="decrease-font">Zmniejsz rozmiar tekstu</button>
                    <button class="btnlist" id="increase-spacing">Powiększ odstępy w tekście</button>
                    <button class="btnlist" id="decrease-spacing">Zmniejsz odstępy w tekście</button>
                    <button class="btnlist" id="toggle-negative">Odwróć kolory</button>
                    <button class="btnlist" id="underline-link">Podkreślaj łącza</button>
                    <button class="btnlist" id="refresh-btn" style="background: none; font-size:larger;">&#x21bb;</button>
            </div>
        </div>
        <a class="nav1" href="index.php#top">Home</a>
        <a class="nav1" href="index.php#about">O mnie</a>
        <a class="nav1" href="index.php#prace">Prace</a>
    </nav>
    <div class="formcont">
        <form action="email.php" method="post" class="form-items">
            <h1 style="font-size:230%;">Formularz kontaktowy</h1>
            <input type="text" name="imie" class="feedback-input" placeholder="Imię" required><br>
            <input type="email" name="email" class="feedback-input" placeholder="E-mail" required><br>
            <input type="text" name="temat" class="feedback-input" placeholder="Temat" required><br>
            <textarea name="wiadomosc" class="feedback-input" placeholder="Wiadomość" required></textarea><br>
            <input type="submit" value="Wyślij">
        </form>
    </div>
    <script src="disabled.js"></script>
</body>
</html>