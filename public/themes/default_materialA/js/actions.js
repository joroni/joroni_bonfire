$(function() {
    skinChanger();
    activateNotificationAndTasksScroll();

    setSkinListHeightAndScroll(true);
    setSettingListHeightAndScroll(true);
    $(window).resize(function() {
        setSkinListHeightAndScroll(false);
        setSettingListHeightAndScroll(false);
    });

    $("body").addClass("theme-red");
    $(".table").addClass("table-responsive");
    /* $(".navbar-header .bars, .overlay").click(function() {
         $('body').toggleClass('rs-closed');
         // $(".nav").toggleClass("hiddenRight");
     });*/
    $("input, textarea, select").addClass("form-control");
    $(".control-group").addClass("form-group").removeClass("control-group");
    $(".span12").addClass("col-sm-12").removeClass("span12");
    $(".span6").addClass("col-sm-12").removeClass("span6");
    var textBasedInput = $(".form-group .controls input, .form-group .controls textarea");
    $(textBasedInput).parent().wrapInner("<div class='form-line'></div>");

    labelToPlaceHolder();


    focusHighlight();

    checkLoginPage();


});


function focusHighlight() {
    /* setTimeout(function() {

         $(".form-line").each(function() {
             $(this).removeClass("focused");

         });
     }, 2000);*/
    $(".form-control").focus(function() {
        $(this).parent().addClass("focused");
    });

    $(".form-control").focusout(function() {
        $(this).parent().removeClass("focused");
    });
}

function labelToPlaceHolder() {
    $("form :input").each(function(index, elem) {
        var eId = $(elem).attr("id");
        var label = null;
        if (eId && (label = $(elem).parents("form").find("label[for=" + eId + "]")).length == 1) {
            console.log(eId);
            $(elem).attr("placeholder", $(label).html());
            $(label).remove();
        }
    });
}


function checkMobile() {
    var winW = $(document).width();
    console.log(winW);
    if (winW <= 800) {
        // $('.nav').addClass('hiddenRight').addClass('collapseable');
        $('.navbar-header .bars').removeClass('hidden');

    } else {
        //  $('.nav').removeClass('hiddenRight').removeClass('collapseable');
        $('.navbar-header .bars').addClass('hidden');
    }

}

function checkLoginPage() {
    if ($('#login > form').length !== 0) {
        $("body").addClass("login-page ls-closed");
        $(".container").addClass("login-box").removeClass("container");
    }
}





//Skin changer
function skinChanger() {
    $('.right-sidebar .demo-choose-skin li').on('click', function() {
        var $body = $('body');
        var $this = $(this);

        var existTheme = $('.right-sidebar .demo-choose-skin li.active').data('theme');
        $('.right-sidebar .demo-choose-skin li').removeClass('active');
        $body.removeClass('theme-' + existTheme);
        $this.addClass('active');

        $body.addClass('theme-' + $this.data('theme'));
    });
}

//Skin tab content set height and show scroll
function setSkinListHeightAndScroll(isFirstTime) {
    var height = $(window).height() - ($('.navbar').innerHeight() + $('.right-sidebar .nav-tabs').outerHeight());
    var $el = $('.demo-choose-skin');

    if (!isFirstTime) {
        $el.slimScroll({ destroy: true }).height('auto');
        $el.parent().find('.slimScrollBar, .slimScrollRail').remove();
    }

    $el.slimscroll({
        height: height + 'px',
        color: 'rgba(0,0,0,0.5)',
        size: '6px',
        alwaysVisible: false,
        borderRadius: '0',
        railBorderRadius: '0'
    });
}

//Setting tab content set height and show scroll
function setSettingListHeightAndScroll(isFirstTime) {
    var height = $(window).height() - ($('.navbar').innerHeight() + $('.right-sidebar .nav-tabs').outerHeight());
    var $el = $('.right-sidebar .demo-settings');

    if (!isFirstTime) {
        $el.slimScroll({ destroy: true }).height('auto');
        $el.parent().find('.slimScrollBar, .slimScrollRail').remove();
    }

    $el.slimscroll({
        height: height + 'px',
        color: 'rgba(0,0,0,0.5)',
        size: '6px',
        alwaysVisible: false,
        borderRadius: '0',
        railBorderRadius: '0'
    });
}

//Activate notification and task dropdown on top right menu
function activateNotificationAndTasksScroll() {
    $('.navbar-right .dropdown-menu .body .menu').slimscroll({
        height: '254px',
        color: 'rgba(0,0,0,0.5)',
        size: '4px',
        alwaysVisible: false,
        borderRadius: '0',
        railBorderRadius: '0'
    });
}

//Google Analiytics ======================================================================================
/*addLoadEvent(loadTracking);
var trackingId = 'UA-30038099-6';

function addLoadEvent(func) {
    var oldonload = window.onload;
    if (typeof window.onload != 'function') {
        window.onload = func;
    } else {
        window.onload = function () {
            oldonload();
            func();
        }
    }
}

function loadTracking() {
    (function (i, s, o, g, r, a, m) {
        i['GoogleAnalyticsObject'] = r; i[r] = i[r] || function () {
            (i[r].q = i[r].q || []).push(arguments)
        }, i[r].l = 1 * new Date(); a = s.createElement(o),
        m = s.getElementsByTagName(o)[0]; a.async = 1; a.src = g; m.parentNode.insertBefore(a, m)
    })(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');

    ga('create', trackingId, 'auto');
    ga('send', 'pageview');
}*/
//========================================================================================================