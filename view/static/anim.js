let title = document.getElementById('titletext');
let title2 = this.document.getElementById('titletext2');
let title3 = this.document.getElementById('titletext3');
let title4 = this.document.getElementById('titletext4');
let title5 = this.document.getElementById('titletext5');
let title6 = this.document.getElementById('titletext6');

window.addEventListener('scroll', function(){

    let mejor = window.scrollY * 0.1;
    let value =window.scrollY;

    let windowscale = window.screen.width;

    if (windowscale < 800) {        
        title.style.right = mejor * 0.8 + "px";
        title2.style.left = mejor * 0.1 + "px";
        title3.style.right = mejor * 0.1 + "px";
        title4.style.left = mejor * 0.2 + "px";
        title5.style.right = mejor * 0.3 + "px";
        title6.style.left = mejor * 0.3 + "px";
        
    } else{        
        title.style.right = value * 0.1 + "px";
        title2.style.left = value * 0.1 + "px";
        title3.style.right = value * 0.1 + "px";
        title4.style.left = value * 0.1 + "px";
        title5.style.right = value * 0.1 + "px";
        title6.style.left = value * 0.1 + "px";
    }




})


// 2 = 11px
// 3 = 0 
// 4 = 100px
// 5 = 112px

