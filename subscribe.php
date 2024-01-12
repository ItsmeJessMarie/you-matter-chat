<?php
if (isset($_POST['submit'])) {
        $email = $_POST['email'];

        if(mail($email)) {
            echo "Email Sent Successfully";
        } else {
            echo "Email Failed";
        }
}
?>