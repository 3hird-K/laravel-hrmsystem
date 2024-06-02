// AOS.init();
document.addEventListener('DOMContentLoaded', function() {
    const elements = document.querySelectorAll('.animate-in');
    let windowHeight = window.innerHeight;

    function checkIfInView() {
        elements.forEach(element => {
            const bounding = element.getBoundingClientRect();
            const isInView = bounding.top >= 0 && bounding.bottom <= windowHeight;
            element.classList.toggle('show', isInView);
        });
    }

    checkIfInView();

    window.addEventListener('resize', () => {
        windowHeight = window.innerHeight;
        checkIfInView();
    });

    window.addEventListener('scroll', checkIfInView);
});