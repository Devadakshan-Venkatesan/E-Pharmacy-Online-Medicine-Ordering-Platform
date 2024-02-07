<html>
    <head>
        <title> Medicine Shopping - Contact </title>
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
            #total{
                columns: 3;
            }  
            #total a{
                text-decoration: none;
            }
            #twitter{
                background-color:lightcyan;
                padding: 40px;
                font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
                font-size: 18px;
                border-radius: 10px;
                border-top: 3px solid red;
            }      
            #fb{
                background-color:lightseagreen;
                padding: 40px;
                font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
                font-size: 18px;
                border-radius: 10px;
                border-top: 3px solid gold;
            }  
            #insta{
                background-color:lightsalmon;
                padding: 38px;
                font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
                font-size: 18px;
                border-radius: 10px;
                border-top: 3px solid blue;
            }         
            #fb p{
                margin-bottom: 0px;
            }
            #twitter p{
                margin-bottom: 4px;                
            }
            #twitter img{
                margin-bottom: 4px;
            }
            #insta p{
                margin-bottom: 0px;                
            }
            #insta img{
                margin-bottom: 4px;
            }   
            #mail{
                background-color:pink;
                padding: 40px;
                font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
                font-size: 18px;
                border-radius: 10px;
                border-top: 3px solid green;                
            }         
            #mail a{
                text-decoration: none;
            }
            #mail a:hover{
                color: red;
            }
            h2
            {
                font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
            }
            input{width: 100%; padding: 6px;}
            input[type = submit] {cursor: pointer;}
            a:hover, :visited, :default {color: black;}
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
                <a class="active" href="6 contact.php"> Contact </a>
                <a href="7 about.php"> About </a>
                <?php
                if (isset($_SESSION['uname']) && $_SESSION['uname'] != ''){
                    echo "<a href='4 order.php'> Search </a>";
                }
                ?>
            </div>
        </div>
        <center>
            <div id="total">
                <div id="twitter">
                    <p> Follow us on  </p>
                    <img src="Images/twitter.gif" width=60 height=50><br>
                    <button><a href="https://twitter.com/ExpressMedicin1">Twitter</a></button>
                </div>
                <div id="fb">
                    <p> Follow us on </p> 
                    <img src="Images/fb.gif" width=60 height=60> <br>
                    <button><a href="https://twitter.com/ExpressMedicin1"> Facebook </a></button>
                    
                </div>
                <div id="insta">
                    <p> Follow us on </p>
                    <img src="Images/insta.gif" width=60 height=60><br>                    
                    <button><a href="https://www.instagram.com/laxmi_2001/"> Instagram </a></button>
                </div>
            </div><br><br>
            <div id="mail">
                <img src="Images/monophy.gif" width=150 height=150>
                <p><a href="mailto:mdevilaxminarayan@gmail.com"> Get in touch with us and provide your feedbacks </a></p>
            </div>
        </center>
    </body>
</html>