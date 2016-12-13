<!DOCTYPE HTML>
<!-- Mirrored from www.enableds.com/products/materialish/page-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 25 Aug 2015 13:51:09 GMT -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="user-scalable=no, initial-scale=1.0, maximum-scale=1.0 minimal-ui"/>
<meta name="apple-mobile-web-app-capable" content="yes"/>
<meta name="apple-mobile-web-app-status-bar-style" content="black">

<link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/splash/splash-icon.png">
<link rel="apple-touch-startup-image" href="images/splash/splash-screen.png" 			media="screen and (max-device-width: 320px)" />  
<link rel="apple-touch-startup-image" href="images/splash/splash-screen%402x.png" 		media="(max-device-width: 480px) and (-webkit-min-device-pixel-ratio: 2)" /> 
<link rel="apple-touch-startup-image" sizes="640x1096" href="images/splash/splash-screen%403x.png" />
<link rel="apple-touch-startup-image" sizes="1024x748" href="http://enableds.com/products/materialish/images/splash/splash-screen-ipad-landscape" media="screen and (min-device-width : 481px) and (max-device-width : 1024px) and (orientation : landscape)" />
<link rel="apple-touch-startup-image" sizes="768x1004" href="images/splash/splash-screen-ipad-portrait.png" media="screen and (min-device-width : 481px) and (max-device-width : 1024px) and (orientation : portrait)" />
<link rel="apple-touch-startup-image" sizes="1536x2008" href="images/splash/splash-screen-ipad-portrait-retina.png"   media="(device-width: 768px)	and (orientation: portrait)	and (-webkit-device-pixel-ratio: 2)"/>
<link rel="apple-touch-startup-image" sizes="1496x2048" href="images/splash/splash-screen-ipad-landscape-retina.png"   media="(device-width: 768px)	and (orientation: landscape)	and (-webkit-device-pixel-ratio: 2)"/>

<title>Epsilon Mobile Framework - Version 2.0</title>

<link href="css/framework.css" 		 rel="stylesheet" type="text/css">
<link href="css/style.css"     		 rel="stylesheet" type="text/css">
<link href="css/owl.theme.css" 		 rel="stylesheet" type="text/css">
<link href="css/swipebox.css"		 rel="stylesheet" type="text/css">
<link href="css/font-awesome.css"	 rel="stylesheet" type="text/css">
<link href="css/animate.css"			 rel="stylesheet" type="text/css">

</head>
<body> 
 <div id="preloader">
	<div id="status">
    	<p class="center-text">
			Blague...
            <em>pendant que le téléchargement des compnents!</em>
        </p>
    </div>
</div> 
<div class="all-elements">
    <div class="snap-drawers">
        <!-- Left Sidebar-->
        <div class="snap-drawer snap-drawer-left">
            <div class="sidebar-header">
                <a href="#" class="sidebar-logo"></a>
                <p>S'informer depuis chez soi</p>
            </div>
             
            
            <div class="decoration"></div>
            <ul class="sidebar-navigation full-bottom">
                <li>
                    <a href="#"><i class="fa fa-facebook"></i><em>Facebook</em></a>
                </li>
                <li>
                    <a href="#"><i class="fa fa-twitter"></i><em>Twitter</em></a>
                </li>
               <!-- <li>
                    <a href="gallery.html"><i class="fa fa-camera"></i><em>Gallery</em></a>
                </li>-->
                <li>
                    <a href="#"><i class="fa fa-google-plus"></i><em>Google plus</em></a>
                </li>
                
                <li>
                    <a class="sidebar-close" href="#"><i class="fa fa-times"></i><em>Close</em></a>
                </li>
            </ul>
            
             <div class="decoration"></div>
            <ul class="sidebar-navigation full-bottom">
                <li>
                    <a href="page-error.html"><i class="fa fa-exclamation"></i><em>Temes et conditions</em></a>
                </li>
                <li>
                    <a href="page-soon.html"><i class="fa fa-clock-o"></i><em>Utilisation</em></a>
                </li>
                <li>
                    <a href="page-profile.html"><i class="fa fa-user"></i><em>A propos</em></a>
                </li>
                <li>
                    <a href="inscription.php"><i class="fa fa-lock"></i><em>Inscription</em></a>
                </li>
                <li>
                    <a href="connexion.php"><i class="fa fa-info"></i><em>Connexion</em></a>
                </li>
              <!--  <li>
                    <a href="page-timeline.html"><i class="fa fa-navicon"></i><em>Timeline Page</em></a>
                </li>
                <li>
                    <a class="sidebar-close" href="#"><i class="fa fa-times"></i><em>Close</em></a>
                </li>-->
            </ul>
           
            <div class="decoration"></div>
            <p class="sidebar-copyright">Copyright 2015<br>All rights reserved.</p>
        </div>
        <!-- Right Sidebar -->
        <div class="snap-drawer snap-drawer-right">
            <div class="sidebar-header">
                <a href="#" class="sidebar-logo"></a>
                <p>S'informer depuis chez soi</p>
            </div>
                      
            <div class="sidebar-form">
                <div class="contact-form no-bottom"> 
                    <div class="formSuccessMessageWrap" id="formSuccessMessageWrap">
                        <div class="big-notification green-notification">
                            <h3 class="uppercase">Message Sent </h3>
                            <a href="#" class="close-big-notification">x</a>
                            <p>Your message has been successfuly sent. Please allow up to 48 hours for a reply! Thank you!</p>
                        </div>
                    </div>

                    <form action="http://www.enableds.com/products/materialish/php/contact.php" method="post" class="contactForm" id="contactForm">
                        <fieldset>
                            <div class="formValidationError" id="contactNameFieldError">
                                <div class="static-notification-red tap-dismiss-notification">
                                    <p class="center-text uppercase">Name is required!</p>
                                </div>
                            </div>             
                            <div class="formValidationError" id="contactEmailFieldError">
                                <div class="static-notification-red tap-dismiss-notification">
                                    <p class="center-text uppercase">Mail address required!</p>
                                </div>
                            </div> 
                            <div class="formValidationError" id="contactEmailFieldError2">
                                <div class="static-notification-red tap-dismiss-notification">
                                    <p class="center-text uppercase">Mail address must be valid!</p>
                                </div>
                            </div> 
                            <div class="formValidationError" id="contactMessageTextareaError">
                                <div class="static-notification-red tap-dismiss-notification">
                                    <p class="center-text uppercase">Message field is empty!</p>
                                </div>
                            </div>   
                            <div class="formFieldWrap">
                                <input type="text" name="contactNameField" value="Name" onfocus="if (this.value=='Name') this.value = ''" onblur="if (this.value=='') this.value = 'Name'" class="contactField requiredField" id="contactNameField"/>
                            </div>
                            <div class="formFieldWrap">
                                <input type="text" name="contactEmailField" value="Email" onfocus="if (this.value=='Email') this.value = ''" onblur="if (this.value=='') this.value = 'Email'" class="contactField requiredField requiredEmailField" id="contactEmailField"/>
                            </div>
                            <div class="formTextareaWrap">
                                <textarea onfocus="if (this.value=='Message') this.value = ''" onblur="if (this.value=='') this.value = 'Message'" name="contactMessageTextarea" class="contactTextarea requiredField" id="contactMessageTextarea">Message</textarea>
                            </div>
                            <div class="formSubmitButtonErrorsWrap">
                                <input type="submit" class="buttonWrap button button-green contactSubmitButton" id="contactSubmitButton" value="SUBMIT" data-formId="contactForm"/>
                            </div>
                        </fieldset>
                    </form>       
                </div>
            </div>
            

    </div>
    
    <!-- Page Content-->
    <div id="content" class="snap-content">
        <div class="coverpage coverpage-bg1">
            <div class="loginbox-wrapper">
                <div class="loginbox">
                    <h2 class="center-text">Bienveue </h2>
                    <?php
					if(isset($_GET['smsjdjsdsjdshdjhsdjshdjshdjshdjsdhsjdhsdhjsdhshdsjdsjdhshdssjdsds'])){
						echo' <h4 style="color:red;" class="center-text">Ce compte n\'existe pas</h4>';
					}
					elseif(isset($_GET['jfhjdkfddhfdhjkfjdfdfkjdhfjdhjfdhfjdfjdfhdhdjkkdhjdfhdjfdhfjfdkdjf'])){
						echo' <h4 style="color:green;" class="center-text">Merci pour votre participation</h4>';
					}
					elseif(isset($_GET['sms'])){
						echo' <h4 style="color:green;" class="center-text">'.$_GET['sms'].'</h4>';
					}
					else{
						echo'<h4 style="color:green;" class="center-text">Entrez vos identifiant</h4>';
					}
						
					?>
                    
                    <form method="post" action="bin/login.php">

                    <input class="loginbox-username" name="login" placeholder="numéro matricule" type="text" required value="">
                    <input class="loginbox-password" name="password" type="password" placeholder="Mot de passe" required value="">

                    <input type="submit" value="Connexion" name="connexion" class="button button-green">
                    <em>Vous n'avez pas de compte? <a href="inscription.php">S'inscrir librement</a></em>
                    </form>
                </div>
            </div>
        </div> 
    </div>  
        
    <div class="footer-menu">
        <a href="#" class="show-left-sidebar open-left"><i class="fa fa-navicon"></i></a>
        <a href="#" class="show-right-sidebar open-right"><i class="fa fa-envelope-o"></i></a>
    </div>
    
</div>
</body>

<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/jqueryui.js"></script>
<script type="text/javascript" src="js/framework.plugins.js"></script>
<script type="text/javascript" src="js/custom.js"></script>





















