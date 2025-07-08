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
    <title>Portfolio</title>
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
        <a class="nav1" href="#top">Home</a>
        <a class="nav1" href="#about">O mnie</a>
        <a class="nav1" href="#prace">Prace</a>
    </nav>
    <div class="intro" id="top">
        <main>
            <p class="p1"><i>Witam! Nazywam się Jeremi Szcześniak</i></p>
            <h1>Full stack developer</h1>
            <a class="projects" href="#prace">Zobacz projekty</a>
            <a class="projects" id="contact" href="kontakt.php">Skontaktuj się ze mną</a>
        </main>
        <section>
            <img class="portret" src="place.png" alt="Moje zdjęcie">
        </section>
    </div>
    <div class="about" id="about">
        <div class="aboutd">
            <h3 style="padding: 90px; font-size: 130%;">O mnie</h3>
        </div>
        <div class="aboutd">
            <p class="p2" >Jestem młodym, początkującym programistą zajmujący się front-endem oraz back-endem z doświadczeniem na poziomie nauki szkolnej i niesamowitym zapałem do tworzenia dla Ciebie nowych stron.<br><br><br> 
            Strona firmowa? Sklep internetowy? Nie ma żadnego problemu! Razem możemy stworzyć dopasowany do Twoich potrzeb serwis internetowy. Wystarczy Twój pomysł, lub jego brak, a dzięki stałemu kontaktowi możemy zrobić coś wspaniałego.<br><br><br>
            <a style="color: #FFFDF6;" id="show-projects" href="#top">Skontaktuj się ze mną!</a> Chętnie odpowiem na Twoje pytania lub porozmawiam o możliwej współpracy.</p>
        </div>
        <div class="aboutd">
            <img class="photo1" src="photo1.jpg" alt="Programista">
        </div>
    </div>
    <div class="prace" id="prace">
        <h3 class="prace-title">Prace</h3>
        <div class="text-prace">
            <p>Nie ma tu dużo! Wierzę, że pomożesz mi wypełnić tę sekcję Twoim projektem!</p>
            <p>Kody źródłowe możesz prześledzić na mojej stronie Github: <a href="https://github.com/jeremiszczesniak" target="_blank">https://github.com/jeremiszczesniak</a></p><br>
            <p>Wszystkie projekty zostały wykonane ręcznie, w celu pokazania moich umiejętności.</p>
        </div>
        <div class="pracemain">
        <div class="custom-carousel">
            <div class="carousel-wrapper">
                <button class="carousel-arrow left" id="prevBtn">&#8592;</button>
                <div class="carousel-track-container" id="carouselContainer">
                    <div class="carousel-track" id="carouselTrack">
                        <div class="carousel-slide">
                            <img src="z1.png" alt="Projekt 1">
                            <h2 class="carousel-title">Projekt 1</h2>
                            <p class="carousel-description">Gra z łamigłówkami na stronie internetowej.</p>
                        </div>
                        <div class="carousel-slide">
                            <img src="z2.png" alt="Projekt 2">
                            <h2 class="carousel-title">Projekt 2</h2>
                            <p class="carousel-description">Sklep internetowy i zarządzanie produktami.</p>
                        </div>
                        <div class="carousel-slide">
                            <img src="z3.png" alt="Projekt 3">
                            <h2 class="carousel-title">Projekt 3</h2>
                            <p class="carousel-description">Formularze logowania i rejestracji.</p>
                        </div>
                    </div>
                </div>
                <button class="carousel-arrow right" id="nextBtn">&#8594;</button>
            </div>
            <div class="carousel-dots" id="carouselDots">
                <span class="dot active" data-slide="0"></span>
                <span class="dot" data-slide="1"></span>
                <span class="dot" data-slide="2"></span>
            </div>
        </div>
    </div>
    </div>
    <div class="strzalka">
        <a class="arrow" href="#top"><b>&#11014;</b></a>
    </div>
    <div id="lightbox" class="lightbox hidden">
        <div class="lightbox-content">
            <span id="closeLightbox" class="close-btn">×</span>
            <img style="filter: grayscale(0);" id="lightboxImg" src="" alt="Large view">
        </div>
    </div>
    <script src="main.js"></script>
</body>
</html>