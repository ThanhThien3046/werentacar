$(function(){
    var coll = document.getElementsByClassName("collapsible");
    var i = 0;
    for (i = 0; i < coll.length; i++) {
        coll[i].addEventListener("click", function() {
        this.classList.toggle("open");
        var content = this.nextElementSibling;
        if (content.style.display === "block") {
            content.style.display = "none";            
        } else {
            setTimeout(function() {
                content.style.display = "block";
            }, 150);     
        }
        });  
    }
})


