<html>

<head>
    <title> Medicine Shopping - Order </title>
    <style>
        .header {
            overflow: hidden;
            background-color: #f1f1f1;
            padding: 20px 10px;
        }

        .header a {
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

        .header a.logo {
            font-size: 25px;
            font-weight: bold;
        }

        .header a:hover {
            background-color: #ddd;
            color: black;
        }

        .header a.active {
            background-color: dodgerblue;
            color: white;
        }

        input {
            width: 100%;
            padding: 6px;
        }

        input[type=submit] {
            cursor: pointer;
        }

        #left {
            margin-left: auto;
            margin-right: auto;
            width: 20%;
        }

        #left-l {
            background-color: aquamarine;
            padding: 20px;
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
            font-size: 18px;
        }

        #left-l #submit {
            width: 25%;
            margin-top: 10px;
        }

        #logout {
            float: right;
        }

        #create th,
        tr,
        td {
            border: 1px solid black;
            padding: 30px;
            text-align: center;
            background-color:azure;
            padding-left: 50px;
            padding-right: 50px;
        }

        #create{
            margin:10px;
        }

        tr {
            color: coral;
        }

        th {
            color: black;
            
        }
        #head{
            margin:20px;
        }
        #create th{
            background-color:darkturquoise;    
        }
    </style>

<body>

    <div class="header">
        <a href="1 home.php" class="logo"><img src="Images/logo.jpeg" width="60"></a>
        <div>
            <a href="1 home.php"> Home </a>
            <a href="6 contact.php"> Contact </a>
            <a href="7 about.php"> About </a>
            <a href="4 order.php"> Search </a>
            <form method="post" id="logout" action="logout.php">
                <button type="submit" for="logout" name="sub" value="logout" id="logout">Log Out</button>
            </form>
        </div>
    </div>
    <?php
    session_start();
    include('Conn.php');
    $uname = $_SESSION['uname'];
    $sql = 'SELECT * from orders where uname="' . $uname . '"';

    $result = mysqli_query($con, $sql);

    if (mysqli_num_rows($result) > 0) {

        echo '<center><h3 id="head">Your orders</h3>';
        echo '<center><table id="create"><tr><th>Date</th><th>Medicine</th><th>Price</th><th>Quantity</th><th>Cost</th></tr>';

        
        while ($row = mysqli_fetch_assoc($result)) {
            $medname=$row["med_name"];
            $price=$row["price"];
            $quantity=$row["quantity"];
            $cost=$row["cost"];
            $date=$row['date'];
            echo '<tr><td>'.$date.'</td><td>'.$medname.'</td><td>'.$price.'</td><td>'.$quantity.'</td><td>'.$cost.'</td></tr>';
        }
        echo '</table></center>';
    } else {
        echo "<center><h3>You haven't ordered anything</h3><center>";
    }

    ?>
</body>

</html>