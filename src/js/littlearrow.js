// Display if and when classes are in session


// if (hourNow >= 6 && hourNow < 7) {
//     greeting = 'Class in Session';
// } else {
//     greeting = 'Class is at 6pm!';
// }

// if (hourNow >= 7 && hourNow < 8) {
//     greeting = 'Class in Session';
// } else {
//     greeting = 'Class is at 6pm!';
// }

// if (hourNow >= 8 && hourNow < 9) {
//     greeting = 'Class in Session';
// } else {
//     greeting = 'Class is at 6pm!';
// }

// var elGreeting1 = document.getElementById('class1');
//     elGreeting1.textContent = greeting;

// var elGreeting2 = document.getElementById('class2');
//     elGreeting2.textContent = greeting;

// var elGreeting3 = document.getElementById('class3');
//     elGreeting3.textContent = greeting;

function Time (time1, time2, classtime){
    this.time1 = time1;
    this.time2 = time2;
    this.classtime = classtime;

    this.checkTime = function(){
        var today = new Date();
        var hourNow = today.getHours();
        var greeting;
        
        if (hourNow >= this.time1 && hourNow < this.time2) {
            greeting = 'Class in Session';
        } else {
            greeting = 'Class is at ' + this.classtime + ' !';
        }
    }    

}

var qClass = new Time (6, 7, '6pm');
var hClass = new Time (7, 8, '7pm');
var fClass = new Time (11, 12, '8pm');

var qdetails = qClass.checkTime();
var elQdetails = document.getElementById('class1');
    elQdetails.textContent = qdetails;

var hdetails = hClass.checkTime();
var elHdetails = document.getElementById('class2');
    elHdetails.textContent = hdetails;

var fdetails = fClass.checkTime();
var elFdetails = document.getElementById('class3');
    elFdetails.textContent = fdetails;


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