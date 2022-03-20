

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

// <!-- script to show nav bar -->
var show = document.getElementById("showNav");
        var showing = document.getElementById("showing");
        var i = 0;
        show.addEventListener("click", () => {
            if (i === 0) {
                showing.style.display = "block"
                i = 1
            } else {
                showing.style.display = "none"
                i = 0
            }
})