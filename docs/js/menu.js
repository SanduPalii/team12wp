window.addEventListener('DOMContentLoaded', () => {
    const menu = document.querySelector('.menu_mini'),
        menuItem = document.querySelectorAll('.menu_item'),
        hamburger = document.querySelector('.hamburger');

    hamburger.addEventListener('click', () => {
        hamburger.classList.toggle('hamburger_active');
        menu.classList.toggle('menu_active');
        document.body.classList.toggle('stop_scroll');
    });

    menuItem.forEach(item => {
        item.addEventListener('click', () => {
            hamburger.classList.toggle('hamburger_active');
            menu.classList.toggle('menu_active');
            document.body.classList.remove('stop_scroll');
        });
    });
});


const resize = () => {
    if (document.body.clientWidth < 992) {
        $('.news_card').slick({
            infinite: true,
            slidesToShow: 1,
            slidesToScroll: 1,
            responsive: [{
                breakpoint: 992,
                prevArrow: '<button type="button" class="slick-prev"></button>',
                nextArrow: '<button type="button" class="slick-next"></button>',
            }]
        });
    }
};

resize();
document.body.addEventListener('resize', resize);

