function scrollLeft() {
    document.querySelector('.scroll-container').scrollBy({ left: -200, behavior: 'smooth' });
}
function scrollRight() {
    document.querySelector('.scroll-container').scrollBy({ left: 200, behavior: 'smooth' });
}