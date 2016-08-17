$(document).ready(function () {
    
    $('.carousel-indicators li:first').addClass('active');
    $('.carousel-inner .item:first').addClass('active');
    
    var mq = window.matchMedia("only screen and (min-width: 780px)");
    
    if (mq.matches){
        
        $('ul.nav li.dropdown, ul.nav li.dropdown-submenu').hover(function() {
            $(this).find(' > .dropdown-menu').stop(true, true).fadeIn(200);
        }, function() {
            $(this).find(' > .dropdown-menu').stop(true, true).fadeOut(200);
        });
    }
    
    var ab = window.matchMedia("only screen and (max-width: 480px)");
    if (ab.matches){
        
        $('#about').removeClass('col-xs-6');
        $('#about').addClass('col-md-6')
        
    }
    
});