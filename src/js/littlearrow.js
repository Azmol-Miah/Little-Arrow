// Display if and when classes are in session................................

var classTime = [
    {
        start:10,
        end:11,
        message:'11am',
    },
    {
        start: 12,
        end:13,
        message:'7pm',
    },
    {
        start: 8,
        end:9,
        message:'9pm',
    },
]

var today = new Date();
var hourNow = today.getHours();

for (i = 0; i < classTime.length; i++) {

    if (hourNow >= classTime[i].start && hourNow < classTime[i].end) {
            
        if (classTime[i] == classTime[0]){
            var timeOne = document.getElementById('class1');
                timeOne.textContent = 'Class in session';
                
        } else if (classTime[i] == classTime[1]){
            var time112 = document.getElementById('class2');
                time112.textContent = 'Class in session'; 
                
        } else if (classTime[i] == classTime[2]){
            var time113 = document.getElementById('class3');
                time113.textContent = 'Class in session'; 
        }
        
    } else {

        if (classTime[i] == classTime[0]){
            var greeting1 = 'Class starts at ';
            var time11 = document.getElementById('class1');
            greeting1 += classTime[0].message;
            time11.textContent = greeting1;

        } else if (classTime[i] == classTime[1]){
            var greeting2 = 'Class starts at ';
            var time22 = document.getElementById('class2');
                greeting2 += classTime[1].message;
                time22.textContent  = greeting2;

        } else if (classTime[i] == classTime[2]){
            var greeting3 = 'Class starts at ';
            var time33 = document.getElementById('class3');
                greeting3 += classTime[2].message;
                time33.textContent = greeting3;
        }
    }

}

// Spaces left.....................................

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

// Smooth Scroll ........................................

    var marginY = 0;
    var destination = 0; //where to go
    var speed = 5; //speed of scroll
    var scroller = null;

    // Get the container element
    var nav = document.getElementById("navContainer");

    // Get all nav link with class="nav-link" inside the container
    var navs = nav.getElementsByClassName("nav-link");

    // Loop through the buttons and add the active class to the current/clicked button
    for (var i = 0; i < navs.length; i++) {
        navs[i].addEventListener("click", function() {
            var current = document.getElementsByClassName("active");
            current[0].className = current[0].className.replace(" active", "");
            this.className += " active";
        });
    }

    function initScroll(elementId){
        destination = document.getElementById(elementId).offsetTop;//OffesetTop is the distance from the top
        

        scroller = setTimeout(function(){
            initScroll(elementId);
        }, 1);

        marginY = marginY + speed;

        if(marginY >= destination){
            clearTimeout(scroller);
        }

        window.scroll(0, marginY);
        console.log(destination);
    }


    function toTop(){

        scroller = setTimeout(function(){
            toTop();
        }, 1);

        marginY = marginY - speed;

        if(marginY <= 0){
            clearTimeout(scroller);
            // Remove all active classes once at top
            var current = document.getElementsByClassName("active");
            current[0].className = current[0].className.replace(" active", "");
        }

        window.scroll(0, marginY);

    }
