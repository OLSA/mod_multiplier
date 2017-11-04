<?php

/**
 * @package     mod_multiplier
 * @author      Sasa Oluic <sasaoluic@yahoo.com>
 * @copyright   Copyright (C) 2005 - 2014 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later
 * @version     1.0 [beta]
 * @support     http://olsa.me
 */

defined('_JEXEC') or die;

$doc	= JFactory::getDocument();
$app	= JFactory::getApplication();		

$doc->addStyleSheet(JURI::base().'modules/mod_multiplier/css/style.css');

?>

<ul>

<?php foreach ($rows as $row):?>

  <li>
    <span><?php echo $row->country;?></span>: <span><?php echo $row->city;?></span>    
  </li>
  
<?php endforeach; ?>

</ul>