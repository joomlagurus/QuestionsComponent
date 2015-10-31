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
	Email: admin@phpseo.net
	support: support@phpseo.net
	Website: http://www.phpseo.net
*/

// No direct access to this file
defined('_JEXEC') or die('Restricted access');
 
// import Joomla controlleradmin library
jimport('joomla.application.component.controlleradmin');
 

class QuestionsControllerReports extends JControllerAdmin
{   
	function __construct(){	
		parent::__construct();
	} 
	
    public function getModel($name = 'Reports', $prefix = 'QuestionsModel') 
    {
    	$model = parent::getModel($name, $prefix, array('ignore_request' => true));
        return $model;
    }	
    
    //Delete Function
        
 	public function delete(){

		$cid= JFactory::getApplication()->input->get('cid',0);
		foreach($cid as $id){
					$db= JFactory::getDBO();
					$sql= "Delete FROM #__questions_reports where id=".$id;
					$db->setQuery($sql);
					$db->loadObjectList(); 
        }
    	$this->setRedirect("index.php?option=com_questions&view=reports",JText::_("COM_QUESTIONS_MSG_ITEM_DELETED"));
    }
	
	/* public function delete(){
    	
    	parent::delete();
    	
    	$this->setRedirect("index.php?option=com_questions&view=reports",JText::_("COM_QUESTIONS_MSG_ITEM_DELETED"));
    }*/
    
}
