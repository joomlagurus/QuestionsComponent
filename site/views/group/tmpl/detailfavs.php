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

defined('_JEXEC') or die('Restricted access');
$uid = JRequest::getInt( 'id' );
$user=array();
$user=$this->GetUserDetails($uid);
$app = JFactory::getApplication();
$params = $app->getParams();
$doc = JFactory::getDocument();
$doc->addStyleSheet("components/com_questions/css/simple-profile.css");
?>
<div class="questionbox">
<div class="questions_filters">
<ul><li><a href="<?php echo JRoute::_("index.php?option=com_questions&view=questions"); ?>">Home</a></li><li><a href="<?php echo JRoute::_("index.php?option=com_questions&view=form&layout=edit"); ?>"><?php echo JText::_("COM_QUESTIONS_ASK_A_QUESTION"); ?></a></li>
	
<?php if ($params->get('display_help', 0)) { ?>
<span style="float:right"><h2><a class="modal" href="<?php echo JRoute::_('index.php?option=com_content&view=article&id='.$articleid) ?>"rel="{handler: 'iframe', size: {x: 640, y: 480}}"><img src="components/com_questions/media/help.png" alt="Help"></a></h2></span>
<?php } ?>
  </ul>  </div></div>
<h1> Favourite Details </h1>
<div>
<h1> Favourite Answers </h1>
<?php $favourites = $this->getfavouritedata($user[0]->id,'ansfav') ; 
					foreach($favourites as $favourite){
										$this->getfavtemplate((int)$favourite,(int)0);
					}
			  ?>
</div>
<div style="clear:both;"></div>
<h1> Favourite Questions </h1>
<?php 
$favourites2 = $this->getfavouritedata($user[0]->id,'quesfav') ; 
			  foreach($favourites2 as $favourite2){
					$this->getfavtemplate((int)$favourite2,(int)1);
}
?>
<?php /**********Kindly dont remove this credit. For getting any support from us this link should be intact************/ 
	$this->escape(CopyrightHelper::copyright());
?>