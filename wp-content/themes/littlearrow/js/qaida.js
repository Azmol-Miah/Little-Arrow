// Qaida Audio
var sound;
var ext = ".mp3";
var dir = "audio/";
var playlist = ["alif","baa","thaa","thsaa","jeem","haa","khaa",
            "daal","zsaal","raa","zaa","seen","sheen","swaad","dwaad",
            "thwaa","zwaa","ayn","ghayn","faa","caaf","kaaf",
            "laam","meem","noon","wow","lamalif","hamza","yaa"];

function qaida(){

    for(var i = 0; i < playlist.length; i++){

        sound = new Audio();
        sound.play();

        if(playlist[i] === playlist[0]){
            //set object reference
            alifBtn = document.getElementById('alif');
            //add event handling
            alifBtn.addEventListener("click", letterAlif);
            //function
            function letterAlif(){
                sound.src = dir + playlist[0] + ext;
            }
            
        }

    }

}

window.addEventListener("load", qaida);

