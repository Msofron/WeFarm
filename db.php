<?php
$servername = "localhost";
$username = "root";
$password = "";
$db = "wefarm";

$con = mysqli_connect($servername,$username,$password,$db);

if(!$con){
    echo"
    <script>
        alert(' can not connect to database ')
    </script>
    ";
}
?>