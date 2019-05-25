<?php
$config->installed    = true;	
$config->debug        = true;	
$config->requestType  = 'PATH_INFO2';	
$config->db->host     = 'localhost';	
$config->db->port     = '3306';	
$config->db->name     = 'eps';	
$config->db->user     = 'root';	
$config->db->password = 'root3306';		
$config->db->prefix   = 'eps_';	
$config->framework->detectDevice['en'] = false;

$config->framework->detectDevice['zh-cn'] = true;
