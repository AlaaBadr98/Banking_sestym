

var sec1=document.getElementById("section1"),
sec2=document.getElementById("section2"),
nextbt=document.getElementById("next"),
back=document.getElementById("back");


nextbt.addEventListener("click",() =>{
    sec1.style.display="none";
    sec2.style.display="block";

})
back.addEventListener("click",() =>{
    sec1.style.display="block";
    sec2.style.display="none";

})
