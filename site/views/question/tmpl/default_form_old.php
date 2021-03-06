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

       
/*
JHtml::_('behavior.keepalive');
JHtml::_('behavior.tooltip');
JHtml::_('behavior.calendar');
JHtml::_('behavior.formvalidation');
*/
jimport( 'joomla.html.editor' );

require_once ("administrator/components/com_questions/helpers/questions.php");
?>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<h2><?php echo JText::_("COM_QUESTIONS_ANSWER");?> <?php echo JText::_("COM_QUESTIONS_THIS_QUESTION");?>..</h2>
<form action="<?php echo JRoute::_("index.php?option=com_questions"); ?>" method="post" name="adminForm" id="adminForm" class="form-validate">

	<fieldset>
	
		<?php if (JFactory::getUser()->id == 0 ):?>
		<label for="name"><?php echo JText::_("COM_QUESTIONS_FRM_Q_NAME");?></label>
		<input id="name" name="name" type="text" maxlength="20" value="<?php echo JRequest::getString("name")?>" style="display:block;" />
		<br />
		<?php endif;?>
		
		<label for="email"><?php echo JText::_("COM_QUESTIONS_FRM_Q_EMAIL");?></label>
		<input id="email" name="email" type="text" maxlength="40" value="<?php echo JRequest::getString("email" , JFactory::getUser()->email ); ?>" style="display:block;" />
		<br />
		
		<label for="title"><?php echo JText::_("COM_QUESTIONS_FRM_Q_TITLE");?></label>
		<input id="title" name="title" type="text" maxlength="30" value="<?php echo "Re:".QuestionsHelper::getTitle($this->question->id)?>" style="display:block;" />
		<br />
		<label for="text"><?php echo JText::_("COM_QUESTIONS_FRM_Q_RESPONSE");?></label> <br /><br />
		 <?php
				 $editor =JFactory::getEditor();
					$params = array( 'smilies'=> '0' ,
						 'style'  => '1' ,  
						 'layer'  => '0' , 
						 'table'  => '0' ,
						 'clear_entities'=>'0'
						 );
				echo $editor->display( 'text', '', '100%', '400', '20', '20', false, $params );

          ?>
		
		<div id='TextBoxesGroup'>
             <div id="TextBoxDiv1">
              <TR>
              <label for="refurl1"><?php echo JText::_("COM_QUESTIONS_REFERENCE_URL");?></label>
              <TD>
               <input type="text" name="refurl1" id="refurl1" value="" maxlength="300"></TD><TD><a href="javascript:void(0)" value="addButton" class="addButton">Add</a>&nbsp;<a href="javascript:void(0)" value="removeButton" class="removeButton">Remove</a></TD></TR>
             </div>
        </div>
        
        <br /><br /><br /><br />
        <div style="display:none;">
			<label for="LastName">You don't fill this.</label>
			<input id="LastName" name="LastName" type="text" />
		</div>
		
		<div class="buttons">
			<input type="submit" value="<?php echo JText::_('COM_QUESTIONS_SUBMIT_ANSWER') ?>" />
		</div>
		
		<input type="hidden" name="task" value="answer.save" />
		
		<input type="hidden" name="question_id" value="<?php echo $this->question->id; ?>" />
		<input id="ip" type="hidden" value="<?php echo $_SERVER['REMOTE_ADDR']; ?>" name="ip" />
		<input id="catid" type="hidden" value="<?php echo $this->question->catid; ?>" name="catid" />
		<input name="returnTo" type="hidden" value="<?php echo QuestionsHelper::getCurrentPageURL(); ?>" name="returnTo" />
		<?php echo JHTML::_( 'form.token' ); ?>
		
	</fieldset>
</form>
<script type="text/javascript">

$(document).ready(function(){

    var counter = 2;

    $(document).on("click",".addButton",function () {

 if(counter>3){
            alert("Maximum 3 References allowed");
            return false;
 }   

 var newTextBoxDiv = $(document.createElement('div'))
      .attr("id", 'TextBoxDiv' + counter);

 newTextBoxDiv.html('<TABLE><TR><TD>' +
'<input type="text" name="refurl' + counter + 
'" id="refurl' + counter + '" value="" ></TD><TD><a href="javascript:void(0)" value="addButton" class="addButton">Add</a>&nbsp;<a href="javascript:void(0)" value="removeButton" class="removeButton">Remove</a></TD></TR></TABLE>');

 newTextBoxDiv.appendTo("#TextBoxesGroup");


 counter++;
     });

     $(document).on("click",".removeButton",function () {
 if(counter==1){
          alert("No more textbox to remove");
          return false;
       }   

 counter--;

        $("#TextBoxDiv" + counter).remove();

     });

     $("#getButtonValue").click(function () {

 var msg = '';
 for(i=1; i<counter; i++){
      msg += "\n Refurl #" + i + " : " + $('#refurl' + i).val();
 }
       alert(msg);
     });
  });
</script>