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
        anchors:['kingscode', 'yarno', 'collin', 'contact'],
        navigation: true,
        navigationPosition: 'right',
        navigationTooltips: ['KingsCode', 'Yarno', 'Collin' , 'Contact'],
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

        lazyLoading: false,

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
                crownAnimationEnter()
                yarnoAnimationLeave()
                collinAnimationLeave()
                contactAnimationLeave()
        	}

            if(anchorLink == 'yarno'){
                yarnoAnimationEnter();
                collinAnimationLeave();
                contactAnimationLeave()
        	}

            if(anchorLink == 'collin'){
                collinAnimationEnter()
                yarnoAnimationLeave()
                contactAnimationLeave()
        	}

          if(anchorLink == 'contact'){
              contactAnimationEnter()
              collinAnimationLeave()
              yarnoAnimationLeave()
        }

        }
    });
}

function crownAnimationEnter(){
    var crown = $('.crown');

    crown.removeClass(hidden).addClass('slideInDown');

    setTimeout(function(){
      crown.removeClass('slideInDown');
      crown.addClass('hover');
      crown.addClass('infinite');
    }, 1200);
}

var yarno = $('.yarno-animate');
var linksy = $('.link-animate-yarno');

var collin = $('.collin-animate');
var linksc = $('.link-animate-collin');

var contact = $('.contact-animate');
var contact_button = $('.contact-button');

function yarnoAnimationEnter(){

    yarno.removeClass(hidden).addClass('slideInLeft');
    linksy.removeClass(hidden);
    linksy.addClass('slideInLeft');

}

function yarnoAnimationLeave(){

    yarno.addClass(hidden).removeClass('slideInLeft');
    linksy.addClass(hidden).removeClass('slideInLeft');
}

function collinAnimationEnter(){

    collin.removeClass(hidden).addClass('slideInRight');
    linksc.removeClass(hidden);
    linksc.addClass('slideInRight');

}

function collinAnimationLeave(){

    collin.addClass(hidden).removeClass('slideInRight');
    linksc.addClass(hidden).removeClass('slideInRight');
}

function contactAnimationEnter(){

    contact.removeClass(hidden).addClass('slideInUp');

    setTimeout(function(){
      contact_button.removeClass(hidden).addClass('slideInUp');
    }, 500);
}

function contactAnimationLeave(){

    contact.addClass(hidden).removeClass('slideInUp');
    contact_button.addClass(hidden).removeClass('slideInUp');

}
