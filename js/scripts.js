// these phrases will repeat
const phrases = [
    "ARRETADO! 😋",
    "COISADO! 😵",
    "ESTRIBADO! 🤑",
    "MARROMENO! 😑",
    "FELIZ PRA CARAMBA! 😁",
    "NA BAD! 😔",
    "DE BOAS! 😎",
    "TRANQUILHÃO! 🙂",
    "EMPOLGADÃO! 🤯",
    "NO PIQUE! 😉",
    "TENSO DE MAIS! 😨",
    "DE DAR NOJO! 😒",
    "P DA VIDA! 😤",
    "ZUERO! 🤪"
  ];

  const emoticons = [
    "ㅤ"
  ];
  
  // start with initial random phrase from the collection
  // Math.floor reduces float to integer
  let currentPhrase = Math.floor(Math.random() * (phrases.length - 1));
  let currentChar = 0;
  // this element has the typing line
  let typingLine = document.getElementById("typing");
  
  // type() the phrase char-by-char
  //
  function type() {
    // write sub-string to the element
    typingLine.textContent = phrases[currentPhrase].slice(0, ++currentChar);
  
    // continue to write until we run out of phrase-chars
    if (currentChar < phrases[currentPhrase].length) {
      // slow down the animation
      setTimeout(function () {
        // animates the changes to DOM
        requestAnimationFrame(type);
      }, 25);
    } else {
      // we ran out of phrase length
      // now wait 2 seconds
      // then call "erase" method to start erasing
      setTimeout(erase, 4000);
    }
  }
  
  // erase() characters one-by-one
  //
  function erase() {
    // reduce one char, assign to the element
    typingLine.textContent = phrases[currentPhrase].slice(0, --currentChar);
  
    // we still have more chars to erase
    if (currentChar > 0) {
      // pause 25ms, then animate the element rendering
      setTimeout(function () {
        requestAnimationFrame(erase);
      }, 25);
    } else {
      // we ran out of chars for current phrase
      // reset to first char
      currentChar = 0;
      // move to the next phrase
      // "%" ensures endless loop within phrases
      currentPhrase = (currentPhrase + 1) % phrases.length;
      // all erased? now start "typing" again
      typingLine.textContent = emoticons;
      setTimeout(type, 200);
    }
  }
  
  // start the first "typing"
  type();
  





/*!
* Start Bootstrap - Freelancer v7.0.7 (https://startbootstrap.com/theme/freelancer)
* Copyright 2013-2023 Start Bootstrap
* Licensed under MIT (https://github.com/StartBootstrap/startbootstrap-freelancer/blob/master/LICENSE)
*/
//
// Scripts
// 

window.addEventListener('DOMContentLoaded', event => {

    // Navbar shrink function
    var navbarShrink = function () {
        const navbarCollapsible = document.body.querySelector('#mainNav');
        if (!navbarCollapsible) {
            return;
        }
        if (window.scrollY === 0) {
            navbarCollapsible.classList.remove('navbar-shrink')
        } else {
            navbarCollapsible.classList.add('navbar-shrink')
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
            rootMargin: '0px 0px -40%',
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

});
