<?php

	if(!defined('sugarEntry')) define('sugarEntry', true);
	require_once('include/entryPoint.php');
	
	class IPRestrictionApi extends SugarApi{
		public function registerApiRest(){
			return array(
				'check_user_ip' => array(
				'reqType'=>'GET',
				'path'=>array('check_user_ip'),
				'pathVars'=>array(),
				'method'=>'checkUserIP',
				 'shortHelp' => 'Run several API call in a sequence',
				),
			);
		}
		public function checkUserIP($api,$args){
			global $current_user;
			if($current_user->ip_restriction_c!=''){				
				$user_ip=$current_user->ip_address_c;
				$user_ip_array=explode(",",$user_ip);
				if($current_user->ip_restriction_c=='allow'){
					if(! in_array($_SERVER['REMOTE_ADDR'],$user_ip_array)){
						return "invalid ip";
					}
				}
				if($current_user->ip_restriction_c=='deny'){
					if(in_array($_SERVER['REMOTE_ADDR'],$user_ip_array)){
						return "denied ip";
						
					}
				}
			}
		}
	}
	
