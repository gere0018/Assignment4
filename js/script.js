document.addEventListener("DOMContentLoaded", function(){
    var btn = document.querySelector("#changeImgBtn");
    btn.addEventListener("click", function(){
        console.log("btn clicked");
        document.location.reload(true);
    });


});
