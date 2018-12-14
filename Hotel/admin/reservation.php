<?php
include('db.php');

// use PHPMailer\PHPMailer\PHPMailer;
// use PHPMailer\PHPMailer\Exception;
// use PHPMailer\PHPMailer\SMTP;
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>RESERVATION SUNRISE HOTEL</title>
	<!-- Bootstrap Styles-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FontAwesome Styles-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
        <!-- Custom Styles-->
    <link href="assets/css/custom-styles.css" rel="stylesheet" />
     <!-- Google Fonts-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />

    <script src='https://www.google.com/recaptcha/api.js'></script>

</head>
<body>
    <div id="wrapper">
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">

                    <li>
                        <a  href="../index.php"><i class="fa fa-home"></i> Homepage</a>
                    </li>
                    
					</ul>

            </div>

        </nav>
       
        <div id="page-wrapper" >
            <div id="page-inner">
			 <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-header">
                            RESERVATION <small></small>
                        </h1>
                    </div>
                </div> 
                 
                                 
            <div class="row">
                
                <div class="col-md-5 col-sm-5">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            PERSONAL INFORMATION
                        </div>
                        <div class="panel-body">
						<form name="form" method="post">
                            <div class="form-group">
                                            <label>Title*</label>
                                            <select name="title" class="form-control" required >
												<option value selected ></option>
                                                <option value="Dr.">Dr.</option>
                                                <option value="Miss.">Miss.</option>
                                                <option value="Mr.">Mr.</option>
                                                <option value="Mrs.">Mrs.</option>
												<option value="Prof.">Prof.</option>
												<option value="Rev .">Rev .</option>
												<option value="Rev . Fr">Rev . Fr .</option>
                                            </select>
                              </div>
							  <div class="form-group">
                                            <label>First Name</label>
                                            <input name="fname" class="form-control" required>
                                            
                               </div>
							   <div class="form-group">
                                            <label>Last Name</label>
                                            <input name="lname" class="form-control" required>
                                            
                               </div>
							   <div class="form-group">
                                            <label>Email</label>
                                            <input name="email" type="email" class="form-control" required>
                                            
                               </div>
							   <div class="form-group">
                                            <label>Nationality*</label>
                                            <label class="radio-inline">
                                                <input type="radio" name="nation"  value="Indonesian" checked="">Indonesian
                                            </label>
                                            <label class="radio-inline">
                                                <input type="radio" name="nation"  value="Non Indonesian">Non Indonesian
                                            </label>
                         
                                </div>
								<?php

								$countries = array("Afghanistan", "Albania", "Algeria", "American Samoa", "Andorra", "Angola", "Anguilla", "Antarctica", "Antigua and Barbuda", "Argentina", "Armenia", "Aruba", "Australia", "Austria", "Azerbaijan", "Bahamas", "Bahrain", "Bangladesh", "Barbados", "Belarus", "Belgium", "Belize", "Benin", "Bermuda", "Bhutan", "Bolivia", "Bosnia and Herzegowina", "Botswana", "Bouvet Island", "Brazil", "British Indian Ocean Territory", "Brunei Darussalam", "Bulgaria", "Burkina Faso", "Burundi", "Cambodia", "Cameroon", "Canada", "Cape Verde", "Cayman Islands", "Central African Republic", "Chad", "Chile", "China", "Christmas Island", "Cocos (Keeling) Islands", "Colombia", "Comoros", "Congo", "Congo, the Democratic Republic of the", "Cook Islands", "Costa Rica", "Cote d'Ivoire", "Croatia (Hrvatska)", "Cuba", "Cyprus", "Czech Republic", "Denmark", "Djibouti", "Dominica", "Dominican Republic", "East Timor", "Ecuador", "Egypt", "El Salvador", "Equatorial Guinea", "Eritrea", "Estonia", "Ethiopia", "Falkland Islands (Malvinas)", "Faroe Islands", "Fiji", "Finland", "France", "France Metropolitan", "French Guiana", "French Polynesia", "French Southern Territories", "Gabon", "Gambia", "Georgia", "Germany", "Ghana", "Gibraltar", "Greece", "Greenland", "Grenada", "Guadeloupe", "Guam", "Guatemala", "Guinea", "Guinea-Bissau", "Guyana", "Haiti", "Heard and Mc Donald Islands", "Holy See (Vatican City State)", "Honduras", "Hong Kong", "Hungary", "Iceland", "India", "Indonesia", "Iran (Islamic Republic of)", "Iraq", "Ireland", "Israel", "Italy", "Jamaica", "Japan", "Jordan", "Kazakhstan", "Kenya", "Kiribati", "Korea, Democratic People's Republic of", "Korea, Republic of", "Kuwait", "Kyrgyzstan", "Lao, People's Democratic Republic", "Latvia", "Lebanon", "Lesotho", "Liberia", "Libyan Arab Jamahiriya", "Liechtenstein", "Lithuania", "Luxembourg", "Macau", "Macedonia, The Former Yugoslav Republic of", "Madagascar", "Malawi", "Malaysia", "Maldives", "Mali", "Malta", "Marshall Islands", "Martinique", "Mauritania", "Mauritius", "Mayotte", "Mexico", "Micronesia, Federated States of", "Moldova, Republic of", "Monaco", "Mongolia", "Montserrat", "Morocco", "Mozambique", "Myanmar", "Namibia", "Nauru", "Nepal", "Netherlands", "Netherlands Antilles", "New Caledonia", "New Zealand", "Nicaragua", "Niger", "Nigeria", "Niue", "Norfolk Island", "Northern Mariana Islands", "Norway", "Oman", "Pakistan", "Palau", "Panama", "Papua New Guinea", "Paraguay", "Peru", "Philippines", "Pitcairn", "Poland", "Portugal", "Puerto Rico", "Qatar", "Reunion", "Romania", "Russian Federation", "Rwanda", "Saint Kitts and Nevis", "Saint Lucia", "Saint Vincent and the Grenadines", "Samoa", "San Marino", "Sao Tome and Principe", "Saudi Arabia", "Senegal", "Seychelles", "Sierra Leone", "Singapore", "Slovakia (Slovak Republic)", "Slovenia", "Solomon Islands", "Somalia", "South Africa", "South Georgia and the South Sandwich Islands", "Spain", "Sri Lanka", "St. Helena", "St. Pierre and Miquelon", "Sudan", "Suriname", "Svalbard and Jan Mayen Islands", "Swaziland", "Sweden", "Switzerland", "Syrian Arab Republic", "Taiwan, Province of China", "Tajikistan", "Tanzania, United Republic of", "Thailand", "Togo", "Tokelau", "Tonga", "Trinidad and Tobago", "Tunisia", "Turkey", "Turkmenistan", "Turks and Caicos Islands", "Tuvalu", "Uganda", "Ukraine", "United Arab Emirates", "United Kingdom", "United States", "United States Minor Outlying Islands", "Uruguay", "Uzbekistan", "Vanuatu", "Venezuela", "Vietnam", "Virgin Islands (British)", "Virgin Islands (U.S.)", "Wallis and Futuna Islands", "Western Sahara", "Yemen", "Yugoslavia", "Zambia", "Zimbabwe");

								?>
								<div class="form-group">
                                            <label>Passport Country*</label>
                                            <select name="country" class="form-control" required>
												<option value selected ></option>
                                                <?php
												foreach($countries as $key => $value):
												echo '<option value="'.$value.'">'.$value.'</option>'; //close your tags!!
												endforeach;
												?>
                                            </select>
								</div>
                                <div class="form-group">
                                            <label>Identity Number</label>
                                            <input name="identity" type ="text" class="form-control" required>
                                            
                               </div>
								<div class="form-group">
                                            <label>Phone Number</label>
                                            <input name="phone" type ="text" class="form-control" required>
                                            
                               </div>
							   
                        </div>
                        
                    </div>
                </div>
                
                  
            <div class="row">
                <div class="col-md-6 col-sm-6">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            RESERVATION INFORMATION
                        </div>
                        <div class="panel-body">
								<div class="form-group">
                                            <label>Type Of Room *</label>
                                            <select name="troom"  class="form-control" required>
												<option value selected ></option>
                                                <option value="3" <?=$_GET['id'] == '3' ? ' selected="selected"' : '';?>>SINGLE ROOM</option>
                                                <option value="4" <?=$_GET['id'] == '4' ? ' selected="selected"' : '';?>>TWIN ROOM</option>
												<option value="5" <?=$_GET['id'] == '5' ? ' selected="selected"' : '';?>>QUAD ROOM</option>
												<option value="6" <?=$_GET['id'] == '6' ? ' selected="selected"' : '';?>>KING ROOM</option>
                                            </select>
                              </div>
							 <!--  <div class="form-group">
                                            <label>No.of Rooms *</label>
                                            <select name="nroom" class="form-control" required>
												<option value selected ></option>
                                                <option value="1">1</option>
                                               <option value="2">2</option>
												<option value="3">3</option>
												<option value="4">4</option>
												<option value="5">5</option>
												<option value="6">6</option>
												<option value="7">7</option> -->
                                       <!--      </select>
                              </div> -->
							 
							  <!-- -->
							  <div class="form-group">
                                            <label>Meal Plan</label>
                                            <select name="meal" class="form-control"required>
												<option value selected ></option>
                                                <option value="Room only">Room only</option>
                                                <option value="Breakfast">Breakfast</option>
												<option value="Half Board">Half Board</option>
												<option value="Full Board">Full Board</option>
                                            </select>
                              </div>
							  <div class="form-group">
                                            <label>Check-In</label>
                                            <input name="cin" type ="date" class="form-control">
                                            
                               </div>
							   <div class="form-group">
                                            <label>Check-Out</label>
                                            <input name="cout" type ="date" class="form-control">
                                            
                               </div>
                       </div>
                        
                    </div>
                </div>
				
				
                <div class="col-md-12 col-sm-12">
                    <div class="well">
                        <h4>HUMAN VERIFICATION</h4>
                        <div class="g-recaptcha" data-callback="onHuman" data-sitekey="6Ldqrn8UAAAAAKbr_Lc9jRMTy5-3xDguDswTZeAT"></div>
                        <INPUT type="hidden" id="captcha" name="captcha" value="">
						<input type="submit" name="submit" class="btn btn-primary">
						<?php
                            include 'encrypted.php';
                            include 'phpqrcode/qrcode.php';
                            $kdpesanstr = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890';
                            $kdpesanshuffle = str_shuffle($kdpesanstr);
                            $kdpesan = substr($kdpesanshuffle,0,10);
                            $kdpesanres = mysqli_real_escape_string($con, $kdpesan);
                            $tr = "";
                            if($troom = "3")
                            {
                                $tr = "Single Room";
                            }
                            else if($troom = "4")
                            {
                                $tr = "Twin Room";
                            }
                            else if($troom = "5")
                            {
                                $tr = "Quad Room";
                            }
                            else
                            {
                                $tr = "King Room";
                            }
							if(isset($_POST['submit']))
							{

                                $secret = "6Ldqrn8UAAAAANoDmrOVYmEijNNlT1BVmsCarXjQ";
                                $ip = $_SERVER['REMOTE_ADDR'];
                                $captcha = $_POST['captcha'];
                                $url = "https://www.google.com/recaptcha/api/siteverify?secret=$secret&response=$captcha&remoteip=$ip";
                                $rsp  = file_get_contents($url);
                                $arr = json_decode($rsp,TRUE);
                                if($arr['success'])
                                {    
                                    $identity = $_POST['identity'];
                                    $email = $_POST['email'];
                                    $name = $_POST['fname'];
                                    $troom = $_POST['troom'];
                                    $cin = $_POST['cin'];
                                    $cout = $_POST['cout'];
                                    $meal = $_POST['meal'];
                                    $title = $_POST['title'];
                                    $fname = $_POST['fname'];
                                    $lname = $_POST['lname'];

                                    

                                    $emailres = mysqli_real_escape_string($con,$email);
                                    $identityenc = my_simple_crypt( $identity, 'e' );
                                    $identitye = mysqli_real_escape_string($con, $identityenc);
                                    $kdpesanenc = my_simple_crypt( $kdpesan, 'e' );
                                    $kdpesane = mysqli_real_escape_string($con, $kdpesanenc);
                                    $kdpesanimg = qrcode($kdpesanres);

									$con=mysqli_connect("localhost","root","","hotel");
									$check="SELECT * FROM roombook WHERE email = '$_POST[email]'";
									$rs = mysqli_query($con,$check);
									$data = mysqli_fetch_array($rs, MYSQLI_NUM);
									

									$new ="Not Confirm";
									$newUser="INSERT INTO `roombook`(`Title`, `FName`, `LName`, `Email`, `National`, `Country`, `identitynumber`, `kodepemesanan` , `Phone`, `TRoom`, `Meal`, `cin`, `cout`,`stat`,`nodays`) VALUES ('$_POST[title]','$_POST[fname]','$_POST[lname]','$_POST[email]','$_POST[nation]','$_POST[country]','$identitye','$kdpesane','$_POST[phone]','$_POST[troom]','$_POST[meal]','$_POST[cin]','$_POST[cout]','$new',datediff('$_POST[cout]','$_POST[cin]'))";
                                       

                                            // $to = $emailres;
                                            // $subject = "Booking code";
                                            // $txt = "Code ".$kdpesan;
                                            // $headers = "From: @example.com" . "\r\n" .
                                            // "CC: somebodyelse@example.com";

                                            // mail($to,$subject,$txt,$headers);
                                    require 'phpmailer/PHPMailerAutoload.php';

                                    $mail = new PHPMailer();
                                    //$mail->SMTPDebug = 2;
                                    //$mail->AuthType = 'XOAUTH2';
                                    $mail->isSMTP();
                                    $mail->Host = "smtp.gmail.com";
                                    $mail->SMTPSecure = "ssl";
                                    $mail->Port = 465;
                                    $mail->SMTPAuth = true;
                                    $mail->Username = 'ubayahotel0918@gmail.com';
                                    $mail->Password = 'ubaya1818';
                                    $mail->AddEmbeddedImage($kdpesanres.'.png', 'qr');
                                    $mail->isHTML(true);
                                    $mail->setFrom('ubayahotel0918@gmail.com', 'Ubaya Hotel');
                                    $mail->addAddress($emailres);
                                    $mail->Subject = 'Booking Success';
                                    $mail->Body = "<h1>Thank you for Booking at Ubaya Hotel this is your Booking Code</h1>
                                    <div style='text-align: center;'>
                                    <p><img src=\"cid:qr\"</p>
                                    <p>".$kdpesanres."</p>
                                    <p>Name : ".$title." ".$fname." ".$lname."</p>
                                    <p>Room : ".$tr."</p>
                                    <p>Meal : ".$meal."</p>
                                    <p>Check In : ".$cin."</p>
                                    <p>Check Out : ".$cout."</p>
                                    </div>";
                                        
                                    if ($mail->send())
                                    {
                                        echo "<script type='text/javascript'> alert('Your booking code has been sent on your email.')</script>";
                                    }
                                    else
                                    {
                                        echo "<script type='text/javascript'> alert('$mail->ErrorInfo')</script>";
                                    }
					   				if (mysqli_query($con,$newUser))
									{
										echo "<script type='text/javascript'> alert('Your Booking application has been sent')</script>";
									}
									else
									{
									   echo "<script type='text/javascript'> alert('Error adding user in database')</script>";
									}
									
							    }
                                else
                                {
                                    echo "<script type='text/javascript'> alert('Please Check on Human Verification First')</script>";
                                }
                            }
							?>
						</form>
							
                    </div>
                </div>
            </div>
           
                
                </div>
                    
            
				
					</div>
			 <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
        </div>
     <!-- /. WRAPPER  -->
    <!-- JS Scripts-->
    <!-- jQuery Js -->
    <script src="assets/js/jquery-1.10.2.js"></script>
      <!-- Bootstrap Js -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- Metis Menu Js -->
    <script src="assets/js/jquery.metisMenu.js"></script>
      <!-- Custom Js -->
    <script src="assets/js/custom-scripts.js"></script>
    
   
</body>
</html>
<SCRIPT type="text/javascript"> 
  function onHuman(response) { 
    document.getElementById('captcha').value = response; 
  } 
</SCRIPT>