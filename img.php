<html>
    <head></head>
    <body>
        <?php
            include("Conn.php");

            $sql = "SELECT *  FROM 'medicine' WHERE 'med_name' LIKE \'%Pan%\';";
            $result = $con -> query($sql);

            while($row = $result -> fetch_assoc()){
                $f1 = $row["med_name"];
                echo "$f1";
            }
        ?>
    </body>
</html>