<?php  
    if(defined("IS_INDEX") == false)
    {
        die("Please stop here!");
    }

$username = $_POST['username'];
$password = $_POST['password'];

$cek_login =  proses_login($username,$password);

if($cek_login == true)
{
    //tandai di session
    $_SESSION['username'] = $username;

    //redirect kedasboard
    redirect_to("dashboard");
}
else 
{
    //redirect ke halaman login
    redirect_to("login_form&error=1");
}
?>