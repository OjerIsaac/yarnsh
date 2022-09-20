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