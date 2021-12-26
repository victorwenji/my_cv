<?php
if(isset($_POST['send']))
    {
    
        $token = "";
        $mobile = $_POST['email'];
        $subject = $_POST['subject'];

        ob_start();
        require "allinformation.php";
        $body = ob_get_contents();
        ob_clean();


        $data = json_encode(array(
            'chatId'=>$mobile.'@c.us',
            'caption'=>$body
        ));

        $response = file_get_contents("");
        echo $response; exit; 

    }
    header("location:senttelegram.php");
?>