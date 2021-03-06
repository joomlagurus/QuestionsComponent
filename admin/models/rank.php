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

// import the Joomla modellist library
jimport('joomla.application.component.modellist');

class QuestionsModelRank extends JModelList
{
		public function __construct($config = array())
			{
				if (empty($config['filter_fields'])) {
					$config['filter_fields'] = array(
					);
				}
		
				parent::__construct($config);
			}
			
			
		protected function populateState( $ordering = "id" , $direction = "ASC" ){

			$app = JFactory::getApplication();
			
			//Ordering
			$this->setState( "list.ordering" , $ordering );
			$this->setState( "list.direction" , $direction );
	
			//Pagination
			$value = JRequest::getInt('limit', $app->getCfg('list_limit', 0));
			$this->setState('list.limit', $value);
			
			//Pagination
			$value = JRequest::getInt('limitstart', 0);
			$this->setState('list.start', $value);
			
		}
		
        protected function getListQuery()
        {
                // Create a new query object.         
                $db = JFactory::getDBO();
                $query = $db->getQuery(true);
                $query->select('* FROM #__questions_ranks');
                $query->order($this->getState("list.ordering") . " " . $this->getState("list.direction"));
                return $query;
        }
        
        function delete(){
        	
        	$ids = implode(",",  JFactory::getApplication()->input->get("id"));
        	
        }
		
}
