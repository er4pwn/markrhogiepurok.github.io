
<?php 
// Pear Mail Library (Download in order to run)
// UNIRISES TEMPLATE 
//Author: Unirses Inc.
require_once "Mail.php";
$from = '<fromaddress@gmail.com>';
$to = '<toaddress@yahoo.com>';

$user_name = $_POST['name']
$user_email = $_POST['email']
$user_msg = $_POST['message']

$subject = 'Email from $user_email';
$body = "Email: $user_email\nName: $user_name\nMessage:\n$user_msg";

$headers = array(
    'From' => $from,
    'To' => $to,
    'Subject' => $subject
);

$smtp = Mail::factory('smtp', array(
        'host' => 'ssl://smtp.gmail.com',
        'port' => '465',
        'auth' => true,
        'username' => 'wenard.grometes54@gmail.com',
        'password' => 'kardero123'
    ));

$mail = $smtp->send($to, $headers, $body);

if (PEAR::isError($mail)) {
    echo("{'success': true}");
} else {
    echo("{'success': false}");
}
?>