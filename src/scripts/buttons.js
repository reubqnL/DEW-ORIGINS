document.addEventListener('click', function(event) {
    const preOrderBtn = event.target.closest('#preOrderBtn');
    const menuBtn = event.target.closest('#menuBtn');
    const learnMoreBtn = event.target.closest('#learnMoreBtn');
    const originsCard = event.target.closest('#originsCard');
    const menuCard = event.target.closest('#menuCard');
    const placedOrderBtn = event.target.closest('#placeOrderBtn')

    if (preOrderBtn) {
        window.location.href = 'order.php';
    } else if (menuBtn) {
        window.location.href = 'menu.php';
    } else if (learnMoreBtn) {
        window.location.href = 'about.php';
    } else if (originsCard) {
        window.location.href = 'origins.php';
    } else if (menuCard) {
        window.location.href = 'menu.php';
    } else if (placedOrderBtn) {
        window.location.href = 'orderPlaced.php'
    }

});