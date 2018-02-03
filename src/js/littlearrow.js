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
        start: 9,
        end:10,
        message:'8pm',
    },
]

var today = new Date();
var hourNow = today.getHours();
var greeting ;

for (i = 0; i < classTime.length; i++) {

    if (hourNow >= classTime[i].start && hourNow < classTime[i].end) {
        greeting = console.log('Class in Session');
    } else {
        greeting = console.log('Class starts at ' + classTime[i].message);
    }
    
    // var elTime1 = document.getElementById('class1');
    //     elTime1.textContent = greeting[0];
    // var elTime2 = document.getElementById('class2');
    //     elTime2.textContent = greeting[1];
    // var elTime3 = document.getElementById('class3');
    //     elTime3.textContent = greeting[2];
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