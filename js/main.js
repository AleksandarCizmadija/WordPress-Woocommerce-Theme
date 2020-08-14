const menuBar = document.querySelector('.menu-bar'),
    links = document.querySelector('.links');

menuBar.addEventListener('click', function () {
    if (links.style.maxHeight) {
        links.style.maxHeight = null;
    } else {
        links.style.maxHeight = links.scrollHeight + 'px';
    }
});

// add year to footer

const yearSpan = document.querySelector('#year');

const fullYear = new Date().getUTCFullYear();

yearSpan.innerText = fullYear;


// video popup
jQuery(document).ready(function () {
    jQuery('.popup-youtube, .popup-vimeo, .popup-gmaps').magnificPopup({
        // disableOn: 700,
        type: 'iframe',
        mainClass: 'mfp-fade',
        removalDelay: 160,
        preloader: false,

        fixedContentPos: false
    });
});

// counters
window.addEventListener('scroll', function (e) {
    const scrolled = document.querySelector('.scrolled'),
        rect = scrolled.getBoundingClientRect(),
        hT = rect.top + window.scrollY,
        hH = scrolled.offsetHeight,
        wH = window.innerHeight,
        wS = window.scrollY;

    if (wS > (hT + hH - wH)) {
        setTimeout(() => {
            const counters = document.querySelectorAll('.counter');
            const speed = 2000;
            counters.forEach(function (counter) {
                const updateCount = function () {
                    const data = parseInt(counter.getAttribute('data-target'));
                    const count = parseInt(counter.innerText);
                    // console.log(count);
                    const increment = data / speed;
                    // console.log(increment);
                    if (count < data) {
                        counter.innerText = Math.ceil(count + increment);
                        setTimeout(updateCount, 1);
                    } else {
                        count.innerText = Math.ceil(data);
                    }
                }
                updateCount();
            })

        }, 1000);
    }

})