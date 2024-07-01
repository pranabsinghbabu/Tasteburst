// JavaScript for the image slider
const slider = document.getElementById('slider');
const slides = document.querySelectorAll('.slide');
const slideCount = slides.length;
let currentIndex = 0;

function showSlide(index) {
    for (let i = 0; i < slideCount; i++) {
        slides[i].style.display = 'none'; // Hide all slides
    }
    slides[index].style.display = 'block'; // Display the selected slide
}

function nextSlide() {
    currentIndex = (currentIndex + 1) % slideCount;
    showSlide(currentIndex);
}

function prevSlide() {
    currentIndex = (currentIndex - 1 + slideCount) % slideCount;
    showSlide(currentIndex);
}

// Automatically advance the slider every 3 seconds
setInterval(nextSlide, 3000);

// Show the initial slide
showSlide(currentIndex);
