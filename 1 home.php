<html>
    <head>
        <title> Medicine Shopping - Home </title>
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
            }
            .left 
            {
                width: 5%;
            }
            .right
            {
                width: 50%;
            }
            .row{
                padding: 10px;
            }
            .row:after 
            {
                content: "";
                display: table;
                clear: both;
            }
            .column1
            {
                float: left;
            }
            .middle1 
            {
                background-image: url("Images/home background.jpg");
                width: 100%;
                padding-top: 2%;
                padding-bottom: 2%;
            }
            .row1:after 
            {                
                content: "";
                display: table;
                clear: both;
            }
            f1
            {
                font-weight: bold;
                font-size: 20;
                font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
                color: rgb(0, 78, 104);
            }
            f2
            {
                font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
                font-size: 16;
            }
        </style>
    </head>
    <body>
        <div class="header">
            <a href="1 home.php" class="logo"><img src="Images/logo.jpeg" width="60"></a>
            <div>
                <a class="active" href="1 home.php"> Home </a>
                <?php 
                session_start();
                if (!isset($_SESSION['uname']) || $_SESSION['uname'] == ''){
                    echo "<a href='2 signup.html'> Sign up </a>";
                }
                ?>
                <a href="6 contact.php"> Contact </a>
                <a href="7 about.php"> About </a>
                <?php
                if (isset($_SESSION['uname']) && $_SESSION['uname'] != ''){
                    echo "<a href='4 order.php'> Search </a>";
                }
                ?>
            </div>
        </div>
        <div class="row1">
            <div class="column middle1">
                <f1 style="color: black; font-size: 25; padding-top: 20%;"><center> All your essential<br>
                     medicines, delivered<br>
                     with personalized care </center></f1>
                <f1 style="color: black; font-size: 20;"><center>Enjoy best discounts</center></f1>                
            </div>
        </div>
        <div class="row">
            <div class="column left">
                <img src="Images/home 1.png" width="50">
            </div>
            <div class="column right">
                <f1> 35,000+ pincodes in 4000+ cities </f1><br>
                <f2> Get free home delivery for your medicines anywhere in India</f2>
            </div>
        </div>
        <div class="row">
            <div class="column left">
                <img src="Images/home 2.png" width="50">
            </div>
            <div class="column right">
                <f1> No prescription? No Problem. </f1><br>
                <f2> Access 10,000+ doctors to get digital prescription instantly. </f2>
            </div>
        </div>
        <div class="row">
            <div class="column left">
                <img src="Images/home 3.png" width="50">
            </div>
            <div class="column right">
                <f1> Exclusive offers & Cashbacks </f1><br>
                <f2> Enjoy great rewards and offers, with a personal touch. </f2>
            </div>
        </div>        
    </body>
</html>
