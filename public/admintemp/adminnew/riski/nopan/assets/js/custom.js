/*
=========================================
|                                       |
|           Scroll To Top               |
|                                       |
=========================================
*/ 
$('.scrollTop').click(function() {
    $("html, body").animate({scrollTop: 0});
});

/*
=========================================
|                                       |
|       Control Sidebar Scroll Script   |
|                                       |
=========================================
*/

var hRe = $(".tasks").height();
var aRe = $("aside.control-sidebar").height();

var winHei = $(window).height();


$(".control-sidebar").mCustomScrollbar({
    advanced:{
    updateOnContentResize: true
    },
    theme: "minimal"
});


/*
=========================================
|                                       |
|      Notification Dropdown Scroll     |
|                                       |
=========================================
*/ 

$(".nav-item.notification-dropdown .notification-list").mCustomScrollbar({
    advanced:{
        updateOnContentResize: true
    },
    theme: "minimal",
    dir: "rtl",
    setHeight: 290
});

$('.navbar .dropdown.notification-dropdown > .dropdown-menu, .navbar .dropdown.message-dropdown > .dropdown-menu ').click(function(e) {
    e.stopPropagation();
});

$(window).on('resize', function(event) {
    $('.control-sidebar .tab-content #feeds-tab').mCustomScrollbar("update");
});

/*
=========================================
|                                       |
|       panels cross function.js        |
|                                       |
=========================================
*/

$(function() {
     $('.js-cancel').on('click', function(c){
        $(this).parents('#cancel-row').fadeOut('slow', function(c){
        });
    }); 
});

/*
=========================================
|                                       |
|       Multi-Check checkbox            |
|                                       |
=========================================
*/

function checkall(clickchk, relChkbox) {

    var checker = $('#' + clickchk);
    var multichk = $('.' + relChkbox);


    checker.click(function () {
        multichk.prop('checked', $(this).prop('checked'));
    });    
}

/*
=========================================
|                                       |
|           Widget Collapse             |
|                                       |
=========================================
*/

function collapse(widgetIndentity) {
    var panel = 'panel';
    var card = 'card';

    if (widgetIndentity === panel) {
        $('.js-collapse').on('click', function(event) {
            event.preventDefault();
            $(this).parent().parent().parent().parent().find('.panel-collapse').slideToggle('slow');
        });
    } else if (widgetIndentity === card) {
        console.log('currently in progress');
    }
}

/*
=========================================
|                                       |
|           Widget Reload               |
|                                       |
=========================================
*/

function reload(widgetIndentity) {

    var panel = 'panel';
    var card = 'card';

    if (widgetIndentity === panel) {
        $('.js-refresh').on('click', function() {
            var block = $('.panel-collapse');
            $(block).block({ 
                message: '<i class="flaticon-reload-line spin"></i>',
                timeout: 2000, //unblock after 2 seconds
                overlayCSS: {
                    backgroundColor: '#000',
                    opacity: 0.8,
                    cursor: 'wait'
                },
                css: {
                    border: 0,
                    color: '#fff',
                    padding: 0,
                    backgroundColor: 'transparent'
                }
            });
        });
    } else if (widgetIndentity === card) {

        $('.js-refresh').on('click', function() {
            var block = $('.reload-widget-area');
            $(block).block({ 
                message: '<i class="flaticon-reload-line spin"></i>',
                timeout: 2000, //unblock after 2 seconds
                overlayCSS: {
                    backgroundColor: '#000',
                    opacity: 0.8,
                    cursor: 'wait'
                },
                css: {
                    border: 0,
                    color: '#fff',
                    padding: 0,
                    backgroundColor: 'transparent'
                }
            });
        });

    }
}

/*
=========================================
|                                       |
|           MultiCheck                  |
|                                       |
=========================================
*/

/*
    This MultiCheck Function is recommanded for datatable
*/

function multiCheck(tb_var) {
    tb_var.on("change", ".chk-parent", function() {
        var e=$(this).closest("table").find("td:first-child .child-chk"), a=$(this).is(":checked");
        $(e).each(function() {
            a?($(this).prop("checked", !0), $(this).closest("tr").addClass("active")): ($(this).prop("checked", !1), $(this).closest("tr").removeClass("active"))
        })
    }),
    tb_var.on("change", "tbody tr .new-control", function() {
        $(this).parents("tr").toggleClass("active")
    })
}

/*
=========================================
|                                       |
|           MultiCheck                  |
|                                       |
=========================================
*/

function checkall(clickchk, relChkbox) {

    var checker = $('#' + clickchk);
    var multichk = $('.' + relChkbox);


    checker.click(function () {
        multichk.prop('checked', $(this).prop('checked'));
    });    
}

/*
=========================================
|                                       |
|               Tooltips                |
|                                       |
=========================================
*/

$('.bs-tooltip').tooltip();

/*
=========================================
|                                       |
|               Popovers                |
|                                       |
=========================================
*/

$('.bs-popover').popover();


/*
================================================
|                                              |
|               Rounded Tooltip                |
|                                              |
================================================
*/

$('.t-dot').tooltip({
    template: '<div class="tooltip status rounded-tooltip" role="tooltip"><div class="arrow"></div><div class="tooltip-inner"></div></div>'
})

// Custom Dropdown

function cDropdown(e) {
  var dropdowns = document.getElementsByClassName("c-dropdown-content");
  for(var i = 0; i < dropdowns.length; i++) {
    dropdowns[i].classList.remove("show");
  }
  e.classList.toggle("show");
}

var classname = document.getElementsByClassName("c-dropbtn");

for (var i = 0; i < classname.length; i++) {
  classname[i].addEventListener("click", function() {
    cDropdown(this.nextElementSibling);
  });
}

$('.c-dropdown-item').on('click', function(event) {
    event.preventDefault();
    $(this).parent().removeClass('show');
});

// Close the dropdown menu if the user clicks outside of it

window.onclick = function(event) {
  if (!$(event.target).hasClass('c-dropbtn')) {

    var dropdowns = document.getElementsByClassName("c-dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }

}


/*
================================================
|            IE VERSION Dector                 |
================================================
*/

function GetIEVersion() {
  var sAgent = window.navigator.userAgent;
  var Idx = sAgent.indexOf("MSIE");

  // If IE, return version number.
  if (Idx > 0) 
    return parseInt(sAgent.substring(Idx+ 5, sAgent.indexOf(".", Idx)));

  // If IE 11 then look for Updated user agent string.
  else if (!!navigator.userAgent.match(/Trident\/7\./)) 
    return 11;

  else
    return 0; //It is not IE
}


/*
================================================
|            Hide dropdown                     |
================================================
*/

// Note :- Fn hideDropdown is a fix for iOS where dropdown is not closed when clicked outside of the div i.e. on any element which lies on the document.
function hideDropdown($dropdown, $dropdownmenu, $removeClass) {
    var dropdown = $dropdown;
    var dropdownmenu = $dropdownmenu;
    var removeClass = $removeClass;

    if (dropdown != '' && dropdownmenu != '' && removeClass != '') {
        $(document).on("click touchend", function(){
            $(dropdown).removeClass(removeClass);
            $(dropdownmenu).removeClass(removeClass);
        });
    } else {
        console.error( 'Fn hideDropdown requires three parameters' );
        return;
    }
}



hideDropdown( '.app-dropdown, .message-dropdown, .notification-dropdown', '.app-dropdown .dropdown-menu, .message-dropdown .dropdown-menu, .notification-dropdown .dropdown-menu', 'show' );