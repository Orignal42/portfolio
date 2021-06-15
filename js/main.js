let competencesSection = document.querySelector("#competences");
let js = document.querySelector(".js");
let php = document.querySelector(".php");
let html = document.querySelector(".html");
let css = document.querySelector(".css");
window.addEventListener('scroll',function (event) {
    
    if (window.scrollY >= competencesSection.offsetTop - window.screen.height) {
       
        js.style.animation = "js  1.5s  ease-in-out forwards"
        php.style.animation = "php  1.5s  ease-in-out forwards"
        html.style.animation = "html  1.5s  ease-in-out forwards"
        css.style.animation = "css  1.5s  ease-in-out forwards"
  
    }

})



        
