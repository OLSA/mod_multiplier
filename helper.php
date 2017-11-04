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

class ModMultiplierHelper
{
	/**
	 * Retrieve rows of data
   */
	public static function &getRows(&$params)	{		
    
		$rows = json_decode('['.$params->get('content').']');
    
		return $rows;
	}
}