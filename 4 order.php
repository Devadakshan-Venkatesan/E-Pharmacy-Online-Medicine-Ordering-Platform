<html>
    <head>
        <title> Medicine Shopping - Order </title>
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
            input{width: 100%; padding: 6px;}
            input[type = submit] {cursor: pointer;}
            #left{
                margin-left: auto;
                margin-right: auto;
                width: 25%;
            }
            #left-l{
                background-color:lightcyan;
                padding: 40px;
                font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
                font-size: 18px;
                border-radius: 10px;
                border-top: 3px solid red;
            }
            #left-l #submit{
                width: 25%;
                margin-top: 10px;                
            }
            #logout{
                float:right;
            }
        </style>
        <body>
            
            <div class="header">
                <a href="1 home.php" class="logo"><img src="Images/logo.jpeg" width="60"></a>
                <div>
                    <a href="1 home.php"> Home </a>
                    <a href="6 contact.php"> Contact </a>
                    <a href="7 about.php"> About </a>
                    <a class="active" href="4 order.php"> Search </a>
                    <a href="myorders.php"> My Orders</a>
                    <form method="post" id="logout" action="logout.php">
                    <button type="submit" for="logout" name="sub" value="logout" id="logout">Log Out</button>
                    </form>
                </div>
            </div>

            <?php
            
            session_start();
            include("Conn.php");
            $uname=$_SESSION['uname'];
            $stmt = "select * from user_data where username='$uname'";
            $query = $con -> query($stmt);
            $row = $query -> fetch_assoc();  
            $name=$row['name'];
            echo "<center><h2>Welcome Mr. $name </h2></center>";
            ?>
            <form method="post" id="search" action="searchHandle.php">
            <div id="left">
                    <center><h3>Order Medicines online</h3></center>
                    <div id="left-l">
                        <h5> Search for Medicines </h5>
                        <input type="text" id="prod" name="prod" placeholder="Search for your product here">
                        <center><button type="submit" for="search" name="sub" value="Search" id="submit">Search</button></center>                        
                    </div>                    
                </div>
            </form>
        </body>
</html>
