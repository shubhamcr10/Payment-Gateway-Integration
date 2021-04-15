
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        
        <div class="topnav">
            <?php if($_SESSION['page']=="home")
            {?>
            <a class="active" href="index.php">Home</a>
            <?php } else {
                echo "<a href='index.php'>Home</a>";
} 
if($_SESSION['page']=="donate")
{
    echo "<a class='active' href='https://rzp.io/l/lnCHY7z'>Donate</a>";
}
 else {
    echo "<a href='https://rzp.io/l/lnCHY7z'>Donate</a>";
}

if($_SESSION['page']=="about")
{
    echo "<a class='active' href='about-us.php'>About</a>";
}
 else {
    echo "<a href='about-us.php'>About</a>";
}


if($_SESSION['page']=="contact")
{
    echo "<a class='active' href='contact.php'>Contact</a></div>";
}
 else {
    echo "<a href='contact.php'>Contact</a>";
}
?>         
        </div>
                
    </body>
</html>
