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
document.getElementById('increase-font').addEventListener('click', () => adjustFontSize(1));
document.getElementById('decrease-font').addEventListener('click', () => adjustFontSize(-1));
document.getElementById('increase-spacing').addEventListener('click', () => adjustLetterSpacing(0.5));
document.getElementById('decrease-spacing').addEventListener('click', () => adjustLetterSpacing(-0.5));
document.querySelector("form").addEventListener("submit", function(e) {
  const emailInput = document.querySelector('input[name="email"]');
  const emailValue = emailInput.value;
  const regex = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.(pl|com|org|net)$/;

  if (!regex.test(emailValue)) {
    e.preventDefault();
    alert("Podaj poprawny adres e-mail z końcówką .pl, .com, .org lub .net.");
    emailInput.focus();
  }
});
document.querySelector('.nav1-burger').addEventListener('click', () => {
  document.querySelectorAll(".nav1").forEach(link => {
    link.classList.toggle('active');
  })
});