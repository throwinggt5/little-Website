//document.addEventListener("DOMContentLoaded", function () {
//    const slideshows = document.querySelectorAll(".slideshow-container .slides");
//    let slideIndex = 0;
//    let totalSlides = slideshows[0].children.length; // Assumes all slideshows have the same number of slides
//
//    function showSlide(index) {
//        slideIndex = index % totalSlides; // Ensures looping is smooth
//
//        slideshows.forEach((slides) => {
//            slides.style.transition = "transform 0.5s ease-in-out"; // Smooth transition
//            slides.style.transform = `translateX(${-slideIndex * 100}%)`;
//        });
//    }
//
//    function moveSlides(step) {
//        showSlide((slideIndex + step) % totalSlides);
//    }
//
//    // Auto-slide every 4 seconds
//    setInterval(() => moveSlides(1), 4000);
//
//    // Initialize slides at the first position
//    showSlide(slideIndex);
//});
//