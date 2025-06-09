import Swiper from "swiper";
import { Navigation, Pagination, Autoplay } from "swiper/modules";
export default class imageSlider {
    constructor() {
        this.setDomMap();
        this.initSliders();
    }

    setDomMap() {
        this.sliders = document.querySelectorAll(".image-slider");
    }

    initSliders() {
        if (!this.sliders.length) return;

        this.sliders.forEach((slider) => {
            const nextEl = slider.querySelector(".swiper-button-next");
            const prevEl = slider.querySelector(".swiper-button-prev");
            const paginationEl = slider.querySelector(".swiper-pagination");

            new Swiper(slider, {
                modules: [Navigation, Pagination, Autoplay],
                loop: true,
                centeredSlides: true,
                speed: 2000,
                autoplay: {
                    delay: 5000,
                    disableOnInteraction: false,
                },
                navigation: {
                    nextEl,
                    prevEl,
                },
                pagination: {
                    el: paginationEl,
                    clickable: true,
                },

            });
        });
    }
}
