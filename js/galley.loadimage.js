/*function doFirst(){
    var images = [["cycling.jpg","Let's go green, save the earth and stay healthy"]]

    images.forEach(function(entry) {
        var element='<img src="img/gallery/thumbnail/'+entry[0]+'" width="120" height="120" class="" style="border-radius: 4px; box-shadow: black 0px 0px 5px 0px; transform: scale(1);">';
        var a = document.createElement('a');
        a.className  = "pop";
        a.href = '"img/gallery/'+entry[0]+'"';
        a.title = entry[1];
        

        a.innerHTML = element;
        document.getElementById("ollPics").appendChild(a); 
    });
}

window.addEventListener('load',doFirst,false); */

var images = [
              ["school1.jpg","Last foundation class, time to begin the Bachelor"],
              ["school2.jpg","Team work, respect, and empathy are keys to success"],
              ["school5.jpg","Final assignment submission... Good old days"],
              ["school3.jpg","Final Year Project done. School is off for now... Software industry, here I come"],
              ["school4.jpg","Close up view"],
              ["fudcon2.jpg","APU representative in Fedora User and Developer Conference (FUDCon), Kuala Lumpur "],
              ["fudcon1.jpg","Open source revolution, very interesting concept"],
              ["cycling.jpg","Let's go green, save the earth and stay healthy"],
              ["ibm_class.jpg","Rational Software Architect class, November 2013"],
              ["RSA.PNG","My first certification. Rational Software Architect ,November 2013"],
              ["RUP.PNG","My second certification. Rational Unified Process v7.0 ,October 2014"],
              ["DBA.PNG","And here it comes the third certification.  ,January 2015"],
              ["skiing.JPG","What an amazing experience, what an amazing sport... Just love it"],
              ["hiking1.jpg","First time hiking in the tropical jungles of Malaysia, Gunung Nuang 1493m"],
              ["hiking2.jpg","Hiking in Iran, A selfie with Damavand Summit"],
              /*["hiking3.jpg","Hiking with borther and friends"],              
              ["my1.jpg","Life in Malaysia."],*/
              ["piano.jpg","Learning piano...My very first play...doe a deer♩ ♪ ♫ ♬ ♭ ♮ ♯ . January 2016"]
              ]
images.forEach(function(entry) {
    var element='<img src="img/gallery/thumbnail/'+entry[0]+'" width="120" height="120" class="" style="border-radius: 4px; box-shadow: black 0px 0px 5px 0px; transform: scale(1);">';
    var a = document.createElement('a');
    a.className  = "pop";
    a.href = 'img/gallery/'+entry[0];
    a.title = entry[1];
    

    a.innerHTML = element;
    document.getElementById("ollPics").appendChild(a); 
});