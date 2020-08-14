<?php 
    if(isset($_POST['submit'])) {
        $url = "https://www.google.com/recaptcha/api/siteverify";
        $privateKey = "6LduqLwZAAAAAOeUv-EYZRI_3-mjfHb2qvV48wqX";
        $response = file_get_contents($url."?secret=".$privateKey."&response=".$_POST['g-recaptcha-response']."&remoteip=".$_SERVER['REMOTE_ADDR']);
        $data = json_decode($response);
        if (isset($data->success) AND $data->success==true) {
            $error = "";
            $successMsg = "";
            if ($_POST) {
                if ($_POST['email'] && filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) === false) {
                    $error .= "The email is invalid!<br>";
                }
                if (!$_POST['email']) {
                    $error .= "An email address is required!<br>";
                }
               
                if (!$_POST['message']) {
                    $error .= "Content in the body is required!<br>";
                }
                if ($error != "") {
                    $error = '<div class="alert-danger" role="alert"><strong>There is an error with your form!</strong><br>' . $error . '</div>';
                } else {
                    $emailTo = 'chris@chrisbutler.us';
                    $subject = $_POST['subject'];
                    $message = $_POST['message'];
                    $headers = "From: ".$_POST['email'];
                    if (mail($emailTo, $subject, $message, $headers)) {
                        $successMsg = '<div class="alert-success" role="alert">The message has successfully been sent. I will contact you ASAP. Have a great day!</div>';
                    } else {
                        $error = '<div class="alert alert-danger" role="alert">There was a problem sending your message, please try again later!</div>';
                    }
                }
            }
        } else {
            $captchaFail = '<div class="alert alert-danger" role="alert"><strong>There is an error with your form!</strong><br>reCaptcha Verification Failed, Please Try Again.</div>';
        }
    }
?>

