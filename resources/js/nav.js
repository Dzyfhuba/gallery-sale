const host = document.querySelector('nav');
let prevScrollpos = window.pageYOffset;
window.onscroll = function() {
    let currentScrollPos = window.pageYOffset;
    if (prevScrollpos > currentScrollPos) {
        host.animate({
            top: '0'
        }, 500);
    } else {
        host.animate({
            top: '-100px'
        }, 500);
    }
    prevScrollpos = currentScrollPos;

    // if the page is on the top, show the navbar
    if (window.pageYOffset === 0) {
        host.style.top = '0';
    }
};
