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

    <?php
        $dbConnection=mysqli_connect("localhost:3306","root","");

        if($dbConnection)
            mysqli_query($dbConnection,"create database if not exists fairFinder");

        mysqli_select_db($dbConnection,"fairFinder"); 
        mysqli_query($dbConnection,"create table if not exists userFeedback(feedbackID int auto_increment, primary key(feedbackID), userName varchar(25), userEmail varchar(30) not null, userMessage varchar(100))");
        if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['message']))
            mysqli_query($dbConnection, "insert into userFeedback (userName, userEmail, userMessage) values('".$_POST['name']."', '".$_POST['email']."', '".$_POST['message']."')");

    ?>

    <div id="overlay" class="overlay">
        <img onclick="closeOverlay()" class="overlayClose" src="../Assets/closeoverlay.png">
        <div class="navigationHeader">Navigation</div>
        <div class="overlaymenuContainer">
            <a href="../Pages/home.php" class="overlayMenu">Home</a>
            <a href="../Pages/pricechecker.php" class="overlayMenu">Check Price</a>
            <a href="../Pages/contact.php" class="overlayMenu">Contact</a>
        </div>
    </div><div id="overlay" class="overlay">
        <img onclick="closeOverlay()" class="overlayClose" src="../Assets/closeoverlay.png">
        <a href="../Pages/home.html" class="overlayMenu">Home</a>
        <a href="../Pages/pricechecker.html" class="overlayMenu">Check Price</a>
        <a href="../Pages/contact.html" class="overlayMenu">Contact</a>
    </div>
    <div class="container3">
        <div class="mobileHeader">
            <img class="headerIcon" src="../Assets/logo.png">
            <img onclick="openOverlay()" class="headerIcon sider" src="../Assets/dots.png">
        </div>
        <div id="div1" class="opacity hidden"></div>
        <div  id="div2" class="formPopup hidden">
            <div class="formContainer">
                <img id="hideForm" class="popupClose" src="../Assets/close.png">
                <div class="popupHeader">Let's Talk</div><br>
                <div class="popupTagline">Please write your message and contact information below.<br> We will respond as soon as possible.</div>
                <br><br class="removeGap">
                <form method="post" action="contact.php" onsubmit="return formValidate()">
                    <div class="inputTag">Name</div>
                    <input class="input" type="text" id="name" name="name" placeholder="John"><br>
                    <p id="invalid-name">Invalid Name.</p>
                    <p id="empty-name">Field is empty.</p>
                    <br><div class="inputTag">Email</div>
                    <input class="input2" type="email" id="email" name="email" placeholder="John@example.com"><br>
                    <p id="invalid-email">Invalid email address.</p>
                    <p id="empty-email">Field is empty.</p>
                    <br><div class="inputTag">Message</div>
                    <textarea class="input3" id="message" name="message" placeholder="We value your feedback. Please share your thoughts..."></textarea>
                    <p id="empty-message">Field is empty.</p>
                    <br><br><br class="removeGap">
                    <input type="submit" id="hideForm" class="boxBtn inputBtn" value="Submit">
                </form>
            </div>
        </div>
        <div class="divider2"></div>
        <div class="contentArea">
            <div class="header contactHeader">
                <img class="headerIcon" src="../Assets/logo.png">
                <a href="../Pages/home.php" class="headerBtn">Home</a>
                <a href="../Pages/pricechecker.php" class="headerBtn">Check Price</a>
            </div>
            <div class="container1_2 container3_1">
                <div class="contactText">
                    <div class="contactHeading">Contact Us</div>
                    <div class="contactTagline">We're here to help! Whether you have questions, need assistance,<br> or want to give feedback, our team is ready to assist you.</div>
                    <img class="contactImg" src="../Assets/contact.png">
                </div>
                <div class="support">
                    <img class="boxIcon" src="../Assets/info.png">
                    <br><br>
                    <div class="boxHeading">Customer Support</div>
                    <br><br>
                    <div class="boxText">For any inquiries or support<br> related to FareFinder,<br> feel free to get in touch with our customer<br> support team.</div>
                    <br><br>
                    <a href="mailto:oedirisuriya@gmail.com?subject=Customer%20Support%20Request:%20FareFinder" class="boxBtn">Mail Us</a>
                </div>
                <div class="feedback">
                    <img class="boxIcon" src="../Assets/submit.png">
                    <br><br>
                    <div class="boxHeading">Feedback</div>
                    <br><br>
                    <div class="boxText">We value your feedback and suggestions!<br> Let us know how we can <br>improve your experience<br> with FareFinder.</div>
                    <br><br>
                    <div id="showForm" class="boxBtn2">Message Us</div>
                </div>
            </div>
            <div class="footer footer2">
                <div class="copyright">© 2024 FairFinder., All rights reserved</div>
                <a style="text-decoration: none;">
                    <div class="footerLinks">Terms of use</div>
                </a>
                <a style="text-decoration: none;">
                    <div class="footerLinks">Privacy</div>
                </a>
                <div class="author">COSC 31103-Group 01</div>
            </div>
        </div>
        <div class="mobilefooter">
            <div class="mobileFooterText">COSC 31103-Group 01</div>
            <div class="mobileFooterText2">© 2024 FairFinder., All rights reserved</div>
        </div>
    </div>
    <script src="../script.js"></script>    
</body>
</html>