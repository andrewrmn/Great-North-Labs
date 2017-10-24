// ---------------------------------------------------------------------
// Global JavaScript
// Authors: Andrew Ross & a little help from my friends
// ---------------------------------------------------------------------

var AROSSMN = AROSSMN || {};

(function($, APP) {

    $(function() {
        APP.BrowserDeviceDetection.init();
        APP.ClickFunciton.init();
        APP.ClickGroup.init();
        APP.Tabs.init();
        APP.ScrollTo.init();
        APP.CatchOnTop.init();
        APP.DetectViewPort.init();
        APP.Carousel.init();
    });

// ---------------------------------------------------------------------
// Browser and Feature Detection
// ---------------------------------------------------------------------

APP.BrowserDeviceDetection = {
    userAgent: undefined,
    $html: undefined,

    init: function() {
        APP.Features = APP.Features || {};
        this.userAgent = navigator.userAgent.toLowerCase();
        this.$html = $('html');
        this.detectJs();
        this.noTouch();
        this.isTouch();
        this.isNewIE();
        this.isIE();
    },

    detectJs: function() {
        $(document).ready(function() {
            $('body').addClass('page-loaded');
            $('.js-section-full').css({'height': $(window).height() });
        });

        $(window).resize(function(){
            $('.js-section-full').css({'height': $(window).height() });
        });
    },

    noTouch: function() {
        if ( ! ('ontouchstart' in window) ) {
            APP.Features.noTouch = false;
            this.$html.addClass('noTouch');
            return;
        }
        APP.Features.noTouch = false;
    },

    isTouch: function() {
        if ( 'ontouchstart' in window ) {
            APP.Features.isTouch = false;
            this.$html.addClass('isTouch');
            return;
        }
        APP.Features.isTouch = false;
    },

    isNewIE: function() {
        if (document.documentMode || /Edge/.test(navigator.userAgent)) {
            if(navigator.appVersion.indexOf('Trident') === -1) {
                this.$html.addClass('isEDGE');
            } else {
                this.$html.addClass('isIE isIE11');
            }
            return;
        }

        APP.Features.isNewIE = false;
    },

    isIE: function() {
        if( navigator.appVersion.indexOf("MSIE") !== -1 ) {
            this.$html.addClass('isIE');
            APP.Features.isIE = true;
            return;
        }
        APP.Features.isIE = false;
    }
};



// ---------------------------------------------------------------------
// Click Functions
// Uses data-target & data-addClass to target modules & optionally add
// a class to the body
// ---------------------------------------------------------------------

APP.ClickFunciton = {

    init: function() {
        if( $('*[data-click-target]').length ) {
            this.bind();
        } else {
            return;
        }
    },

    bind: function() {

        $('*[data-click-target]').on('click touchstart:not(touchmove)', function() {

            var trigger = $(this).attr('data-click-target'),
                bc = $(this).attr('data-click-bodyClass'),
                oc = $(this).attr('data-click-class'),
                target = $("#" + trigger);

            // Check for custom class
            if( $(this).attr('data-click-class') ) {
                if( target.hasClass(oc) ) {
                    target.removeClass(oc);
                } else {
                   target.addClass(oc);
                }
            } else {
                if( target.hasClass('is-active') ) {
                    target.removeClass('is-active');
                } else {
                   target.addClass('is-active');
                }
            }

            // Check for additional body class
            if( $(this).attr('data-click-bodyClass') ) {
                if( $('body').hasClass(bc) ) {
                    $('body').removeClass(bc);
                } else {
                   $('body').addClass(bc);
                }
            }
        });
    }
};



// ---------------------------------------------------------------------
// Detect when an element is in the viewport
// ---------------------------------------------------------------------

APP.DetectViewPort = {

    init: function() {
        if( $('*[data-animate-in]').length ) {
            this.bind();
        } else {
            return;
        }
    },

    bind: function() {
        $.fn.isOnScreen = function(){
            var win = $(window);
            var viewport = {
                top : win.scrollTop(),
                left : win.scrollLeft()
            };
            viewport.right = viewport.left + win.width();
            viewport.bottom = viewport.top + win.height();
            var bounds = this.offset();
            bounds.right = bounds.left + this.outerWidth();
            bounds.bottom = bounds.top + this.outerHeight();
            return (!(viewport.right < bounds.left || viewport.left > bounds.right || viewport.bottom < bounds.top || viewport.top > bounds.bottom));
        };

        function changeState() {
            var obj = $('*[data-animate-in]');
            obj.each(function() {
                if ( $(this).isOnScreen() ) {
                    $(this).addClass('in-view');
                } else {
                    $(this).removeClass('in-view');
                }
            });
        }

        var w = $(window);

        w.load(function() {
            setTimeout(function() {
               changeState();
            }, 500);
        });


        w.on("resize scroll",function(){
            changeState();
        });
    }
};



// ---------------------------------------------------------------------
// Click Group
// Used for adding/ removing active classes on linked elements
// ---------------------------------------------------------------------

APP.ClickGroup = {

    init: function() {
        if( $('*[data-click-group]').length ) {
            this.bind();
        } else {
            return;
        }
    },

    bind: function() {

        $('*[data-click-group]').on('click touchstart:not(touchmove)', function() {

            var group = $(this).attr('data-click-group');

            $('*[data-click-group=' + group + ']').each(function() {
                $(this).removeClass('is-active');
            });

            $(this).addClass('is-active');

        });
    }
};



// ---------------------------------------------------------------------
// Tabs
// ---------------------------------------------------------------------

APP.Tabs = {

    init: function() {
        if( $('.tabs').length ) {
            this.bind();
        } else {
            return;
        }
    },

    bind: function() {

        var tab = $('.tabs .tab__bd');
        var activeTab = $('.tabs .is-active .tab__bd');

        function findActiveTab() {
            tab.each( function() {
                var tabParent = $(this).parent();

                if( tabParent.hasClass('is-active') ) {
                    $(this).slideDown();
                } else {
                    $(this).slideUp();
                }
            });
        }

        $(document).ready(function() {
            findActiveTab();
        });

        $('*[data-click-group]').on('click touchstart:not(touchmove)', function() {
            findActiveTab();
        });
    }
};



// ---------------------------------------------------------------------
// Scroll to
// Used for smooth scrolling to elements
// ---------------------------------------------------------------------

APP.ScrollTo = {

    init: function() {
        if( $('*[data-scroll-to]').length ) {
            this.bind();
        } else {
            return;
        }
    },

    bind: function() {

        $('*[data-scroll-to]').on('click touchstart:not(touchmove)', function() {

            var trigger = $(this).attr('data-scroll-to'),
                target = $("#" + trigger),
                ss = 1000, //scroll speed
                o = 0; // offset

            if( $(this).attr('data-scroll-speed') ) {
                ss = $(this).attr('data-scroll-speed');
            }

            if( $(this).attr('data-scroll-offset') ) {
                o = $(this).attr('data-scroll-offset');
            }

            $('html, body').animate({
                scrollTop: target.offset().top - o
            }, ss);
        });


    }
};



// ---------------------------------------------------------------------
// Stick to top
// When an element hits the top of the screen, stick to the top
// ---------------------------------------------------------------------

APP.CatchOnTop = {

    init: function() {
        if( $('*[data-is-sticky]').length ) {
            this.bind();
        } else {
            return;
        }
    },

    bind: function() {

        function detectPos() {

            $('*[data-is-sticky]').each(function() {
                var el = $(this);
                elHeight = el.find('.stickToTop').innerHeight();
                el.css( { 'height': elHeight } );
                xPos = el.offset().left;
                currentPos = el.offset().top;

                if ( $(window).scrollTop() > currentPos ) {
                    $(this).addClass('is-sticky');
                    $(this).find('.stickToTop').css( { 'left': xPos } );
                }
                else {
                    $(this).removeClass('is-sticky');
                    $(this).find('.stickToTop').css( { 'left': 'auto' } );
                }
            });
        }

        $(window).on("load resize scroll",function(){
            detectPos();
        });
    }
};


// ---------------------------------------------------------------------
// Slick Carousel
// http://kenwheeler.github.io/slick/
// ---------------------------------------------------------------------

APP.Carousel = {

    init: function() {
        if( $('.carousel').length ) {
            this.bind();
        } else {
            return;
        }
    },

    bind: function() {
        $('.carousel').slick({
            dots: true,
            speed: 600,
        });
    }
};


}(jQuery, AROSSMN));
