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

// Include the syndicate functions only once
require_once __DIR__ . '/helper.php';

$rows = &ModMultiplierHelper::getRows($params);

if (!count($rows)){
	return;
}

$moduleclass_sfx = htmlspecialchars($params->get('moduleclass_sfx'));

require JModuleHelper::getLayoutPath('mod_multiplier', $params->get('layout', 'default'));