/*!
* Start Bootstrap - Grayscale v7.0.4 (https://startbootstrap.com/theme/grayscale)
* Copyright 2013-2021 Start Bootstrap
* Licensed under MIT (https://github.com/StartBootstrap/startbootstrap-grayscale/blob/master/LICENSE)
*/
//
// Scripts
//
function topFunction() {
    document.documentElement.scrollTop = 0;
}

window.addEventListener('DOMContentLoaded', event => {
    var app = document.getElementById('nameJOUBERT');

    var typewriter = new Typewriter(app, {
        strings: ["JOUBERT", "TRISTAN"],
        autoStart:true,
        wrapperClassName: 'test',
    });
    typewriter.typeString('JOUBERT TRISTAN')
        .stop()
        .start();

    /* document.getElementById('jsb').onclick = function() {
        const jsb = document.body.querySelector('.jsbutton');
        jsb.classList.remove('jsbutton');
        document.getElementById('jsb').classList.add('jsbuttonClick')
    }; */

    var app = document.getElementById('tholdi');

    var typewriter = new Typewriter(app, {
        strings: ["Tholdi"],
        autoStart:true,
        wrapperClassName: 'test',
    });
    typewriter.typeString('Tholdi')
        .stop()
        .start();

    var app = document.getElementById('mdv');

    var typewriter = new Typewriter(app, {
        strings: ["Le mouton des villes"],
        autoStart:true,
        wrapperClassName: 'test',
    });
    typewriter.typeString('Le mouton des villes')
        .stop()
        .start();

    var app = document.getElementById('PF');

    var typewriter = new Typewriter(app, {
        strings: ["Portfolio"],
        autoStart:true,
        wrapperClassName: 'test',
    });
    typewriter.typeString('Portefolio')
        .stop()
        .start();
    
    var app = document.getElementById('sso');

    var typewriter = new Typewriter(app, {
        strings: ["SSO"],
        autoStart:true,
        wrapperClassName: 'test',
    });
    typewriter.typeString('SSO')
        .stop()
        .start();
    
    var app = document.getElementById('SP');

    var typewriter = new Typewriter(app, {
        strings: ["SuperComptables"],
        autoStart:true,
        wrapperClassName: 'test',
    });
    typewriter.typeString('SuperComptables')
        .stop()
        .start();

    var app = document.getElementById('tholdiAndroid');

    var typewriter = new Typewriter(app, {
        strings: ["Tholdi Android"],
        autoStart:true,
        wrapperClassName: 'test',
    });
    typewriter.typeString('Tholdi Android')
        .stop()
        .start();

    var app = document.getElementById('moveDiv');

    var typewriter = new Typewriter(app, {
        strings: ["Move a div !"],
        autoStart:true,
        wrapperClassName: 'test',
    });
    typewriter.typeString('Move a div !')
        .stop()
        .start();
    


    // Navbar shrink function
    var navbarShrink = function () {
        const navbarCollapsible = document.body.querySelector('#mainNav');
        const linkedin = document.body.querySelector('#linkedin');
        const mail = document.body.querySelector('#mail');
        const git = document.body.querySelector('#git');
        var mybutton = document.getElementById("myBtn");
        if (!navbarCollapsible) {
            return;
        }
        if (window.scrollY === 0) {
            navbarCollapsible.classList.remove('navbar-shrink')
            linkedin.classList.remove('network')
            mail.classList.remove('network')
            git.classList.remove('network')
            mybutton.style.display = "none"
        } else {
            navbarCollapsible.classList.add('navbar-shrink')
            linkedin.classList.add('network')
            mail.classList.add('network')
            git.classList.add('network')
            mybutton.style.display = "block"
        }

    };

    // Shrink the navbar
    navbarShrink();

    // Shrink the navbar when page is scrolled
    document.addEventListener('scroll', navbarShrink);

    // Activate Bootstrap scrollspy on the main nav element
    const mainNav = document.body.querySelector('#mainNav');
    if (mainNav) {
        new bootstrap.ScrollSpy(document.body, {
            target: '#mainNav',
            offset: 74,
        });
    };

    // Collapse responsive navbar when toggler is visible
    const navbarToggler = document.body.querySelector('.navbar-toggler');
    const responsiveNavItems = [].slice.call(
        document.querySelectorAll('#navbarResponsive .nav-link')
    );
    responsiveNavItems.map(function (responsiveNavItem) {
        responsiveNavItem.addEventListener('click', () => {
            if (window.getComputedStyle(navbarToggler).display !== 'none') {
                navbarToggler.click();
            }
        });
    });

    const mouton =  document.querySelectorAll('.videoMouton')
    for(let i = 0; i <= mouton.length; i++){
        mouton[i].addEventListener('mouseenter',function(e) {
            mouton[i].play()
        })
        mouton[i].addEventListener('mouseout',function(e) {
            mouton[i].pause()
            mouton[i].currentTime = 0
        })
    }

});


