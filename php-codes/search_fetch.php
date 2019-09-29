<html>
<head>
<link href="https://unpkg.com/material-components-web@latest/dist/material-components-web.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script> 
<style type="text/css">
.my-card-content {
  padding: 12px;
}

.card-body {
  width: 100%;
    color: #ffffff;
  background-color: #F0761F;
}
input{
  color: #3040C4;
}
.space {
  padding-bottom: 10px;
}

body{
  background-color: #FCF0E3;
}

</style>
</head>
<body>
<!--  <span class="mdc-search__icon material-icons">search</span> -->
<form action="#" method="GET" autocomplete="off">

<div class="mdc-card mdc-elevation--z1<24> card-body">
  <div class="mdc-text-field mdc-text-field--with-trailing-icon">
    <i class="material-icons mdc-text-field__icon">search</i>
    <input class="mdc-text-field__input" id="book_name" name="book_name" placeholder="Book Name">
    
  </div>
    <button class="mdc-button mdc-button--raised" type="submit" value="search" formtarget="_blank">Search</button>  
</div>


<input type="hidden" name="data_fetch" value="1" />
</form>

</body>
</html>
<?php
header('Access-Control-Allow-Origin: *');

$link = mysqli_connect("hostname", "db_user", "password", "db_name");

if(isset($_GET['data_fetch'])) {
$book_name = mysqli_real_escape_string($link,$_GET['book_name']);
}

$sql="Select * from cs where TITLE like '$book_name%'";
$result = mysqli_query($link,$sql);

if(mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)){
        echo "<div class='space'>";
        echo "<div class='mdc-card mdc-elevation--z1<24> card-body'>";
        echo "<div class='my-card-content' tabindex='0'>";
        echo "<h2 class='mdc-button__label'>".$row["Title"]."</h2>";
        echo "<span class='mdc-button__label'><B>By ".$row["Author1"]."</b></span><br>";
        echo "<span class='mdc-button__label'>Accession no. ".$row["Acc No"]."</span><br>";
        echo "<span class='mdc-button__label'>Publisher : ".$row["Publisher"]."</span><br>";
        echo "<span class='mdc-button__label'>Cost (Rs) : ".$row["Item Cost(Rs)"]."</span><br>";
        echo "<span class='mdc-button__label'>Availability : ".$row["availability"]."</span><br>";
        echo "</div>"; 
        echo "</div>"; 
        echo "</div>";        
    }

}

mysqli_close($link);

?>
