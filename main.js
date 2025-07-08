
let lastScrollY = window.scrollY;
window.addEventListener("scroll", () => {
    if (window.scrollY > lastScrollY) {
        document.querySelector(".navbar").style.top = "-60px";
        document.querySelector(".navbar").style.backgroundColor = "transparent";
    } else {
        document.querySelector(".navbar").style.top = "0";
        document.querySelector(".navbar").style.backgroundColor = "#FFFDF6";
    }
    lastScrollY = window.scrollY;
});

function klik() {
    var s = document.getElementById("listabtn").getAttribute("switch");
    if(s == "0"){
        document.getElementById("listabtn").setAttribute("switch", "1");
        document.getElementById("list").style.display = "flex";
    }else {
        document.getElementById("listabtn").setAttribute("switch", "0");
        document.getElementById("list").style.display = "none";
    }
}

window.onload = () => {
    const track = document.getElementById('carouselTrack');
    const slides = document.querySelectorAll('.carousel-slide');
    const dots = document.querySelectorAll('.dot');
    const prevBtn = document.getElementById('prevBtn');
    const nextBtn = document.getElementById('nextBtn');
    let currentIndex = 0;

    function updateCarousel(index) {
        const slideWidth = slides[0].offsetWidth;
        track.style.transform = `translateX(-${index * slideWidth}px)`;
        dots.forEach(dot => dot.classList.remove('active'));
        dots[index].classList.add('active');
    }

    dots.forEach(dot => {
        dot.addEventListener('click', () => {
            currentIndex = parseInt(dot.getAttribute('data-slide'));
            updateCarousel(currentIndex);
        });
    });

    nextBtn.addEventListener('click', () => {
        if (currentIndex < slides.length - 1) {
            currentIndex++;
            updateCarousel(currentIndex);
        }
    });

    prevBtn.addEventListener('click', () => {
        if (currentIndex > 0) {
            currentIndex--;
            updateCarousel(currentIndex);
        }
    });

    window.addEventListener('resize', () => {
        updateCarousel(currentIndex);
    });

    const carouselContainer = document.getElementById('carouselContainer');
    let touchStartX = 0;
    let touchEndX = 0;
    const threshold = 50;

    carouselContainer.addEventListener('touchstart', e => {
        touchStartX = e.changedTouches[0].screenX;
    });

    carouselContainer.addEventListener('touchend', e => {
        touchEndX = e.changedTouches[0].screenX;
        const diff = touchEndX - touchStartX;
        if (diff > threshold && currentIndex > 0) {
            updateCarousel(--currentIndex);
        } else if (diff < -threshold && currentIndex < slides.length - 1) {
            updateCarousel(++currentIndex);
        }
    });

    const carousel = document.querySelector('.carousel');
    if (carousel) {
        carousel.addEventListener('touchstart', (e) => {
            touchStartX = e.changedTouches[0].screenX;
        });

        carousel.addEventListener('touchend', (e) => {
            touchEndX = e.changedTouches[0].screenX;
            handleSwipeGesture();
        });
    }

    function handleSwipeGesture() {
        const distance = touchEndX - touchStartX;
        if (Math.abs(distance) > threshold) {
            if (distance < 0) {
                document.querySelector('.carousel-next')?.click();
            } else {
                document.querySelector('.carousel-prev')?.click();
            }
        }
    }

    updateCarousel(currentIndex);

    const lightbox = document.querySelector('#lightbox');
    const lightboxImg = document.getElementById('lightboxImg');
    const closeBtn = document.getElementById('closeLightbox');

    if (!lightbox || !lightboxImg || !closeBtn) {
        console.error('Brak wymaganych elementów lightbox:', { lightbox, lightboxImg, closeBtn });
        return;
    }

    document.querySelectorAll('.carousel-slide img').forEach(img => {
        img.style.cursor = 'pointer';
        img.addEventListener('click', (e) => {
            e.preventDefault();
            e.stopPropagation();
            const src = img.getAttribute('src');
            if (src) {
                lightboxImg.setAttribute('src', src);
                lightbox.classList.remove('hidden');
            } else {
                console.error('Brak atrybutu src w obrazku:', img);
            }
        });
    });

    closeBtn.addEventListener('click', () => {
        lightbox.classList.add('hidden');
        lightboxImg.setAttribute('src', '');
    });

    lightbox.addEventListener('click', (e) => {
        if (e.target === lightbox || e.target === lightbox.querySelector('.lightbox-content')) {
            lightbox.classList.add('hidden');
            lightboxImg.setAttribute('src', '');
        }
    });

    document.addEventListener('keydown', (e) => {
        if (e.key === 'Escape' && !lightbox.classList.contains('hidden')) {
            lightbox.classList.add('hidden');
            lightboxImg.setAttribute('src', '');
        }
    });
};
function adjustFontSize(change) {
    const elements = document.querySelectorAll('p, h1, h2, h3, h4, h5, h6, span, a, div');
    
    elements.forEach(el => {
        const style = window.getComputedStyle(el);
        const fontSize = parseFloat(style.fontSize);
        const newSize = fontSize + change;

        if (newSize >= 8) {
            el.style.fontSize = newSize + 'px';
        }
    });
}
function adjustLetterSpacing(change) {
    const elements = document.querySelectorAll('p, h1, h2, h3, h4, h5, h6, span, a, div');
    
    elements.forEach(el => {
        const style = window.getComputedStyle(el);
        let letterSpacing = style.letterSpacing;

        let currentSpacing = letterSpacing === "normal" ? 0 : parseFloat(letterSpacing);
        const newSpacing = currentSpacing + change;

        if (newSpacing >= 0) {
            el.style.letterSpacing = newSpacing + 'px';
        }
    });
}
document.getElementById('toggle-negative').addEventListener('click', () => {
    document.body.classList.toggle('negative');
  });
document.getElementById("underline-link").addEventListener("click", function() {
    const links = document.querySelectorAll("a");
    links.forEach(link => {
      link.style.textDecoration = "underline";
    });
  });
document.getElementById("refresh-btn").addEventListener("click", function() {
    location.reload();
});
document.getElementById("show-projects").addEventListener("click", function () {
  const contact = document.getElementById("contact");

  contact.classList.remove("flash");

  void contact.offsetWidth;

  contact.classList.add("flash");
});
document.getElementById('increase-font').addEventListener('click', () => adjustFontSize(1));
document.getElementById('decrease-font').addEventListener('click', () => adjustFontSize(-1));
document.getElementById('increase-spacing').addEventListener('click', () => adjustLetterSpacing(0.5));
document.getElementById('decrease-spacing').addEventListener('click', () => adjustLetterSpacing(-0.5));