<?php
/*
$config['protocol'] = 'sendmail';
$config['mailpath'] = '/usr/sbin/sendmail';
$config['charset'] = 'iso-8859-1';
$config['wordwrap'] = TRUE;
*/
$config['protocol'] = 'smtp';
    $config['smtp_host'] = 'ssl://smtp.gmail.com'; //change this
    $config['smtp_port'] = '465';
    $config['smtp_user'] = 'ericnakaw@gmail.com'; //change this
    $config['smtp_pass'] = '19820420EaricGmail09'; //change this
    $config['mailtype'] = 'text';
    $config['charset'] = 'iso-8859-1';
    $config['wordwrap'] = TRUE;
    $config['newline'] = "\r\n"; //use double quotes to comply with RFC 822 standard


/*
$config['useragent'] = 'CodeIgniter';
$config['protocol'] = 'pop3';
//$config['mailpath'] = '/usr/sbin/sendmail';
$config['smtp_host'] = 'mx1.hostinger.com.br';
$config['smtp_user'] = 'eric@ericnakawatase.esy.es';
$config['smtp_pass'] = 'eric1234';
$config['smtp_port'] = 110; 
$config['smtp_timeout'] = 5;
$config['wordwrap'] = TRUE;
$config['wrapchars'] = 76;
$config['mailtype'] = 'html';
$config['charset'] = 'utf-8';
$config['validate'] = FALSE;
$config['priority'] = 3;
$config['crlf'] = "\r\n";
$config['newline'] = "\r\n";
$config['bcc_batch_mode'] = FALSE;
$config['bcc_batch_size'] = 200;
*/