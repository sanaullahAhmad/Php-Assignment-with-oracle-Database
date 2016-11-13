<?php
session_start();
$_SESSION['post']=$_POST;
 if(($_SESSION['phone_tomcat'] == $_POST['captcha']) && (!empty($_SESSION['phone_tomcat'])) ) {
	
        // if captcha is correct send email
		unset($_SESSION['phone_tomcat']);
		$name		=	$_POST['name'];
		$email		=	$_POST['email'];
		$phone		=	$_POST['phone'];
        $company	=	$_POST['company'];
        $message	=	$_POST['message'];
		

		$to = 'shjo@gmail.com';
			
		
		$subject ="Contact form filled ";
		
		$headers  = "MIME-Version: 1.0\r\n";
		$headers .= "Content-type: text/html; charset=iso-8859-1\r\n";
		$headers.="From: $email \r\n";
		$headers.="Return-Path: $email \r\n";
		
		$body = '<table width="650" border="0">
				   <tr bgcolor="#BDD5DF">
					<td colspan="2">A visitor on  website has filled form. Details are below:</td>
				  </tr>				  
				  <tr bgcolor="#D5D5D5">
					<td width="110">Name:</td>
					<td width="265">'.$name.'</td>
				  </tr>
				   <tr bgcolor="#D5D5D5">
					<td>Phone:</td>
					<td>'.$phone.'</td>
				  </tr>
				  <tr bgcolor="#D5D5D5">
					<td>Email:</td>
					<td>'.$email.'</td>
				  </tr>	
				  <tr bgcolor="#D5D5D5">
					<td>Company:</td>
					<td>'.$company.'</td>
				  </tr>				 
				  <tr bgcolor="#D5D5D5">
					<td valign="top">Message:</td>
					<td valign="top">'.$message.'</td>
				  </tr>				  
				</table>';
		if(mail($to, $subject, $body, $headers)){
			header("Location: contact.php?msg=Mail Sent Successfully");
		}
		else{
			header("Location: contact.php?msg=Mail Sent Failed");
		}	
		} 
 else
 {
				// invalid captcha intered
				header("Location: contact.php?msg=Invalid Spam Protection Code Entered");
 }

		
?>