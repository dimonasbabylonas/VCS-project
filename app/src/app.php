<?php 
    if(isset($_POST['submit'])) {
        $name=trim($_POST['name']);
        $email=trim($_POST['email']);
        $message=trim($_POST['message']);
    
        if(!empty($vardas) && !empty($email) && !empty($message)) {
            if(filter_var($email, FILTER_VALIDATE_EMAIL)){
            $from="$email";
            $to="dmitrij.odnosivkin@gmail.com";
            $subject="New message";
            $author='From: ' . $name . ', ' . $email;
            $message=htmlspecialchars($message);
            mail($to, $subject, $author, $message, $from);
            echo "<script>alert('Thank you. We got your message. You will be contacted soon.');</script>";
        }
    }

include ('db.php');
    }
?>