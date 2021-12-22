
<!doctype html>
<html lang="en">
	<head>
		<meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1"/>
		<link rel="stylesheet" type="text/css" href="index.css"/>
	</head>
<body>
            <center>
                <h3>Envoi des information par whatsapp</h3>
            
                <form method="post" action="sentcodewhatsapp.php">
                    <div class="container">
                        <label>Telephone:</label>
                        <input type="text"placeholder="entrez votre numero" name="email" required="required"/>
                        <br>
                        <label>Subject</label>
                        <input type="text" placeholder="le suject " name="subject" required="required"/>
                    </div>
                    <!--<div class="form-group">
                        <label>Message</label>
                        <input type="text" class="form-control" name="message" required="required"/>
                    </div>
    -->
                    <center>
                        <button  name="send">Send</button>
                        <button  onclick="location.href='#'"  type="button" class="cancelbtn">Annuler</button>
                    </center>
                </form>
            </center>
			<br />
			
		</div>
	</div>
</body>
</html>
