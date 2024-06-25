document.getElementById("showForm").addEventListener("click", function() {
    document.getElementById("div1").classList.remove("hidden");
    document.getElementById("div2").classList.remove("hidden");
});
document.getElementById("hideForm").addEventListener("click", function() {
    document.getElementById("div1").classList.add("hidden");
    document.getElementById("div2").classList.add("hidden");
});
function showDate() {
    const days = ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"];
    const months = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];
    const today = new Date();
    const dayName = days[today.getDay()];
    const monthName = months[today.getMonth()];
    const date = today.getDate();
    document.getElementById('date').textContent =`${dayName}, ${monthName} ${date}`;
}
function filter() {
    var type = document.getElementById('normal');
    var noTrips= document.getElementById('noTripDiv');
    if (!type.checked) {
        showDate();
        document.getElementById('resultCount').textContent = '0 result';
        noTrips.style.display = 'block';
    } else {
        document.getElementById('resultCount').textContent = '1 result';
        noTrips.style.display = 'none';
    }
}
function search(){
    var resultsDiv=document.getElementById('searchResults');
    var noTrips= document.getElementById('noTripDiv');
    const userInput1 = document.getElementById('userInput');
    const userInput2 = document.getElementById('userInput2');
    if(1==1){ //here search correct logic
        document.getElementById('start').textContent = userInput1.value;
        document.getElementById('end').textContent = userInput2.value;
        document.getElementById('bus_infoCount').textContent = document.getElementById('counter').innerText;
        if(document.getElementById('counter').innerText==1){
            document.getElementById('bus_infoText').textContent = 'person';
        }
        else{
            document.getElementById('bus_infoText').textContent = 'persons';
        }
        resultsDiv.style.opacity = '1'; 
    }
    else{
        document.getElementById('resultCount').textContent = '0 result';
        noTrips.style.display = 'block';
        resultsDiv.style.opacity = '1';
    }
}


