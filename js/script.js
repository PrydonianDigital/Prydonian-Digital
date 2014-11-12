$(document).ready(function() {
    $('#fullpage').fullpage({
	    fixedElements: 'header, footer',
	    scrollBar: false,
	    verticalCentered: true,
        resize : true,
        responsive: 0,
        anchors: ['ComingSoon', 'Experience', 'Skills', 'Clients', 'More', 'Contact', 'Endorsements'],
        css3: true,
        navigation: true,
        easing: 'easeInQuart',
        easingcss3: 'ease',
        loopBottom: false,
        slidesNavigation: true,
        slidesNavPosition: 'bottom',
    });
});