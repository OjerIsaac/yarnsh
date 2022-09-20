//toggle password visibility
var state = false;
function toggle() {
    if (state) {
        document.getElementById("passCheck").setAttribute("type", "password");
        document.getElementById("eye").style.color = '#444';
        state = false;
    } else {
        document.getElementById("passCheck").setAttribute("type", "text");
        document.getElementById("eye").style.color = '#219150'
        state = true;
    }
}

var state = false;
function toggle1() {
    if (state) {
        document.getElementById("passCheck1").setAttribute("type", "password");
        document.getElementById("eye1").style.color = '#444';
        state = false;
    } else {
        document.getElementById("passCheck1").setAttribute("type", "text");
        document.getElementById("eye1").style.color = '#219150'
        state = true;
    }
}
//toggle password visibility


// Script for fixed Navigation bar when scrolled;
window.onscroll = () => {

    if(window.scrollY > 40) {
        document.querySelector('.header .header-1').classList.add('active');
    }else{
        document.querySelector('.header .header-1').classList.remove('active');
    }

}

window.onload = () => {

    if(window.scrollY > 40) {
        document.querySelector('.header .header-1').classList.add('active');
    }else{
        document.querySelector('.header .header-1').classList.remove('active');
    }

}

