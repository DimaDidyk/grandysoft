jQuery(document).ready(function ($) {

    // header scrolling class trigger
    $(window).scroll(function() {
        let scroll = $(window).scrollTop();
        if (scroll >= 200) {
            $('#masthead').addClass('scrolling');
        } else {
            $('#masthead').removeClass('scrolling');
        }
    });


    let formSelector = '.placeholder-animate input, .placeholder-animate textarea';
    $(formSelector).on('keyup',function(e){
        // e.which == 9
        if($(this).val() == '' && e.which !== 9){
            $('.placeholder-animate[for='+$(this).attr('id')+'] .placeholder').removeClass('active');
        }else{
            $('.placeholder-animate[for='+$(this).attr('id')+'] .placeholder').addClass('active');
        }
    });
    $(formSelector).on('focus',function(){
        $('.placeholder-animate[for='+$(this).attr('id')+'] .placeholder').addClass('active');
    });
    $(formSelector).on('focusout',function(){
        // console.log('out', $('.placeholder-animate[for=' + $(this).attr('id') + '] .placeholder'))
        if($(this).val() == '') {
            $('.placeholder-animate[for=' + $(this).attr('id') + '] .placeholder').removeClass('active');
        }
    });


    // OVERVIEW animation for text
    let overviewElements = $('#home-overview .animate-text');
    let first = overviewElements.first();
    let currentElement = first;
    let prevElement = first;
    setInterval(function () {
        prevElement = currentElement;
        currentElement = currentElement.next();
        if( currentElement.length === 0 ){
            currentElement = first;
        }
        prevElement.animate({
            opacity: 0,
        }, 1000, function() {
        });
        currentElement.animate({
            opacity: 1,
        }, 1000, function() {
        });
    }, 5000);


    // load optimizations
    setTimeout(function () {
        $('iframe').each(function() {
            if( $(this).attr('lazy-src') ){
                $(this).attr('src', $(this).attr('lazy-src') );
            }
        });
    },1200);

    if( $('body').hasClass('single-work') ){
        async function playVideo() {
            try {
                await videoElem.play();
            } catch(err) {
                console.log(err);
            }
        }
        let videoElem = document.getElementById("portfolio-video");
        $(window).on('wheel', function(e) {
            let deltaY = e.originalEvent.deltaY;
            if( deltaY >0 ){
                $('.portfolio-banner').addClass('show-video');
                playVideo();
            }else{
                $('.portfolio-banner').removeClass('show-video');
                videoElem.pause();
            }
        });
    }

});
