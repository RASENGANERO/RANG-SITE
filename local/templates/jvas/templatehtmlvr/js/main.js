// Elementlarni olish
const modalFormOpen = document.querySelectorAll('.contact-btn');
const modalClose = document.querySelectorAll('.modal-close');
const modalForm = document.querySelector('.modal_form');
const modalBgs = document.querySelectorAll('.modal_bg');
const body = document.querySelector('body');
const modalPrivacyOpen2 = document.querySelectorAll('.privacy_open2');
const modalPrivacyOpen = document.querySelectorAll('.privacy_open');
const modalPrivacy = document.querySelector('.modal_privacy1');
const modalPrivacy2 = document.querySelector('.modal_privacy2');
const modalThank = document.querySelector('.modal_thank');
const formBox = document.querySelector('.form_boxs');
const formInputs = document.querySelectorAll('.form_boxs input[required]');

// Modalni ochish funksiyasi
const openModal = (modal) => {
    modal.classList.add('active');
    body.style.overflow = 'hidden';
}

// Modalni yopish funksiyasi
const closeModal = (modal) => {
    modal.classList.remove('active');
    if (!document.querySelector('.modal.active')) {
        body.style.overflow = '';
    }
}

// Forma tekshirish va modal ochish
const handleSubmit = (event) => {
    event.preventDefault();
    let allFilled = true;
    formInputs.forEach(input => {
        if (!input.value.trim()) {
            allFilled = false;
            input.classList.add('error');
        } else {
            input.classList.remove('error');
        }
    });

    if (allFilled) {
        openModal(modalThank);
        formBox.reset();
    }
}
formBox.addEventListener('submit', handleSubmit);

// Hodisalarni ulash
modalFormOpen.forEach(button => {
    button.addEventListener('click', () => openModal(modalForm));
});
modalPrivacyOpen.forEach(button => {
    button.addEventListener('click', () => openModal(modalPrivacy));
});
modalPrivacyOpen2.forEach(button => {
    button.addEventListener('click', () => openModal(modalPrivacy2));
});
modalClose.forEach(close => {
    close.addEventListener('click', () => {
        closeModal(modalForm);
        closeModal(modalThank);
        closeModal(modalPrivacy);
        closeModal(modalPrivacy2);
    });
});
modalBgs.forEach(modalBg => {
    modalBg.addEventListener('click', () => {
        closeModal(modalForm);
        closeModal(modalThank);
        closeModal(modalPrivacy);
        closeModal(modalPrivacy2);
    });
});


// Accordion
document.querySelectorAll('.accordion').forEach(btn => {
    btn.addEventListener('click', function () {
        let allAccordions = document.querySelectorAll('.accordion');
        let allPanels = document.querySelectorAll('.panel');
        let isActive = btn.classList.contains('active');

        allAccordions.forEach(acc => acc.classList.remove('active'));
        allPanels.forEach(panel => panel.classList.remove('active'));

        if (!isActive) {
            btn.classList.add('active');
            let panel = btn.nextElementSibling;
            if (panel && panel.classList.contains('panel')) {
                panel.classList.add('active');
            }
        }
    });
});

document.addEventListener('DOMContentLoaded', function () {
    // Header menu 
    let menuOpen = document.querySelector('.menu_child2');
    let menuWrap = document.querySelector('.header_menu');
    menuOpen.addEventListener('click', function (event) {
        event.stopPropagation();
        menuWrap.classList.toggle('active');
    });
    document.addEventListener('click', function (event) {
        if (!menuWrap.contains(event.target) && !menuOpen.contains(event.target)) {
            menuWrap.classList.remove('active');
        }
    });

    // Header menu accordion
    let menuAccordionBtn = document.querySelector('.header_menu .accordion_btn');
    menuAccordionBtn.addEventListener('click', function () {
        this.classList.toggle('active');
    });

    try {
        // Blog card active
        const tabs = document.querySelectorAll('.blog_tab');
        const tabValue = document.querySelector('.blog_tab-value');
        const cards = document.querySelectorAll('.blog_card');

        const setActiveTab = (index) => {
            tabs.forEach(tab => tab.classList.remove('active'));
            cards.forEach(card => card.classList.remove('active'));
            tabs[index].classList.add('active');
            cards[index].classList.add('active');
            tabValue.textContent = tabs[index].textContent;
        };

        const defaultActiveIndex = Array.from(tabs).findIndex(tab => tab.classList.contains('active'));
        if (defaultActiveIndex !== -1) {
            setActiveTab(defaultActiveIndex);
        } else {
            setActiveTab(0);
        }

        tabs.forEach((tab, index) => {
            tab.addEventListener('click', () => {
                setActiveTab(index);
            });
        });
    } catch (e) { }


    // agency card modal active
    const buttons = document.querySelectorAll('.agency_card-btn');
    const cardInfos = document.querySelectorAll('.card_info');

    buttons.forEach(button => {
        button.addEventListener('click', (event) => {
            event.stopPropagation();
            const parentWrap = button.closest('.agency_wrap');
            const cardInfo = parentWrap.querySelector('.card_info');
            cardInfos.forEach(info => info.classList.remove('active'));
            cardInfo.classList.add('active');
        });
    });
    document.addEventListener('click', () => {
        cardInfos.forEach(info => info.classList.remove('active'));
    });
    cardInfos.forEach(cardInfo => {
        cardInfo.addEventListener('click', (event) => {
            event.stopPropagation();
        });
    });
});


var swiper = new Swiper(".mySwiper", {
    slidesPerView: 2,
    spaceBetween: 360,
    loop: true,
    pagination: {
        el: ".business_arrow .swiper-pagination",
        type: "fraction",
        formatFractionCurrent: function (number) {
            return ('0' + number).slice(-2);
        },
        formatFractionTotal: function (number) {
            return ('0' + number).slice(-2);
        },
    },
    navigation: {
        nextEl: ".business_arrow .swiper-button-next",
        prevEl: ".business_arrow .swiper-button-prev",
    },
    breakpoints: {
        300: {
            slidesPerView: 1,
            spaceBetween: 20,
        },
        400: {
            slidesPerView: 1.18,
            spaceBetween: 20,
        },
        490: {
            slidesPerView: 1.6,
            spaceBetween: 20,
        },
        768: {
            slidesPerView: 1.42,
            spaceBetween: 60,
        },
        992: {
            slidesPerView: 1.5,
            spaceBetween: 60,
        },
        1199: {
            slidesPerView: 1.5,
            spaceBetween: 80,
        },
        1400: {
            slidesPerView: 1,
            spaceBetween: 170,
        },
        1500: {
            slidesPerView: 1.74,
            spaceBetween: 120,
        },
    },
});

var swiper = new Swiper(".innovativeSlider", {
    slidesPerView: 2.5,
    spaceBetween: 60,
    loop: true,
    pagination: {
        el: ".innovative_arrow .swiper-pagination",
        type: "fraction",
        formatFractionCurrent: function (number) {
            return ('0' + number).slice(-2);
        },
        formatFractionTotal: function (number) {
            return ('0' + number).slice(-2);
        },
    },
    navigation: {
        nextEl: ".innovative_arrow .swiper-button-next",
        prevEl: ".innovative_arrow .swiper-button-prev",
    },
    breakpoints: {
        300: {
            slidesPerView: 1,
            spaceBetween: 20,
        },
        400: {
            slidesPerView: 1.17,
            spaceBetween: 20,
        },
        480: {
            slidesPerView: 1.5,
            spaceBetween: 20,
        },
        575: {
            slidesPerView: 1.6,
            spaceBetween: 20,
        },
        768: {
            slidesPerView: 1.65,
            spaceBetween: 70,
        },
        992: {
            slidesPerView: 2.19,
            spaceBetween: 70,
        },
        1200: {
            slidesPerView: 2.3,
            spaceBetween: 60,
        },
        1400: {
            slidesPerView: 1.7,
            spaceBetween: 60,
        },
        1700: {
            slidesPerView: 2.39,
            spaceBetween: 60,
        },
    },
});
var swiper = new Swiper(".innovativeSlider2", {
    slidesPerView: 2.5,
    spaceBetween: 60,
    pagination: {
        el: ".innovative_arrow2 .swiper-pagination",
        type: "fraction",
        formatFractionCurrent: function (number) {
            return ('0' + number).slice(-2);
        },
        formatFractionTotal: function (number) {
            return ('0' + number).slice(-2);
        },
    },
    navigation: {
        nextEl: ".innovative_arrow2 .swiper-button-next",
        prevEl: ".innovative_arrow2 .swiper-button-prev",
    },
    breakpoints: {
        300: {
            slidesPerView: 1,
            spaceBetween: 20,
        },
        400: {
            slidesPerView: 1.17,
            spaceBetween: 20,
        },
        480: {
            slidesPerView: 1.5,
            spaceBetween: 20,
        },
        575: {
            slidesPerView: 1.6,
            spaceBetween: 20,
        },
        768: {
            slidesPerView: 1.7,
            spaceBetween: 70,
        },
        992: {
            slidesPerView: 2.19,
            spaceBetween: 70,
        },
        1200: {
            slidesPerView: 2.3,
            spaceBetween: 60,
        },
        1400: {
            slidesPerView: 1.7,
            spaceBetween: 60,
        },
        1700: {
            slidesPerView: 2.39,
            spaceBetween: 60,
        },
    },
});
var swiper = new Swiper(".innovativeSlider3", {
    slidesPerView: 2.5,
    spaceBetween: 60,
    pagination: {
        el: ".innovative_arrow3 .swiper-pagination",
        type: "fraction",
        formatFractionCurrent: function (number) {
            return ('0' + number).slice(-2);
        },
        formatFractionTotal: function (number) {
            return ('0' + number).slice(-2);
        },
    },
    navigation: {
        nextEl: ".innovative_arrow3 .swiper-button-next",
        prevEl: ".innovative_arrow3 .swiper-button-prev",
    },
    breakpoints: {
        300: {
            slidesPerView: 1,
            spaceBetween: 20,
        },
        400: {
            slidesPerView: 1.17,
            spaceBetween: 20,
        },
        480: {
            slidesPerView: 1.5,
            spaceBetween: 20,
        },
        575: {
            slidesPerView: 1.6,
            spaceBetween: 20,
        },
        768: {
            slidesPerView: 1.7,
            spaceBetween: 70,
        },
        992: {
            slidesPerView: 2.19,
            spaceBetween: 70,
        },
        1200: {
            slidesPerView: 2.3,
            spaceBetween: 60,
        },
        1400: {
            slidesPerView: 1.7,
            spaceBetween: 60,
        },
        1700: {
            slidesPerView: 2.39,
            spaceBetween: 60,
        },
    },
});
var swiper = new Swiper(".innovativeSlider4", {
    slidesPerView: 2.5,
    spaceBetween: 60,
    pagination: {
        el: ".innovative_arrow4 .swiper-pagination",
        type: "fraction",
        formatFractionCurrent: function (number) {
            return ('0' + number).slice(-2);
        },
        formatFractionTotal: function (number) {
            return ('0' + number).slice(-2);
        },
    },
    navigation: {
        nextEl: ".innovative_arrow4 .swiper-button-next",
        prevEl: ".innovative_arrow4 .swiper-button-prev",
    },
    breakpoints: {
        300: {
            slidesPerView: 1,
            spaceBetween: 20,
        },
        400: {
            slidesPerView: 1.17,
            spaceBetween: 20,
        },
        480: {
            slidesPerView: 1.5,
            spaceBetween: 20,
        },
        575: {
            slidesPerView: 1.6,
            spaceBetween: 20,
        },
        768: {
            slidesPerView: 1.7,
            spaceBetween: 70,
        },
        992: {
            slidesPerView: 2.19,
            spaceBetween: 70,
        },
        1200: {
            slidesPerView: 2.3,
            spaceBetween: 60,
        },
        1400: {
            slidesPerView: 1.7,
            spaceBetween: 60,
        },
        1700: {
            slidesPerView: 2.39,
            spaceBetween: 60,
        },
    },
});

var swiper = new Swiper(".audienceSlider", {
    slidesPerView: 2.5,
    spaceBetween: 60,
    loop: true,
    pagination: {
        el: ".audience_arrow .swiper-pagination",
        type: "fraction",
        formatFractionCurrent: function (number) {
            return ('0' + number).slice(-2);
        },
        formatFractionTotal: function (number) {
            return ('0' + number).slice(-2);
        },
    },
    navigation: {
        nextEl: ".audience_arrow .swiper-button-next",
        prevEl: ".audience_arrow .swiper-button-prev",
    },
    breakpoints: {
        300: {
            slidesPerView: 1,
            spaceBetween: 20,
        },
        400: {
            slidesPerView: 1.3,
            spaceBetween: 70,
        },
        450: {
            slidesPerView: 1.4,
            spaceBetween: 50,
        },
        550: {
            slidesPerView: 1.6,
            spaceBetween: 20,
        },
        768: {
            slidesPerView: 1.54,
            spaceBetween: 70,
        },
        992: {
            slidesPerView: 1.3,
            spaceBetween: 50,
        },
        1200: {
            slidesPerView: 1.3,
            spaceBetween: 30,
        },
        1400: {
            slidesPerView: 1,
            spaceBetween: 30,
        },
        1500: {
            slidesPerView: 1.18,
            spaceBetween: 50,
        },
    },
});

var agencySlider = new Swiper(".agencySlider", {
    slidesPerView: 4.2,
    spaceBetween: 30,
    breakpoints: {
        300: {
            slidesPerView: 1.1,
            spaceBetween: 16,
        },
        380: {
            slidesPerView: 1.2,
            spaceBetween: 16,
        },
        450: {
            slidesPerView: 1.4,
            spaceBetween: 16,
        },
        500: {
            slidesPerView: 1.65,
            spaceBetween: 16,
        },
        768: {
            slidesPerView: 2.3,
            spaceBetween: 16,
        },
        992: {
            slidesPerView: 3,
            spaceBetween: 16,
        },
        1200: {
            slidesPerView: 3,
            spaceBetween: 24,
        },
        1400: {
            slidesPerView: 2.8,
            spaceBetween: 24,
        },
        1500: {
            slidesPerView: 3.2,
            spaceBetween: 24,
        },
        1700: {
            slidesPerView: 3.6,
            spaceBetween: 24,
        },
        1850: {
            slidesPerView: 4,
            spaceBetween: 24,
        },
    },
});

var agencySlider = new Swiper(".marketingSlider", {
    slidesPerView: 4.2,
    spaceBetween: 30,
    breakpoints: {
        300: {
            slidesPerView: 1.1,
            spaceBetween: 16,
        },
        380: {
            slidesPerView: 1.2,
            spaceBetween: 16,
        },
        450: {
            slidesPerView: 1.4,
            spaceBetween: 16,
        },
        500: {
            slidesPerView: 1.65,
            spaceBetween: 16,
        },
        768: {
            slidesPerView: 2.26,
            spaceBetween: 16,
        },
        992: {
            slidesPerView: 3,
            spaceBetween: 16,
        },
        1200: {
            slidesPerView: 2.7,
            spaceBetween: 24,
        },
        1300: {
            slidesPerView: 3,
            spaceBetween: 24,
        },
        1400: {
            slidesPerView: 2.8,
            spaceBetween: 24,
        },
        1450: {
            slidesPerView: 3,
            spaceBetween: 24,
        },
        1550: {
            slidesPerView: 3.2,
            spaceBetween: 24,
        },
        1700: {
            slidesPerView: 3.6,
            spaceBetween: 24,
        },
        1850: {
            slidesPerView: 4,
            spaceBetween: 24,
        },
    },
});

var agencySlider = new Swiper(".marketingSlider2", {
    slidesPerView: 2.5,
    spaceBetween: 30,
    breakpoints: {

        300: {
            slidesPerView: 1.1,
            spaceBetween: 16,
        },
        380: {
            slidesPerView: 1.2,
            spaceBetween: 16,
        },
        450: {
            slidesPerView: 1.4,
            spaceBetween: 16,
        },
        500: {
            slidesPerView: 1.65,
            spaceBetween: 16,
        },
        768: {
            slidesPerView: 1.8,
            spaceBetween: 16,
        },
        992: {
            slidesPerView: 2.02,
            spaceBetween: 24,
        },
        1400: {
            slidesPerView: 1.7,
            spaceBetween: 24,
        },
        1450: {
            slidesPerView: 1.8,
            spaceBetween: 24,
        },
        1530: {
            slidesPerView: 1.9,
            spaceBetween: 24,
        },
        1670: {
            slidesPerView: 2.1,
            spaceBetween: 24,
        },
        1750: {
            slidesPerView: 2.2,
            spaceBetween: 24,
        },
        1860: {
            slidesPerView: 2.4,
            spaceBetween: 24,
        },
    },
});

var agencySlider = new Swiper(".partnerSlider", {
    slidesPerView: 4.2,
    spaceBetween: 52,
    breakpoints: {
        300: {
            slidesPerView: 1.8,
            spaceBetween: 20,
        },
        380: {
            slidesPerView: 2.2,
            spaceBetween: 20,
        },
        450: {
            slidesPerView: 2.9,
            spaceBetween: 20,
        },
        576: {
            slidesPerView: 3.1,
            spaceBetween: 20,
        },
        600: {
            slidesPerView: 2.95,
            spaceBetween: 36,
        },
        767: {
            slidesPerView: 2.92,
            spaceBetween: 36,
        },
        991: {
            slidesPerView: 3.88,
            spaceBetween: 36,
        },
        1200: {
            slidesPerView: 3.55,
            spaceBetween: 52,
        },
        1400: {
            slidesPerView: 2.93,
            spaceBetween: 52,
        },
        1500: {
            slidesPerView: 4.2,
            spaceBetween: 52,
        },
    },
});

var agencySlider = new Swiper(".tariffSlider", {
    slidesPerView: 3.3,
    spaceBetween: 30,
    breakpoints: {
        300: {
            slidesPerView: 1.05,
            spaceBetween: 16,
        },
        380: {
            slidesPerView: 1.2,
            spaceBetween: 16,
        },
        490: {
            slidesPerView: 1.6,
            spaceBetween: 16,
        },
        576: {
            slidesPerView: 1.2,
            spaceBetween: 16,
        },
        700: {
            slidesPerView: 1.6,
            spaceBetween: 16,
        },
        768: {
            slidesPerView: 2.1,
            spaceBetween: 16,
        },
        900: {
            slidesPerView: 2.5,
            spaceBetween: 16,
        },
        992: {
            slidesPerView: 3,
            spaceBetween: 16,
        },
        1200: {
            slidesPerView: 3,
            spaceBetween: 24,
        },
        1400: {
            slidesPerView: 2.1,
            spaceBetween: 40,
        },
        1550: {
            slidesPerView: 3,
            spaceBetween: 40,
        },
    },
});

try {
    document.querySelector('.item_all-btn').addEventListener('click', function () {
        let img = this.querySelector('img');
        let span = this.querySelector('span');
        let content = document.querySelector('.item_all_f2');

        this.classList.toggle('active');

        if (content.classList.contains('hidden')) {
            img.classList.remove('active');
            span.textContent = 'свернуть';
            content.classList.remove('hidden');
            content.style.display = 'flex';
        } else {
            img.classList.add('active');
            span.textContent = 'СМОТРЕТЪ ВСЕ УСЛУГИ';
            content.classList.add('hidden');
            content.style.display = 'none';
        }
    });
} catch (e) {
    console.error()
}
