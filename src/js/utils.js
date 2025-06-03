export const isInViewport = (element) => {
    if (element.length) {
        let flag = false;
        element.each((_, el) => {
            const elementTop = $(el).offset().top;
            const elementBottom = elementTop + $(el).outerHeight();
            const viewportTop = $(window).scrollTop();
            const viewportBottom = viewportTop + $(window).height();

            if (elementBottom > viewportTop && elementTop < viewportBottom) {
                flag = true;
            }
        });

        return flag;
    }
}

export const isInViewportOffset = (element) => {
    if (element.length) {
        let flag = false;
        element.each((_, el) => {
            const elementTop = element.offset().top - 800;
            const elementBottom = elementTop + element.outerHeight();
            const viewportTop = $(window).scrollTop();
            const viewportBottom = viewportTop + $(window).height();

            if (elementBottom > viewportTop && elementTop < viewportBottom) {
                flag = true;
            }
        });
        return flag;
    }
}

export const inVP = (elm) => {
    if (isInViewport(elm) || isInViewportOffset(elm)) {
        return true;
    } else {
        return false;
    }
}

export const lazyLoad = (element) => {
    const scrollTop = window.pageYOffset;
    const win = $(window);
    element.each((index, e) => {
        var $this = $(e),
            src = $this.attr("data-src"),
            srcset = $this.attr("data-srcset"),
            tab = $this.attr("data-tab"),
            mobile = $this.attr("data-mobile");

        if (win.width() > 767 && win.width() <= 1024 && tab) {
            src = tab;
        } else if (win.width() < 768 && mobile) {
            src = mobile;
        }

        $this.addClass("inview");

        if ($this.hasClass("lazy-bg")) {
            $this
                .removeClass("lazy-bg lazy desk-lazy")
                .removeAttr("data-src")
                .css({ "background-image": "url(" + src + ")" });
        } else {
            if (mobile && $(window).width() < 768) {
                $this.removeClass("lazy desk-lazy").attr("src", mobile);
            } else {
                //$this.attr('srcset', srcset);
                $this.removeAttr("data-srcset").attr("srcset", srcset);
                //$this.removeClass('lazy').attr('src', src);
                $this
                    .removeClass("lazy desk-lazy")
                    .removeAttr("data-src")
                    .attr("src", src);
            }
        }

        $this.parent().removeClass("bg-dark");

        if ($this.parent().find(".spinner").length) {
            $this.parent().find(".spinner").remove();
        }
    });
}

export const importComponent = (element, classID) => {
    // if (element.length && !element.hasClass("init") && inVP(element)) { // for lazy loading
    if (element.length && !element.hasClass("init")) {
        import(
        /* webpackChunkName: "[request]" */ /* webpackMode: "lazy" */ `./components/${classID}`
        ).then(module => {
            new module.default();
        });
        element.addClass("init");
    }
};
// Debounce function to limit the rate of resize events
export const debounce = (func, delay) => {
    let timeoutId;

    return function () {
        const context = this;
        const args = arguments;

        clearTimeout(timeoutId);
        timeoutId = setTimeout(() => {
            func.apply(context, args);
        }, delay);
    };
};
// Media Queries
export const min1024 = window.matchMedia("(min-width: 1024px)");
export const min991 = window.matchMedia("(min-width: 991px)");
export const max1200 = window.matchMedia("(max-width: 1200px)");
export const max767 = window.matchMedia("(max-width: 767px)");
export const max375 = window.matchMedia("(max-width: 375px)");

