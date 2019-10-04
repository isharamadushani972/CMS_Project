<?php
/**
 * @version     $Id$
 * @package     JSN_Framework
 * @subpackage  Html
 * @author      JoomlaShine Team <support@joomlashine.com>
 * @copyright   Copyright (C) 2012 JoomlaShine.com. All Rights Reserved.
 * @license     GNU/GPL v2 or later http://www.gnu.org/licenses/gpl-2.0.html
 *
 * Websites: http://www.joomlashine.com
 * Technical Support:  Feedback - http://www.joomlashine.com/contact-us/get-support.html
 */

// No direct access to this file
defined('_JEXEC') or die('Restricted access');

// Shorten directory separator constant
defined('DS') OR define('DS', DIRECTORY_SEPARATOR);

// Define identified name and version
define('JSN_FRAMEWORK_IDENTIFIED_NAME',	'ext_framework');
define('JSN_FRAMEWORK_VERSION',			'2.1.8');

// Define required Joomla version
define('JSN_FRAMEWORK_REQUIRED_JOOMLA_VER', '3.0');

// Define necessary constants
define('JSN_EXT_UPGRADE_DETAILS_URL',	'https://www.joomlashine.com/versioning/product_upgrade.php');
define('JSN_EXT_VERSION_CHECK_URL',		'https://www.joomlashine.com/versioning/product_version.php?category=cat_extension');
define('JSN_EXT_DOWNLOAD_UPDATE_URL',	'https://www.joomlashine.com/index.php?option=com_lightcart&controller=remoteconnectauthentication&task=authenticate&tmpl=component&upgrade=yes');
define('JSN_EXT_POST_CLIENT_INFORMATION_URL',	'https://www.joomlashine.com/index.php?option=com_lightcart&view=clientinfo&task=clientinfo.getclientinfo');
define('JSN_EXT_TOKEN_CHECK_URL',	'https://www.joomlashine.com/index.php?option=com_lightcart&view=token&task=token.verify');
define('JSN_EXT_GET_TOKEN_URL',	'https://www.joomlashine.com/index.php?option=com_lightcart&view=token&task=token.gettoken');

define('JSN_EXT_DOWNLOAD_UPDATE_URL_V2',	'https://www.joomlashine.com/index.php?option=com_lightcart&controller=remoteconnectextensionauthentication&task=authenticate&tmpl=component&upgrade=yes');

define('JSN_PATH_FRAMEWORK',	dirname(__FILE__));
define('JSN_PATH_LIBRARIES',	JSN_PATH_FRAMEWORK . '/libraries');
define('JSN_URL_ASSETS',		JURI::root(true) . '/plugins/system/jsnframework/assets');

define('JSN_LASTUPDATE',		'jsn-lastupdate-');
define('JSN_LASTUPDATE_RESULT',	'jsn-lastupdate-result-');
define('CHECK_UPDATE_PERIOD',	86400);
define('REVIEW_POPUP_PERIOD',	1209600);

// Third-party templates
define('JSN_TEMPLATE_CLASSES_OVERWRITE',	JSN_PATH_FRAMEWORK . '/libraries/template/overwrites/');

// Define necessary variables.
$baseUrl	= JURI::base(true);
$rootUrl	= JURI::root(true);
$application = JFactory::getApplication();

// Add base path that point to folder contains javascript files of the framework
JSNHtmlAsset::addScriptPath('jsn', 'joomlashine/js');

// Prepare config
foreach (JSNVersion::$products AS $product)
{
	JSNHtmlAsset::prepare($product, !$application->isSite());
}

// Predefine script libraries
if (JSNVersion::isJoomlaCompatible('3.2'))
{
	JSNHtmlAsset::addScriptLibrary('jquery', '3rd-party/jquery/jquery.min.js');
}

if (JSNVersion::isJoomlaCompatible('3.0'))
{
	JSNHtmlAsset::addScriptLibrary('jquery.ui', '3rd-party/jquery-ui/js/jquery-ui-1.9.0.custom.min', array('jquery'));
}
else
{
	JSNHtmlAsset::addScriptLibrary('jquery.ui', '3rd-party/jquery-ui/js/jquery-ui-1.8.16.custom.min', array('jquery'));
}

$scripts = array(
	array( 'bootstrap', '3rd-party/bootstrap/js/bootstrap.min', array('jquery') ),
	array( 'jquery.cookie', '3rd-party/jquery-ck/jquery.ck', array('jquery') ),
	array( 'jquery.hotkeys', '3rd-party/jquery-hotkeys/jquery.hotkeys', array('jquery') ),
	array( 'jquery.jstorage', '3rd-party/jquery-jstorage/jquery.jstorage', array('jquery') ),
	array( 'jquery.jstree', '3rd-party/jquery-jstree/jquery.jstree', array('jquery') ),
	array( 'jquery.layout', '3rd-party/jquery-layout/js/jquery.layout-latest', array('jquery') ),
	array( 'jquery.tinyscrollbar', '3rd-party/jquery-tinyscrollbar/jquery.tinyscrollbar', array('jquery') ),
	array( 'jquery.topzindex', '3rd-party/jquery-topzindex/jquery.topzindex', array('jquery') ),
	array( 'jquery.contextMenu', '3rd-party/jquery-contextMenu/jquery.contextMenu', array('jquery', 'jquery.ui') ),
	array( 'jquery.daterangepicker', '3rd-party/jquery-daterangepicker/js/daterangepicker.jQuery.compressed', array('jquery', 'jquery.ui') ),
	array( 'jquery.scrollto', '3rd-party/jquery-scrollto/jquery.scrollTo', array('jquery') ),
	array( 'jquery.stickyfloat', '3rd-party/jquery-stickyfloat/stickyFloat', array('jquery') ),
	array( 'jquery.zeroclipboard', '3rd-party/jquery-zeroclipboard/ZeroClipboard', array('jquery') ),
	array( 'jquery.json', '3rd-party/jquery-json/jquery.json-2.3.min', array('jquery') ),
	array( 'jquery.tipsy', '3rd-party/jquery-tipsy/jquery.tipsy', array('jquery') ),
	array( 'jquery.jwysiwyg', '3rd-party/jquery-jwysiwyg/jquery.wysiwyg', array('jquery') ),
	array( 'jquery.jwysiwyg09', '3rd-party/jquery-jwysiwyg/jquery.wysiwyg-0.9', array('jquery') ),
	array( 'jquery.wysiwyg.colorpicker', '3rd-party/jquery-jwysiwyg/controls/wysiwyg.colorpicker', array('jquery', 'jquery.jwysiwyg09') ),
	array( 'jquery.wysiwyg.table', '3rd-party/jquery-jwysiwyg/controls/wysiwyg.table', array('jquery', 'jquery.jwysiwyg09') ),
	array( 'jquery.wysiwyg.cssWrap', '3rd-party/jquery-jwysiwyg/controls/wysiwyg.cssWrap', array('jquery', 'jquery.jwysiwyg09') ),
	array( 'jquery.wysiwyg.image', '3rd-party/jquery-jwysiwyg/controls/wysiwyg.image', array('jquery', 'jquery.jwysiwyg09') ),
	array( 'jquery.wysiwyg.link', '3rd-party/jquery-jwysiwyg/controls/wysiwyg.link', array('jquery', 'jquery.jwysiwyg09') ),
	array( 'jquery.select2', '3rd-party/jquery-select2/select2.min', array('jquery') ),
	array( 'jquery.tmpl', '3rd-party/jquery.tmpl/jquery.tmpl.min', array('jquery') ),
	array( 'jquery.colorpicker', '3rd-party/jquery-colorpicker/js/colorpicker', array('jquery') ),
	array( 'jquery.gradientPicker', '3rd-party/jquery-gradientpicker/jquery.gradientPicker', array('jquery', 'jquery.ui') ),
	array( 'jquery.te', '3rd-party/jquery-te/js/jquery-te-1.4.0.min', array('jquery') ),
	array( 'codemirror', '3rd-party/codemirror/lib/codemirror', array('jquery') ),
	array( 'codemirror.edit.matchbrackets', '3rd-party/codemirror/addon/edit/matchbrackets', array('codemirror') ),
	array( 'codemirror.hint.html', '3rd-party/codemirror/addon/hint/html-hint', array('codemirror') ),
	array( 'codemirror.hint.javascript', '3rd-party/codemirror/addon/hint/javascript-hint', array('codemirror') ),
	array( 'codemirror.hint.show', '3rd-party/codemirror/addon/hint/show-hint', array('codemirror') ),
	array( 'codemirror.selection.activeline', '3rd-party/codemirror/addon/selection/active-line', array('codemirror') ),
	array( 'codemirror.selection.markselection', '3rd-party/codemirror/addon/selection/mark-selection', array('codemirror') ),
	array( 'codemirror.mode.css', '3rd-party/codemirror/mode/css/css', array('codemirror') ),
	array( 'codemirror.mode.htmlmixed', '3rd-party/codemirror/mode/htmlmixed/htmlmixed', array('codemirror') ),
	array( 'codemirror.mode.javascript', '3rd-party/codemirror/mode/javascript/javascript', array('codemirror') ),
	array( 'react', '3rd-party/react/react.min', array() ),
	array( 'react-dom', '3rd-party/react/react-dom.min', array() ),
);

foreach ($scripts as $script)
{
	call_user_func_array(array('JSNHtmlAsset', 'addScriptLibrary'), $script);
}
