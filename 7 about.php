<html>
    <head>
        <title> Medicine Shopping - About </title>
        <style>
            .header 
            {
                overflow: hidden;
                background-color: #f1f1f1;
                padding: 20px 10px;
            }
            .header a 
            {
                font-family: Georgia, 'Times New Roman', Times, serif;
                float: left;
                color: black;
                text-align: center;
                padding: 12px;
                text-decoration: none;
                font-size: 18px;
                line-height: 25px;
                border-radius: 4px;
            }    
            .header a.logo 
            {
                font-size: 25px;
                font-weight: bold;
            }
            .header a:hover 
            {
                background-color: #ddd;
                color: black;
            }
            .header a.active 
            {
                background-color: dodgerblue;
                color: white;
            }
            .column 
            {
                float: left;
                padding-top:5%;   
                background-image: url("Images/about background.jpg");            
                background-position: 100%;
                background-repeat: no-repeat;
            }
            .left 
            {
                width: 100%;
                height: 40%;
            }
            .row:after 
            {
                content: "";
                display: table;
                clear: both;
            }
            f1
            {
                font-weight: bold;
                font-size: 25;
                font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
                color: rgb(0, 78, 104);
            }
            f2
            {
                font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
                font-size: 16;
            }
            .column1
            {
                float: left;
            }
            .c2
            {
                width: 15%;
            }
            .row1:after 
            {
                content: "";
                display: table;
                clear: both;                
            }
        </style>
    </head>
    <body>
        <div class="header">
            <a href="1 home.php" class="logo"><img src="Images/logo.jpeg" width="60"></a>
            <div>
                <a href="1 home.php"> Home </a>
                <?php 
                session_start();
                if (!isset($_SESSION['uname']) || $_SESSION['uname'] == ''){
                    echo "<a href='2 signup.html'> Sign up </a>";
                }
                ?>
                <a href="6 contact.php"> Contact </a>
                <a class="active" href="7 about.php"> About </a> 
                <?php
                if (isset($_SESSION['uname']) && $_SESSION['uname'] != ''){
                    echo "<a href='4 order.php'> Search </a>";
                }
                ?>
            </div>
        </div>
        <div class="row">
            <div class="column left">
                <f1 style="padding-left :5%; padding-bottom: 7%;"> About us </f1><br>
                <f2 style="padding-left: 5%; padding-top: 7%;"> ExpressMedicines Pharmaceutical Industries Ltd. (ExpressMedicines Pharma) is the fourth largest specialty generic </f2><br>
                <f2 style="padding-left: 5%; padding-top: 7%;"> pharmaceutical company in the world with global revenues of over US$ 1 Million. </f2><br>
                <f2 style="padding-left: 5%; padding-top: 7%;"> Supported by more than 4 manufacturing facilities, we provide high-quality, affordable </f2><br>
                <f2 style="padding-left: 5%; padding-top: 7%;"> medicines, trusted by healthcare professionals and patients, all accross India. </f2><br>
            </div>
        </div><br><br>
        <div class="row1">
            <div class="column1 c2" style="padding-left: 20%;">
                <center><img src="Images/about 1.png" width="60"></center>
                <center><f2 style="color: orange; font-size: 25;"> 2022 </f2></center>
                <center><f2 style="font-size: 12;"> Year founded </f2></center>
            </div>
            <div class="column1 c2">
                <center><img src="Images/about 2.png" width="60"></center>
                <center><f2 style="color: orange; font-size: 25;"> $1 Million+ </f2></center>
                <center><f2 style="font-size: 12;"> Revenue </f2></center>
            </div>
            <div class="column1 c2">
                <center><img src="Images/about 3.png" width="60"></center>
                <center><f2 style="color: orange; font-size: 25;"> 4th largest </f2></center>
                <center><f2 style="font-size: 12;"> Generic Pharmaceutical </f2></center>
                <center><f2 style="font-size: 12;"> Company in India </f2></center>
            </div>
            <div class="column1 c2">
                <center><img src="Images/about 4.png" width="60"></center>
                <center><f2 style="color: orange; font-size: 25;"> 1000+ </f2></center>
                <center><f2 style="font-size: 12;"> Employees </f2></center>
                <center><f2 style="font-size: 12;"> Across the Globe </f2></center>
            </div>
        </div>
    </body>
</html>
