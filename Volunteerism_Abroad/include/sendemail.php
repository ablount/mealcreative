<?php

require_once('phpmailer/PHPMailerAutoload.php');

$toemails = array();

$toemails[] = array(
				'email' => 'hello@volunteerismabroad.com', // Your Email Address
				'name' => 'Volunteerism Abroad' // Your Name
			);

// Form Processing Messages
$message_success = 'Thank you for submitting your application! We will review and confirm your reservation shortly. After you receive your confirmation, we will schedule a time for your Skype interview.';

// Add this only if you use reCaptcha with your Contact Forms
$recaptcha_secret = 'your-recaptcha-secret-key'; // Your reCaptcha Secret

$mail = new PHPMailer();

// If you intend you use SMTP, add your SMTP Code after this Line


if( $_SERVER['REQUEST_METHOD'] == 'POST' ) {
	if( $_POST['email'] != '' ) {

		$name = isset( $_POST['name'] ) ? $_POST['name'] : '';
        $address = isset( $_POST['address'] ) ? $_POST['address'] : '';
		$email = isset( $_POST['email'] ) ? $_POST['email'] : '';
		$phone = isset( $_POST['phone'] ) ? $_POST['phone'] : '';
		$birthdate = isset( $_POST['birthdate'] ) ? $_POST['birthdate'] : '';
		$gender = isset( $_POST['gender'] ) ? $_POST['gender'] : '';
		$residence = isset( $_POST['residence'] ) ? $_POST['residence'] : '';
		$citizenship = isset( $_POST['citizenship'] ) ? $_POST['citizenship'] : '';
		$birth = isset( $_POST['birth'] ) ? $_POST['birth'] : '';
        $language1 = isset( $_POST['language1'] ) ? $_POST['language1'] : '';
        $fluency1 = isset( $_POST['fluency1'] ) ? $_POST['fluency1'] : '';
        $language2 = isset( $_POST['language2'] ) ? $_POST['language2'] : '';
        $fluency2 = isset( $_POST['fluency2'] ) ? $_POST['fluency2'] : '';
        $language3 = isset( $_POST['language3'] ) ? $_POST['language3'] : '';
        $fluency3 = isset( $_POST['fluency3'] ) ? $_POST['fluency3'] : '';
        $student = isset( $_POST['student'] ) ? $_POST['student'] : '';
        $projectfocus = isset( $_POST['projectfocus'] ) ? $_POST['projectfocus'] : '';
        $country = isset( $_POST['country'] ) ? $_POST['country'] : '';
        $start = isset( $_POST['start'] ) ? $_POST['start'] : '';
        $weeks = isset( $_POST['weeks'] ) ? $_POST['weeks'] : '';
        $housing = isset( $_POST['housing'] ) ? $_POST['housing'] : '';
        $alone = isset( $_POST['alone'] ) ? $_POST['alone'] : '';
        $ifno = isset( $_POST['ifno'] ) ? $_POST['ifno'] : '';
        $resume = isset( $_POST['resume'] ) ? $_POST['resume'] : '';
        $crime = isset( $_POST['crime'] ) ? $_POST['crime'] : '';
        $countries = isset( $_POST['countries'] ) ? $_POST['countries'] : '';
        $medical = isset( $_POST['medical'] ) ? $_POST['medical'] : '';
        $physical = isset( $_POST['physical'] ) ? $_POST['physical'] : '';
        $emergencyname = isset( $_POST['emergencyname'] ) ? $_POST['emergencyname'] : '';
        $find = isset( $_POST['find'] ) ? $_POST['find'] : '';
        $comments = isset( $_POST['comments'] ) ? $_POST['comments'] : '';
        $iagree = isset( $_POST['iagree'] ) ? $_POST['iagree'] : '';
        
        
        
		$subject = isset($subject) ? $subject : 'New Message From Enrollment Form';

		$botcheck = $_POST['template-contactform-botcheck'];

		if( $botcheck == '' ) {

			$mail->SetFrom( $email , $name );
			$mail->AddReplyTo( $email , $name );
			foreach( $toemails as $toemail ) {
				$mail->AddAddress( $toemail['email'] , $toemail['name'] );
			}
			$mail->Subject = $subject;

			$name = isset($name) ? "Name: $name<br><br>" : '';
            $address = isset($address) ? "Address: $address<br><br>" : '';
            $email = isset($email) ? "Email: $email<br><br>" : '';
            $phone = isset($phone) ? "Phone: $phone<br><br>" : '';
            $birthdate = isset($birthdate) ? "Birthdate: $birthdate<br><br>" : '';
            $gender = isset($gender) ? "Gender: $gender<br><br>" : '';
            $residence = isset($residence) ? "Residence: $residence<br><br>" : '';
            $citizenship = isset($citizenship) ? "Citizenship: $citizenship<br><br>" : '';
            $birth = isset($birth) ? "Country of Birth: $birth<br><br>" : '';
            $language1 = isset($language1) ? "Language 1: $language1<br><br>" : '';
            $fluency1 = isset($fluency1) ? "Fluency of Lang 1: $fluency1<br><br>" : '';
            $language2 = isset($language2) ? "Language 2: $language2<br><br>" : '';
            $fluency2 = isset($fluency2) ? "Fluency of Lang 2: $fluency2<br><br>" : '';
            $language3 = isset($language3) ? "Language 3: $language3<br><br>" : '';
            $fluency3 = isset($fluency3) ? "Fluency of Lang 3: $fluency3<br><br>" : '';
            $student = isset($student) ? "College or University: $student<br><br>" : '';
            $projectfocus = isset($projectfocus) ? "Project Focus: $projectfocus<br><br>" : '';
            $country = isset($country) ? "Desired Country: $country<br><br>" : '';
            $start = isset($start) ? "Desired Start Date: $start<br><br>" : '';
            $weeks = isset($weeks) ? "Number of Weeks: $weeks<br><br>" : '';
            $housing = isset($housing) ? "Type of Housing: $housing<br><br>" : '';
            $alone = isset($alone) ? "Volunteering Alone: $alone<br><br>" : '';
            $ifno = isset($ifno) ? "Group or People Volunteering With: $ifno<br><br>" : '';
            $resume = isset($resume) ? "Resume: $resume<br><br>" : '';
            $crime = isset($crime) ? "Convicted of a Crime: $crime<br><br>" : '';
            $countries = isset($countries) ? "Countries Visited: $countries<br><br>" : '';
            $medical = isset($medical) ? "Medical Concerns: $medical<br><br>" : '';
            $physical = isset($physical) ? "Physical Concerns: $physical<br><br>" : '';
            $emergencyname = isset($emergencyname) ? "Emergency Contact: $emergencyname<br><br>" : ''; 
            $find = isset($find) ? "Referred by: $find<br><br>" : '';
            $comments = isset($comments) ? "Questions/Comments: $comments<br><br>" : '';
            $iagree = isset($iagree) ? "Agrees to Terms: $iagree<br><br>" : '';


			$referrer = $_SERVER['HTTP_REFERER'] ? '<br><br><br>This Form was submitted from: ' . $_SERVER['HTTP_REFERER'] : '';

			$body = "$name $email $phone $service $message $referrer";

			// Runs only when File Field is present in the Contact Form
			if ( isset( $_FILES['template-contactform-file'] ) && $_FILES['template-contactform-file']['error'] == UPLOAD_ERR_OK ) {
				$mail->IsHTML(true);
				$mail->AddAttachment( $_FILES['template-contactform-file']['tmp_name'], $_FILES['template-contactform-file']['name'] );
			}

			// Runs only when reCaptcha is present in the Contact Form
			if( isset( $_POST['g-recaptcha-response'] ) ) {
				$recaptcha_response = $_POST['g-recaptcha-response'];
				$response = file_get_contents( "https://www.google.com/recaptcha/api/siteverify?secret=" . $recaptcha_secret . "&response=" . $recaptcha_response );

				$g_response = json_decode( $response );

				if ( $g_response->success !== true ) {
					echo '{ "alert": "error", "message": "Captcha not Validated! Please Try Again." }';
					die;
				}
			}

			$mail->MsgHTML( $body );
			$sendEmail = $mail->Send();

			if( $sendEmail == true ):
				echo '{ "alert": "success", "message": "' . $message_success . '" }';
			else:
				echo '{ "alert": "error", "message": "Email <strong>could not</strong> be sent due to some Unexpected Error. Please Try Again later.<br /><br /><strong>Reason:</strong><br />' . $mail->ErrorInfo . '" }';
			endif;
		} else {
			echo '{ "alert": "error", "message": "Bot <strong>Detected</strong>.! Clean yourself Botster.!" }';
		}
	} else {
		echo '{ "alert": "error", "message": "Please <strong>Fill up</strong> all the Fields and Try Again." }';
	}
} else {
	echo '{ "alert": "error", "message": "An <strong>unexpected error</strong> occured. Please Try Again later." }';
}

?>