<?php
extract($_POST);

if (!$firstName)
    die ("First Name Missing!");
if (!$lastName)
    die ("Last Name Missing!");
if (!$birthday)
    die ("Birthday Missing!");

if ($email)
{
    $at = strpos($email, "@");
    if ($at>1){
        if (strlen($password)>7)
        {
            echo "Dear $firstName, thank you for registering";
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
<div><a href="project1index.html">Home</a></div>
