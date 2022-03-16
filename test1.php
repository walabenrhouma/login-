<html>
    <head>
       <meta charset="utf-8">
        <link rel="stylesheet" href="style3.css" media="screen" type="text/css" />
    
    </head>
    <body> 
        <div id="container">
            
            <form action="verification.php" method="POST">
                <h1> <center>Login</center> </h1>
                
                
                <label><b>E-mail</b></label>
                <input type="text" placeholder="Entrer votre E-mail" name="E-mail" required>

                <label><b>Mot de passe </b></label>
                <input type="password" placeholder="Entrer le mot de passe" name="password" required>
	            	<div class="w-50">
		            	<label class="checkbox-wrap checkbox-primary">  
									  <input type="checkbox" checked> rapplez-moi
									  <span class="checkmark"></span>
									</label>
								</div>
                                <input type="submit" id='submit' value='se connecter' >
                                <div class="text-center">
                                </div>
						<div>
							<a href="#" class="txt1">
							<center>mot de passe oubliée ? </center>
							</a>
						</div>
                               
						<span class="txt1">
							<center>créer un compte !</center>
                            </head>
                            <body>
                                
                            </body>
                            </html>
						</span>

						<a href="#" class="txt2 hov1">
						<center>	S'inscrie </center>
                            </a> 
                    
             <?php
                if(isset($_GET['erreur'])){
                    $err = $_GET['erreur'];
                    if($err==1 || $err==2)
                        echo "<p style='color:red'>Utilisateur ou mot de passe incorrect</p>";
                }
                ?>
            </form>
        </div>
    </body>
</html>



