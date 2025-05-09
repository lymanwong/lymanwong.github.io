(function($) {

    "use strict";

    $('body').scrollspy({
        target: '.navbar-fixed-top',
        offset: 60
    });

    $('#topNav').affix({
        offset: {
            top: 200
        }
    });

    new WOW().init();

    $('a.page-scroll').bind('click', function(event) {
        var $ele = $(this);
        $('html, body').stop().animate({
            scrollTop: ($($ele.attr('href')).offset().top - 60)
        }, 1450, 'easeInOutExpo');
        event.preventDefault();
    });

    $('.navbar-collapse ul li a').click(function() {
        /* always close responsive nav after click */
        $('.navbar-toggle:visible').click();
    });

    $('#galleryModal').on('show.bs.modal', function(e) {
        $('#galleryImage').attr("src", $(e.relatedTarget).data("src"));
    });

    // Function to set the form action (after FORM_ID is available)
    function setFormAction(form, formId) {
        if (form && formId) {
            form.setAttribute('action', `https://formspree.io/f/${formId}`);
            console.log("Form action set with ID:", formId);
        } else {
            console.error("Form or Form ID is missing!");
            // Consider disabling the form or showing an error message to the user.
            $("#contactform").html("<p class='text-danger'>Form submission is currently unavailable. Please try again later.</p>");
        }
    }

    // document.head.appendChild(script);

    $('#seeMore').on('click', function() {
        $('.xtraRecos').slideToggle("slow");
    });

    $('#finv').on('click', function() {
        $('#mylink').attr('href', 'https://fuelinventory.onrender.com/');
    })

    $('#ors').on('click', function() {
        $('#mylink').attr('href', 'https://fuelorderstatus.onrender.com/');
    })

    $('#hnews').on('click', function() {
        $('#mylink').attr('href', 'https://www.endlessos.org/os-direct-download');
    })

    $('#pp').on('click', function() {
        $('#mylink').attr('href', 'http://udacity-4585057.hs-sites.com/');
    })

    $('#ny').on('click', function() {
        $('#mylink').attr('href', 'http://nytapi.herokuapp.com/');
    })

    $('#angular').on('click', function() {
        $('#mylink').attr('href', 'https://lyman-wong-angular.herokuapp.com/#/');
    })

    $('#railspin').on('click', function() {
        $('#mylink').attr('href', 'https://vrypinteresting.herokuapp.com/');
    })

    $('#emailt').on('click', function() {
        $('#mylink').attr('href', 'https://github.com/lymanwong/email-templates');
    })

    $('#droid').on('click', function() {
        $('#mylink').attr('href', 'https://github.com/lymanwong/Android-Projects');
    })

    $('#soundplay').on('click', function() {
        $('#soundmsg').hide();
    })

})(jQuery);

particlesJS("particles-js", {
    "particles": {
        "number": {
            "value": 137,
            "density": {
                "enable": true,
                "value_area": 800
            }
        },
        "color": {
            "value": "#ffffff"
        },
        "shape": {
            "type": "polygon",
            "stroke": {
                "width": 0,
                "color": "#000000"
            },
            "polygon": {
                "nb_sides": 5
            },
            "image": {
                "src": "img/github.svg",
                "width": 100,
                "height": 100
            }
        },
        "opacity": {
            "value": 0.5,
            "random": false,
            "anim": {
                "enable": false,
                "speed": 1,
                "opacity_min": 0.1,
                "sync": false
            }
        },
        "size": {
            "value": 3,
            "random": true,
            "anim": {
                "enable": false,
                "speed": 40,
                "size_min": 0.1,
                "sync": false
            }
        },
        "line_linked": {
            "enable": true,
            "distance": 150,
            "color": "#ffffff",
            "opacity": 0.4,
            "width": 1
        },
        "move": {
            "enable": true,
            "speed": 6.22388442605866,
            "direction": "none",
            "random": true,
            "straight": false,
            "out_mode": "bounce",
            "bounce": false,
            "attract": {
                "enable": false,
                "rotateX": 600,
                "rotateY": 1200
            }
        },
        "interactivity": {
            "detect_on": "canvas",
            "events": {
                "onhover": {
                    "enable": true,
                    "mode": "repulse"
                },
                "onclick": {
                    "enable": true,
                    "mode": "push"
                }
            },
            "modes": {
                "grab": {
                    "distance": 400,
                    "line_linked": {
                        "opacity": 1
                    }
                },
                "bubble": {
                    "distance": 400,
                    "size": 40,
                    "duration": 2,
                    "opacity": 8,
                    "speed": 3
                },
                "repulse": {
                    "distance": 200,
                    "duration": 0.4
                },
                "push": {
                    "particles_nb": 4
                },
                "remove": {
                    "particles_nb": 2
                }
            }
        },
        "retina_detect": true
    }
})
