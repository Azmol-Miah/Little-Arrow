// Display if and when classes are in session
var today = new Date();
var hourNow = today.getHours();
var greeting;

if (hourNow >= 6 && hourNow < 7) {
    greeting = 'Class in Session';
} else {
    greeting = 'Class is at 6pm!';
}

var elGreeting1 = document.getElementById('class1');
    elGreeting1.textContent = greeting;

var elGreeting2 = document.getElementById('class2');
    elGreeting2.textContent = greeting;

var elGreeting3 = document.getElementById('class3');
    elGreeting3.textContent = greeting;

// Spaces left

function Class (name, spaces, booked) {
  this.name = name;
  this.spaces = spaces;
  this.booked = booked;

  this.checkAvailabilty = function() {
    return this.spaces - this.booked;
  }
}

var quranClass = new Class('Quran', 10, 6 );
var hadeethClass = new Class('Hadeeth', 15, 10 );
var fiqhClass = new Class('Fiqh', 20, 16 );

var details1 = ' Spaces left: ';
    details1 += quranClass.checkAvailabilty();
var elClass1 = document.getElementById('quran');
    elClass1.textContent = details1;

var details2 = ' Spaces left: ';
    details2 += hadeethClass.checkAvailabilty();
var elClass2 = document.getElementById('hadeeth');
    elClass2.textContent = details2;

var details3 = ' Spaces left: ';
    details3 += fiqhClass.checkAvailabilty();
var elClass3 = document.getElementById('fiqh');
    elClass3.textContent = details3;