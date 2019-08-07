<?php
//creating a link between database and server
//$link = mysqli_connect("hostname","db_user","db_passwd","db_name")
$link = mysqli_connect("", "", "", "");
// checking server - database connectivity and printing error if there
if (!$link) {
    echo "Error: Unable to connect to MySQL." . PHP_EOL;
    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
    exit;
}
// on successfull conectivity it will return with this message
echo "Success: A proper connection has established" . PHP_EOL;
echo "Host information: " . mysqli_get_host_info($link) . PHP_EOL;


//closing the connection
mysqli_close($link);
?>
