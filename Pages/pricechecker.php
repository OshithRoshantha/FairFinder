<html>
<head>
    <link rel="stylesheet" href="../style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../Assets/favicon.png" type="image/png">
    <title>FairFinder - Find & Check Bus Tickets</title>
    <style>
        .result-box ul,.result-box2 ul{
            width: 13%;
        }
        .searchBar{
            width: 77%;
        }
        .toggleBtn{
            right: 34%;
        }
        .swap{
            left: 32.3%;
        }
        .to{
            margin-left: 5%;
        }
        @media (max-width:769px) {
            .result-box ul,.result-box2 ul{
                width: 69%;
            }
            .searchBar{
                width: 100%;
            }
            .toggleBtn{
                right: 34%;
            }
            .to{
                margin-left: 0%;
            }
        }
    </style>
    <script>

        document.addEventListener('DOMContentLoaded', function() {
            const fromInput = document.getElementById('from');
            const toInput = document.getElementById('to');
            fromInput.addEventListener('focus', function() {
                fromInput.value = '';
            });
            toInput.addEventListener('focus', function() {
                toInput.value = '';
            });
        });

        window.onload = function() {
            const urlParams = new URLSearchParams(window.location.search);
            if (urlParams.has('clicked') && urlParams.get('clicked') === 'true') {
                const var1 = urlParams.get('var1');
                const var2 = urlParams.get('var2');
                document.getElementById('from').value = var1;
                document.getElementById('to').value = var2;
                document.getElementById('search').click();
            }

            fetch('../Services/autoSuggestions.php')
                .then(response => response.json())
                .then(locations => {
                    const sortedNames = locations.sort();
                    const inputBox = document.getElementById("from");
                    const resultsBox = document.querySelector(".result-box ul");
                    const inputBox2 = document.getElementById("to");
                    const resultsBox2 = document.querySelector(".result-box2 ul");

                    inputBox.addEventListener('keyup', function() {
                        let result = [];
                        let input = inputBox.value;
                        if (input.length) {
                            result = sortedNames.filter((keyword) => {
                                return keyword.toLowerCase().includes(input.toLowerCase());
                            });
                        }
                        display(result);
                    });
                    function display(result) {
                        resultsBox.innerHTML = ''; 
                        if (result.length > 0) {
                            result.forEach((item) => {
                                const li = document.createElement('li');
                                li.textContent = item;
                                li.addEventListener('click', () => {
                                    inputBox.value = item;
                                    resultsBox.innerHTML = ''; 
                                });
                                resultsBox.appendChild(li);
                            });
                        }
                    }
                    inputBox2.addEventListener('keyup', function() {
                        let result = [];
                        let input = inputBox2.value;
                        if (input.length) {
                            result = sortedNames.filter((keyword) => {
                                return keyword.toLowerCase().includes(input.toLowerCase());
                            });
                        }
                        display2(result);
                    });      
                    function display2(result) {
                        resultsBox2.innerHTML = '';
                        if (result.length > 0) {
                            result.forEach((item) => {
                                const li = document.createElement('li');
                                li.textContent = item;
                                li.addEventListener('click', () => {
                                    inputBox2.value = item;
                                    resultsBox2.innerHTML = ''; 
                                });
                                resultsBox2.appendChild(li);
                            });
                        }
                    }
                })
                .catch(error => console.error('Error fetching locations:', error));
        };

        let count=1;
        function updateCounter() {
            document.getElementById('counter').innerText = count;
            updateText();
        }

        function increase() {
            count++;
            updateCounter();
        }

        function decrease() {
            if (count>1) {
                count--;
                updateCounter();
            }
        }

        function updateText() {
            const messageSpan = document.getElementById('passengerText');
            if (count > 1) {
                messageSpan.innerText = " passengers";
            } else {
                messageSpan.innerText = " passenger";
            }
        }
        
    </script>
</head>
<body>
    <div id="overlay" class="overlay">
        <img onclick="closeOverlay()" class="overlayClose" src="../Assets/closeoverlay.png">
        <div class="navigationHeader">Navigation</div>
        <div class="overlaymenuContainer">
            <a href="../Pages/home.php" class="overlayMenu">Home</a>
            <a href="../Pages/pricechecker.php" class="overlayMenu">Check Price</a>
            <a href="../Pages/contact.php" class="overlayMenu">Contact</a>
        </div>
    </div>
    <div id="alertBar" class="alertBar">
        <div class="alertBox">
            <div class="alertHeading">We're currently updating our database to include<br> more routes and fares.</div>
            <div class="alertTagline">Please note that Luxury Bus and Expressway Luxury Bus<br> fares are not available at the moment.</div>
            <a onclick="removeAlert()" class="alertBtn">Got it!</a>
        </div>
    </div>
    <div class="container4">
        <div class="divider2"></div>
        <div class="mobileHeader">
            <img class="headerIcon" src="../Assets/logo.png">
            <img onclick="openOverlay()" class="headerIcon sider" src="../Assets/dots.png">
        </div>
        <div class="contentArea">
            <div class="header">
                <img class="headerIcon" src="../Assets/logo.png">
                <a href="../Pages/home.php" class="headerBtn">Home</a>
                <a href="../Pages/contact.php" class="headerBtn">Contact</a>
            </div>
            <div class="middleBlock">
                <div class="checkerHeading">Discover Affordable Bus Fares...</div><br>
                <div class="searchBar">
                    <div class="divider3"></div>
                    <div class="toggleBtn">
                        <div onclick="decrease()"  class="toggleI">
                            <img class="swapIcon" src="../Assets/sub.png">
                        </div>
                        <div onclick="increase()" class="toggleI">
                            <img class="swapIcon"  src="../Assets/add.png">
                        </div>
                    </div>
                    <div onclick="swap()" class="swap">
                        <img class="swapIcon" src="../Assets/swap.png">
                    </div>
                    <div class="tofrom">
                        <div class="from">
                            <div class="searchHeading sH-origin">ORIGIN</div>
                            <input type="text" id="from" class="fromBar" placeholder="Leaving from..." autocomplete="off">
                            <div id="result-box1" class="result-box">
                                <ul></ul>
                            </div>
                        </div>
                        <div class="to">
                            <div class="searchHeading sH-destination">DESTINATION</div>
                            <input type="text" id="to" class="toBar" placeholder="Going to...">
                            <div id="result-box2" class="result-box2">
                                <ul></ul>
                            </div>
                        </div>
                    </div>
                    <div class="passenger">
                            <div class="searchHeading">PASSENGERS</div>
                            <div class="noPassenger">
                                <span id="counter" class="count">1 </span><span id="passengerText"> passenger</span></div>
                    </div>
                    <div id="search" onclick="search()" class="search">
                        <img class="searchIcon" src="../Assets/search.png">
                        <div class="searchBarBtn">Search</div>
                    </div>
                </div>
            </div>
            <div id="intitalDiv" class="intitalDiv">
                <img class="busImg" src="../Assets/bus.png">
                <div class="initialDiv_textarea">
                    <div class="initialDivHeading">Buses Information</div><br>
                    <div class="initialDivTagline">Inter-Provincial Bus Time Tables</div>
                    <a target="_blank" href="https://drive.google.com/drive/folders/1CU2zYTLomUcnElUnOoB0kdMtQjYK0oVH?usp=share_link" class="box">
                        <div class="busInfoH1">EXPRESSWAY</div>
                        <div class="busInfoH2">BUS TIMETABLE</div>
                    </a>
                    <a target="_blank" href="https://drive.google.com/drive/folders/1IXszV0llAjHNvumrKR99U0yzGQ7_Rd2x?usp=share_link" class="box">
                        <div class="busInfoH1">NORMAL</div>
                        <div class="busInfoH2">BUS TIMETABLE</div>
                    </a>
                </div>
            </div>
            <div id="searchResults" class="lowerBlock">
                <div class="lowerHeading">
                    <div class="resultHeading">SELECT YOUR TRIP</div>
                    <div id="resultCount" class="resultTagline">1 result</div>
                    <hr>
                </div>  
                <div class="lower_2">
                    <div class="lower_left">
                            <div class="filterMenu">Quick filters<br><br  class="removeGap">
                            <div class="checkboxes">
                                <input onchange="filter()" class="cBox" type="checkbox" checked id="normal">  Normal<br class="removeGap">
                                <input onchange="filter()" class="cBox" type="checkbox"  id="luxury">  Luxury<br class="removeGap">
                                <input onchange="filter()" class="cBox" type="checkbox"  id="expressluxury">  Expressway Luxury
                            </div>
                            </div>
                    </div>
                    <div class="lower_right">
                        <div id="noTripDiv" class="noTrips">
                            <img class="notripImg" src="../Assets/notripImg.png">
                            <div class="noTripHeading">We couldn't find the right trip.</div>
                            <div class="noTripTagline">We weren't able to find departures on this route for <span id="date"></span>.</div>
                        </div>
                        <div id="resultCard" class="resultCard">
                            <div class="locations">
                                <span id="start" class="start"></span>
                                <img class="arrow" src="../Assets/arrow.png">
                                <span id="end" class="end"></span>
                            </div>
                            <div class="businfo">
                                <img class="infoIcon" src="../Assets/busicon.png">&nbsp;
                                <span>&nbsp;Normal&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
                                <img class="infoIcon" src="../Assets/personicon.png">&nbsp;&nbsp;
                                <span id="bus_infoCount" class="bus_infoCount"></span>&nbsp;<span id="bus_infoText">person</span>
                            </div>
                            <div class="price">LRK&nbsp;<span class="ticketPrice" id="showTicketPrice"></span></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer">
                <div class="copyright">© 2024 FairFinder., All rights reserved</div>
                <a style="text-decoration: none;">
                    <div class="footerLinks">Terms of use</div>
                </a>
                <a style="text-decoration: none;">
                    <div class="footerLinks">Privacy</div>
                </a>
                <div class="author">By Oshith Roshantha</div>
            </div>
        </div>
    </div>
    <div class="mobilefooter mobilefooter2">
        <div class="mobileFooterText">By Oshith Roshantha</div>
        <div class="mobileFooterText2">© 2024 FairFinder., All rights reserved</div>
    </div>
    <script src="../script.js"></script> 
</body>
</html>