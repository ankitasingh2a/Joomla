<?php
/**
 * @copyright	@copyright	Copyright (c) 2018 dd_j_mod_slider. All rights reserved.
 * @license		http://www.gnu.org/licenses/gpl-2.0.html GNU/GPL
 */

// no direct access
defined('_JEXEC') or die;

// include the syndicate functions only once
require_once __DIR__ . '/helper.php';


$class_sfx = htmlspecialchars($params->get('class_sfx'));

require(JModuleHelper::getLayoutPath('mod_dd_j_mod_slider', $params->get('layout', 'default')));