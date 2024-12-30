class TestimonialSlider {
    constructor() {
        this.currentIndex = 0;
        this.track = document.getElementById("sliderTrack");
        this.dotContainer = document.getElementById("dotIndicators");
        this.cards = this.track.querySelectorAll(".testimonial-card");
        this.autoPlayInterval = null;
        this.cardsPerView = 3;
        this.maxIndex = Math.ceil(
            (this.cards.length - this.cardsPerView + 1) / 1
        );

        this.init();
    }

    init() {
        // Create dot indicators based on number of cards
        for (let i = 0; i < this.maxIndex; i++) {
            const dot = document.createElement("div");
            dot.className = "dot";
            if (i === 0) dot.classList.add("active");
            dot.addEventListener("click", () => this.goToSlide(i));
            this.dotContainer.appendChild(dot);
        }

        // Start autoplay
        this.startAutoPlay();

        // Pause autoplay on hover
        this.track.addEventListener("mouseenter", () => this.stopAutoPlay());
        this.track.addEventListener("mouseleave", () => this.startAutoPlay());
    }

    updateDots() {
        const dots = this.dotContainer.getElementsByClassName("dot");
        Array.from(dots).forEach((dot, index) => {
            dot.classList.toggle("active", index === this.currentIndex);
        });
    }

    goToSlide(index) {
        this.currentIndex = index;
        this.updateSliderPosition();
        this.updateDots();
    }

    updateSliderPosition() {
        const slideWidth = 33.333;
        this.track.style.transform = `translateX(-${
            this.currentIndex * slideWidth
        }%)`;
    }

    next() {
        this.currentIndex = (this.currentIndex + 1) % this.maxIndex;
        this.updateSliderPosition();
        this.updateDots();
    }

    startAutoPlay() {
        this.autoPlayInterval = setInterval(() => this.next(), 5000);
    }

    stopAutoPlay() {
        clearInterval(this.autoPlayInterval);
    }
}

// Initialize the slider when the page loads
document.addEventListener("DOMContentLoaded", () => {
    new TestimonialSlider();
});
