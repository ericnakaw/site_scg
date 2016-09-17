<?php
/*
$config['protocol'] = 'sendmail';
$config['mailpath'] = '/usr/sbin/sendmail';
$config['charset'] = 'iso-8859-1';
$config['wordwrap'] = TRUE;
*/

$config['protocol'] = 'smtp';
$config['smtp_host'] = 'mail.camilagolin.com.br';
$config['smtp_port'] = '587';
$config['smtp_timeout'] = '7';
$config['smtp_user'] = 'news@camilagolin.com.br';
$config['smtp_pass'] = '123camila';
$config['charset'] = 'utf-8';
$config['newline'] = "\r\n";
$config['mailtype'] = 'html'; // or html
$config['validation'] = TRUE; // bool whether to validate email or not      