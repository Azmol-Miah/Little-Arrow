// Display if and when classes are in session

var classTime = [
    {
        start:6,
        end:7,
        message:'6pm',
    },
    {
        start: 7,
        end:8,
        message:'7pm',
    },
    {
        start: 17,
        end:18,
        message:'18:00pm',
    },
]

var today = new Date();
var hourNow = today.getHours();
var greeting ;


for (i = 0; i < classTime.length; i++) {

    if (hourNow >= classTime[i].start && hourNow < classTime[i].end) {
        greeting = 'Class in Session';
    } else {
        greeting = 'Class starts at ' + classTime[i].message;
    }

}



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