<?php
/**
 * @package     mod_multiplier
 * @author      Sasa Oluic <sasaoluic@yahoo.com>
 * @copyright   Copyright (C) 2005 - 2016 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later
 * @version     1.2 [beta]
 * @support     http://olsa.me
 */
 
// Check to ensure this file is included in Joomla!
defined('_JEXEC') or die('Restricted access');

jimport('joomla.form.formfield');
$document = JFactory::getDocument();
$document->addStyleSheet(JURI::root(true) .'/modules/mod_multiplier/models/assets/style.css' );
$document->addScript(JURI::root(true) .'/modules/mod_multiplier/models/assets/repeater.js');
$document->addScript(JURI::root(true) .'/modules/mod_multiplier/models/assets/jquery-ui.min.js');


class JFormFieldRepeater extends JFormField {

    protected $type = 'repeater';

    public function getInput() {    
            
        return '<button class="btn btn-primary add">Add Item</button>
		        <div class="drag-parent">
				  <ol style="position:relative" id="outer-list"><!----></ol>
				</div>';
    }
}
?>