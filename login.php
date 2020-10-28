<?php
$email = $_POST['email'];
$password = $_POST['password'];
if ($email)
{
    $at = strpos($email, "@");
    if ($at>1){
        if (strlen($password)>7)
        {
            echo "email: $email<br/>password: $password";
        }
        else{
            echo "Invalid or missing password";
        }
    }
    else
        echo "Invalid email address";
}else{
    echo "Email missing";
}
?>
<div><a href="index.html">Home</a></div>
