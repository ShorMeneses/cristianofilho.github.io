var hamburger = document.querySelector('.burger'); 

hamburger.addEventListener("click",function(){
     document.querySelector(".sidebar").classList.toggle("viewMenu");
});