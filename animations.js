// Function to check if an element is in viewport
function isInViewport(element) {
    var rect = element.getBoundingClientRect();
    return (
        rect.top >= 0 &&
        rect.left >= 0 &&
        rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
        rect.right <= (window.innerWidth || document.documentElement.clientWidth)
    );
}

// Function to fade in elements when scrolled into view
function fadeInElements() {
    var elements = document.querySelectorAll('.fade-in');
    elements.forEach(function(element) {
        if (isInViewport(element)) {
            element.classList.add('visible');
        }
    });
}

// Event listener for scrolling to trigger fade-in animation
document.addEventListener('scroll', function() {
    fadeInElements();
});

// Initial check for fade-in elements on page load
window.addEventListener('load', function() {
    fadeInElements();
});