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
    <div class="container">
        <div class="mobileHeader">
            <img class="headerIcon" src="../Assets/logo.png">
            <img onclick="openOverlay()" class="headerIcon sider" src="../Assets/dots.png">
        </div>
        <div class="contentArea">
            <div class="header">
                <img class="headerIcon" src="../Assets/logo.png">
                <a href="../Pages/pricechecker.php" class="headerBtn">Check Price</a>
                <a href="../Pages/contact.php" class="headerBtn">Contact</a>
            </div>
        <div class="container1_2">
            <div class="homeText">
                <div class="mainText">Find accurate bus tickets<br> for your next trip</div><br><br>
                <div class="tagline">Are you tired of spending too much on bus tickets? Look no further!<br> FareFinder is here to help you find the correct prices for your bus journeys<br> quickly and easily.</div>
                <a href="../Pages/pricechecker.php" class="checkNowBtn"><img class="searchIcon" src="../Assets/search.png"> Check Now</a>
            </div>
            <img class="homeImg" src="../Assets/homeImg.png">
        </div>
        <br><br>
        <div class="featuresBar">
            <div class="feature"><img class="featureLogo" src="../Assets/compass.png"><div class="featureText"><span class="featureHeading">More Coverage</span><br> Serving 2K+ bus stops within Sri Lanka</div></div>
            <div class="feature"><img class="featureLogo" src="../Assets/cash.png"><div class="featureText"><span class="featureHeading">Real-Time Price</span><br> Prices are accordance with the Interim Bus Fare Revision by NTC</div></div>
            <div class="feature"><img class="featureLogo" src="../Assets/award.png"><div class="featureText"><span class="featureHeading">Easy to Use</span><br> Price with just one click</div></div>
        </div>
        <div class="topTravel">
            <div class="headingText">Quick price check for top traveled bus routes</div><br><br>
            <div class="line">
                <div onclick="popular1()" class="cards a">
                    <div class="cardTagline ">From Colombo to Anuradhapura</div>
                </div>
                <div onclick="popular2()" class="cards g">
                    <div class="cardTagline ">From Colombo to Galle</div>
                </div>  
                <div onclick="popular3()" class="cards k">
                    <div class="cardTagline ">From Colombo to Kandy</div>
                </div>
            </div><br class="removeGap"><br class="removeGap">
            <div class="line">
                <div  onclick="popular4()" class="cards h">
                    <div class="cardTagline ">From Colombo to Hatton</div>
                </div>
                <div  onclick="popular5()" class="cards j">
                    <div class="cardTagline ">From Colombo to Jaffna</div>
                </div>
                <div  onclick="popular6()" class="cards m">
                    <div class="cardTagline ">From Colombo to Mannar</div>
                </div>
            </div> 
        </div>
        <br><br>
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
        <div class="mobilefooter">
            <div class="mobileFooterText">By Oshith Roshantha</div>
            <div class="mobileFooterText2">© 2024 FairFinder., All rights reserved</div>
        </div>
        <div class="divider"></div>
    </div>
    <script src="../script.js"></script>
</body>
</html>