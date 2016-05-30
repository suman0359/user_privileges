<?php
defined('BASEPATH') OR exit('No direct script access allowed');


// protocol => mail, sendmail, or smtp
$config['protocol'] = 'smtp';


// SMTP Server Address.
$config['smtp_host'] = 'ssl://smtp.gmail.com'; //change this


$config['smtp_port'] = '465';
// SMTP Username.
$config['smtp_user'] = 'suman0359@gmail.com'; //change this

// SMTP Password.
$config['smtp_pass'] = 'sdrmdths0359'; //change this

// mailtype = text or html
$config['mailtype'] = 'text';
$config['charset'] = 'iso-8859-1';
$config['wordwrap'] = TRUE;
$config['newline'] = "\r\n"; //use double quotes to comply with RFC 822 standard
?>