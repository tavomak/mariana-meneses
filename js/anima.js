$(document).ready(function () {
    
    var hi = new Vivus('mm', {
        type: 'scenario',
        start: 'autostart'
    });
    
    setTimeout(function () {
        $('.pantalla').addClass('retire');
    }, 500);
    setTimeout(function () {
            $('body').addClass('initial');
            $('svg').removeClass('resize');
            $('#loader').addClass('white');
        }, 1500),
        setTimeout(function () {
            $('body').addClass('loaded');
        }, 2000);
});