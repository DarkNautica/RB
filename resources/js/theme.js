
// Select the header element
const header = document.querySelector('.site-header');

document.addEventListener('DOMContentLoaded', () => {
    const header = document.querySelector('.site-header');

    window.addEventListener('scroll', () => {
        if (window.scrollY > 5) {
            header.classList.add('scrolled');
        } else {
            header.classList.remove('scrolled');
        }
    });
});





