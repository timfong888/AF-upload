<?
require('prepend.inc.php');

Header( "HTTP/1.1 301 Moved Permanently" );
Header( "Location: http://" . __DOMAIN__ . "/signup_switch.php?referral=29&switch=recruiter" );
?> 