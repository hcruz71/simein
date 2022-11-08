<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

            $config['protocol'] = 'smtp';  // protocolo de envio de correo
            $config['smtp_host'] = 'mx1.hostinger.mx'; // dirección SMTP del servidor                               
            $config['smtp_user'] = 'hcruz@officeagenda.org'; // remplazarlo por un cuenta real de Gmail - usuario SMTP 
            $config['smtp_pass'] = 'hacz562671';  
            $config['smtp_port'] = '587'; // 465 o el '587' --  Puerto SMTP  
            $config['smtp_timeout'] = '6';  // Tiempo de espera SMTP(segundos)
            //$config['email']['newline']  = '\r\n';
            $config['mailtype'] = 'html'; // o text para texto sin HTML


      /*  $config['charset']    = 'utf-8';
        $config['newline']    = "\r\n";
        $config['mailtype'] = 'text'; // or html
        $config['validation'] = TRUE; // */


        	


     /*   	            $config['protocol'] = 'smtp';  // protocolo de envio de correo
            $config['smtp_host'] = 'ssl://smtp.gmail.com'; // dirección SMTP del servidor                               
            $config['smtp_user'] = 'hcruz7@gmail.com'; // remplazarlo por un cuenta real de Gmail - usuario SMTP 
            $config['smtp_pass'] = 'hacz562671';  
            $config['smtp_port'] = '465'; // 465 o el '587' --  Puerto SMTP  
            $config['smtp_timeout'] = '6';  // Tiempo de espera SMTP(segundos)
            //$config['email']['newline']  = '\r\n';
            $config['mailtype'] = 'html'; // o text para texto sin HTML


        $config['charset']    = 'utf-8';
        $config['newline']    = "\r\n";
        $config['mailtype'] = 'text'; // or html
        $config['validation'] = TRUE; // 
*/