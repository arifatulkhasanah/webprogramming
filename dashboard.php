<?php  
    if(defined("IS_INDEX") == false)
    {
        die("Please stop here!");
    }
?>

<h1>Dashboard</h1>

<p>Welcome, <?php echo $_SESSION['username'];?>!</p>