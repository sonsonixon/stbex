<?php
error_reporting(E_ALL);

$name = strip_tags($_POST['name']);
$email = strip_tags($_POST['email']);
$feedback = strip_tags($_POST['feedback']);

$errors = array();
$ids = array();

$regexname = "/^([a-zA-Z' ]+)$/";

if(empty($name)){
	array_push($errors, array("id" => "name", "message" => "Name is empty"));
}
else{
	if(!preg_match($regexname, $name)){
		array_push($errors, array("id" => "name", "message" => "Invalid name"));
	}
	else{
		array_push($ids, array("id" => "name"));
	}
}

if(empty($email)){
	array_push($errors, array("id" => "email", "message" => "Email is empty"));
}
else{
	if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
	  array_push($errors, array("id" => "email", "message" => "Invalid email"));
	}
	else{
		array_push($ids, array("id" => "email"));
	}
}

if(empty($feedback)){
	array_push($errors, array("id" => "feedback", "message" => "Feedback is empty"));
}
else{
	if(strlen($feedback) < 20){
		array_push($errors, array("id" => "feedback", "message" => "Message is too short"));
	}
	else{
		array_push($ids, array("id" => "feedback"));
	}
}

if(empty($errors)){

	$to 		 = 'snsdsonson@gmail.com';
	$subject = 'Inquiry Notification';
	$message = '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
							<html xmlns:v="urn:schemas-microsoft-com:vml">

							<head>
							    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
							    <meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0;" />
							    <meta name="viewport" content="width=600,initial-scale = 2.3,user-scalable=no">
							    <!--[if !mso]><!-- -->
							    <link href="https://fonts.googleapis.com/css?family=Work+Sans:300,400,500,600,700" rel="stylesheet">
							    <link href="https://fonts.googleapis.com/css?family=Quicksand:300,400,700" rel="stylesheet">
							    <!--<![endif]-->

							    <title></title>

							    <style type="text/css">
							        body {
							            width: 100%;
							            background-color: #ffffff;
							            margin: 0;
							            padding: 0;
							            -webkit-font-smoothing: antialiased;
							            mso-margin-top-alt: 0px;
							            mso-margin-bottom-alt: 0px;
							            mso-padding-alt: 0px 0px 0px 0px;
							        }
							        
							        p,
							        h1,
							        h2,
							        h3,
							        h4 {
							            margin-top: 0;
							            margin-bottom: 0;
							            padding-top: 0;
							            padding-bottom: 0;
							        }
							        
							        span.preheader {
							            display: none;
							            font-size: 1px;
							        }
							        
							        html {
							            width: 100%;
							        }
							        
							        table {
							            font-size: 14px;
							            border: 0;
							        }
							        
							        @media only screen and (max-width: 640px) {
							            .main-header {
							                font-size: 20px !important;
							            }
							            .main-section-header {
							                font-size: 28px !important;
							            }
							            .show {
							                display: block !important;
							            }
							            .hide {
							                display: none !important;
							            }
							            .align-center {
							                text-align: center !important;
							            }
							            .no-bg {
							                background: none !important;
							            }
							            .main-image img {
							                width: 440px !important;
							                height: auto !important;
							            }
							            .divider img {
							                width: 440px !important;
							            }
							            .container590 {
							                width: 440px !important;
							            }
							            .container580 {
							                width: 400px !important;
							            }
							            .main-button {
							                width: 220px !important;
							            }
							            .section-img img {
							                width: 320px !important;
							                height: auto !important;
							            }
							            .team-img img {
							                width: 100% !important;
							                height: auto !important;
							            }
							        }
							        
							        @media only screen and (max-width: 479px) {
							            .main-header {
							                font-size: 18px !important;
							            }
							            .main-section-header {
							                font-size: 26px !important;
							            }
							            .divider img {
							                width: 280px !important;
							            }
							            
							            .container590 {
							                width: 280px !important;
							            }
							            .container590 {
							                width: 280px !important;
							            }
							            .container580 {
							                width: 260px !important;
							            }
							            
							            .section-img img {
							                width: 280px !important;
							                height: auto !important;
							            }
							        }
							    </style>
							    <!--[if gte mso 9]><style type=”text/css”>
							        body {
							        font-family: arial, sans-serif!important;
							        }
							        </style>
							    <![endif]-->
							</head>

							<body class="respond" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
							    <!-- header -->
							    <table border="0" width="100%" cellpadding="0" cellspacing="0" bgcolor="ffffff">

							        <tr>
							            <td align="center">
							                <table border="0" align="center" width="590" cellpadding="0" cellspacing="0" class="container590">

							                    <tr>
							                        <td height="25" style="font-size: 25px; line-height: 25px;">&nbsp;</td>
							                    </tr>

							                    <tr>
							                        <td align="center">

							                            <table border="0" align="center" width="590" cellpadding="0" cellspacing="0" class="container590">

							                                <tr>
							                                    <td align="center">
							                                        <table width="360 " border="0" cellpadding="0" cellspacing="0" style="border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;" class="container590 hide">
							                                            <tr>
							                                                <td width="360" align="center" style="font-size: 14px; font-family: "Work Sans", Calibri, sans-serif; line-height: 24px;">
							                                                    <span style="color: #312c32; font-family: Quicksand, Calibri, sans-serif; letter-spacing: 3px; font-weight:700;">SBTEX CARGO SERVICES</span>
							                                                </td>
							                                            </tr>
							                                        </table>
							                                    </td>
							                                </tr>
							                            </table>
							                        </td>
							                    </tr>

							                    <tr>
							                        <td height="25" style="font-size: 25px; line-height: 25px;">&nbsp;</td>
							                    </tr>

							                </table>
							            </td>
							        </tr>
							    </table>
							    <!-- end header -->

							    <!-- big image section -->

							    <table border="0" width="100%" cellpadding="0" cellspacing="0" bgcolor="ffffff" class="bg_color">

							        <tr>
							            <td align="center">
							                <table border="0" align="center" width="590" cellpadding="0" cellspacing="0" class="container590">

							                    <tr>
							                        <td align="center" style="color: #343434; font-size: 24px; font-family: Quicksand, Calibri, sans-serif; font-weight:700;letter-spacing: 3px; line-height: 35px;" class="main-header">
							                            <!-- section text ======-->

							                            <div style="line-height: 35px">

							                                Inquiry Notification

							                            </div>
							                        </td>
							                    </tr>

							                    <tr>
							                        <td height="10" style="font-size: 10px; line-height: 10px;">&nbsp;</td>
							                    </tr>

							                    <tr>
							                        <td align="center">
							                            <table border="0" width="40" align="center" cellpadding="0" cellspacing="0" bgcolor="eeeeee">
							                                <tr>
							                                    <td height="2" style="font-size: 2px; line-height: 2px;">&nbsp;</td>
							                                </tr>
							                            </table>
							                        </td>
							                    </tr>

							                    <tr>
							                        <td height="20" style="font-size: 20px; line-height: 20px;">&nbsp;</td>
							                    </tr>

							                    <tr>
							                        <td align="left">
							                            <table border="0" width="590" align="center" cellpadding="0" cellspacing="0" class="container590">
							                                <tr>
							                                    <td align="left" style="color: #888888; font-size: 16px; font-family: "Work Sans", Calibri, sans-serif; line-height: 24px;">
							                                        <p style="line-height: 24px; margin-bottom:15px;">
							                                            You receive a new inquiry from the following:
							                                        </p>
							                                        <p style="line-height: 24px;margin-bottom:15px;">
							                                            Name: '.$name.'
							                                        </p>
							                                        <p style="line-height: 24px;margin-bottom:15px;">
							                                            Email: '.$email.'
							                                        </p>
							                                        <p style="line-height: 24px;margin-bottom:15px;">
							                                            Message: 
							                                        </p>
							                                        <p style="line-height: 24px;margin-bottom:15px; padding-left: 1.8em">
							                                            '.$feedback.'
							                                        </p>
							                                    </td>
							                                </tr>
							                            </table>
							                        </td>
							                    </tr>

							                </table>

							            </td>
							        </tr>

							        <tr>
							            <td height="40" style="font-size: 40px; line-height: 40px;">&nbsp;</td>
							        </tr>

							    </table>

							    <!-- footer ====== -->
							    <table border="0" width="100%" cellpadding="0" cellspacing="0" bgcolor="f4f4f4">

							        <tr>
							            <td height="25" style="font-size: 25px; line-height: 25px;">&nbsp;</td>
							        </tr>

							        <tr>
							            <td align="center">

							                <table border="0" align="center" width="590" cellpadding="0" cellspacing="0" class="container590">

							                    <tr>
							                        <td>
							                            <table border="0" align="left" cellpadding="0" cellspacing="0" style="border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;" class="container590">
							                                <tr>
							                                    <td align="left" style="color: #aaaaaa; font-size: 14px; font-family: "Work Sans", Calibri, sans-serif; line-height: 24px;">
							                                        <div style="line-height: 24px;">

							                                            <span style="color: #333333;">Copyright &copy; SBTEX CARGO SERVICES</span>

							                                        </div>
							                                    </td>
							                                </tr>
							                            </table>

							                            <table border="0" align="left" width="5" cellpadding="0" cellspacing="0" style="border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;" class="container590">
							                                <tr>
							                                    <td height="20" width="5" style="font-size: 20px; line-height: 20px;">&nbsp;</td>
							                                </tr>
							                            </table>

							                            <table border="0" align="right" cellpadding="0" cellspacing="0" style="border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;" class="container590">

							                                <tr>
							                                    <td align="center">
							                                        <table align="center" border="0" cellpadding="0" cellspacing="0">
							                                            <tr>
							                                                <td align="center">
							                                                    
							                                                </td>
							                                            </tr>
							                                        </table>
							                                    </td>
							                                </tr>

							                            </table>
							                        </td>
							                    </tr>

							                </table>
							            </td>
							        </tr>

							        <tr>
							            <td height="25" style="font-size: 25px; line-height: 25px;">&nbsp;</td>
							        </tr>

							    </table>
							    <!-- end footer ====== -->

							</body>

							</html>';
										 
	$headers  = "From: SBTEXT CARGO SERVICES". "\r\n";
	$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
						
	mail($to, $subject, $message, $headers);

	echo json_encode(array("code" => "success","title" => "Success", "message" => "Youre message has been sent", "ids" => $ids));
}
else{
	echo json_encode(array("code" => "error", "errors" => $errors));
}


?>