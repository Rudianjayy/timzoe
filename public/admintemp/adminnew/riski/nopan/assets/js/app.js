var App = function() {
    var MediaSize = {
        xl: 1200,
        lg: 992,
        md: 991,
        sm: 576
    };
    var ToggleClasses = {
        headerhamburger: '.toggle-sidebar'
    };

    var Selector = {
        mainHeader: '.header.navbar',
        headerhamburger: '.toggle-sidebar',
        fixed: '.fixed-top',
        mainContainer: '.main-container',        
        sidebar: '#sidebar',
        sidebarContent: '#sidebar-content',
        sidebarStickyContent: '.sticky-sidebar-content',
        ariaExpandedTrue: '#sidebar [aria-expanded="true"]',
        ariaExpandedFalse: '#sidebar [aria-expanded="false"]',
        contentWrapper: '#content',
        contentWrapperContent: '.container',
        mainContentArea: '.main-content',
        mainFooter: '.theme-footer',
    };

    var categoryScroll = {
        onLoad: function(onLoadResolution) {

            if (onLoadResolution === 'def') {
                // console.log('def');

                var scrollToCategory = $(Selector.ariaExpandedTrue).parent().offset().top;

                var liMenuOuterHeight = $(Selector.ariaExpandedTrue).parent().children().closest('a').outerHeight();


                var body = $("html, body");
                body.stop().animate({scrollTop:scrollToCategory-liMenuOuterHeight}, 500, 'swing', function() {
                });
            }

            if (onLoadResolution === 'mob') {
                // console.log('mon');
                var childPos = $(Selector.ariaExpandedTrue).parent().offset();
                var parentPos = $('#sidebar').offset();
                var childOffset = {
                    top: childPos.top - parentPos.top,
                    left: childPos.left - parentPos.left
                }

                $("#sidebar").mCustomScrollbar('scrollTo', '-='+childOffset.top);
            }

        },
        default: function() {
            $('.menu-categories li > .collapse').not(':first').on('shown.bs.collapse', function(e){
                e.preventDefault();
                e.stopPropagation();

                // console.log(Selector.ariaExpandedTrue);
                var scrollToCategory = $(this).parent().offset().top;

                var liMenuOuterHeight = $(this).parent().children().closest('a').outerHeight();


                var body = $("html, body");
                body.stop().animate({scrollTop:scrollToCategory-liMenuOuterHeight}, 500, 'swing', function() {
                });

            });
        },
        mobile: function() {
            $('.menu-categories li > .collapse').on('shown.bs.collapse', function(e){

                e.preventDefault();
                e.stopPropagation();

                var childPos = $(this).parent().offset();
                var parentPos = $('#sidebar').offset();
                var childOffset = {
                    top: childPos.top - parentPos.top,
                    left: childPos.left - parentPos.left
                }

                $("#sidebar").mCustomScrollbar('scrollTo', '-='+childOffset.top);
            });
        }
    } 

    // Default Enabled

    var toggleFunction = {
        sidebar: function() {
            $('.sidebarCollapse').on('click', function (sidebar) {
                sidebar.preventDefault();
                $(Selector.mainContainer).toggleClass("sidebar-closed");
                $(Selector.mainHeader).toggleClass('expand-header');
                $(Selector.mainContainer).toggleClass("sbar-open");
                $('.overlay').toggleClass('show');
                $('html,body').toggleClass('sidebar-noneoverflow');
                $('footer .footer-section-1').toggleClass('f-close');
            });
        },
        CS: function() {
            $(".toggle-control-sidebar").click(function(B) {
                B.preventDefault();
                $(".control-sidebar").toggleClass("control-sidebar-open");
                $('.cs-overlay').toggleClass('show');
                $('html,body').toggleClass('cs-noneoverflow');
            });
        },
        overlay: function() {
            $('#dismiss, .overlay, cs-overlay').on('click', function () {
                // hide sidebar
                $(Selector.mainContainer).addClass('sidebar-closed');
                $(Selector.mainContainer).removeClass('sbar-open');
                // hide overlay
                $('.overlay').removeClass('show');
                $('html,body').removeClass('sidebar-noneoverflow');
            });
        },
        CSoverlay: function() {
            $('.cs-overlay').on('click', function () {
                $(this).removeClass('show'); 
                $('html,body').removeClass('cs-noneoverflow');
                $('.control-sidebar').removeClass('control-sidebar-open'); 
            })
        },
        deactivateScroll: function() {
            $('#sidebar').mCustomScrollbar("destroy");
        },
    }

    var mobileFunctions = {
        activateScroll: function() {
            $("#sidebar").mCustomScrollbar({
                theme: "minimal",
                scrollInertia: 1000
            });
        },
    }

    var controlSidebar = {
        chk: function() {
            $(".chb").change(function() {
               $(".chb").prop('checked',false);
               $(this).prop('checked',true);
            });
        }
    }

    var _mobileResolution = {
        onRefresh: function() {
            var windowWidth = window.innerWidth;
            if ( windowWidth <= MediaSize.md ) {
                // console.log('On Mobile Refresh');
                categoryScroll.mobile()
                mobileFunctions.activateScroll();
            }
        },
        onResize: function() {
            $(window).on('resize', function(event) {
                event.preventDefault();
                var windowWidth = window.innerWidth;
                if ( windowWidth <= MediaSize.md ) {
                    // console.log(MediaSize.md);
                    mobileFunctions.activateScroll();
                    // console.log('On Mobile Resize');
                }
            });
        }
    }

    var _desktopResolution = {
        onRefresh: function() {
            var windowWidth = window.innerWidth;
            if ( windowWidth > MediaSize.md ) {
                toggleFunction.deactivateScroll();
                categoryScroll.default();
                // console.log('On Desktop Refresh');
            }
        },
        onResize: function() {
            $(window).on('resize', function(event) {
                event.preventDefault();
                var windowWidth = window.innerWidth;
                if ( windowWidth > MediaSize.md ) {
                    $('footer .footer-section-1').removeClass('f-close');
                    toggleFunction.deactivateScroll();
                    // console.log('On Desktop Resize');
                }
            });
        }
    }

    function sidebarFunctionality() {
        function sidebarCloser() {

            if (window.innerWidth <= 991 ) {
                $("#container").addClass("sidebar-closed");
                $('.overlay').removeClass('show');
            } else if (window.innerWidth > 991 ) {
                $("#container").removeClass("sidebar-closed");
                $(".navbar").removeClass("expand-header");
                $('.overlay').removeClass('show');
                $('#container').removeClass('sbar-open');
            }

        }

        function sidebarMobCheck() {
            if (window.innerWidth <= 991 ) {

                if ( $('.main-container').hasClass('sbar-open') ) {
                    return;
                } else {
                    sidebarCloser()
                }
            } else if (window.innerWidth > 991 ) {
                sidebarCloser();
            }
        }

        sidebarCloser();

        $(window).resize(function(event) {
            sidebarMobCheck();
        });
    }


    return {
        init: function() {
            
            controlSidebar.chk();
            // Sidebar fn
            toggleFunction.sidebar();
            // Control Sidebar fn
            toggleFunction.CS();
            // Overlay fn
            toggleFunction.overlay();
            // CSoverlay
            toggleFunction.CSoverlay();
            // Desktop Resoltion fn
            _desktopResolution.onRefresh();
            _desktopResolution.onResize();
            // Mobile Resoltion fn
            _mobileResolution.onRefresh();
            _mobileResolution.onResize();
            sidebarFunctionality();

        },
    }

}();
