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
        <a class="nav1" href="index.php#top"><svg fill="#000000" width="20" height="20" viewBox="-1.27 0 30.066 30.066" id="_01_-_Home_Button" data-name="01 - Home Button" xmlns="http://www.w3.org/2000/svg">
  <path id="_01_-_Home_Button-2" data-name="01 - Home Button" d="M29.759,9.912a3,3,0,0,0-1.543-2.623L17.457,1.312a3,3,0,0,0-2.914,0L3.784,7.289A3,3,0,0,0,2.241,9.912V28a3,3,0,0,0,3,3h6.5a1,1,0,0,0,1-1V24.912a1,1,0,0,1,1-1h4.51a1,1,0,0,1,1,1V30a1,1,0,0,0,1,1h6.5a3,3,0,0,0,3-3V9.912Zm-2,0V28a1,1,0,0,1-1,1h-5.5V24.912a3,3,0,0,0-3-3h-4.51a3,3,0,0,0-3,3V29h-5.5a1,1,0,0,1-1-1V9.912a1,1,0,0,1,.514-.875L15.514,3.06a1,1,0,0,1,.972,0L27.245,9.037a1,1,0,0,1,.514.875Z" transform="translate(-2.241 -0.934)" fill-rule="evenodd"/>
</svg><br>Home</a>
        <a class="nav1" href="index.php#about"><svg fill="#000000" width="20" height="20" viewBox="0 0 128 128" id="Layer_1" version="1.1" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">

<g>

<path d="M64,1C29.3,1,1,29.3,1,64s28.3,63,63,63s63-28.3,63-63S98.7,1,64,1z M64,119C33.7,119,9,94.3,9,64S33.7,9,64,9   s55,24.7,55,55S94.3,119,64,119z"/>

<rect height="40" width="8" x="60" y="54.5"/>

<rect height="8" width="8" x="60" y="35.5"/>

</g>

</svg><br>O mnie</a>
        <a class="nav1" href="index.php#prace"><svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M9 7H5C3.89543 7 3 7.89543 3 9V18C3 19.1046 3.89543 20 5 20H19C20.1046 20 21 19.1046 21 18V9C21 7.89543 20.1046 7 19 7H15M9 7V5C9 3.89543 9.89543 3 11 3H13C14.1046 3 15 3.89543 15 5V7M9 7H15" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
</svg><br>Prace</a>
<a class="nav1" href="kontakt.php"><svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M10 19H6.2C5.0799 19 4.51984 19 4.09202 18.782C3.71569 18.5903 3.40973 18.2843 3.21799 17.908C3 17.4802 3 16.9201 3 15.8V8.2C3 7.0799 3 6.51984 3.21799 6.09202C3.40973 5.71569 3.71569 5.40973 4.09202 5.21799C4.51984 5 5.0799 5 6.2 5H17.8C18.9201 5 19.4802 5 19.908 5.21799C20.2843 5.40973 20.5903 5.71569 20.782 6.09202C21 6.51984 21 7.0799 21 8.2V10M20.6067 8.26229L15.5499 11.6335C14.2669 12.4888 13.6254 12.9165 12.932 13.0827C12.3192 13.2295 11.6804 13.2295 11.0677 13.0827C10.3743 12.9165 9.73279 12.4888 8.44975 11.6335L3.14746 8.09863M14 21L16.025 20.595C16.2015 20.5597 16.2898 20.542 16.3721 20.5097C16.4452 20.4811 16.5147 20.4439 16.579 20.399C16.6516 20.3484 16.7152 20.2848 16.8426 20.1574L21 16C21.5523 15.4477 21.5523 14.5523 21 14C20.4477 13.4477 19.5523 13.4477 19 14L14.8426 18.1574C14.7152 18.2848 14.6516 18.3484 14.601 18.421C14.5561 18.4853 14.5189 18.5548 14.4903 18.6279C14.458 18.7102 14.4403 18.7985 14.405 18.975L14 21Z" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
</svg><br>Kontakt</a>
    <div class="nav1-burger">
        <svg width="40" height="40" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M4 18L20 18" stroke="#000000" stroke-width="2" stroke-linecap="round"/>
        <path d="M4 12L20 12" stroke="#000000" stroke-width="2" stroke-linecap="round"/>
        <path d="M4 6L20 6" stroke="#000000" stroke-width="2" stroke-linecap="round"/>
        </svg>
    </div>
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