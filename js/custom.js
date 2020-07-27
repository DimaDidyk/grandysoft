jQuery(document).ready(function ($) {

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

})