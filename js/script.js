$(document).ready(function() {
    $('#fullpage').fullpage({
	    fixedElements: 'header, footer',
	    scrollBar: false,
	    verticalCentered: true,
        resize : true,
        responsive: 0,
        anchors: ['ComingSoon', 'Experience', 'Clients', 'More', 'Contact'],
        css3: true,
        navigation: true,
        easing: 'easeInQuart',
        easingcss3: 'ease',
        loopBottom: false,
    });
});