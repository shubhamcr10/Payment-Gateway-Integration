<?php
$con= mysqli_connect("localhost", "root", "", "query");
$name="'".$_GET['name']."'";
$is="'".$_GET['is']."'";
$ph=$_GET['ph'];
$em="'".$_GET['em']."'";
$msg="'".$_GET['msg']."'";



$query="insert into contact(Name,issue,phone,email,message) values($name,$is,$ph,$em,$msg)";

//echo $query;
$ins= mysqli_query($con, $query);
?>
<html>
    <body><center>
        <h1><b>THANK YOU</b></h1></center>
    </body>
</html>

