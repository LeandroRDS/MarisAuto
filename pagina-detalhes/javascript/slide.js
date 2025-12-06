let currentIndex = 0;

        function showSlide(index) {
            const carousel = document.querySelector('.carousel');
            const slides = document.querySelectorAll('.slide');
            const totalSlides = slides.length;

            // Garantir que o índice seja cíclico
            if (index >= totalSlides) {
                currentIndex = 0;
            } else if (index < 0) {
                currentIndex = totalSlides - 1;
            } else {
                currentIndex = index;
            }

            // Mover o carrossel
            carousel.style.transform = `translateX(-${currentIndex * 100}%)`;
        }

        function nextSlide() {
            showSlide(currentIndex + 1);
        }

        function prevSlide() {
            showSlide(currentIndex - 1);
        }