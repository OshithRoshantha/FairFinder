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
    triggerAlert();
    if(1==1){ //here search correct logic
        document.getElementById('start').textContent = userInput1.value;
        document.getElementById('end').textContent = userInput2.value;
        document.getElementById('bus_infoCount').textContent = document.getElementById('counter').innerText;
        document.getElementById('intitalDiv').style.display = 'none';
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
function popular1() {
    const var1 = 'Colombo';
    const var2 = 'Anuradhapura';
    window.location.href = `../Pages/pricechecker.html?clicked=true&var1=${var1}&var2=${var2}`;
}
function popular2() {
    const var1 = 'Colombo';
    const var2 = 'Galle';
    window.location.href = `../Pages/pricechecker.html?clicked=true&var1=${var1}&var2=${var2}`;
}
function popular3() {
    const var1 = 'Colombo';
    const var2 = 'Kandy';
    window.location.href = `../Pages/pricechecker.html?clicked=true&var1=${var1}&var2=${var2}`;
}
function popular4() {
    const var1 = 'Colombo';
    const var2 = 'Hatton';
    window.location.href = `../Pages/pricechecker.html?clicked=true&var1=${var1}&var2=${var2}`;
}
function popular5() {
    const var1 = 'Colombo';
    const var2 = 'Jaffna';
    window.location.href = `../Pages/pricechecker.html?clicked=true&var1=${var1}&var2=${var2}`;
}
function popular6() {
    const var1 = 'Colombo';
    const var2 = 'Mannar';
    window.location.href = `../Pages/pricechecker.html?clicked=true&var1=${var1}&var2=${var2}`;
}
function triggerAlert() {
    var div = document.getElementById('alertBar');
    div.style.display = 'block';
    setTimeout(function() {
        div.style.bottom = '0';
    }, 10); 
}
function removeAlert() {
    var div = document.getElementById('alertBar');
    div.style.bottom = '-100px'; 
    setTimeout(function() {
        div.style.display = 'none';
    }, 1000); 
}


let locations=[
    'Colombo',
    'Anuradhapura',
    'Matara',
    'Galle',
    'Polonnaruwa',
    'Jaffna',
    'Hatton',
    'Ella',
    'Badulla'
];
let sortedNames = locations.sort();
let input = document.getElementById("userInput");
let listContainer = document.querySelector(".list");

input.addEventListener("keyup", (e) => {
  removeElements();
  let hasSuggestions = false; 
  for (let i of sortedNames) {
    if (
      i.toLowerCase().startsWith(input.value.toLowerCase()) &&
      input.value != ""
    ) {
      let listItem = document.createElement("li");
      listItem.classList.add("list-items");
      listItem.style.cursor = "pointer";
      let word = "<b>" + i.substr(0, input.value.length) + "</b>";
      word += i.substr(input.value.length);
      listItem.innerHTML = word;
      listItem.addEventListener("click", function () {
        displayNames(i);
      });
      listContainer.appendChild(listItem);
      hasSuggestions = true; 
    }
  }
  listContainer.style.display = hasSuggestions ? "block" : "none";
});

function displayNames(value) {
  input.value = value;
  removeElements();
  listContainer.style.display = "none";
}

function removeElements() {
  let items = document.querySelectorAll(".list-items");
  items.forEach((item) => {
    item.remove();
  });
}
