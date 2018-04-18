$(function() {

    $("body").addClass("theme-black");
    $(".table").addClass("table-responsive");
    checkMobile();

    checkLoginPage();
    $(window).resize(function() {
        checkMobile();
    });
});

$(document).ready(function() {
    $(".nav-collapse").addClass("collapse");
});
/*
$(".btn-navbar").click(function() {
    $(this).toggleClass("collapsed");
    $(".nav-collapse").toggleClass("in").css("height", "auto");
});
*/


$(".navbar-header .bars").click(function() {

    if ($('.navbar-collapse').hasClass('in')) {
        $(this).removeClass('in').css("height", "0");
    } else {
        $(this).addClass('in').css("height", "auto");
    }

});


function checkLoginPage() {
    if ($('#login > form').length !== 0) {
        $("body").addClass("login-page ls-closed");
        $(".content").addClass("login-box").removeClass(".content");
    }
}


/* Set the width of the side navigation to 250px and the left margin of the page content to 250px */
function openNav() {
    $("#mySidenav").css("width", "250px");
    $("#main").css("margin-left", "250px");
}

/* Set the width of the side navigation to 0 and the left margin of the page content to 0 */
function closeNav() {
    $("#mySidenav").css("width", "0");
    $("#main").css("margin-left", "0");
}


function checkMobile() {
    var winW = $(document).width();
    console.log(winW);
    if (winW <= 767) {
        // $('.nav').addClass('hiddenRight').addClass('collapseable');
        $('.nav-collapse').addClass('collapse');

    } else {
        //  $('.nav').removeClass('hiddenRight').removeClass('collapseable');
        $('.nav-collapse').removeClass('collapse');
    }

}