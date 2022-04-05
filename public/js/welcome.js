var modal = document.getElementById('id01');
window.onclick = function (event) {
    if (event.target == modal) {
        modal.style.display = 'none';
    }
}

var typed = new Typed('.auto-input', {
    strings: ['Smart Phones.', 'Laptops.', 'Tablets.', 'Wearables.', 'TVs.', 'Monitors.', 'Cameras.', 'PC Accessories.'],
    typeSpeed: 100,
    backSpeed: 30,
    loop: true
})