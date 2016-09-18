<?php
/**
 * @version    CVS: 1.0.0
 * @package    Com_Activity_sort
 * @author     xyz <xyz@gmail.com>
 * @copyright  Copyright (C) 2015. All rights reserved.
 * @license    GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

// Include dependancies
jimport('joomla.application.component.controller');

JLoader::register('Activity_sortFrontendHelper', JPATH_COMPONENT . '/helpers/activity_sort.php');

// Execute the task.
$controller = JControllerLegacy::getInstance('Activity_sort');
$controller->execute(JFactory::getApplication()->input->get('task'));
$controller->redirect();
