<?php 

if ($_SERVER["REQUEST_METHOD"]== "POST"){
	//var_dump($_POST);
	$name   =trim(filter_input(INPUT_POST,"name",FILTER_SANITIZE_STRING));
	$email  =trim(filter_input(INPUT_POST,"email",FILTER_SANITIZE_EMAIL));
	$country  =trim(filter_input(INPUT_POST,"country",FILTER_SANITIZE_STRING));
	$category  =trim(filter_input(INPUT_POST,"category",FILTER_SANITIZE_STRING));
	$details=trim(filter_input(INPUT_POST,"details",FILTER_SANITIZE_SPECIAL_CHARS));

	//Validation
	if ($name=="" || $email=="" || $category==""){
		$error_message="Please fill the required : Name, Email, Category";
	} 

	//robot feels the form
	if (!isset($error_message) && $_POST["address"] != ""){
		$error_message= "Bad form input";
	}
	
    include("inc/phpmailer/class.phpmailer.php");

    $mail = new PHPMailer;

    if (!isset($error_message) && !$mail -> ValidateAddress($email)){
    	$error_message= "Invalid email address";
    }
	
	if (!isset($error_message)) {
		$email_body  = "";
		$email_body .= "Name ".$name."\n";
		$email_body .= "Email ".$email."\n";
		$email_body .= "Suggested Item\n";
		$email_body .= "Country ".$email."\n";
		$email_body .= "Category ".$email."\n";
		$email_body .= "Details " .$details."\n";
		
	    //SET UP THE SMTP

	    $mail->setFrom($email, $name);
		$mail->addAddress('florencemayo@gmail.com', 'Florence');     // Add a recipient
		$mail->isHTML(false);                                      // Set email format to HTML
	    $mail->Subject = 'Suggestions subject '. $name;
		$mail->Body    =  $email_body;
		
		if($mail->send()) {
			 header("location:suggest.php?status=thanks");
			 exit;
		}
		$error_message = 'Message could not be sent.';
		$error_message.='Mailer Error: ' . $mail->ErrorInfo;
	}
}

$pageTitle="Suggest a Media Item";
$section="suggest";

include("inc/header.php"); ?>

<div class="section page">
	<div class="wrapper">
	<div class="panel panel-default">
	<div class="panel-heading">
	 <h2> Suggest a Media Item </h2>
   </div>
   <div class="panel-body">
	<?php if (isset($_GET["status"]) && $_GET["status"]=="thanks") {
            echo "<p>Thanks for the email! I&rsquo; will check out your suggestion shortly</p>";
    } else { 
		     if (isset($error_message)) {
				 echo "<p class='message'>"."&nbsp".$error_message."</p>";
				} else {
					echo "<p> If you think there is something I&rsquo;m missing, let me know!
				       complete the form to send me an email.</p>";
			}?>

	<form method="post" action="suggest.php">
	<table class="suggestions">
		<tr>
	      <th><label for="name">Name (required) </label></th>
	      <td><input type="text" name="name" id="name" value="<?php if (isset($name)) echo $name; ?>" /></td>
	    </tr>
	   <tr>
	   	<th><label for="email">Email (required) </label></th>
	   	<td><span><input type="text" name="email" id="email" value="<?php if (isset($email)) echo $email; ?>" /></span></td>
	    </tr>
	    <tr>
	   	<th><label for="category">Category  (required)</label></th>
	   	<td><select name="category" id="category">
	   	     <option value="">Select one</option>
	   	     <option value="Motorola" <?php if (isset($category) && $category=="Motorola") echo " selected"; ?> >Motorola</option>
	   	     <option value="Samsung"  <?php if (isset($category) && $category=="Samsung") echo " selected"; ?>>Samsung</option>
	   	     <option value="T-mobile"><?php if (isset($category) && $category=="T-mobile") echo " selected"; ?>T-mobile</option>
	   	     <option value="Dell"     <?php if (isset($category) && $category=="Dell") echo " selected";  ?>>Dell</option>
	   	     <option value="Droid"    <?php if (isset($category) && $category=="Droid") echo " selected"; ?>>Droid</option>
	   	  </select></td>
	    </tr>
	     <tr>
	   	<th><label for="Countries">Country</label></th>
	   	<td><select name="Countries" id="Countries">
	   	     <option value="">Select one</option>
	   	     <optgroup label="Motorola">
		   	     <option value="Tanzania" <?php if (isset($category) && $category=="Tanzania") echo " selected"; ?>>Tanzania</option>
		   	     <option value="Kenya"    <?php if (isset($category) && $category=="Kenya") echo " selected"; ?>>Kenya</option>
		   	     <option value="Uganda"   <?php if (isset($category) && $category=="Uganda") echo " selected"; ?>>Uganda</option>
	   	    </optgroup>
	   	  </select></td>
	    </tr>
	    <tr>
	    <th><label for="details">Suggest Item Details </label></th>
	    <td><textarea type="text" name="details" id="details" ><?php if (isset($details)) echo $details; ?>"</textarea><td>
	    </tr>
	    <tr style="display:none">
	      <th><label for="address">Address </label></th>
	      <td><input type="text" name="address" id="address" />
	      	<p>Please leave this field blank</p></td>
	    </tr>
	</table>
	<input type="submit" value="Send"/>
	</form>
	<?php } ?>
    </div>
</div>
</div>
</div>
</div>
 <?php include("inc/footer.php"); ?>