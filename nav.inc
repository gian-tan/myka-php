<!DOCTYPE html>
<html lang="en">
<body>
<?php
echo "<img src='styles/images/logo.png' id='logo' alt='mykalogo' />";
//Header Conditions
$host = $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];
if($host == "mercury.swin.edu.au/cos60004/s102402352/assignment003/index.php") 
{
    echo "<div class='header'><h1>Homepage</h1></div>";
}
if($host == "mercury.swin.edu.au/cos60004/s102402352/assignment003/jobs.php") 
{
    echo "<div class='header'><h1>Jobs</h1></div>";
}
if($host == "mercury.swin.edu.au/cos60004/s102402352/assignment003/apply.php") 
{
    echo "<div class='header'><h1>Apply</h1></div>";
}
if($host == "mercury.swin.edu.au/cos60004/s102402352/assignment003/about.php") 
{
    echo "<div class='header'><h1>About Us</h1></div>";
}
if($host == "mercury.swin.edu.au/cos60004/s102402352/assignment003/enhancements.php") 
{
    echo "<div class='header'><h1>Enhancements</h1></div>";
}
if($host == "mercury.swin.edu.au/cos60004/s102402352/assignment003/manage.php") 
{
    echo "<div class='header'><h1>EOI Management</h1></div>";
}
if($host == "mercury.swin.edu.au/cos60004/s102402352/assignment003/search.php") 
{
    echo "<div class='header'><h1>Search Result</h1></div>";
}

echo "
<header>
<div class='header'>

<nav id='navi'>
	<a href='index.php'>Home</a>
	<a href='jobs.php'>Jobs</a>
	<a href='apply.php'>Apply</a>
	<a href='about.php'>About Us</a>
	<a href='enhancements.php'>Enhancements</a>
	<a href='manage.php'>Management</a>
</nav>
</header>
</div>
"


?>
</body>
</html>