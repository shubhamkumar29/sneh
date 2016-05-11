<?php
/**
 * The template for displaying Comments
 *
 * The area of the page that contains both current comments
 * and the comment form. The actual display of comments is
 * handled by a callback to twentytwelve_comment() which is
 * located in the functions.php file.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */

/*
 * If the current post is protected by a password and
 * the visitor has not yet entered the password we will
 * return early without loading the comments.
 */

if($_POST)
{
	## Send mail to admin
	if($_POST['email']!="")
	{
		if(ereg("^([a-zA-Z0-9~!#$%&_-])([.]?[0-9A-Za-z~!#$%&_-])*@[0-9A-Za-z~!#$%&_-]([.]?[0-9A-Za-z~!#$%&_-])*$",$_POST['email']))
		{
			$fromaddress	= 'Sneheldercare Admin<help@sneheldercare.com>'; 	# set mail from email
			$toaddress      = $_POST['email'];
			$eol = "\n";  # it is the header seprater
			$headers  = "Content-Type:text/html;charset=UTF-8".$eol;
			$headers .= 'MIME-Version: 1.0'.$eol;   
			$headers .= 'From:'.$fromaddress.$eol;                							// from detail
		 
			$headers .= 'Reply-To: no-reply@sneheldercare'.$eol;              						// repaly to detail 
			
			$str_subject = "Contact request from sneheldercare.com";
			$msg         = 'Hello '.ucfirst($_POST['first_name']).', <br /> Thank you for contacting us. <br /> Our representative would get in touch with you shortly.  <br />SNeH is committed to providing you best in-home preventive healthcare and preventive health monitoring services.
<br /><br />
			Regards,
			SNeh Team';
			
			mail($toaddress, $str_subject, $msg, $headers);
		}
		else 
		{
			echo 2;
		}
	}
	
	
		$fromaddress	= $_POST['first_name'].' '.$_POST['last_name'].'<'.$_POST['email'].'>'; 	# set mail from email
		//$toaddress      = "pra.kot15@gmail.com";
		//$toaddress      = "help@sneheldercare.com";
		//$toaddress      = "ritu@snehcare.com,ritu1midha@gmail.com,help@sneheldercare.com";
		$toaddress      = "sunim6@yahoo.com,me@abhishekapte.com,help@sneheldercare.com";
		$eol = "\n";  # it is the header seprater
		$headers= "Content-Type:text/html;charset=UTF-8".$eol;
		$headers .= 'MIME-Version: 1.0'.$eol;   
		$headers .= 'From:'.$fromaddress.$eol;                							// from detail
	 
		$headers .= 'Reply-To: no-reply@sneheldercare'.$eol;              						// repaly to detail 
		
		$str_subject = "Contact request from sneheldercare.com";
		$msg         = 'Hello Admin, <br /> Contact person details as follows:<br /> Name : '.ucwords($_POST['first_name'].' '.$_POST['last_name']).'<br />
		Contact Number: '.$_POST['cno'].'<br />
		Email: '.$_POST['email'].'<br />
		Preferred Mode of contact: '.$_POST['pmoc'].'<br />
		Request for: '.$_POST['select'].'<br />
		Message: '.$_POST['message'].'<br /><br />
		Regards,
		SNeh Team';
		
		if(mail($toaddress, $str_subject, $msg, $headers))
		{  
			echo 1;
		}
		
	
	
}
?>

