const header = document.querySelector("header");

const prt_section = document.querySelector(".portfolio");
const zoom_icon = document.querySelectorAll(".zoom-icon");
const model_overlay = document.querySelector(".model-overlay");
const images = document.querySelectorAll(".images img");
const prev_btn = document.querySelector(".prev-btn");
const next_btn = document.querySelector(".next-btn");

const toggle_btn = document.querySelector(".toggle-btn");

const hamburger = document.querySelector(".hamburger");
const overlay = document.querySelector(".overlay");

const floatBtn = document.querySelector("#stickyBtn");

// const openChat = document.querySelector('#openChat');
// const chatBox  = document.querySelector('#chatBox');

/* ======================== Sticky Navbar ======================= */

function stickyNavbar () {
    header.classList.toggle("scrolled", window.pageYOffset > 0);
};

window.addEventListener("scroll", stickyNavbar);

/* ======================== Dark Mode Theme ======================= */

let fristTheme = localStorage.getItem("dark");

changeTheme(+fristTheme);

function changeTheme(isDark) {
    if (isDark) {
        document.body.classList.add("dark");
        toggle_btn.classList.replace("uil-moon", "uil-sun");
        localStorage.setItem("dark", 1);
    } else {
        document.body.classList.remove("dark");
        toggle_btn.classList.replace("uil-sun", "uil-moon");
        localStorage.setItem("dark", 0);
    }
}

toggle_btn.addEventListener("click", () => {
    changeTheme(!document.body.classList.contains("dark"));
});

/* ======================== Open & Close Navbar Menu [ Hamburger btn ] ======================= */

hamburger.addEventListener("click", () => {
    document.body.classList.toggle("open");
    document.body.classList.toggle("stopScrolling");

    links.forEach(link => 
        link.addEventListener("click", () => {
            document.body.classList.remove("open");
            document.body.classList.remove("stopScrolling");
    }));
});

/* ======================== Loading Screen ======================= */

let bgLoading = document.getElementById("bgLoading")
let bgLoadingCont = document.querySelector("#bgLoading .loading-container")
window.onload = () => {
    setTimeout(function() {
        bgLoadingCont.style.opacity = "0";
        bgLoading.style.pointerEvents = "none";
        bgLoading.style.backdropFilter = "blur(0px)";
        setTimeout(function() {
            bgLoadingCont.style.display = "none";
            bgLoading.style.display = "none";
        }, 1000)
    }, 1000)
}

/* ======================== Float Icon In Side ======================= */

document.addEventListener("click", (e) => {
    floatBtn.classList.toggle("active");
    if (!floatBtn.contains(e.target)) {
        floatBtn.classList.remove("active");
    }
});

/* ======================== Chat Open ======================= */

// document.addEventListener('click', (e) => {
//     chatBox.classList.toggle('show');
//     if (!openChat.contains(e.target)) {
//         chatBox.classList.remove("show");
//     }
// });

// ======================== [ Go Up btn ] ========================

//Get the button:
mybutton = document.getElementById("myBtn");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    mybutton.style.display = "block";
    } else {
    mybutton.style.display = "none";
    }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
  document.body.scrollTop = 0; // For Safari
  document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
}

/* ======================== Modal Popup Animation ======================= */

let currentIndex = 0;

zoom_icon.forEach((icn, i) => 
icn.addEventListener("click", () => {
    prt_section.classList.add("open");
        document.body.classList.add("stopScrolling");
        currentIndex = i;
        changeImage(currentIndex);
    })
    );
    
    model_overlay.addEventListener("click", () => {
        prt_section.classList.remove("open");
        document.body.classList.remove("stopScrolling");
    });
    
    prev_btn.addEventListener("click", () => {
        if (currentIndex === 0) {
            currentIndex = 5
        } else {
            currentIndex--;
        }
        changeImage(currentIndex);
    });
    
    next_btn.addEventListener("click", () => {
        if (currentIndex === 5) {
            currentIndex = 0
        } else {
            currentIndex++;
        }
        changeImage(currentIndex);
    });
    
function changeImage(index) {
    images.forEach(img => img.classList.remove("showImage"));
    images[index].classList.add("showImage");
}