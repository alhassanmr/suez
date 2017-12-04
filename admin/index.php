<!DOCTYPE html>
<html lang="en" class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="UTF-8" />

        <title>SUEZ LOGIN </title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <meta name="description" content="Login and Registration Form with HTML5 and CSS3" />
        <meta name="keywords" content="html5, css3, form, switch, animation, :target, pseudo-class" />
        <meta name="author" content="Codrops" />
        <link rel="shortcut icon" href="../favicon.ico"> 
        <link rel="stylesheet" type="text/css" href="css/demo.css" />
        <link rel="stylesheet" type="text/css" href="css/style3.css" />
		<link rel="stylesheet" type="text/css" href="css/animate-custom.css" />
    </head>
    <body>
        <div class="container">
            <!-- Codrops top bar -->
            <div class="codrops-top">
                <a href="">
                    <strong>suez Construction </strong><?php echo date('Y'); ?>
                </a>
                <span class="right">
                    </a>
                </span>
                <div class="clr"></div>
            </div><!--/ Codrops top bar -->
            <header>
                <h1>SUEZ &nbsp;&nbsp;CONSTRUCTION <span>&nbsp;&nbsp;COMPANY</span></h1>
				<nav class="codrops-demos">
				</nav>
            </header>
            <section>				
                <div id="container_demo" >
                    <div id="wrapper">
                        <div id="login" class="animate form">
                            <form  action="authenticate.php" method="post" autocomplete="off"> 
                               <h1>LOGIN WITH YOUR CREDENTIALS</h1> 
								<center><?php 

									$errors = array(
										1=>"Invalid user name or password, Try again",
										2=>"Please login to access this area"
									  );

									$error_id = isset($_GET['err']) ? (int)$_GET['err'] : 0;

									if ($error_id == 1) {
											echo '<p class="text-danger">'.$errors[$error_id].'</p>';
										}elseif ($error_id == 2) {
											echo '<p class="text-danger">'.$errors[$error_id].'</p>';
										}
								   ?></center> <br><br>								
								
                                <p> 
                                    <label for="username" class="uname" data-icon="u" >Enter Your Username</label>
                                    <input id="username" name="username" required="required" type="text" placeholder="username or employee id"/>
                                </p>
                                <p> 
                                    <label for="password" class="youpasswd" data-icon="p"> Enter Your password </label>
                                    <input id="password" name="password" required="required" type="password" placeholder="eg. X8df!90EO" /> 
                                </p>
                                <p class="login button"> 
                                    <input type="submit" value="Login" /> 
								</p>
                                <p class="change_link">
									
								</p>
                            </form>
                        </div>
						
                    </div>
                </div>  
            </section>
        </div>
    </body>
</html>