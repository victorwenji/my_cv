<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
    <title></title>
</head>
<body>
    <div class="coordonate" id="coordonate">
        <div class="Buttonsent" id="Buttonsent">
            <center>
                <img src="image/icons8_sent.ico" alt="" class="sent">
            </center>
        </div>
        <div class="Buttonsent1" id="Buttonsent1" style="">
            <center>
                <a href="sendcode.php">
                    <img src="image/R.png" alt="" class="sent">
                </a>
            </center>
        </div>
        <div class="Buttonsent2" id="Buttonsent2">
            <center>
                <a href="allinformation.php">
                    <img src="image/Telegram.png" alt="" class="sent">
                </a>
            </center>
        </div>
        <div class="Buttonsent3" id="Buttonsent3">
            <center>
                <img src="image/telecharger.png" alt="" class="sent">
            </center>
        </div>
        <div class="Buttonsent4" id="Buttonsent4">
            <center>
                <img src="image/WhatsApp.png" alt="" class="sent">
            </center>
        </div>
        <br>
        <div class="birthday" id="birthday">
            <img src="image/birthday_cake_24px.png" alt="" class="leftIcon">
            <div style="margin-left: 20px; width:100%;">
                <div class="textany"><?php echo $infodate['date'] ?></div>
                <div class="textany"><?php echo $infoorigine['origine'] ?></div>
                <div class="textany"><?php echo $infosituation['situation'] ?></div>
                <div class="bottomLine"></div>
            </div>
        </div>
        <div class="address" id="address">
            <img src="image/location_filled_50px.png" alt="" class="leftIcon">
            <div style="margin-left: 20px; width:100%;">
                <div class="textany"><?php echo $infolieu['lieu'] ?> </div>
                <div class="textany"><?php echo $infoville['ville'] ?></div>
                <div class="textany"><?php echo $infomap['map'] ?></div>
                <div class="bottomLine"></div>
            </div>
        </div>
        <div class="telephone" id="telephone">
            <img src="image/phone_24px.png" alt="" class="leftIcon">
            <div style="margin-left: 20px; width:100%;">
                <div class="textany"><?php echo $infonumero['numero'] ?></div>
                <div class="textany"><?php echo $infoapp['app'] ?></div>
                <div class="bottomLine"></div>
            </div>
        </div>
        <div class="mail" id="mail">
            <img src="image/filled_message_24px.png" alt="" class="leftIcon">
            <div style="margin-left: 20px; width:100%;">
                <div class="textany"><?php echo $infoemail['email'] ?></div>
                <div class="textany"><?php echo $infosite['site'] ?></div>
            </div>
        </div>
        <div class="informationproject" id="informationproject">
            <br>
            <div class="textany"><?php echo $infoproject['projet'] ?></div>
            <div class="textany"><?php echo $infocontact['contact'] ?></div>
            <div class="textany"><?php echo $infoexperience['experience'] ?></div>
        </div>
    </div> 
</body>
</html>

  <!--  <ul class="premier">
            <li class="deroulant">
               <a href="#">
                   <div class="Buttonsent" id="Buttonsent">
                        <center>
                            <img src="image/icons8_sent.ico" alt="" class="sent">
                        </center>
                    </div> 
                </a>
                <ul class="sous">
                    <li>
                        <div class="circleButton" id="circleButton">
                            <img src="image/telecharger.png" alt="" class="sent">
                        </div>
                    </li>
                    <li>
                        <div class="circleButton" id="circleButton">
                            <img src="image/mail.jpg" alt="" class="sent">
                        </div>
                    </li>
                    <li>
                        <div class="circleButton" id="circleButton">
                            <img src="image/Telegram.png" alt="" class="sent">
                        </div>
                    </li>
                    <li>
                        <div class="circleButton" id="circleButton">
                            <img src="image/WhatsApp.png" alt="" class="sent">
                        </div>
                    </li>
                </ul>
            </li>
        </ul> -->