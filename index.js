 //setting the control buttons
 console.log("Its working")
 const startBtn = document.getElementById('startBtn');
 const prevBtn = document.getElementById('prevBtn');
 const nextBtn = document.getElementById('nextBtn');
 let stateNumber = 0;

 if(stateNumber == 0){
     prevBtn.style.display = "none";
     nextBtn.style.display = "none";
 } 

startBtn.addEventListener("click", function (){
    prevBtn.style.display = "block";
    nextBtn.style.display = "block";
    startBtn.style.display = "none";
})

nextBtn.addEventListener("click", function () {
   stateNumber++;
})

prevBtn.addEventListener("click", function (){
   prevBtn--; 
})