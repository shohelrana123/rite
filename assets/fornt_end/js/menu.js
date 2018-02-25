    // variables

    var aLoops = []; // sound loops

// initialization

    addEvent(window, 'load', function (event) {

        // load music files

        aLoops[0] = new Audio('media/background.ogg');

        aLoops[0].volume = 0.3;

        aLoops[1] = new Audio('media/button.ogg');

        aLoops[1].volume = 1.0;

        aLoops[2] = new Audio('media/button_click.ogg');

        aLoops[2].volume = 1.0;

        aLoops[0].addEventListener('ended', function () { // loop background sound

            this.currentTime = 0;

            this.play();

        }, false);

        aLoops[0].play();

    });

// all the buttons

    var aBtns = document.querySelectorAll('#nav li');

// onmouseover event handler

    addEvent(aBtns, 'mouseover', function (event) {

        aLoops[1].currentTime = 0;

        aLoops[1].play(); // play click sound

    });

// onmouseout event handler

    addEvent(aBtns, 'mouseout', function (event) {

        aLoops[1].currentTime = 0;

        aLoops[1].pause(); // play click sound

    });

// onclick event handler

    addEvent(aBtns, 'click', function (event) {

        aLoops[2].currentTime = 0;

        aLoops[2].play(); // play click sound

    });
    
    /* Hide More Option*/
    
function dsp(loc){
   if(document.getElementById){
      var foc=loc.firstChild;
      foc=loc.firstChild.innerHTML?
         loc.firstChild:
         loc.firstChild.nextSibling;
      foc.innerHTML=foc.innerHTML=='+'?'-':'+';
      foc=loc.parentNode.nextSibling.style?
         loc.parentNode.nextSibling:
         loc.parentNode.nextSibling.nextSibling;
      foc.style.display=foc.style.display=='block'?'none':'block';}}  

if(!document.getElementById)
   document.write('<style type="text/css"><!--\n'+
      '.dspcont{display:block;}\n'+
      '//--></style>');