<style>
    #create th, tr, td{
        border: 1px solid black;
        padding: 5px;
        text-align: center;
    }
    tr{
        color: coral;
    }
    th{
        color: black;
    }
    #paybtn{
        padding:5px;
        margin:10px;
    }
    #create th{
        padding:10px;
        background-color:powderblue;
    }
    #create td{
        background-color:mintcream;
    }
</style>
<?php

?>

<?php

    include("Conn.php");
    include("4 order.php");

    if($_SERVER["REQUEST_METHOD"]=="POST"){
       
        $uname=$_SESSION["uname"];
        $med=$_POST['add'];
        
        $quantity=$_POST['quantity'];
        $sql1='SELECT * from medicine where med_name="'.$med.'"';
        $result1=mysqli_query($con,$sql1);
        $price=0;
        $date=date("Y-m-d");
        
        if($result1){
            while($row1=mysqli_fetch_assoc($result1)){
                $price=$row1['price'];
            }
        }
        else{
            echo "Something went wrong1";
        }

        
        
        $cost=$price*$quantity;

        $sql3="INSERT INTO `orders`(`uname`, `med_name`, `price`, `quantity`, `Cost`, `date`) VALUES('$uname','$med','$price','$quantity','$cost','$date')";

        $result3=mysqli_query($con,$sql3);

        if($result3){
            echo '<script>alert("Added to cart successfully")</script>';
        }
        else{
            echo "Something went wrong2";
        }
        
    
     }
    $prod = $_SESSION["prod"];

    $sql = "SELECT *  FROM `medicine` WHERE `med_name` LIKE '%$prod%';";
    $result = mysqli_query($con,$sql);
    if(!$result){
        echo "<center><h1 style = 'color:red;'> Query failed </h1></center>";
        
    }
    else{
        if($result){
            $num = mysqli_num_rows($result);
            
            if($num > 0){
                
                echo('<center><table id="create">');
                echo('<th> Name of the Medicine </th>');
                echo('<th> Price </th>');
                echo('<th> Image </th>');
                echo('<th> Quantity </th>');
                echo('<th> Add to cart </th>');
               
                $arr=array();
                while($row =  mysqli_fetch_assoc($result)){
                    $name = $row['med_name'];
                    $price = $row['price'];  
                    $path = $row["image"];
                    $loc = "Med_images/$path.jpg";

                    echo("<tr style = boder: 1px solid>");
                    echo "<td>". $name ."</td>";
                    echo "<td> $price </td>";
                    echo "<td> <img src = $loc width = 150 height = 150> </td>";

                    echo '<form method="post" id="add" action="'.htmlspecialchars($_SERVER["PHP_SELF"]).'">
                    <td> <input type = "number" name = "quantity"> </td>
                    <td><button type="submit" for="add" name="add" id="add" value="'.$name.'"> Click to add </button></form></td>';

                    echo "</tr>";
                    
                }
                echo "</table>";

            }

        }
    }
?>


