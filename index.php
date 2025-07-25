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
        <a class="nav1" href="#top"><svg fill="#000000" width="20" height="20" viewBox="-1.27 0 30.066 30.066" id="_01_-_Home_Button" data-name="01 - Home Button" xmlns="http://www.w3.org/2000/svg">
  <path id="_01_-_Home_Button-2" data-name="01 - Home Button" d="M29.759,9.912a3,3,0,0,0-1.543-2.623L17.457,1.312a3,3,0,0,0-2.914,0L3.784,7.289A3,3,0,0,0,2.241,9.912V28a3,3,0,0,0,3,3h6.5a1,1,0,0,0,1-1V24.912a1,1,0,0,1,1-1h4.51a1,1,0,0,1,1,1V30a1,1,0,0,0,1,1h6.5a3,3,0,0,0,3-3V9.912Zm-2,0V28a1,1,0,0,1-1,1h-5.5V24.912a3,3,0,0,0-3-3h-4.51a3,3,0,0,0-3,3V29h-5.5a1,1,0,0,1-1-1V9.912a1,1,0,0,1,.514-.875L15.514,3.06a1,1,0,0,1,.972,0L27.245,9.037a1,1,0,0,1,.514.875Z" transform="translate(-2.241 -0.934)" fill-rule="evenodd"/>
</svg><br>Home</a>
        <a class="nav1" href="#about"><svg fill="#000000" width="20" height="20" viewBox="0 0 128 128" id="Layer_1" version="1.1" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">

<g>

<path d="M64,1C29.3,1,1,29.3,1,64s28.3,63,63,63s63-28.3,63-63S98.7,1,64,1z M64,119C33.7,119,9,94.3,9,64S33.7,9,64,9   s55,24.7,55,55S94.3,119,64,119z"/>

<rect height="40" width="8" x="60" y="54.5"/>

<rect height="8" width="8" x="60" y="35.5"/>

</g>

</svg><br>O mnie</a>
        <a class="nav1" href="#prace"><svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
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
        <div class="socials">
            <h2>Social Media</h2>
            <div class="social-divs">
                <a href="https://www.linkedin.com/in/jeremi-szcze%C5%9Bniak-709710361/" target="_blank"> 
                    <div class="social-div">
                        <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="150" height="150" viewBox="0 0 50 50">
                        <path d="M 9 4 C 6.2504839 4 4 6.2504839 4 9 L 4 41 C 4 43.749516 6.2504839 46 9 46 L 41 46 C 43.749516 46 46 43.749516 46 41 L 46 9 C 46 6.2504839 43.749516 4 41 4 L 9 4 z M 9 6 L 41 6 C 42.668484 6 44 7.3315161 44 9 L 44 41 C 44 42.668484 42.668484 44 41 44 L 9 44 C 7.3315161 44 6 42.668484 6 41 L 6 9 C 6 7.3315161 7.3315161 6 9 6 z M 14 11.011719 C 12.904779 11.011719 11.919219 11.339079 11.189453 11.953125 C 10.459687 12.567171 10.011719 13.484511 10.011719 14.466797 C 10.011719 16.333977 11.631285 17.789609 13.691406 17.933594 A 0.98809878 0.98809878 0 0 0 13.695312 17.935547 A 0.98809878 0.98809878 0 0 0 14 17.988281 C 16.27301 17.988281 17.988281 16.396083 17.988281 14.466797 A 0.98809878 0.98809878 0 0 0 17.986328 14.414062 C 17.884577 12.513831 16.190443 11.011719 14 11.011719 z M 14 12.988281 C 15.392231 12.988281 15.94197 13.610038 16.001953 14.492188 C 15.989803 15.348434 15.460091 16.011719 14 16.011719 C 12.614594 16.011719 11.988281 15.302225 11.988281 14.466797 C 11.988281 14.049083 12.140703 13.734298 12.460938 13.464844 C 12.78117 13.19539 13.295221 12.988281 14 12.988281 z M 11 19 A 1.0001 1.0001 0 0 0 10 20 L 10 39 A 1.0001 1.0001 0 0 0 11 40 L 17 40 A 1.0001 1.0001 0 0 0 18 39 L 18 33.134766 L 18 20 A 1.0001 1.0001 0 0 0 17 19 L 11 19 z M 20 19 A 1.0001 1.0001 0 0 0 19 20 L 19 39 A 1.0001 1.0001 0 0 0 20 40 L 26 40 A 1.0001 1.0001 0 0 0 27 39 L 27 29 C 27 28.170333 27.226394 27.345035 27.625 26.804688 C 28.023606 26.264339 28.526466 25.940057 29.482422 25.957031 C 30.468166 25.973981 30.989999 26.311669 31.384766 26.841797 C 31.779532 27.371924 32 28.166667 32 29 L 32 39 A 1.0001 1.0001 0 0 0 33 40 L 39 40 A 1.0001 1.0001 0 0 0 40 39 L 40 28.261719 C 40 25.300181 39.122788 22.95433 37.619141 21.367188 C 36.115493 19.780044 34.024172 19 31.8125 19 C 29.710483 19 28.110853 19.704889 27 20.423828 L 27 20 A 1.0001 1.0001 0 0 0 26 19 L 20 19 z M 12 21 L 16 21 L 16 33.134766 L 16 38 L 12 38 L 12 21 z M 21 21 L 25 21 L 25 22.560547 A 1.0001 1.0001 0 0 0 26.798828 23.162109 C 26.798828 23.162109 28.369194 21 31.8125 21 C 33.565828 21 35.069366 21.582581 36.167969 22.742188 C 37.266572 23.901794 38 25.688257 38 28.261719 L 38 38 L 34 38 L 34 29 C 34 27.833333 33.720468 26.627107 32.990234 25.646484 C 32.260001 24.665862 31.031834 23.983076 29.517578 23.957031 C 27.995534 23.930001 26.747519 24.626988 26.015625 25.619141 C 25.283731 26.611293 25 27.829667 25 29 L 25 38 L 21 38 L 21 21 z"></path>
                        </svg>
                        <h3>LinkedIn</h3>
                    </div>
                </a>
                <a href="https://github.com/jeremiszczesniak" target="_blank">
                    <div class="social-div">
                        <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="150" height="150" viewBox="0 0 64 64">
                        <path d="M32 6C17.641 6 6 17.641 6 32c0 12.277 8.512 22.56 19.955 25.286-.592-.141-1.179-.299-1.755-.479V50.85c0 0-.975.325-2.275.325-3.637 0-5.148-3.245-5.525-4.875-.229-.993-.827-1.934-1.469-2.509-.767-.684-1.126-.686-1.131-.92-.01-.491.658-.471.975-.471 1.625 0 2.857 1.729 3.429 2.623 1.417 2.207 2.938 2.577 3.721 2.577.975 0 1.817-.146 2.397-.426.268-1.888 1.108-3.57 2.478-4.774-6.097-1.219-10.4-4.716-10.4-10.4 0-2.928 1.175-5.619 3.133-7.792C19.333 23.641 19 22.494 19 20.625c0-1.235.086-2.751.65-4.225 0 0 3.708.026 7.205 3.338C28.469 19.268 30.196 19 32 19s3.531.268 5.145.738c3.497-3.312 7.205-3.338 7.205-3.338.567 1.474.65 2.99.65 4.225 0 2.015-.268 3.19-.432 3.697C46.466 26.475 47.6 29.124 47.6 32c0 5.684-4.303 9.181-10.4 10.4 1.628 1.43 2.6 3.513 2.6 5.85v8.557c-.576.181-1.162.338-1.755.479C49.488 54.56 58 44.277 58 32 58 17.641 46.359 6 32 6zM33.813 57.93C33.214 57.972 32.61 58 32 58 32.61 58 33.213 57.971 33.813 57.93zM37.786 57.346c-1.164.265-2.357.451-3.575.554C35.429 57.797 36.622 57.61 37.786 57.346zM32 58c-.61 0-1.214-.028-1.813-.07C30.787 57.971 31.39 58 32 58zM29.788 57.9c-1.217-.103-2.411-.289-3.574-.554C27.378 57.61 28.571 57.797 29.788 57.9z"></path>
                        </svg>
                        <h3>GitHub</h3>
                    </div>
                </a>
                <a href="https://www.facebook.com/profile.php?id=100011072251327&locale=pl_PL" target="_blank">
                    <div class="social-div">
                        <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="150" height="150" viewBox="0 0 50 50">
                        <path d="M25,3C12.85,3,3,12.85,3,25c0,11.03,8.125,20.137,18.712,21.728V30.831h-5.443v-5.783h5.443v-3.848 c0-6.371,3.104-9.168,8.399-9.168c2.536,0,3.877,0.188,4.512,0.274v5.048h-3.612c-2.248,0-3.033,2.131-3.033,4.533v3.161h6.588 l-0.894,5.783h-5.694v15.944C38.716,45.318,47,36.137,47,25C47,12.85,37.15,3,25,3z"></path>
                        </svg>
                        <h3>Facebook</h3>
                    </div>
                </a>
            </div>
            <br>
            <hr>
        </div>
        <h3 class="prace-title">Prace</h3>
        <div class="text-prace">
            <p>Nie ma tu dużo! Wierzę, że pomożesz mi wypełnić tę sekcję Twoim projektem!</p>
            <p>Kody źródłowe możesz prześledzić na mojej stronie Github.</p><br>
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
    <div class="text-prace">
        <p style="text-align: center;">Wszystkie projekty zostały wykonane ręcznie, w celu pokazania moich umiejętności.</p>
    </div>
    <script src="main.js"></script>
</body>
</html>