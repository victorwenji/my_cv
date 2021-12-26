 <?php
    
    if(isset($_POST['send']))
    {
   // 
        $mobile = $_POST['email'];
        $subject = $_POST['subject'];
        ob_start();
        require "allinformation.php";
        $body = ob_get_contents(); 
        ob_clean();

        $apiURL = 'https://api.chat-api.com/instance388948/';
        $token = 'g1qg2d9vs1a862fl';

        $phone = $mobile;

        $data = json_encode(array(
            'chatId'=>$phone.'@c.us',
            'body'=> $body,//FULL PATH and file name
            'filename'=>$body,
            'caption'=>$body
        ));

        $url = $apiURL.'message?token='.$token;
        $options = stream_context_create(['http' => [
            'method'  => 'POST',
            'header'  => 'Content-type: application/json',
            'content' => $data
        ]
        ]);
        $response = file_get_contents($url,false,$options);
        echo $response; exit; 

        header("location:sentwhatsapp.php");
    }
?>