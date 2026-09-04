document.addEventListener('click', function(event) {
    const preOrderBtn = event.target.closest('#preOrderBtn');
    const menuBtn = event.target.closest('#menuBtn');

    if (preOrderBtn) {
        window.location.href = 'order.php';
    } else if (menuBtn) {
        window.location.href = 'menu.php';
    } else if (learnMoreBtn) {
        window.location.href = 'about.php';
    }
});