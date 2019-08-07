<?php
header('Access-Control-Allow-Origin: *');
//connection code here

// fetching  data from  mysql database
$sql = "Select * from <table_name>";
$result = mysqli_query($link,$sql);

if(mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)){
        echo "<table border='1'>";
        echo "<tr>";
        echo "<th> Title1 </th>";
        echo "<td>".$row["column_name"]."</td>";
        echo "</tr>";
        echo "<tr>";
        echo "<th> Title2 </th>";
        echo "<td>".$row["column_name"]."</td>";
        echo "</tr>";
        echo "<tr>";
        echo "<th> Title3 </th>";
        echo "<td>".$row["column_name"]."</td>";
        echo "</tr>";
        echo "</table>";
    }

}

// closing connection
mysqli_close($link);
?>

