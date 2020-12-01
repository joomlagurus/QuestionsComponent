<?php
/*
    
    Copyright (C)  2012 Sweta ray.
    Permission is granted to copy, distribute and/or modify this document
    under the terms of the GNU Free Documentation License, Version 1.3
    or any later version published by the Free Software Foundation;
    with no Invariant Sections, no Front-Cover Texts, and no Back-Cover Texts.
    A copy of the license is included in the section entitled "GNU
    Free Documentation License"
	@license GNU/GPL http://www.gnu.org/copyleft/gpl.html
    Questions for Joomla
    This program is free software: you can redistribute it and/or modify
    it under the terms of the GNU General Public License as published by
    the Free Software Foundation, either version 3 of the License, or
    (at your option) any later version.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program.  If not, see <http://www.gnu.org/licenses/>
   
	Questions for Joomla
	Version 0.0.1
	Created date: Sept 2012
	Creator: Sweta Ray
	Email: admin@extensiondeveloper.com
	support: support@extensiondeveloper.com
	Website: http://www.extensiondeveloper.com
*/

// No direct access to this file
defined('_JEXEC') or die('Restricted access');

final class MailHelper{
	
		public function sendemail($body,$subject,$recipient,$message){
	
		$mailer = JFactory::getMailer();
		
		$config = JFactory::getConfig();
		$sender = array( 
		$config->get( 'config.mailfrom' ),
		$config->get( 'config.fromname' ) );
		$mailer->setSender($sender);
		
		//$user =JFactory::getUser();
		//$recipient = $user->email;
		 
		$mailer->addRecipient($recipient);
				
		//multiple recipients
		/*$recipient = array( 'person1@domain.com', 'person2@domain.com', 'person3@domain.com' );
		$mailer->addRecipient($recipient);*/
		
		//$body   = "Your Report has been submitted succesfully. We will take actions after checking";
		$mailer->setSubject($subject);
		$mailer->setBody($body);


		$app = JFactory::getApplication();
		$params = $app->getParams();
		//$params = JComponentHelper::getParams('com_questions');
		//$this->setState('params', $params);
		$use_mail_system =  $params->get('use_mail_system', 1);
		
		if($use_mail_system == 1){
		
		if($mailer->isHTML(true)){
		$mailer->Encoding = 'base64';
		$mailer->setBody($body);
		$mailer->setSubject($subject);
		}

		$send = $mailer->Send();
		if ( $send != true ) {
			echo 'Error sending email: ' . $send->message;
		} else {
			echo 'Mail sent';
		}
		}

	}
	
	
}