$(document).ready(function () {
    $('.video-gallery').magnificPopup({
        delegate: 'a',
        type: 'iframe',
        gallery: {
            enabled: true
        }
    });
});

$(document).ready(function () {
    $('.my-slider1').slick({
        slidesToShow: 3,
        slidesToScroll: 1,
        arrows: true,
        dots: true,
        speed: 300,
        infinite: true,
        autoplaySpeed: 2000,
        autoplay: true,
        prevArrow: '<i class="fa-solid fa-arrow-left"></i>',
        nextArrow: '<i class="fa-solid fa-arrow-right"></i>',
        responsive: [
            {
                breakpoint: 991,
                settings: {
                    slidesToShow: 3,
                }
            },
            {
                breakpoint: 767,
                settings: {
                    slidesToShow: 1,
                }
            }
        ]
    });
});

$(document).ready(function () {
    $('.my-slider-female').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: true,
        dots: true,
        speed: 300,
        infinite: true,
        autoplaySpeed: 2000,
        autoplay: true,
        prevArrow: '<i class="fa-solid fa-arrow-left"></i>',
        nextArrow: '<i class="fa-solid fa-arrow-right"></i>',
        responsive: [
            {
                breakpoint: 991,
                settings: {
                    slidesToShow: 3,
                }
            },
            {
                breakpoint: 767,
                settings: {
                    slidesToShow: 1,
                }
            }
        ]
    });
});

$(document).ready(function () {
    $('.my-slider').slick({
        slidesToShow: 3,
        slidesToScroll: 1,
        arrows: true,
        dots: true,
        speed: 300,
        infinite: true,
        autoplaySpeed: 5000,
        autoplay: true,
        prevArrow: '<button class="slide-arrow prev-arrow"></button>',
        nextArrow: '<button class="slide-arrow next-arrow"></button>',
        responsive: [
            {
                breakpoint: 991,
                settings: {
                    slidesToShow: 3,
                }
            },
            {
                breakpoint: 767,
                settings: {
                    slidesToShow: 1,
                }
            }
        ]
    });
});

$(document).ready(function () {
    $('.gallery-item').magnificPopup({
        delegate: 'a',
        type: 'iframe',
        gallery: {
            enabled: true
        }
    });
});

document.addEventListener("DOMContentLoaded", function () {
    const popup = document.getElementById("popup");
    const popupContent = document.querySelector(".popup-content");
    
    // Delay the execution of the script by 3 seconds (3000 milliseconds)
    setTimeout(function () {
        // Display the popup after the delay
        popup.style.visibility = "visible";
        popupContent.style.transform = "scale(1)";
    }, 3000);

    // Define the closetoclick function
    function closetoclick() {
        popup.style.visibility = "hidden";
        popupContent.style.transform = "scale(0)";
    }

    // Attach the click event to the button
    const closeButton = document.getElementById("closeButton");
    if (closeButton) {
        closeButton.addEventListener("click", closetoclick);
    }
    const closeButton1 = document.getElementById("closeButton1");
    if (closeButton1) {
        closeButton1.addEventListener("click", closetoclick);
    }
});


AOS.init({
    once: true
});

// Get the modal
function openModal() {
    document.getElementById("myModal").style.display = "block";
}

// Close the Modal
function closeModal() {
    document.getElementById("myModal").style.display = "none";
}

var slideIndex = 1;
showSlides(slideIndex);

// Next/previous controls
function plusSlides(n) {
    showSlides(slideIndex += n);
}

// Thumbnail image controls
function currentSlide(n) {
    showSlides(slideIndex = n);
}

function showSlides(n) {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    var dots = document.getElementsByClassName("demo");
    var captionText = document.getElementById("caption");
    if (n > slides.length) { slideIndex = 1 }
    if (n < 1) { slideIndex = slides.length }
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex - 1].style.display = "block";
    dots[slideIndex - 1].className += " active";
    captionText.innerHTML = dots[slideIndex - 1].alt;
}
