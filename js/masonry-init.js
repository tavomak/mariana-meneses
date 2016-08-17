$(window).on('load', function(){
    
    $('.contenedor').masonry({
        // options...
        itemSelector: '.columna',
        columnWidth: '.sizer',
        percentPosition: true
    });
    
}); //var $ = jQuery;