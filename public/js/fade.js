$(window).on("load",function() {
    var windowBottom = $(window).scrollTop() + $(window).innerHeight();
    function fade(pageLoad) {
        var min = 0.3;
        var max = 1.0;
        var threshold = 0.01;

        $(".fade").each(function() {
            /* Check the location of each desired element */
            var objectBottom = $(this).offset().top + $(this).outerHeight();

            /* If the element is completely within bounds of the window, fade it in */
            if (objectBottom < windowBottom) { //object comes into view (scrolling down)
                if ($(this).css("opacity")<=min+threshold || pageLoad) {$(this).fadeTo(500,max);}
            } else { //object goes out of view (scrolling up)
                if ($(this).css("opacity")>=max-threshold || pageLoad) {$(this).fadeTo(500,min);}
            }
        });
    } fade(true); //fade elements on page-load
    $(window).scroll(function(){fade(false);}); //fade elements on scroll

        // $('.method:eq(0)').delay(1000).animate({opacity: 1}, 'slow', function () {
        //     $(this).find('h4').css('background-color', '#B5C3D5');
        // });
        // $('.method:eq(1)').delay(2000).animate({opacity: 1}, 'slow', function () {
        //     $(this).find('h4').css('background-color', '#B5C3D5');
        // });
        // $('.method:eq(2)').delay(3000).animate({opacity: 1}, 'slow', function () {
        //     $(this).find('h4').css('background-color', '#B5C3D5');
        // });
        // $('.method:eq(3)').delay(4000).animate({opacity: 1}, 'slow', function () {
        //     $(this).find('h4').css('background-color', '#B5C3D5');
        // });
        // $('.method:eq(4)').delay(5000).animate({opacity: 1}, 'slow', function () {
        //     $(this).find('h4').css('background-color', '#B5C3D5');
        // });

});
