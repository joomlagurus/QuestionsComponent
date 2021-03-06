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
JHTML::_('behavior.modal');
$app = JFactory::getApplication();
$params = $app->getParams();
$mainpagetitle =  $params->get('mainpagetitle', 'Questions');
$articleid = $params->get('helparticleid', 1);
$document =JFactory::getDocument();
$document->setTitle($mainpagetitle);
$doc = JFactory::getDocument();
$doc->addStyleSheet("components/com_questions/media/simple.css");
require_once 'components/com_questions/helpers/cat.php';
?>

<div style="width:96%;padding:2%;">

<div class="questionbox">
<div style="float:left; width:90%;">
<span style="float:left"><h2>Categories</h2></span><a style="float:right" href="<?php echo JRoute::_('index.php?option=com_questions&view=form&layout=edit') ?>"><img src="components/com_questions/media/ask.png" alt="Ask a Question"> </a>
<div style="width:250px;float:left;margin:5px;">
<form action="<?php echo JRoute::_('index.php');?>" method="post">
<?php
$lang = JFactory::getLanguage();
$upper_limit = $lang->getUpperLimitSearchWord();
$mitemid = @$set_Itemid > 0 ? $set_Itemid : JRequest::getInt('Itemid');
$width			= 37;
$maxlength		= $upper_limit;
$text			= htmlspecialchars($params->get('text', JText::_('COM_QUESTIONS_SEARCH')));

			$output = '<input name="searchword" maxlength="'.$maxlength.'"  type="text" size="'.$width.'" value="'.$text.'"  onblur="if (this.value==\'\') this.value=\''.$text.'\';" onfocus="if (this.value==\''.$text.'\') this.value=\'\';" />';
			echo $output;
		?>
	<input type="hidden" name="task" value="search" />
	<input type="hidden" name="option" value="com_search" />
	<input type="hidden" name="areas" value="questions" />
	<input type="hidden" name="Itemid" value="<?php echo $mitemid; ?>" />
</form>
</div>

<?php if ($this->escape($this->params->get('display_help', 0))) : ?>
<span style="float:right"><h2><a class="modal" href="<?php echo JRoute::_('index.php?option=com_content&view=article&id='.$articleid) ?>"rel="{handler: 'iframe', size: {x: 640, y: 480}}"><img src="components/com_questions/media/help.png" alt="Help"></a></h2></span>
<?php endif; ?>
</div>
<?php if ($this->escape($this->params->get('show_category_list', 1))) :
$this->escape(CatHelper::getcat());
endif; 
?>
<div style="clear:both;"></div>
<?php if ($this->escape($this->params->get('show_page_heading'))) : ?>
<h1>
	<?php echo $this->escape($this->params->get('page_heading')); ?>
	<?php 
	
	//Display Category Name with the title
	if ($this->escape($this->categoryView)):
		echo JText::_("COM_QUESTIONS_LBL_HEAD_CATEGORY") . $this->escape($this->questions[0]->CategoryName);
	endif;
	
	//Display Tag with the title
	if ($this->tag):
		echo JText::_("COM_QUESTIONS_LBL_HEAD_TAG") . $this->escape($this->tag);
	endif;
	
	?>
</h1>
<?php endif; ?>



<?php

if (isset($this->viewFilteringOptions)){
	echo $this->filteringOptions;
}
?>

<div class="questions<?php echo $this->escape($this->pageclass_sfx); ?>">

<div>
<?php
if($this->params->get('sorting_backend')==0 && $this->params->get('display_sorting')==1){
	echo $this->getSortingOptions;
}

?>
</div>
	<?php foreach($this->questions as $question): ?>
		<div class="question system-<?php echo ($this->escape($question->published) ? 'published' : 'unpublished');?>">
			
			<div class="topRow">
			  <?php  $this->escape(SocialIcons::addsocial()); ?>
			</div>
				<div class='leftCol'>
				<div>
				<?php 
				$appParams = json_decode(JFactory::getApplication()->getParams());
				if (isset($appParams->display_gravatars) && $appParams->display_gravatars!=0) :{?>
				<?php echo AvatarHelper::getAvatar($question->email,"questions_gravatar_small",34,0,$question->userid_creator); ?>
				<?php } ?>
				<?php endif; ?>
				</div>
                <div style="clear:both"></div>
				<div class="user_rank">			
				<?php echo $this->escape($this->getRank($question->userid_creator)); ?>
                </div>
                <div style="clear:both"></div>
                <div class="questions_star rank<?php echo $this->escape($this->getId($question->userid_creator)); ?>"></div>
				</div>
                
				<div class='question-content'>
				<div class="question_data">			
					<h2 class="question_title">
						<a href="<?php echo $question->link; ?>"><?php echo $this->escape($question->title); ?></a>
					</h2>
					
					<?php /*<h4 class="data"><?php echo JText::_("COM_QUESTIONS_SUBMITTED_BY"); ?> <?php echo ($question->userid_creator ? JFactory::getUser($question->userid_creator)->name : $question->name ); ?> <?php echo JText::_("COM_QUESTIONS_ON_DATE")?> <?php echo JHtml::date($question->submitted); ?>.</h4> */ ?>
					
					<h4><?php echo JText::_("COM_QUESTIONS_SUBMITTED_BY"); ?> <?php /*echo ($this->question->userid_creator ? JFactory::getUser($this->question->userid_creator)->name : $this->question->name); */?>
                   <?php if($question->userid_creator>0){ ?>
	<a href= <?php echo JRoute::_("index.php?option=com_questions&view=profiles&id=".$question->userid_creator . "%3A" . JFactory::getUser($question->userid_creator)->name) ?> ><?php echo ($question->userid_creator ? JFactory::getUser($question->userid_creator)->name : $question->name) ?></a>
    				<?php } else { echo JText::_("COM_QUESTIONS_GUEST"); } ?>
	
	 <?php echo " On "?> <?php echo JHtml::date($question->submitted); ?> 	
					<h4 class="category">
						<?php if ($question->catid): //if category?>
							<?php echo JText::_("COM_QUESTIONS_CATEGORY"); ?>:
							<a href="<?php echo JRoute::_("index.php?option=com_questions&view=questions&catid=" . $question->catid); ?>">
								<?php echo $question->CategoryName; ?>
							</a>
						<?php endif; //endif category?>
					</h4>
					
					<span class="tags">
					<?php 
					if ($question->qtags):
						echo JText::_("COM_QUESTIONS_TAGS") . ": ";
						foreach ($question->qtags as $tag):
						$tag=$this->getCleanString($tag);
						?>
						<span class="tagsitem">
						<a href="<?php echo JRoute::_("index.php?option=com_questions&view=questions&tag=" . $tag); ?>"><?php echo $tag ?></a>
						</span>
					<?php 
						endforeach;
					endif;
					?>
					</span>
					
				</div>
                </div>
                
                
			<div class ="rightCol">
			<?php if (isset($this->viewStats)): ?>		
			<div class="boxes">
				<a href="<?php echo $question->link; ?>">
					<span class="votes"><?php echo $question->votes; ?><br /><span class="label"><?php echo JText::_("COM_QUESTIONS_VOTES")?></span></span>
					<span class="answers"><?php echo $question->answerscount; ?><br /><span class="label"><?php echo JText::_("COM_QUESTIONS_ANSWERS_LOWERCASE")?></span></span>
					<span class="impressions"><?php echo $question->impressions; ?><br /><span class="label"><?php echo JText::_("COM_QUESTIONS_VIEWS")?></span></span>
				</a>
           
			</div>
			
            
            <?php endif; ?>
            </div>
            
			<div class="bottomrow">
            <?php $user = JFactory::getUser(); if ($this->params->get('show_report', 1) && $user->authorise ( "report.edit" , "com_questions" )) { ?>
			<a href="<?php echo JRoute::_("index.php?option=com_questions&view=reports&layout=edit&qid=".$question->id); ?>"><IMG STYLE="border: none; float:right;" src="<?php echo $this->baseurl ?>/components/com_questions/media/reportit.png" ALT="Report It"></a>
            <?php } ?>
			<a href="<?php echo $question->link; ?>"><IMG STYLE="border: none; float:right;" src="<?php echo $this->baseurl ?>/components/com_questions/media/answerthis.png" ALT="Answer This"></a>
			</div>
		</div>
	<?php endforeach; ?>
    
    
	<div class="pagination_new">
		<p class="counter">
			<?php echo $this->pagination->getPagesCounter(); ?>
		</p>
		<?php echo $this->pagination->getPagesLinks(); ?>
	</div>
    <?php /**********Kindly dont remove this credit. For getting any support from us this link should be intact************/ 
	CopyrightHelper::copyright();
	?>
    
</div>	
</div>
</div>

