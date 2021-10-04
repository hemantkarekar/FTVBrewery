var button = document.querySelectorAll(".m-readmore-click");
var content = document.querySelectorAll(".m-readmore");
function loopAdd(a, b){
    a.addEventListener("click",()=>{
        b.classList.toggle("show");
        if(b.classList.contains("show")){
            a.innerHTML = "Read Less";
        }
        else{
            a.innerHTML = "Read More";
        }
    });
}

for(i=0;i<button.length;i++){
    loopAdd(button[i],content[i]);
}