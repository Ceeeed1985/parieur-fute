document.addEventListener("DOMContentLoaded", function () {
    const fadeInElements = document.querySelectorAll('.animate-fadeIn-on-scroll');

    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('animate-fadeIn'); // Ajoute la classe d'animation
                entry.target.classList.remove('opacity-0');   // Rend l'élément visible
            }
        });
    });

    fadeInElements.forEach(el => observer.observe(el)); // Observe chaque élément
});