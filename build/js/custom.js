//CUSTOM.JS
window.addEventListener('load', () => {
	typewriter();
});

// set up text to print, each item in array is new line
var aText = new Array( 
	"and I'm a budding Frontend Developer"
	);
	var iSpeed = 100; // time delay of print out
	var iIndex = 0; // start printing array at this posision
	var iArrLength = aText[0].length; // the length of the text array
	var iScrollAt = 20; // start scrolling up at this many lines
	 
	var iTextPos = 0; // initialise text position
	var sContents = ''; // initialise contents variable
	var iRow; // initialise current row

function typewriter()
{
 sContents =  ' ';
 iRow = Math.max(0, iIndex-iScrollAt);
 var destination = document.getElementById("typedtext");
 
 while ( iRow < iIndex ) {
  sContents += aText[iRow++] + '<br />';
 }
 destination.innerHTML = sContents + aText[iIndex].substring(0, iTextPos) + "_";
 if ( iTextPos++ == iArrLength ) {
  iTextPos = 0;
  iIndex++;
  if ( iIndex != aText.length ) {
   iArrLength = aText[iIndex].length;
   setTimeout("typewriter()", 500);
  }
 } else {
  setTimeout("typewriter()", iSpeed);
 }
}

window.addEventListener('load', () => {
	(function() {
		[].slice.call(document.querySelectorAll('.menu')).forEach(function(menu) {
			var menuItems = menu.querySelectorAll('.menu__link'),
				setCurrent = function(ev) {
					//ev.preventDefault();
					var item = ev.target.parentNode; // li
					// return if already current
					if (classie.has(item, 'menu__item--current')) {
						return false;
					}
					// remove current
					classie.remove(menu.querySelector('.menu__item--current'), 'menu__item--current');
					// set current
					classie.add(item, 'menu__item--current');
				};
			[].slice.call(menuItems).forEach(function(el) {
				el.addEventListener('click', setCurrent);
			});
		});
		[].slice.call(document.querySelectorAll('.link-copy')).forEach(function(link) {
			link.setAttribute('data-clipboard-text', location.protocol + '//' + location.host + location.pathname + '#' + link.parentNode.id);
			new Clipboard(link);
			link.addEventListener('click', function() {
				classie.add(link, 'link-copy--animate');
				setTimeout(function() {
					classie.remove(link, 'link-copy--animate');
				}, 300);
			});
		});
	})(window);
});








