//script variables
var hidden = 'd-none';

//on page load function (waits till the whole page is loaded)
window.onload = function(){
      window.document.body.onload = loaded(); // note removed parentheses
};

//initiate fullpage scrolling and reveal sections
function loaded(){

    $('.section, .active').removeClass('d-none').addClass('animated fadeIn');
    $('.section').removeClass('d-none').addClass('animated fadeIn');
    // $('.load-wrapper').addClass('animated fadeOut');

    $('#fullpage').fullpage({
        //Navigation
        menu: '#menu',
        lockAnchors: false,
        anchors:['kingscode', 'yarno', 'collin'],
        navigation: true,
        navigationPosition: 'right',
        navigationTooltips: ['KingsCode', 'Yarno', 'Collin'],
        showActiveTooltip: true,

        //Scrolling
        css3: true,
        scrollingSpeed: 700,
        autoScrolling: true,
        fitToSection: true,
        fitToSectionDelay: 1000,
        scrollBar: false,
        easing: 'easeInOutCubic',
        easingcss3: 'ease',
        loopBottom: false,
        loopTop: false,
        loopHorizontal: true,
        continuousVertical: false,
        continuousHorizontal: false,
        scrollHorizontally: false,
        interlockedSlides: false,
        dragAndMove: false,
        offsetSections: false,
        resetSliders: false,
        fadingEffect: false,
        scrollOverflow: false,
        scrollOverflowReset: false,
        scrollOverflowOptions: null,
        touchSensitivity: 15,
        normalScrollElementTouchThreshold: 5,
        bigSectionsDestination: null,

        //Accessibility
        keyboardScrolling: true,
        animateAnchor: true,
        recordHistory: true,

        //Design
        controlArrows: true,
        verticalCentered: true,
        parallax: false,
        parallaxOptions: {type: 'reveal', percentage: 62, property: 'translate'},

        //Custom selectors
        sectionSelector: '.section',
        slideSelector: '.slide',

        lazyLoading: true,

        //events
        afterLoad: function(anchorLink, index){

            var slideInLeft     = 'slideInLeft';
            var slideInRight    = 'slideInRight';
            var slideInUp       = 'slideInUp';
            var slideInDown     = 'slideInDown';
            var fadeIn          = 'fadeIn';
            var fadeInUp        = 'fadeInUp';
            var fadeInDown      = 'fadeInDown';
            var fadeInRight     = 'fadeInRight';
            var fadeInLeft      = 'fadeInLeft';
            var delay           = '500';

            if(anchorLink == 'kingscode'){
                yarnoAnimationLeave()
        	}

            if(anchorLink == 'yarno'){
                yarnoAnimationEnter();
        	}

            if(anchorLink == 'collin'){
                yarnoAnimationLeave()
        	}

        }
    });
}


function yarnoAnimationEnter(){
    var yarno = $('.yarno-animate');

    yarno.removeClass(hidden).addClass('slideInLeft');

}

function yarnoAnimationLeave(){
    var yarno = $('.yarno-animate');

    yarno.addClass(hidden).removeClass('slideInLeft');

}
