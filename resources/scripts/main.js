function isScrolled() {
    let scrollTop = (window.pageYOffset || document.scrollTop) - (document.clientTop || 0);

    return scrollTop > 1;
}

function onIsScrolledEventFire() {
    let elem = document.getElementsByClassName('top-navigation')[0];

    if (isScrolled()) {
        if (!elem.classList.contains('scrolled')) {
            elem.className += ' scrolled';
        }
    } else {
        if (elem.classList.contains('scrolled')) {
            elem.classList.remove("scrolled");
        }
    }
}

window.addEventListener('load', function () {
    onIsScrolledEventFire();
    document.onscroll = function () {
        onIsScrolledEventFire();
    }

    document.getElementsByClassName('hamburger')[0].addEventListener('click', function () {
        let elem = document.getElementsByClassName('hamburger')[0];
        let header = document.getElementsByClassName('top-navigation')[0];

        if (!header.classList.contains('opened')) {
            header.className += ' opened';
        } else {
            header.classList.remove("opened");
        }

        if (!elem.classList.contains('active')) {
            elem.className += ' active';
        } else {
            elem.classList.remove("active");
        }
    });
});