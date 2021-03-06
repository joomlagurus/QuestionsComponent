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


jimport('joomla.application.component.modeladmin');

class QuestionsModelRankedit extends JModelAdmin
{

	protected $item;	//The question
	
	/*
	 * Method to return a JTable instance of the question table
	 */
	public function getTable( $type = "Rankedit" , $prefix = "QuestionsTable" , $config = array() ){
		
		return JTable::getInstance($type, $prefix , $config);
	}
	
	/*
	 * Method to return a form object
	 */
	public function getForm ( $data = array(), $loadData = TRUE ){

		$form = $this->loadForm("com_questions.rankedit" , "rankedit" , array("control"=>"jform" , "loadData"=> $loadData) );
		if ( empty($form)){
			return FALSE;
		}
		
		//Fill the form with data
		if ( $data = $this->loadFormData() ){
			
			$user = JFactory::getUser();
			
			if (! $data instanceof JObject)
				$data = JArrayHelper::toObject($data);
			
			//Fix issue #10 - https://github.com/alexd3499/Questions/issues/10
						
			if ( $data->id==0 ) { 
				//New Item.. Fill the form with some defaults values..
				
				$data->pointsreq ;
				$data->rank ;

	
				
			}
			
			$this->preprocessForm($form, $data);
			$form->bind($data);
		}
		else {
		}

		return $form;		
	}
	
	/*
	 * Method to load the data of the form
	 */
	protected function loadFormData() {

		$data = JFactory::getApplication()->getUserState("com_questions.edit.rankedit.data" , array() );
		
		//we got the data, clear state
		JFactory::getApplication()->setUserState("com_questions.edit.rankedit.data" , array() );
		
		if (empty($data)){
			$data = $this->getItem();			
		}
		
		return $data;
	}
	
	/*
	 * Method to return a QUESTION item
	 * 
	 * Here is used only for reference / logging
	 * It just invokes the parent method
	 * 
	 */
	public function getItem($pk = NULL){
		return parent::getItem();
	}

}