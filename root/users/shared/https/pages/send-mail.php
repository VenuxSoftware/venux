<?php

// variables start
$name = "";
$email = "";
$message = "";

$name = trim($_POST['contactNameField']);
$email = trim($_POST['contactEmailField']);
$message = trim($_POST['contactMessageTextarea']);
$emailAddress = 'info@venux.com';
$emailHeader = '';
// variables end
// email address starts
//$emailAddress = 'contact@venux.com';



/*==========================================================================================

 			UPDATE: '$emailAddress' to correct associated email adressed
			
==========================================================================================*/

$radioButtonSelection = $_POST['contactReason'];
switch ($radioButtonSelection) {
    case 'customer-service':
		$emailAddress = 'support@venux.com';
		$emailHeader = 'Customer Service';
	break;
    case 'feedback':
		$emailAddress = 'feedback@venux.com';
		$emailHeader = 'Feedback';
	break;
    case 'suggestions':
		$emailAddress = 'suggestions@venux.com';
		$emailHeader = 'Suggestions';		
	break;
    case 'other':
		$emailAddress = 'info@venux.com';
		$emailHeader = 'Other';			
	break;	
	case 'alex':
		$emailAddress = 'alexz@venux.com';
		$emailHeader = 'Alex Z';		
	break;
}

// email address ends

$subject = "$emailHeader - Contact request from VENUX.COM: $name";
$message = "<strong>$emailHeader - </strong> <strong>From:</strong> $name <br/><br/> <strong>Message:</strong> $message";

$headers .= 'From: ' . $name . '<' . $email . '>' . "\r\n";
$headers .= 'Reply-To: ' . $email . "\r\n";

$headers .= 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

//send email function starts
//mail($emailAddress, $subject, $message, $headers);

/*
Redirect if success or failure using*/

$isSuccess = mail($emailAddress, $subject, $message, $headers);
    if($isSuccess){
        echo header('Location: validation/thankyou.html');
    }else{
        echo header('Location: validation/error.html');
    }
/*
can also try 

	$result = $mail->Send();
	echo $result ? header("Location: ../thankyou.php") : header("Location: ../error.php");
*/

//send email function ends
?>