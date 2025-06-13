import Header from './components/Header';
import DynamicImports from './components/DynamicImports';

// 
import { Offcanvas } from 'bootstrap';
import counterUp from 'counterup2';
import Waypoint from 'waypoints/lib/noframework.waypoints';
import SVGInject from "@iconfu/svg-inject";




import { inVP } from "./utils";

export default new (class App {
  constructor() {
    this.setDomMap();
    this.previousScroll = 0;

    // dom ready shorthand
    $(() => {
      this.domReady();
    });
  }

  domReady = () => {
    if (navigator.appVersion.indexOf("Win") !== -1) {
      this.scrollSmoother();
    }
    this.initComponents();
    // this.captchaLoad();
    this.handleUserAgent();
    this.windowResize();
    this.bindEvents();
    // this.handleSplashScreen();
    this.offCanvas();
    this.counterUp();
    this.svgInject();
  };

  initComponents = () => {
    new Header({
      header: this.header,
      htmlBody: this.htmlBody,
    });



    // new BlockMain();

    new DynamicImports();




  };



  setDomMap = () => {
    this.window = $(window);
    this.htmlNbody = $('body, html');
    this.html = $('html');
    this.htmlBody = $('body');
    this.siteLoader = $('.site-loader');
    this.header = $('header');
    this.siteBody = $('.site-body');
    this.footer = $('footer');
    this.gotoTop = $('#gotoTop');
    this.wrapper = $('.wrapper');
    this.pushDiv = this.wrapper.find('.push');

  };

  bindEvents = () => {



    // Window Events
    this.window.resize(this.windowResize).scroll(this.windowScroll);

    // General Events
    const $container = this.wrapper;

    $container.on('click', '.disabled', () => false);

    // Specific Events
    this.gotoTop.on('click', () => {
      this.htmlNbody.animate({
        scrollTop: 0,
      });
    });



  };

  windowResize = () => {
    this.screenWidth = this.window.width();
    this.screenHeight = this.window.height();

    // calculate footer height and assign it to wrapper and push/footer div
    if (this.pushDiv.length) {
      this.footerHeight = this.footer.outerHeight();
      this.wrapper.css('margin-bottom', -this.footerHeight);
      this.pushDiv.height(this.footerHeight);
    }
  };

  windowScroll = () => {
    const topOffset = this.window.scrollTop();

    this.header.toggleClass('top', topOffset > 300);
    this.header.toggleClass('sticky', topOffset > 600);
    if (topOffset > this.previousScroll || topOffset < 500) {
      this.header.removeClass('sticky');
    } else if (topOffset < this.previousScroll) {
      this.header.addClass('sticky');
      // Additional checking so the header will not flicker
      if (topOffset > 250) {
        this.header.addClass('sticky');
      } else {
        this.header.removeClass('sticky');
      }
    }

    this.previousScroll = topOffset;
    this.gotoTop.toggleClass(
      'active',
      this.window.scrollTop() > this.screenHeight / 2,
    );
  };



  handleUserAgent = () => {
    // detect mobile platform
    if (navigator.userAgent.match(/(iPod|iPhone|iPad)/)) {
      this.htmlBody.addClass('ios-device');
    }
    if (navigator.userAgent.match(/Android/i)) {
      this.htmlBody.addClass('android-device');
    }

    // detect desktop platform
    if (navigator.appVersion.indexOf('Win') !== -1) {
      this.htmlBody.addClass('win-os');
    }
    if (navigator.appVersion.indexOf('Mac') !== -1) {
      this.htmlBody.addClass('mac-os');
    }

    // detect IE 10 and 11P
    if (
      navigator.userAgent.indexOf('MSIE') !== -1 ||
      navigator.appVersion.indexOf('Trident/') > 0
    ) {
      this.html.addClass('ie10');
    }

    // detect IE Edge
    if (/Edge\/\d./i.test(navigator.userAgent)) {
      this.html.addClass('ieEdge');
    }

    // Specifically for IE8 (for replacing svg with png images)
    if (this.html.hasClass('ie8')) {
      const imgPath = '/themes/theedge/images/';
      $('header .logo a img,.loading-screen img').attr(
        'src',
        `${imgPath}logo.png`,
      );
    }

    // show ie overlay popup for incompatible browser
    if (this.html.hasClass('ie9')) {
      const message = $(
        '<div class="no-support"> You are using outdated browser. Please <a href="https://browsehappy.com/" target="_blank">update</a> your browser or <a href="https://browsehappy.com/" target="_blank">install</a> modern browser like Google Chrome or Firefox.<div>',
      );
      this.htmlBody.prepend(message);
    }
  };


  offCanvas = () => {
    var navbar = document.querySelector(".navbar");
    if (navbar == null) return;
    const navOffCanvasBtn = document.querySelectorAll(".offcanvas-nav-btn");
    const navOffCanvas = document.querySelector('.navbar:not(.navbar-clone) .offcanvas-nav');
    // const bsOffCanvas = new bootstrap.Offcanvas(navOffCanvas, { scroll: true });
    const bsOffCanvas = new Offcanvas(navOffCanvas, { scroll: true });

    const scrollLink = document.querySelectorAll('.onepage .navbar li a.scroll');
    const searchOffcanvas = document.getElementById('offcanvas-search');
    navOffCanvasBtn.forEach(e => {
      e.addEventListener('click', event => {
        bsOffCanvas.show();
      })
    });
    scrollLink.forEach(e => {
      e.addEventListener('click', event => {
        bsOffCanvas.hide();
      })
    });
    if (searchOffcanvas != null) {
      searchOffcanvas.addEventListener('shown.bs.offcanvas', function () {
        document.getElementById("search-form").focus();
      });
    }
  }

  counterUp = () => {
    const Waypoint = window.Waypoint; // must access it this way
    const counters = document.querySelectorAll(".counter");

    counters.forEach((el) => {
      new Waypoint({
        element: el,
        handler: function () {
          counterUp(el, {
            duration: 1000,
            delay: 50,
          });
          this.destroy();
        },
        offset: 'bottom-in-view',
      });
    });
  };


  svgInject = () => {
    // Optional: global config
    SVGInject.setOptions({
      onFail: function (img, svg) {
        img.classList.remove('svg-inject');
      }
    });

    // Inject once DOM is ready
    const svgs = document.querySelectorAll('img.svg-inject');
    if (svgs.length > 0) {
      SVGInject(svgs, {
        useCache: true,
      });
    }
  }




})();
