
const modalThank = document.querySelector('.modal_thank');

function openModal(modal){
    modal.classList.add('active');
    document.getElementsByTagName('body')[0].style.overflow = 'hidden';
}
function closeModal(modal){
    modal.classList.remove('active');
    if (!document.querySelector('.modal.active')) {
        document.getElementsByTagName('body')[0].style.overflow = '';
    }
}
function closeAlls(modal){
    let closeModalbt=modal.querySelector('.modal-close');
    closeModalbt.addEventListener('click',() => closeModal(modal));
    let closeModalOut=modal.querySelector('.modal_bg');
    closeModalOut.addEventListener('click',() => closeModal(modal));       
}


document.addEventListener('DOMContentLoaded', ()=>{
    if(document.getElementsByClassName('privacy_open2').length!=0){
        let s=document.getElementsByClassName('privacy_open2');
        let privacyForm2=document.getElementsByClassName('modal_privacy2')[0];
        Array.from(s).forEach(button => {
            button.addEventListener('click', () => openModal(privacyForm2));
        });
        closeAlls(privacyForm2);
    }
    if(document.getElementsByClassName('privacy_open').length!=0){
        let s=document.getElementsByClassName('privacy_open');
        let privacyForm=document.getElementsByClassName('modal_privacy1')[0];
        Array.from(s).forEach(button => {
            button.addEventListener('click', () => openModal(privacyForm));
        });
        closeAlls(privacyForm);
    }
    if(document.getElementsByClassName('contact-btn').length!=0){
        let s=document.getElementsByClassName('contact-btn');
        let modalForm=document.getElementsByClassName('modal_form')[0];
        Array.from(s).forEach(button => {
            button.addEventListener('click', () => openModal(modalForm));
        });
        closeAlls(modalForm);
    }
    // Header menu 
    if(document.getElementsByClassName('menu-btn').length!=0){
        let menuOpen = document.getElementsByClassName('menu-btn')[0];
        let menuWrap = document.getElementsByClassName('header_menu')[0];
        menuOpen.addEventListener('click', function (event) {
            event.stopPropagation();
            menuWrap.classList.toggle('active');
        });
        document.addEventListener('click', function (event) {
            if (!menuWrap.contains(event.target) && !menuOpen.contains(event.target)) {
                menuWrap.classList.remove('active');
            }
        });
    }
    // Header menu accordion
    if(document.querySelector('.header_menu .accordion_btn')!=null){
        let menuAccordionBtn = document.querySelector('.header_menu .accordion_btn');
            menuAccordionBtn.addEventListener('click', function () {
                this.classList.toggle('active');
        });
    }
    if(document.querySelectorAll('.accordion').length!=0){
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
    }
    if(document.querySelectorAll('.blog_tab').length!=0){
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
    }
    if(document.querySelectorAll('.agency_card-btn')!=null){
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
    }
    if (document.getElementsByClassName("mySwiper").length!=0){
        let swiper = new Swiper(".mySwiper", {
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
    }
    if (document.getElementsByClassName("innovativeSlider").length!=0){
        let innovativeSlider = new Swiper(".innovativeSlider", {
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
    }
    if (document.getElementsByClassName("innovativeSlider2").length!=0){
        let innovativeSlider2 = new Swiper(".innovativeSlider2", {
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
    }
    if (document.getElementsByClassName("innovativeSlider3").length!=0){
        let innovativeSlider3 = new Swiper(".innovativeSlider3", {
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
    }
    if (document.getElementsByClassName("innovativeSlider4").length!=0){
        let innovativeSlider4 = new Swiper(".innovativeSlider4", {
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
    }
    if (document.getElementsByClassName("audienceSlider").length!=0){
        let audienceSlider = new Swiper(".audienceSlider", {
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
    }
    if (document.getElementsByClassName("agencySlider").length!=0){
        let agencySlider = new Swiper(".agencySlider", {
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
    }
    if (document.getElementsByClassName("marketingSlider").length!=0){
        let marketingSlider = new Swiper(".marketingSlider", {
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
    }
    if (document.getElementsByClassName("marketingSlider2").length!=0){
        let marketingSlider2 = new Swiper(".marketingSlider2", {
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
    }    
    if (document.getElementsByClassName("partnerSlider").length!=0){
        let partnerSlider = new Swiper(".partnerSlider", {
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
        
    }
    if (document.getElementsByClassName("tariffSlider").length!=0){
        let tariffSlider = new Swiper(".tariffSlider", {
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
        
    }
    if(document.querySelector('.item_all-btn')!=null){
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
    }
});