<?php
    if (isset($_POST['submit'])) {
        $name = $_POST['name'];
        $emailFrom = $_POST['email'];
        $phone = $_POST['phone'];
        $subject = $_POST['subject'];
        $message = $_POST['message'];

        $mailTO = 'loemant@outlook.com';
        $headers = "From: ".$emailFrom;
        $txt = "You have received an email from ".$name;.".\n\n".$message;



        mail($mailTO, $subject, $txt, $headers);

        header("Location: contact.html?mailsent");
    }

?>