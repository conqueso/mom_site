<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Amy Jalbert - contact</title>
		<link rel="stylesheet" href="css/normalize.css">
		<link href='http://fonts.googleapis.com/css?family=Raleway:200,300,400,500,600' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" href="css/main.css">
		<!.. CSS responsive ..>
		<!.. meta tag for viewport size ..>
	</head>
	<body>
		<header>
			<h1>Amy Jalbert</h1>
			<ul class="nav">
				<li><a href="index.html">HOME</a></li>
				<li><a href="drawings.html">drawings</a></li>
				<li><a href="paintings.html">paintings</a></li>
				<li><a href="contact.html">contact</a></li>
			</ul>
		</header>

	<?php

	if($_SERVER["REQUEST_METHOD"] == "POST") {
		$name = trim($_POST["name"]);
		$email = trim($_POST["email"]);
		$message = trim($_POST["message"]);

		if ($name == "" OR $email == "" OR $message == "" ){
			echo "You must specify a value for each field";
			exit;
		}

		foreach( $_POST as $value ){
			if( stripos($value, 'Content-Type:') !== FALSE){
				echo "There was a problem with your submission.";
				exit;
			}
		}

		if ($_POST["address"] != "") {
			echo "Your form submission has an error.";
			exit;
		}

		require_once("class.phpmailer.php");
		$mail = new PHPMailer();

		if (!$mail->ValidateAddress($email)) {
			echo "You must specify a valid email address.";
			exit;
		}


		$email_body = "";
		$email_body = $email_body . "Name: " . $name . "<br>";
		$email_body = $email_body . "Email: " . $email . "<br>";
		$email_body = $email_body . "Message: " . $message;

		$mail->SetFrom($email, $name);
		$address = "joseph.a.jalbert@gmail.com";
		$mail->AddAddress($address, "Amy Jalbert");
		$mail->Subject    = "Amy Jalbert Art" . $name;
		$mail->MsgHTML($email_body);

		if(!$mail->Send()) {
		  echo "There was a problem sending the email: " . $mail->ErrorInfo;
		  exit;
		}		

		header("Location: contact.php?status=thanks");
		exit;
	}
	?>

	<div class="wrapper">

		<h1>Contact</h1>

		<?php if (isset($_GET["status"]) AND $_GET["status"] == "thanks") { ?>
			<p>Thank you! I&rsquo;ll be in touch shortly!</p>
		<?php } else { ?>


				<p>for inquiries:</p>

				<form method="post" action="contact.php">

			        <table>
			            <tr>
			                <th>
			                    <label for="name">Name</label>
			                </th>
			                <td>
			                    <input type="text" name="name" id="name">
			                </td>
			            </tr>
			            <tr>
			                <th>
			                    <label for="email">Email</label>
			                </th>
			                <td>
			                    <input type="text" name="email" id="email">
			                </td>
			            </tr>
			            <tr>
			                <th>
			                    <label for="message">Message</label>
			                </th>
			                <td>
			                    <textarea name="message" id="message"></textarea>
			                </td>
			            </tr> 
			            <tr style="display: none;">
			                <th>
			                    <label for="address">Address</label>
			                </th>
			                <td>
			                    <input type="text" name="address" id="address">
			                    <p>Humans, please leave this field blank.</p>
			                </td>
			            </tr>                   
			        </table>
			        <input type="submit" value="Send">

			    </form>

			    <?php } ?>

		  </div>


		<footer>
			© 2014
		</footer>
	</body>
</html>
