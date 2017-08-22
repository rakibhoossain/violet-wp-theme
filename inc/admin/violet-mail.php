<?php 
add_action('wp_ajax_submit_contact_form', 'violet_contact_form_callback');
add_action('wp_ajax_nopriv_submit_contact_form', 'violet_contact_form_callback');

function violet_contact_form_callback() {
global $contact_email;
	global $_REQUEST;

if ( !wp_verify_nonce( $_REQUEST['nonce'], 'ajax_nonce' ) ) die();
if ( trim($contact_email)=='' ) die();

$user_name=$user_email=$user_msg=$user_subscribe='';
$site_url = home_url();
$site_name = get_bloginfo('site_name');

$res = array();

	//Get data
	if (isset($_POST['name'])) {$user_name=$_POST['name'];} 
	if (isset($_POST['email'])) {$user_email=$_POST['email'];} 
	if (isset($_POST['msg'])) {$user_msg=$_POST['msg'];}
	if (isset($_POST['is_subscribe'])) {$user_subscribe=$_POST['is_subscribe'];}



	if(($user_name!='') || ($user_email!='') || ($user_msg!='')) {
      
	$subj = sprintf(__('Site %s - Contact form message from %s', 'violet'), $site_name, $user_name);
	$msg = "
	Name: $user_name
	E-mail: $user_email

	Message: $user_msg

	............ " . $site_name . " (" . home_url() . ") ............";
	
		$head = "Content-Type: text/plain; charset=\"utf-8\"\n"
			. "X-Mailer: PHP/" . phpversion() . "\n"
			. "Reply-To: $user_email\n"
			. "To: $contact_email\n"
			. "From: $user_email\n"
			. "Subject: $subj\n";

		$cntc_msg=wp_mail($contact_email, $subj, $user_msg, $head);
		$res['mail_error'] = $cntc_msg;

  }

//If subscriber check then
if ($user_subscribe!='') {
	if(($user_name!='') || ($user_email!='') || ($user_msg!='') || ($user_subscribe!='')) {

	$res['subs_check'] = 'y';


	    $sbj_visitor= sprintf(__(' %s - Newsletter subscription confirmation email', 'violet'), $site_name );
		$sbj_owner= sprintf(__('Site %s - Newsletter subscription request from %s', 'violet'), $site_name, $user_name);

		$msg_visitor="
		Hi $user_name Thank you for subscribing to our newsletter!

		............ " . $site_name . " (" . home_url() . ") ............";

		$msg_owner="
		A new visitor would like to be added to your website

		Name: $user_name

		Email: $user_email

		............ " . $site_name . " (" . home_url() . ") ............";

		$head_visitor = "Content-Type: text/plain; charset=\"utf-8\"\n"
			. "X-Mailer: PHP/" . phpversion() . "\n"
			. "Reply-To: $contact_email\n"
			. "To: $user_email\n"
			. "From: $contact_email\n"
			. "Subject: $sbj_visitor\n";

		$head_owner = "Content-Type: text/plain; charset=\"utf-8\"\n"
			. "X-Mailer: PHP/" . phpversion() . "\n"
			. "Reply-To: $user_email\n"
			. "To: $contact_email\n"
			. "From: $user_email\n"
			. "Subject: $sbj_owner\n";

		$subs_visitor_msg=wp_mail($user_email, $sbj_visitor, $msg_visitor, $head_visitor);
		$subs_owner_msg=wp_mail($contact_email, $sbj_owner, $msg_owner, $head_owner);

		$res['subsc_error']=$subs_visitor_msg;
		$res['subs_owner']=$subs_owner_msg;

  }

}

echo $violet_json_res = json_encode($res);

die();

}

?>