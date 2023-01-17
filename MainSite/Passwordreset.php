
<?php

$username = "Jimmy" ?>
<?php $SecretAnswer = "Charlotte" 

?>

<?php if ($_POST['username'] === $username && $_POST['SecretAnswer'] === $SecretAnswer) { include_once('NewPassword_submit.php');
        // code...
}

else { include_once('ForgottenPasswordFail.php'); } ?> 
        
<?php $_POST['SecretAnswer']; ?>
<?php $_POST['username']; ?>