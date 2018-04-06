$(document).ready(function() {
    $("body").addClass("theme-black");
    $(".table").addClass("table-responsive");


    checkLoginPage();
});



function checkLoginPage() {
    if ($('#login > form').length !== 0) {
        $("body").addClass("login-page ls-closed");
        $(".content").addClass("login-box").removeClass(".content");
    }
}