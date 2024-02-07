<?php
    include("Conn.php");
    $uname = $_REQUEST["username"];
    $password = $_REQUEST["password"];

    $stmt = "select * from user_data where username like '$uname'";
    $query = $con -> query($stmt);    

    if($query){
        $num = mysqli_num_rows($query);
        if($num > 0){   
            $row = $query -> fetch_assoc();         
            $uname_c = $row["username"];
            $password_c = $row["password"];
            if($uname_c == $uname && $password_c == $password){
                session_start();
                $_SESSION['uname']=$uname;
                header('location:4 order.php');
            }
            else if($num == 0){
                echo "<center><h1 style = 'color:red;'> Incorrect credentials! </h1></center>";
                include("3 signin.html");
            }
        }
        else{
            die(mysqli_error($con));
        }
    }
?>