// Reforma Tributária - Timeline Carousel Functions

document.addEventListener('DOMContentLoaded', function() {
    // Check if carousel elements exist
    const carouselWrapper = document.getElementById('carousel-wrapper');
    if (!carouselWrapper) return;

    // Carousel state
    let currentSlide = 0;
    const totalSlides = 5;

    // DOM elements
    const prevButton = document.getElementById('carousel-prev');
    const nextButton = document.getElementById('carousel-next');
    const timelineButtons = document.querySelectorAll('.timeline-btn');

    // Calculate and set timeline height
    function updateTimelineHeight() {
        const timelineSection = document.querySelector('.timeline-section');
        if (!timelineSection) return;

        const height = timelineSection.offsetHeight;
        document.documentElement.style.setProperty('--timeline-height', `${height}px`);

        const topValue = window.getComputedStyle(timelineSection).top;
        const parsedTop = parseFloat(topValue);
        const topOffset = Number.isFinite(parsedTop) ? parsedTop : 0;
        document.documentElement.style.setProperty('--timeline-offset', `${topOffset}px`);
    }

    // Update arrow visibility
    function updateArrows() {
        if (prevButton) prevButton.classList.toggle('hidden', currentSlide === 0);
        if (nextButton) nextButton.classList.toggle('hidden', currentSlide === totalSlides - 1);
    }

    // Update timeline button active state
    function updateTimelineButtons() {
        timelineButtons.forEach((btn, index) => {
            if (index === currentSlide) {
                btn.classList.add('active');
            } else {
                btn.classList.remove('active');
            }
        });
    }

    // Scroll to specific slide
    function scrollToSlide(index) {
        if (index < 0 || index >= totalSlides) return;

        currentSlide = index;
        const slideWidth = window.innerWidth;
        carouselWrapper.style.transform = `translateX(-${currentSlide * slideWidth}px)`;

        updateArrows();
        updateTimelineButtons();
    }

    // Navigation arrow handlers
    if (prevButton) {
        prevButton.addEventListener('click', () => {
            scrollToSlide(currentSlide - 1);
        });
    }

    if (nextButton) {
        nextButton.addEventListener('click', () => {
            scrollToSlide(currentSlide + 1);
        });
    }

    // Timeline button handlers (expose globally for onclick attributes)
    window.scrollToSection = function(index) {
        scrollToSlide(index);
    };

    // Handle window resize
    let resizeTimeout;
    window.addEventListener('resize', () => {
        clearTimeout(resizeTimeout);
        resizeTimeout = setTimeout(() => {
            updateTimelineHeight();
            scrollToSlide(currentSlide); // Recalculate position
        }, 100);
    });

    // Initialize
    updateTimelineHeight();
    updateArrows();
    updateTimelineButtons();
});
