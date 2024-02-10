let stateNumber = 0;
 //setting the control buttons
 const startBtn = document.getElementById('startBtn');
 const prevBtn = document.getElementById('prevBtn');
 const nextBtn = document.getElementById('nextBtn');
 //statenumber in the dom
 const quesNumber = document.getElementById('qn');
 const questionCounterLabel = document.getElementById('qcLabel');
 const questionCounter = document.getElementById('qc');
 if(stateNumber == 0){
     prevBtn.style.display = "none";
     nextBtn.style.display = "none";
     questionCounterLabel.style.display = "none";
 } 

startBtn.addEventListener("click", function (){
    prevBtn.style.display = "block";
    nextBtn.style.display = "block";
    startBtn.style.display = "none";
    questionCounterLabel.style.display = "block";
})

nextBtn.addEventListener("click", function () {
   stateNumber++;
   quesNumber.textContent = stateNumber;
   questionCounter.textContent = stateNumber;
   if(stateNumber === 5) {
    stateNumber = 5;
   }
})

prevBtn.addEventListener("click", function (){
   stateNumber--; 
   console.log("prev button pressed");
   quesNumber.textContent = stateNumber;
   questionCounter.textContent = stateNumber;
})