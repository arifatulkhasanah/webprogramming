<?php  
    if(defined("IS_INDEX") == false)
    {
        die("Please stop here!");
    }
?>

<h4>
    Form Login
</h4>
<br/>

<?php
    if(isset($GET['error']) && $_GET['error'] ==1)
    {
        echo "Login gagal.";
    }
?>


<form action="index.php?page=proses_login" method="post">
    <table>
        <tr>
            <td>Username</td>
            <td>:</td>
            <td><input type="text" name="username" /></td> 
        </tr>
        <tr>
            <td>Password</td>
            <td>:</td>
            <td><input type="password" name="password" /></td> 
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td><input type="submit" /></td> 
        </tr>
    </table>
</form>