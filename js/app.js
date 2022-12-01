//Navigation
const burger = document.querySelector('.burger');
const menu = document.querySelector('.primary-nav-links');

let menuOpen = false;
burger.addEventListener("click", () => {
    if (!menuOpen) {
        burger.classList.add("open");
        menuOpen = true;
        menu.classList.add('active');
    } else {
        burger.classList.remove("open");
        menuOpen = false;
        menu.classList.remove('active');
    }
});

// Banner Slide
const banner = new Swiper('.banner', {
    speed: 900,
    spaceBetween: 100,
    effect: 'fade',
    fadeEffect: {
        crossFade: true
    },
    autoplay: {
        delay: 2000,
    },
});

// Reviews Slide
const review = new Swiper('.review', {
    speed: 3000,
    spaceBetween: 100,
    autoplay: {
        delay: 6000,
    },
    // breakpoints: {
    //     640: {
    //         slidesPerView: 1,
    //         spaceBetween: 20,
    //     },
    //     768: {
    //         slidesPerView: 2,
    //         spaceBetween: 30,
    //     },
    //     1024: {
    //         slidesPerView: 2,
    //         spaceBetween: 30,
    //     },
    // },
});

// Get the button:
let mybutton = document.getElementById("myBtn");

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