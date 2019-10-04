<?php
/**
 * @version    $Id: jsninstaller.php 17696 2012-10-30 03:55:47Z cuongnm $
 * @package    JSN_Poweradmin
 * @author     JoomlaShine Team <support@joomlashine.com>
 * @copyright  Copyright (C) 2012 JoomlaShine.com. All Rights Reserved.
 * @license    GNU/GPL v2 or later http://www.gnu.org/licenses/gpl-2.0.html
 *
 * Websites: http://www.joomlashine.com
 * Technical Support:  Feedback - http://www.joomlashine.com/contact-us/get-support.html
 */

// No direct access to this file
defined('_JEXEC') or die('Restricted access');

// Never declare the class twice.
if (class_exists('JSNInstallerScript'))
{
	return;
}

// Disable notice and warning by default for our products.
// The reason for doing this is if any notice or warning appeared then handling JSON string will fail in our code.
error_reporting(E_ALL & ~E_WARNING & ~E_NOTICE);

/**
 * Class for finalizing JSN extension installation.
 *
 * @package  JSN_Poweradmin
 * @since    1.0.0
 */
abstract class JSNInstallerScript
{
}
